FROM composer:1.10.7 AS composer

FROM ubuntu:focal

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update \
    && apt-get -y --no-install-recommends install ca-certificates \
    && apt-get -y --no-install-recommends install unzip \
    && apt-get -y --no-install-recommends install php-cli \
    && apt-get -y --no-install-recommends install php-curl \
    && rm -rf /var/lib/apt/lists

WORKDIR /root

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY composer.json composer.lock .

RUN composer update
