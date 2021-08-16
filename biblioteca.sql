-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2021 a las 00:53:54
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` smallint(6) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `usuario`, `mail`, `mensaje`) VALUES
(7, '', 'bernardonogues@yahoo.com', 'fdfdfd'),
(8, 'berna', 'bernardonogues@yahoo.com', 'prueba 02'),
(11, 'berna', 'bernardonogues@yahoo.com', 'sss'),
(12, 'berna', 'bernardonogues@yahoo.com', 'fffff'),
(13, 'berna', '', ''),
(14, 'berna', 'bernardonogues@yahoo.com', 'fdd'),
(15, 'berna', 'bernardonogues@yahoo.com', ''),
(16, 'berna', 'bernardonogues@yahoo.com', 'dfdfdfd'),
(17, 'berna', 'bernardonogues@yahoo.com', 'prueba20'),
(29, 'berna', '', ''),
(30, 'berna', '', ''),
(31, 'berna', 'dfdddf@yahoo.com', 'dddd'),
(32, 'berna', 'bernardonogues@yahoo.com', 'mendsa  de hoy  16/08'),
(33, 'berna', '', ''),
(34, 'berna', '', 'dfdfd'),
(35, 'berna', '', ''),
(36, 'berna', '', 'JKJKLJK'),
(37, 'berna', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `isbn` int(15) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `idioma` varchar(20) NOT NULL,
  `paginas` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `resena` text NOT NULL,
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`isbn`, `titulo`, `autor`, `editorial`, `idioma`, `paginas`, `total`, `resena`, `imagen`) VALUES
(400, 'prueba titulo modif', 'autorr modif', '', 'espanol', 450, 5, 'resena modif', 'ISBN-001.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `isbn` int(15) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `fechaprestamo` date NOT NULL,
  `fechadevolucion` date NOT NULL,
  `fechadevuelto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` smallint(6) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `nombre`, `direccion`, `telefono`, `mail`) VALUES
(3, 'BERNA', '', 'BERNARDOssd', 'Minas y Cordon 1518', '21234568', 'bernardonogues@yahoo.com'),
(4, 'Jose', '', 'Jose Luis Alvez', 'Maldonado 1577', '4128899', 'joseluis@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`isbn`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD KEY `isbn` (`isbn`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario01` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
