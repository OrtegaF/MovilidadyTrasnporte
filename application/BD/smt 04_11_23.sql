-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2023 a las 18:58:15
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
-- Estructura de tabla para la tabla `almecenes`
--

CREATE TABLE `almecenes` (
  `id_almacen` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `propietario` varchar(250) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `contacto` varchar(250) NOT NULL,
  `telefono` varchar(250) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `longitud` varchar(250) NOT NULL,
  `latitud` varchar(250) NOT NULL,
  `id_dia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `almecenes`
--

INSERT INTO `almecenes` (`id_almacen`, `nombre`, `propietario`, `id_zona`, `contacto`, `telefono`, `direccion`, `longitud`, `latitud`, `id_dia`) VALUES
(2, 'Gruas Pepe', 'Jose Ricardo Valdez Reyes', 4, 'pepeGruas@gmail.com', '2228907690', '36 Poniente #7', '18.0974783', '-19.0698945', 2),
(3, 'Gruas Chignahuapan', 'Jose Lopez Lopez', 1, 'chignahuapan@gmail.com', '2345678901', '56 Norte #6', '19.88242', '-98.27315', 1),
(4, 'Gruas Huachinango', 'Jorge Perez Lopez', 1, 'huachinango@gmail.com', '1234567890', '1 Sur #76', '20.13801', '-98.00635', 2),
(5, 'Gruas Naupan', 'Luis Gonzalez Ramires', 1, 'naupan@gmail.com', '2222222229', '24 Oriente #4', '20.20216', '-98.13367', 3),
(6, 'Gruas Tetela', 'Juan Perez Solis', 1, 'tetela@gmail.com', '3333333333', '12 Poniente #56', '19.816', ' -97.8062', 4),
(7, 'Gruas Tlaxco', 'Luis Ortega Lopez', 1, 'tlaxco@gmail.com', '4444444444', '24 norte #123', '20.425278', '-98.029167', 5),
(8, 'Gruas Xicotepec', 'Karina Peregrina Luna', 1, 'xicotepec@gmail.com', '5555555555', '12 Oriente #5', '20.274167', '-97.955000', 6);

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
-- Estructura de tabla para la tabla `codigo_postal`
--

CREATE TABLE `codigo_postal` (
  `id_codigo` int(11) NOT NULL,
  `codigo_postal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `codigo_postal`
--

INSERT INTO `codigo_postal` (`id_codigo`, `codigo_postal`) VALUES
(1, '75110'),
(2, '73300'),
(3, '73170'),
(4, '73140'),
(5, '73640'),
(6, '73060'),
(7, '73080'),
(8, '73310');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corralones`
--

CREATE TABLE `corralones` (
  `id_corralon` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `propietario` varchar(250) NOT NULL,
  `zona` varchar(250) NOT NULL,
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
(1, 'Gruas Pepe', 'Jose Ricardo Valdez Reyes', '0', '16 de Septiembre #67', 'Amalucan', 'Puebla', '19.0510837', '-98.1395408');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `id_dia` int(11) NOT NULL,
  `diaSemana` varchar(250) NOT NULL,
  `hora_inicio` int(200) NOT NULL,
  `hora_cierre` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`id_dia`, `diaSemana`, `hora_inicio`, `hora_cierre`) VALUES
(1, 'Lunes', 7, 7),
(2, 'Martes', 7, 7),
(3, 'Miercoles', 7, 7),
(4, 'Jueves', 7, 7),
(5, 'Viernes', 7, 7),
(6, 'Sabado', 7, 7),
(7, 'Domingo', 7, 7);

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
(2, 'B', 'J3312', 'J3312', '4000', 'KIA', '2024');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(250) NOT NULL,
  `cabecera` varchar(250) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `id_codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `municipio`, `cabecera`, `id_zona`, `id_codigo`) VALUES
(1, 'La Virgen', 'Acajete', 4, 1),
(2, 'San Juan Tepulco', 'Acajete', 4, 1),
(3, 'San Juan', 'Acajete', 4, 1),
(4, 'Chignahuapan', 'Chignahuapan', 1, 2),
(5, 'Huauchinango Centro', 'Huauchinango', 1, 3),
(6, 'Naupan', 'Naupan', 1, 4),
(7, 'Copila', 'Naupan', 1, 4),
(8, 'Tetela de Ocampo', 'Tetela de Ocampo', 1, 5),
(9, 'Llano Grande', 'Tetela de Ocampo', 1, 5),
(10, 'Tlaxco', 'Tlaxco', 1, 6),
(11, 'Xicotepec de Juarez', 'Xicotepec', 1, 7),
(12, 'Tierra Negra', 'Xicotepec', 1, 7),
(13, 'Zacatlan Centro', 'Zacatlan', 1, 8),
(14, 'El Nogal', 'Zacatlan', 1, 8);

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
(2, 'zapotecas@gmail.com', 'smt67890', 'José Angel', 'Zapotecas', 'Romero', 'Corralonero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_zona` int(11) NOT NULL,
  `zona` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id_zona`, `zona`) VALUES
(1, 'Sierra Norte'),
(2, 'Sierra Nororiental'),
(3, 'Valle de Serdán'),
(4, 'Angelopolis'),
(5, 'Valle de Atlixco y Mat'),
(6, 'Tehiacan y Sierra negr'),
(7, 'Mixteca');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `almecenes`
--
ALTER TABLE `almecenes`
  ADD PRIMARY KEY (`id_almacen`);

--
-- Indices de la tabla `arrastres`
--
ALTER TABLE `arrastres`
  ADD PRIMARY KEY (`id_arrastre`);

--
-- Indices de la tabla `codigo_postal`
--
ALTER TABLE `codigo_postal`
  ADD PRIMARY KEY (`id_codigo`);

--
-- Indices de la tabla `corralones`
--
ALTER TABLE `corralones`
  ADD PRIMARY KEY (`id_corralon`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indices de la tabla `gruas`
--
ALTER TABLE `gruas`
  ADD PRIMARY KEY (`id_grua`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `almecenes`
--
ALTER TABLE `almecenes`
  MODIFY `id_almacen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `arrastres`
--
ALTER TABLE `arrastres`
  MODIFY `id_arrastre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `codigo_postal`
--
ALTER TABLE `codigo_postal`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `corralones`
--
ALTER TABLE `corralones`
  MODIFY `id_corralon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id_dia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `gruas`
--
ALTER TABLE `gruas`
  MODIFY `id_grua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
