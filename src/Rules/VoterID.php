<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class VoterID implements ValidationRule
{
    /**
     * Validate the given value is a valid Voter ID format.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^[A-Z]{3}[0-9]{7}$/i', $value)) {
            $fail('The :attribute is not a valid Voter ID.');
        }
    }
}
