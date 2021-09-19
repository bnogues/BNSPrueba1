-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2021 a las 16:34:46
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
(13, 'berna', '', ''),
(14, 'berna', 'bernardonogues@yahoo.com', 'fdd'),
(15, 'berna', 'bernardonogues@yahoo.com', ''),
(16, 'berna', 'bernardonogues@yahoo.com', 'dfdfdfd'),
(17, 'berna', 'bernardonogues@yahoo.com', 'prueba20'),
(31, 'berna', 'dfdddf@yahoo.com', 'dddd'),
(32, 'berna', 'bernardonogues@yahoo.com', 'mendsa  de hoy  16/08'),
(38, 'berna', 'ber@yahoo.com', 'consulta prueba'),
(39, 'berna', 'ber@yahoo.com', 'dddd'),
(40, 'berna', 'ber@yahoo.com', 'dfdd'),
(41, 'berna', 'ber@yahoo.com', 'dddd'),
(42, 'berna', 'ber@yahoo.com', 'prueba 2 contacform'),
(43, 'berna', 'ber@yahoo.com', 'prueba3'),
(44, 'berna', 'ber@yahoo.com', 'preuba 4'),
(45, 'berna', '', ''),
(46, 'berna', 'ber@yahoo.com', 'fff'),
(47, 'Invitado', 'ber@yahoo.com', 'prueba sin conectar'),
(48, 'BERNA', 'ber@yahoo.com', 'prueba conectado ');

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
(401, 'Veinte Mil Leguas de Viaje Submarino', 'Julio Verne', 'Santillana', 'Español', 200, 4, 'para Adolecentes', 'veinte-mil-leguas.jpg'),
(500, 'Meditacion Vipasana', 'Tato Lopez', 'Oceano', 'Español', 366, 2, '', 'ISBN-005.jpeg'),
(501, 'Siete Fuegos', 'Francis Mallmann', 'Sudamericana', 'Español', 300, 2, 'Cocina Argentinas', 'ISBN-004.jpeg'),
(602, 'Arsene Lupin - Caballero Ladron', 'Marcel Leblanc', 'Santillana', 'Español', 300, 2, 'Policial Negro', 'ISBN-002.jpg'),
(650, 'El Oscuro Adios de Teresa Lanza', 'Toni Hill', 'Grijalbo', 'Ingles', 150, 5, 'Misterio', 'ISBN-001.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id` smallint(6) NOT NULL,
  `pregunta` varchar(150) NOT NULL,
  `respuesta1` varchar(100) NOT NULL,
  `respuesta2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `pregunta`, `respuesta1`, `respuesta2`) VALUES
(1, 'Como solicitar un Prestamo de Libro ?', 'Primero registrarse como usuario (opción \"Registro\") y luego solicitar el Préstamo seleccionando el ', ''),
(3, 'Opciones del Menu ?', 'Si el Usuario no esta Logueado tendra disponible las Opciones Inicio, Contacto, Preguntas Frecuentes', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id` int(12) NOT NULL,
  `isbn` int(15) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `fechaprestamo` date NOT NULL,
  `fechadevolucion` date NOT NULL,
  `fechadevuelto` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id`, `isbn`, `usuario`, `fechaprestamo`, `fechadevolucion`, `fechadevuelto`) VALUES
(10, 501, 'berna', '2021-09-02', '2021-09-03', '2021-09-05'),
(13, 401, 'berna', '2021-09-05', '2021-09-06', '2021-09-08'),
(14, 500, 'BERNA', '2021-09-05', '2021-09-06', '2021-09-05'),
(15, 401, 'BERNA', '2021-09-06', '2021-09-07', '2021-09-08'),
(16, 401, 'BERNA', '2021-09-07', '2021-09-08', '2021-09-08'),
(17, 401, 'BERNA', '2021-09-08', '2021-09-09', '2021-09-08'),
(18, 401, 'BERNA', '2021-09-08', '2021-09-09', '2021-09-08'),
(19, 401, 'BERNA', '2021-09-08', '2021-09-09', '2021-09-08'),
(20, 401, 'BERNA', '2021-09-08', '2021-09-09', '2021-09-08'),
(21, 401, 'BERNA', '2021-09-08', '2021-09-09', '0000-00-00'),
(22, 401, 'LUCHO', '2021-09-08', '2021-09-09', '0000-00-00'),
(23, 500, 'LUCHO', '2021-09-08', '2021-09-09', '2021-09-08'),
(25, 401, 'Registro02', '2021-09-12', '2021-09-13', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` smallint(6) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `contrasena` varchar(12) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `contrasena`, `nombre`, `direccion`, `telefono`, `mail`) VALUES
(3, 'BERNA', 'berna', 'BERNARDO (Administrador)', 'Minas y Cordon 1518', '21234568', 'bernardonogues@yahoo.com'),
(5, 'LUCHO', 'luis', 'LUIS', 'Fernandez Crespo 1570', '58794666', 'luis@yahoo.com'),
(6, 'jose', 'jose', 'Jose Antonio', 'Haedo 8899', '789555666', 'jose@yahoo.com'),
(10, 'Mario ', 'mario', 'Mario', 'Lindolfo Cuestas 1546', '3546879', 'mario@yahoo.com'),
(11, 'Fernando', 'fernandos', 'Fernando', 'soriano 1222', '33333345', 'fernando@yahoo.com'),
(12, 'Registro02', 'reg02', 'prueba registro 02', 'direc reg02', '4445566', 'reg02@yahoo.com'),
(15, 'Nestor', 'nes', 'Nestor Luis', 'varela 456', '78945', 'nestor@yahoo.com'),
(23, 'pruebanull05', 'null55', 'nombrenull 5', 'direc null5 ', '5555', 'null5@yahoo.com'),
(24, 'null062', 'null06', 'nombrenull06', 'dorec06', '66666', 'null6@yahoo.com');

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
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
