-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 21-05-2024 a las 09:44:42
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shortJobs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int NOT NULL,
  `tema` varchar(100) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `sedes` varchar(255) DEFAULT NULL,
  `valoracion` int DEFAULT NULL
) ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `tema`, `nombre`, `sedes`, `valoracion`) VALUES
(1, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(2, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(3, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(4, 'Historia', 'GómezCCS', 'Albal', 4),
(5, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(6, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(7, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(8, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(9, 'Historia', 'GómezCCS', 'Albal', 4),
(10, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(11, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(12, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(13, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(14, 'Historia', 'GómezCCS', 'Albal', 4),
(15, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(16, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(17, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(18, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(19, 'Historia', 'GómezCCS', 'Albal', 4),
(20, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(21, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(22, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(23, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(24, 'Historia', 'GómezCCS', 'Albal', 4),
(25, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(26, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(27, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(28, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(29, 'Historia', 'GómezCCS', 'Albal', 4),
(30, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(31, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(32, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(33, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(34, 'Historia', 'GómezCCS', 'Albal', 4),
(35, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(36, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(37, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(38, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(39, 'Historia', 'GómezCCS', 'Albal', 4),
(40, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(41, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(42, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(43, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(44, 'Historia', 'GómezCCS', 'Albal', 4),
(45, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(46, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(47, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(48, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(49, 'Historia', 'GómezCCS', 'Albal', 4),
(50, 'Literatura', 'PacoPaco', 'Paiporta', 2),
(51, 'Tecnología', 'JuanSL', 'Catarroja', 4),
(52, 'Ciencia', 'MaríaSL', 'Almusafes', 5),
(53, 'Matemáticas', 'HermanosSL', 'Madriz', 3),
(54, 'Historia', 'GómezCCS', 'Albal', 4),
(55, 'Literatura', 'PacoPaco', 'Paiporta', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE `trabajos` (
  `id` int NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `ubicacion` varchar(50) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `salario` decimal(10,0) DEFAULT NULL,
  `duracion` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id`, `nombre`, `tipo`, `empresa`, `descripcion`, `ubicacion`, `fecha`, `salario`, `duracion`) VALUES
(1, 'nombre1', 'tipo1', 'empresa1', 'descripcion1', 'ubicacion1', '2023-05-01', 50000, 2),
(2, 'nombre2', 'tipo2', 'empresa2', 'descripcion2', 'ubicacion2', '2023-06-01', 60000, 1),
(3, 'nombre3', 'tipo3', 'empresa3', 'descripcion3', 'ubicacion3', '2023-07-01', 70000, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `userId` int NOT NULL,
  `userName` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `userPassword` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `securePassword` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`userId`, `userName`, `userPassword`, `securePassword`) VALUES
(1, 'TerraNova', '1234', '$2y$10$L8H6tTdwYbrxE32W3oOg/.u/wy9rcxFOryh3Z92LLd6UtN1fZ8Ad.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `dni` varchar(9) NOT NULL,
  `nombreCompleto` varchar(100) DEFAULT NULL,
  `numeroSeguridadSocial` int DEFAULT NULL,
  `curriculum` varchar(255) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `correoElectronico` varchar(30) DEFAULT NULL,
  `nombreUsuario` varchar(50) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  `valoracion` int DEFAULT NULL
) ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`dni`, `nombreCompleto`, `numeroSeguridadSocial`, `curriculum`, `direccion`, `ciudad`, `correoElectronico`, `nombreUsuario`, `contraseña`, `valoracion`) VALUES
('12345678F', 'Juan Pérez', 123456789, 'Curriculum Juan Pérez', 'Calle Principal 123', 'CiudadA', 'juan@example.com', 'juanperez', 'contraseña123', 4),
('19876543W', 'Elena Rodríguez', 198765432, 'Curriculum Elena Rodríguez', 'Calle Mayor 198', 'CiudadJ', 'elena@example.com', 'elenarodriguez', 'elena198', 4),
('23456789G', 'Carlos Hernández', 234567891, 'Curriculum Carlos Hernández', 'Calle Nueva 234', 'CiudadG', 'carlos@example.com', 'carloshernandez', 'carlos234', 4),
('32165498A', 'Luis Rodríguez', 321654987, 'Curriculum Luis Rodríguez', 'Ronda Norte 654', 'CiudadE', 'luis@example.com', 'luisrodriguez', 'luis321', 5),
('45678912Y', 'Pedro López', 456789123, 'Curriculum Pedro López', 'Plaza Mayor 789', 'CiudadC', 'pedro@example.com', 'pedrolopez', 'pedro456', 3),
('56789123O', 'David Pérez', 567891234, 'Curriculum David Pérez', 'Plaza Vieja 891', 'CiudadI', 'david@example.com', 'davidperez', 'david891', 3),
('65498732D', 'Laura Sánchez', 654987321, 'Curriculum Laura Sánchez', 'Camino Viejo 987', 'CiudadF', 'laura@example.com', 'laurasanchez', 'laura987', 3),
('78912345H', 'Ana Martínez', 789123456, 'Curriculum Ana Martínez', 'Paseo Secundario 321', 'CiudadD', 'ana@example.com', 'anamartinez', 'ana789', 4),
('87654321I', 'Sara López', 876543219, 'Curriculum Sara López', 'Avenida Antigua 567', 'CiudadH', 'sara@example.com', 'saralopez', 'sara876', 5),
('98765432R', 'María García', 987654321, 'Curriculum María García', 'Avenida Central 456', 'CiudadB', 'maria@example.com', 'mariagarcia', 'maria123', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `userId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
