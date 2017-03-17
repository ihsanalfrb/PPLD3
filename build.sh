#!/bin/bash

echo ">>> Starting Build Script"

# Update
sudo apt-get update

echo ">>> Installing Base Items"

# Install base items
sudo apt-get install -y vim tmux curl wget build-essential

echo ">>> Adding PPA's and Installing Server Items"

# Add repo for latest PHP
sudo add-apt-repository -y ppa:ondrej/php5

# Update Again
sudo apt-get update

# Install the Rest
sudo apt-get install -y git-core php5 apache2 libapache2-mod-php5 php5-mysql php5-curl php5-gd php5-mcrypt php5-xdebug mysql-server


echo ">>> Installing Composer"

# Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer


service apache2 start
service mysql start


cd /var/www/html

git clone https://rizqyfaishal27@gitlab.com/PPL2017csui/PPLD3.git
cd PPLD3
git config user.name "PPLD3 - Development"
git config user.email "rizqyfaishal27@gmail.com"
git checkout develop	
git pull

composer install

php artisan migrate 
php artisan serve
