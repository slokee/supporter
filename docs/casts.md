# Eloquent Model Casts

The `slokee/supporter` package provides custom Eloquent model casts to enhance data transformation when storing and retrieving attributes.

## Available Casts

- [HexColorCast](#hexcolorcast) - Validates and formats hex color values.
- [EncryptedCast](#encryptedcast) - Automatically encrypts and decrypts model values.


---

## HexColorCast

The `HexColorCast` handles hex color validation and normalization. It ensures values are valid hex colors and stores them in a consistent format.

### Usage

```php
use Slokee\Supporter\Casts\HexColorCast;

class ExampleModel extends Model
{
    protected $casts = [
        'background_color' => HexColorCast::class,
    ];
}
```

---

## EncryptedCast

The `EncryptedCast` automatically encrypts values when saving to the database and decrypts them when retrieving.

### Usage

```php
use Slokee\Supporter\Casts\EncryptedCast;

class ExampleModel extends Model
{
    protected $casts = [
        'sensitive_data' => EncryptedCast::class,
    ];
}
```