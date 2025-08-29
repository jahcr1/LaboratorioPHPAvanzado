-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 06:45:40
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phpavanzado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `id_consulta` int(6) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(70) NOT NULL,
  `email` varchar(120) NOT NULL,
  `consulta` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`id_consulta`, `nombre`, `apellido`, `email`, `consulta`) VALUES
(1, 'Martin', 'Contreras', 'cleena@sdeasd.com', 'sdsdsdasdsad'),
(2, 'dai', 'Quiroga', 'clientes@gmail.net', 'prueba3'),
(3, 'Martin', 'Quiroga', 'cliente@gmail.com', 'ptuebaaaaaa 1'),
(4, 'dai', 'sdoks', 'kamsdh@hot.com', 'poopopopopo'),
(5, 'Martin', 'Contreras', 'kamsdh@hot.com', 'jajajajajajjajaa'),
(6, 'dai', 'Quiroga', 'cliente@gmail.com', 'jejejejejejejeje'),
(7, 'dai', 'Contreras', 'cliente@gmail.com', 'jijijijijijij'),
(8, 'ivan', 'Contreras', 'cliente@gmail.com', 'pw correcta'),
(9, 'Martin', 'Contreras', 'dsdsd@hoarn.com', 'gg pw bien'),
(10, 'Martin', 'Contreras', 'dsdsd@hoarn.com', 'gg pw bien1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id_consulta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id_consulta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
