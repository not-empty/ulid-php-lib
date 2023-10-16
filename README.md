# PHP Universally Unique Lexicographically Sortable Identifier (ULID)

[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)

PHP library to create a ULID unique identifier value

### Installation

[Release 2.0.0](https://github.com/not-empty/ulid-php-lib/releases/tag/2.0.0) Requires [PHP](https://php.net) 8.1

[Release 1.0.0](https://github.com/not-empty/ulid-php-lib/releases/tag/1.0.0) or earlier Requires [PHP](https://php.net) 7.3

The recommended way to install is through [Composer](https://getcomposer.org/).

```sh
composer require not-empty/ulid-php-lib
```

### Sample

it's a good idea to look in the sample folder to understand how it works.

First you need to building a correct environment to install dependences

```sh
docker build -t not-empty/ulid-php-lib-81 -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it not-empty/ulid-php-lib-81 bash
```

Verify if all dependencies is installed
```sh
composer install --no-dev --prefer-dist
```

and run
```sh
php sample/ulid-sample.php
```

### Development

Want to contribute? Great!

The project using a simple code.
Make a change in your file and be careful with your updates!
**Any new code will only be accepted with all validations.**

To ensure that the entire project is fine:

First you need to building a correct environment to install/update all dependences

```sh
docker build -t not-empty/ulid-php-lib-81 -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it not-empty/ulid-php-lib-81 bash
```

Install all dependences
```sh
composer install --dev --prefer-dist
```

Run all validations
```sh
composer check
```

**Not Empty Foundation - Free codes, full minds**
