FROM php:8.2-apache

# Cài MySQL extension cho PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Bật mod_rewrite
RUN a2enmod rewrite

# Cho phép .htaccess hoạt động
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy project
COPY . /var/www/html/

EXPOSE 80
