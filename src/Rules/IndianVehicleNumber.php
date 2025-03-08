<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class IndianVehicleNumber implements ValidationRule
{
    /**
     * Validate if the given value is a valid Indian vehicle registration number.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^[A-Z]{2}[0-9]{2}[A-Z]{1,2}[0-9]{4}$/', strtoupper($value))) {
            $fail(__('supporter::validation.indian_vehicle_number'));
        }
    }
}
