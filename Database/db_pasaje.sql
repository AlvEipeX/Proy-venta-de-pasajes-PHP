-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2023 a las 03:55:42
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_pasaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `cod_emp` int(11) NOT NULL,
  `ci_emp` int(11) NOT NULL,
  `nom_emp` varchar(30) NOT NULL,
  `app_emp` varchar(15) NOT NULL,
  `aom_emp` varchar(15) NOT NULL,
  `salario` decimal(10,0) NOT NULL,
  `fecnac_emp` date NOT NULL,
  `cargo` varchar(10) NOT NULL,
  `login` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasaje`
--

CREATE TABLE `pasaje` (
  `cod_pasaje` int(11) NOT NULL,
  `costo` decimal(10,0) NOT NULL,
  `fec_venta` datetime NOT NULL,
  `num_asiento` int(11) NOT NULL,
  `cod_surubi` int(11) NOT NULL,
  `ci_pasajero` int(11) NOT NULL,
  `cod_viaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajero`
--

CREATE TABLE `pasajero` (
  `ci_pasajero` int(11) NOT NULL,
  `nom_pasajero` varchar(30) NOT NULL,
  `app_pasajero` varchar(15) NOT NULL,
  `apm_pasajero` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `surubi`
--

CREATE TABLE `surubi` (
  `cod_surubi` int(11) NOT NULL,
  `placa` varchar(10) NOT NULL,
  `modelo` varchar(15) NOT NULL,
  `fec_ultrev` date NOT NULL,
  `cod_emp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `cod_viaje` int(11) NOT NULL,
  `destino` varchar(15) NOT NULL,
  `costov` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`cod_emp`);

--
-- Indices de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD PRIMARY KEY (`cod_pasaje`),
  ADD KEY `cod_viaje` (`cod_viaje`),
  ADD KEY `ci_pasajero` (`ci_pasajero`),
  ADD KEY `cod_emp` (`cod_surubi`),
  ADD KEY `cod_surubi` (`cod_surubi`);

--
-- Indices de la tabla `pasajero`
--
ALTER TABLE `pasajero`
  ADD PRIMARY KEY (`ci_pasajero`);

--
-- Indices de la tabla `surubi`
--
ALTER TABLE `surubi`
  ADD PRIMARY KEY (`cod_surubi`),
  ADD KEY `cod_emp` (`cod_emp`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`cod_viaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `cod_emp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pasaje`
--
ALTER TABLE `pasaje`
  MODIFY `cod_pasaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `surubi`
--
ALTER TABLE `surubi`
  MODIFY `cod_surubi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `cod_viaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pasaje`
--
ALTER TABLE `pasaje`
  ADD CONSTRAINT `pasaje_ibfk_1` FOREIGN KEY (`cod_viaje`) REFERENCES `viaje` (`cod_viaje`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pasaje_ibfk_2` FOREIGN KEY (`ci_pasajero`) REFERENCES `pasajero` (`ci_pasajero`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pasaje_ibfk_3` FOREIGN KEY (`cod_surubi`) REFERENCES `surubi` (`cod_surubi`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `surubi`
--
ALTER TABLE `surubi`
  ADD CONSTRAINT `surubi_ibfk_1` FOREIGN KEY (`cod_emp`) REFERENCES `empleado` (`cod_emp`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
