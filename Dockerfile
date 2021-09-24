FROM php:7.2-cli

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin
#Install composer
COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN apt-get update -yqq \
    && apt-get install git zlib1g-dev libsqlite3-dev -y \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo_mysql

WORKDIR /var/www