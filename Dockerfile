FROM php:7.4-cli
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
RUN docker-php-ext-install mysqli
FROM alpine:3.7
RUN apk add --no-cache mysql-client
EXPOSE 80
CMD [ "php", "./index.php" ]
