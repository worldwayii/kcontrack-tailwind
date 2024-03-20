<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Scheduler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ScheduleTimeConflictRule implements ValidationRule
{

    public function __construct(protected $employeeId, protected $dates, protected $start)
    {

    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        Log::info(["about to validate time conflict"]);
        $employeeId = $this->employeeId;
        $dates = $this->dates;
        $start = $this->start;
        $end = $value;
        Log::info(["about to validate time conflict" => $dates]);

        foreach ($dates as $date) {

            $startAt = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($start);
            $endAt = Carbon::createFromFormat('d/m/Y', $date)->setTimeFromTimeString($end);

            $conflicts = Scheduler::where('employee_id', $employeeId)
                ->where(function ($query) use ($startAt, $endAt) {
                    $query->whereBetween('start_at', [$startAt, $endAt])
                    ->orWhereBetween('end_at', [$startAt, $endAt])
                    ->orWhere(function ($q) use ($startAt, $endAt) {
                        $q->where('start_at', '<=', $startAt)
                            ->where('end_at', '>=', $endAt);
                    });
                })->exists();
                if($conflicts){
                    $fail("The schedule conflicts with an existing schedule or does not have a 30-minute gap. Conflict: Start Time - ". $startAt->clone()->format('g:i a') .', End Time - '. $endAt->clone()->format('g:i a'));
                }
            $nearestSchedule = Scheduler::where('employee_id', $employeeId)
                ->where('start_at', '<=', $endAt)
                ->orderBy('start_at', 'desc')
                ->first();

            if ($nearestSchedule) {
                $gapInSeconds = $startAt->diffInSeconds($nearestSchedule->end_at);
            if ($conflicts || $gapInSeconds < 1800) {
                $fail("The schedule conflicts with an existing schedule or does not have a 30-minute gap. Conflict: Start Time - $startAt, End Time - $endAt");
            }
        }

    }
}


}
