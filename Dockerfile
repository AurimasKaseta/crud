FROM php:7.2-apache
COPY src/ /var/www/html/
WORKDIR /var/www/html/
CMD [ "php", "./index.php" ]

FROM php:7
RUN docker-php-ext-install mysqli
EXPOSE 80
