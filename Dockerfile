FROM php:8.2-apache

# Copy toàn bộ project vào thư mục web server
COPY . /var/www/html/

# Mở port 80
EXPOSE 80