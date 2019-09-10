FROM php:7.3-fpm

RUN apt-get update -y \
    && apt-get install -y libmcrypt-dev openssl curl git zip \
    && docker-php-ext-install pdo pdo_mysql mbstring \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
