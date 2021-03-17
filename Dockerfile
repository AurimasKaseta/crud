FROM php:7.0-apache  
COPY . /var/www/php  
WORKDIR /var/www/php
RUN docker-php-ext-install mysqli
EXPOSE 3306
CMD [ "php", "./index.php" ]
