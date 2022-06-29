-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-06-2022 a las 03:48:14
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_todo`
create database `bd_todo`;

use `bd_todo`;
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_tarea`
--

CREATE TABLE `t_tarea` (
  `ID_tarea` int(11) NOT NULL,
  `tarea` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date DEFAULT CURRENT_TIMESTAMP,
  `fechaF` date,
  `usuarios_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `t_tarea`
--

INSERT INTO `t_tarea` (`ID_tarea`, `tarea`, `usuarios_ID`) VALUES
(1, 'hdsgjsk', 1),
(2, 'asasasswerwer wer ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`ID`, `usuario`, `contraseña`) VALUES
(1, 'alvaro', '123456'),
(2, 'daniel', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_tarea`
--
ALTER TABLE `t_tarea`
  ADD PRIMARY KEY (`ID_tarea`),
  ADD KEY `usuarios_ID` (`usuarios_ID`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_tarea`
--
ALTER TABLE `t_tarea`
  MODIFY `ID_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_tarea`
--
ALTER TABLE `t_tarea`
  ADD CONSTRAINT `t_tarea_ibfk_1` FOREIGN KEY (`usuarios_ID`) REFERENCES `t_usuarios` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
