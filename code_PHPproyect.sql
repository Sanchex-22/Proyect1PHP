CREATE DATABASE IF NOT EXISTS checktask;

use checktask;

create table IF NOT EXISTS Tareas(

cod INT not null AUTO_INCREMENT,
Titulo CHAR(20) not null,
Descripcion VARCHAR (100) not null,
Estado CHAR (10) not null,
CHECK (Estado = 'Por Hacer' or 'En Progreso' or 'Terminada'),
Fecha_Compromiso DATETIME not null,
Etiqueta CHAR (10),
primary key (cod)
);

create table IF NOT EXISTS Usuarios(
cod_user INT NOT NULL AUTO_INCREMENT,
User_Name VARCHAR (10) NOT NULL,
password VARCHAR (10) NOT NULL,
primary key (cod_user)
);

