# Laravel SimpleLoginLogout Example

[![Laravel](https://laravel.com/img/logomark.min.svg) ![Laravel](https://laravel.com/img/logotype.min.svg)](https://laravel.com)

Laravel SimpleLoginLogout is a source code of Simple Login and logout(Authentication) for Laravel applications 

  - Login, Logout
  - Database Seed
  - auth middleware usage
  - routing
  - layouts, views
  - laravel collective(Form, Html)
### Installation
#### Requirement
- Laravel 5.8
- PHP 7.1 or greater
- MySQL 5.5 or greater
- Git
### Step By Step
1. Clone this repository and Install the dependencies and devDependencies.

```sh
$ git clone https://github.com/mostofa62/laravel-simple-authentication
$ cd laravel-simple-authentication
$ composer install
```
After install dependencies, don't forget to download the .env files from laravel 
gist: https://github.com/laravel/laravel/blob/master/.env.example

2. Run migration
```sh
$ php artisan migrate
```
3. Run User DB Seed
```sh
$ php artisan db:seed --class=UsersTableSeeder
```
You can get the user name and password at this UsersTableSeeder class

### Some Important Link
- https://scotch.io/tutorials/simple-and-easy-laravel-login-authentication
- https://laravel.com
- http://arkylus.com
- https://dillinger.io
