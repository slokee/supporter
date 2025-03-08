# Laravel Supporter

Laravel Supporter is a powerful utility package designed to enhance development speed by providing ready-to-use code snippets. This package helps developers streamline their workflow by reducing repetitive coding tasks, ensuring cleaner and more efficient Laravel applications.

## Installation

```sh
composer require slokee/supporter
```

## Configuration

Publish the configuration file (if required):

```sh
php artisan vendor:publish --provider="Slokee\Supporter\SupportServiceProvider"
```

## Features

- [Validation Rules](docs/validation.md) - Custom validation rules to extend Laravel's validation capabilities.
- [Casts](docs/casts.md) - Custom Eloquent model casts for better data handling.
- Scopes:
  - [Local Scopes](docs/local-scopes.md) - Predefined local model scopes for common queries.
  - [Global Scopes](docs/global-scopes.md) - Global query scopes for automatic model filtering.
- [Utilities](docs/utilities.md) - Additional helper functions to simplify common operations.

## Usage

Refer to the individual documentation files for detailed usage examples.

## License

This package is open-source software licensed under the [MIT license](LICENSE).
