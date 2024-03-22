<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class TimeHasPassedRule implements ValidationRule
{

    public function __construct(protected $start, protected $end)
    {
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $dateString =  is_array($value) ? $value[0] : $value;
        $inputDate = Carbon::createFromFormat('d/m/Y', $dateString);

        $now = Carbon::now();

        $scheduleStartDateTime = $inputDate->clone()->setTimeFromTimeString($this->start);
        $scheduleEndDateTime = $inputDate->clone()->setTimeFromTimeString($this->end);

        if (!$now->lt($scheduleStartDateTime) || !$now->lt($scheduleEndDateTime)) {
            $fail("The selected time range ($this->start - $this->end) has passed for today ". $inputDate->format('l'));
        }
    }
}
