FROM php:8.2-apache

# Bật mod_rewrite
RUN a2enmod rewrite

# Cho phép .htaccess hoạt động
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Copy project
COPY . /var/www/html/

EXPOSE 80