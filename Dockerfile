FROM php:7.1-fpm

ENV DEBIAN_FRONTEND=noninteractive

# Instalamos módulos PHP necesarios
RUN docker-php-ext-install pdo_mysql

ENV FILE_PARAMETERS=parameters_test_docker.yml

RUN pecl install apcu \
    && pecl install apcu_bc-1.0.3 \
    && docker-php-ext-enable apcu --ini-name 10-docker-php-ext-apcu.ini \
    && docker-php-ext-enable apc --ini-name 20-docker-php-ext-apc.ini

# Instalamos paquetes necesitarios
RUN apt-get update && apt-get install -y --no-install-recommends \
    zlib1g-dev \
    libzip-dev \
    tar \
    openssl \
    libxrender-dev \
    libx11-dev \
    libxext-dev \
    libfontconfig1-dev \
    libfreetype6-dev \
    fontconfig \
    libcurl3-dev \
    libxml2-dev \
    wget \
    xfonts-base \
    xfonts-75dpi \
    libc-client2007e-dev \
    libc-client-dev \
    libkrb5-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    nano \
    htop \
    procps \
    cron \
    git

# Modulos PHP
RUN docker-php-ext-install zip
RUN docker-php-ext-install curl
RUN docker-php-ext-install soap
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install gd
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install dom
RUN docker-php-ext-install intl
RUN docker-php-ext-configure imap --with-kerberos --with-imap-ssl
RUN docker-php-ext-install imap
RUN docker-php-ext-install bcmath

RUN rm -rf /var/lib/apt/lists/*

# Creamos las carpetas donde irá el proyecto
RUN mkdir /var/www/eurotransportcar.com
RUN mkdir /var/www/eurotransportcar.com/web

# Ponemos que cuando abramos el pod vaya a esa carpeta
WORKDIR /var/www/eurotransportcar.com/web

#Copiamos la configuracion
#COPY ./docker/common/extra-conf.ini /usr/local/etc/php/conf.d/extra-conf.ini
#COPY ./docker/common/php-fpm.conf /usr/local/etc/php-fpm.d/www.conf
#COPY ./docker/common/nginx.conf /etc/nginx/nginx.conf
#COPY ./docker/common/certificate.crt /etc/ssl/certificate.crt
#COPY ./docker/common/certificate.key /etc/ssl/certificate.key
# Copiamos y damos permisos al SCRIPT de inicialización del docker
#COPY ./docker/scripts/startup.sh /etc/startup.sh
#RUN chmod 777 /etc/startup.sh

# Copiamos en el PATH de la máquina el siguiente texto para ejecutar el bin que existe en los vendors
RUN PATH=$PATH:/usr/src/apps/vendor/bin:bin

# Configuramos los scripts
#COPY ./docker/scripts/* /root/scripts/
#RUN chmod 777 -R /root/scripts/

# Instalamos composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Ponemos correctamente la hora del servidor
ENV TZ=Europe/Madrid
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Copiamos y damos permisos al SCRIPT de inicialización del docker
COPY ./docker/scripts/startup.sh /etc/startup.sh
RUN chmod 777 /etc/startup.sh


# Configuramos el crontab
RUN ln -s /usr/local/bin/php /usr/bin/php

# Copiamos el código
COPY ./ /var/www/eurotransportcar.com/web


# Borramos caché
RUN set -eux; \
    composer install --no-dev --prefer-dist --no-progress --no-scripts --no-interaction; \
    composer clear-cache

RUN set -eux; \
    mkdir -p app/cache app/logs; \
    composer dump-autoload --classmap-authoritative --no-scripts --no-dev --optimize;  

RUN composer require


#RUN sleep infinity
ENTRYPOINT [ "/etc/startup.sh" ]
#ENTRYPOINT ["php bin/console server:start"]

