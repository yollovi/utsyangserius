FROM php:8.1.18-apache AS php
COPY /bebas /var/www/html/

RUN apt-get update -y
RUN docker-php-ext-install mysqli
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 774 /var/www/html/

FROM mysql:latest AS sql
COPY redlock-db.sql /docker-entrypoint-initdb.d/

ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_USER=ADMIN
ENV MYSQL_PASSWORD=KALI
