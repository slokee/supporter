<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class HexColor implements ValidationRule
{
    /**
     * Validate the Hex Color code it will support 3 and 6 digit code.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! preg_match('/^#?([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $value)) {
            $fail("The {$attribute} must be a valid hex color.");
        }
    }
}
