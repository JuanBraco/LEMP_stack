CREATE DATABASE Base;
CREATE USER 'bca'@'%' IDENTIFIED BY '1qaz';
GRANT ALL PRIVILEGES ON Base.* TO 'bca'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY '1qaz2wsx';
/etc/init.d/mysql stop

exec "$@"