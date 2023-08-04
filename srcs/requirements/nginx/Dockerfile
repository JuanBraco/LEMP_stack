FROM    debian:buster

RUN     apt update -y && apt upgrade -y && apt install nginx -y

RUN     mkdir -p /etc/nginx/ssl
RUN     apt install openssl -y

RUN     openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
        -out /etc/nginx/ssl/inception.crt \
        -keyout /etc/nginx/ssl/inception.key \
        -subj "/C=FR/L=Paris/O=42/OU=student/CN=jde-la-f.42.fr"

RUN     mkdir -p /var/run/nginx
COPY    ./conf/default /etc/nginx/sites-enabled/default

RUN     chmod 755 /var/www/html
RUN     chown -R www-data:www-data /var/www/html

CMD [ "nginx", "-g", "daemon off;" ]