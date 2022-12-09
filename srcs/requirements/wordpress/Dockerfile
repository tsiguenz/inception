FROM debian:buster

WORKDIR /var/www

RUN apt-get update && \
	apt-get install -y \
		tar \
		php \
		php-mysql \
		php-fpm \
		wget && \
 	apt-get clean

# install wordpress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar xzvf latest.tar.gz
RUN rm latest.tar.gz

COPY wp-config.php wordpress/
COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
RUN chown -R www-data:www-data wordpress
RUN mkdir -p /run/php/

CMD ["php-fpm7.3", "-F"]

EXPOSE 3306 9000
