# PHP Universally Unique Lexicographically Sortable Identifier (ULID)

[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)

PHP library to create a ULID unique identifier value

### Installation

[Release 3.0.0](https://github.com/not-empty/ulid-php-lib/releases/tag/4.0.0) Requires [PHP](https://php.net) 8.1

[Release 3.0.0](https://github.com/not-empty/ulid-php-lib/releases/tag/3.0.0) Requires [PHP](https://php.net) 7.4

[Release 2.0.0](https://github.com/not-empty/ulid-php-lib/releases/tag/2.0.0) Requires [PHP](https://php.net) 7.3

[Release 1.0.0](https://github.com/not-empty/ulid-php-lib/releases/tag/1.0.0) Requires [PHP](https://php.net) 7.1

The recommended way to install is through [Composer](https://getcomposer.org/).

```sh
composer require not-empty/ulid-php-lib
```

### Usage

Generate an Ulid

```php
use Ulid\Ulid;
$ulid = new Ulid();
$ulidFromNow = $ulid->generate();
echo $ulidFromNow;
```

Generate an Ulid from a timestamp

```php
use Ulid\Ulid;
$ulid = new Ulid();
$ulidFromTime = $ulid->generate(1585083964945);
echo $ulidFromTime;
```

Validates if is a valid Ulid from a string

```php
use Ulid\Ulid;
$ulid = new Ulid();
$invalid = $ulid->isValidFormat('1585083964945');
var_dump($invalid)
```
Recover timestamp from Ulid

```php
use Ulid\Ulid;
$ulid = new Ulid();
$timeFromUlid = $ulid->getTimeFromUlid('01E48SD97BMWHAW82D229T0C7K');
echo $timeFromUlid;
```

Recover date from Ulid

```php
use Ulid\Ulid;
$ulid = new Ulid();
$dateFromUlid = $ulid->getDateFromUlid('01E48SD97BMWHAW82D229T0C7K');
echo $dateFromUlid;
```

Recover randomness from Ulid

```php
use Ulid\Ulid;
$ulid = new Ulid();
$randomnessFromUlid = $ulid->getRandomnessFromString('01E475VQGHNW990PVHXFDT4C6R');
echo $randomnessFromUlid;
```

if you want an environment to run or test it, you can build and install dependences like this

```sh
docker build --build-arg PHP_VERSION=8.1.4-cli -t not-empty/ulid-php-lib:php81 -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it not-empty/ulid-php-lib:php81 bash
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

First you need to building a correct environment to install all dependences

```sh
docker build --build-arg PHP_VERSION=8.1.4-cli -t not-empty/ulid-php-lib:php81 -f contrib/Dockerfile .
```

Access the container
```sh
docker run -v ${PWD}/:/var/www/html -it not-empty/ulid-php-lib:php81 bash
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
