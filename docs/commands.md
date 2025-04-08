# Artisan Commands

The `slokee/supporter` package includes custom Artisan commands to automate the creation of common application files.

## Available Commands

- [make:service](#makeservice) - Generate a service class.
- [make:repository](#makerepository) - Generate a repository and its interface.

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

