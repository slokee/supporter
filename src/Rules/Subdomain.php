<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Subdomain implements ValidationRule
{
    /**
     * Validate if the given value is a valid subdomain.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $value = strtolower($value);

        $reservedSubdomains = config('supporter.reserved_subdomains', []);

        // Check for reserved subdomains
        if (in_array($value, $reservedSubdomains, true)) {
            $fail('The :attribute cannot be a reserved subdomain (e.g., www, admin, mail).');
            return;
        }

        // Check length constraint (1-63 characters)
        if (strlen($value) > 63 || strlen($value) < 1) {
            $fail('The :attribute must be between 1 and 63 characters.');
            return;
        }
        
        // Validate subdomain format (only lowercase letters, numbers, and hyphens, but no leading or trailing hyphens)
        if (!preg_match('/^[a-z0-9]+(?:-[a-z0-9]+)*$/', $value)) {
            $fail('The :attribute must contain only lowercase letters, numbers, and hyphens, without leading or trailing hyphens.');
        }
    }
}
