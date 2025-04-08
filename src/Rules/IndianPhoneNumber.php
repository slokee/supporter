<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class IndianPhoneNumber implements ValidationRule
{
    /**
     * Validate if the given value is a valid Indian phone number.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pattern = '/^(?:\+91\s?|91)?[6789]\d{9}$/';

        if(! preg_match($pattern, $value)) {
            $fail('The :attribute must be a valid Indian phone number.');
        }
    }
}
