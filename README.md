# PHP Universally Unique Lexicographically Sortable Identifier (ULID)

[![Latest Version](https://img.shields.io/github/v/release/kiwfy/ulid-php.svg?style=flat-square&v=2)](https://github.com/kiwfy/ulid-php/releases)
[![codecov](https://codecov.io/gh/kiwfy/ulid-php/branch/master/graph/badge.svg)](https://codecov.io/gh/kiwfy/ulid-php)
[![Build Status](https://img.shields.io/github/workflow/status/kiwfy/ulid-php/CI?label=ci%20build&style=flat-square)](https://github.com/kiwfy/ulid-php/actions?query=workflow%3ACI)
[![Total Downloads](https://img.shields.io/packagist/dt/kiwfy/ulid-php.svg?style=flat-square)](https://packagist.org/packages/kiwfy/ulid-php)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)

PHP library to create a ULID value

### Installation

[Release 2.0.0](https://github.com/kiwfy/ulid-php/releases/tag/2.0.0) Requires [PHP](https://php.net) 8.1

[Release 1.0.1](https://github.com/kiwfy/ulid-php/releases/tag/1.0.1) or earlier Requires [PHP](https://php.net) 7.1

The recommended way to install is through [Composer](https://getcomposer.org/).

```sh
composer require kiwfy/ulid-php
```

### Sample

it's a good idea to look in the sample folder to understand how it works.

First you need to building a correct environment to install dependences

```sh
docker build -t kiwfy/ulid-php -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it kiwfy/ulid-php bash
```

Verify if all dependencies is installed (if need anyelse)
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
**Any new code will only be accepted with all viladations.**

To ensure that the entire project is fine:

First you need to building a correct environment to install/update all dependences

```sh
docker build -t kiwfy/ulid-php -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it kiwfy/ulid-php bash
```

Install all dependences
```sh
composer install --dev --prefer-dist
```

Run all validations
```sh
composer check
```

**Kiwfy - Open your code, open your mind!**
