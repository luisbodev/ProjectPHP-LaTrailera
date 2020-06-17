-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2020 a las 03:12:15
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleenvio`
--

CREATE TABLE `detalleenvio` (
  `idDetalleEnvio` int(11) NOT NULL,
  `idRuta` int(11) NOT NULL,
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
(2, 'Empleado', 'Empleado', 'Femenino', 'La Trailera SA de SV', 'Empleado', '55555555-5', '5555-555555-555-5', 2);

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
  `direccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `dui` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `numLicencia` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `motorista`
--

INSERT INTO `motorista` (`idMotorista`, `nombre`, `apellido`, `direccion`, `dui`, `nit`, `numLicencia`) VALUES
(1, 'Adan Manuel', 'Cornejo Estrada', 'C. Delgado, San Salvador', '25639856-9', '2563-856974-589-2', '2563-859689-895-7');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariocli`
--

CREATE TABLE `usuariocli` (
  `idUsuarioCli` int(11) NOT NULL,
  `usuarioCli` varchar(40) NOT NULL,
  `passwordCli` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'empleado', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Empleado');

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
(1, 'Volvo', 'C206-965', 'Volvo16', 20.2, 20.2, 20.2);

--
-- Índices para tablas volcadas
--

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
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalleenvio`
--
ALTER TABLE `detalleenvio`
  MODIFY `idDetalleEnvio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `envio`
--
ALTER TABLE `envio`
  MODIFY `idEnvio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `motorista`
--
ALTER TABLE `motorista`
  MODIFY `idMotorista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ruta`
--
ALTER TABLE `ruta`
  MODIFY `idRuta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuariocli`
--
ALTER TABLE `usuariocli`
  MODIFY `idUsuarioCli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarioemp`
--
ALTER TABLE `usuarioemp`
  MODIFY `idUsuarioEmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `idVehiculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
