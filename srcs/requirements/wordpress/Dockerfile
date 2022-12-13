FROM debian:buster

RUN apt-get update && \
	apt-get install -y \
		php \
		php-mysql \
		php-fpm \
		wget && \
 	apt-get clean

COPY wp-config.php .
COPY init_wp.sh .
COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN mkdir -p /run/php/

ENTRYPOINT ["bash", "init_wp.sh"]

CMD ["php-fpm7.3", "-F"]

EXPOSE 3306 9000
