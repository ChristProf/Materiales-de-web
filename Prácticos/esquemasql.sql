create user 'scuola'@'%' identified by 'Contrasena';
grant all privileges on *.* to 'scuola'@'%' with grant option;
flush privileges;

create database empresa ;

use empresa;
create table persona(
id int primary key,
nombre varchar(50) not null,
apellido varchar(50) not null
);

insert into persona values (1234, 'Juan', 'Perez');
insert into persona values (4321, 'Pedro', 'Gonzalez');