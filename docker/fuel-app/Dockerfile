FROM php:5.6-alpine

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli pdo pdo_mysql

COPY --from=composer:2.2 /usr/bin/composer /usr/bin/composer
