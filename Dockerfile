FROM php:7.2-apache
COPY src/ /var/www/html
RUN docker-php-ext-install mysqli
# WORKDIR /var/www/html/src/
# RUN docker-php-ext-install pdo pdo_mysql