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
        if (!preg_match('/^[A-Z]{2}-[0-9]{1}[A-Z]{2}-[0-9]{6}-[0-9]{4}$/', $value)) {
            $fail('supporter::validation.driving_license')->translate();
        }
    }
}
