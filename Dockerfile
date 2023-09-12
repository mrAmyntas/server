FROM debian:buster

#update debianbuster && install wget (this is used to get .tar files of phpmyadmin & wordpress)
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get -y install wget

#install nginx
RUN apt-get -y install nginx

#install mySQL
RUN apt-get -y install mariadb-server

#install php
RUN apt-get -y install php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring php-xml


COPY ./srcs/init.sh ./init.sh
COPY ./srcs/nginx.conf ./tmp/nginx.conf
COPY ./srcs/wp-config.php ./tmp/wp-config.php
COPY ./srcs/phpmyadmin.conf.php ./tmp/phpmyadmin.conf.php
COPY ./srcs/disable_autoindex.sh ./var/www/html/autoindex/disable_autoindex.sh
COPY ./srcs/enable_autoindex.sh ./var/www/html/autoindex/enable_autoindex.sh
EXPOSE 80 443
CMD bash init.sh