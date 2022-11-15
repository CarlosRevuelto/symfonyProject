#!/usr/bin/env bash

php app/console assets:install

# Inicialiamos los servicios
php-fpm

# Hacemos una acción infinita para que el POD no muera
touch test
tail -0f test