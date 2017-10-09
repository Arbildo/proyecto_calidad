CREATE DATABASE panaderia;

USE panaderia;







CREATE TABLE producto(

Pro_codigo char(3) PRIMARY KEY not null,

Nombre varchar(50) not null,

Stock int not null,

Precio decimal(8,2) not null,

Descuento decimal(8,2) not null,

Tipo varchar(50) not null);



INSERT INTO producto VALUES('P01','Trufa','20','1.50','0','Dulce');

INSERT INTO producto VALUES('P02','Alfajor','15','1.00','0','Dulce');







CREATE TABLE usuarios(
idusuario int(11) PRIMARY KEY not null AUTO_INCREMENT,
usuario varchar(20)not null,
password varchar(10)not null);










CREATE TABLE cliente(

Cli_codigo char(3) PRIMARY KEY not null,

Nombre varchar(50) not null,

ApellidoPat varchar(50) not null,

ApellidoMat varchar(50) not null,

DNI char(8) not null,

RUC char(11) not null,

Direccion varchar(50) not null,

Telefono char(7) not null,

Distrito varchar(50) not null,

Email varchar(50) not null);



INSERT INTO cliente VALUES('C01','Rodrigo','Almendar','Rosales','71046583','14325673452','Av. Colonial 468','6537284','Los Olivos','ralmendarr@hotmail.com');

INSERT INTO cliente VALUES('C02','María','Espinoza','Sifuentes','71047734','12643876396','Av. Gamarra 866','4659833','Lince','mespinozas@hotmail.com');



















CREATE TABLE empleado(

Emp_codigo char(3) PRIMARY KEY not null,

Nombre varchar(50) not null,

ApellidoPat varchar(50) not null,

ApellidoMat varchar(50) not null,

Cargo varchar(50) not null,

Salario decimal(8,2) not null);



INSERT INTO empleado VALUES('E01','Gerardo','Solorzano','Bejariano','Administrador','1600.00');

INSERT INTO empleado VALUES('E02','Walter','Solorzano','Bejariano','Vendedor','1300.00');










