<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Pincode implements ValidationRule
{
    /**
     * Validate if the given value is a valid postal PIN code.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pattern = '/^[1-9][0-9]{5}$/';

        // Check if the PIN code matches the pattern
        if (!preg_match($pattern, $value)) {
            $fail('The :attribute must be a valid 6-digit Indian PIN code.');
        }
    }
}
