-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2022 a las 22:08:43
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.15

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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `adid` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`adid`, `usuario`, `contrasena`) VALUES
(1, '12345', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `carid` int(11) NOT NULL,
  `carrera` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`carid`, `carrera`) VALUES
(1, 'MEDICINA VETERINARIA Y ZOOTECNIA'),
(2, 'ACUICULTURA'),
(3, 'ESTADISTICA'),
(4, 'MATEMATICAS'),
(5, 'GEOGRAFIA'),
(6, 'FISICA'),
(7, 'QUIMICA'),
(8, 'BIOLOGIA'),
(9, 'BACTERIOLOGIA'),
(10, 'ENFERMERIA'),
(11, 'TECNOLOGIA EN REGENCIA Y FARMACIA'),
(12, 'ADMINISTRACION EN SALUD'),
(13, 'LICENCIATURA EN CIENCIAS SOCIALES'),
(14, 'LICENCIATURA  EDUCACION FISICA, RECREACION Y DEPORTE'),
(15, 'LICENCIATURA EN LITERATURA  Y LENGUA CASTELLANA'),
(16, 'LICENCIATURA EN INFORMATICA'),
(17, 'LICENCIATURA EN LENGUA EXTRANJERA CON ENFASIS EN INGLES'),
(18, 'LICENCIATURA EN CIENCIAS NATURALES Y EDUCACION AMBIENTAL'),
(19, 'LICENCIATURA EN EDUCACION INFANTIL'),
(20, 'LICENCIATURA EN EDUCACION ARTISTICA'),
(21, 'INGENIERIA AGRONOMICA'),
(22, 'INGENIERIA MECANICA'),
(23, 'INGENIERIA AMBIENTAL'),
(24, 'INGENIERIA INDUSTRIAL'),
(25, 'INGENIERIA DE ALIMENTOS'),
(26, 'INGENIERIA DE SISTEMAS'),
(27, 'DERECHO'),
(28, 'ADMINISTRACION EN FINANZAS Y NEGOCIOS INTERNACIONALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `comid` bigint(20) NOT NULL,
  `iddocumento` bigint(20) NOT NULL,
  `comentario` text DEFAULT NULL,
  `fecha` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `dni` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`comid`, `iddocumento`, `comentario`, `fecha`, `hora`, `dni`) VALUES
(1, 1, 'me parece que es que el libro es bueno', '2022-02-23', '2022-02-23', NULL),
(2, 1, 'confirmo tu opinión acerca del tema es muy cierto ', '2022-02-23', '2022-02-23', NULL),
(3, 1, 'confirmo tu opinión acerca del tema es muy cierto ', '2022-02-24', '2022-02-24', NULL),
(4, 2, 'su primera edición tiene contenido mas interesante  ', '2022-02-24', '2022-02-24', NULL),
(5, 2, 'si pero este trae nuevas ideas', '2022-02-24', '2022-02-24', NULL),
(6, 2, 'si pero este trae nuevas ideas', '2022-02-24', '2022-02-24', NULL),
(7, 3, 'el mundo es asi', '2022-02-24', '2022-02-24', NULL),
(8, 2, 'gracias por compartir', '11:07:33', '11:07:33', NULL),
(9, 2, 'hastamos para compartir\r\n', '2022-02-24', '2022-02-24', NULL),
(10, 2, 'hastamos para compartir\r\n', '2022-02-24', '11:12:43', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `docid` bigint(20) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `autor` varchar(200) NOT NULL,
  `fechapublicacion` varchar(50) NOT NULL,
  `documento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`docid`, `tipo`, `codigo`, `titulo`, `descripcion`, `autor`, `fechapublicacion`, `documento`) VALUES
(1, 'LIBRO', '1233', 'Intervalos de relacion ', 'libro de estaadistica para el desarrollo del conocimiento', 'Kety Rosa Diaz Perez', '2000', '/biblioteca/Documentos/Ejercios Intervalos 1p.pdf'),
(2, 'ARTICULO', '12331', 'Matemáticas vista desde el programador ', 'matemáticas como fortalecimiento de la mente', 'Miguel Antonio López Cárcel ', '1999', '/biblioteca/Documentos/tabla_tstudent_2.pdf'),
(3, 'ARTICULO', '234234', 'el monte real', 'lo nuevo en este mundo', 'Miguel Jose Perez Guzman', '2021', '/biblioteca/Documentos/44-LOS VIDEOJUEGOS, UNA REALIDAD EN EL CER SANTA ROSA DE OSOS.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `estid` bigint(20) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `celular` varchar(11) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `carrera` int(11) NOT NULL,
  `sede` int(11) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`estid`, `dni`, `nombre`, `apellido`, `celular`, `correo`, `carrera`, `sede`, `contrasena`) VALUES
(1, '1063', 'Manuel', 'DIaz', '312', 'fer@gmail.com', 2, 1, '12345'),
(2, '1007889', 'Yair Enrique', 'Mendoza Reyes', '3245675432', 'yamendo@gmail.com', 3, 3, '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `preid` bigint(20) NOT NULL,
  `iddocumento` bigint(20) NOT NULL,
  `numero` int(11) NOT NULL,
  `pregunta` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`preid`, `iddocumento`, `numero`, `pregunta`) VALUES
(1, 1, 1, 'cuanto es 2 + 2'),
(2, 1, 2, 'el agua es un '),
(3, 1, 3, 'el valor de |-4| es '),
(4, 1, 4, '7-6 es igual a'),
(5, 1, 5, '25 es mayor que'),
(6, 1, 6, '25 no es mayor que'),
(7, 1, 7, '2 x 9 es lo mismo que'),
(8, 1, 8, 'quien fue Pitágoras '),
(9, 2, 1, ''),
(10, 2, 2, ''),
(11, 2, 3, ''),
(12, 2, 4, ''),
(13, 2, 5, ''),
(14, 2, 6, ''),
(15, 2, 7, ''),
(16, 2, 8, ''),
(17, 3, 1, '2 + 2 es igual'),
(18, 3, 2, 'menor que 10'),
(19, 3, 3, 'El agua es '),
(20, 3, 4, ''),
(21, 3, 5, ''),
(22, 3, 6, ''),
(23, 3, 7, ''),
(24, 3, 8, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `resid` bigint(20) NOT NULL,
  `iddocumento` bigint(20) NOT NULL,
  `idpregunta` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `respuesta` text DEFAULT NULL,
  `solucion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`resid`, `iddocumento`, `idpregunta`, `numero`, `respuesta`, `solucion`) VALUES
(1, 1, 1, 1, '2', 0),
(2, 1, 1, 2, '3', 0),
(3, 1, 1, 3, '4', 1),
(4, 1, 1, 4, '1', 0),
(5, 1, 2, 1, 'solido', 0),
(6, 1, 2, 2, 'liquido ', 1),
(7, 1, 2, 3, 'gas', 0),
(8, 1, 2, 4, 'ninguna de las anteriores', 0),
(9, 1, 3, 1, '1', 0),
(10, 1, 3, 2, '2', 0),
(11, 1, 3, 3, '3', 0),
(12, 1, 3, 4, '4', 1),
(13, 1, 4, 1, '6-7', 0),
(14, 1, 4, 2, '7', 0),
(15, 1, 4, 3, '1', 1),
(16, 1, 4, 4, '7 x 6', 0),
(17, 1, 5, 1, '2', 1),
(18, 1, 5, 2, '34', 0),
(19, 1, 5, 3, '45', 0),
(20, 1, 5, 4, '12', 0),
(21, 1, 6, 1, '2', 0),
(22, 1, 6, 2, '23', 0),
(23, 1, 6, 3, '45', 1),
(24, 1, 6, 4, '12', 0),
(25, 1, 7, 1, '18 x 0', 0),
(26, 1, 7, 2, '9 x 9 x 9', 0),
(27, 1, 7, 3, '9 x 9', 0),
(28, 1, 7, 4, '9 + 9', 1),
(29, 1, 8, 1, 'medico cirujano', 0),
(30, 1, 8, 2, 'barrendero', 0),
(31, 1, 8, 3, 'técnico en automóviles ', 0),
(32, 1, 8, 4, 'matemático', 1),
(33, 2, 1, 1, '', 0),
(34, 2, 1, 2, '', 0),
(35, 2, 1, 3, '', 0),
(36, 2, 1, 4, '', 0),
(37, 2, 2, 1, '', 0),
(38, 2, 2, 2, '', 0),
(39, 2, 2, 3, '', 0),
(40, 2, 2, 4, '', 0),
(41, 2, 3, 1, '', 0),
(42, 2, 3, 2, '', 0),
(43, 2, 3, 3, '', 0),
(44, 2, 3, 4, '', 0),
(45, 2, 4, 1, '', 0),
(46, 2, 4, 2, '', 0),
(47, 2, 4, 3, '', 0),
(48, 2, 4, 4, '', 0),
(49, 2, 5, 1, '', 0),
(50, 2, 5, 2, '', 0),
(51, 2, 5, 3, '', 0),
(52, 2, 5, 4, '', 0),
(53, 2, 6, 1, '', 0),
(54, 2, 6, 2, '', 0),
(55, 2, 6, 3, '', 0),
(56, 2, 6, 4, '', 0),
(57, 2, 7, 1, '', 0),
(58, 2, 7, 2, '', 0),
(59, 2, 7, 3, '', 0),
(60, 2, 7, 4, '', 0),
(61, 2, 8, 1, '', 0),
(62, 2, 8, 2, '', 0),
(63, 2, 8, 3, '', 0),
(64, 2, 8, 4, '', 0),
(65, 3, 1, 1, '2', 0),
(66, 3, 1, 2, '4', 1),
(67, 3, 1, 3, '3', 0),
(68, 3, 1, 4, '5', 0),
(69, 3, 2, 1, '2', 1),
(70, 3, 2, 2, '56', 0),
(71, 3, 2, 3, '234', 0),
(72, 3, 2, 4, '23', 0),
(73, 3, 3, 1, 'solido', 0),
(74, 3, 3, 2, 'gaseoso', 0),
(75, 3, 3, 3, 'Liquido ', 0),
(76, 3, 3, 4, 'ninguna de las anteriores', 0),
(77, 3, 4, 1, '', 0),
(78, 3, 4, 2, '', 0),
(79, 3, 4, 3, '', 0),
(80, 3, 4, 4, '', 0),
(81, 3, 5, 1, '', 0),
(82, 3, 5, 2, '', 0),
(83, 3, 5, 3, '', 0),
(84, 3, 5, 4, '', 0),
(85, 3, 6, 1, '', 0),
(86, 3, 6, 2, '', 0),
(87, 3, 6, 3, '', 0),
(88, 3, 6, 4, '', 0),
(89, 3, 7, 1, '', 0),
(90, 3, 7, 2, '', 0),
(91, 3, 7, 3, '', 0),
(92, 3, 7, 4, '', 0),
(93, 3, 8, 1, '', 0),
(94, 3, 8, 2, '', 0),
(95, 3, 8, 3, '', 0),
(96, 3, 8, 4, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `sedid` int(11) NOT NULL,
  `sede` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`sedid`, `sede`) VALUES
(1, 'BERASTEGUI'),
(2, 'MONTERÍA'),
(3, 'LORICA'),
(4, 'SAHAGUN'),
(5, 'MONTELÍBANO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`adid`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`carid`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`comid`),
  ADD KEY `iddocumento` (`iddocumento`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`docid`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`estid`),
  ADD KEY `carrera` (`carrera`),
  ADD KEY `sede` (`sede`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`preid`),
  ADD KEY `iddocumento` (`iddocumento`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`resid`),
  ADD KEY `iddocumento` (`iddocumento`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`sedid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `comid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `docid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `estid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `preid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `resid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `sedid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`iddocumento`) REFERENCES `documento` (`docid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`carid`),
  ADD CONSTRAINT `estudiante_ibfk_2` FOREIGN KEY (`sede`) REFERENCES `sedes` (`sedid`);

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`iddocumento`) REFERENCES `documento` (`docid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_1` FOREIGN KEY (`iddocumento`) REFERENCES `documento` (`docid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
