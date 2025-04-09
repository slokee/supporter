# Validation Rules

This package provides various custom validation rules to extend Laravel's validation capabilities.

## Available Rules

- [AadhaarNumber](#general) - Validates an Indian Aadhaar number.
- [CommaSeparatedEmails](#general) - Validates comma-separated email addresses.
- [DomainName](#general) - Ensures a valid domain format.
- [DrivingLicense](#general) - Validates an Indian driving license number.
- [EmailDomain](#emaildomain) - Restricts email to specified domains.
- [GstNumber](#general) - Validates a GST number format.
- [HexColor](#hexcolor) - Ensures the value is a valid hexadecimal color.
- [HtmlNamedColor](#htmlnamedcolor) - Validates that the value is one of the official HTML named colors.
- [IfscCode](#general) - Ensures a valid IFSC code.
- [IndianPhoneNumber](#general) - Validates Indian mobile numbers.
- [IndianVehicleNumber](#general) - Checks for a valid Indian vehicle registration number.
- [Latitude](#general) - Validates latitude values.
- [PanNumber](#general) - Ensures a valid PAN number.
- [PassportNumber](#general) - Validates an Indian passport number.
- [Pincode](#general) - Ensures a valid Indian postal code.
- [Subdomain](#general) - Checks for valid subdomains and reserved names.
- [VerifyCurrentPassword](#verifycurrentpassword) - Ensures the provided password matches the user's current password.
- [VoterID](#general) - Validates an Indian voter ID format.

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

### HexColor
Validates that the value is a valid hexadecimal color code (e.g., `#fff`, `#ffffff`).

**Usage:**
```php
use Slokee\Supporter\Rules\HexColor;

$request->validate([
    'color' => ['required', new HexColor()],
]);
```

---

### HtmlNamedColor
Validates that the value is one of the official HTML named colors (e.g., `red`, `blue`, `lightgray`).

**Usage:**
```php
use Slokee\Supporter\Rules\HtmlNamedColor;

$request->validate([
    'color' => ['required', new HtmlNamedColor()],
]);
```

This rule is powered by the [`HtmlNamedColor`](enums.md#htmlnamedcolor) Enum.

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
### General

For other rules, simply instantiate them like:
```php
$request->validate([
    'field_name' => ['required', new RuleClass()],
]);
```
Replace `RuleClass` with any of the available rules above.

