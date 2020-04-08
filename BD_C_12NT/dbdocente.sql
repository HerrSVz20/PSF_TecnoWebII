-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2020 a las 14:31:02
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbdocente`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
  `id` int(5) NOT NULL,
  `ci` int(10) NOT NULL,
  `nombre_c` varchar(10) COLLATE utf8_bin NOT NULL,
  `lugar` varchar(30) COLLATE utf8_bin NOT NULL,
  `institucion` varchar(30) COLLATE utf8_bin NOT NULL,
  `fecha_emision` text COLLATE utf8_bin NOT NULL,
  `hrs_academicas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `certificados`
--

INSERT INTO `certificados` (`id`, `ci`, `nombre_c`, `lugar`, `institucion`, `fecha_emision`, `hrs_academicas`) VALUES
(1, 7845124, 'lolo', 'la paz', 'jazz', '10/10/10', 56),
(2, 7521832, 'nose', 'sucre', 'jazz', '10/10/10', 45),
(3, 7777777, 'mons', 'sucre', 'potosi', '10/10/2015', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distinciones`
--

CREATE TABLE `distinciones` (
  `id` int(5) NOT NULL,
  `ci` int(10) NOT NULL,
  `diplomados` varchar(64) COLLATE utf8_bin NOT NULL,
  `cursos` varchar(150) COLLATE utf8_bin NOT NULL,
  `proyectos` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `distinciones`
--

INSERT INTO `distinciones` (`id`, `ci`, `diplomados`, `cursos`, `proyectos`) VALUES
(1, 7845124, 'muchos', 'Excel, Word', 'ninguno'),
(2, 7521832, 'muchos', 'Excel, Word', 'sucre'),
(3, 7777777, 'muchos', 'Excel, Word', 'ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia_p`
--

CREATE TABLE `experiencia_p` (
  `id` int(5) NOT NULL,
  `ci` int(10) NOT NULL,
  `n_empresa` varchar(25) COLLATE utf8_bin NOT NULL,
  `cargo_dese` varchar(30) COLLATE utf8_bin NOT NULL,
  `gestion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `experiencia_p`
--

INSERT INTO `experiencia_p` (`id`, `ci`, `n_empresa`, `cargo_dese`, `gestion`) VALUES
(1, 7845124, 'lucas', 'gerente', 2012),
(2, 7521832, 'pil', 'gerente', 2020),
(3, 7777777, 'pil', 'gerente', 2012);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ex_docente`
--

CREATE TABLE `ex_docente` (
  `id` int(5) NOT NULL,
  `ci` int(10) NOT NULL,
  `n_institucion` varchar(30) COLLATE utf8_bin NOT NULL,
  `cargo_dese` varchar(20) COLLATE utf8_bin NOT NULL,
  `gestion` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `ex_docente`
--

INSERT INTO `ex_docente` (`id`, `ci`, `n_institucion`, `cargo_dese`, `gestion`) VALUES
(1, 7845124, 'IT', 'Gerente', 2012),
(2, 7521832, '41', 'docente', 2020),
(3, 7777777, 'IT', 'docente', 2015);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formacion`
--

CREATE TABLE `formacion` (
  `id` int(5) NOT NULL,
  `ci` int(10) NOT NULL,
  `colegio` varchar(30) COLLATE utf8_bin NOT NULL,
  `nombre_titulo` varchar(30) COLLATE utf8_bin NOT NULL,
  `fecha` varchar(20) COLLATE utf8_bin NOT NULL,
  `institucion` varchar(30) COLLATE utf8_bin NOT NULL,
  `nivel` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `formacion`
--

INSERT INTO `formacion` (`id`, `ci`, `colegio`, `nombre_titulo`, `fecha`, `institucion`, `nivel`) VALUES
(1, 7845124, 'Jose Antonio Zampa', 'no lo se ', 'jazz', '10/10/12', 'medio'),
(2, 7521832, 'Jose Antonio Zampa', 'ingeniera en sistemas', 'jazz', '10/10/12', 'medio'),
(3, 7777777, 'jazz', 'ingeniera en redes', 'IT', '10/10/2010', 'medio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id` int(5) NOT NULL,
  `ci` int(10) NOT NULL,
  `nombre_titulo` varchar(50) COLLATE utf8_bin NOT NULL,
  `institucion` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id`, `ci`, `nombre_titulo`, `institucion`, `fecha`) VALUES
(1, 7845124, 'no lo se ', '10/10/12', 'jazz'),
(2, 7521832, 'ingles', '10/10/12', 'IT'),
(3, 7777777, 'franses', '10/10/2000', 'IT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigaciones`
--

CREATE TABLE `investigaciones` (
  `id` int(5) NOT NULL,
  `ci` int(10) NOT NULL,
  `areas_cientificas` varchar(50) COLLATE utf8_bin NOT NULL,
  `participacion_proyectos` varchar(50) COLLATE utf8_bin NOT NULL,
  `produccion_cientifica` varchar(50) COLLATE utf8_bin NOT NULL,
  `produccion_tecnologica` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `investigaciones`
--

INSERT INTO `investigaciones` (`id`, `ci`, `areas_cientificas`, `participacion_proyectos`, `produccion_cientifica`, `produccion_tecnologica`) VALUES
(1, 7845124, 'nada', 'nada', 'nada', 'nada'),
(2, 7521832, 'nada', 'nada', 'nada', 'nada'),
(3, 7777777, 'nada', 'nada', 'nada', 'nada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(5) NOT NULL,
  `ci` int(10) NOT NULL,
  `nombres` varchar(25) COLLATE utf8_bin NOT NULL,
  `apellidos` varchar(25) COLLATE utf8_bin NOT NULL,
  `fecha_Nac` text COLLATE utf8_bin NOT NULL,
  `lugar_trabajo` varchar(50) COLLATE utf8_bin NOT NULL,
  `celular` int(15) NOT NULL,
  `estudios_universitarios` text COLLATE utf8_bin NOT NULL,
  `correo` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(128) COLLATE utf8_bin NOT NULL,
  `rol` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `ci`, `nombres`, `apellidos`, `fecha_Nac`, `lugar_trabajo`, `celular`, `estudios_universitarios`, `correo`, `password`, `rol`) VALUES
(1, 7845124, 'Esther', 'Rojas', '10/10/1999', 'PIL', 74744585, 'Arquitecto', 'ester.848@gmail.com', '$2y$10$vxa7mmYSkf2v4izXkVN3m.pYXBKxNagBJNw25Lgvmhs5qgv5QERKu', 'admin'),
(2, 7521832, 'Juan', 'Cardozo', '17/18/1999', 'USFX', 73458210, 'Ingenieria en sistemas', 'juan.45@gmail.com', '$2y$10$5zUz9zKPSGDlA/tr7NrS4OzvBSLPfSf/6FBWnPslEZx0AuQdLoUPW', 'docente'),
(3, 7777777, 'Diegoo', 'Cardozo', '10/10/2001', 'USFX', 74108563, 'Ingenieria en redes ', 'diego@gmail.com', '$2y$10$CWX.YGld9So.L7zW94.ALuGD668rIOZlmnikrNsAXLrhv6YJUdOMi', 'docente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `distinciones`
--
ALTER TABLE `distinciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `experiencia_p`
--
ALTER TABLE `experiencia_p`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `ex_docente`
--
ALTER TABLE `ex_docente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `formacion`
--
ALTER TABLE `formacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `investigaciones`
--
ALTER TABLE `investigaciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ci` (`ci`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `distinciones`
--
ALTER TABLE `distinciones`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `experiencia_p`
--
ALTER TABLE `experiencia_p`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ex_docente`
--
ALTER TABLE `ex_docente`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `formacion`
--
ALTER TABLE `formacion`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `investigaciones`
--
ALTER TABLE `investigaciones`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
