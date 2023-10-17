ARG PHP_VERSION=7.4.33-cli

FROM php:${PHP_VERSION}

RUN apt update \
    && apt upgrade -y \
    && apt install zip unzip git -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www/html