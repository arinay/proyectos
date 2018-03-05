-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2017 a las 18:35:49
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `federacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `botes`
--

CREATE TABLE `botes` (
  `N_vela` decimal(2,0) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `eslora` decimal(9,0) NOT NULL,
  `manga` decimal(9,0) NOT NULL,
  `puntal` decimal(9,0) NOT NULL,
  `puntal_medio` decimal(9,0) NOT NULL,
  `Orza_peso` decimal(9,0) NOT NULL,
  `Orza_contorno_superior` decimal(9,0) NOT NULL,
  `Orza_altura` decimal(9,0) NOT NULL,
  `Orza_contorno_inferior` decimal(9,0) NOT NULL,
  `Color` varchar(400) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `botes`
--

INSERT INTO `botes` (`N_vela`, `nombre`, `eslora`, `manga`, `puntal`, `puntal_medio`, `Orza_peso`, `Orza_contorno_superior`, `Orza_altura`, `Orza_contorno_inferior`, `Color`) VALUES
('2', 'Minerva', '12', '24', '32', '16', '90', '70', '1', '40', 'Blanco con raya verde'),
('3', 'Poeta Tomás Morales', '6', '2', '2', '2', '99', '100', '95', '55', 'Corredor en madera, obra viva blanca linea negra'),
('6', 'Santa Catalina', '6', '12', '26', '13', '98', '70', '1', '40', 'Obra viva blanco, obra muerta azul real'),
('19', 'UniÃ³n San Cristobal', '6', '20', '32', '13', '100', '70', '1', '40', 'Blanco con dos franjas negras'),
('24', 'Estibadores Portuarios', '6', '2', '4', '2', '99', '105', '90', '55', 'Obra viva blanco, obra muerta roja y cubierta madera'),
('26', 'Roque Nublo', '6', '2', '1', '1', '95', '70', '1', '40', 'Obra viva amarilla, obra muerta azul'),
('33', 'Puerto de la Luz', '6', '2', '4', '2', '100', '100', '90', '55', 'Obra viva blanco, obra muerta azul celeste y cubierta madera'),
('35', 'Villa de AgÃ¼imes', '6', '2', '1', '1', '70', '70', '160', '50', 'Blanco con lÃ­neas amarilla, azul y rojo'),
('38', 'Guerra del rio Spar', '6', '2', '1', '1', '90', '40', '1', '20', 'Naranja, rojo, verde, blanco y amarillo'),
('39', 'Polivela', '6', '2', '40', '20', '90', '30', '1', '30', 'Azul y blanco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite`
--

CREATE TABLE `comite` (
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `DNI` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `NMGD` decimal(9,0) NOT NULL,
  `N_licencia` decimal(9,0) NOT NULL,
  `telefono` decimal(9,0) NOT NULL,
  `correo` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos_botes`
--

CREATE TABLE `directivos_botes` (
  `DNI` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `N_vela` decimal(2,0) NOT NULL,
  `correo_persona` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `telefono` decimal(9,0) NOT NULL,
  `correo_bote` varchar(80) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `cargo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `directivos_botes`
--

INSERT INTO `directivos_botes` (`DNI`, `nombre`, `apellidos`, `N_vela`, `correo_persona`, `telefono`, `correo_bote`, `cargo`) VALUES
('54891028T', 'David', 'Perdomo', '2', '', '68987632', 'minerva@hotmail.es', 'presidente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `junta_directiva`
--

CREATE TABLE `junta_directiva` (
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `DNI` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `cargo` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` decimal(9,0) NOT NULL,
  `correo` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `junta_directiva`
--

INSERT INTO `junta_directiva` (`nombre`, `apellidos`, `DNI`, `cargo`, `telefono`, `correo`) VALUES

('Yanira', 'Betancor PÃ©rez', '54086085K', 'Vocal', '667252146', 'yani_91@hotmail.es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tripulantes`
--

CREATE TABLE `tripulantes` (
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `DNI` varchar(9) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `NMGD` decimal(9,0) NOT NULL,
  `N_licencia` decimal(9,0) NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `domicilio` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `provincia` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `Cp` decimal(5,0) NOT NULL,
  `telefono` decimal(9,0) NOT NULL,
  `N_vela` decimal(2,0) NOT NULL,
  `Fecha_alta` date NOT NULL,
  `N_vela2` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Fecha_alta2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tripulantes`
--

INSERT INTO `tripulantes` (`nombre`, `apellidos`, `DNI`, `NMGD`, `N_licencia`, `Fecha_nacimiento`, `domicilio`, `provincia`, `Cp`, `telefono`, `N_vela`, `Fecha_alta`, `N_vela2`, `Fecha_alta2`) VALUES
('Paola', 'Betancor PÃ©rez', '54980934P', '1', '1', '1999-12-14', 'Urb Los Almendros, N13', 'Las Palmas', '35217', '68987632', '35', '2017-03-03', '0', '0000-00-00'),
('Yani', 'Betancor PÃ©rez', '54982376P', '2', '2', '1991-10-21', 'Urb Los Almendros, N13', 'Las Palmas', '35217', '68987632', '33', '2017-03-09', '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `password`) VALUES
(1, 'administrador', '123admin!!!'),
(2, 'empleado', 'botesvela'),
(3, 'comite', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `botes`
--
ALTER TABLE `botes`
  ADD PRIMARY KEY (`N_vela`);

--
-- Indices de la tabla `comite`
--
ALTER TABLE `comite`
  ADD PRIMARY KEY (`DNI`),
  ADD UNIQUE KEY `NMGD` (`NMGD`),
  ADD UNIQUE KEY `N_licencia` (`N_licencia`);

--
-- Indices de la tabla `directivos_botes`
--
ALTER TABLE `directivos_botes`
  ADD PRIMARY KEY (`DNI`),
  ADD KEY `N_vela` (`N_vela`);

--
-- Indices de la tabla `junta_directiva`
--
ALTER TABLE `junta_directiva`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `tripulantes`
--
ALTER TABLE `tripulantes`
  ADD PRIMARY KEY (`DNI`),
  ADD UNIQUE KEY `NMGD` (`NMGD`),
  ADD UNIQUE KEY `N_licencia` (`N_licencia`),
  ADD KEY `N_vela` (`N_vela`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `directivos_botes`
--
ALTER TABLE `directivos_botes`
  ADD CONSTRAINT `directivos_botes_ibfk_1` FOREIGN KEY (`N_vela`) REFERENCES `botes` (`N_vela`);

--
-- Filtros para la tabla `tripulantes`
--
ALTER TABLE `tripulantes`
  ADD CONSTRAINT `tripulantes_ibfk_1` FOREIGN KEY (`N_vela`) REFERENCES `botes` (`N_vela`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
