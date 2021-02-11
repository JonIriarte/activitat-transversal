-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2021 a las 16:28:05
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
(24, 'Carlos', 'Piedras', '2002-09-09', 'carlos@piedras.com', 'masculino', 1, '20454802M'),
(25, 'Judit', 'Piedras', '2002-09-09', 'judit@piedras.com', 'femenino', 1, '84268796Q'),
(61, 'Pepe', 'Piedras', '1955-01-03', 'pepeperez@random.com', 'masculino', 0, '25098000D'),
(68, 'Zuri', 'Katu', '2014-01-05', 'zurikatu@correo.com', 'femenino', 0, '16313065Q');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
