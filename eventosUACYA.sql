-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-01-2023 a las 00:26:15
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `eventosUACYA`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE `asistentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sangre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `unidad_academica` int(11) NOT NULL,
  `carrera` int(11) NOT NULL COMMENT 'Programa',
  `numero_control` int(11) NOT NULL COMMENT 'Matrícula',
  `evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asistentes`
--

INSERT INTO `asistentes` (`id`, `nombre`, `apellidos`, `tipo_sangre`, `semestre`, `unidad_academica`, `carrera`, `numero_control`, `evento`) VALUES
(1, 'rodolfo', 'leaños', 0, 9, 3, 5, 450489, 10),
(2, 'JesusRLV', 'Leaños Villegas', 7, 9, 1, 5, 450489, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `capacidad` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `lugar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `activo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `capacidad`, `fecha`, `lugar`, `activo`) VALUES
(1, 'EVENTO ', 60, '2022-12-01', 'ANFECA', NULL),
(2, 'EVENTO 2', 60, '2022-12-01', 'ANFECA', NULL),
(3, 'EVENTO 3', 60, '2022-12-01', 'ANFECA', NULL),
(4, 'EVENTO 4', 60, '2022-12-01', 'ANFECA', NULL),
(5, 'EVENTO 5', 60, '2022-12-01', 'ANFECA', NULL),
(6, 'EVENTO 6', 60, '2022-12-01', 'ANFECA', NULL),
(7, 'EVENTO 7', 60, '2022-12-01', 'ANFECA', NULL),
(8, 'EVENTO 8', 60, '2022-12-01', 'ANFECA', NULL),
(9, 'EVENTO 9', 30, '2022-12-02', 'Auditorio FCA', 1),
(10, 'EVENTO 9', 30, '2022-12-02', 'Auditorio FCA', 1),
(11, 'Contabilidad', 10, '2022-12-04', 'Aula 1', 1),
(12, 'Simpsium', 30, '2022-12-01', 'ANFECA', 1),
(13, 'Evento NOV', 21, '2022-11-01', 'Anfeca', 1),
(14, 'Evento OCT', 9, '2022-10-01', 'FECA', 1),
(15, 'Evento SEPT', 81, '2022-09-01', 'Anfeca', 1),
(16, 'Evento DIC', 90, '2022-12-19', 'FECA', 1),
(17, 'Evento ENE 2023', 9, '2023-01-02', 'FECA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(11) NOT NULL,
  `programa` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id`, `programa`) VALUES
(1, 'Licenciatura en contaduría'),
(2, 'Licenciatura en administración'),
(3, 'Maestría en administración'),
(4, 'Maestría en impuestos'),
(5, 'Doctorado en administración'),
(6, 'Doctorado en impuestos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `asistente` int(11) NOT NULL,
  `evento` int(11) NOT NULL,
  `asistencia` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sangre`
--

CREATE TABLE `sangre` (
  `id` int(11) NOT NULL,
  `tipo_sangre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sangre`
--

INSERT INTO `sangre` (`id`, `tipo_sangre`) VALUES
(1, 'A positivo (A +)'),
(2, 'A negativo (A-)'),
(3, 'B positivo (B +)'),
(4, 'B negativo (B-)'),
(5, 'AB positivo (AB+)'),
(6, 'AB negativo (AB-)'),
(7, 'O positivo (O+)'),
(8, 'O negativo (O-)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestre`
--

CREATE TABLE `semestre` (
  `id` int(11) NOT NULL,
  `semestre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `semestre`
--

INSERT INTO `semestre` (`id`, `semestre`) VALUES
(1, 'Primer semestre'),
(2, 'Segundo semestre'),
(3, 'Tercer semestre'),
(4, 'Cuarto semestre'),
(5, 'Quinto semestre'),
(6, 'Sexto semestre'),
(7, 'Séptimo semestre'),
(8, 'Octavo semestre'),
(9, 'Noveno semestre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_academica`
--

CREATE TABLE `unidad_academica` (
  `id` int(11) NOT NULL,
  `unidad_academica` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `unidad_academica`
--

INSERT INTO `unidad_academica` (`id`, `unidad_academica`) VALUES
(1, 'Unidad Académica de Contaduría y Adminisitración');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` int(20) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sangre`
--
ALTER TABLE `sangre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidad_academica`
--
ALTER TABLE `unidad_academica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sangre`
--
ALTER TABLE `sangre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `semestre`
--
ALTER TABLE `semestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `unidad_academica`
--
ALTER TABLE `unidad_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
