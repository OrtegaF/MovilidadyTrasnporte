-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2023 a las 19:15:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(10, 'Gruas Xicotepec', 'Jose Ricardo Valdez Reyes', 1, 'gruasXicotepec@gmail.como', '2222222222', '36 Poniente #7', '20.2757', ' -97.96', 4),
(11, 'Gruas Venustiano C', 'Jose Lopez Lopez', 1, 'gruasVenustianoC@gmail.com', '2222222221', '56 Norte #6', '20.5078', '-97.6712', 2),
(12, 'Gruas Pahuatlan', 'Jorge Perez Lopez', 1, 'gruasPahutlan@gmail.com', '2222222223', '1 Sur #76', '20.30908', '-98.09433', 3),
(13, 'Gruas Francisco Z', 'Luis Gonzalez Ramires', 1, 'gruasFrancisco@gmail.com', '2222222224', '24 Oriente #4', '20.75000', '-97.75000', 4),
(14, 'Gruas Jalpan', 'Juan Perez Solis', 1, 'gruasJalpan@gmail.com', '2222222226', '12 Poniente #56', '20.5078', ' -97.6712', 5),
(15, 'Gruas Zihuateutla', 'Jorge Tzoni Aguilar', 1, 'gruasZihuateutla@gmail.com', '2222222227', '1 Norte #7', '20.2529', ' -97.8692', 6),
(16, 'Gruas Honey', 'Luis Adrian Moreno Reyes', 1, 'gruasHoney@gmail.com', '2222222228', 'Prolongación 2 norte #4', '20.2385', '-98.212', 7),
(17, 'Gruas Pantepec', 'Abigail Santamaria Barragan', 1, 'gruasPantepec@gmail.com', '2222222229', 'Privada Niños Heroes #56', ' 20.5093', '-97.9332', 7),
(18, 'Gruas Tlacuilotepec', 'Bernardo David Trinidad Vera', 1, 'gruasTlacuilotepec@gmail.com', '1111111111', 'Calle Benito Juarez #12', '20.3258', ' -98.0685', 6),
(19, 'Gruas Naupan', 'Erick Vazquez Vazquez', 1, 'gruasNaupan@gmail.com', '1111111119', 'Privada 2 oriente #5', '20.2315', '-98.1083', 5),
(20, 'Gruas Tlaxco', 'David Galaviz Garcia', 1, 'gruasTlaxco@gmail.com', '1111111118', '24 norte #13', '20.425278', ' -98.029167', 4),
(21, 'Gruas Huachinango', 'Perla Hernandez Cubas', 2, 'gruasHuachinango@gmail.com', '1111111117', '36 Poniente #72', '20.1735', '-98.0588', 1),
(22, 'Gruas Ahuazotepec', 'Brandon Lopez Ramirez', 2, 'gruasAhuzotepec@gmail.com', '1111111117', '24 Oriente #43', '20.04433', '-98.16182', 2),
(23, 'Gruas Juan Galindo', 'Paul Galindo Gamez', 2, 'gruasJuanG@gmail.com', '1111111116', '23 Norte #4', '20.18333', '-97.95000', 3),
(24, 'Gruas Tlaola', 'Kevin Santiago Ochoa', 2, 'gruasTlaola@gmail.com', '1111111115', '22 norte #123', '20.14301', '-97.94537', 4),
(25, 'Gruas Chiconcuautla', 'Blanca Paola Garcia Herrera', 2, 'gruasChiconcuautla@gmail.com', '1111111115', '5 Poniente #45', ' 20.09447', '-97.93896', 5),
(26, 'Gruas Jopala', 'Eduardo Aguilar Ortega', 2, 'gruasJopala@gmail.com', '1111111114', '2 Norte #6', '20.1628', '-97.6928', 6),
(27, 'Gruas Tlapacoya', 'Cristian Rangel Martinez', 2, 'gruasTlapacoya@gmail.com', '1111111113', 'Prolongacion 5 sur #45', '20.13690755', '-97.8252880056836', 7),
(28, 'Gruas Zacatlan', 'Angel Jahir Lopez Ramirez', 3, 'gruasZacatlan@gmail.com', '1111111112', 'Calle Manzanas #45', '19.917', ' -97.967', 7),
(29, 'Gruas Ahuacatlan', 'Diego Romero Medina', 3, 'gruasAhuacatlan@gmail.com', '3333333333', '24 Oriente #47', '20.0085', '-97.8563', 6),
(30, 'Gruas Coatepec', 'Juan Carlos Zeneteno', 3, 'gruasCoatepec@gmail.com', '3333333331', '12 Sur #76', ' 20.0597', '-97.7316', 3),
(31, 'Gruas Amixtlan', ' Omar Monroy Pais', 3, 'gruasAmixtlan@gmail.com', '3333333332', '56 Norte #645', '20.0484', '-97.7987', 2),
(32, 'Gruas Mixtlan', 'Juan Antonio Valdes Valdes', 3, 'gruasMixtlan@gmail.com', '3333333334', '24 Oriente #47', '20.0484', ' -97.7987', 5),
(33, 'Gruas Tepango', 'Erika Valdes Reyes', 3, 'gruasTepango@gmail.com', '3333333335', '5 de Mayo #5', '20.00478', '-97.79737', 4),
(34, 'Gruas San Felipe', 'Felipe Gonzalez Perez', 3, 'gruasSanFelipe@gmail.com', '3333333336', '16 de Septiembre #32', ' 20.08783', '-97.80153', 1),
(35, 'Gruas Huehuetla', 'Graciela Silva Reyes', 4, 'gruasHuehuetla@gmail.com', '3333333337', '12 Poniente #56', ' 20.1047', '-97.6252', 4),
(36, 'Gruas Huitzilan', 'Maximino Rojas Flores', 4, 'gruasHuitzilan@gmail.com', '3333333337', '1 Sur #76', '19.96667', '-97.68333', 7),
(37, 'Gruas Olintla', 'José Luis Ortega Lopez', 4, 'gruasOlintla@gmail.com', '3333333338', '12 Poniente #7', '20.1011', '-97.6841', 2),
(38, 'Gruas Zapotitlan', 'Eduardo Reyes Reyes', 4, 'gruasZapotitlan@gmail.com', '3333333339', 'Prolongación 2 norte #52', '20.00391', '-97.67575', 6),
(39, 'Gruas Cuetzalan', 'Marisol Valdez Reyes', 5, 'gruasCuetzalan@gmail.com', '4444444441', '1 Sur #76', '20.02966', '-97.54134', 4),
(40, 'Gruas Zacapoaxtla', 'Adrian Vargas Contreras', 5, 'gruasZacapoaxtla@gmail.com', '4444444442', '12 Poniente #56', '19.8763', '-97.5876', 1),
(41, 'Gruas Zautla', 'Fernanda Carreon Lopez', 5, 'gruasZautla@gmail.com', '4444444443', '24 Oriente #42', '19.7152', '-97.6698', 5),
(42, 'Gruas Jonotla', 'Fernando Aguilar Serrano', 5, 'gruasJonotla@gmail.com', '4444444445', '2 Oriente #6', '20.0301', '-97.5751', 7),
(43, 'Gruas Zoquiapan', 'Alfredo Flores Gomez', 5, 'gruasZoquiapan@gmail.com', '4444444446', '13 Poniente #45', '20.004167', '-97.603611', 3),
(44, 'Gruas Teziutlan', 'Lucero Ortega Valdes', 6, 'gruasTeziutlan@gmail.com', '4444444447', '1 Sur #16', '19.8169', '-97.3591', 4),
(45, 'Gruas Tlatlauquitepec', 'Jesus Cruz Carmona', 6, 'gruasTlatlauquitepec@gmail.com', '4444444447', '12 Poniente #2', '19.8523', '-97.4955', 1),
(46, 'Gruas Chignautla', 'Raul Lopez Juarez', 6, 'gruasChignautla@gmail.com', '4444444448', '14 Norte #2', '19.8126', '-97.3888', 7),
(47, 'Gruas Xiutetelco', 'Janet Perez Lopez', 6, 'gruasXiutetelco@gmail.com', '4444444449', '5 Sur #32', '19.8', ' -97.333', 5),
(48, 'Gruas Tenampulco', 'Angel Antonio Hernandez Torres', 6, 'gruasTenampulco@gmail.com', '5555555555', '8 Norte #4', '19.726111', ' -97.694167', 3),
(49, 'Gruas Chignahuapan ', 'Jose Monroy Irigoyen', 7, 'gruasChignahuapan@gmail.com', '5555555551', '24 Oriente #4', '19.88242', '-98.27315', 4),
(50, 'Gruas Tetela de Ocampo', 'Francisco Lemus Ortiz', 7, 'gruasTetela@gmail.com', '5555555552', '10 Sur #7', '19.816', '-97.8062', 7),
(51, 'Gruas Ixtamaxtitlan', 'Maria Juarez Ocote', 7, 'gruasIxtamaxtitlan@gmail.com', '5555555553', '3 Poniente #52', '19.627222', '-97.814167', 1),
(52, 'Gruas Aquixtla', 'Jahir Lopez Romero', 7, 'gruasAquixtla@gmail.com', '5555555554', 'Privada 12 de mayo #4', '19.79661', '-97.93563', 2),
(53, 'Gruas Cuautempan', 'Luisa Fernandez Gonzalez', 7, 'gruasCuautempan@gmail.com', '5555555556', '7 Norte #6', '19.90974', '-97.79601', 3),
(54, 'Gruas Libres', 'Lucas Rios Flores', 8, 'gruasLibres@gmail.com', '5555555557', '23 Oriente #47', '19.4642', ' -97.6875', 4),
(55, 'Gruas Oriental', 'Mayra Merino Mendez', 8, 'gruasOriental@gmail.com', '5555555557', '2 Sur #9', '19.3768', '-97.6194', 2),
(56, 'Gruas San Salvador el Seco', 'Jose Luis Bautista Carlos', 8, 'gruasSalvadorS@gmail.com', '5555555558', '6 Poniente #3', '19.10604', '-97.59177', 6),
(57, 'Gruas Ocotepec', 'Juana Ramirez Ortega', 8, 'gruasOcotepec@gmail.com', '5555555559', '7 Norte #45', '19.5528', '-97.6471', 5),
(58, 'Gruas Guadalupe', 'Fernando Cubas Hernandez', 9, 'gruasGuadalupe@gmail.com', '6666666666', '2 Oriente #47', '19.2904', '-97.3409', 4),
(59, 'Gruas Tlachichuca', 'Irma Duran Vazquez', 9, 'gruasTlachichuca@gmail.com', '6666666661', 'Privada Juarez #5', '19.12353', '-97.41118', 1),
(60, 'Gruas Chilchotla', 'Veronica Silva Reyes', 9, 'gruasChilchotla@gmail.com', '6666666662', '6 Oriente #43', '19.0413', '-98.2062', 6),
(61, 'Gruas Quimixtlan', 'Aurora Flores Aguilar', 9, 'gruasQuimixtlan@gmail.com', '6666666663', '7 Poniente #1', '19.2538', '-97.1369', 3),
(62, 'Gruas Acatzingo', 'Karina Irigoyen Abustos', 10, 'gruasAcatzingo@gmail.com', '6666666664', '2 Oriente #4', '18.981667', '-97.782222', 4),
(63, 'Gruas Quecholac', 'Yanet Ortiz Duran', 10, 'gruasQuecholac@gmail.com', '6666666667', 'Calle 5 de mayo #4', '18.95678', '-97.65776', 2),
(64, 'Gruas San Salvador Huixcolotla', 'José Alfredo Contreras Lima', 10, 'gruasHuixcolotla@gmail.com', '6666666668', '12 Sur #56', '17.1328', '-97.77699', 6),
(65, 'Gruas Felipe Angeles', 'Angeles Trinidad Aguilar', 10, 'gruasAngeles@gmail.com', '6666666668', '5 Norte #19', '19.04367', '-97.70102', 1),
(66, 'Gruas Chalchicomula', 'Benito Lopez Lopez', 11, 'gruasChalchicomula@gmail.com', '6666666669', '24 Oriente #9', '19.04182', '-97.43747', 4),
(67, 'Gruas Palmar de Bravo', 'Areli Huerta Huerta', 11, 'gruasPalmar@gmail.com', '7777777777', '17 Sur #10', '18.83355', '-97.56013', 6),
(68, 'Gruas Esperanza', 'Yolanda Jimenez Tiburcio', 11, 'gruasEsperanza@gmail.com', '7777777771', 'Calle 12 de noviembre #12', '18.8572371', ' -97.3499291630352', 7),
(69, 'Gruas Aljojuca', 'Erick Huerta Aguilar', 11, 'gruasAljojuca@gmail.com', '7777777772', '1 Norte #16', '19.1', '-97.517', 2),
(70, 'Gruas Tecamachalco', 'Wilmar Rendon Sanchez', 12, 'gruasTecamachalco@gmail.com', '7777777773', '1 Norte #35', '18.84435', '-97.76372', 4),
(71, 'Gruas Benito', 'Porfirio Diaz Sanchez', 12, 'gruasBenito@gmail.com', '7777777774', '9 Poniente #45', '18.66978', '-97.67256', 1),
(72, 'Gruas Yehualtepec', 'Maria Lourdes Casco Ramirez', 12, 'gruasYehualtepec@gmail.com', '7777777775', '24 Oriente #20', '18.79027', '-97.67185', 6),
(73, 'Gruas Tochtepec', 'Fatima Valdivia Garcia', 12, 'gruasTochtepec@gmail.com', '7777777776', '1 Oriente #4', '18.841', '-97.8226', 3),
(74, 'Gruas Tehuacan', 'Fabian Robles Rojas', 13, 'gruasTehuacan@gmail.com', '7777777778', '12 Poniente #65', '18.46422', '-97.39735', 4),
(75, 'Gruas Santiago', 'Gloria Rojas Rojas', 13, 'gruasSantiago@gmail.com', '7777777779', 'Priavada 3 Norte #4', '18.54728', '-97.43939', 1),
(76, 'Gruas Tepanco', 'Julian Ventura Angel', 13, 'gruasTepanco@gmail.com', '7777777770', 'Avenida Lopez Mateos #78', '18.5538', '-97.5605', 7),
(77, 'Gruas Nicolas B', 'Nicolas Garcia Gutierrez', 13, 'gruasNicolasB@gmail.com', '8888888888', '13 Norte #6', '18.63952', '-97.39649', 4),
(78, 'Gruas Ajalpan', 'Karime Galindo Huerta', 14, 'gruasAjalpan@gmail.com', '8888888881', '1 Sur #30', '18.378333', ' -97.259444', 4),
(79, 'Gruas Zoquitlan', 'Zoe Perez Larios', 14, 'gruasZoquitlan@gmail.com', '8888888882', '13 Oriente #47', '18.336389', '-97.018056', 6),
(80, 'Gruas San Sebastian', 'Karlos Ventura Larios', 14, 'gruasSanSebastian@gmail.com', '8888888883', '7 Poniente #7', '18.33333', '-97.25000', 2),
(81, 'Gruas Coyomeapan', 'Jovanny Baez Lopez', 14, 'gruasCoyomeapan@gmail.com', '8888888884', '12 Sur #10', '18.27833', '-96.99200', 3),
(82, 'Gruas Matamoros', 'Perla Moreno Gutierrez', 15, 'gruasMatamoros@gmail.com', '8888888885', '1 Sur #10', '18.560833', '-98.476667', 4),
(83, 'Gruas Tepeojuma', 'Adrian Jimenez Roldan', 15, 'gruasTepeojuma@gmail.com', '8888888886', 'Privada 16 de septiembre #56', '18.71539', '-98.38688', 5),
(84, 'Gruas Tilapa', 'Agustina Roldan Morales', 15, 'gruasTilapa@gmail.com', '8888888887', '7 Oriente #15', '18.5938', '-98.5539', 2),
(85, 'Gruas Chiautla', 'Luisa Tlali Ocote', 16, 'gruasChiautla@gmail.com', '8888888889', '61 Norte #6', '18.2783', ' -98.5903', 1),
(86, 'Gruas Jolalpan', 'Jungkook Leon ', 15, 'gruasJolalpan@gmail.com', '9999999999', '14 Oriente #47', '18.321389', '-98.845278', 4),
(87, 'Gruas Teotlalco', 'Susana Larios Sosa', 16, 'gruasTeotlalco@gmail.com', '9999999991', '17 Sur #76', '18.4683', '-98.7783', 2),
(88, 'Gruas Puebla', 'Eduardo Texis Ausa', 21, 'gruasPuebla@gmail.com', '9999999992', '12 Poniente #32', '19.03793', '-98.20346', 4),
(89, 'Gruas San Andres', 'Juan Guerra Cajero', 21, 'gruasSanAndres@gmail.com', '9999999992', '4 Oriente #47', ' 19.04802', '-98.29617', 2),
(90, 'Gruas San Pedro', 'Pedro Galaviz Hernandez', 21, 'gruasSanPedro@gmail.com', '9999999993', 'Prolongacion 4 oriente #2', '19.09833', '-98.31655', 6),
(91, 'Gruas Amozoc', 'Lizeth Santamaria Barragn', 21, 'gruasAmozoc@gmail.com', '9999999994', '56 Norte #6', '19.0408', '-98.0459', 4),
(92, 'Gruas Cuautlancingo', 'Jimena Irigoyen Dimas', 21, 'gruasCuautlancingo@gmail.com', '9999999995', '7 Poniente #56', '19.0841', '-98.2669', 3),
(93, 'Gruas Coronango', 'Daniel Vazquez Mora', 21, 'gruasCoronango@gmail.com', '9999999996', 'Avenida las flores #45', '19.13136', '-98.29790', 1),
(94, 'Gruas Ocoyucan', 'Angel Alvarado', 21, 'gruasOcoyucan@gmail.com', '9999999997', '13 Norte #12', '18.9768', ' -98.3015', 7),
(95, 'Gruas Atlixco', 'Juan Lucas Dominguez', 19, 'gruasAtlixco@gmail.com', '9999999997', '1 Sur #1', '18.88898', '-98.45132', 4),
(96, 'Gruas Santa Isabel', 'Brandon Coconi', 19, 'gruasSantaIsabel@gmail.com', '9999999998', '36 Poniente #10', '18.99250', '-98.37788', 1),
(97, 'Gruas Huaquechula', 'Javier Palacios', 19, 'gruasHuaquechula@gmail.com', '9999999990', '3 Poniente #23', '18.78619', '-98.48941', 3),
(98, 'Gruas Tochimilco', 'Miguel Angel Cabellero', 19, 'gruasTochimilco@gmail.com', '1000000002', '12 Oriente #32', '18.8906', '-98.5726', 5),
(99, 'Gruas Cohuecan', 'Maximino Flores Tirado', 19, 'gruasCohuecan@gmail.com', '1000000003', '2 Oriente #47', '18.80000', '-98.71667', 4),
(100, 'Gruas Tepeaca', 'Edmundo Galindo', 22, 'gruasTepeaca@gmail.com', '1000000004', '11 Sur #76', '18.9647', ' -97.9031', 4),
(101, 'Gruas Acajete', 'Irma Ortega Paredes', 22, 'gruasAcajete@gmail.como', '1000000005', '16 Poniente #7', '19.1066', '-97.9519', 3),
(102, 'Gruas Tecali', 'Brenda Amador Torres', 22, 'gruasTecali@gmail.com', '1000000006', '17 Poniente #56', '18.9022', '-97.9742', 7),
(103, 'Gruas Tepatlaxco', 'Bernardo Cruz Lopez', 22, 'gruasTepatlaxco@gmail.com', '1000000007', 'Privada Niños Heroes #7', '19.07949', '-97.97127', 4),
(104, 'Gruas Acatlan', 'Osiris Bernardino', 17, 'gruasAcatlan@gmail.com', '1000000008', '26 Norte #6', '18.2133', '-98.0554', 4),
(105, 'Gruas Tehuitzingo', 'Pablo Huerta', 17, 'gruasTehuitzingo@gmail.com', '1000000008', '61 Poniente #7', '18.3319', '-98.2756', 1),
(106, 'Gruas Tulcingo', 'Petra Nuñez', 17, 'gruasTulcingo@gmail.com', '1000000009', '23 Oriente #4', '18.04834', '-98.37533', 2),
(107, 'Gruas Piaxtla', 'Jan Lopez', 17, 'gruasPiaxtla@gmail.com', '2000000001', '36 Poniente #71', '19.85000', '-97.43333', 4);

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
-- Estructura de tabla para la tabla `arrastres_admin`
--

CREATE TABLE `arrastres_admin` (
  `id_arrastre` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `no_vehiculos` int(11) NOT NULL,
  `folio` varchar(100) NOT NULL,
  `modelo_vehiculo` varchar(155) NOT NULL,
  `tipo_vehiculo` varchar(255) NOT NULL,
  `grua` varchar(11) NOT NULL,
  `cp` varchar(50) NOT NULL,
  `colonia` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `ubicacion_almacen` varchar(255) NOT NULL,
  `almacen` varchar(255) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `kilometros` varchar(100) NOT NULL,
  `costo_arrastre` varchar(100) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `arrastres_admin`
--

INSERT INTO `arrastres_admin` (`id_arrastre`, `matricula`, `no_vehiculos`, `folio`, `modelo_vehiculo`, `tipo_vehiculo`, `grua`, `cp`, `colonia`, `direccion`, `region`, `ubicacion_almacen`, `almacen`, `telefono`, `contacto`, `kilometros`, `costo_arrastre`, `fecha`) VALUES
(8, 'UTP0145723', 2, '2023-2-UTP0145723', 'prueba', '2', '2', '73080', '1', 'De las flores', 'Xicotepec', '24 Oriente #4', 'Gruas Francisco Z', '2222222224', 'gruasFrancisco@gmail.com', '125.9862', '3701', '2023-11-09'),
(14, '2311081318', 1, '2023-1-2311081318', 'prueba', '2', '1', '73080', '1', 'De las flores', 'Xicotepec', '36 Poniente #7', 'Gruas Xicotepec', '2222222222', 'gruasXicotepec@gmail.como', '1.3525999999999998', '38', '2023-11-09'),
(15, 'UTP01786', 1, '2023-1-UTP01786', 'prueba', '2', '2', '73080', '1', 'De las flores', '', '', '', '', '', '1.3525999999999998', '40', '2023-11-09');

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
(1, '73080'),
(2, '73040'),
(3, '73100'),
(4, '73000'),
(5, '73050'),
(6, '73242'),
(7, '73120'),
(8, '73020'),
(9, '73070'),
(10, '73140'),
(11, '73060'),
(12, '73170'),
(13, '73180'),
(14, '73200'),
(15, '73220'),
(16, '73320'),
(17, '73260'),
(18, '73310'),
(19, '73330'),
(20, '73341'),
(21, '73410'),
(22, '73360'),
(23, '73370'),
(24, '73350'),
(25, '73390'),
(26, '73420'),
(27, '73470'),
(28, '73450'),
(29, '73400'),
(30, '73440'),
(31, '73560'),
(32, '73680'),
(33, '73740'),
(34, '73530'),
(35, '73540'),
(36, '73800'),
(37, '73900'),
(38, '73940'),
(39, '73970'),
(40, '73500'),
(41, '73300'),
(42, '73640'),
(43, '73720'),
(44, '73620'),
(45, '73600'),
(46, '73780'),
(47, '75020'),
(48, '75120'),
(49, '73773'),
(50, '75040'),
(51, '73280'),
(52, '75050'),
(53, '75070'),
(54, '75080'),
(55, '75150'),
(56, '75460'),
(57, '75440'),
(58, '75170'),
(59, '75520'),
(60, '75500'),
(61, '75560'),
(62, '75180'),
(63, '75480'),
(64, '75680'),
(65, '75670'),
(66, '75610'),
(67, '75717'),
(68, '75820'),
(69, '73370'),
(70, '75830'),
(71, '75910'),
(72, '75930'),
(73, '75940'),
(74, '75990'),
(75, '74400'),
(76, '74390'),
(77, '74560'),
(78, '74730'),
(79, '74710'),
(80, '74700'),
(81, '72219'),
(82, '72760'),
(83, '72810'),
(84, '72980'),
(85, '72700'),
(86, '72670'),
(87, '72850'),
(88, '74200'),
(89, '74350'),
(90, '74370'),
(91, '74330'),
(92, '74520'),
(93, '75200'),
(94, '75110'),
(95, '75240'),
(96, '75100'),
(97, '74949'),
(98, '74800'),
(99, '74790'),
(100, '74880');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos_servicios`
--

CREATE TABLE `conceptos_servicios` (
  `id_concepto` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `concepto` varchar(255) NOT NULL,
  `cuota_por_hora` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conceptos_servicios`
--

INSERT INTO `conceptos_servicios` (`id_concepto`, `id_servicio`, `concepto`, `cuota_por_hora`) VALUES
(1, 1, 'Abanderamiento con Grúa', '6.932'),
(2, 1, 'Abanderamiento Manual', '0.583'),
(3, 1, 'Custodia de Vehículo con Grúa', '5.784'),
(4, 2, 'Maniobra de salvamento sobre el camino con Grúa tipo “A”', '14.038'),
(5, 2, 'Maniobra de salvamento sobre el camino con Grúa tipo “B”', '15.386'),
(6, 2, 'Maniobra de salvamento sobre el camino con Grúa tipo “C”', '17.544'),
(7, 2, 'Maniobra de salvamento sobre el camino con Grúa tipo “D”', '24.191'),
(8, 3, 'Maniobra de salvamento fuera el camino con Grúa tipo “A”', '28.075'),
(9, 3, 'Maniobra de salvamento fuera el camino con Grúa tipo “B”', '30.772'),
(10, 3, 'Maniobra de salvamento fuera el camino con Grúa tipo “C”', '35.088'),
(11, 3, 'Maniobra de salvamento fuera el camino con Grúa tipo “D”', '48.381'),
(12, 4, 'Maniobra de salvamento fuera del camino con Grúa tipo “A”', '42.112'),
(13, 4, 'Maniobra de salvamento fuera del camino con Grúa tipo “B”', '46.158'),
(14, 4, 'Maniobra de salvamento fuera del camino con Grúa tipo “C”', '52.632'),
(15, 4, 'Maniobra de salvamento fuera del camino con Grúa tipo “D”', '72.571');

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
(1, 'Xicotepec de Juarez', 'Xicotepec', 1, 1),
(2, 'Venustiano Carranza', 'Venustiano Carranza', 1, 2),
(3, 'Ciudad de Pahuatlán de Valle', 'Pahuatlan', 1, 3),
(4, 'Moctezuma', 'Francisco Z. Mena', 1, 4),
(5, 'Metlaltoyuca', 'Francisco Z. Mena', 1, 4),
(6, 'Jalpan', 'Jalpan', 1, 5),
(7, 'Zihuateutla', 'Zihuateutla', 1, 6),
(8, 'Honey', 'Honey', 1, 7),
(9, 'La Magdalena', 'Honey', 1, 7),
(10, 'Pantepec', 'Pantepec', 1, 8),
(11, 'Tlacuilotepec', 'Tlacuilotepec', 1, 9),
(12, 'Naupan', 'Naupan', 1, 10),
(13, 'Tlaxco', 'Tlaxco', 1, 11),
(14, 'Huauchinango Centro', 'Huauchinango', 2, 12),
(15, 'Ahuazotepec', 'Ahuazotepec', 2, 13),
(16, 'Nuevo Necaxa', 'Juan Galindo', 2, 14),
(17, 'Tlaola', 'Tlaola', 2, 15),
(18, 'Chiconcuatla', 'Chiconcuatla', 2, 16),
(19, 'Jopala', 'Jopala', 2, 17),
(20, 'Tlapacoya', 'Tlapacoya', 2, 51),
(21, 'Zacatlan Centro', 'Zacatlan', 3, 18),
(22, 'Ahuacatlán', 'Ahuacatlán', 3, 19),
(23, 'Tepetzintla', 'Tepetzintla', 3, 20),
(24, 'Coatepec', 'Coatepec', 3, 21),
(25, 'Amixtlan', 'Amixtlan', 3, 22),
(26, 'Tepango de Rodríguez', 'Tepango de Rodríguez', 3, 23),
(27, 'San Felipe Tepatlan', 'San Felipe Tepatlan', 3, 24),
(28, 'San Antonio Hermenegildo Galeana', 'Hermenegildo Galeana', 3, 25),
(29, 'Camocuautla', 'Camocuautla', 3, 26),
(30, 'Huehuetla', 'Huehuetla', 4, 27),
(31, 'Huitzilan', 'Huitzilan de Serdán', 4, 28),
(32, 'Olintla', 'Olintla', 4, 29),
(33, 'Zapotitlán de Méndez', 'Zapotitlán de Méndez', 4, 30),
(34, 'Ciudad de Cuetzalan', 'Cuetzalan del Progreso', 5, 31),
(35, 'Zacapoaxtla Centro', 'Zacapoaxtla', 5, 32),
(36, 'Zautla', 'Zautla', 5, 33),
(37, 'Jonotla', 'Jonotla', 5, 34),
(38, 'Zoquiapan', 'Zoquiapan', 5, 35),
(39, 'Teziutlán Centro', 'Teziutlán', 6, 36),
(40, 'Tlatlauquitepec', 'Tlatlauquitepec', 6, 37),
(41, 'Atempan', 'Atempan', 6, 38),
(42, 'San Juan Xiutetelco', 'Xiutetelco', 6, 39),
(43, 'Tenampulco', 'Tenampulco', 6, 40),
(44, 'Chignahuapan', 'Chignahuapan', 7, 41),
(45, 'Tetela de Ocampo', 'Tetela de Ocampo', 7, 42),
(46, 'Ixtacamaxtitlán', 'Ixtacamaxtitlán', 7, 43),
(47, 'Aquixtla', 'Aquixtla', 7, 44),
(48, 'San Esteban Cuautempan', 'Cuautempan', 7, 45),
(49, 'Libres Centro', 'Libres', 8, 46),
(50, 'Oriental', 'Oriental', 8, 47),
(51, 'Nopalucan de la Granja', 'Nopalucan', 8, 48),
(52, 'Ocotepec', 'Ocotepec', 8, 49),
(53, 'Guadalupe Victoria', 'Guadalupe Victoria', 9, 50),
(54, 'Tlachichuca', 'Tlachichuca', 9, 52),
(55, 'Acocomotla', 'Chilchotla', 9, 53),
(56, 'Quimixtlán', 'Quimixtlán', 9, 54),
(57, 'Acatzingo de Hidalgo', 'Acatzingo', 10, 55),
(58, 'Quecholac', 'Quecholac', 10, 56),
(59, 'San Salvador Huixcolotla', 'San Salvador Huixcolotla', 10, 57),
(60, 'San Pablo de las Tunas', 'General Felipe Ángeles', 10, 58),
(61, 'SESMA', 'Chalchicomula de Sesma', 11, 59),
(62, 'Palmar de Bravo', 'Palmar de Bravo', 11, 60),
(63, 'Esperanza', 'Esperanza', 11, 61),
(64, 'Aljojuca', 'Aljojuca', 11, 62),
(65, 'Tecamachalco Centro', 'Tecamachalco', 12, 63),
(66, 'Tlacotepec de Benito Juárez', 'Tlacotepec de Benito Juárez', 12, 64),
(67, 'Yehualtepec', 'Yehualtepec', 12, 65),
(68, 'Tochtepec Centro', 'Tochtepec', 12, 66),
(69, 'Tehuacán (Tehuacán)', 'Tehuacán', 13, 67),
(70, 'Santiago Miahuatlán', 'Santiago Miahuatlán', 13, 68),
(71, 'Tepango de Rodríguez', 'Tepango de Rodríguez', 13, 69),
(72, 'Nicolás Bravo', 'Nicolás Bravo', 13, 70),
(73, 'Ajalpan', 'Ajalpan', 14, 71),
(74, 'Zoquitlán', 'Zoquitlán', 14, 72),
(75, 'Tlacotepec de Porfirio Díaz', 'San Sebastián Tlacotepec', 14, 73),
(76, 'Santa María Coyomeapan', '	Coyomeapan', 14, 74),
(77, 'Izucar de Matamoros Centro', ' }Izucar de Matamoros', 15, 75),
(78, 'Tepeojuma', 'Tepeojuma', 15, 76),
(79, 'Tilapa', 'Tilapa', 15, 77),
(80, 'Chiautla de Tapia', 'Chiautla', 16, 78),
(81, 'Santa Ana Jolalpan', 'Jolalpan', 16, 79),
(82, 'Teotlalco', 'Teotlalco', 16, 80),
(83, 'Ángeles de Puebla', 'Puebla', 21, 81),
(84, 'Cholula de Rivadabia Centro', 'San Pedro Cholula', 21, 82),
(85, 'San Andrés Cholula Centro', 'San Andrés Cholula', 21, 83),
(86, 'Amozoc Centro', 'Amozoc', 21, 84),
(87, 'San Juan Cuautlancingo', 'Cuautlancingo', 21, 85),
(88, 'Santa María Coronango', 'Coronango', 21, 86),
(89, 'Santa Clara Ocoyucan', 'Ocoyucan', 21, 87),
(90, 'Atlixco Centro', 'Atlixco', 19, 88),
(91, 'Santa Isabel Cholula', 'Santa Isabel Cholula', 19, 89),
(92, 'Huaquechula', 'Huaquechula', 19, 90),
(93, 'Tochimilco', 'Tochimilco', 19, 91),
(94, 'Cohuecan', 'Cohuecan', 19, 92),
(95, 'Tepeaca Centro', 'Tepeaca', 22, 93),
(96, 'La Virgen', 'Acajete', 22, 94),
(97, 'Tecali de Herrera', 'Tecali de Herrera', 22, 95),
(98, 'Tepatlaxco de Hidalgo', 'Tepatlaxco de Hidalgo', 22, 96),
(99, 'Acatlán de Osorio Centro', 'Acatlán', 17, 97),
(100, 'Tehuitzingo', 'Tehuitzingo', 17, 98),
(101, 'Tulcingo de Valle', 'Tulcingo', 17, 99),
(102, 'Piaxtla', 'Piaxtla', 17, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nom_servicio` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nom_servicio`, `status`) VALUES
(1, 'ABANDERAMIENTO Y/O CUSTODIA', 1),
(2, 'SALVAMENTO SOBRE EL CAMINO', 1),
(3, ' SALVAMENTO FUERA DEL CAMINO SIN CARGA ', 1),
(4, ' SALVAMENTO FUERA DEL CAMINO CON CARGA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_grua`
--

CREATE TABLE `tipo_grua` (
  `id_grua` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `km` varchar(250) NOT NULL,
  `tarifa_base` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_grua`
--

INSERT INTO `tipo_grua` (`id_grua`, `tipo`, `km`, `tarifa_base`) VALUES
(1, 'A', '0.217', '6.086'),
(2, 'B', '0.238', '6.992'),
(3, 'C', '0.271', '8.308'),
(4, 'D', '0.373', '10.197');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculo`
--

CREATE TABLE `tipo_vehiculo` (
  `id_vehiculo` int(11) NOT NULL,
  `tipo_vehiculo` varchar(200) NOT NULL,
  `cuota_dia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_vehiculo`
--

INSERT INTO `tipo_vehiculo` (`id_vehiculo`, `tipo_vehiculo`, `cuota_dia`) VALUES
(1, 'Bicicletas y Motocicletas', '0.176'),
(2, 'Automóviles', '0.562'),
(3, 'Camionetas', '0.632'),
(4, 'Camiones, Tractores Agrícolas y Tractocamiones', '1.052'),
(5, 'Autobuses, Remolques y Semirremolques', '1.228'),
(6, 'Tractocamiones con doble Semirremolque', '2.379');

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
(1, 'Xicotepec'),
(2, 'Huachinango'),
(3, 'Zacatlan'),
(4, 'Huehuetla'),
(5, 'Zacapoaxtla'),
(6, 'Teziutlan'),
(7, 'Chignahuapan'),
(8, 'Libres'),
(9, 'Quimixtlan'),
(10, 'Acatzingo'),
(11, 'Ciudad Serdan'),
(12, 'Tecamachalco'),
(13, 'Tehuacan'),
(14, 'Sierra Negra'),
(15, 'Izucar de Matamoros'),
(16, 'Chiautla'),
(17, 'Acatlan'),
(18, 'Tepexi de Rodriguez'),
(19, 'Atlixco'),
(20, 'San Martin Texmelucan'),
(21, 'Ciudad de Puebla'),
(22, 'Tepeaca');

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
-- Indices de la tabla `arrastres_admin`
--
ALTER TABLE `arrastres_admin`
  ADD PRIMARY KEY (`id_arrastre`);

--
-- Indices de la tabla `codigo_postal`
--
ALTER TABLE `codigo_postal`
  ADD PRIMARY KEY (`id_codigo`);

--
-- Indices de la tabla `conceptos_servicios`
--
ALTER TABLE `conceptos_servicios`
  ADD PRIMARY KEY (`id_concepto`);

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
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tipo_grua`
--
ALTER TABLE `tipo_grua`
  ADD PRIMARY KEY (`id_grua`);

--
-- Indices de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`);

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
  MODIFY `id_almacen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT de la tabla `arrastres`
--
ALTER TABLE `arrastres`
  MODIFY `id_arrastre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `arrastres_admin`
--
ALTER TABLE `arrastres_admin`
  MODIFY `id_arrastre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `codigo_postal`
--
ALTER TABLE `codigo_postal`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `conceptos_servicios`
--
ALTER TABLE `conceptos_servicios`
  MODIFY `id_concepto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id_grua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_grua`
--
ALTER TABLE `tipo_grua`
  MODIFY `id_grua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_vehiculo`
--
ALTER TABLE `tipo_vehiculo`
  MODIFY `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id_zona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
