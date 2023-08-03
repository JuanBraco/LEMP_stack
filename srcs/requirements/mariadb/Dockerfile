FROM debian:buster

RUN apt update -y && apt upgrade -y && apt-get install mariadb-server -y

COPY conf/50-server.cnf	/etc/mysql/mariadb.conf.d/50-server.cnf

COPY ./conf/script.sh /

RUN chmod 755 /script.sh

CMD [ "/script.sh" ]