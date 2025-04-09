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
        if (! is_numeric($value)) {
            $fail('The :attribute must be a valid numeric value.');

            return;
        }

        if ($value < -90 || $value > 90) {
            $fail('The :attribute must be between -90 and 90.');

            return;
        }

        if (! preg_match('/^-?(90(\.0{1,8})?|[0-8]?\d(\.\d{1,8})?)$/', $value)) {
            $fail('The :attribute format is invalid. It must have up to 8 decimal places.');
        }
    }
}
