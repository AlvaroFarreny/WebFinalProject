-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2018 a las 21:05:43
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_users`
--

CREATE TABLE `data_users` (
  `usuario` varchar(16) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `data_users`
--

INSERT INTO `data_users` (`usuario`, `password`, `nombre`, `email`, `tipo`) VALUES
('anacp', '$2y$10$lLsNjjzkIWXe1Ov8bmuM1.fOFCxLFlGndkeUL93Oqe7CCVyI4nbBi', 'Ana Corrales Paredes', 'anacorralesp@gmail.com', 0),
('pepe', '$2y$10$HP6edxM1en5NE3Oio7PePuWaO2rsNuk3VhU.AiacisX4ZLpiZuapK', 'Pepe', 'pepe@prueba.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `data_users`
--
ALTER TABLE `data_users`
  ADD PRIMARY KEY (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
