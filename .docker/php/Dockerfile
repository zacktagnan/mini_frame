FROM php:8.3-fpm
# PHP-FastCGI Process Manager

# Creando usuario www-data y vinculándolo al grupo www-data
RUN adduser www-data www-data

# Instalando dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nano \
    # Cambiando el ID del usuario www-data a 1000
    && usermod -u 1000 www-data

# Limpiando la CACHÉ
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalando ciertas dependencias de PHP entre todas las posibles a especificar
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Obtener e instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer www-data como usuario predeterminado en vez de ROOT
# para evitar problemas de permisos a nivel del proyecto por ej.
USER www-data