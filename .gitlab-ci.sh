#!/bin/bash

# Install dependencies only for Docker.
# [[ ! -e /.dockerinit ]] && exit 0
# set -xe

# Update packages and install composer and PHP dependencies.
apt-get update -yqq
apt-get install git php5-xdebug libcurl4-gnutls-dev libicu-dev libmcrypt-dev libvpx-dev libjpeg-dev libpng-dev libxpm-dev zlib1g-dev libfreetype6-dev libxml2-dev libexpat1-dev libbz2-dev libgmp3-dev libldap2-dev unixodbc-dev libpq-dev libsqlite3-dev libaspell-dev libsnmp-dev libpcre3-dev libtidy-dev -yqq
apt-get install -y libpq-dev
apt-get install -y libpq-dev
pecl install xdebug
docker-php-ext-enable xdebug

# Compile PHP, include these extensions.
docker-php-ext-install mbstring mcrypt pdo_mysql curl json intl gd xml zip bz2 opcache

echo "zend_extension=\"/usr/lib/php5/20100525/xdebug.so\"" >> /etc/php5/apache2/php.ini 
echo "xdebug.remote_enable=1" >> /etc/php5/apache2/php.ini 
echo "xdebug.remote_handler=dbgp xdebug.remote_mode=req" >> /etc/php5/apache2/php.ini 
echo "xdebug.remote_host=127.0.0.1 xdebug.remote_port=9000" >> /etc/php5/apache2/php.ini

# Install Composer and project dependencies.
curl -sS https://getcomposer.org/installer | php
php composer.phar install

# Copy over testing configuration.
cp .env.testing .env

# Generate an application key. Re-cache.
php artisan key:generate
php artisan config:cache

# Run database migrations.
touch database/testing.sqlite
php artisan migrate --env=testing