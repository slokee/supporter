<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class GstNumber implements ValidationRule
{
    /**
     * Validate if the given value is a valid GST number.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (strlen($value) !== 15) {
            $fail('The :attribute must be 15 characters');
        }

        if(! preg_match('/^[A-Z]{2}[0-9A-Z]{10}[A-Z]{1}[0-9A-Z]{1}$/', $value)) {
            $fail('The :attribute is not a valid GST number.');
        }
    }
}
