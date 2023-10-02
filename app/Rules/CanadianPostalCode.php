<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CanadianPostalCode implements Rule
{
    public function passes($attribute, $value): bool|int
    {
    // Define your logic to validate Canadian postal codes
    // For simplicity, let's assume a basic format like "A1A 1A1"

    return preg_match("/^[ABCEGHJ-NPRSTVXY][0-9][ABCEGHJ-NPRSTV-Z] [0-9][ABCEGHJ-NPRSTV-Z][0-9]$/", $value);
    }

    public function message(): string
    {
        return 'The :attribute must be a valid Canadian postal code.';
    }
}
