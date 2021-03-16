FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]



FROM php:7.0-fpm
RUN docker-php-ext-install pdo pdo_mysql mysqli
EXPOSE 80
