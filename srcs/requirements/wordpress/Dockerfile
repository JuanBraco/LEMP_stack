FROM	debian:buster

RUN 	apt update -y && apt upgrade -y && apt-get -y install wget

RUN		apt-get install -y php7.3\
						php-fpm\
						php-mysql\
						mariadb-client\
						curl

COPY	./conf/www.conf /etc/php/7.3/fpm/pool.d

COPY	./conf /var/www/

EXPOSE	9000

CMD ["bash", "/var/www/start.sh"]