<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Scheduler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use App\Models\Employee;

class CheckScheduleConflictBulkRule implements ValidationRule
{
    public function __construct(protected array $employeeIds, protected $originalDate = null)
    {
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {   $employees = Employee::whereIn('uuid', $this->employeeIds)->pluck('id')->toArray();
        foreach ($value as $date) {
            $date = Carbon::createFromFormat('d/m/Y', $date);
            Log::info(['employee-ids-in-rule-class' => $employees]);
            $conflictingSchedule = Scheduler::whereIn('employee_id', $employees)
                ->whereDate('start_at', $date->toDateString())
                ->first();

            if ($conflictingSchedule) {
                $fail('There is a schedule conflict for the date: ' . $date->format('l') . ' of ' . $date->toDateString(). ' for '. $conflictingSchedule->employee->getFullNameAttribute());
            }
        }
    }
}
