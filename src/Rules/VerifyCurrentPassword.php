<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;

class VerifyCurrentPassword implements ValidationRule
{
    /**
     * @var mixed The user instance whose password needs verification.
     */
    private $user;

    /**
     * Initialize the rule with the user instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Validate if the provided password matches the user's current password.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! Hash::check($value, $this->user->password)) {
            $fail('The current password does not match.');
        }
    }
}
