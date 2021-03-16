FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "./index.php" ]

FROM php:7
RUN docker-php-ext-install mysqli
EXPOSE 80
