-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2018 a las 15:40:42
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sispro`
--
CREATE DATABASE IF NOT EXISTS `sispro` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sispro`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id`, `nombre`) VALUES
(1, 'Matematica aplicada'),
(2, 'Programacion orientada a objetos'),
(3, 'lengua castellana'),
(4, 'matematicas orientadas a la programacion'),
(5, 'fisica mecánica'),
(6, 'calculo 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_docente`
--

CREATE TABLE `area_docente` (
  `id_area` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area_docente`
--

INSERT INTO `area_docente` (`id_area`, `id_docente`) VALUES
(2, 21),
(2, 30),
(3, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_simulacro`
--

CREATE TABLE `area_simulacro` (
  `id_area` int(11) NOT NULL,
  `id_simulacro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `area_simulacro`
--

INSERT INTO `area_simulacro` (`id_area`, `id_simulacro`) VALUES
(2, 38);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_estudiante`
--

CREATE TABLE `calificacion_estudiante` (
  `id_simulacro` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `puntaje` decimal(2,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_user` int(11) NOT NULL,
  `es_director` varchar(2) NOT NULL,
  `estado_aprobacion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_user`, `es_director`, `estado_aprobacion`) VALUES
(18, 'no', 'espera'),
(19, 'si', 'aprobado'),
(21, 'no', 'aprobado'),
(24, 'no', 'aprobado'),
(28, 'no', 'aprobado'),
(29, 'no', 'aprobado'),
(30, 'no', 'aprobado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enunciado`
--

CREATE TABLE `enunciado` (
  `id` int(11) NOT NULL,
  `contenido` varchar(10000) DEFAULT NULL,
  `id_area` int(11) NOT NULL,
  `id_Docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `enunciado`
--

INSERT INTO `enunciado` (`id`, `contenido`, `id_area`, `id_Docente`) VALUES
(1, 'sabiendo que hay que generalizar el conenido de esta pagina se hicieron unos estudios y se quieren hacer las siguientes preguntas:', 2, 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_user` int(11) NOT NULL,
  `nPeriodos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_user`, `nPeriodos`) VALUES
(20, 1),
(22, 2),
(23, 7),
(26, 1),
(27, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_respuestas`
--

CREATE TABLE `estudiante_respuestas` (
  `id_estudiante` int(11) NOT NULL,
  `id_simulacro` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `contenido` varchar(1000) DEFAULT NULL,
  `id_enunciado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_simulacro` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `fecha_inscrito` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE `opcion` (
  `id` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `correcta` varchar(2) DEFAULT NULL,
  `justificacion` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`id`, `id_pregunta`, `descripcion`, `correcta`, `justificacion`) VALUES
(1, 1, 'esta es la correcta', 'si', 'porque quiero que sea la correcta'),
(2, 1, 'esta no es la correcta', 'no', 'porque tambien quiero que sea asi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id` int(11) NOT NULL,
  `id_area` int(11) DEFAULT NULL,
  `descripcion` varchar(2000) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `id_docente_cargo` int(11) NOT NULL,
  `id_enunciado` int(11) DEFAULT NULL,
  `tipo` varchar(50) NOT NULL,
  `visibilidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `id_area`, `descripcion`, `estado`, `id_docente_cargo`, `id_enunciado`, `tipo`, `visibilidad`) VALUES
(1, 2, 'esta pagina será la mas completa de todo ing software?', 'espera', 19, 1, 'seleccion multiple', 'privada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_academico`
--

CREATE TABLE `programa_academico` (
  `id` varchar(11) NOT NULL,
  `nombre` varchar(130) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `programa_academico`
--

INSERT INTO `programa_academico` (`id`, `nombre`) VALUES
('115', 'Ingenieria de sistemas'),
('116', 'Ingeniería Industrial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulacro`
--

CREATE TABLE `simulacro` (
  `id` int(11) NOT NULL,
  `id_director` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora_ini` time NOT NULL,
  `hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `simulacro`
--

INSERT INTO `simulacro` (`id`, `id_director`, `fecha`, `hora_ini`, `hora_fin`) VALUES
(38, 19, '2018-06-15', '00:00:00', '01:00:00'),
(39, 19, '2018-06-15', '00:00:00', '01:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulacro_pregunta`
--

CREATE TABLE `simulacro_pregunta` (
  `id_simulacro` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `codigo` varchar(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `id_programa` varchar(11) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `codigo`, `nombre`, `password`, `correo`, `id_programa`) VALUES
(10, '12345', 'camilo p', '356a192b7913b04c54574d18c28d46e6395428ab', 'crsosoaoaao', '115'),
(11, '1154778', 'camilo p', '356a192b7913b04c54574d18c28d46e6395428ab', 'crisel', '115'),
(12, '11', 'a', '356a192b7913b04c54574d18c28d46e6395428ab', 'aa', '115'),
(13, '111', 'a', '356a192b7913b04c54574d18c28d46e6395428ab', 'aa', '115'),
(14, '1111', 'a', '356a192b7913b04c54574d18c28d46e6395428ab', 'aa', '115'),
(17, '111111', '1', 'ac3478d69a3c81fa62e60f5c3696165a4e5e6ac4', '111', '115'),
(18, '333', '3', 'f56d6351aa71cff0debea014d13525e42036187a', '333', '116'),
(19, '1150000', 'MARIA P', '356a192b7913b04c54574d18c28d46e6395428ab', 'maria@gmail.com', '115'),
(20, 'ramona1', 'ramona', '356a192b7913b04c54574d18c28d46e6395428ab', 'r', '115'),
(21, '1151376', 'crisel ayala llanes', '356a192b7913b04c54574d18c28d46e6395428ab', '111', '115'),
(22, '1151370', 'alguien que es estudiante', '356a192b7913b04c54574d18c28d46e6395428ab', '1', '116'),
(23, '7889', 'crisel tatiana', '356a192b7913b04c54574d18c28d46e6395428ab', 'criselayala98@gmail.com', '115'),
(24, 'caceres', 'marilyn', '356a192b7913b04c54574d18c28d46e6395428ab', 'e', '115'),
(26, 'dd', 'camilo p', 'da4b9237bacccdf19c0760cab7aec4a8359010b0', 'crsosoaoaao', '115'),
(27, '1234', 'crisel la estudiante', '356a192b7913b04c54574d18c28d46e6395428ab', 'cris', '116'),
(28, '1145478', 'otro docente ', '356a192b7913b04c54574d18c28d46e6395428ab', 'ddd', '115'),
(29, '1152113', 'eliana llanes', '356a192b7913b04c54574d18c28d46e6395428ab', 'ddd', '115'),
(30, '1151234', 'Diego chavez', '356a192b7913b04c54574d18c28d46e6395428ab', 'ddd', '115');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `area_docente`
--
ALTER TABLE `area_docente`
  ADD PRIMARY KEY (`id_area`,`id_docente`),
  ADD KEY `fdocente_idx` (`id_docente`);

--
-- Indices de la tabla `area_simulacro`
--
ALTER TABLE `area_simulacro`
  ADD PRIMARY KEY (`id_area`,`id_simulacro`),
  ADD KEY `fsimulacro_idx` (`id_simulacro`);

--
-- Indices de la tabla `calificacion_estudiante`
--
ALTER TABLE `calificacion_estudiante`
  ADD PRIMARY KEY (`id_simulacro`),
  ADD KEY `festudiante_idx` (`id_estudiante`),
  ADD KEY `farea_idx` (`id_area`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `enunciado`
--
ALTER TABLE `enunciado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_Docente` (`id_Docente`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `estudiante_respuestas`
--
ALTER TABLE `estudiante_respuestas`
  ADD PRIMARY KEY (`id_estudiante`,`id_simulacro`,`id_pregunta`,`id_opcion`),
  ADD KEY `fsimulacro_idx` (`id_simulacro`),
  ADD KEY `fpregunta_idx` (`id_pregunta`),
  ADD KEY `fopcion_idx` (`id_opcion`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fenunciado_idx` (`id_enunciado`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_simulacro`,`id_estudiante`),
  ADD KEY `festudiante_idx` (`id_estudiante`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fpregunta_idx` (`id_pregunta`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farea_idx` (`id_area`),
  ADD KEY `fdocente_idx` (`id_docente_cargo`),
  ADD KEY `fenunciado_idx` (`id_enunciado`);

--
-- Indices de la tabla `programa_academico`
--
ALTER TABLE `programa_academico`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `simulacro`
--
ALTER TABLE `simulacro`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fdirector_idx` (`id_director`);

--
-- Indices de la tabla `simulacro_pregunta`
--
ALTER TABLE `simulacro_pregunta`
  ADD PRIMARY KEY (`id_simulacro`,`id_pregunta`),
  ADD KEY `fpregunta_idx` (`id_pregunta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programaccc` (`id_programa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `enunciado`
--
ALTER TABLE `enunciado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `opcion`
--
ALTER TABLE `opcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `simulacro`
--
ALTER TABLE `simulacro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `area_docente`
--
ALTER TABLE `area_docente`
  ADD CONSTRAINT `farea4` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fdocente5` FOREIGN KEY (`id_docente`) REFERENCES `docente` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `area_simulacro`
--
ALTER TABLE `area_simulacro`
  ADD CONSTRAINT `farea9` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fsimulacro9` FOREIGN KEY (`id_simulacro`) REFERENCES `simulacro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `calificacion_estudiante`
--
ALTER TABLE `calificacion_estudiante`
  ADD CONSTRAINT `farea13` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `festudiante13` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fsimulacro13` FOREIGN KEY (`id_simulacro`) REFERENCES `simulacro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `fuser2` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `enunciado`
--
ALTER TABLE `enunciado`
  ADD CONSTRAINT `enunciado_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`),
  ADD CONSTRAINT `enunciado_ibfk_2` FOREIGN KEY (`id_Docente`) REFERENCES `docente` (`id_user`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `fuser1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudiante_respuestas`
--
ALTER TABLE `estudiante_respuestas`
  ADD CONSTRAINT `festudiante12` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fopcion` FOREIGN KEY (`id_opcion`) REFERENCES `opcion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fpregunta12` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fsimulacro12` FOREIGN KEY (`id_simulacro`) REFERENCES `simulacro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD CONSTRAINT `fenunciado14` FOREIGN KEY (`id_enunciado`) REFERENCES `enunciado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `festudiante4` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fsimulacro4` FOREIGN KEY (`id_simulacro`) REFERENCES `simulacro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD CONSTRAINT `fpregunta8` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `farea0` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fdocente0` FOREIGN KEY (`id_docente_cargo`) REFERENCES `docente` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fenunciado0` FOREIGN KEY (`id_enunciado`) REFERENCES `enunciado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `simulacro`
--
ALTER TABLE `simulacro`
  ADD CONSTRAINT `fdirector3` FOREIGN KEY (`id_director`) REFERENCES `docente` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `simulacro_pregunta`
--
ALTER TABLE `simulacro_pregunta`
  ADD CONSTRAINT `fpregunta7` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fsimulacro7` FOREIGN KEY (`id_simulacro`) REFERENCES `simulacro` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `programaccc` FOREIGN KEY (`id_programa`) REFERENCES `programa_academico` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
