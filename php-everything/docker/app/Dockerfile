FROM php:8-fpm
RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install mysqli pdo_mysql pdo_pgsql pgsql && \
    pecl install -o -f redis && \
    apt-get install -y zlib1g-dev libmemcached-dev && \
    pecl install -o -f memcached && \
    docker-php-ext-enable redis memcached && \
    rm -rf /var/lib/apt/lists/* /tmp/pear
COPY ./src /app

