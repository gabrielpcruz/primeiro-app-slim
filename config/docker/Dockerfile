FROM jerfeson/npf:php74
ARG DEBIAN_FRONTEND=noninteractive

COPY nginx/vhost/default /etc/nginx/sites-available/default
COPY nginx/fastcgi-php.conf /etc/nginx/snippets/fastcgi-php.conf
COPY php/php.ini /etc/php/7.4/fpm/php.ini

RUN apt-get update -y && apt-get install php7.4-soap -y