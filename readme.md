# LaravelTest

## Versions

```
$ php -v
PHP 8.1.20
```
```
$ composer -V
Composer version 2.2.21
```

```
$ mysql -V
mysql  Ver 8.0.32 for Linux on x86_64
```

```
$ php artisan -V
Laravel Framework 10.14.1
```

## Build and Run

```
$ cd LaravelTest
$ docker build .
```

```
$ docker-compose up -d
```

## Access

```
http://localhost:8080
```

## Create Table and insert dummy data

```
$ docker-compose exec db bash
# mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE
```

```
mysql> select database();
+------------+
| database() |
+------------+
| laravel    |
+------------+
1 row in set (0.01 sec)
```

```
CREATE TABLE IF NOT EXISTS laravel.posts(
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `article` TEXT NULL DEFAULT NULL,
  `update_time` DATETIME NOT NULL
);
```

```
INSERT INTO laravel.posts (
    user_id,
    article,
    update_time
) VALUES(
    204,
    'foobar',
    '2023-07-08 22:14:15'
);

INSERT INTO laravel.posts (
    user_id,
    article,
    update_time
) VALUES(
    11,
    'Hello,World!',
    '2023-07-08 23:15:32'
);
```