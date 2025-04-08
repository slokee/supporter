<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DomainName implements ValidationRule
{
    /**
     * Validate the given domain name.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $pattern = '/^(?!:\/\/)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,}$/';

        if (!preg_match($pattern, $value)) {
            $fail('The :attribute must be a valid domain name (e.g., example.com).');
        }
    }
}
