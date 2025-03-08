<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class PassportNumber implements ValidationRule
{
    /**
     * Validate if the given value is a valid passport number.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $value = str_replace(' ', '', $value);

        $pattern = '/^[A-Z][1-9][0-9]\d{4}$/';

        if (!preg_match($pattern, $value)) {
            $fail(__('supporter::validation.passport_number'));
        }
    }
}
