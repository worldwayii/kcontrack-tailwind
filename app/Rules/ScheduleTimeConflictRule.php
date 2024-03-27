<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Scheduler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ScheduleTimeConflictRule implements ValidationRule
{

    public function __construct(protected $employeeId, protected $dates, protected $start, protected $originalDate = null)
    {

    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $employeeId = $this->employeeId;
        $dates = is_array($this->dates) ? $this->dates : [$this->dates];
        $start = $this->start;
        $end = $value;

        foreach ($dates as $date) {

            $startAt = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($start);
            $endAt = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($end);
            if($this->originalDate != null){
                $originalDate = Carbon::createFromFormat('d/m/Y', $this->originalDate);
                $conflicts = Scheduler::where('employee_id', $employeeId)
                ->where(function ($query) use ($startAt, $endAt) {
                    $query->whereBetween('start_at', [$startAt, $endAt])
                    ->orWhereBetween('end_at', [$startAt, $endAt])
                    ->orWhere(function ($q) use ($startAt, $endAt) {
                        $q->where('start_at', '<=', $startAt)
                            ->where('end_at', '>=', $endAt);
                    });
                })->whereDate('start_at', '!=', $originalDate)->exists();
            }else{
                $conflicts = Scheduler::where('employee_id', $employeeId)
                ->where(function ($query) use ($startAt, $endAt) {
                    $query->whereBetween('start_at', [$startAt, $endAt])
                    ->orWhereBetween('end_at', [$startAt, $endAt])
                    ->orWhere(function ($q) use ($startAt, $endAt) {
                        $q->where('start_at', '<=', $startAt)
                            ->where('end_at', '>=', $endAt);
                    });
                })->exists();
            }


                if($conflicts){
                    $fail("The schedule conflicts with an existing schedule or does not have a 30-minute gap. Conflict: Start Time - ". $startAt->clone()->format('g:i a') .', End Time - '. $endAt->clone()->format('g:i a'));
                }

    }
}


}
