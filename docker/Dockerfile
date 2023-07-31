FROM php:8.2-apache
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN apt-get update && apt-get install -y \
    git \
    && docker-php-ext-install pdo_mysql
    
RUN sed -i 's!/var/www/html!/var/www/app/public!g' /etc/apache2/sites-available/000-default.conf

RUN apt-get update
RUN apt-get -y install libzip-dev
RUN docker-php-ext-install zip

RUN cd /etc/apache2/mods-enabled \
    && ln -s ../mods-available/rewrite.load