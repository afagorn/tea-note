FROM php:8.2.3-cli-alpine3.17

RUN mv $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini

COPY --from=composer/composer:2-bin /composer /usr/bin/composer

#ENV COMPOSER_ALLOW_SUPERUSER 1

WORKDIR /srv/www
