-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 19:30:40
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_web2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `fk_id_notebook` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `fk_id_notebook`, `fk_id_usuario`, `puntuacion`, `comentario`) VALUES
(4, 15, 10, 4, 'excelente potencia'),
(5, 15, 10, 4, 'buen precio'),
(7, 15, 10, 5, 'listo lucaaaaaaaaaaa'),
(8, 32, 11, 5, 'excelente notebook');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`) VALUES
(1, 'Asus'),
(2, 'MSI'),
(3, 'Samsung'),
(4, 'HP'),
(5, 'Razer'),
(8, 'Dell');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notebooks`
--

CREATE TABLE `notebooks` (
  `id_notebook` int(11) NOT NULL,
  `procesador` varchar(50) NOT NULL,
  `memoria_ram` varchar(50) NOT NULL,
  `placa_video` varchar(50) DEFAULT NULL,
  `disco` varchar(50) NOT NULL,
  `fk_marca` int(11) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notebooks`
--

INSERT INTO `notebooks` (`id_notebook`, `procesador`, `memoria_ram`, `placa_video`, `disco`, `fk_marca`, `imagen`) VALUES
(15, 'Intel i5 7300hq', '32gb', 'GTX 1060', '500gb', 5, NULL),
(20, 'Intel i5 7300hq', '16gb', 'GTX 1050', '500gb', 5, NULL),
(29, 'i7 8700hq', '32gb', '2080ti', '1tb', 1, NULL),
(30, 'i5 10100', '16gb', '2060ti', '500gb', 2, NULL),
(31, 'i3 7100u', '8gb', 'Gtx 860m', '500gb', 4, NULL),
(32, 'Intel i7 7700hq', '16gb', 'GTX 1060', '1 TB', 3, NULL),
(33, 'Intel i7 7700hq', '32gb', 'GTX 1080', '2 TB', 8, NULL),
(34, 'Intel i5 7300hq', '16gb', 'GTX 1050', '500 gb', 8, NULL),
(35, 'Intel i7 9700hq', '32gb', 'GTX 2080ti', '1 TB', 2, NULL),
(36, 'Intel i5 9500hq', '16gb', 'GTX 2060ti', '500 gb', 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `administrador` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contraseña`, `email`, `administrador`) VALUES
(10, 'ahorasi', '$2y$10$VCyGjl7HigRrOP/bQnpR6uElUjYZtL3q49Pau0OwNyUnM9PMWT2Oi', 'ahorasi@ahora.com', 1),
(11, 'fran1', '$2y$10$9HIUlmvxZGD4YMo94L0xveujHZc6pI4QKtuhnr8R2YZkSn0chrYw6', 'fran1@fran.com', NULL),
(15, 'poyy', '$2y$10$N66hOLQe0H7xDy6Q8HVFXOlbR7cEODIbJsHNhOfTQr5.pTLW.xx0W', 'poyy@poyy.com', 1),
(16, 'gato11', '$2y$10$ksnL8KeU.TkH9CxwrBzrqeP2IkVdC6J34U3gmWIaRcHWEDJZ0FJ2K', 'gato11@gato.com', NULL),
(19, 'Franco', '$2y$10$W7mP60pmECD0XfBfABgx5O2CuArKvQEBPrTAmYZ1wDnjrbzyBXDmi', 'franco@franco.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `fk_comentario_notebook` (`fk_id_notebook`),
  ADD KEY `fk_comentario_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `notebooks`
--
ALTER TABLE `notebooks`
  ADD PRIMARY KEY (`id_notebook`),
  ADD KEY `FK_MARCA` (`fk_marca`) USING BTREE;

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `notebooks`
--
ALTER TABLE `notebooks`
  MODIFY `id_notebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_comentario_notebook` FOREIGN KEY (`fk_id_notebook`) REFERENCES `notebooks` (`id_notebook`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comentario_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notebooks`
--
ALTER TABLE `notebooks`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`fk_marca`) REFERENCES `marcas` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
