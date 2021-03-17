FROM php:7.0-apache  
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN docker-php-ext-install mysqli
EXPOSE 80
CMD [ "php", "./index.php" ]
