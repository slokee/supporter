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
- [Commands](docs/commands.md) - Artisan commands to generate services, repositories, and more.
- Scopes:
  - [Local Scopes](docs/local-scopes.md) - Predefined local model scopes for common queries.
  - [Global Scopes](docs/global-scopes.md) - Global query scopes for automatic model filtering.
- [Utilities](docs/utilities.md) - Additional helper functions to simplify common operations.
- [Enums](docs/enums.md) - Enum classes to standardize values like named colors.
- [Blade Diretives](docs/blade-directives.md) - Common Custom Blade directives for faster development. 

## Usage

Refer to the individual documentation files for detailed usage examples.


## Publishing Stubs and Configurations

To customize stub files or configurations used by the commands, you can publish them using the following tags:

```sh
# Publish configuration file
php artisan vendor:publish --tag=supporter-config

# Publish translation files
php artisan vendor:publish --tag=supporter-translations

# Publish stub files
php artisan vendor:publish --tag=supporter-stubs
```

This will publish:

- `config/supporter.php`
- `stubs/supporter/*`

## Contribution

We welcome contributions! Please check the [Contribution Guide](docs/contribution.md) for more details on how to get involved.

## License

This package is open-source software licensed under the [MIT license](LICENSE).

## Reporting Issues

If you encounter a bug or have a feature request, please open an issue on GitHub with detailed information.

## Contact

For reporting bugs or further inquiries, you can reach out via email at: **[contact@slokee.com](mailto:contact@slokee.com)**
