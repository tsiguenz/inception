FROM debian:buster

WORKDIR /wordpress

RUN apt-get update \
	&& apt-get install -y curl php-fpm \
 	&& apt-get clean \
	&& curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
	&& chmod +x wp-cli.phar \
	&& mv wp-cli.phar /usr/local/bin/wp \
	&& wp cli update \
	&& wp core download --allow-root
