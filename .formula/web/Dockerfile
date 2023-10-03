# imagen de dockerhub que descargara
FROM php:8.1.4-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    libjpeg-turbo \
    libpng \
    libwebp-dev \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libzip-dev \
    curl \
    bash \
    && docker-php-ext-configure gd \
      --enable-gd \
      --with-freetype=/usr/include/ \
      --with-jpeg=/usr/include/ \
      --with-webp=/usr/include/ \
    && docker-php-ext-install pdo pdo_mysql pcntl zip bcmath gd exif \
    && rm -rf /tmp/*

# Set working directory
WORKDIR /var/www/html

# Install composer in the container
RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Bring the entrypoint script
COPY ./phpEntrypoint.sh /usr/local/bin/

# Give execution permissions
RUN chmod +x /usr/local/bin/phpEntrypoint.sh

# Start the  Magic
ENTRYPOINT ["/usr/local/bin/phpEntrypoint.sh"]

CMD ["php-fpm"]
