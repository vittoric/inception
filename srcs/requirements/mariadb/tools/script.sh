#!/bin/bash

echo "CREATE DATABASE IF NOT EXISTS wordpress;" > /etc/mysql/init.sql
echo "CREATE USER IF NOT EXISTS '$db_user'@'%' IDENTIFIED BY '$db_pass';" >> /etc/mysql/init.sql
echo "GRANT ALL PRIVILEGES ON *.* TO '$db_user'@'%' WITH GRANT OPTION;" >> /etc/mysql/init.sql
echo "ALTER USER 'root'@'localhost' IDENTIFIED BY '$root_pass' ;" >> /etc/mysql/init.sql
echo "FLUSH PRIVILEGES;" >> /etc/mysql/init.sql

mysql_install_db
mysqld