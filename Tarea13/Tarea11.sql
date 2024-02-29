-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2023 a las 22:54:10
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
-- Base de datos: `Tarea11`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_contacto`
--

CREATE TABLE `agenda_contacto` (
  `id` int(10) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `compania` varchar(9) DEFAULT NULL,
  `parentesco` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='no hay nada de estilo.';

--
-- Volcado de datos para la tabla `agenda_contacto`
--

INSERT INTO `agenda_contacto` (`id`, `nombre`, `apellido`, `email`, `celular`, `compania`, `parentesco`) VALUES
(1, 'Dayana', 'Lopez', 'eliasxool@hotmail.com', '9992345622', 'Telcel', 'Conocido'),
(2, 'elias', 'xool', 'wwrefdf@gmail.com', '6758493421', 'ATT', 'Amigo'),
(3, 'christian', 'de la Cruz', 'dayanaparck@gmail.com', '9992107474', 'Movistar', 'Familia'),
(7, 'Elias Uriel', 'Xool Feria', 'eliasxool@hotmail.com', '9992016545', 'ATT', 'Familia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `id` int(2) NOT NULL,
  `nombre` varchar(35) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `usuario` varchar(15) DEFAULT NULL,
  `contrasena` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `nombre`, `email`, `usuario`, `contrasena`) VALUES
(1, 'Dayana', 'dayana@gmail.com', 'DayL25', '123'),
(2, 'Elias Uriel', 'eliasxool@hotmal.com', 'Eli27', '1234'),
(3, 'Juanito', 'juanitotec@gmail.com', 'juanito2023', 'juanito');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda_contacto`
--
ALTER TABLE `agenda_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda_contacto`
--
ALTER TABLE `agenda_contacto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
