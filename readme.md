# LaravelTest

## Build and Run

```sh
$ cd LaravelTest
$ docker-compose build
```

```sh
$ docker-compose up -d
```

### Migration and Seeding

```sh
$ cp .env.example .env
$ docker-compose exec app bash
php artisan migrate
php artisan db:seed
```

## Container with Bash

```sh
$ docker-compose exec app bash
$ docker-compose exec db bash
```

## Versions

```sh
$ php -v
PHP 8.3.29

$ composer -v
Composer version 2.9.2

$ mysql --version
mysql  Ver 8.4.7

$ php artisan -v
Laravel Framework 12.44.0

$ node -v
v24.12.0

$ npm -v
11.6.2
```

## Access

```
http://localhost:8080
```
