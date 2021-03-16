FROM php:8.0-cli
COPY . /usr/src/myapp
CMD [ "php", "./index.php" ]



FROM php:8.0-cli
RUN docker-php-ext-install pdo pdo_mysql mysqli
EXPOSE 80
