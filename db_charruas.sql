-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 13:38:18
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
  `tipousuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idusuario` int(11) NOT NULL,
  `tipousuario` text NOT NULL,
  `ci` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idusuario`, `tipousuario`, `ci`) VALUES
(23, 'Cliente', 54515499),
(24, 'Empresa', 2147483647),
(25, 'Empresa', 2147483647),
(26, 'Empresa', 545154);

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
  `imagen` varchar(500) NOT NULL,
  `etiquetas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `precio`, `Nombre`, `Descripcion`, `Stock`, `imagen`, `etiquetas`) VALUES
(1, 900, 'Varselle del Uco', 'Un vino fino  realizado con las mejores cepas de la cosecha del año.', 22, './assets/productos/ejemplo.png', 'recomendado uco'),
(2, 700, 'Cosecha del año', 'Un vino joven del año, ideal para disfrutar en las comidas familiares.', 2, './assets/productos/ejemplo2.png', 'recomendado'),
(3, 550, 'Vino Blanco de la Peninsula', 'Un ligero y sabroso vino elaborado en la península ibérica. Ideal para aquellos nuevos en el mundo del vino contando con un bajo nivel de alcohol ', 4, './assets/productos/ejemplo.png', 'recomendado'),
(4, 3000, 'Reserva del 86', 'Esta reserva ideal para aquellos entusiastas del vinos y amantes del mismo que desen probar un sabor sin igual.', 5, './assets/productos/ejemplo.png', 'recomendado'),
(5, 53, 'Lol', '123', 5, './assets/productos/ejemplo.png', 'uco'),
(6, 53, 'Lol', '123', 5, './assets/productos/ejemplo.png', 'uco'),
(7, 5125, 'asf', 'asfasf', 5125, './assets/productos/ejemplo.png', 'uco'),
(8, 51, '125', '125', 125, './assets/productos/ejemplo.png', 'uco'),
(29, 50000, 'Reserva del 95', 'Un vino finisimo de alta calidad', 7, '../assets/productos/1667699191457.png', '');

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
  `tipousuario` text NOT NULL,
  `telefono` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `mail`, `password`, `nombre`, `apellido`, `direccion`, `tipousuario`, `telefono`) VALUES
(23, 'PabloEduardoGarcia18@gmail.com', 'Pablito', 'Pablo', 'Garcia', 'Mevir 2 18966', 'Administrador', 91739756),
(24, 'PabloEduardoGarcia19@gmail.com', 'Pablito', 'Pablito1', 'Garcia5', 'asdasd', 'Empresa', 92336550),
(25, 'PabloEduardoGarcia15@gmail.com', 'Pablito', 'Pablo3', 'Garcia3', 'Mevir 2 18963', 'Cliente', 91739753),
(26, 'PabloEduardoGarcia5@gmail.com', 'Pablito', 'Pablo4', 'Garcia4', 'Mevir 2 18533', 'Cliente', 91739724);

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
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `idusuario` (`idusuario`);

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
  ADD UNIQUE KEY `idvino` (`idproducto`),
  ADD UNIQUE KEY `idusuario` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
