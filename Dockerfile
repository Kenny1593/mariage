# Utiliser une image PHP avec extensions nécessaires
FROM php:8.2-fpm

# Installer les dépendances
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

# Installer les dépendances Laravel
RUN composer install --no-dev --optimize-autoloader

# Lancer le serveur PHP intégré
CMD php artisan serve --host 0.0.0.0 --port $PORT
