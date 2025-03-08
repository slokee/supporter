<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Latitude implements ValidationRule
{
    /**
     * Validate the given value is a valid latitude coordinate.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!is_numeric($value)) {
            $fail('supporter::validation.latlong_numeric')->translate();
            return;
        }
        
        if (!preg_match('/^-?\d{1,2}(\.\d{1,8})?$/', $value)) {
            $fail('supporter::validation.latlong_format')->translate();
            return;
        }
        
        if ($value < -90 || $value > 90) {
            $fail('supporter::validation.latitude_range')->translate();
        }
    }
}
