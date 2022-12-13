#!/bin/bash

cd /var/www/wordpress

if [[ ! -f "wp-config.php" ]]
then
	mv /wp-config.php .
	wp core download --allow-root
	wp core install --url="tsiguenz.42.fr" --title="$WP_TITLE" --admin_user="$WP_ADMIN" --admin_password="$WP_ADMIN_PASSWORD" --admin_email="$WP_ADMIN_MAIL" --allow-root
	chown -R www-data:www-data .
fi

exec "$@"
