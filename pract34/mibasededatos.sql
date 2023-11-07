-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2023 a las 04:47:43
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibasededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ClienteID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`ClienteID`, `Nombre`, `Apellido`, `Email`, `Telefono`) VALUES
(1, 'Juan', 'Perez', 'juan@example.com', '123-456-7890'),
(2, 'Maria', 'Gomez', 'maria@example.com', '987-654-3210'),
(3, 'Carlos', 'Martinez', 'carlos@example.com', '555-123-4567'),
(4, 'Laura', 'Lopez', 'laura@example.com', '111-222-3333'),
(5, 'Pedro', 'Rodriguez', 'pedro@example.com', '999-888-7777');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleorden`
--

CREATE TABLE `detalleorden` (
  `DetalleID` int(11) NOT NULL,
  `OrdenID` int(11) DEFAULT NULL,
  `ProductoID` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `PrecioUnitario` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalleorden`
--

INSERT INTO `detalleorden` (`DetalleID`, `OrdenID`, `ProductoID`, `Cantidad`, `PrecioUnitario`) VALUES
(1, 1, 1, 2, '400.00'),
(2, 1, 3, 5, '125.00'),
(3, 2, 2, 3, '300.00'),
(4, 3, 4, 1, '50.00'),
(5, 4, 5, 4, '60.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `OrdenID` int(11) NOT NULL,
  `ClienteID` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`OrdenID`, `ClienteID`, `Fecha`, `Total`) VALUES
(1, 1, '2023-11-01', '750.00'),
(2, 2, '2023-11-02', '400.00'),
(3, 3, '2023-11-03', '200.00'),
(4, 4, '2023-11-04', '350.00'),
(5, 5, '2023-11-05', '600.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ProductoID` int(11) NOT NULL,
  `NombreProducto` varchar(50) DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ProductoID`, `NombreProducto`, `Precio`, `Stock`, `Categoria`) VALUES
(1, 'Laptop', '800.00', 20, 'Electrónicos'),
(2, 'Teléfono móvil', '300.00', 50, 'Electrónicos'),
(3, 'Camisa', '25.00', 100, 'Ropa'),
(4, 'Zapatos', '50.00', 75, 'Calzado'),
(5, 'Libro', '15.00', 200, 'Libros');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ClienteID`);

--
-- Indices de la tabla `detalleorden`
--
ALTER TABLE `detalleorden`
  ADD PRIMARY KEY (`DetalleID`),
  ADD KEY `OrdenID` (`OrdenID`),
  ADD KEY `ProductoID` (`ProductoID`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`OrdenID`),
  ADD KEY `ClienteID` (`ClienteID`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ProductoID`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalleorden`
--
ALTER TABLE `detalleorden`
  ADD CONSTRAINT `detalleorden_ibfk_1` FOREIGN KEY (`OrdenID`) REFERENCES `orden` (`OrdenID`),
  ADD CONSTRAINT `detalleorden_ibfk_2` FOREIGN KEY (`ProductoID`) REFERENCES `producto` (`ProductoID`);

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`ClienteID`) REFERENCES `cliente` (`ClienteID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
