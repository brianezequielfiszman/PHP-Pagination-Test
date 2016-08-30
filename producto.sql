-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2016 a las 07:15:49
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE_PRODUCTO` varchar(50) NOT NULL,
  `PRECIO_PRODUCTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_PRODUCTO`, `NOMBRE_PRODUCTO`, `PRECIO_PRODUCTO`) VALUES
(1, 'Vino', 50),
(2, 'Queso', 10),
(3, 'Asado', 90),
(4, 'Pescado', 110),
(5, 'Patata', 123),
(6, 'Tomate', 20),
(7, 'MaÃ­z', 20),
(8, 'Ciruela', 15),
(9, 'Manzana', 15),
(10, 'Naranja', 15),
(11, 'Patata', 10),
(12, 'Cerdo', 100),
(13, 'Guitarra', 500),
(14, 'Guitarra Electrica', 5000),
(15, 'Bajo Electrico', 5000),
(16, 'SaxofÃ³n', 4000),
(17, 'Piano', 20000),
(18, 'Monitor', 1000),
(19, 'OnePlus One', 7000),
(20, 'Samsung S4', 4000),
(21, 'Moto E 2012', 2000),
(22, 'Moto G 2012', 3400),
(23, 'Moto X 2012', 5500),
(24, 'Mouse', 100),
(25, 'Coca Cola 1.5L', 20),
(26, 'Coca Cola 600ml', 15),
(27, 'Pepsi 1.5L', 19),
(28, 'Pepsi 500ml', 13),
(29, 'Espaguetti', 25),
(30, 'Tarta', 40);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_PRODUCTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
