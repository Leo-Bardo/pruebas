-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2023 a las 00:25:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdaguida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades_generales`
--

CREATE TABLE `actividades_generales` (
  `idActividadGeneral` int(3) NOT NULL,
  `actividadGeneral` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actividades_generales`
--

INSERT INTO `actividades_generales` (`idActividadGeneral`, `actividadGeneral`) VALUES
(1, 'Revisión de procedimiento de preparación'),
(2, 'libreación de limpieza de equipos a utilizar (ppro 2)'),
(3, 'revisión de funcionamiento de equipos de proceso'),
(4, 'limpieza de utensilio a utilizar (espátula, cubeta, tambo, pala, etc)'),
(5, 'retiro de utensilios que no corresponden al producto a producir'),
(6, 'orden y limpieza de área (plataforma, pisos, canaletas.)'),
(7, 'revisión de filtros en línea de proceso'),
(8, 'mantener tuberias en deshuso con tapa en sus accesos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `idArea` int(1) NOT NULL,
  `area` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`idArea`, `area`) VALUES
(1, 'area 1'),
(2, 'area 2'),
(3, 'area 3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorias`
--

CREATE TABLE `auditorias` (
  `idAuditoria` bigint(20) UNSIGNED NOT NULL,
  `nombreAuditoria` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `responsable` int(11) NOT NULL,
  `tipoAuditoria` varchar(50) NOT NULL,
  `resultadoAuditoria` varchar(50) NOT NULL,
  `accionesCorrectivas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(3) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `rfc` varchar(13) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `noExt` varchar(15) NOT NULL,
  `noInt` varchar(15) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `estado` int(2) NOT NULL,
  `codigoPostal` int(5) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correoElectronico` varchar(50) NOT NULL,
  `contactoPrincipal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `cliente`, `rfc`, `calle`, `noExt`, `noInt`, `colonia`, `ciudad`, `estado`, `codigoPostal`, `telefono`, `correoElectronico`, `contactoPrincipal`) VALUES
(1, 'BUENO ALIMENTOS', 'BAL780420IR6', 'CARRETERA A SALTILLO KM 3.5 BODEGA 4', '725', '0', 'IND. UNIDAD NACIONAL', 'SANTA CATARINA', 19, 66360, '0', 'bvaldez@mexicorp.com', '0'),
(2, 'CHALE COFFEE', 'CCO161104B31', 'CALLE 36 ENTRE 13 Y 15 NO. 65', '0', '0', 'CAMPESTRE', 'MERIDA', 31, 97120, '0', 'ventas@chalecoldbrew.com', '0'),
(3, 'CONAGRA FOODS MEXICO', 'CFM600506V82', 'BLVD. PASEO SOLIDARIDAD', '11251', '0', 'ESFUERZO OBRERO', 'IRAPUATO', 11, 36680, '0', 'manuel.zavala@conagrafoods.com', '0'),
(4, 'HERDEZ', 'HER8301121X4', 'CALZADA SAN BARTOLO NAUCALPAN', '360', '0', 'ARGENTINA PONIENTE', 'CIUDAD DE MEXICO', 9, 11230, '0', 'bcasasl@herdez.com', '0'),
(5, 'JUGOS Y BEBIDAS DEL VALLE DE MEXICO', 'JBV030724QG9', 'MARIO PANI', '750', 'PISO 3', 'SANTA FE CUAJIMALPA', 'CIUDAD DE MEXICO', 9, 5348, '0', 'pablo.picazo@calahua.com.mx', '0'),
(6, 'LACTEOS DULCEM', 'LDU101108QI7', '2DA CERRADA  2 DE ABRIL', '13', '0', 'CIUDAD ADOLFO LOPEZ MATEOS CENTRO', 'CIUDAD ADOLFO LOPEZ MATEOS', 15, 52900, '0', ' cmercado@lacteosdulcem.com.mx', '0'),
(7, 'NESTLE MEXICO', 'NME980506LPA', 'BLVD. MIGUEL DE CERVANTES SAAVEDRA', '301 TORRE SUR', 'PB', 'GRANADA', 'CIUDAD DE MEXICO', 9, 11520, '0', 'adriana.aranda@mx.nestle.com', '0'),
(8, 'PESCADERIA ROBLES', 'PRO110527LU1', 'BELIZARIO DOMINGUEZ NORTE', '502 B', '0', 'PRIMER CUADRO (CENTRO)', 'LOS MOCHIS', 25, 81200, '0', 'china-house@hotmail.com', '0'),
(9, 'TERRAFERTIL MEXICO', 'TME090515PC0', 'INDEPENDENCIA', '110 LOTE 4 Y 5', '0', 'LOS REYES', 'TULTITLAN DE MARIANO ESCOBEDO', 15, 54915, '0', 'cpulgar@terra-fertil.com', '0'),
(10, 'UNILEVER MANUFACTURERA', 'UMA011214255', 'AV TEPALCAPA', '2', '0', 'RANCHO SANTO DOMINGO', 'TULTITLAN DE MARIANO ESCOBEDO', 15, 54900, '0', 'susana.martinez@unilever.com', '0'),
(11, 'VIALAT', 'VIA070612NZA', 'GUILLERMO GONZALEZ CAMARENA', '1450', 'PISO 3 - OFICIN', 'SANTA FE CUAJIMALPA', 'CIUDAD DE MEXICO', 9, 5348, '0', 'eduardotello@sampling.com.mx', '0'),
(12, 'INDUSTRIAS ZUCO', 'IZU921014KT2', 'GERANIO', '324', '0', 'SANTA MAR A INSURGENTES', 'CIUDAD DE MEXICO', 9, 6430, '0', 'alfsotomayor@industriaszuco.com', '0'),
(13, 'CRUZ BLANCA', '', '', '', '', '', '', 34, 0, '', '', ''),
(14, 'DULCEM', '', '', '', '', '', '', 34, 0, '', '', ''),
(15, 'GREATER THAN 1L', '', '', '', '', '', '', 34, 0, '', '', ''),
(16, 'GREATER THAN 330ML', '', '', '', '', '', '', 34, 0, '', '', ''),
(17, 'HERDEZ, S.A. DE C.V EXP', '', '', '', '', '', '', 34, 0, '', '', ''),
(18, 'KUAMEX FOODS', '', '', '', '', '', '', 34, 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuraciones`
--

CREATE TABLE `configuraciones` (
  `idConfiguracion` bigint(20) UNSIGNED NOT NULL,
  `configuracion` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `valor` varchar(10) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `usuarioCreador` int(11) NOT NULL,
  `areaAsociada` int(11) NOT NULL,
  `tipoConfiguracion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `configuraciones`
--

INSERT INTO `configuraciones` (`idConfiguracion`, `configuracion`, `descripcion`, `valor`, `fechaCreacion`, `usuarioCreador`, `areaAsociada`, `tipoConfiguracion`) VALUES
(1, 'XPL71023', 'XPL DEL LLENADO DE LA TABLA CONFIGURACION PARA LA BASE DE DATOS', '13', '1989-02-16', 0, 0, 'LAQUESEA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controles`
--

CREATE TABLE `controles` (
  `idControl` int(11) NOT NULL,
  `control` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `tipoControl` varchar(50) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `responsable` int(11) NOT NULL,
  `idDocumento` int(11) NOT NULL,
  `valor` varchar(10) NOT NULL,
  `areaControl` int(11) NOT NULL,
  `maquina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `controles`
--

INSERT INTO `controles` (`idControl`, `control`, `descripcion`, `tipoControl`, `fechaCreacion`, `responsable`, `idDocumento`, `valor`, `areaControl`, `maquina`) VALUES
(0, 'control71023', 'XPL DE CREACION DE LA TABLA CONTROL', 'EL QUE SEA', '1989-02-16', 0, 24, '16.22', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `idDocumento` bigint(20) UNSIGNED NOT NULL,
  `documento` varchar(50) NOT NULL,
  `tipoDocumento` varchar(50) NOT NULL,
  `fechaCaptura` date NOT NULL,
  `usuarioCapturo` int(11) NOT NULL,
  `descripcionDocumento` text NOT NULL,
  `fechaCreacion` date NOT NULL,
  `ultimaModificacion` date NOT NULL,
  `estadoDocumento` varchar(30) NOT NULL,
  `linkDocumento` varchar(100) NOT NULL,
  `clienteAsociado` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  `versionDocumento` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`idDocumento`, `documento`, `tipoDocumento`, `fechaCaptura`, `usuarioCapturo`, `descripcionDocumento`, `fechaCreacion`, `ultimaModificacion`, `estadoDocumento`, `linkDocumento`, `clienteAsociado`, `observaciones`, `versionDocumento`) VALUES
(1, 'xplDoc', 'elQueSea', '1989-02-16', 0, 'Este es un ejemplo de la insercion de datos en la tabla documentos para el software aguida', '1989-02-16', '1989-02-16', 'Completo', 'www.com', 0, 'El presente documento se encuentra en buen estado', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `idEquipo` int(2) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `tipoEquipo` int(2) NOT NULL,
  `capacidad` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`idEquipo`, `equipo`, `tipoEquipo`, `capacidad`) VALUES
(1, 'TANQUE DE PREPARACIÓN', 1, '5000'),
(2, 'TANQUE HOLDING', 1, '5000'),
(3, 'TANQUE PREMIX', 1, '5000'),
(4, 'HOMOGENIZADOR ALEX', 2, '5000'),
(5, 'TANQUE DE PREMEZCLA', 1, '5000'),
(6, 'MARMITA', 3, '5000'),
(7, 'CIP', 99, '5000'),
(8, 'xpl1', 1, '200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(2) NOT NULL,
  `estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`idEstado`, `estado`) VALUES
(1, 'AGUASCALIENTES'),
(2, 'BAJA CALIFORNIA'),
(3, 'BAJA CALIFORNIA SUR'),
(4, 'CAMPECHE'),
(5, 'COAHUILA'),
(6, 'COLIMA'),
(7, 'CHIAPAS'),
(8, 'CHIHUAHUA'),
(9, 'CIUDAD DE MEXICO'),
(10, 'DURANGO'),
(11, 'GUANAJUATO'),
(12, 'GUERRERO'),
(13, 'HIDALGO'),
(14, 'JALISCO'),
(15, 'MEXICO'),
(16, 'MICHOACAN'),
(17, 'MORELOS'),
(18, 'NAYARIT'),
(19, 'NUEVO LEON'),
(20, 'OAXACA'),
(21, 'PUEBLA'),
(22, 'QUERETARO'),
(23, 'QUINTANA ROO'),
(24, 'SAN LUIS POTOSI'),
(25, 'SINALOA'),
(26, 'SONORA'),
(27, 'TABASCO'),
(28, 'TAMAULIPAS'),
(29, 'TLAXCALA'),
(30, 'VERACRUZ'),
(31, 'YUCATAN'),
(32, 'ZACATECAS'),
(34, 'SIN REGISTRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `idInventario` bigint(20) UNSIGNED NOT NULL,
  `idProducto` int(11) NOT NULL,
  `fechaIngreso` varchar(50) NOT NULL,
  `cantidadIngreso` float NOT NULL,
  `cantidadDisponible` date NOT NULL,
  `areaAlmacenamiento` int(11) NOT NULL,
  `responsable` int(11) NOT NULL,
  `lote` varchar(12) NOT NULL,
  `fechaCaducidad` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventarios`
--

INSERT INTO `inventarios` (`idInventario`, `idProducto`, `fechaIngreso`, `cantidadIngreso`, `cantidadDisponible`, `areaAlmacenamiento`, `responsable`, `lote`, `fechaCaducidad`) VALUES
(1, 23, '1989-02-16', 17, '0000-00-00', 0, 0, '584ds6', '1989-02-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liberacion_area`
--

CREATE TABLE `liberacion_area` (
  `codigoLiberacion` varchar(25) NOT NULL,
  `area` int(1) NOT NULL,
  `cliente` int(3) NOT NULL,
  `producto` int(3) NOT NULL,
  `usuario` int(6) DEFAULT NULL COMMENT 'Verificar la opción de implementarlo en el codigo de liberación de área concatenada.\r\n',
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `liberacion_area`
--

INSERT INTO `liberacion_area` (`codigoLiberacion`, `area`, `cliente`, `producto`, `usuario`, `fecha`, `hora`) VALUES
(' 14 13 20231123 1148', 0, 14, 13, NULL, '2023-11-23', '11:48:16'),
('-1-2-20231123-124948', 0, 1, 2, NULL, '2023-11-23', '12:49:48'),
('-1-2-20231123-125008', 0, 1, 2, NULL, '2023-11-23', '12:50:08'),
('-1-3-20231123-125030', 0, 1, 3, NULL, '2023-11-23', '12:50:30'),
('-14 13 20231123 1148', 0, 14, 13, NULL, '2023-11-23', '11:48:29'),
('-3-10-20231123-11422', 0, 3, 10, NULL, '2023-11-23', '11:42:27'),
('-3-6-20231123-113135', 0, 3, 6, NULL, '2023-11-23', '11:31:35'),
('-6-5-20231123-113153', 0, 6, 5, NULL, '2023-11-23', '11:31:53'),
('1-4-33-20231123-1252', 1, 4, 33, NULL, '2023-11-23', '12:52:00'),
('1-5-47-20231123-1427', 1, 5, 47, NULL, '2023-11-23', '14:27:44'),
('11920231123114544', 1, 1, 9, NULL, '2023-11-23', '11:45:44'),
('2-1-1-20231123-02252', 2, 1, 1, NULL, '2023-11-23', '02:25:20'),
('2-1-1-20231123-02261', 2, 1, 1, NULL, '2023-11-23', '02:26:11'),
('2-1-2-20231123-12474', 2, 1, 2, NULL, '2023-11-23', '12:47:43'),
('2-10-121-20231123-01', 2, 10, 121, NULL, '2023-11-23', '01:12:34'),
('2-2-5-20231123-01085', 2, 2, 5, NULL, '2023-11-23', '01:08:55'),
('2-2-5-20231123-12501', 2, 2, 5, NULL, '2023-11-23', '12:50:15'),
('2-2-5-20231123-12502', 2, 2, 5, NULL, '2023-11-23', '12:50:23'),
('2-2-5-20231123-143032', 2, 2, 5, NULL, '2023-11-23', '14:30:32'),
('2-3-6-20231123-12561', 2, 3, 6, NULL, '2023-11-23', '12:56:18'),
('2-4-34-20231123-1203', 2, 4, 34, NULL, '2023-11-23', '12:03:23'),
('2-5 48 20231123 1154', 2, 5, 48, NULL, '2023-11-23', '11:54:35'),
('2-8-56-20231123-142910', 2, 8, 56, NULL, '2023-11-23', '14:29:10'),
('2131120231123114554', 2, 13, 11, NULL, '2023-11-23', '11:45:54'),
('3-1 11 20231123 1148', 3, 1, 11, NULL, '2023-11-23', '11:48:58'),
('3-5-47-20231123-1250', 3, 5, 47, NULL, '2023-11-23', '12:50:49'),
('31020231123114328', 0, 3, 10, NULL, '2023-11-23', '11:43:28'),
('31020231123114421', 0, 3, 10, NULL, '2023-11-23', '11:44:21'),
('31020231123114424', 0, 3, 10, NULL, '2023-11-23', '11:44:24'),
('31020231123114433', 0, 3, 10, NULL, '2023-11-23', '11:44:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes`
--

CREATE TABLE `lotes` (
  `idLote` int(11) NOT NULL,
  `noBatch` varchar(20) NOT NULL,
  `tipoLote` int(2) NOT NULL,
  `producto` int(3) NOT NULL,
  `fechaGenerado` date NOT NULL,
  `horaGenerado` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquinas`
--

CREATE TABLE `maquinas` (
  `idMaquina` bigint(20) UNSIGNED NOT NULL,
  `nombreMaquina` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fechaAdquisicion` date NOT NULL,
  `estadoMaquina` varchar(30) NOT NULL,
  `areaAsociada` int(11) NOT NULL,
  `responsable` int(11) NOT NULL,
  `ultimoMantenimiento` date NOT NULL,
  `proximoMantenimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodo_liberacion_equipos`
--

CREATE TABLE `metodo_liberacion_equipos` (
  `codigoActividad` varchar(30) NOT NULL,
  `actividad` int(3) NOT NULL,
  `codigoLiberacion` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `usuRealizo` int(6) NOT NULL,
  `usuVerifico` int(6) NOT NULL,
  `usuReviso` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `metodo_liberacion_equipos`
--

INSERT INTO `metodo_liberacion_equipos` (`codigoActividad`, `actividad`, `codigoLiberacion`, `status`, `usuRealizo`, `usuVerifico`, `usuReviso`) VALUES
('0', 8, '-3-6-20231123-113135', 0, 32, 6, 2),
('1', 2, '-1-3-20231123-125030', 1, 30, 29, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(3) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `cliente` int(3) NOT NULL,
  `sku` varchar(15) NOT NULL,
  `codigoBarra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `producto`, `cliente`, `sku`, `codigoBarra`) VALUES
(1, 'MOLE ROGELIO BUENO TB 27/270 GR', 1, '100044', '0'),
(2, 'MOLE ROGELIO BUENO TB 12/540G EXP', 1, '100681', '0'),
(3, 'MOLE ROGELIO BUENO TB 12/540G N51', 1, '100683', '0'),
(4, 'MOLE ROGELIO BUENO TB 21/360G', 1, '101122', '0'),
(5, 'COLD BREW CONCENTRADO', 2, 'CHA-001', '0'),
(6, 'PURÉ DE TOMATE DEL MONTE CONDIM 1L', 3, '1377', '0'),
(7, 'PURÉ DE TOMATE DEL MONTE NATURAL 1L', 3, '1378', '0'),
(8, 'PURÉ DE TOMATE AURRERA 1000', 3, '38290', '0'),
(9, 'SALSA BLANCA TIPO ALFREDO 24/340 GR', 3, '38690', '0'),
(10, 'SALSA BLANCA TIPO ALFREDO 24/520 GR', 3, '38691', '0'),
(11, 'CRUZ BLANCA VINO BLANCO PRISMA 12/1 LT', 13, 'CB-001', '0'),
(12, 'CRUZ BLANCA VINO TINTO PRISMA 12/1 LT', 13, 'CB-002', '0'),
(13, 'JARABE DE TRES LECHES 12/1 L SLIM', 14, 'DUL-001', '0'),
(14, 'BEBIDA HIDRATANTE NARANJA MANGO 6/946 ML', 15, 'GT-001 E', '0'),
(15, 'BEBIDA HIDRATANTE TROPICAL 6/946 ML', 15, 'GT-002 E', '0'),
(16, 'BEBIDA HIDRATANTE DE MANDARINA DURAZNO 6/946 ML', 15, 'GT-003 E', '0'),
(17, 'BEBIDA HIDRATANTE DE LIMONADA DE FRESA 6/946 ML', 15, 'GT-004 E', '0'),
(18, 'BEBIDA HIDRATANTE DE SANDIA Y BAYAS 6/946 ML', 15, 'GT-005 E', '0'),
(19, 'BEBIDA HIDRATANTE DE UVA 6/946 ML', 15, 'GT-006 E', '0'),
(20, 'BEBIDA HIDRATANTE SPORT TEA 6/946 ML', 15, 'GT-007 E', '0'),
(21, 'BEBIDA HIDRATANTE CRANBERRY APPLE 6/946 ML', 15, 'GT-008 E', '0'),
(22, 'BEBIDA HIDRATANTE NARANJA MANGO 330 ML', 16, 'GT-001 P', '0'),
(23, 'BEBIDA HIDRATANTE TROPICAL 330 ML', 16, 'GT-002 P', '0'),
(24, 'BEBIDA HIDRATANTE DE MANDARINA DURAZNO 330 ML', 16, 'GT-003 P', '0'),
(25, 'BEBIDA HIDRATANTE DE LIMONADA DE FRESA 330 ML', 16, 'GT-004 P', '0'),
(26, 'BEBIDA HIDRATANTE DE SANDIA Y BAYAS 330 ML', 16, 'GT-005 P', '0'),
(27, 'BEBIDA HIDRATANTE DE UVA 330 ML', 16, 'GT-006 P', '0'),
(28, 'BEBIDA HIDRATANTE SPORT TEA 330 ML', 16, 'GT-007 P', '0'),
(29, 'BEBIDA HIDRATANTE CRANBERRY APPLE 330 ML', 16, 'GT-008 P', '0'),
(30, '8V ORIGINAL 24/330ML', 4, '105378', '0'),
(31, '8V PICANTE 24/330ML', 4, '105379', '0'),
(32, '8V ORIGINAL 12/330ML', 4, '125230', '0'),
(33, '8V ORIGINAL 24/330ML CONVENIENCIA', 4, '135828', '0'),
(34, 'SALS DM 18TB0260GR TINGA', 4, '145698', '0'),
(35, 'SALS DM 18TB0260GR PIBIL', 4, '145699', '0'),
(36, 'SALS DM 21TB0350GR PASTOR', 4, '005222', '0'),
(37, 'SALS DM 21TB0350GR PIBIL', 4, '005489', '0'),
(38, 'SALS DM 21TB0350GR TINGA', 4, '005490', '0'),
(39, 'MOLE DM 18TB0270GR ROJO L/SERV', 4, '145629', '0'),
(40, 'SALS DM 18TB0260GR PASTOR', 4, 'PENDIENTE', '0'),
(41, 'MOLE DM 21TB360GR ROJO EXP', 17, '01504X', '0'),
(42, 'MOLE DM 18TB0540GR ROJO L/SERV USA', 17, '49501X', '0'),
(43, 'MOLE DM 18TB0270GR ROJO L/SERV USA', 17, '49504X', '0'),
(44, 'CREMA COCO ACAPULCOCO BRIK 6/1L PRISMA', 5, 'PT01-0201', '0'),
(45, 'CREMA COCO ACAPULCOCO BRIK 12/1L PRISMA', 5, 'PT01-0203', '0'),
(46, 'PINA COLADA CALAHUA BRIK 12/1000 ML PRISMA', 5, 'PT02-0102', '0'),
(47, 'LECHE CALAHUA CULINARY PRISMA 12/330 ML ', 5, 'PT04-0201', '0'),
(48, 'LECHE CALAHUA BEBIBLE 6/1000 ML PRISMA', 5, 'PT04-0203', '0'),
(49, 'LECHE CALAHUA ORGANICA 6/1000 ML PRISMA', 5, 'PT04-0204', '0'),
(50, 'LECHE CALAHUA BEBIBLE ALMENDRA PRISMA 6/1000 ML ', 5, 'PT04-0205', '0'),
(51, 'LECHE CALAHUA BEBIBLE VAINILLA PRISMA 6/1000 ML ', 5, 'PT04-0206', '0'),
(52, 'CALDO DE MARISCOS 12/1L', 18, 'KCC-001', '0'),
(53, 'COFFEE-MATE CARAMELO 12X530G MX', 7, '12400700', '0'),
(54, 'COFFEE-MATE CANELA 12X530G MX', 7, '12400701', '0'),
(55, 'COFFEE-MATE CHOC ABUELITA 12x530g MX', 7, '12535710', '0'),
(56, 'JUGO DE TOMATE Y ALMEJA', 8, 'PER-001', '0'),
(57, 'HEB - ALMENDRAS CON AZÚCAR 6/946 ML', 9, '41220759170', '0'),
(58, 'HEB - ALMENDRAS SIN AZÚCAR 6/946ML', 9, '41220759194', '0'),
(59, 'HEB - Almendra Vainilla C/AZ 946ml', 9, '41220765966', '0'),
(60, 'HEB - Almendra Vainilla S/AZ 946ml', 9, '41220765997', '0'),
(61, 'HEB - ALMENDRAS CON AZÚCAR 12/946 ML', 9, '41220600120', '0'),
(62, 'HEB - ALMENDRAS SIN AZÚCAR 12/946ML', 9, '41220600625', '0'),
(63, 'MEMBERS MARK ALMENDRA SIN AZUCAR 6 X 946 ML', 9, '7500533004153-N', '0'),
(64, 'SELECTO- ALMOND DRINK S/AZUCAR 1 LT', 9, '7501253678631-N', '0'),
(65, 'SELECTO- COCONUT DRINK UNSWEWETENED 1 LT', 9, '7501253678648-N', '0'),
(66, 'CASA LEY - ALMENDRA SIN AZUCAR 1L', 9, '7501630210997-N', '0'),
(67, 'CASA LEY - ALMENDRA VAINILLA SIN AZUCAR 1LT', 9, '7501630211000-N', '0'),
(68, 'CASA LEY - COCO SIN AZUCAR 1LT', 9, '7501630211024-N', '0'),
(69, 'BEBIDA ALMENDRA GV 12/1000 SLIM', 9, '7501791614177-N', '0'),
(70, 'NH - ALMENDRAS C/AZÚCAR 12/946 ML CAM', 9, '7502252480669-C', '0'),
(71, 'NH - ALMENDRAS C/AZÚCAR 12/946 ML', 9, '7502252480669-N', '0'),
(72, 'NH - ALMENDRAS C/AZÚCAR 12/946 ML REP DOM', 9, '7502252480669-R', '0'),
(73, 'NH - ARROZ 12/946 ml CAM', 9, '7502252480676-C', '0'),
(74, 'NH -ARROZ 12/946 ml', 9, '7502252480676-N', '0'),
(75, 'NH - SOYA 12/946 ml', 9, '7502252480683-N', '0'),
(76, 'NH - ALMENDRADA SIN AZÚCAR 12/946 ML CAM', 9, '7502252480928-C', '0'),
(77, 'NH - ALMENDRADA SIN AZÚCAR 12/946 ML', 9, '7502252480928-N', '0'),
(78, 'NH - ALMENDRADA SIN AZÚCAR 12/946 ML REP DOM', 9, '7502252480928-R', '0'),
(79, 'NH - COCO C/AZÚCAR 12/946 ML CAM', 9, '7502252481253-C', '0'),
(80, 'NH - COCO C/AZÚCAR 12/946 ML', 9, '7502252481253-N', '0'),
(81, 'NH - COCO C/AZÚCAR 12/946 ML REP DOM', 9, '7502252481253-R', '0'),
(82, 'NH - COCO CON ALMENDRAS 12/946 ml CAM', 9, '7502252481789-C', '0'),
(83, 'NH - COCO CON ALMENDRAS 12/946 ml', 9, '7502252481789-N', '0'),
(84, 'NH - COCO CON ALMENDRAS 12/946 ml REP DOM', 9, '7502252481789-R', '0'),
(85, 'NH - ALMENDRA VAINILLA 12/946 ML CAM', 9, '7502252481796-C', '0'),
(86, 'NH - ALMENDRA VAINILLA 12/946 ML', 9, '7502252481796-N', '0'),
(87, 'NH - ALMENDRA VAINILLA 12/946 ML REP DOM', 9, '7502252481796-R', '0'),
(88, 'NH - COCO SIN AZÚCAR 12/946 ML CAM', 9, '7502252482694-C', '0'),
(89, 'NH - COCO SIN AZÚCAR 12/946 ML', 9, '7502252482694-N', '0'),
(90, 'NH - COCO CON AZÚCAR 12/500 ML', 9, '7502252483332-N', '0'),
(91, 'COCONUT CREAMER 12/500 ML', 9, '7502252483929-N', '0'),
(92, 'ALMOND CREAMER 12/500 ML CAM', 9, '7502252483936-C', '0'),
(93, 'ALMOND CREAMER 12/500 ML', 9, '7502252483936-N', '0'),
(94, 'ALMOND VAINILLA CREAMER 12/500 ML CAM', 9, '7502252483943-C', '0'),
(95, 'ALMOND VAINILLA CREAMER 12/500 ML', 9, '7502252483943-N', '0'),
(96, 'NH ALMENDRA-CAFÉ 12/330 ML CAM', 9, '7502252484247-C', '0'),
(97, 'NH ALMENDRA-CAFÉ 12/330 ML', 9, '7502252484247-N', '0'),
(98, 'NH - AVENA-LINAZA 12/946 ML CAM', 9, '7502252484285-C', '0'),
(99, 'NH - AVENA-LINAZA 12/946 ML', 9, '7502252484285-N', '0'),
(100, 'NH - CASHEW 12/946 ML', 9, '7502252484292-N', '0'),
(101, 'NH - AVENA-LINAZA  6/946 ML', 9, '7502252484520-N', '0'),
(102, 'NH - COCO / VANILLA 12/946 ML', 9, '7502252485596-N', '0'),
(103, 'NH - GOLDEN LATTE 946 ML', 9, '7502252485626-N', '0'),
(104, 'NH - COCO -MATCHA 12/946', 9, '7502252485633-N', '0'),
(105, 'NH - CACAO LATTE 946 ML 32 OZ', 9, '7502252485640-N', '0'),
(106, 'NH - COCO / VANILLA 6/946 ML', 9, '7502252486012-N', '0'),
(107, 'NH - ALMENDRA-CAFÉ 12/946 ML CAM', 9, '7502252486029-C', '0'),
(108, 'NH - TOFFE NUT 330ML', 9, '7502252486142-N', '0'),
(109, 'NH - KETO 12/946ml', 9, '7502252486319-N', '0'),
(110, 'NH - KETO 6/946ml', 9, '7502252486326-N', '0'),
(111, 'NH - CHOCOLATE - AVELLANA CREAMER 12/330', 9, '7502252486630-N', '0'),
(112, 'NH - ORIGEN BEBIDA VEGETAL 12/946ML', 9, '7502252486647-N', '0'),
(113, 'NH - AVENA VAINILLA 12/946 ML', 9, '7502252487064-N', '0'),
(114, 'AVENA VAINILLA CREAMER 12/500ML', 9, '7502252487071-N', '0'),
(115, 'NH - AVENA-LINAZA  12/330 ML', 9, '7502252487095-C', '0'),
(116, 'NH - ALMENDRA VAINILLA 6/946 ML', 9, '7502252487187-N', '0'),
(117, 'NH -ARROZ 6/946 ml', 9, '7502252487507-N', '0'),
(118, 'NH - CREMADOR PUMPINK 330 ML', 9, '7502252487552-N', '0'),
(119, 'NH - AVENA 12/946 ML', 9, '7502252487569-N', '0'),
(120, 'BEBIDA DE SOYA GV 12/946 ML', 9, '7506495006952-N', '0'),
(121, 'CALDO DE POLLO 12/1000 ML NOM', 10, '69688939', '0'),
(122, 'KNORR CR ELOTE 24X500ML NOM', 10, '69701378', '0'),
(123, 'KNORR CR CHAMPINON 24X500ML NOM', 10, '69701379', '0'),
(124, 'KNORR CR CHILE POBLANO 24x500ml NOM', 10, '69701380', '0'),
(125, 'KNORR CALDILLO TB 24X500ML NOM', 10, '69701381', '0'),
(126, 'HELLMANNS QUESO EXP JUNIO 2021', 10, '68608879', '0'),
(127, 'HELLMANNS QUESO NAL', 10, '68697192', '0'),
(128, 'HELLMANNS ADERERESO QUESO COLOMBIA', 10, '68825281', '0'),
(129, 'KNORR CALDILLO TB 27X250ML NOM', 10, '69688935', '0'),
(130, 'CALDO DE POLLO 18/500 ML NOM', 10, '69688940', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `idReporte` bigint(20) UNSIGNED NOT NULL,
  `reporte` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `fechaGeneracion` date NOT NULL,
  `usuarioGenerador` int(11) NOT NULL,
  `tipoReporte` varchar(15) NOT NULL,
  `clienteAsociado` int(11) NOT NULL,
  `estadoReporte` varchar(30) NOT NULL,
  `enlaceReporte` varchar(100) NOT NULL,
  `versionReporte` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`idReporte`, `reporte`, `descripcion`, `fechaGeneracion`, `usuarioGenerador`, `tipoReporte`, `clienteAsociado`, `estadoReporte`, `enlaceReporte`, `versionReporte`) VALUES
(1, 'XPL71023', 'ESTE ES UN EJEMPLO DE ALTA DE REPORTE PARA VERIFICAR LA CONCEXION CON LA BASE DE DATOS.', '1989-02-16', 0, 'NA', 0, 'COMPLETO', 'HTTPS://MIREPORTEXPL.INTERNO', '0008-02-03 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(2) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `permisos` varchar(50) NOT NULL,
  `fechaCreacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `rol`, `permisos`, `fechaCreacion`) VALUES
(1, 'Temporal', 'Para Pruebas', '2023-10-18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `idStatus` int(2) NOT NULL,
  `status` varchar(30) NOT NULL,
  `color` enum('verde','rojo','amarillo','azul') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`idStatus`, `status`, `color`) VALUES
(1, 'Activo', 'verde'),
(2, 'Inactivo', 'rojo'),
(3, 'Pendiente', 'amarillo'),
(31, '1', 'verde'),
(32, '1', 'verde'),
(33, '0', 'verde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposlote`
--

CREATE TABLE `tiposlote` (
  `idTipoLote` int(2) NOT NULL,
  `tipoLote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_equipo`
--

CREATE TABLE `tipos_equipo` (
  `idTipoEquipo` int(2) NOT NULL,
  `tipoEquipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos_equipo`
--

INSERT INTO `tipos_equipo` (`idTipoEquipo`, `tipoEquipo`) VALUES
(1, 'TANQUE'),
(2, 'HOMOGENIZADOR'),
(3, 'RECIPIENTE'),
(4, 'OLLA'),
(99, 'OTRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `idTurno` bigint(20) UNSIGNED NOT NULL,
  `turno` varchar(8) NOT NULL,
  `descripcion` text NOT NULL,
  `horaInicial` time NOT NULL,
  `horaFinal` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`idTurno`, `turno`, `descripcion`, `horaInicial`, `horaFinal`) VALUES
(1, 'PRB61023', 'Esta es la primer pruba realizada con codigo automatizado a partir del proporcionado del form y con roles proporcionada por cgpt', '46:00:00', '00:00:00'),
(2, 'PRB61023', 'Esta es la primer pruba realizada con codigo automatizado a partir del proporcionado del form y con roles proporcionada por cgpt', '46:00:00', '00:00:00'),
(3, 'PRB61023', 'Esta es la primer pruba realizada con codigo automatizado a partir del proporcionado del form y con roles proporcionada por cgpt', '46:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(6) NOT NULL,
  `codEmpleado` int(6) NOT NULL,
  `nombreUsuario` varchar(40) NOT NULL,
  `apePat` varchar(20) NOT NULL,
  `apeMat` varchar(20) NOT NULL,
  `eMail` varchar(35) NOT NULL,
  `contrasena` varchar(15) NOT NULL,
  `rol` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  `fechaRegistro` date NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `estado` int(2) NOT NULL,
  `codigoPostal` int(5) NOT NULL,
  `telefono` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `codEmpleado`, `nombreUsuario`, `apePat`, `apeMat`, `eMail`, `contrasena`, `rol`, `status`, `fechaRegistro`, `direccion`, `municipio`, `estado`, `codigoPostal`, `telefono`) VALUES
(1, 1002, 'SALVADOR', 'AGUILAR', 'BECERRA', 'aguilarbecerrasalvador@gmail.c', '123abc', 1, 1, '0000-00-00', 'GENERAL ANAYA No. 253 - INTERNADO', 'SAN LUIS DE LA PAZ', 11, 37911, '4686883661'),
(2, 2034, 'JOSE', 'PRADO', 'HERNANDEZ', 'vane_duelo@outlook.com', '123abc', 1, 1, '0000-00-00', 'ANDALUCIA No. 44 - COVADONGA', 'SAN LUIS DE LA PAZ', 11, 37911, '4681856003'),
(3, 5001, 'HUGO FELIPE', 'PACHECO', 'SANCHEZ', 'hugofelipepacheco@gmail.com', '123abc', 1, 1, '0000-00-00', 'HERMANOS ALDAMA No.203 - FRACC. SAN ISIDRITO', 'SAN LUIS DE LA PAZ', 11, 37900, '4686861815'),
(4, 5006, 'PAULO SERGIO', 'BARBOSA', 'RIOS', 's_paulo_s@hotmail.com', '123abc', 1, 1, '0000-00-00', 'AMARANTO No. 314 - LA ESPIGA', 'SAN LUIS DE LA PAZ', 11, 37900, '4686882709'),
(5, 5027, 'CARLOS', 'JUAREZ', 'ARANDA', 'carlupabrno@gmail.com', '123abc', 1, 1, '0000-00-00', 'GRANADA No. 15 - COVADONGA', 'SAN LUIS DE LA PAZ', 11, 37911, '4681067881'),
(6, 5034, 'JOSE ALBERTO', 'GRANADOS', 'SOSA', 'jagranados@aguida.com', '123abc', 1, 1, '0000-00-00', 'VELASCO No. 302 - LA BANDA DE ARRIBA', 'SAN LUIS DE LA PAZ', 11, 37911, '4686881441'),
(7, 5037, 'ROBERTO', 'GONZALEZ', '', '', '123abc', 1, 1, '0000-00-00', '2DA. PRIV. DE NOCHE TRISTE No. 104 - LA BANDA DE ABAJO', 'SAN LUIS DE LA PAZ', 11, 37911, '4681030885'),
(8, 5044, 'ROMAN GUADALUPE', 'GUTIERREZ', 'VEGA', 'rggutierrez@gmail.com', '123abc', 1, 1, '0000-00-00', 'TURQUESA No. 129 - FRACC. LA JOYA', 'SAN LUIS DE LA PAZ', 11, 37900, '4686887989'),
(9, 4035, 'JUAN JOSE', 'MATEHUALA', 'COVARRUBIA', 'juan_josemc@live.com', '123abc', 1, 1, '0000-00-00', 'AV. JUAREZ S/N - ESTACION DE LOURDES', 'SAN LUIS DE LA PAZ', 11, 37911, '4681076345'),
(10, 5222, 'JOSE PATRICIO', 'SOLIS', 'GARCIA', 'josepatriciosolisgarcia8@gmail', '123abc', 1, 1, '0000-00-00', 'REAL No. 3 - SAN ANTONIO DE LOURDES', 'SAN LUIS DE LA PAZ', 11, 37911, '4681092842'),
(11, 5428, 'JOSE VIDAL', 'SOLIS', 'GARCIA', '', '123abc', 1, 1, '0000-00-00', 'CALLE REAL No.3 - COM. SAN ANTONIO DE LOURDES', 'SAN LUIS DE LA PAZ', 11, 37911, '4681857049'),
(12, 5436, 'ALVARO', 'ZU IGA', 'NAVARRO', 'navarroalvaro554@gmail.com', '123abc', 1, 1, '0000-00-00', 'ITURBIDE No. 111 - ESTACION DE LOURDES', 'SAN LUIS DE LA PAZ', 11, 37900, '4681323655'),
(13, 5509, 'JORGE LUIS', 'HERNANDEZ', 'MORALES', 'hernandez_coy@hotmail.com', '123abc', 1, 1, '0000-00-00', 'SIMON BOLIVAR No.21-  RANCHO CATALAN DEL REFUGIO', 'SAN DIEGO DE LA UNION', 11, 37859, '4681073796'),
(14, 4103, 'JOSUE DAVID', 'RODRIGUEZ', 'IBARRA', 'josue.nael28@gmail.com', '123abc', 1, 1, '0000-00-00', 'FRANCISCO I MADERO No.105, INT.1, ESTACION DE LOURDES', 'SAN LUIS DE LA PAZ', 11, 37900, '4681377050'),
(15, 5781, 'JUAN DIEGO', 'TORRES', 'MARTINEZ', '418diegocz@gmail.com', '123abc', 1, 1, '0000-00-00', 'REAL No.1, COMUNIDAD DE PALMA GORDA', 'SAN LUIS DE LA PAZ', 11, 37900, '4681652092'),
(16, 5795, 'TANIA JOSEFINA', 'GUERRERO', 'PEREZ', 'taniaj13_@hotmail.com', '123abc', 1, 1, '0000-00-00', 'GUADALUPE VICTORIA No.18, COL. PADRE HIDALGO', 'DOLORES HIDALGO', 11, 37807, '4181044691'),
(17, 5799, 'MAYRA ZOILA', 'TORRES', 'BRIONES', 'mayratorresbriones@gmail.com', '123abc', 1, 1, '0000-00-00', 'JUAN ESCUTIA No.201, COL. MONTA ITA', 'SAN LUIS DE LA PAZ', 11, 37900, '4681391503'),
(18, 5805, 'VICTOR HUGO', 'ARANDA', 'VILLEGAS', '', '123abc', 1, 1, '0000-00-00', 'C. SAUCES No. 10, COM. PALMA PRIETA', 'DOLORES HIDALGO', 11, 37815, '4681023186'),
(19, 5819, 'JOSE VICENTE', 'TOSTADO', 'ORTEGA', 'josetostado65@hotmail.com', '123abc', 1, 1, '0000-00-00', 'HIDALGO No. 8, COM. LA QUEMADA', 'SAN FELIPE', 11, 37000, '7295576247'),
(20, 5822, 'GERARDO CRUZ', 'TORRES', 'MARTINEZ', 'pepebw12@gmail.com', '123abc', 1, 1, '0000-00-00', 'C. REAL No. 1, COM. PALMA GORDA', 'SAN DIEGO DE LA UNION', 11, 37900, '4681136171'),
(21, 5834, 'DANIELA', 'ARROYO', 'ARELLANO', 'danaare_14@hotmail.com', '123abc', 1, 1, '0000-00-00', 'C. ITURBIDE No. 120, COL. LA CENTRAL', 'SAN LUIS DE LA PAZ', 11, 36050, '4686891194'),
(22, 5878, 'HORTENCIA BERENICE', 'GONZALEZ', 'SANCHEZ', 'horte1802gonzalez@gmail.com', '123abc', 1, 1, '0000-00-00', 'AV. INSURGENTES NO. 3, COM. ESTACION DE LOURDES', 'SAN LUIS DE LA PAZ', 11, 37875, '4181340969'),
(23, 5883, 'MARIA MONSERRATH', 'SALINAS', 'GONZALEZ', 'pvamp789@gmail.com', '123abc', 1, 1, '0000-00-00', 'SAN LUIS REY No. 107, COL. LA PANORAMICA', 'SAN LUIS DE LA PAZ', 11, 37900, '4681557540'),
(24, 5887, 'JESUS HUMBERTO', 'GARCIA', 'CRUZ', '28beto92.garcia@gmail.com', '123abc', 1, 1, '0000-00-00', 'PRIV FRANCISCO I MADERO NO 3, COM LA ESCONDIDITA', 'SAN LUIS DE LA PAZ', 11, 8400, '4681399501'),
(25, 5893, 'LUIS ALBERTO', 'ESCAMILLA', 'ALVAREZ', '', '123abc', 1, 1, '0000-00-00', 'C LAS PALMAS NO. 12, COM EL LLANO DE ARRIBA', 'DOLORES HIDALGO', 11, 52776, '5617026100'),
(26, 5913, 'JOSE MANUEL', 'MARTINEZ', 'RINCON', '', '123abc', 1, 1, '0000-00-00', 'PRIV. NORTE NO. 94, COM EL GARABATILLO', 'DOLORES HIDALGO', 11, 37800, '4686800109'),
(27, 5914, 'YESSICA ROSARIO', 'JARAMILLO', 'SANDOVAL', 'jessica2004jaramillo@icloud.co', '123abc', 1, 1, '0000-00-00', 'SIMON BOLIVAR NO.30, COM CATALAN DEL REFUGIO', 'SAN DIEGO DE LA UNION', 11, 37850, '4181838253'),
(28, 5916, 'MARIA MARGARITA', 'CARDENAS', 'CALDERON', 'are04mz@gmail.com', '123abc', 1, 1, '0000-00-00', 'C. ORIENTE NO. 2, COM. LA SABANA', 'DOLORES HIDALGO', 11, 37917, '4181687741'),
(29, 5375, 'HECTOR MIGUEL', 'SOTO', 'MENDEZ', 'gector41@gmail.com', '123abc', 1, 1, '0000-00-00', 'SAUCES No.3, PALMA PRIETA', 'DOLORES HIDALGO', 11, 37815, '4681856877'),
(30, 5604, 'ALEJANDRA', 'SALAZAR', 'MARTINEZ', 'ale_mandy@live.com.mx', '123abc', 1, 1, '0000-00-00', 'CENTRAL No.21, COM. SAN ISIDRO', 'SAN LUIS DE LA PAZ', 11, 37900, '4681093744'),
(31, 4100, 'LUZ MARIA DEL ROCIO', 'GONZALEZ', 'TORRES', '', '123abc', 1, 1, '0000-00-00', 'ALLENDE No.103, ESTACION DE LOURDES', 'SAN LUIS DE LA PAZ', 11, 37900, '4686827718'),
(32, 4079, 'FELIPE DE JESUS', 'ROSAS', 'GONZALEZ', '', '123abc', 1, 1, '0000-00-00', 'PROGRESO No.112, ESTACION DE LOURDES', 'SAN LUIS DE LA PAZ', 11, 37900, '4681857059');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificacion_equipos`
--

CREATE TABLE `verificacion_equipos` (
  `codigoVerificacion` varchar(20) NOT NULL,
  `verificacion` varchar(100) NOT NULL,
  `codigoLiberacion` varchar(20) NOT NULL,
  `equipo` int(2) NOT NULL,
  `valor` tinyint(1) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades_generales`
--
ALTER TABLE `actividades_generales`
  ADD PRIMARY KEY (`idActividadGeneral`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`idArea`);

--
-- Indices de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD UNIQUE KEY `idAuditoria` (`idAuditoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  ADD UNIQUE KEY `idConfiguracion` (`idConfiguracion`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD UNIQUE KEY `idDocumento` (`idDocumento`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`idEquipo`),
  ADD KEY `tipoEquipo` (`tipoEquipo`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD UNIQUE KEY `idInventario` (`idInventario`);

--
-- Indices de la tabla `liberacion_area`
--
ALTER TABLE `liberacion_area`
  ADD PRIMARY KEY (`codigoLiberacion`),
  ADD KEY `producto` (`producto`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`idLote`),
  ADD KEY `producto` (`producto`),
  ADD KEY `tipoLote` (`tipoLote`);

--
-- Indices de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  ADD UNIQUE KEY `idMaquina` (`idMaquina`);

--
-- Indices de la tabla `metodo_liberacion_equipos`
--
ALTER TABLE `metodo_liberacion_equipos`
  ADD PRIMARY KEY (`codigoActividad`),
  ADD KEY `codigoLiberacion` (`codigoLiberacion`),
  ADD KEY `actividad` (`actividad`),
  ADD KEY `usuRealizo` (`usuRealizo`),
  ADD KEY `usuVerifico` (`usuVerifico`),
  ADD KEY `usuReviso` (`usuReviso`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD UNIQUE KEY `idReporte` (`idReporte`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indices de la tabla `tiposlote`
--
ALTER TABLE `tiposlote`
  ADD PRIMARY KEY (`idTipoLote`);

--
-- Indices de la tabla `tipos_equipo`
--
ALTER TABLE `tipos_equipo`
  ADD PRIMARY KEY (`idTipoEquipo`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD UNIQUE KEY `idTurno` (`idTurno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`) USING BTREE,
  ADD KEY `estado` (`estado`),
  ADD KEY `status` (`status`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `verificacion_equipos`
--
ALTER TABLE `verificacion_equipos`
  ADD KEY `codigoActividad` (`codigoVerificacion`),
  ADD KEY `codigoLiberacion` (`codigoLiberacion`),
  ADD KEY `equipo` (`equipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades_generales`
--
ALTER TABLE `actividades_generales`
  MODIFY `idActividadGeneral` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  MODIFY `idAuditoria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `configuraciones`
--
ALTER TABLE `configuraciones`
  MODIFY `idConfiguracion` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `idDocumento` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `idEquipo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `idEstado` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `idInventario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lotes`
--
ALTER TABLE `lotes`
  MODIFY `idLote` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `idMaquina` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `idReporte` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `idStatus` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tiposlote`
--
ALTER TABLE `tiposlote`
  MODIFY `idTipoLote` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `idTurno` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estados` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`tipoEquipo`) REFERENCES `tipos_equipo` (`idTipoEquipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `liberacion_area`
--
ALTER TABLE `liberacion_area`
  ADD CONSTRAINT `liberacion_area_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `liberacion_area_ibfk_2` FOREIGN KEY (`producto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `liberacion_area_ibfk_3` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `metodo_liberacion_equipos`
--
ALTER TABLE `metodo_liberacion_equipos`
  ADD CONSTRAINT `metodo_liberacion_equipos_ibfk_1` FOREIGN KEY (`codigoLiberacion`) REFERENCES `liberacion_area` (`codigoLiberacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `metodo_liberacion_equipos_ibfk_2` FOREIGN KEY (`usuRealizo`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `metodo_liberacion_equipos_ibfk_3` FOREIGN KEY (`usuVerifico`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `metodo_liberacion_equipos_ibfk_4` FOREIGN KEY (`usuReviso`) REFERENCES `usuarios` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `metodo_liberacion_equipos_ibfk_5` FOREIGN KEY (`actividad`) REFERENCES `actividades_generales` (`idActividadGeneral`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `estados` (`idEstado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `roles` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`status`) REFERENCES `status` (`idStatus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `verificacion_equipos`
--
ALTER TABLE `verificacion_equipos`
  ADD CONSTRAINT `verificacion_equipos_ibfk_1` FOREIGN KEY (`codigoLiberacion`) REFERENCES `liberacion_area` (`codigoLiberacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `verificacion_equipos_ibfk_2` FOREIGN KEY (`equipo`) REFERENCES `equipos` (`idEquipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
