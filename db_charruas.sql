-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2022 a las 20:59:11
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
-- Base de datos: `db_charruas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idusuario` int(11) NOT NULL,
  `tipousuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idusuario` int(11) NOT NULL,
  `tipocliente` text NOT NULL,
  `ruc` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idusuario`, `tipocliente`, `ruc`) VALUES
(1, 'Administrador', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupones`
--

CREATE TABLE `cupones` (
  `idcupon` int(11) NOT NULL,
  `Vencimiento` date NOT NULL,
  `Codigo` int(15) NOT NULL,
  `Descuento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Stock` int(11) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `precio`, `Nombre`, `Descripcion`, `Stock`, `imagen`) VALUES
(0, 252224, 'as21125125', 'as', 56, './assets/productos/ejemplo.png'),
(1, 500, 'Ejemplo', 'Vino de alta calidad', 0, './assets/productos/ejemplo.png'),
(2, 252, 'as', 'as', 56, './assets/productos/ejemplo.png'),
(3, 6126, 'asd2', 'asd', 5125, './assets/productos/ejemplo.png'),
(4, 25252, '2521as', 'as', 56, './assets/productos/ejemplo.png'),
(7, 1525125125, '125125', '215125', 1252, 'as'),
(8, 1525125125, '125125', '215125', 1252, 'as');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superadministrador`
--

CREATE TABLE `superadministrador` (
  `idusuario` int(11) NOT NULL,
  `tipousuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `password` text NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `direccion` text NOT NULL,
  `tipousuario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `mail`, `password`, `nombre`, `apellido`, `direccion`, `tipousuario`) VALUES
(1, 'Admin', '123', 'Pablo', 'Garcia', '', 'Administrador'),
(2, 'Pablo', '123', '123', '123', '123', 'Cliente'),
(3, 'Admin1', '123', '123', '123', '123', 'Administrador'),
(4, 'a', 'a', '', '', '', 'Cliente'),
(5, 'b', 'b', '', '', '', 'Cliente'),
(6, 'as', 'asd', '', '', '', 'Cliente'),
(7, '123', '123', '', '', '', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Factura` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `cupones`
--
ALTER TABLE `cupones`
  ADD PRIMARY KEY (`idcupon`),
  ADD UNIQUE KEY `Codigo` (`Codigo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`);

--
-- Indices de la tabla `superadministrador`
--
ALTER TABLE `superadministrador`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `idusuario` (`mail`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Factura`),
  ADD UNIQUE KEY `idusuario` (`idusuario`),
  ADD UNIQUE KEY `idproducto` (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `superadministrador`
--
ALTER TABLE `superadministrador`
  ADD CONSTRAINT `superadministrador_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
