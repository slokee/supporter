<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Longitude implements ValidationRule
{
    /**
     * Validate the given value is a valid longitude coordinate.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!is_numeric($value)) {
            $fail('The :attribute must be a valid numeric value.');
            return;
        }
        
        if ($value < -180 || $value > 180) {
            $fail('The :attribute must be between -180 and 180.');
            return;
        }

        if (!preg_match('/^-?(180(\.0{1,8})?|1[0-7]\d(\.\d{1,8})?|[0-9]{1,2}(\.\d{1,8})?)$/', $value)) {
            $fail('The :attribute format is invalid. It must have up to 8 decimal places.');
        }
    }
}
