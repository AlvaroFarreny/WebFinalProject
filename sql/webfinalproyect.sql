-- Tiempo de generación: 17-01-2023 a las 09:28:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `webfinalproject`
--
CREATE DATABASE IF NOT EXISTS `webfinalproject` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `webfinalproject`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre`, `descripcion`) VALUES
(3, 'Bit2me', 'Bit2Me es una plataforma o exchange para comprar y vender criptomonedas de una forma rápida y sencilla. Cabe destacar que se trata del exchange mas grande de España.\r\n\r\nGracias a la Universidad hemos podido firmar un acuerdo para aprender con bit2me sobre las criptomonedas desde 0. El curso se basará en tres etapas de aprendizaje y una vez se hayan superado las tres fases con éxito, se procederá a la fase final o \"Criptochallenge\"...'),
(4, 'Liga de Bolsa', 'Liga de Bolsa es la mayor comunidad de clubs de inversión de España. Organizan competiciones de inversión con dinero real en las que podrás demostrar tus cualidades como gestor.\r\n\r\nEl criptoclub este 2022 va a formar parte de dicha liga para competir contra las mejores universidades de España..'),
(8, 'Fundación Antonio Camaró', 'El objetivo de este proyecto es recaudar 40,000$ en plazo de 18 meses desde su puesta en marcha, con el fin de financiar el proyecto social ZÉOSIS de la fundación. Además de acercar oriente a occidente a través del arte y el dialogo.\r\n\r\nPara ello se realizará una creación de una colección única de NFT\'s y su posterior venta y comercialización. Con la colaboración de los estudiantes del CriptoClub de la Universidad Europea...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos_usuarios`
--

DROP TABLE IF EXISTS `proyectos_usuarios`;
CREATE TABLE `proyectos_usuarios` (
  `id_proyecto` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `proyectos_usuarios`
--

INSERT INTO `proyectos_usuarios` (`id_proyecto`, `id_usuario`) VALUES
(3, 4),
(3, 6),
(4, 4),
(8, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reuniones`
--

DROP TABLE IF EXISTS `reuniones`;
CREATE TABLE `reuniones` (
  `id_proyecto` int(11) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `asunto` text COLLATE utf8_spanish2_ci NOT NULL,
  `ponente` text COLLATE utf8_spanish2_ci NOT NULL,
  `aula` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `reuniones`
--

INSERT INTO `reuniones` (`id_proyecto`, `fecha_hora`, `asunto`, `ponente`, `aula`) VALUES
(3, '2023-01-25 16:00:00', 'Anuncio Etapa 3 + Reunión General', 'Alvaro Farreny', 'E214'),
(4, '2023-01-19 14:30:00', 'Reunión Competición ', 'Andrés Pérez', 'C203'),
(8, '2023-02-09 11:30:00', 'Presentación Proyecto', 'Asaf Levi', 'E204');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `num_expediente` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `apellidos` text COLLATE utf8_spanish2_ci NOT NULL,
  `email` text COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `num_expediente`, `nombre`, `apellidos`, `email`, `fecha_creacion`, `password`) VALUES
(4, 22067726, 'Carlos', 'Gonzalez', 'carlos.gvl.contact@gmail.com', '2023-01-05 14:38:23', '$2y$10$9AeZ.rOqX2yuk8QSClXH1.sGbNbcbfsXSOU8s2rAbG6EwQXFK2lbS'),
(5, 12345678, 'Andres', 'Perez', '12345678@live.uem.es', '2023-01-17 08:00:32', '$2y$10$YzAYvq9vT.BZ.J9JR2PsZuSqziBXu6Yc/Budi14qkT.OJGHtG950m'),
(6, 22056511, 'Alvaro', 'Farreny', 'farrenyalvaro@gmail.com', '2023-01-17 08:20:48', '$2y$10$Sm.Oi0Bzw8WeRMYEGoNTseSceMEEZoBx8p2Sjs4.uz9F8BwzFPV8O');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wallet`
--

DROP TABLE IF EXISTS `wallet`;
CREATE TABLE `wallet` (
  `id_wallet` int(11) NOT NULL,
  `wallet` text COLLATE utf8_spanish2_ci NOT NULL,
  `password_wallet` text COLLATE utf8_spanish2_ci NOT NULL,
  `num_expediente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `proyectos_usuarios`
--
ALTER TABLE `proyectos_usuarios`
  ADD PRIMARY KEY (`id_proyecto`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `reuniones`
--
ALTER TABLE `reuniones`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `num_expediente` (`num_expediente`);

--
-- Indices de la tabla `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id_wallet`),
  ADD UNIQUE KEY `num_expediente` (`num_expediente`),
  ADD UNIQUE KEY `wallet` (`wallet`) USING HASH;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reuniones`
--
ALTER TABLE `reuniones`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id_wallet` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reuniones`
--
ALTER TABLE `reuniones`
  ADD CONSTRAINT `reuniones_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`num_expediente`) REFERENCES `usuario` (`num_expediente`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
