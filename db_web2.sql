-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2021 a las 18:10:57
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

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
(5, 'Samsung'),
(12, 'Asus'),
(17, 'HP'),
(18, 'Razer'),
(19, 'Dell'),
(20, 'MSI');

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
  `fk_marca` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notebooks`
--

INSERT INTO `notebooks` (`id_notebook`, `procesador`, `memoria_ram`, `placa_video`, `disco`, `fk_marca`) VALUES
(15, 'Intel i5 7300hq', '32gb', 'GTX 1060', '500gb', 5),
(20, 'Intel i5 7300hq', '16gb', 'GTX 1050', '500gb', 5),
(34, 'Intel i5 7800k', '16 GB', 'RXT 1080', '1000GB', 12),
(35, 'Ryzen 3 3600', '8 GB', 'RTX 2050 ti', '250 GB', 12),
(36, 'Ryzen 5 2600 ', '8 GB', 'GTX 1060', '1000GB', 17),
(37, 'Intel i7 5700', '16 GB', 'RTX 1600 ', '1000GB', 17),
(38, 'Ryzen 7 2600 ', '16 GB', 'RXT 1050 ti', '1000GB', 18),
(39, 'Intel i9 9900', '16 GB', 'RXT 1080 ti', '250 GB', 18),
(40, 'Intel i7 8800', '16 GB', 'GTX 2060 ti', '250 GB', 19);

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
(15, 'poyy', '$2y$10$N66hOLQe0H7xDy6Q8HVFXOlbR7cEODIbJsHNhOfTQr5.pTLW.xx0W', 'poyy@poyy.com', NULL),
(16, 'gato11', '$2y$10$ksnL8KeU.TkH9CxwrBzrqeP2IkVdC6J34U3gmWIaRcHWEDJZ0FJ2K', 'gato11@gato.com', NULL),
(18, 'hola', '$2y$10$h1YQ9vZdwNN9zCDN3qZZbu1F/tTORlN6BS0sjLJOE/9IqQEgnRXuu', 'hola@hola.com', NULL);

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `notebooks`
--
ALTER TABLE `notebooks`
  MODIFY `id_notebook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notebooks`
--
ALTER TABLE `notebooks`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`fk_marca`) REFERENCES `marcas` (`id_marca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
