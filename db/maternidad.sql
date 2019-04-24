-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2019 a las 07:25:34
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maternidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `madres`
--

CREATE TABLE `madres` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `a_paterno` text COLLATE latin1_spanish_ci NOT NULL,
  `a_materno` text COLLATE latin1_spanish_ci NOT NULL,
  `fecha_nacimiento` text COLLATE latin1_spanish_ci NOT NULL,
  `nacionalidad` text COLLATE latin1_spanish_ci NOT NULL,
  `inicio_embarazo` text COLLATE latin1_spanish_ci NOT NULL,
  `num_exterior` text COLLATE latin1_spanish_ci NOT NULL,
  `colonia` text COLLATE latin1_spanish_ci NOT NULL,
  `cod_postal` text COLLATE latin1_spanish_ci NOT NULL,
  `habitacion` text COLLATE latin1_spanish_ci NOT NULL,
  `med_nombre` text COLLATE latin1_spanish_ci NOT NULL,
  `med_a_paterno` text COLLATE latin1_spanish_ci NOT NULL,
  `med_a_materno` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `madres`
--

INSERT INTO `madres` (`id`, `nombre`, `a_paterno`, `a_materno`, `fecha_nacimiento`, `nacionalidad`, `inicio_embarazo`, `num_exterior`, `colonia`, `cod_postal`, `habitacion`, `med_nombre`, `med_a_paterno`, `med_a_materno`) VALUES
(4, 'chorizo', 'chorizote', 'chorizito', '2019-04-17', 'qwasf', '2019-04-26', 'sdf', 'sdv', 'asdfa', 'asdf', 'asdf', 'asdf', 'asdf'),
(5, 'asdg', 'aegf', 'adsf', '2019-04-16', 'asdf', '2019-04-11', 'asdv', 'asdv', 'sdv', 'advs', 'asdv', 'asdv', 'asdv'),
(6, 'prueba', 'prueba', 'prueba', '1999-01-01', 'ssds', '2000-02-02', 'hkb', 'jk', 'bh', 'jbk', 'bhj', 'bk', 'dfb'),
(9, 'Manuel Alejandro', 'Robledo', 'Briones', '1997-08-08', 'Mexicana', '2018-01-01', '133', 'Las Camelinas', '48147', '28', 'Mauricio', 'AlemÃ¡n', 'Paez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `tipo_usuario` int(11) NOT NULL,
  `usuario` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `contrasena` varchar(30) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`tipo_usuario`, `usuario`, `contrasena`) VALUES
(1, 'alejandro', 'robledo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `madres`
--
ALTER TABLE `madres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `madres`
--
ALTER TABLE `madres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
