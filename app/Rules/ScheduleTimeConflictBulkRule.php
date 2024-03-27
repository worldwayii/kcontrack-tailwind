<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Scheduler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Models\Employee;

class ScheduleTimeConflictBulkRule implements ValidationRule
{
    public function __construct(protected $employeeUuids, protected $dates, protected $start)
    {

    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
{
    Log::info(["about to validate time conflict"]);
    $employeeUuids = $this->employeeUuids;
    $employeeIds = Employee::whereIn('uuid', $employeeUuids)->pluck('id')->toArray();
    $dates = is_array($this->dates) ? $this->dates : [$this->dates];
    $start = $this->start;
    $end = $value;

    foreach ($dates as $date) {
        $startAt = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($start);
        $endAt = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($end);

        $conflictingSchedules = Scheduler::whereIn('employee_id', $employeeIds)
            ->where(function ($query) use ($startAt, $endAt) {
                $query->whereBetween('start_at', [$startAt, $endAt])
                    ->orWhereBetween('end_at', [$startAt, $endAt])
                    ->orWhere(function ($q) use ($startAt, $endAt) {
                        $q->where('start_at', '<=', $startAt)
                            ->where('end_at', '>=', $endAt);
                    });
            })->get();

        if ($conflictingSchedules->isNotEmpty()) {
            $conflictDetails = $conflictingSchedules->map(function ($schedule) {
                return "Employee Name: {$schedule->employee->getFullNameAttribute()}, Start Time: {$schedule->start_at->format('g:i a')}, End Time: {$schedule->end_at->format('g:i a')}";
            })->implode('; ');

            $fail("The schedule conflicts with the following existing schedule(s): $conflictDetails");
        }
    }
}

}
