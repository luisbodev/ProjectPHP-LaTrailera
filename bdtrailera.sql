-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2020 a las 09:25:16
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga`
--

CREATE TABLE `carga` (
  `idCarga` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `peso` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carga`
--

INSERT INTO `carga` (`idCarga`, `descripcion`, `peso`) VALUES
(6, 'sdkjhs', 'smdnhsjkldh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numContacto` int(20) NOT NULL,
  `correo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuarioCli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombre`, `apellido`, `direccion`, `nit`, `numContacto`, `correo`, `idUsuarioCli`) VALUES
(4, 'Ismael Alberto', ' Castillo Martínez', 'Col.Altos de San Pedro', '124578', 124578, 'Ismael.cm@itca.edu.sv', 1),
(5, 'Daniela Gladamez', 'Manzano Campos', 'Col. Las londas, La libertad.', '124578', 123654, 'daniela.GC@itca.edu.sv', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleenvio`
--

CREATE TABLE `detalleenvio` (
  `idDetalleEnvio` int(11) NOT NULL,
  `idRuta` int(11) NOT NULL,
  `idCarga` int(11) NOT NULL,
  `idVehiculo` int(11) NOT NULL,
  `idEnvio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `cargo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuarioEmp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`idEmpleado`, `nombre`, `apellido`, `sexo`, `direccion`, `cargo`, `dui`, `nit`, `idUsuarioEmp`) VALUES
(1, 'Ismael Alberto', 'Castillo Martínez', 'Masculino', 'Col. Las Moritas, La libertad', 'Administrador', '02154876-0', '1245-124578-111-2', 1),
(2, 'Melissa Natharén', 'Bonilla Tejada', 'Femenino', 'Col. Esperanza, Soyapango', 'Empleado', '78451212-8', '1212-121212-111-5', 3),
(48, 'GloriaEstela', 'Del Carmen', 'Femenino', 'Col. Las moritas, SV', 'Empleado', 'nwskd2', '323424emdl', 57),
(58, 'Luis Manuel', 'Bonilla Anaya', 'Masculino', 'Col. Las Moritas, Lourdes Coló', 'Administrador', '121545878-5', '545121545845454', 67),
(59, 'Luis Manuel', 'Bonilla Anaya', 'Masculino', 'Col. Las Moritas, Lourdes Coló', 'Administrador', '121545878-5', '545121545845454', 68),
(60, 'Luis Manuel', 'Bonilla Anaya', 'Masculino', 'Col. Las Moritas, Lourdes Coló', 'Administrador', '121545878-5', '545121545845454', 69),
(61, 'Daniel ', 'Castillo', 'Masculino', 'Ciudad Arce', 'Empleado', '00704825-9', '123456789-9', 70),
(62, 'Fatima', 'ngfjh', 'Femenino', 'gfhgfjh', 'Administrador', 'hgjhgjghj', 'ghjghjghjgh', 71),
(63, 'Ismael', 'Castillo', 'Masculino', 'Col. La esperanza', 'Empleado', '1212123212345-5', '1215489645123-5', 72);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motorista`
--

CREATE TABLE `motorista` (
  `idMotorista` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numLicencia` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `motorista`
--

INSERT INTO `motorista` (`idMotorista`, `nombre`, `apellido`, `direccion`, `dui`, `nit`, `numLicencia`) VALUES
(1, 'Toño Alfredo', 'Landaverde de Jesus', 'Col. Nueva Esperancita', '20154879-5', '1245-852698-589-5', '125487662');

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
  `idMotorista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ruta`
--

INSERT INTO `ruta` (`idRuta`, `kilometraje`, `latPuntoA`, `lngPuntoA`, `latPuntoB`, `lngPuntoB`, `idMotorista`) VALUES
(1, 2.654, '18.49192988972683', '-88.38803442590125', '8.154833370077895', '-77.69176005742527', 1),
(2, 47.2, '13.492745665004295', '-88.87379775315526', '13.619573676348535', '-88.67192397385838', 1),
(5, 121, '14.128006183158362', '-89.51257119446996', '13.717460040664022', '-88.95226846009496', 1),
(6, 226, '13.774595195027246', '-90.0536478546262', '13.53972998284088', '-88.4496439483762', 1),
(7, 525, '37.14334576185409', '-104.47519869452346', '38.94285013033673', '-100.10264010077346', 1);

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
(1, 'Ismael08-jpg', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(2, 'Daniela03-png', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

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
(1, 'empMel', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Administrador'),
(2, 'empSara', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Empleado'),
(3, 'empMelissa', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Empleado'),
(4, 'empAlberto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Empleado'),
(5, 'empIrisCJ', '123', 'Empleado'),
(6, 'empIris', '456', 'Empleado'),
(7, 'empIris', '456', 'Empleado'),
(8, 'empIris', '456', 'Empleado'),
(9, 'empIris', '456', 'Empleado'),
(25, '2222222222222222', '2222222222222222', 'Empleado'),
(28, '2222222222222222', '2222222222222222', 'Empleado'),
(29, '2222222222222222', '2222222222222222', 'Empleado'),
(30, '2222222222222222', '2222222222222222', 'Empleado'),
(31, '2222222222222222', '2222222222222222', 'Empleado'),
(32, '2222222222222222', '2222222222222222', 'Empleado'),
(33, '2222222222222222', '2222222222222222', 'Empleado'),
(35, '2222222222222222', '2222222222222222', 'Empleado'),
(36, '2222222222222222', '2222222222222222', 'Empleado'),
(57, 'Hola mundo', '5246s5ddslfj', 'Empleado'),
(67, 'empLuis365', '998a212f416b572a79edaac9ab08abc3e158bbc0', 'Administrador'),
(68, 'empLuis365', '998a212f416b572a79edaac9ab08abc3e158bbc0', 'Administrador'),
(69, 'empLuis365', '998a212f416b572a79edaac9ab08abc3e158bbc0', 'Administrador'),
(70, 'empdanie', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Empleado'),
(71, 'empfatima', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Administrador'),
(72, 'empismaela', '356a192b7913b04c54574d18c28d46e6395428ab', 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` int(11) NOT NULL,
  `marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `tazaCombustible` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `capacidadCombustible` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `kmRecorridos` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `marca`, `placa`, `modelo`, `tazaCombustible`, `capacidadCombustible`, `kmRecorridos`) VALUES
(2, '20220', '0', '20', '20', '2', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carga`
--
ALTER TABLE `carga`
  ADD PRIMARY KEY (`idCarga`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `idUsuarioCli` (`idUsuarioCli`);

--
-- Indices de la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  ADD PRIMARY KEY (`idDetalleEnvio`),
  ADD KEY `idRuta` (`idRuta`),
  ADD KEY `idCarga` (`idCarga`),
  ADD KEY `idVehiculo` (`idVehiculo`),
  ADD KEY `idEnvio` (`idEnvio`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`idEmpleado`),
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
  ADD KEY `idMotorista` (`idMotorista`);

--
-- Indices de la tabla `usuariocli`
--
ALTER TABLE `usuariocli`
  ADD PRIMARY KEY (`idUsuarioCli`);

--
-- Indices de la tabla `usuarioemp`
--
ALTER TABLE `usuarioemp`
  ADD PRIMARY KEY (`idUsuarioEmp`);

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
-- AUTO_INCREMENT de la tabla `carga`
--
ALTER TABLE `carga`
  MODIFY `idCarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  MODIFY `idDetalleEnvio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `idEnvio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `motorista`
--
ALTER TABLE `motorista`
  MODIFY `idMotorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `idRuta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuariocli`
--
ALTER TABLE `usuariocli`
  MODIFY `idUsuarioCli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarioemp`
--
ALTER TABLE `usuarioemp`
  MODIFY `idUsuarioEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `detalleenvio_ibfk_2` FOREIGN KEY (`idCarga`) REFERENCES `carga` (`idCarga`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalleenvio_ibfk_3` FOREIGN KEY (`idEnvio`) REFERENCES `envio` (`idEnvio`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `detalleenvio_ibfk_4` FOREIGN KEY (`idVehiculo`) REFERENCES `vehiculo` (`idVehiculo`) ON DELETE CASCADE ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `ruta_ibfk_1` FOREIGN KEY (`idMotorista`) REFERENCES `motorista` (`idMotorista`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
