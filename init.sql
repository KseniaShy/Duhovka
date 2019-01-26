create database duhovka;
use duhovka;
source /db/database.sql;

create user admin identified by "admin";
grant all privileges on duhovka.* to appuser@'%';