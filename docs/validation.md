# Validation Rules

This package provides various custom validation rules to extend Laravel's validation capabilities.

## Available Rules

- [AadhaarNumber](#aadhaarnumber) - Validates an Indian Aadhaar number.
- [DomainName](#domainname) - Ensures a valid domain format.
- [DrivingLicense](#drivinglicense) - Validates an Indian driving license number.
- [EmailDomain](#emaildomain) - Restricts email to specified domains.
- [GstNumber](#gstnumber) - Validates a GST number format.
- [IfscCode](#ifsccode) - Ensures a valid IFSC code.
- [IndianPhoneNumber](#indianphonenumber) - Validates Indian mobile numbers.
- [IndianVehicleNumber](#indianvehiclenumber) - Checks for a valid Indian vehicle registration number.
- [Latitude](#latitude) - Validates latitude values.
- [PanNumber](#pannumber) - Ensures a valid PAN number.
- [PassportNumber](#passportnumber) - Validates an Indian passport number.
- [Pincode](#pincode) - Ensures a valid Indian postal code.
- [Subdomain](#subdomain) - Checks for valid subdomains and reserved names.
- [VerifyCurrentPassword](#verifycurrentpassword) - Ensures the provided password matches the user's current password.
- [VoterID](#voterid) - Validates an Indian voter ID format.

---

### AadhaarNumber
Validates if the provided value is a valid Indian Aadhaar number.

**Usage:**
```php
use Slokee\Supporter\Rules\AadhaarNumber;

$request->validate([
    'aadhaar' => ['required', new AadhaarNumber()],
]);
```

---

### EmailDomain
Ensures the email belongs to specified allowed domains.

**Usage:**
```php
use Slokee\Supporter\Rules\EmailDomain;

$request->validate([
    'email' => ['required', 'email', new EmailDomain(['example.com', 'test.com'])],
]);
```

---

### VerifyCurrentPassword
Checks if the provided password matches the current user's password.

**Usage:**
```php
use Slokee\Supporter\Rules\VerifyCurrentPassword;

$request->validate([
    'current_password' => ['required', new VerifyCurrentPassword(auth()->user())],
]);
```

---

### Subdomain
Validates that the subdomain follows the correct format and is not reserved.

**Usage:**
```php
use Slokee\Supporter\Rules\Subdomain;

$request->validate([
    'subdomain' => ['required', new Subdomain()],
]);
```

---

For other rules, simply instantiate them like:
```php
$request->validate([
    'field_name' => ['required', new RuleClass()],
]);
```
Replace `RuleClass` with any of the available rules above.

