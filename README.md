# Laravel Simple Blog
Simple blog app made with Laravel 5.3

## 1. Requirements

- `composer` and `npm` should be installed

- `mbstring` PHP extension is required

## 2. Install

- Run `composer install` for downloading required packages locally

- Create `.env` file based on `.env.example`

- Generate Laravel app key `php artisan key:generate`

- Update `.env` file with DB credentials

- Update `CACHE_DRIVER` and `SESSION_DRIVER` from the `.env` file with `array` value on both

- Create tables in DB: run `php artisan migrate`

- Add sample data to DB: run `php artisan db:seed`

- Install npm packages: run `npm install`

- Compile SASS into CSS using `gulp` command (gulp is required)

- More details about default Laravel installation can be found [here](https://laravel.com/docs/5.3/installation)

## 3. Laravel commands

- start the server: `php artisan serve`

- reset the db: `php artisan migrate:reset`
