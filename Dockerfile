# Use official PHP Apache image
FROM php:8.2-apache

# Copy project files into container
COPY . /var/www/html/

# Enable Apache rewrite (optional)
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html
