FROM php:7.4-cli
COPY . /usr/src/myapp
CMD [ "php", "./index.php" ]

FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd

FROM php:7.4-cli
RUN docker-php-ext-install pdo pdo_mysql mysqli
EXPOSE 80
