# To change this license header, choose License Headers in Project Properties.
# To change this template file, choose Tools | Templates
# and open the template in the editor.
FROM php:7.2-apache

RUN docker-php-ext-install mysqli pdo_mysql

COPY . /var/www/html

EXPOSE 80

