-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2018 a las 21:51:42
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sirpec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentacion`
--

CREATE TABLE `alimentacion` (
  `idAlimentacion` bigint(20) NOT NULL,
  `idSiembra` bigint(20) NOT NULL,
  `idProducto` bigint(20) NOT NULL,
  `cantAlimento` double NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `obseracion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cosecha`
--

CREATE TABLE `cosecha` (
  `idCosecha` bigint(20) NOT NULL,
  `idSiembra` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `numeroPeces` double NOT NULL,
  `pesoPezEntero` double NOT NULL,
  `pesoPezEvicerado` double NOT NULL,
  `observacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `idEspecie` bigint(20) NOT NULL,
  `nombreCientifico` varchar(30) NOT NULL,
  `nombreComun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`idEspecie`, `nombreCientifico`, `nombreComun`) VALUES
(1, 'calamar', 'calamar'),
(2, 'Oreochromis sp', 'tilapia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estanque`
--

CREATE TABLE `estanque` (
  `idEstanque` bigint(20) NOT NULL,
  `idFinca` bigint(20) NOT NULL,
  `numeroEstanque` varchar(30) NOT NULL,
  `totEspejoAgua` double NOT NULL,
  `profundPromedio` double NOT NULL,
  `volumAgua` double NOT NULL,
  `observacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finca`
--

CREATE TABLE `finca` (
  `idFinca` bigint(20) NOT NULL,
  `nombreFinca` varchar(45) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Tamano` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `finca`
--

INSERT INTO `finca` (`idFinca`, `nombreFinca`, `Telefono`, `Tamano`) VALUES
(3, 'SENA - CENTRO AGROPECUARIO LA GRANJA', 0, 91);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idInventario` bigint(20) NOT NULL,
  `idProducto` bigint(20) NOT NULL,
  `tipoNovedad` varchar(10) NOT NULL,
  `cantidad` double NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mortalidad`
--

CREATE TABLE `mortalidad` (
  `idMortalidad` bigint(20) NOT NULL,
  `idSiembra` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestreo`
--

CREATE TABLE `muestreo` (
  `idMuestreo` bigint(20) NOT NULL,
  `idSiembra` bigint(20) NOT NULL,
  `hora` date NOT NULL,
  `fecha` date NOT NULL,
  `numerPeces` double NOT NULL,
  `pesoPromedio` double NOT NULL,
  `unidadMedida` double NOT NULL,
  `observacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` bigint(20) NOT NULL,
  `idTipoProducto` bigint(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `Cantidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `idTipoProducto`, `nombre`, `descripcion`, `Cantidad`) VALUES
(1, 1, 'PURINITA', 'muy buen sabor', 500),
(2, 1, 'CONSENTRADO', 'MUY BUENO', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `saldo`
--

CREATE TABLE `saldo` (
  `idSaldo` bigint(20) NOT NULL,
  `idProducto` bigint(20) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sanidad`
--

CREATE TABLE `sanidad` (
  `idSanidad` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `producto` varchar(45) NOT NULL,
  `posologia` float NOT NULL,
  `dosis` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembra`
--

CREATE TABLE `siembra` (
  `idSiembra` bigint(20) NOT NULL,
  `idEspecie` bigint(20) NOT NULL,
  `idFinca` bigint(20) NOT NULL,
  `idEstanque` bigint(20) NOT NULL,
  `lote` varchar(30) NOT NULL,
  `cantidAlevino` double NOT NULL,
  `densidad` double NOT NULL,
  `bioMasa` double NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `peso` double NOT NULL,
  `observacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembra_estanque`
--

CREATE TABLE `siembra_estanque` (
  `idSiembra_Estanque` bigint(20) NOT NULL,
  `idSiembra` bigint(20) NOT NULL,
  `idEstanque` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoproducto`
--

CREATE TABLE `tipoproducto` (
  `idTipoProducto` bigint(20) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipoproducto`
--

INSERT INTO `tipoproducto` (`idTipoProducto`, `nombre`) VALUES
(1, 'ALIMENTO'),
(2, 'MEDICINA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslados`
--

CREATE TABLE `traslados` (
  `idTraslado` bigint(20) NOT NULL,
  `idSiembra` bigint(20) NOT NULL,
  `idEstanque` bigint(20) NOT NULL,
  `numerPece` double NOT NULL,
  `peso` double NOT NULL,
  `tamaño` double NOT NULL,
  `fecha` date NOT NULL,
  `observacion` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` bigint(20) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `rol`, `contrasena`) VALUES
(1, 'Administrador', 'Administrador', '$2y$12$rZIpKxj3E9vrcQ4NYdQ5q.C90SvUAS0MYDid0LngVHWU/tYJ.RVp6'),
(2, 'Consulta', 'Consulta', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  ADD PRIMARY KEY (`idAlimentacion`),
  ADD KEY `idSiembra` (`idSiembra`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `cosecha`
--
ALTER TABLE `cosecha`
  ADD PRIMARY KEY (`idCosecha`),
  ADD KEY `idSiembra` (`idSiembra`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`idEspecie`);

--
-- Indices de la tabla `estanque`
--
ALTER TABLE `estanque`
  ADD PRIMARY KEY (`idEstanque`),
  ADD KEY `idFinca` (`idFinca`);

--
-- Indices de la tabla `finca`
--
ALTER TABLE `finca`
  ADD PRIMARY KEY (`idFinca`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idInventario`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  ADD PRIMARY KEY (`idMortalidad`),
  ADD KEY `idSiembra` (`idSiembra`);

--
-- Indices de la tabla `muestreo`
--
ALTER TABLE `muestreo`
  ADD PRIMARY KEY (`idMuestreo`),
  ADD KEY `idSiembra` (`idSiembra`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idTipoProducto` (`idTipoProducto`);

--
-- Indices de la tabla `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`idSaldo`),
  ADD KEY `idProducto` (`idProducto`);

--
-- Indices de la tabla `sanidad`
--
ALTER TABLE `sanidad`
  ADD PRIMARY KEY (`idSanidad`);

--
-- Indices de la tabla `siembra`
--
ALTER TABLE `siembra`
  ADD PRIMARY KEY (`idSiembra`),
  ADD KEY `idEspecie` (`idEspecie`),
  ADD KEY `idEstanque` (`idEstanque`),
  ADD KEY `idFinca` (`idFinca`);

--
-- Indices de la tabla `siembra_estanque`
--
ALTER TABLE `siembra_estanque`
  ADD PRIMARY KEY (`idSiembra_Estanque`),
  ADD KEY `idSiembra` (`idSiembra`),
  ADD KEY `idEstanque` (`idEstanque`);

--
-- Indices de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  ADD PRIMARY KEY (`idTipoProducto`);

--
-- Indices de la tabla `traslados`
--
ALTER TABLE `traslados`
  ADD PRIMARY KEY (`idTraslado`),
  ADD KEY `idSiembra` (`idSiembra`),
  ADD KEY `idEstanque` (`idEstanque`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  MODIFY `idAlimentacion` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cosecha`
--
ALTER TABLE `cosecha`
  MODIFY `idCosecha` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `idEspecie` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `estanque`
--
ALTER TABLE `estanque`
  MODIFY `idEstanque` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `finca`
--
ALTER TABLE `finca`
  MODIFY `idFinca` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `idInventario` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  MODIFY `idMortalidad` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `muestreo`
--
ALTER TABLE `muestreo`
  MODIFY `idMuestreo` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `saldo`
--
ALTER TABLE `saldo`
  MODIFY `idSaldo` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sanidad`
--
ALTER TABLE `sanidad`
  MODIFY `idSanidad` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `siembra`
--
ALTER TABLE `siembra`
  MODIFY `idSiembra` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `siembra_estanque`
--
ALTER TABLE `siembra_estanque`
  MODIFY `idSiembra_Estanque` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipoproducto`
--
ALTER TABLE `tipoproducto`
  MODIFY `idTipoProducto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `traslados`
--
ALTER TABLE `traslados`
  MODIFY `idTraslado` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alimentacion`
--
ALTER TABLE `alimentacion`
  ADD CONSTRAINT `alimentacion_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `alimentacion_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `cosecha`
--
ALTER TABLE `cosecha`
  ADD CONSTRAINT `cosecha_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `estanque`
--
ALTER TABLE `estanque`
  ADD CONSTRAINT `estanque_ibfk_1` FOREIGN KEY (`idFinca`) REFERENCES `finca` (`idFinca`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `mortalidad`
--
ALTER TABLE `mortalidad`
  ADD CONSTRAINT `mortalidad_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `muestreo`
--
ALTER TABLE `muestreo`
  ADD CONSTRAINT `muestreo_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idTipoProducto`) REFERENCES `tipoproducto` (`idTipoProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `saldo_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `siembra`
--
ALTER TABLE `siembra`
  ADD CONSTRAINT `siembra_ibfk_1` FOREIGN KEY (`idEstanque`) REFERENCES `estanque` (`idEstanque`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `siembra_ibfk_2` FOREIGN KEY (`idEspecie`) REFERENCES `especie` (`idEspecie`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `siembra_ibfk_3` FOREIGN KEY (`idFinca`) REFERENCES `finca` (`idFinca`);

--
-- Filtros para la tabla `siembra_estanque`
--
ALTER TABLE `siembra_estanque`
  ADD CONSTRAINT `siembra_estanque_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON UPDATE CASCADE,
  ADD CONSTRAINT `siembra_estanque_ibfk_2` FOREIGN KEY (`idEstanque`) REFERENCES `estanque` (`idEstanque`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `traslados`
--
ALTER TABLE `traslados`
  ADD CONSTRAINT `traslados_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `traslados_ibfk_2` FOREIGN KEY (`idEstanque`) REFERENCES `estanque` (`idEstanque`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
