-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-12-2023 a las 04:13:30
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ExamenU4`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Registro`
--

CREATE TABLE `Registro` (
  `id` int(10) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `repetidor` varchar(10) DEFAULT NULL,
  `lunes` varchar(10) DEFAULT NULL,
  `martes` varchar(10) DEFAULT NULL,
  `miercoles` varchar(10) DEFAULT NULL,
  `jueves` varchar(10) DEFAULT NULL,
  `viernes` varchar(10) DEFAULT NULL,
  `sabado` varchar(10) DEFAULT NULL,
  `horario` varchar(15) DEFAULT NULL,
  `carrera` varchar(100) DEFAULT NULL,
  `semestre` varchar(100) DEFAULT NULL,
  `observaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Registro`
--

INSERT INTO `Registro` (`id`, `nombre`, `matricula`, `repetidor`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `horario`, `carrera`, `semestre`, `observaciones`) VALUES
(3, 'samuel', 'e21084317', 'NO', 'Lunes', '', 'Miercoles', 'Jueves', '', '', 'Matutino', 'Ingenieria Bioquimica', 'SEXTO SEMESTRE', 'Requiero acceso a internet para realizar mis trabajos.'),
(4, 'dayana', 'e45567832', 'SI', '', 'Martes', 'Miercoles', 'Jueves', 'Viernes', '', 'Vespertino', 'Licenciatura en Administracion', 'QUINTO SEMESTRE', ' Ninguna observacion.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Registro`
--
ALTER TABLE `Registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Registro`
--
ALTER TABLE `Registro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
