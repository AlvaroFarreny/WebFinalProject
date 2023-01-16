-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2023 a las 15:27:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `webfinalproject`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_usuarios`
--

DROP TABLE IF EXISTS `proyectos_usuarios`;
CREATE TABLE IF NOT EXISTS `proyectos_usuarios` (
  `id_proyecto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_proyecto`,`id_usuario`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proyectos_usuarios`
--

INSERT INTO `proyectos_usuarios` (`id_proyecto`, `id_usuario`) VALUES
(3, 4),
(3, 10),
(4, 10),
(8, 4),
(8, 10);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proyectos_usuarios`
--
ALTER TABLE `proyectos_usuarios`
  ADD CONSTRAINT `proyectos_usuarios_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proyectos_usuarios_ibfk_4` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
