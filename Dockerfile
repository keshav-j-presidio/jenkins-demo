FROM php:8.1.9-apache

RUN docker-php-ext-install mysqli

COPY index.php /var/www/html/index.php

ENV serverName=database-container
ENV userName=root
ENV password=Test123
ENV dbName=Test
ENV port=3306

EXPOSE 80
