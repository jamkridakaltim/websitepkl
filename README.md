# Website Jamkridakaltim

## Server Requirement
1. PHP >= 8.0 (and meet [Laravel 9.x server requirements](https://laravel.com/docs/9.x/deployment#server-requirements)),
2. MySQL or MariaDB database,

## Instalasi
1. Clone Repository : `git@github.com:jamkridakaltim/websitepkl.git`
2. `$ cd webservice`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Buat Database  
   (dengan perintah: `$ mysqladmin -urootuser -p create websitepkl`)
7. Set database credentials on `.env` file
8. `$ php artisan migrate`
9. `$ php artisan serve`
10. login with account
    - `username: administrator`
    - `password: password`

## Cara Membuat fitur
1. Membuat branch baru menggunakan branch `dev` dengan format
`feature-{nama-fitur}`
2. Buat Pull request dari `feature-{nama-fitur}` ke `dev`
