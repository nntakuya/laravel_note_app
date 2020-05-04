FROM php:7.4-fpm-alpine

RUN apk --update add \
    && apk add build-base curl git zip unzip vim

RUN cd /usr/bin && curl -sS https://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

RUN docker-php-ext-install pdo_mysql

WORKDIR /var/www/html

