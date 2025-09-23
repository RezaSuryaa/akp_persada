# Gunakan PHP dengan Apache
FROM php:8.2-apache

# Install ekstensi yang dibutuhkan Laravel, Filament, dan OpenSpout
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    libicu-dev \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql intl zip

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy semua file Laravel ke dalam container
COPY . .

# Install dependencies Laravel
RUN composer install --no-dev --optimize-autoloader

# Copy konfigurasi default Apache untuk Laravel
RUN echo "<VirtualHost *:80> \
    DocumentRoot /var/www/html/public \
    <Directory /var/www/html/public> \
        AllowOverride All \
        Require all granted \
    </Directory> \
</VirtualHost>" > /etc/apache2/sites-available/000-default.conf

# Aktifkan mod_rewrite untuk Laravel
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]
