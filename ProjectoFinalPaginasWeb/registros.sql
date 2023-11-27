-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 04:52:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `correo`, `contraseña`) VALUES
(3, 'Eddy', 'eddy@hotmail.com', '123456789'),
(4, 'jonathan', 'jona@hotmail.com', '123456789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(45) NOT NULL,
  `Apellido Paterno` varchar(45) NOT NULL,
  `Apellido Materno` varchar(45) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Edad` int(5) NOT NULL,
  `Genero` varchar(20) NOT NULL,
  `Nacimiento` varchar(45) NOT NULL,
  `Codigo Postal` varchar(45) NOT NULL,
  `Camisa` varchar(10) NOT NULL,
  `ID_REGISTRO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Apellido Paterno`, `Apellido Materno`, `Email`, `Direccion`, `Ciudad`, `Telefono`, `Edad`, `Genero`, `Nacimiento`, `Codigo Postal`, `Camisa`, `ID_REGISTRO`) VALUES
('Eddy', 'Bojorges', '', 'eddy@hotmail.com', 'Avenida 1', 'Tijuana', '6644561232', 22, 'Masculino', '18/11/1999', '225588', '', 1),
('Eddy', 'Bojorges', 'Romero', 'eddy@hotmail.com', 'Avenida 1', 'Tijuana', '6644561232', 22, 'Masculino', '18/11/1999', '225588', '', 2),
('Eddy', 'Bojorges', 'Romero', 'eddy@hotmail.com', 'Avenida 1', 'Tijuana', '6644561232', 22, 'Masculino', '18/11/1999', '225588', '', 3),
('Eddy', 'Bojorges', 'Romero', 'eddy@hotmail.com', 'Avenida 1', 'Tijuana', '6644561232', 22, 'Masculino', '18/11/1999', '225588', '', 4),
('Eddy', 'Bojorges', 'Romero', 'eddy@hotmail.com', 'Avenida 1', 'Tijuana', '6644561232', 22, 'Masculino', '18/11/1999', '225588', '', 5),
('Eddy', 'Bojorges', 'Romero', 'eddy1@hotmail.com', 'avenida1', 'Tijuana', '664456789', 25, 'Masculino', '18/11/1999', '22555', '', 6),
('Jonathan', 'Escobedo', 'Rojo', 'jona@hotmail.com', 'Calle 2', 'TIjuana', '664789456', 22, 'Masculino', '11/11/2001', '22555', '', 7),
('jonathan', 'es', 'Rojo', 'jona@hotmail.com', 'avenida2', 'Tijuana', '664789456', 25, 'Masculino', '11/11/2000', '25555', 'L', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_REGISTRO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_REGISTRO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
