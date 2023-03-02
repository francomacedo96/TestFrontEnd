CREATE DATABASE test;

USE test;

CREATE TABLE clientes(
	idCliente smallint unsigned auto_increment not null,
	nombre VARCHAR(50) not null,
	apellido VARCHAR(50) not null,
    rut int not null,
    tipo ENUM('empresa', 'consumidorFinal'),
	telefono int not null unique,
    activo ENUM('si', 'no'),
    email VARCHAR(50) not null unique,
	primary key(idCliente)
);
