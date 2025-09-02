# Use official PHP image with Apache
FROM php:8.2-apache

# Install PostgreSQL extensions for PDO
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Copy website files
COPY . /var/www/html/

# Set permissions (optional)
RUN chown -R www-data:www-data /var/www/html/

# Expose port 10000 (Render will map it automatically)
EXPOSE 10000

# Start Apache in foreground
CMD ["apache2-foreground"]
