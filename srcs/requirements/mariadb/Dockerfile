FROM debian:buster

RUN apt update -y && apt upgrade -y && apt-get install mariadb-server -y

COPY conf/50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./conf/createdb.sql /

RUN chmod 755 /createdb.sql

RUN service mysql start && mysql < createdb.sql && rm -f createdb.sql

CMD [ "/usr/bin/mysqld_safe" ]