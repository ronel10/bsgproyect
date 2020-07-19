-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-05-2020 a las 05:51:16
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `onlinestore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion_usuarios_tipos`
--

DROP TABLE IF EXISTS `relacion_usuarios_tipos`;
CREATE TABLE IF NOT EXISTS `relacion_usuarios_tipos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `usuarios_id` int(11) UNSIGNED NOT NULL,
  `usuarios_tipos_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `relacion_usuarios_tipos_ibfk_1` (`usuarios_id`),
  KEY `relacion_usuarios_tipos_ibfk_2` (`usuarios_tipos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `relacion_usuarios_tipos`
--

INSERT INTO `relacion_usuarios_tipos` (`id`, `usuarios_id`, `usuarios_tipos_id`) VALUES
(1, 1, 1),
(7, 2, 2),
(8, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cumpleanios` date DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp(),
  `rol` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fotografia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `cumpleanios`, `nombre`, `apellidos`, `telefono`, `creado_en`, `rol`, `fotografia`) VALUES
(1, 'admin@admin', '5f4dcc3b5aa765d61d8327deb882cf99', '2015-12-01', 'admin', NULL, NULL, '2020-04-03 02:56:19', 'Admin', NULL),
(2, 'cesar@usuario', '6f597c1ddab467f7bf5498aad1b41899', '1997-07-12', 'Cesar', 'Leon', '959786936', '2020-04-03 02:56:19', 'Usuario', NULL),
(3, 'julio@usuario', 'c027636003b468821081e281758e35ff', '1995-10-01', 'Julio', 'Salcedo', '959236598', '2020-04-03 02:56:19', 'Usuario', NULL),
(4, 'jorge@usuario', 'd67326a22642a324aa1b0745f2f17abb', '1986-05-12', 'Jorge', 'Luna', '598784512', '2020-04-03 02:56:19', 'Usuario', NULL),
(5, 'cielo@usuario', 'be7740aa9d6f946349d2a54c8d133160', '1996-08-02', 'Cielo', 'Valdez', '598234567', '2020-04-03 02:56:19', 'Usuario', NULL),
(6, 'asalizar@usuario', '534b44a19bf18d20b71ecc4eb77c572f', '1998-08-04', 'Alex', 'Salizar', '959415263', '2020-04-29 01:25:53', '', NULL),
(7, 'ybustamante@usuario', 'e9570811ed158e66001684e54365b35d', '1995-05-08', 'Yorka', 'Bustamante', '958784236', '2020-04-29 18:55:47', 'Usuario', NULL),
(8, 'ajordan@usuario', '98db6b79acb71383b5a83e0bbc1cadd4', '1995-04-12', 'Alvaro', 'Jordan', '958742563', '2020-04-29 21:03:36', 'Admin', NULL),
(9, 'dlugano@usuario', '078c007bd92ddec308ae2f5115c1775d', '1985-05-14', 'Diego', 'Lugano', '957253698', '2020-05-01 18:48:44', '', NULL),
(10, 'rgonzales@usuario', 'bc7a844476607e1a59d8eb1b1f311830', '1992-05-10', 'Raul', 'Gonzales', '957123456', '2020-05-01 18:52:25', '', NULL),
(11, 'lsuarez@usuario', '502ff82f7f1f8218dd41201fe4353687', '1990-05-14', 'Luis', 'Suarez', '957142598', '2020-05-01 18:56:17', 'Usuario', NULL),
(12, 'ksaavedra@admin', 'f9e31490d91ec2b8b2477f47dc206f76', '1993-10-08', 'Kreisy', 'Saavedra', '935467539', '2020-05-01 19:00:28', 'Admin', NULL),
(13, 'ksaavedra@admin', 'f9e31490d91ec2b8b2477f47dc206f76', '1993-10-08', 'Kreisy', 'Saavedra', '935467539', '2020-05-01 19:03:40', 'Admin', NULL),
(14, 'ksaavedra@admin', 'f9e31490d91ec2b8b2477f47dc206f76', '1993-10-08', 'Kreisy', 'Saavedra', '935467539', '2020-05-01 19:05:46', 'Admin', NULL),
(15, 'cleon@usuario', 'be7740aa9d6f946349d2a54c8d133160', '2008-11-18', 'Cielo', 'Leon', '957147836', '2020-05-01 19:08:58', 'Usuario', NULL),
(16, 'cleon@usuario', 'be7740aa9d6f946349d2a54c8d133160', '2008-11-18', 'Cielo', 'Leon', '957147836', '2020-05-01 19:16:40', 'Usuario', NULL),
(17, 'pguerrero@admin', '969044ea4df948fb0392308cfff9cdce', '1986-10-10', 'Paolo', 'Guerrero', '958741423', '2020-05-01 19:18:46', 'Admin', NULL),
(18, 'jfarfan@usuario', 'b442c4bd3de494ceb28954eb9e62d9e6', '1986-10-10', 'Jefferson', 'Farfan', '957368574', '2020-05-01 19:20:51', 'Usuario', NULL),
(19, 'paquino@usuario', 'c6cc8094c2dc07b700ffcc36d64e2138', '1990-04-10', 'Pedro', 'Aquino', '956234567', '2020-05-01 19:28:59', 'Usuario', NULL),
(20, 'eflorez@usuario', '583b460b436f4e14d6bcbaf865f815d6', '1990-12-10', 'Edison', 'Florez', '952369874', '2020-05-01 19:31:33', 'Usuario', NULL),
(21, 'pgallese@usuario', 'c6cc8094c2dc07b700ffcc36d64e2138', '1990-05-10', 'Pedro', 'Gallese', '956321478', '2020-05-01 19:34:00', 'Usuario', NULL),
(22, 'rtapia@usuario', 'ec02d2d95c27675d87dca50018d89192', '1990-03-10', 'Renato', 'Tapia', '952364152', '2020-05-01 19:40:49', 'Usuario', NULL),
(23, 'acarrillo@usuario', '19984dcaea13176bbb694f62ba6b5b35', '1991-12-10', 'Andre', 'Carrillo', '957634956', '2020-05-01 19:44:37', 'Usuario', NULL),
(24, 'ccueva@usuario', 'ca1436f91329cd8a3ad6b679d010849c', '1990-12-10', 'Cristian', 'Cueva', '956236789', '2020-05-01 19:54:24', 'Usuario', NULL),
(25, 'jvargas@usuario', 'a94652aa97c7211ba8954dd15a3cf838', '1998-12-10', 'Juan', 'Vargas', '958417896', '2020-05-01 19:58:01', 'Usuario', NULL),
(26, 'dmaradona@usuario', '078c007bd92ddec308ae2f5115c1775d', '1980-12-10', 'Diego', 'Maradona', '952417563', '2020-05-01 20:00:13', 'Usuario', NULL),
(27, 'dmaradona@usuario', '078c007bd92ddec308ae2f5115c1775d', '1980-12-10', 'Diego', 'Maradona', '952417563', '2020-05-01 20:04:41', 'Usuario', NULL),
(28, 'avidal@usuario', '65deafcf3c1ad1751415736c4cc11f76', '1998-08-14', 'Arturo', 'Vidal', '953567515', '2020-05-01 20:06:18', 'Usuario', NULL),
(29, 'avidal@usuario', '65deafcf3c1ad1751415736c4cc11f76', '1998-08-14', 'Arturo', 'Vidal', '953567515', '2020-05-01 20:09:11', 'Usuario', NULL),
(30, 'acorzo@usuario', 'b104ab9a0e58c861b9628208b3fecd58', '1998-06-14', 'Aldo', 'Corzo', '952123696', '2020-05-01 20:13:22', 'Usuario', NULL),
(31, 'acorzo@usuario', 'b104ab9a0e58c861b9628208b3fecd58', '1998-06-14', 'Aldo', 'Corzo', '952123696', '2020-05-01 20:14:17', 'Usuario', NULL),
(32, 'ladvincula@usuario', '502ff82f7f1f8218dd41201fe4353687', '1990-08-14', 'Luis', 'Advincula', '951753963', '2020-05-01 20:24:11', 'Admin', NULL),
(33, 'ladvincula@usuario', '502ff82f7f1f8218dd41201fe4353687', '1990-08-14', 'Luis', 'Advincula', '951753963', '2020-05-01 20:25:35', 'Usuario', NULL),
(34, 'jcarvallo@usuario', '662eaa47199461d01a623884080934ab', '0999-12-01', 'Jose', 'Carvallo', '951258963', '2020-05-01 20:26:31', 'Usuario', NULL),
(35, 'rnazario@usuario', 'c5aa3124b1adad080927ce4d144c6b33', '1997-03-10', 'Ronaldo', 'Nazario', '957123698', '2020-05-02 17:57:01', 'Usuario', NULL),
(36, 'mlozano', '263bce650e68ab4e23f28263760b9fa5', '1977-05-14', 'Maria', 'Lozano', '957145876', '2020-05-02 18:59:11', 'Usuario', NULL),
(37, 'rcaceres@admin', '9b3464abd2445184deb20018e210e393', '1993-03-08', 'Ronel', 'Caceres', '957142369', '2020-05-04 05:38:00', 'Admin', NULL),
(38, 'rcaceres@admin', '9b3464abd2445184deb20018e210e393', '1993-03-08', 'Ronel', 'Caceres', '957142369', '2020-05-04 05:39:45', 'Admin', NULL),
(39, 'rcaceres@admin', '9b3464abd2445184deb20018e210e393', '1993-03-08', 'Ronel', 'Caceres', '957142369', '2020-05-04 05:40:10', 'Admin', NULL),
(40, 'gmeza@usuario', '03b083fd0aadc8883198881ba88111ab', '1992-05-01', 'Gary', 'Meza', '952367852', '2020-05-04 05:41:37', 'Usuario', NULL),
(41, 'ybravo@usuario', 'fd9ab41e47a9ef4f6477a8a000bf404f', '9992-12-01', 'Yasmani', 'Bravo', '957253698', '2020-05-04 05:44:20', 'Usuario', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_tipos`
--

DROP TABLE IF EXISTS `usuarios_tipos`;
CREATE TABLE IF NOT EXISTS `usuarios_tipos` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios_tipos`
--

INSERT INTO `usuarios_tipos` (`id`, `tipo_usuario`, `descripcion`) VALUES
(1, 'Administrador', NULL),
(2, 'Usuario', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `relacion_usuarios_tipos`
--
ALTER TABLE `relacion_usuarios_tipos`
  ADD CONSTRAINT `relacion_usuarios_tipos_ibfk_1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relacion_usuarios_tipos_ibfk_2` FOREIGN KEY (`usuarios_tipos_id`) REFERENCES `usuarios_tipos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
