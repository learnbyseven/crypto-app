CREATE USER 'dbuser'@'%' IDENTIFIED BY 'db@123';
GRANT ALL ON *.* TO 'dbuser'@'%';
GRANT ALL ON *.* TO 'root'@'%';
create database userdb;
use userdb;
CREATE TABLE userdata (ID SERIAL PRIMARY KEY, NAME VARCHAR(255), EMAIL VARCHAR(255), CRYPTOCOINS INTEGER);
