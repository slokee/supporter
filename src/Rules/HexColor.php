<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class HexColor implements ValidationRule
{
    /**
     * Validate the attribute.
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^#?([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $value)) {
            $fail("The {$attribute} must be a valid hex color.");
        }
    }
}