ARG PHP_VERSION=latest

FROM php:${PHP_VERSION}

RUN apt update \
    && apt upgrade -y \
    && apt install zip unzip git -y

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

WORKDIR /var/www/html