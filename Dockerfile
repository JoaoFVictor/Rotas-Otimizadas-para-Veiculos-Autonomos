FROM phpswoole/swoole:4.7-php8.0

RUN apt-get update && apt-get install vim -y && \
    apt-get install libcurl4-openssl-dev -y && \
    apt-get install openssl -y && \
    apt-get install libssl-dev -y && \
    apt-get install wget -y && \
    apt-get install git -y && \
    apt-get install procps -y && \
    apt-get install htop -y

RUN docker-php-ext-install mysqli pdo_mysql

COPY ./rootfilesystem/ /