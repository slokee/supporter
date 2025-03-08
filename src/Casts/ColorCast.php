<?php

namespace Slokee\Supporter\Casts;

use InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

/**
 * Handles hex color formatting for model attributes.
 */
class ColorCast implements CastsAttributes
{
    /**
     * Ensures the color value has a "#" prefix when retrieved.
     */
    public function get(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        return $value && !str_starts_with($value, '#') ? "#{$value}" : $value;
    }

    /**
     * Stores the color in lowercase without the "#" prefix.
     *
     * @throws InvalidArgumentException If the value is not a valid hex color.
     */
    public function set(Model $model, string $key, mixed $value, array $attributes): mixed
    {
        if (is_null($value)) {
            return null;
        }

        if (!preg_match('/^#?[a-fA-F0-9]{6}$/', $value)) {
            throw new InvalidArgumentException("The value provided for {$key} is not a valid color.");
        }

        return strtolower(ltrim($value, '#'));
    }
}
