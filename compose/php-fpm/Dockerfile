FROM php:8.2-fpm

RUN apt-get update \
	&& docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get update && \
     apt-get install -y \
         libzip-dev \
         && docker-php-ext-install zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html