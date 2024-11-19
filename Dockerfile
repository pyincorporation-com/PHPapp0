FROM php:8.1-apache

# Copy application code
COPY . /var/www/html/

# Set permissions and install required extensions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && docker-php-ext-install mysqli pdo_mysql

# Disable Apache default welcome page
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && a2enmod rewrite

# Expose port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
