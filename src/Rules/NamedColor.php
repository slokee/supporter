<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Slokee\Supporter\Enums\HtmlNamedColor;

class NamedColor implements ValidationRule
{
    /**
     * Validate againts named color supported by HTML standards.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! in_array(strtolower($value), HtmlNamedColor::values())) {
            $fail("The {$attribute} must be a valid named HTML color.");
        }
    }
}
