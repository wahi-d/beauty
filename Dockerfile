FROM php:8.2-apache

# Install MySQL extensions (THIS FIXES YOUR ERROR)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy project files
COPY . /var/www/html/

WORKDIR /var/www/html
