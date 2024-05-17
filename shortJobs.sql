drop database if exists shorJobs;
create database if not exists shortJobs;

use shortJobs;


drop table if exists usuarios;

CREATE TABLE usuarios (
    dni VARCHAR(9) PRIMARY KEY,
    nombreCompleto VARCHAR(100),
    numeroSeguridadSocial INT,
    curriculum VARCHAR(255),
    direccion VARCHAR(100),
    ciudad VARCHAR(30),
    correoElectronico VARCHAR(30),
    nombreUsuario VARCHAR(50),
    contraseña VARCHAR(100) 
    `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `userPassword` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `securePassword` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


drop table if exists empresas;
create table empresas(
	id int primary key auto_increment,
    tema varchar (100),
    nombre varchar (50),
    sedes varchar (255)
        `empresaId` int(11) NOT NULL AUTO_INCREMENT,
  `empresaName` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `empresaPassword` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `securePassword` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`empresaId`),
  UNIQUE KEY `empresaName` (`empresaName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

drop table if exists trabajos;
create table trabajos(
	id int primary key auto_increment,
    tipo varchar(50),
    empresa varchar (50),
    descripcion varchar (255),
    ubicacion varchar (50),
    fecha date,
    salario decimal,
    duracion decimal
);





INSERT INTO `empresas` (`empresaId`, `empresaName`, `empresaPassword`, `securePassword`) VALUES
(1, 'TerraNova', '1234', '$2y$10$L8H6tTdwYbrxE32W3oOg/.u/wy9rcxFOryh3Z92LLd6UtN1fZ8Ad.');
COMMIT;

