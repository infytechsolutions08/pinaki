#!/bin/bash

# Download Composer
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"

# Install Composer
php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Remove setup script
php -r "unlink('composer-setup.php');"

# Run composer install
composer install
