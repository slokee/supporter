# Artisan Commands

The `slokee/supporter` package includes custom Artisan commands to automate the creation of common application files.

## Available Commands

- [make:service](#makeservice) - Generate a service class.
- [make:repository](#makerepository) - Generate a repository and its interface.
- [make:directive](#makedirective) - Generate a custom Blade directive class.

---

## make:service

Generates a new service class inside the `app/Services` directory.

### Usage

```sh
php artisan make:service User
```

### Result

Creates a new file:

```
app/Services/UserService.php
```

---

## make:repository

Generates a new repository and its corresponding interface in the `app/Repositories` directory.

### Usage

```sh
php artisan make:repository User
```

### Result

Creates two files:

```
app/Repositories/UserRepository.php
app/Repositories/UserRepositoryInterface.php
```

These files provide a structured approach for managing data persistence logic using the Repository Pattern.

---

## make:directive
Generates a new custom Blade directive class that implements the package’s BladeDirectiveInterface.

### Usage

```sh
php artisan make:directive Demo
```

### Result
The generated class will look like:

```php
<?php
use Slokee\Supporter\Contracts\BladeDirectiveInterface;
use Illuminate\Support\Facades\Blade;

class Demo implements BladeDirectiveInterface
{
    public static function register(): void
    {
        Blade::directive('demo', function ($expression) {
            return "";
        });
    }
}
```
You have register this into AppServiceprovide boot method like below

```php
public function boot(): void
{
    Demo::register();
}
```