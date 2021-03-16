FROM php:7.2-apache
COPY src/ /var/www/html/
WORKDIR /var/www/html/


FROM php:7
RUN docker-php-ext-install mysqli
EXPOSE 80
CMD [ "php", "./index.php" ]
