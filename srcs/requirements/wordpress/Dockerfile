FROM debian:buster

WORKDIR /var/www/wordpress

RUN apt-get update && \
	apt-get install -y \
		php \
		php-mysql \
		php-fpm \
		wget && \
 	apt-get clean

COPY wp-config.php .
COPY www.conf /etc/php/7.3/fpm/pool.d/www.conf
RUN wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp
RUN wp core download --allow-root
RUN wp core install --url="tsiguenz.42.fr" --title="test" --admin_user="$WP_ADMIN" --admin_password="$WP_ADMIN_PASSWORD" --admin_email="$WP_ADMIN_MAIL" --allow-root
RUN chown -R www-data:www-data .

RUN mkdir -p /run/php/

CMD ["php-fpm7.3", "-F"]

EXPOSE 3306 9000
