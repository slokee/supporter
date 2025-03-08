# Eloquent Model Casts

The `slokee/supporter` package provides custom Eloquent model casts to enhance data transformation when storing and retrieving attributes.

## Available Casts

- [ColorCast](#colorcast) - Ensures color values are properly formatted.

---

## ColorCast

The `ColorCast` class manages color values, ensuring they are consistently formatted.

### Usage

Define the cast in your model's `$casts` property:

```php
use Slokee\Supporter\Casts\ColorCast;

class ExampleModel extends Model
{
    protected $casts = [
        'color' => ColorCast::class,
    ];
}
