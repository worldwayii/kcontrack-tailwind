<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Scheduler;
use Carbon\Carbon;

class CheckScheduleConflictRule implements ValidationRule
{
    public function __construct(protected $employeeId)
    {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        foreach ($value as $date) {
            // Check if there's an existing schedule for the same employee on this date
            $date = Carbon::createFromFormat('d/m/Y', $date);

            $conflictingSchedule = Scheduler::where('employee_id', $this->employeeId)
                ->whereDate('start_at', $date->toDateString())
                ->first();

            if ($conflictingSchedule) {
                // Conflict found
                $fail('There is a schedule conflict for the date: ' . $date);
            }
        }
    }

}
