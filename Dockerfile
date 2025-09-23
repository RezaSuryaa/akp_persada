FROM php:8.2-apache

# Install ekstensi PHP
RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working dir
WORKDIR /var/www/html

# Copy semua file Laravel
COPY . .

# Set Apache ke folder public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
ENV APACHE_LISTEN_PORT=8080

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/000-default.conf \
    /etc/apache2/apache2.conf \
    /etc/apache2/sites-enabled/000-default.conf

# Permission
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 8080
CMD ["apache2-foreground"]
