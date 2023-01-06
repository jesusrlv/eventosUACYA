-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-01-2023 a las 09:20:30
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
  `curp` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sangre` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `unidad_academica` int(11) NOT NULL,
  `carrera` int(11) NOT NULL COMMENT 'Programa',
  `numero_control` int(11) NOT NULL COMMENT 'Matrícula',
  `evento` int(11) DEFAULT NULL,
  `idQr` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asistentes`
--

INSERT INTO `asistentes` (`id`, `nombre`, `apellidos`, `curp`, `tipo_sangre`, `semestre`, `unidad_academica`, `carrera`, `numero_control`, `evento`, `idQr`) VALUES
(1, 'rodolfo', 'leaños', '', 0, 9, 3, 5, 450489, 10, ''),
(2, 'JesusRLV', 'Leaños Villegas', '', 7, 9, 1, 5, 450489, 12, ''),
(3, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, 0, ''),
(4, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, 0, ''),
(5, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(6, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(7, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(8, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(9, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(10, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(11, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(12, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(13, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(14, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(15, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(16, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(17, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(18, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(19, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(20, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(21, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(22, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(23, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(24, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(25, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(26, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(27, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(28, 'Ana Elisa', 'Barba Pinedo', '', 1, 2, 1, 3, 450487, NULL, ''),
(29, 'Jesús Rodolfo', 'Leaños Villegas', '', 7, 9, 1, 5, 450489, NULL, ''),
(30, 'Jesús Rodolfo', 'Leaños Villegas', '', 7, 9, 1, 5, 450489, NULL, '00450489_LEVJ810924HZSXLS03'),
(31, 'JesusRLV', 'Leaños Villegas', 'LEVJ810924HZSXLS04', 7, 9, 1, 5, 450489, NULL, '00450489_LEVJ810924HZSXLS04');

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
(17, 'Evento ENE 2023', 9, '2023-01-02', 'FECA', 1),
(18, 'Evento ENE 2023 2', 81, '2023-01-04', 'FECA', 1),
(19, 'Evento ENE 2023 3', 21, '2023-01-04', 'Anfeca', 1),
(20, '', 0, '0000-00-00', '', 1),
(21, '', 0, '0000-00-00', '', 1);

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
  `fecha_registro` datetime NOT NULL,
  `idQr` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `asistente`, `evento`, `asistencia`, `fecha_registro`, `idQr`) VALUES
(1, 27, 17, 1, '2023-01-02 00:00:00', '1'),
(34, 31, 17, 1, '2023-01-04 02:35:36', '00450489_LEVJ810924HZSXLS04'),
(35, 31, 18, 1, '2023-01-04 14:24:52', '00450489_LEVJ810924HZSXLS04'),
(36, 31, 19, 1, '2023-01-04 14:27:28', '00450489_LEVJ810924HZSXLS04');

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
-- Estructura de tabla para la tabla `sitio`
--

CREATE TABLE `sitio` (
  `id` int(11) NOT NULL,
  `sitio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sitio`
--

INSERT INTO `sitio` (`id`, `sitio`, `activo`) VALUES
(1, 'Biblioteca', 0),
(2, 'Centro de Cómputo', 1),
(4, 'Sitio 2', 0),
(5, 'sitio 3', 1),
(6, 'sitio 4', 1);

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
-- Indices de la tabla `sitio`
--
ALTER TABLE `sitio`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
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
-- AUTO_INCREMENT de la tabla `sitio`
--
ALTER TABLE `sitio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
