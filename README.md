# Laravel Simple Blog
Simple blog app made with Laravel 5.3

## 1. Requirement

- `mbstring` PHP extension is required

## 2. Install

- Run `composer install` for downloading required packages locally

- Create `.env` file based on `.env.example`

- Generate Laravel app key `php artisan key:generate`

- Update `.env` file with DB credentials

- Create tables in DB: run `php artisan migrate:install`

- Add sample data to DB: run `php artisan db:seed`

- Compile SASS into CSS using `gulp` command (gulp is required)

- More details about default Laravel installation can be found [here](https://laravel.com/docs/5.3/installation)

## 3. Start Laravel server

- run `php artisan serve`
