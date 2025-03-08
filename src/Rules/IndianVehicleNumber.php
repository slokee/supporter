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
        $pattern = '/^[A-Z]{2}[-\s]?\d{1,2}[-\s]?[A-Z]{0,3}[-\s]?\d{1,4}$/i';

        if (!preg_match($pattern, strtoupper($value))) {
            $fail(__('supporter::validation.indian_vehicle_number'));
        }
    }
}
