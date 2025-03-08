<?php

namespace Slokee\Supporter\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class EmailDomain implements ValidationRule
{
    /**
     * @var array $allowedDomains List of allowed email domains for validation.
     */
    protected $allowedDomains;

    /**
     * Initialize the rule with allowed email domains.
     */
    public function __construct(array | string $allowedDomains)
    {
        $this->allowedDomains = is_array($allowedDomains) ? $allowedDomains : [$allowedDomains];
    }


    /**
     * Validate if the email belongs to an allowed domain.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $domain = substr(strrchr($value, "@"), 1);

        if (!in_array($domain, $this->allowedDomains)) {
            $fail(__('supporter::validation.email_domain'));
        }
    }
}
