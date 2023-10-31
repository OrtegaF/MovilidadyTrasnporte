-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 03:21:57
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
-- Base de datos: `smt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrastres`
--

CREATE TABLE `arrastres` (
  `id_arrastre` int(11) NOT NULL,
  `lugar` varchar(250) NOT NULL,
  `colonia` varchar(250) NOT NULL,
  `municipio` varchar(250) NOT NULL,
  `folio` varchar(250) NOT NULL,
  `codigo_p` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `almacen` varchar(200) NOT NULL,
  `contacto` varchar(200) NOT NULL,
  `ubicacion_a` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `matricula` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arrastres`
--

INSERT INTO `arrastres` (`id_arrastre`, `lugar`, `colonia`, `municipio`, `folio`, `codigo_p`, `region`, `almacen`, `contacto`, `ubicacion_a`, `telefono`, `matricula`) VALUES
(1, '14 Sur #6', 'La Resureccion', 'Puebla', 'J897', '90879', '5A', 'Gruas Cars', 'gruasCars@gmail.com', '11 sur #8', '2226785363', 'G879J'),
(2, '2 Norte #89', 'San Antonio', 'Puebla', 'A789', '90890', '1A', 'Gruas Pepe', 'pepeGruas@gmail.com', '1 sur #8', '2228907690', 'Y8664G'),
(3, '7 Oriente #45', 'Amalucan', 'Puebla', 'R578', '90870', 'B', 'Gruas Pepe', 'pepeGruas@gmail.com', '11 sur #8', '2226785363', 'F789M');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corralones`
--

CREATE TABLE `corralones` (
  `id_corralon` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `propietario` varchar(250) NOT NULL,
  `zona` varchar(200) NOT NULL,
  `calle` varchar(250) NOT NULL,
  `colonia` varchar(250) NOT NULL,
  `municipio` varchar(250) NOT NULL,
  `longitud` varchar(250) NOT NULL,
  `latitud` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `corralones`
--

INSERT INTO `corralones` (`id_corralon`, `nombre`, `propietario`, `zona`, `calle`, `colonia`, `municipio`, `longitud`, `latitud`) VALUES
(1, 'Gruas Pepe', 'Jose Ricardo Valdez Reyes', 'A', '16 de Septiembre #67', 'Amalucan', 'Puebla', '19.0510837', '-98.1395408');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gruas`
--

CREATE TABLE `gruas` (
  `id_grua` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `matricula` varchar(200) NOT NULL,
  `n_motor` varchar(200) NOT NULL,
  `kg_max` varchar(200) NOT NULL,
  `marca` varchar(200) NOT NULL,
  `modelo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gruas`
--

INSERT INTO `gruas` (`id_grua`, `tipo`, `matricula`, `n_motor`, `kg_max`, `marca`, `modelo`) VALUES
(1, 'A', 'H3312', 'H3312', '1000', 'FORD', '2024'),
(2, 'B', 'J3312', 'J3312', '4000', 'KIA', '2024'),
(3, 'C', 'F3312', 'F3312', '8000', 'HIAB', '2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `a_paterno` varchar(200) NOT NULL,
  `a_materno` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `password`, `nombre`, `a_paterno`, `a_materno`, `tipo`) VALUES
(1, 'ortegavaldesf@gmail.com', 'smt12345', 'Fatima', 'Ortega', 'Valdes', 'Administrador'),
(2, 'zapotecas@gmail.com', 'smt67890', 'José', 'Zapotecas', 'Romero', 'Corralonero'),
(3, 'jose00vr@gmail.com', 'jose12345', 'Jose Ricardo', 'Valdez', 'Reyes', 'Corralonero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arrastres`
--
ALTER TABLE `arrastres`
  ADD PRIMARY KEY (`id_arrastre`);

--
-- Indices de la tabla `corralones`
--
ALTER TABLE `corralones`
  ADD PRIMARY KEY (`id_corralon`);

--
-- Indices de la tabla `gruas`
--
ALTER TABLE `gruas`
  ADD PRIMARY KEY (`id_grua`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arrastres`
--
ALTER TABLE `arrastres`
  MODIFY `id_arrastre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `corralones`
--
ALTER TABLE `corralones`
  MODIFY `id_corralon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gruas`
--
ALTER TABLE `gruas`
  MODIFY `id_grua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;