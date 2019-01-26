FROM php:5.6-apache

RUN cd /etc/apache2/mods-enabled && \
    ln -s ../mods-available/rewrite.load

RUN apt-get update && \
    apt-get install -y libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ && \
    docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install -j$(nproc) mysql pdo_mysql

COPY 000-default.conf /etc/apache2/sites-available/