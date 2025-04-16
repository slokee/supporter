# Blade Directives

The `slokee/supporter` package provides custom Blade directives that simplify view logic and enhance HTML rendering directly within your Blade files.

## Available Directives

- [listify](#listify) – Converts plain text with newlines into a HTML list.

---

## Configuration

Blade directives are automatically registered from the package by default.  
To control this behavior, update the following config in your `config/supporter.php` file:

```php
'register_all_blade_directives' => env('REGISTER_ALL_BLADE_DIRECTIVES', true),
```

To disable auto-registration of all directives, add the following line to your `.env` file:

```
REGISTER_ALL_BLADE_DIRECTIVES=false
```

You can then manually register only the directives you need.

---

## Example Usage

### listify

**Usage:**

```blade
@listify($text, 'ul', 'ul-class', 'li-class')
```

**Result (for `$text = "One\nTwo"`):**

```html
<ul class="ul-class">
    <li class="li-class">One</li>
    <li class="li-class">Two</li>
</ul>
```

By default, the directive uses `<ul>` if the tag is not specified.
