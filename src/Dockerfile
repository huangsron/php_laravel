FROM php:7.4-fpm

# install mysql driver
RUN docker-php-ext-install mysqli pdo pdo_mysql

# RUN apt-get update && apt-get install -y \
#         # For php gd ext
#         libfreetype6-dev \
#         libjpeg62-turbo-dev \
#         libpng-dev \
#         # For php zip ext
#         zlib1g-dev \
#         libzip-dev \
#         # For memcached
#         libmemcached-dev \
#         # Install required packages
#         default-mysql-client \
#         locales \
#         # For php composer
#         unzip \
#         # For Terminal
#         git \
#         subversion \
#         vim \
#     && docker-php-ext-configure mysqli \
#     && docker-php-ext-install -j$(nproc) mysqli \
#     && docker-php-ext-configure gettext \
#     && docker-php-ext-install -j$(nproc) gettext \
#     && docker-php-ext-configure gd --with-jpeg \
#     && docker-php-ext-install -j$(nproc) gd \
#     && docker-php-ext-configure ldap \
#     && docker-php-ext-configure sockets \
#     && docker-php-ext-install -j$(nproc) sockets \
#     && docker-php-ext-configure pdo_mysql \
#     && docker-php-ext-install -j$(nproc) pdo_mysql \
#     && docker-php-ext-configure zip \
#     && docker-php-ext-install -j$(nproc) zip \
#     && pecl install xdebug \
#     && docker-php-ext-enable xdebug \
#     && pecl install memcached \
#     && docker-php-ext-enable memcached

# For composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
#     && php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
#     && php composer-setup.php  \
#     && php -r "unlink('composer-setup.php');" \
#     && mv composer.phar /usr/local/bin/composer


 # For time zone
ENV TZ=Asia/Taipei
RUN ln -snf /usr/share/zoneinfo/${TZ} /etc/localtime && echo ${TZ} > /etc/timezone

COPY --chown=www-data app /var/www/html
RUN chmod -R 777 /var/www/html/storage