FROM php:8.2-apache

# Install PostgreSQL client libraries and dev headers
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Copy website files
COPY . /var/www/html/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/

# Expose port for Render
EXPOSE 10000

# Start Apache
CMD ["apache2-foreground"]
