CREATE DATABASE db_jb;
CREATE USER 'jde-la-f'@'%' IDENTIFIED BY 'passwordUser';
GRANT ALL PRIVILEGES ON db_jb.* TO 'jde-la-f'@'%';
FLUSH PRIVILEGES;

ALTER USER 'root'@'localhost' IDENTIFIED BY 'passwordRoot';