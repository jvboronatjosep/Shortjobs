-- Elimina la base de datos si existe y la crea nuevamente
DROP DATABASE IF EXISTS shortJobs;
CREATE DATABASE IF NOT EXISTS shortJobs;

-- Usa la base de datos recién creada
USE shortJobs;

-- Elimina la tabla 'usuarios' si existe y la crea nuevamente
DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
    dni VARCHAR(9) PRIMARY KEY,
    nombreCompleto VARCHAR(100),
    numeroSeguridadSocial INT,
    curriculum VARCHAR(255),
    direccion VARCHAR(100),
    ciudad VARCHAR(30),
    correoElectronico VARCHAR(50),
    nombreUsuario VARCHAR(50),
    contraseña VARCHAR(100)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Elimina la tabla 'empresas' si existe y la crea nuevamente
DROP TABLE IF EXISTS empresas;

CREATE TABLE empresas (
    empresaId INT(11) NOT NULL AUTO_INCREMENT,
    empresaName VARCHAR(255) COLLATE utf8_spanish_ci NOT NULL,
    empresaPassword VARCHAR(255) COLLATE utf8_spanish_ci NOT NULL,
    securePassword VARCHAR(60) COLLATE utf8_spanish_ci NOT NULL,
    PRIMARY KEY (empresaId),
    UNIQUE KEY empresaName (empresaName)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Elimina la tabla 'trabajos' si existe y la crea nuevamente
DROP TABLE IF EXISTS trabajos;

CREATE TABLE trabajos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo VARCHAR(50),
    empresa VARCHAR(50),
    descripcion VARCHAR(255),
    ubicacion VARCHAR(50),
    fecha DATE,
    salario DECIMAL(10, 2),
    duracion DECIMAL(10, 2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Inserta un registro en la tabla 'empresas'
INSERT INTO empresas (empresaId, empresaName, empresaPassword, securePassword) VALUES
(1, 'TerraNova', '1234', '$2y$10$L8H6tTdwYbrxE32W3oOg/.u/wy9rcxFOryh3Z92LLd6UtN1fZ8Ad.');

-- Confirma la transacción
COMMIT;