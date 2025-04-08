<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PanNumber implements ValidationRule
{
    /**
     * Validate if the given value is a valid PAN number.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the PAN number is exactly 10 characters long
        if (strlen($value) !== 10) {
            $fail('The :attribute must be exactly 10 characters.');
            return;
        }
        
        // Validate format: 5 uppercase letters, 4 digits, 1 uppercase letter
        if (!preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/', $value)) {
            $fail('The :attribute is not a valid PAN number.');
        }
    }
}
