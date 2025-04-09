<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class IfscCode implements ValidationRule
{
    /**
     * Validate if the given value is a valid IFSC code.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! preg_match('/^[A-Z]{4}0[A-Z0-9]{6}$/', $value)) {
            $fail('The :attribute is not a valid IFSC code.');
        }
    }
}
