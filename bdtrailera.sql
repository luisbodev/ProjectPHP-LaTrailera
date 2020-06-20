-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2020 a las 01:03:23
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtrailera`
--
CREATE DATABASE IF NOT EXISTS `bdtrailera` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bdtrailera`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numContacto` int(20) NOT NULL,
  `correo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuarioCli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apellido`, `direccion`, `nit`, `numContacto`, `correo`, `idUsuarioCli`) VALUES
(1, 'Melissa Nataren', 'Bonilla Tejada', 'Soyapango, San Salvador', '2587-859654-859-9', 25413658, 'Nataren.Bonilla@gmail.com', 1),
(2, 'Iris Kassandra', 'Carpio Juárez', 'San Marcos, San Salvador', '2534-985140-250-0', 12413584, 'iris.carpio@gmail.com', 2),
(3, 'Ismael Alberto', 'Castillo Martínez', 'C. Obrera, La Libertad', '2563-963214-589-9', 55699952, 'ismael.castillo@outlook.c', 3),
(4, 'Luis Manuel', 'Bonilla Anaya', 'Lourdes Colón, La Libertad', '2541-859651-025-2', 10253025, 'luis.manuel@gmail.com', 4),
(5, 'Milena Del Carmen', 'Campos Juárez', 'Santa Tecla, La Libertad', '1236-025152-859-8', 25638547, 'milena.carmen@gmail.com', 5),
(6, 'Mario Alberto', 'Cardosa Cañas', 'Ciudad Delgado, San Salvador', '2563-021025-589-9', 25631001, 'mario.alberto@hotmail.com', 7),
(7, 'Kenia Benitez', 'Cabezas de Chávez', 'Lourdes Colón, La Libertad', '2541-856941-541-5', 10023568, 'kenia.cabezas@yahoo.com', 8),
(8, 'Maira Natalia', 'Mercado Cañas', 'Colonia Las Londas, Ciudad Delgado', '2541-963512-548-8', 40129542, 'maira.natalia@gmail.com', 9),
(9, 'Sarai Alejandra', 'Martínez Quijada', 'Santa Tecla, La Libertad', '2533-965823-540-0', 14023502, 'sarai.martinez@gmail.com', 10),
(10, 'Selena Maritza', 'Campos Cañas', 'Santa Tecla, La Libertad', '1452-854724-510-5', 10235544, 'selena.canas@gmail.com', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleenvio`
--

CREATE TABLE `detalleenvio` (
  `idDetalleEnvio` int(11) NOT NULL,
  `idRuta` int(11) NOT NULL,
  `idEnvio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `detalleenvio`
--

INSERT INTO `detalleenvio` (`idDetalleEnvio`, `idRuta`, `idEnvio`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 9),
(10, 10, 10),
(11, 11, 1),
(12, 12, 2),
(13, 13, 3),
(14, 14, 4),
(15, 15, 5),
(16, 16, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuarioEmp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombre`, `apellido`, `sexo`, `direccion`, `cargo`, `dui`, `nit`, `idUsuarioEmp`) VALUES
(1, 'Administrador', 'Administrador', 'Femenino', 'La Trailera SA de SV', 'Administrador', '00000000-0', '0000-000000-000-0', 1),
(2, 'Empleado', 'Empleado', 'Femenino', 'La Trailera SA de SV', 'Empleado', '55555555-5', '5555-555555-555-5', 2),
(3, 'Daniel Edgardo', 'Castaneda Estrada', 'Masculino', 'Colonia Los Andes, San Marcos San Salvador', 'Empleado', '25631458-9', '2563-985694-859-9', 3),
(4, 'Monica Margarita', 'Coreas de Jesus', 'Femenino', 'Santa Tecla, La Libertad', 'Empleado', '24525631-9', '1455-965478-985-1', 4),
(5, 'Josue Daniel', 'Campos Estrada', 'Masculino', 'Santa Tecla, La Libertad', 'Empleado', '25631485-9', '4785-854215-965-8', 5),
(6, 'Estephanie Ivette', 'Cañas Martínez', 'Femenino', 'Colonia Las Londas, Lourdes Colón', 'Administrador', '25631549-9', '5896-854785-859-9', 6),
(7, 'Damaris Melissa', 'Carpio Bonilla', 'Femenino', 'San Salvador, San Salvador', 'Empleado', '25632564-9', '2563-854125-859-9', 7),
(8, 'Marcos Antonio', 'Leiva Castillo', 'Masculino', 'Apopa, San salvador', 'Empleado', '25636585-9', '5896-985475-895-9', 8),
(10, 'Fátima Camila', 'Carpio Castellanos', 'Femenino', 'El Paisnal, San Salvador', 'Empleado', '25635896-9', '2563-874359-914-9', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `idEnvio` int(11) NOT NULL,
  `fechaRealizacion` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `envio`
--

INSERT INTO `envio` (`idEnvio`, `fechaRealizacion`, `fechaEntrega`, `idCliente`, `idEmpleado`) VALUES
(1, '2020-06-11', '2020-06-30', 2, 1),
(2, '2020-06-01', '2020-06-30', 1, 1),
(3, '2020-06-02', '2020-06-26', 4, 1),
(4, '2020-06-03', '2020-07-30', 5, 1),
(5, '2020-06-04', '2020-07-30', 6, 1),
(6, '2020-04-01', '2020-06-30', 10, 1),
(7, '2020-04-02', '2020-06-30', 7, 1),
(8, '2020-06-01', '2020-11-30', 8, 8),
(9, '2020-06-01', '2020-09-30', 9, 7),
(10, '2020-11-19', '2020-06-30', 8, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motorista`
--

CREATE TABLE `motorista` (
  `idMotorista` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numLicencia` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `motorista`
--

INSERT INTO `motorista` (`idMotorista`, `nombre`, `apellido`, `direccion`, `dui`, `nit`, `numLicencia`) VALUES
(1, 'Manuel Jesús', 'Tobar Estrada', 'Santa Tecla, La Libertad', '12548545-9', '1452-856985-965-9', '1452-856985-965-9'),
(2, 'Maira Natalia', 'Cañas Madrid', 'Colonia Las Londas, Ciudad Delgado', '02365845-8', '4452-856985-965-2', '5452-856985-965-8'),
(3, 'Manuel Alejandro', 'Cañas Campos', 'Santo Tomas, San salvador', '14526590-9', '9875-856985-965-7', '9543-856985-965-3'),
(4, 'Samuel Ernesto', 'Castaneda Guerra', 'Santo Tomas, San Salvador', '14523698-0', '0452-856945-965-2', '0452-856985-965-0'),
(5, 'Jonathan Alessandro', 'Campos Campos', 'Santa Tecla, La Libertad', '25631485-9', '9872-856985-965-1', '9852-456985-965-0'),
(7, 'Daniel Eduardo', 'Cañas Cañas', 'Santa Tecla, San Salvador', '15236020-9', '7402-856985-965-1', '9568-856985-965-3'),
(8, 'Mario Manuel', 'Ponse Benitez', 'Colonia Las Londas, Santo Tomas', '14021035-9', '0300-002200-000-0', '1335-856985-965-7'),
(9, 'Kevin Misael', 'Castaneda Estrada', 'Santa Tecla, San Salvador', '12543001-0', '1452-856900-965-9', '0052-856985-965-9'),
(10, 'Jorge Alberto', 'Guerra Cañas', 'Santa Tecla, La Libertad', '01201458-9', '1452-856985-900-0', '0002-856985-965-9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ruta`
--

CREATE TABLE `ruta` (
  `idRuta` int(11) NOT NULL,
  `kilometraje` double NOT NULL,
  `latPuntoA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lngPuntoA` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `latPuntoB` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `lngPuntoB` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `idMotorista` int(11) NOT NULL,
  `idVehiculo` int(11) NOT NULL,
  `carga` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`idRuta`, `kilometraje`, `latPuntoA`, `lngPuntoA`, `latPuntoB`, `lngPuntoB`, `idMotorista`, `idVehiculo`, `carga`, `descripcion`) VALUES
(1, 269, '14.565321624228785', '-90.75567677477144', '13.692784477172287', '-89.22050401047579', 1, 1, 'Cobijas Artesanales', 'Desde Antigua Guatemala, Guatemala hasta San Salvador, El Salvador'),
(2, 40.5, '13.33446531334464', '-87.81997547310175', '13.197495877609002', '-88.05408151120264', 2, 2, 'Telas de seda y zapatos', 'Desde El Puerto Cutuco hasta Intipucá'),
(3, 982, '9.929845591076626', '-84.08377620782353', '13.98985118706429', '-89.55567200654005', 3, 3, 'Piezas automotrices', 'Desde San José, Costa Rica hasta Santa Ana El Salvador'),
(4, 243, '14.310622683677497', '-88.14885426657246', '13.677984036226741', '-89.22136652986408', 1, 2, 'Zapatos', 'Dede La Esperanza, Honduras hasta San Salvador, El Salvador'),
(5, 271, '14.571525792751775', '-90.75129999791227', '13.69420684565569', '-89.21655492145115', 5, 1, 'Cobijas Artesanales', 'Desde Antigua Guatemala, Guatemala hasta San Salvador, El Salvador'),
(6, 2.405, '17.168730406952385', '-88.98952505014877', '8.377310654174769', '-78.04406762617883', 7, 5, 'Telas de seda y zapatos', 'Desde Belice hasta Panama'),
(7, 334, '13.932512976046262', '-90.46466956406834', '13.497011501121097', '-88.15498317058284', 8, 8, 'Colchones indufoam', 'Desde La Avellana, Guatemala hasta San Miguel El Salvador'),
(8, 69, '13.335285173483959', '-88.60988141547706', '13.48623556243275', '-88.18416120063331', 10, 10, 'Zapatos escolares', 'Desde Usulutan Hasta San Miguel'),
(9, 330, '14.043198379413054', '-87.16932418764878', '13.695926518087814', '-89.22744709617837', 9, 9, 'Guineos', 'Desde Tegusigalpa, Guatemala Hasta San Salvador, El Salvador'),
(10, 390, '15.017772877984921', '-88.24512939970316', '13.953762379042999', '-89.59644775907816', 8, 8, 'Guineos', 'Desde Santa Barbara, Guatemala hasta San Salvador, El Salvador'),
(11, 580, '14.069530982266684', '-87.16938039021295', '14.572264970964369', '-90.71712034529789', 8, 7, 'Laminas Sincalum', 'Desde Tegusigalpa, Honduras hasta Antigua Guatemala, Guatemala'),
(12, 2.387, '8.17857469474909', '-77.70540069327065', '14.97652162017308', '-91.78205955307263', 7, 8, 'Café por libras', 'Desde Yaviza, Panama hasta San Marcos, Guatemala'),
(13, 146, '13.322927453484079', '-87.84753197890021', '13.505308282591976', '-88.87237814026146', 7, 6, 'Materiales de contrucción', 'Desde La unión hasta Sacatecoluca'),
(14, 42.5, '13.656946167072082', '-89.18173322969027', '13.596895896190865', '-89.41534365435442', 4, 4, 'Insumos de custorería', 'Desde San Marcos hasta Talmanique'),
(15, 132, '13.825374746776857', '-87.25386137532887', '13.344823391238757', '-87.92402739095387', 7, 10, 'Granos basicos ', 'Desde Gabana Grande, Honduras Hasta La Unión, El Salvador'),
(16, 451, '12.083318347767525', '-86.23002849525079', '14.867052081348769', '-87.14825698060677', 8, 4, 'Materiales de construcción', 'Desde Managua, Nicaragua hasta El Por Venir, Honduras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariocli`
--

CREATE TABLE `usuariocli` (
  `idUsuarioCli` int(11) NOT NULL,
  `usuarioCli` varchar(40) NOT NULL,
  `passwordCli` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariocli`
--

INSERT INTO `usuariocli` (`idUsuarioCli`, `usuarioCli`, `passwordCli`) VALUES
(1, 'cliNataren', '883610e712c5b263435d070e9c34ea2285accf5f'),
(2, 'cliIris', '035a2bcef930051afcb62be0c5a7f1bdc0a3d3bc'),
(3, 'cliIsmael', '0bfe8e441bd1397082b687804a7f5664d921cbcc'),
(4, 'cliLuis', '3c3038ca1d7c267163377908b53020549be83721'),
(5, 'cliMilena', 'b70f1aa2d1586e5383b4210a57cccee62be55a9f'),
(7, 'cliMario', '057136a350c1a09006df14f470e7f48fae31fdf4'),
(8, 'clikeniaBenitez', '5c25118277ba671f6a546c8417a96d4586d59973'),
(9, 'cliMairaNatalia', '9a6a2443b07e8242b680ae42bf2f13f93c7ac9fd'),
(10, 'cliSarai', '1240e366f99794cfdb5bb777fb3ea12a7e63903e'),
(11, 'cliSelena', '0bc1aa9e1be3a3cb2600583d469beb825cfccb44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioemp`
--

CREATE TABLE `usuarioemp` (
  `idUsuarioEmp` int(11) NOT NULL,
  `usuarioEmp` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarioemp`
--

INSERT INTO `usuarioemp` (`idUsuarioEmp`, `usuarioEmp`, `password`, `rol`) VALUES
(1, 'empAdmin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Administrador'),
(2, 'empleado', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Empleado'),
(3, 'empDaniel', '647af36f3a582ac143e653037a09c6c054103969', 'Empleado'),
(4, 'empMonica', 'a1cc0f0f4cb4246a0e1094152798d4aea78a40e0', 'Empleado'),
(5, 'empJosueDaniel', 'b70fda4e94072c113b885317f8e013318102b90e', 'Empleado'),
(6, 'empEstephanie', '7874df3c6199fe5544c95999a7a6626be27920e6', 'Administrador'),
(7, 'empDamaris', '2aaed7fa39ef7768ff58966c9c2753c9f6d69905', 'Empleado'),
(8, 'empMarcos', 'c29495bed8b42e185531198305bec39d7f276543', 'Empleado'),
(10, 'empFatimaCamila', '41e73f72877633980d957632e682f1bc8506686d', 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` int(11) NOT NULL,
  `marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tazaCombustible` double NOT NULL,
  `capacidadCombustible` double NOT NULL,
  `kmRecorridos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `marca`, `placa`, `modelo`, `tazaCombustible`, `capacidadCombustible`, `kmRecorridos`) VALUES
(1, 'Scania', 'C002-958', 'Scania RC', 70.35, 25.3, 540),
(2, 'Daf Trucks', 'C012-890', 'Daf Trucks D300', 66.3, 75.2, 283.5),
(3, 'Iveco', 'C801-963', 'Iveco Morcha20', 70.7, 50.63, 982),
(4, 'Volvo', 'C785-002', 'Volvo 400', 70.59, 70.12, 493.5),
(5, 'Renault', 'C789-000', 'Renault Renave', 80.3, 60.6, 2.405),
(6, 'Isuzu', 'C000-055', 'Isuzu Corpa', 68.2, 54.25, 146),
(7, 'Isuzu', 'C895-951', 'Isuzu G200', 78.2, 44.2, 580),
(8, 'Scania', 'C256-256', 'Scania300', 80.36, 96.21, 726.387),
(9, 'Man ', 'C259-865', 'Man Switch', 26.36, 25.36, 330),
(10, 'Fuso', 'C002-002', 'Fuso 300', 60.2, 41.25, 201);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD UNIQUE KEY `nit` (`nit`),
  ADD UNIQUE KEY `numContacto` (`numContacto`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `idUsuarioCli` (`idUsuarioCli`);

--
-- Indices de la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  ADD PRIMARY KEY (`idDetalleEnvio`),
  ADD KEY `idRuta` (`idRuta`),
  ADD KEY `idEnvio` (`idEnvio`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD UNIQUE KEY `nit` (`nit`),
  ADD KEY `idUsuarioEmp` (`idUsuarioEmp`);

--
-- Indices de la tabla `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`idEnvio`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`idMotorista`),
  ADD UNIQUE KEY `nit` (`nit`),
  ADD UNIQUE KEY `dui` (`dui`),
  ADD UNIQUE KEY `numLicencia` (`numLicencia`);

--
-- Indices de la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD PRIMARY KEY (`idRuta`),
  ADD KEY `idMotorista` (`idMotorista`),
  ADD KEY `idVehiculo` (`idVehiculo`);

--
-- Indices de la tabla `usuariocli`
--
ALTER TABLE `usuariocli`
  ADD PRIMARY KEY (`idUsuarioCli`),
  ADD UNIQUE KEY `usuarioCli` (`usuarioCli`);

--
-- Indices de la tabla `usuarioemp`
--
ALTER TABLE `usuarioemp`
  ADD PRIMARY KEY (`idUsuarioEmp`),
  ADD UNIQUE KEY `usuarioEmp` (`usuarioEmp`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`idVehiculo`),
  ADD UNIQUE KEY `placa` (`placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  MODIFY `idDetalleEnvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `idEnvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `motorista`
--
ALTER TABLE `motorista`
  MODIFY `idMotorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `idRuta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuariocli`
--
ALTER TABLE `usuariocli`
  MODIFY `idUsuarioCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarioemp`
--
ALTER TABLE `usuarioemp`
  MODIFY `idUsuarioEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`idUsuarioCli`) REFERENCES `usuariocli` (`idUsuarioCli`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  ADD CONSTRAINT `detalleenvio_ibfk_1` FOREIGN KEY (`idRuta`) REFERENCES `ruta` (`idRuta`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalleenvio_ibfk_3` FOREIGN KEY (`idEnvio`) REFERENCES `envio` (`idEnvio`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_1` FOREIGN KEY (`idUsuarioEmp`) REFERENCES `usuarioemp` (`idUsuarioEmp`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `envio`
--
ALTER TABLE `envio`
  ADD CONSTRAINT `envio_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleado` (`idEmpleado`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `envio_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ruta`
--
ALTER TABLE `ruta`
  ADD CONSTRAINT `ruta_ibfk_1` FOREIGN KEY (`idMotorista`) REFERENCES `motorista` (`idMotorista`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `ruta_ibfk_3` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculo` (`idVehiculo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
