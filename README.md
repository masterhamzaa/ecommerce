# Laravel Ecommerce project


This project runs with Laravel version 10x.

## Getting started

Assuming you've already installed on your machine: PHP (>= 7.0.0), [Laravel](https://laravel.com), [Composer](https://getcomposer.org) and [Node.js](https://nodejs.org).

``` bash
# install dependencies
composer install
npm install

# create .env file and generate the application key
cp .env.example .env
php artisan key:generate


#migration
php artisan migrate 

#generate admin
php artisan db:seed --class=CreateAdminUserSeeder

# build CSS and JS assets
npm run dev




```

Then launch the server:

``` bash
php artisan serve
```

The Laravel sample project is now up and running! Access it at http://localhost:8000.


