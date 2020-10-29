-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2020 a las 16:06:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_gestióndedatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_administrador`
--

CREATE TABLE `tbl_administrador` (
  `id_administrador` int(11) NOT NULL,
  `email_administrador` varchar(250) NOT NULL,
  `passwd_administrador` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_administrador`
--

INSERT INTO `tbl_administrador` (`id_administrador`, `email_administrador`, `passwd_administrador`) VALUES
(1, 'admin@admin.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_alumno`
--

CREATE TABLE `tbl_alumno` (
  `id_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(250) NOT NULL,
  `apellido1_alumno` varchar(250) NOT NULL,
  `apellido2_alumno` varchar(250) NOT NULL,
  `email_alumno` varchar(250) NOT NULL,
  `passwd_alumno` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_alumno`
--

INSERT INTO `tbl_alumno` (`id_alumno`, `nombre_alumno`, `apellido1_alumno`, `apellido2_alumno`, `email_alumno`, `passwd_alumno`) VALUES
(14, 'Albert', 'Prueba', 'Prueba', 'Prueba@prueba.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'Prueba', 'Prueba', 'Prueba', 'Prueba@prueba.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'Pr', 'p', 'p', 'p@p', '83878c91171338902e0fe0fb97a8c47a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_nota`
--

CREATE TABLE `tbl_nota` (
  `id_notas` int(11) NOT NULL,
  `nombre_materia` varchar(250) NOT NULL,
  `nota` int(2) NOT NULL,
  `id_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  ADD PRIMARY KEY (`id_notas`),
  ADD UNIQUE KEY `id_alumno` (`id_alumno`),
  ADD UNIQUE KEY `id_alumno_2` (`id_alumno`),
  ADD KEY `id_alumno_3` (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_administrador`
--
ALTER TABLE `tbl_administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_alumno`
--
ALTER TABLE `tbl_alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  MODIFY `id_notas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_nota`
--
ALTER TABLE `tbl_nota`
  ADD CONSTRAINT `tbl_nota_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `tbl_alumno` (`id_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
