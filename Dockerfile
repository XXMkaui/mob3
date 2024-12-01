FROM php:8.0-fpm

RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libzip-dev unzip && apt-get install -y nginx\
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip \
    && docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY ./nginx/default.conf /etc/nginx/conf.d/default.conf

COPY . .

RUN composer install

CMD service nginx start && php artisan migrate --path=/database/migrations/2024_12_01_152944_create_marvel_character.php && php artisan db:seed --class=MarvelCharactersSeeder && php-fpm
