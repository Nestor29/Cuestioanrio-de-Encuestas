-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2020 a las 17:19:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_encuestasv1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id_encuesta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_final` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id_encuesta`, `id_usuario`, `titulo`, `descripcion`, `estado`, `fecha_inicio`, `fecha_final`) VALUES
(1, 0, 'SEGMENTO OPERATIVO', 'SEGMENTO OPERATIVO', 1, '2020-06-18 17:18:00', '2020-06-18 17:10:27'),
(3, 0, 'SEGMENTO RECURSO HUMANO', 'SEGMENTO RECURSO HUMANO', 0, '2020-06-20 20:52:34', '2020-06-20 19:31:29'),
(4, 0, 'SEGMENTO HIGIENE Y CALIDAD DE PRODUCTO', 'SEGMENTO HIGIENE Y CALIDAD DE PRODUCTO', 0, '2020-06-20 20:55:31', '2020-06-20 20:55:08'),
(5, 0, 'SEGMENTO MARKETING', 'SEGMENTO MARKETING', 0, '2020-06-20 20:56:57', '2020-06-20 20:56:49'),
(6, 0, 'SEGMENTO ADMINISTRACIÓN Y FINANZAS', 'SEGMENTO ADMINISTRACIÓN Y FINANZAS', 0, '2020-06-20 20:58:45', '2020-06-20 20:58:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id_opcion` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `valor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `puntos` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id_opcion`, `id_pregunta`, `valor`, `puntos`) VALUES
(1, 1, 'Si', 25),
(2, 1, 'No', 0),
(3, 3, 'Dueño', 0),
(4, 3, 'Gerente', 0),
(5, 3, 'Encargado', 0),
(6, 3, 'Empleado', 0),
(7, 4, 'Compra Directa', 10),
(8, 4, 'Proveedores', 0),
(9, 6, 'Si', 25),
(10, 6, 'No', 0),
(11, 7, 'Diario', 20),
(12, 7, 'Semanal', 20),
(13, 7, 'Quincenal', 20),
(14, 7, 'Mensual', 20),
(15, 8, 'Si', 20),
(16, 8, 'No', 0),
(26, 12, 'Si', 40),
(27, 12, 'No', 0),
(28, 13, 'Si', 30),
(29, 13, 'No', 0),
(30, 15, 'Si', 30),
(31, 15, 'No', 0),
(32, 16, 'Si', 40),
(33, 16, 'No', 0),
(34, 17, 'Si', 25),
(35, 17, 'No', 0),
(36, 18, 'Si', 35),
(37, 18, 'No', 0),
(38, 19, 'Si', 25),
(39, 19, 'No', 0),
(40, 20, 'Si', 30),
(41, 20, 'No', 0),
(42, 21, 'Si', 30),
(43, 21, 'No', 0),
(44, 22, 'Si', 15),
(45, 22, 'No', 0),
(46, 23, 'Si', 30),
(47, 23, 'No', 0),
(48, 24, 'Si', 40),
(49, 24, 'No', 0),
(50, 25, 'Si', 30),
(51, 25, 'No', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id_pregunta` int(11) NOT NULL,
  `id_encuesta` int(11) NOT NULL,
  `titulo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `id_encuesta`, `titulo`, `id_tipo_pregunta`) VALUES
(1, 1, '¿Cuentas con alguna opción para que tus clientes dejen comentarios, sugerencias y quejas? ', 1),
(3, 1, '¿Quién da seguimiento a esos comentarios?', 1),
(4, 1, '¿Cómo adquieres la materia prima para tu negocio? ', 1),
(6, 1, '¿Cuentas con algun sistema para realizar inventarios?', 1),
(7, 1, '¿Cada cuánto realizas tus inventarios?', 1),
(8, 1, '¿Tienes algún método para realizar los horarios de los colaboradores en tu negocio?', 1),
(12, 3, '¿Cuentas con área de reclutamiento y selección?', 1),
(13, 3, '¿Cuentas con un área de capacitación? ', 1),
(14, 3, '¿Qué sistema de capacitación utilizas?', 1),
(15, 3, '¿Cuentas con manuales de capacitación?', 1),
(16, 4, '¿Cuentas con protocolo, política o procesos y certificación Post-Covid 19?', 1),
(17, 4, '¿Cuentas con otra certificación de calidad e higiene?', 1),
(18, 4, '¿Necesitas contar con alguna certificación para reiniciar operación o seguir operando? ', 1),
(19, 5, '¿Cuentas con estructura de marketing en tu empresa?', 1),
(20, 5, '¿Cuentas con alguna estrategia para hacer que tus clientes regresen a tu negocio?', 1),
(21, 5, '¿Estás interesado en tener una estrategia de marketing? ', 1),
(22, 5, '¿Cuentas con tienda en línea?', 1),
(23, 6, '¿Cuentas con estructura financiera en tu empresa?', 1),
(24, 6, '¿Necesitas un análisis para mejorar tus finanzas? ', 1),
(25, 6, '¿Tienes un estado de resultados financieros mensuales?', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id_resultado` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id_resultado`, `id_opcion`) VALUES
(1, 1),
(13, 1),
(19, 1),
(31, 1),
(7, 2),
(25, 2),
(37, 2),
(14, 3),
(20, 3),
(2, 4),
(26, 4),
(38, 4),
(32, 5),
(8, 6),
(3, 7),
(15, 7),
(21, 7),
(33, 7),
(9, 8),
(27, 8),
(39, 8),
(4, 9),
(22, 9),
(34, 9),
(40, 9),
(10, 10),
(16, 10),
(28, 10),
(11, 11),
(23, 11),
(29, 11),
(5, 12),
(17, 12),
(41, 12),
(35, 14),
(12, 15),
(18, 15),
(24, 15),
(30, 15),
(42, 15),
(6, 16),
(36, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pregunta`
--

CREATE TABLE `tipo_pregunta` (
  `id_tipo_pregunta` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_pregunta`
--

INSERT INTO `tipo_pregunta` (`id_tipo_pregunta`, `nombre`, `descripcion`) VALUES
(1, 'Selección múltiple', 'Se podrá escoger solo una opción\r\nelemento input type radio'),
(2, 'Desplegable', 'Se podrá escoger una opción\r\nElemento select y option'),
(3, 'Casilla de verificación', 'Se podrá escoger más de una opción\r\ninput type checkbox'),
(4, 'Texto', 'Se almacenara la respuesta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id_tipo_usuario`, `nombre`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `clave`, `nombres`, `apellidos`, `email`, `id_tipo_usuario`) VALUES
('2010100583E', '123', 'Joseph', 'Chancasanampa Hidalgo', 'JCha@gmail.com', 2),
('2012200489F', '123', 'Javier ', 'Alvarez Vargas', 'JAlv@gmail.com', 2),
('2013100975H', '123', 'Gustavo', 'Gonzales Vasquez', 'GGon@gmail.com', 2),
('2013200520E', '123', 'Adolfo', 'Marin Arroyo', 'AMar@gmail.com', 2),
('2014100864G', '123', 'Yonatan', 'Chilquillo Quispe', 'YChi@gmail.com', 2),
('2014100874E', '123', 'Viademir', 'Laureano Rodriguez', 'VLau@gmail.com', 2),
('2014100877B', '123', 'Jose', 'Orejon Cuadros', 'JOre@gmail.com', 2),
('2015100954K', '123', 'Eduardo', 'Huaranga Quispe', 'EHua@gmail.com', 2),
('2015100960A', '123', 'Joel', 'Meza Meza', 'JMez@gmail.com', 2),
('2015200556C', '123', 'Gregorio', 'Curi Curilla', 'GCur@gmail.com', 2),
('2015200560G', '123', 'Luis', 'Alfaro Gonzales', 'LAlf@gmail.com', 2),
('2015200570E', '123', 'Antony', 'Castellanos Uscata', 'ACas@gmail.com', 2),
('2015200574A', '123', 'Giovanna', 'Avila Galindo', 'GAvi@gmail.com', 2),
('2015200575L', '123', 'Brandon', 'Mayta Javier', 'BMay@gmail.com', 2),
('2015200576K', '123', 'Billy', 'Enriquez Camposano', 'BEnr@gmail.com', 2),
('2015200577J', '123', 'Enrique', 'Munguia Arenales', 'EMun@gmail.com', 2),
('2015200579H', '123', 'Eduardo', 'Flores Nolasco', 'EFlo@gmail.com', 2),
('2015200583L', '123', 'Miler', 'Mescua Chamorro', 'MMes@gmail.com', 2),
('2015200584K', '123', 'Issamar', 'Egoavil Onocc', 'IEgo@gmail.com', 2),
('serca2020', 'admin2020', 'Nestor', 'Bautista', 'nestor@lattemkt.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_encuestas`
--

CREATE TABLE `usuarios_encuestas` (
  `id_usuario` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `id_encuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_encuestas`
--

INSERT INTO `usuarios_encuestas` (`id_usuario`, `id_encuesta`) VALUES
('2010100583E', 1),
('2012200489F', 1),
('2013100975H', 1),
('2013200520E', 1),
('2014100864G', 1),
('2014100874E', 1),
('2015100960A', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id_encuesta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id_opcion`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_encuesta` (`id_encuesta`),
  ADD KEY `id_tipo_pregunta` (`id_tipo_pregunta`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id_resultado`),
  ADD KEY `id_opcion` (`id_opcion`);

--
-- Indices de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  ADD PRIMARY KEY (`id_tipo_pregunta`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id_tipo_usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `usuarios_encuestas`
--
ALTER TABLE `usuarios_encuestas`
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_encuesta` (`id_encuesta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `tipo_pregunta`
--
ALTER TABLE `tipo_pregunta`
  MODIFY `id_tipo_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opciones_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_tipo_pregunta`) REFERENCES `tipo_pregunta` (`id_tipo_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preguntas_ibfk_2` FOREIGN KEY (`id_encuesta`) REFERENCES `encuestas` (`id_encuesta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`id_opcion`) REFERENCES `opciones` (`id_opcion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id_tipo_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_encuestas`
--
ALTER TABLE `usuarios_encuestas`
  ADD CONSTRAINT `usuarios_encuestas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_encuestas_ibfk_2` FOREIGN KEY (`id_encuesta`) REFERENCES `encuestas` (`id_encuesta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
