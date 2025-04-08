# Enums

The `slokee/supporter` package includes useful enum classes to help maintain consistent values across your application.

## Available Enums

- [HtmlNamedColor](#htmlnamedcolor) - Represents all standard HTML named colors.

---

## HtmlNamedColor

The `HtmlNamedColor` enum provides a list of all standard HTML color names, allowing you to validate or assign color values in a consistent and standardized manner.

### Usage

You can use the enum to validate or reference named colors in your application:

```php
use Slokee\Supporter\Enums\HtmlNamedColor;

$color = HtmlNamedColor::Red;
echo $color->value; // "red"
```

You can also get a list of all available color values:

```php
HtmlNamedColor::values();
```

### Related Rule

See the [`NamedColor`](validation.md#htmlnamedcolor) validation rule to enforce usage of valid named colors in user input.

