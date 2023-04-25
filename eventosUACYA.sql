-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2023 a las 17:21:12
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_asistente` int(11) NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido_m` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_sangre` int(11) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `grupo` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unidad_academica` int(11) DEFAULT NULL,
  `carrera` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Programa',
  `numero_control` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Matrícula',
  `idQr` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asistentes`
--

INSERT INTO `asistentes` (`id`, `nombre`, `tipo_asistente`, `apellidos`, `apellido_m`, `curp`, `tipo_sangre`, `semestre`, `grupo`, `unidad_academica`, `carrera`, `numero_control`, `idQr`) VALUES
(1, 'rodolfo', 0, 'leaños', '0', '', 0, 9, 'A', 3, '5', '450489', ''),
(2, 'JesusRLV', 0, 'Leaños Villegas', '0', '', 7, 9, 'B', 1, '5', '450489', ''),
(29, 'Jesús Rodolfo', 0, 'Leaños Villegas', '0', '', 7, 9, 'C', 1, '5', '450489', ''),
(30, 'Jesús Rodolfo', 0, 'Leaños Villegas', '0', '', 7, 9, 'A', 1, '5', '450489', '00450489_LEVJ810924HZSXLS03'),
(31, 'JesusRLV', 0, 'Leaños Villegas', '0', 'LEVJ810924HZSXLS04', 7, 9, 'A', 1, '5', '450489', '00450489_LEVJ810924HZSXLS04'),
(32, 'Pedro', 0, 'Bermúdez', '0', 'LEVJ810924HZSXLS04', 7, 9, 'B', 1, '1', '9', '0009_LEVJ810924HZSXLS04'),
(33, 'Pedro', 0, 'Bermúdez', '0', 'LEVJ810924HZSXLS04', 7, 9, 'C', 1, '1', '9', '0009_LEVJ810924HZSXLS04'),
(34, 'Pedro', 0, 'Bermúdez', '0', 'LEVJ810924HZSXLS04', 7, 9, 'C', 1, '1', '9', '0009_LEVJ810924HZSXLS04'),
(35, 'Pedro', 0, 'Bermúdez', '0', 'LEVJ810924HZSXLS04', 7, 9, 'A', 1, '1', '9', '0009_LEVJ810924HZSXLS04'),
(36, 'Pedro', 0, 'Bermúdez 2', '0', 'LEVJ810924HZSXLS04', 7, 9, 'B', 1, '1', '10', '00010_LEVJ810924HZSXLS04'),
(37, 'Jesus', 1, 'Alumnos 32', '0', 'SAOJ050223MTLLRCA4', 7, 9, 'D', 1, '5', '00450489', '00450489_SAOJ050223MTLLRCA4'),
(38, 'Jesus', 1, 'Alumnos 32', '0', 'SAOJ050223MTLLRCA4', 7, 9, 'D', 1, '5', '00450489', '00450489_SAOJ050223MTLLRCA4'),
(39, 'Jesus', 1, 'Alumnos 32', '0', 'SAOJ050223MTLLRCA4', 7, 9, 'D', 1, '5', '00450489', '00450489_SAOJ050223MTLLRCA4'),
(40, 'Jesus', 1, 'Alumnos 32', '0', 'SAOJ050223MTLLRCA4', 8, 1, 'D', 1, '5', '4556676655', '4556676655_SAOJ050223MTLLRCA4.png'),
(41, 'MARCO ANTONIO', 1, 'CANCINO ', 'ANCHEYTA', 'CAAM791207HCSNNR07', NULL, NULL, NULL, NULL, 'DOCTORADO EN IMPUESTOS                                                ', '42205574', NULL),
(42, 'CELBA', 1, 'CASTILLO', 'CHAIREZ', 'CACC561125MZSSHL08', NULL, NULL, NULL, NULL, 'DOCTORADO EN IMPUESTOS                                                ', '39200547', NULL),
(43, 'JORGE CARLOS', 1, 'DE LA BRENA', 'WIEDFELDT', 'BEWJ740122HDFRDR09', NULL, NULL, NULL, NULL, 'DOCTORADO EN IMPUESTOS                                                ', '42205713', NULL),
(44, 'SALVADOR', 1, 'DEL HOYO', 'SOTO', 'HOSS721204HZSYTL06', NULL, NULL, NULL, NULL, 'DOCTORADO EN IMPUESTOS                                                ', '21205404', NULL),
(45, 'JUAN', 1, 'ESPINOZA', 'GARCIA', 'EIGJ850106HVZSRN07', NULL, NULL, NULL, NULL, 'DOCTORADO EN IMPUESTOS                                                ', '42205714', NULL),
(46, 'NORBERTO', 1, 'ESTRADA', 'GUTIERREZ', 'EAGN650606HTSSTR09', NULL, NULL, NULL, NULL, 'DOCTORADO EN IMPUESTOS                                                ', '42207726', NULL),
(47, 'MONICA ISELA', 1, 'GALINDO ', 'COSME', 'GACM680902MDFLSN08', NULL, NULL, NULL, NULL, 'DOCTORADO EN IMPUESTOS                                                ', '42205965', NULL),
(48, 'JESUS FIDEL', 1, 'HERNANDEZ', 'RODRIGUEZ', 'HERJ661015HDFRDS08', NULL, NULL, NULL, NULL, 'DOCTORADO EN IMPUESTOS                                                ', '42205966', NULL);

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
(21, '', 0, '0000-00-00', '', 1),
(22, 'Simpsium', 30, '2023-01-01', 'ANFECA', 1),
(23, 'Evento prueba 1', 60, '2023-02-15', 'Auditorio FCA', 1),
(24, 'Simposium', 90, '2023-02-16', 'Fernando Calderón', 1);

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
(36, 31, 19, 1, '2023-01-04 14:27:28', '00450489_LEVJ810924HZSXLS04'),
(37, 31, 22, 1, '2023-01-09 10:03:42', '00450489_LEVJ810924HZSXLS04'),
(41, 32, 22, 1, '2023-01-10 21:31:40', '0009_LEVJ810924HZSXLS04'),
(42, 32, 23, 1, '2023-02-15 18:10:46', '0009_LEVJ810924HZSXLS04'),
(43, 32, 24, 1, '2023-02-16 17:38:49', '0009_LEVJ810924HZSXLS04');

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
  `tipo_sitio` int(11) NOT NULL COMMENT '1 -Biblioteca 2- CC',
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sitio`
--

INSERT INTO `sitio` (`id`, `sitio`, `tipo_sitio`, `activo`) VALUES
(1, 'Biblioteca', 1, 1),
(2, 'Centro de Cómputo', 2, 1),
(4, 'Sitio 2', 3, 1),
(5, 'sitio 3', 3, 1),
(6, 'sitio 4', 3, 1),
(15, 'ANFECA', 1, 1),
(16, 'ANFECA 2', 2, 1),
(17, 'ANFECA 3', 3, 1);

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
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `usr`, `pwd`, `perfil`) VALUES
(1, 'admin', 123456789, 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `unidad_academica`
--
ALTER TABLE `unidad_academica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
