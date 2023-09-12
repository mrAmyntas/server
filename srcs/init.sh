#configure access
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html/*

#start mysql
service mysql start

#SSL: create selfsigned cert+key
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout ./etc/ssl/certs/frazzled.key -out ./etc/ssl/certs/frazzled.crt -subj '/C=NL/ST=Noord-Holland/L=Amsterdam/0=My Dom/CN=frazzled'

#use my config file for nginx
mv ./tmp/nginx.conf /etc/nginx/sites-available/frazzled
ln -s /etc/nginx/sites-available/frazzled /etc/nginx/sites-enabled/frazzled
rm -rf /etc/nginx/sites-enabled/default
rm -ff /etc/nginx/sites-available/default

#install phpMyAdmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.1.0/phpMyAdmin-5.1.0-english.tar.gz
tar -xf phpMyAdmin-5.1.0-english.tar.gz
rm phpMyAdmin-5.1.0-english.tar.gz
mv phpMyAdmin-5.1.0-english ./var/www/html/phpmyadmin
mv ./tmp/phpmyadmin.conf.php ./var/www/html/phpmyadmin/config.inc.php

#get Wordpress
wget https://wordpress.org/latest.tar.gz
tar -xzf latest.tar.gz
rm latest.tar.gz
mv wordpress ./var/www/html/wordpress
mv ./tmp/wp-config.php ./var/www/html/wordpress

#start services
service php7.3-fpm start
service nginx start

#configure Wordpress database
echo "CREATE USER 'bas'@'localhost' IDENTIFIED BY '1234';" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON *.* TO 'bas'@'localhost';" | mysql -u root --skip-password
echo "CREATE DATABASE wordpress;"| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;"| mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'bas'@'localhost' WITH GRANT OPTION;"| mysql -u root --skip-password
echo "FLUSH PRIVILEGES;"| mysql -u root --skip-password

#get rid of weird html file
rm -rf ./var/www/html/index.nginx-debian.html

#php install info - optional
echo "<?php phpinfo(); ?>" >> /var/www/html/info.php
tail -f /dev/null

bash
