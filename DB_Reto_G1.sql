drop database if exists Reto;
create database Reto;
use Reto;


create table tienda(
     nombreT varchar (30) NOT NULL,
     sector varchar (30) NOT NULL,
     horario varchar (1000) NOT NULL,
     codTienda int NOT NULL,
     primary key(codTienda)
);

create table producto(
     nombreT varchar (30) NOT NULL,
     descripcion varchar (150) NOT NULL,
     imagen blob,
     stock int (3),
     enlace varchar (1000),
     codProducto int AUTO_INCREMENT,
     primary key(codProducto),
     codTienda int,
     foreign key (codTienda) references tienda(codTienda) ON DELETE CASCADE ON UPDATE CASCADE
);

