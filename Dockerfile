FROM php:5.6-apache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && apt-get update && apt-get install -y git libzip-dev unzip \
    && docker-php-ext-install zip \
    && a2enmod rewrite headers
RUN docker-php-ext-install pdo pdo_mysql
