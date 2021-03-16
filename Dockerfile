FROM php:7.2-apache
COPY . /var/www/html/
CMD [ "php", "./index.php" ]

FROM php:7
RUN docker-php-ext-install mysqli

