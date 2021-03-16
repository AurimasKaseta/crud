FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN docker-php-ext-install mysqli
EXPOSE 80
CMD [ "php", "./index.php" ]
