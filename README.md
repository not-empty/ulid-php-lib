# PHP Universally Unique Lexicographically Sortable Identifier (ULID)

[![Latest Version](https://img.shields.io/github/v/release/not-empty/ulid-php-lib.svg?style=flat-square)](https://github.com/not-empty/ulid-php-lib/releases)
[![codecov](https://codecov.io/gh/not-empty/ulid-php-lib/graph/badge.svg?token=AEMV163UW6)](https://codecov.io/gh/not-empty/ulid-php-lib)
[![CI Build](https://img.shields.io/github/actions/workflow/status/not-empty/ulid-php-lib/php.yml)](https://github.com/not-empty/ulid-php-lib/actions/workflows/php.yml)
[![Downloads Old](https://img.shields.io/packagist/dt/kiwfy/ulid-php?logo=old&label=downloads%20legacy)](https://packagist.org/packages/kiwfy/ulid-php)
[![Downloads](https://img.shields.io/packagist/dt/not-empty/ulid-php-lib?logo=old&label=downloads)](https://packagist.org/packages/not-empty/ulid-php-lib)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)
[![Packagist License (custom server)](https://img.shields.io/packagist/l/not-empty/ulid-php-lib)](https://github.com/not-empty/ulid-php-lib/blob/master/LICENSE)



PHP library to create a ULID unique identifier value

### Installation

[Release 3.0.0](https://github.com/not-empty/ulid-php-lib/releases/tag/3.0.0) Requires [PHP](https://php.net) 8.2

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
docker build -t not-empty/ulid-php-lib-82 -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it not-empty/ulid-php-lib-82 bash
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
docker build -t not-empty/ulid-php-lib-82 -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it not-empty/ulid-php-lib-82 bash
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
