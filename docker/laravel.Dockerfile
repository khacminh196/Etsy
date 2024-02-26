FROM php:8.1.0-fpm

RUN apt-get update && apt-get install -y \
    curl \
    git \
    libzip-dev \
    zip \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    ffmpeg \
    imagemagick libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick  

RUN docker-php-ext-install \
    pdo_mysql \
    zip \
    gd \
    && docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
  && chmod +x /usr/local/bin/composer

RUN curl -sL https://deb.nodesource.com/setup_16.x | bash -- &&\
    apt-get install -y nodejs

RUN rm -rf /var/cache/apk/*

WORKDIR /usr/share/nginx/html
