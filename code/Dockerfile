FROM php:7.1.8-fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php \
	&& mv composer.phar /usr/local/bin/ \
	&& ln -s /usr/local/bin/composer.phar /usr/local/bin/composer

COPY . /app

WORKDIR /app
RUN composer install --prefer-source --no-interaction
