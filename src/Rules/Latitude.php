<?php

namespace Slokee\Supporter\Rules;

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
            $fail(__('supporter::validation.latlong_numeric'));
            return;
        }

        if ($value < -90 || $value > 90) {
            $fail(__('supporter::validation.latitude_range'));
            return;
        }
        
        if (!preg_match('/^-?(90(\.0{1,8})?|[0-8]?\d(\.\d{1,8})?)$/', $value)) {
            $fail(__('supporter::validation.latlong_format'));
        }    
    }
}
