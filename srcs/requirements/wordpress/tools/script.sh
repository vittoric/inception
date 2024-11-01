#!/bin/bash
cd /var/www/html
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
./wp-cli.phar core download --allow-root
./wp-cli.phar config create \
        --dbname=$db_name \
        --dbuser=$db_user \
        --dbpass=$db_pass \
        --dbhost=$db_host --allow-root
./wp-cli.phar core install \
        --url=localhost \
        --title=inception \
        --admin_user=$admin_user \
        --admin_password=$admin_pass \
        --admin_email=$admin_email --allow-root
./wp-cli.phar user create $wp_user $wp_email \
        --role=author \
        --user_pass=$wp_pass --allow-root
php-fpm8.2 -F