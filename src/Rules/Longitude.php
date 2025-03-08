<?php

namespace App\Rules;

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
            $fail(__('supporter::validation.latlong_numeric'));
            return;
        }
        
        if (!preg_match('/^-?\d{1,3}(\.\d{1,8})?$/', $value)) {
            $fail(__('supporter::validation.latlong_format'));
            $fail('supporter::validation.')->translate();
            return;
        }
        
        if ($value < -180 || $value > 180) {
            $fail(__('supporter::validation.longitude_range'));
        }
    }
}
