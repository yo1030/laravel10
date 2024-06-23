# Fast CGI 実装
FROM php:8.2.3-fpm
COPY php.ini /usr/local/etc/php/

# zlib:データの圧縮伸張を行う
# libzip-dev:zipアーカイブを処理する
# docker-php-ext-install:php 標準の拡張モジュールをインストール&有効化する
RUN apt-get update \
  && apt-get install -y zlib1g-dev mariadb-client vim libzip-dev \
  && docker-php-ext-install zip pdo_mysql \
  && apt-get install -y nodejs npm && npm install n -g && n 18.15.0

#Composer install
# -r:phpを<? ?>なしに実行する
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# RUN php composer-setup.php
# RUN php -r "unlink('composer-setup.php');"
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www/src
