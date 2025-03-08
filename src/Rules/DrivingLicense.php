<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DrivingLicense implements ValidationRule
{
    /**
     * Validate the given driving license number.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^[A-Z]{2}[\s\-\/]?\d{2}[\s\-\/]?\d{11}$/', $value)) {
            $fail(__('supporter::validation.driving_license'));
        }
    }
}
