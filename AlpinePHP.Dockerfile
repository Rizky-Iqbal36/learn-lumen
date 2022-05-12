FROM php:7.4-fpm-alpine

RUN apk update && \
    apk add --no-cache  bash \
                        git \
                        libzip-dev \
                        zip \
                        unzip && \
    docker-php-ext-install zip mysqli pdo pdo_mysql && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer