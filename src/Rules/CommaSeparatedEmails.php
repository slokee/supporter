<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CommaSeparatedEmails implements ValidationRule
{
    /**
     * Validate the given input for comma seperated valid emails.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $emails = array_map('trim', explode(',', $value));

        foreach ($emails as $email) {
            if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $fail("The {$attribute} contains an invalid email address: {$email}");

                return;
            }
        }
    }
}
