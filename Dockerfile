FROM php:8.2-apache

# Install required libraries for PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Copy website files
COPY . /var/www/html/

# Set correct ownership
RUN chown -R www-data:www-data /var/www/html/

# Expose Render's required port
EXPOSE 10000

# Start Apache
CMD ["apache2-foreground"]
