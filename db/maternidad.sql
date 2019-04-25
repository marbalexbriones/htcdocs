-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2019 a las 02:35:40
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

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
  `calle` text COLLATE latin1_spanish_ci NOT NULL,
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

INSERT INTO `madres` (`id`, `nombre`, `a_paterno`, `a_materno`, `fecha_nacimiento`, `nacionalidad`, `inicio_embarazo`, `num_exterior`, `calle`, `colonia`, `cod_postal`, `habitacion`, `med_nombre`, `med_a_paterno`, `med_a_materno`) VALUES
(10, 'Manuel Alejandro', 'Robledo', 'Briones', '1997-08-08', 'Mexicana', '2018-10-01', '133', 'Tercera Privada de Las Camelinas', 'Las Camelinas', '78147', '27', 'El Dr', 'Simi', 'Simi :v');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
