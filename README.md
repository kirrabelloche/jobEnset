## Laravel Roles Permissions Admin - Spatie version - Infintes Solution

__Avril 2020__: this project was created in 2021 as Laravel 8.0 version

- - - - -

This is a Laravel 8 adminpanel starter project with roles-permissions management based on [Spatie Laravel-permission package](https://github.com/spatie/laravel-permission), [CoreUI](https://coreui.io) and [Datatables.net](https://datatables.net).


![Roles Permissions screenshot](https://laraveldaily.com/wp-content/uploads/2019/10/laravel-roles-permissions-users.png)

![Roles Permissions screenshot 02](https://laraveldaily.com/wp-content/uploads/2019/10/laravel-roles-permissions-roles.png)

## Usage

This is not a package - it's a full Laravel project that you should use as a starter boilerplate, and then add your own custom functionality.

- Clone the repository with `git clone`
- Copy `.env.example` file to `.env` and edit database credentials there
- Run `composer install`
- Run `cp .env.example .env`
- Run `php artisan key:generate`
- Run `php artisan migrate --seed` (it has some seeded data - see below)
- That's it: launch the main URL and login with default credentials `admin@cnoumbo.com` - `password`

This boilerplate has one role (`administrator`), one permission (`users_manage`) and one administrator user.

With that user you can create more roles/permissions/users, and then use them in your code, by using functionality like `Gate` or `@can`, as in default Laravel, or with help of Spatie's package methods.

