-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 17:17:45
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursa`
--
CREATE DATABASE IF NOT EXISTS `cursa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cursa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administador`
--

CREATE TABLE `administador` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `min_cat` int(2) NOT NULL,
  `max_cat` int(4) NOT NULL,
  `nombre_cat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `min_cat`, `max_cat`, `nombre_cat`) VALUES
(1, 0, 7, 'Alevin'),
(2, 8, 13, 'Infantil'),
(3, 14, 17, 'Juvenil'),
(4, 18, 50, 'Adulto'),
(5, 51, 9999, 'Senior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edicion`
--

CREATE TABLE `edicion` (
  `id_edic` int(11) NOT NULL,
  `ano_edic` int(4) NOT NULL,
  `finalizada_edic` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `edicion`
--

INSERT INTO `edicion` (`id_edic`, `ano_edic`, `finalizada_edic`) VALUES
(1, 2020, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_insc` int(11) NOT NULL,
  `pago_insc` tinyint(1) NOT NULL,
  `dorsal_insc` int(4) NOT NULL,
  `id_edic` int(11) NOT NULL,
  `id_part` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE `participante` (
  `id_part` int(11) NOT NULL,
  `nom_part` varchar(255) NOT NULL,
  `apellido1_part` varchar(255) NOT NULL,
  `edad_part` date NOT NULL,
  `email_part` varchar(255) NOT NULL,
  `genero_part` enum('femenino','masculino') DEFAULT NULL,
  `zombie_part` tinyint(1) NOT NULL,
  `dni_part` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `participante`
--

INSERT INTO `participante` (`id_part`, `nom_part`, `apellido1_part`, `edad_part`, `email_part`, `genero_part`, `zombie_part`, `dni_part`) VALUES
(2, 'Argimiro Etxaniz', '', '1969-10-10', 'argimiro@gmail.com', 'masculino', 0, '12345678A'),
(3, 'Ramona Satrustegi', '', '1969-10-10', 'ramona@gmail.com', 'femenino', 0, '22345678A'),
(4, 'Patxi Garcés', '', '1995-10-10', 'patxi@gmail.com', 'masculino', 0, '12335678R'),
(5, 'Leire Urrutia', '', '1994-10-10', '', 'femenino', 0, '12345378H'),
(6, 'Hodei Uribe', '', '1985-10-10', '', 'masculino', 0, '12355678A'),
(7, 'Amara Urzainki', '', '1982-10-10', '', 'femenino', 0, '23429364C'),
(8, 'Magda Suarez', '', '2007-10-10', '', 'femenino', 0, '73629343V'),
(9, 'Manex Etxaniz', '', '2013-10-10', '', 'masculino', 0, '87654321V'),
(10, 'Jon Iriarte Sulleiro', '', '1982-04-09', 'joniriarte@gmail.com', 'masculino', 0, '72697952N'),
(19, '', '', '0000-00-00', '', 'masculino', 0, ''),
(24, 'Carlos', 'Piedras', '2002-09-09', 'carlos@piedras.com', 'masculino', 1, '20454802M'),
(25, 'Judit', 'Piedras', '2002-09-09', 'judit@piedras.com', 'femenino', 1, '84268796Q');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administador`
--
ALTER TABLE `administador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `edicion`
--
ALTER TABLE `edicion`
  ADD PRIMARY KEY (`id_edic`);

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_insc`),
  ADD KEY `fk_id_edic` (`id_edic`),
  ADD KEY `fk_id_part` (`id_part`),
  ADD KEY `fk_id_cat` (`id_cat`);

--
-- Indices de la tabla `participante`
--
ALTER TABLE `participante`
  ADD PRIMARY KEY (`id_part`),
  ADD UNIQUE KEY `UN_DNI` (`dni_part`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administador`
--
ALTER TABLE `administador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `edicion`
--
ALTER TABLE `edicion`
  MODIFY `id_edic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  MODIFY `id_insc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `participante`
--
ALTER TABLE `participante`
  MODIFY `id_part` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `fk_id_cat` FOREIGN KEY (`id_cat`) REFERENCES `categoria` (`id_cat`),
  ADD CONSTRAINT `fk_id_edic` FOREIGN KEY (`id_edic`) REFERENCES `edicion` (`id_edic`),
  ADD CONSTRAINT `fk_id_part` FOREIGN KEY (`id_part`) REFERENCES `participante` (`id_part`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
