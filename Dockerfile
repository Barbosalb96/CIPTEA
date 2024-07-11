FROM php:8.2-apache

# Instalar dependências
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install zip \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar módulos do Apache
RUN a2enmod rewrite

# Copiar os arquivos do projeto para o diretório root do Apache
COPY . /var/www/html/

# Configurar permissões
RUN chown -R www-data:www-data /var/www/html/

# Expor a porta 80
EXPOSE 80
