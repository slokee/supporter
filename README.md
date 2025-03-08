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

## Contribution

We welcome contributions! Please check the [Contribution Guide](docs/contribution.md) for more details on how to get involved.

## License

This package is open-source software licensed under the [MIT license](LICENSE).

## Reporting Issues

If you encounter a bug or have a feature request, please open an issue on GitHub with detailed information.

## Contact

For reporting bugs or further inquiries, you can reach out via email at: **[contact@slokee.com](mailto:contact@slokee.com)**
