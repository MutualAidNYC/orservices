FROM php:7-apache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update && \
  apt-get -y install libpng-dev libzip-dev zlib1g-dev && \
  docker-php-ext-install gd pdo pdo_mysql zip && \
  apt-get -y remove libpng-dev libzip-dev zlib1g-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/*

COPY . /var/www/
WORKDIR /var/www
RUN composer install

EXPOSE 8080
COPY docker/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY .env.example /var/www/.env
RUN chmod 777 -R /var/www/storage/ && \
    echo "Listen 8080" >> /etc/apache2/ports.conf && \
    chown -R www-data:www-data /var/www/ && \
    a2enmod rewrite
