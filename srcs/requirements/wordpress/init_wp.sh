#!/bin/bash

cd /var/www/wordpress

if [[ ! -f "wp-config.php" ]]
then
	mv /wp-config.php .
	wp core download --allow-root
	wp core install --allow-root --url=$WP_URL --title=$WP_TITLE --admin_user=$WP_ADMIN --admin_password=$WP_ADMIN_PASSWORD --admin_email=$WP_ADMIN_MAIL
	wp user create --allow-root $WP_USER $WP_USER_MAIL --role=author --user_pass=$WP_USER_PASSWORD
	chown -R www-data:www-data .
fi

exec "$@"
