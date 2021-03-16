FROM php:7
RUN docker-php-ext-install mysqli

FROM php:7.3.0-apache
COPY src/ /var/www/html
EXPOSE 80


FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]
