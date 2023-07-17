-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-07-2023 a las 01:05:04
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empresacac2023`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets_vendidos`
--

DROP TABLE IF EXISTS `tickets_vendidos`;
CREATE TABLE IF NOT EXISTS `tickets_vendidos` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ticket`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tickets_vendidos`
--

INSERT INTO `tickets_vendidos` (`id_ticket`, `nombre`, `apellido`, `correo`, `cantidad`, `categoria`) VALUES
(1, 'Romina', 'Suarez', 'rominasuarez@gmail.com', '1', 'estudiante'),
(2, 'Lucas', 'Paredes', 'lucasparedes@hotmail.com', '3', 'trainee'),
(3, 'damiÃ¡n', 'Perales', 'damianperales@hotmail.com', '1', 'junior'),
(4, 'Cintia', 'Morales', 'cintinamorales@gmail.com', '5', 'trainee'),
(5, 'Pedro', 'Marota', 'pedromarota@hotmail.com', '2', 'estudiante'),
(6, 'RocÃ­o', 'Gomez', 'rociogomez@gmail.com', '1', 'estudiante'),
(7, 'Micaela', 'Moreira', 'micaelamoreira@hotmail.com', '4', 'junior'),
(8, 'Ariel', 'Rodriguez', 'arielrodriguez@gmail.com', '1', 'estudiante'),
(9, 'Javier', 'Brito', 'javierbrito@gmail.com', '1', 'estudiante'),
(10, 'Agustina', 'Posancini', 'agustposancini@gmail.com', '1', 'estudiante');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
