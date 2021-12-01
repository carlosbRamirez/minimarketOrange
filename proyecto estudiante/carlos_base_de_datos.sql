CREATE DATABASE proyecto;

CREATE TABLE user(
id int AUTO_INCREMENT NOT NULL,
name varchar(30),
username varchar(30),
email varchar(30),
password varchar(30),
primary key(id)
);

CREATE TABLE estudiante(
num_id int(11) AUTO_INCREMENT NOT NULL,
nom_est varchar(30),
ape_est varchar(30),
email_est varchar(30),
primary key(num_id)
);