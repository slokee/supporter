<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AadhaarNumber implements ValidationRule
{
    /**
     * Validate the given Aadhaar number.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $value = str_replace(' ', '', $value);

        if (strlen($value) !== 12 || ! ctype_digit($value)) {
            $fail('The :attribute must be a valid 12-digit Aadhaar number.');
        }
    }
}
