SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS sirpec;

USE sirpec;

DROP TABLE IF EXISTS alimentacion;

CREATE TABLE `alimentacion` (
  `idAlimentacion` bigint(20) NOT NULL AUTO_INCREMENT,
  `idSiembra` bigint(20) NOT NULL,
  `idProducto` bigint(20) NOT NULL,
  `cantAlimento` double NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `obseracion` varchar(45) NOT NULL,
  PRIMARY KEY (`idAlimentacion`),
  KEY `idSiembra` (`idSiembra`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `alimentacion_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `alimentacion_ibfk_2` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

INSERT INTO alimentacion VALUES("41","23","1","100","2017-05-01","14:44:15","sdads");
INSERT INTO alimentacion VALUES("42","23","1","200","2017-05-01","14:44:25","asdasd");
INSERT INTO alimentacion VALUES("43","23","1","300","2017-05-01","14:44:36","sdfsdf");
INSERT INTO alimentacion VALUES("44","23","1","300","2017-05-01","14:44:48","adasd");
INSERT INTO alimentacion VALUES("45","23","1","300","2017-05-01","14:44:57","sdf");
INSERT INTO alimentacion VALUES("46","23","1","300","2017-05-01","14:45:07","df");
INSERT INTO alimentacion VALUES("47","23","1","400","2017-05-01","14:45:18","sdf");
INSERT INTO alimentacion VALUES("48","29","1","3","0000-00-00","00:00:00","dfd");
INSERT INTO alimentacion VALUES("49","29","1","3","2017-05-09","12:24:54","gtcfu");
INSERT INTO alimentacion VALUES("50","31","1","90","2017-05-17","11:34:46","ss");
INSERT INTO alimentacion VALUES("51","31","1","4","2017-05-17","11:34:46","ss");



DROP TABLE IF EXISTS cosecha;

CREATE TABLE `cosecha` (
  `idCosecha` bigint(20) NOT NULL AUTO_INCREMENT,
  `idSiembra_Estanque` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `numeroPeces` double NOT NULL,
  `pesoPezEntero` double NOT NULL,
  `pesoPezEvicerado` double NOT NULL,
  `observacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idCosecha`),
  KEY `idSiembra` (`idSiembra_Estanque`),
  KEY `idSiembra_Estanque` (`idSiembra_Estanque`),
  CONSTRAINT `cosecha_ibfk_1` FOREIGN KEY (`idSiembra_Estanque`) REFERENCES `siembra_estanque` (`idSiembra_Estanque`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO cosecha VALUES("16","35","2017-05-22","13:19:49","12","12","12","12");



DROP TABLE IF EXISTS especie;

CREATE TABLE `especie` (
  `idEspecie` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombreCientifico` varchar(30) NOT NULL,
  `nombreComun` varchar(30) NOT NULL,
  PRIMARY KEY (`idEspecie`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO especie VALUES("45","asdujkkjjk","tilapia");
INSERT INTO especie VALUES("46","asdujkkjjk","tilapiaioioio");
INSERT INTO especie VALUES("47","pol","anto");



DROP TABLE IF EXISTS estanque;

CREATE TABLE `estanque` (
  `idEstanque` bigint(20) NOT NULL AUTO_INCREMENT,
  `idFinca` bigint(20) NOT NULL,
  `numeroEstanque` varchar(30) NOT NULL,
  `totEspejoAgua` double NOT NULL,
  `profundPromedio` double NOT NULL,
  `volumAgua` double NOT NULL,
  `observacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idEstanque`),
  KEY `idFinca` (`idFinca`),
  CONSTRAINT `estanque_ibfk_1` FOREIGN KEY (`idFinca`) REFERENCES `finca` (`idFinca`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

INSERT INTO estanque VALUES("6","5","1","123","456","789","456");
INSERT INTO estanque VALUES("7","3","2","234","234","234","234");
INSERT INTO estanque VALUES("8","3","1","123","3456","6788998","3456");
INSERT INTO estanque VALUES("9","3","6","123","3456","6788998","sdfedwjkjkjkhjcddxr");



DROP TABLE IF EXISTS finca;

CREATE TABLE `finca` (
  `idFinca` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombreFinca` varchar(45) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Tamano` float NOT NULL,
  PRIMARY KEY (`idFinca`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO finca VALUES("3","SENA","3456","29");
INSERT INTO finca VALUES("4","PISCI","2147483647","111");
INSERT INTO finca VALUES("5","LOS MANGOS","2147483647","12");
INSERT INTO finca VALUES("6","ADSI","4567","1");
INSERT INTO finca VALUES("7","SDFGHJK","754","9");
INSERT INTO finca VALUES("8","TRE","3456543","4436");
INSERT INTO finca VALUES("9","UEYRRT","56","546");
INSERT INTO finca VALUES("10","LA MARIA","2147483647","1000");
INSERT INTO finca VALUES("11","POL","74","56");



DROP TABLE IF EXISTS inventario;

CREATE TABLE `inventario` (
  `idInventario` bigint(20) NOT NULL AUTO_INCREMENT,
  `idProducto` bigint(20) NOT NULL,
  `tipoNovedad` varchar(10) NOT NULL,
  `cantidad` double NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idInventario`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO inventario VALUES("3","1","Entrada","4000","2017-05-17","momomo");
INSERT INTO inventario VALUES("4","3","Entrada","100","2017-05-17","momomo");
INSERT INTO inventario VALUES("5","1","Entrada","44000","2017-05-17","d");
INSERT INTO inventario VALUES("6","1","Entrada","84000","2017-05-17","d");
INSERT INTO inventario VALUES("7","1","Entrada","124000","2017-05-17","d");
INSERT INTO inventario VALUES("8","1","Entrada","164000","2017-05-17","d");
INSERT INTO inventario VALUES("9","1","Salida","163000","2017-05-17","d");
INSERT INTO inventario VALUES("10","1","Salida","162000","2017-05-17","d");
INSERT INTO inventario VALUES("11","1","Salida","161000","2017-05-17","d");
INSERT INTO inventario VALUES("12","1","Salida","160000","2017-05-17","d");
INSERT INTO inventario VALUES("13","1","Salida","159000","2017-05-17","d");
INSERT INTO inventario VALUES("14","1","Salida","158000","2017-05-17","d");
INSERT INTO inventario VALUES("15","1","Salida","157000","2017-05-17","d");
INSERT INTO inventario VALUES("16","1","Entrada","4e27","2017-05-22","rff");



DROP TABLE IF EXISTS mortalidad;

CREATE TABLE `mortalidad` (
  `idMortalidad` bigint(20) NOT NULL AUTO_INCREMENT,
  `idSiembra` bigint(20) NOT NULL,
  `fecha` date NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `observacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idMortalidad`),
  KEY `idSiembra` (`idSiembra`),
  CONSTRAINT `mortalidad_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO mortalidad VALUES("4","28","2017-05-09","1000","dasdasd");
INSERT INTO mortalidad VALUES("5","29","2017-05-09","900","sssss");
INSERT INTO mortalidad VALUES("6","31","2017-05-17","60","aaa");
INSERT INTO mortalidad VALUES("7","31","2017-05-17","200","123");



DROP TABLE IF EXISTS muestreo;

CREATE TABLE `muestreo` (
  `idMuestreo` bigint(20) NOT NULL AUTO_INCREMENT,
  `idSiembra` bigint(20) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `numerPeces` double NOT NULL,
  `pesoPromedio` double NOT NULL,
  `unidadMedida` double NOT NULL,
  `observacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idMuestreo`),
  KEY `idSiembra` (`idSiembra`),
  CONSTRAINT `muestreo_ibfk_1` FOREIGN KEY (`idSiembra`) REFERENCES `siembra` (`idSiembra`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO muestreo VALUES("1","31","12:48:51","2017-05-17","123","123","123","123");



DROP TABLE IF EXISTS producto;

CREATE TABLE `producto` (
  `idProducto` bigint(20) NOT NULL AUTO_INCREMENT,
  `idTipoProducto` bigint(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `Cantidad` float NOT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `idTipoProducto` (`idTipoProducto`),
  CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`idTipoProducto`) REFERENCES `tipoproducto` (`idTipoProducto`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO producto VALUES("1","1","PURINITA","muy buen sabor","4e27");
INSERT INTO producto VALUES("2","1","CONSENTRADO","MUY BUENO","0");
INSERT INTO producto VALUES("3","2","INYECCIONES","PARA LA ASLUD","98");



DROP TABLE IF EXISTS sanidad;

CREATE TABLE `sanidad` (
  `idSanidad` bigint(20) NOT NULL AUTO_INCREMENT,
  `idProducto` bigint(20) NOT NULL,
  `dosis` float NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idSanidad`),
  KEY `idProducto` (`idProducto`),
  CONSTRAINT `sanidad_ibfk_1` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO sanidad VALUES("1","3","2","2017-05-30","edwf");



DROP TABLE IF EXISTS siembra;

CREATE TABLE `siembra` (
  `idSiembra` bigint(20) NOT NULL AUTO_INCREMENT,
  `idEspecie` bigint(20) NOT NULL,
  `idEstanque` bigint(20) NOT NULL,
  `lote` varchar(30) NOT NULL,
  `cantidAlevino` double NOT NULL,
  `densidad` double NOT NULL,
  `bioMasa` double NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `peso` double NOT NULL,
  `observacion` varchar(45) NOT NULL,
  PRIMARY KEY (`idSiembra`),
  KEY `idEspecie` (`idEspecie`),
  KEY `idEstanque` (`idEstanque`),
  CONSTRAINT `siembra_ibfk_1` FOREIGN KEY (`idEstanque`) REFERENCES `estanque` (`idEstanque`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `siembra_ibfk_2` FOREIGN KEY (`idEspecie`) REFERENCES `especie` (`idEspecie`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

INSERT INTO siembra VALUES("31","45","7","1","830","90","90","2017-05-17","10:23:03","123","dddd");



DROP TABLE IF EXISTS siembra_estanque;

CREATE TABLE `siembra_estanque` (
  `idSiembra_Estanque` bigint(20) NOT NULL AUTO_INCREMENT,
  `idSiembra` bigint(20) NOT NULL,
  `idEstanque` bigint(20) NOT NULL,
  PRIMARY KEY (`idSiembra_Estanque`),
  KEY `idSiembra` (`idSiembra`),
  KEY `idEstanque` (`idEstanque`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

INSERT INTO siembra_estanque VALUES("35","31","8");



DROP TABLE IF EXISTS tipoproducto;

CREATE TABLE `tipoproducto` (
  `idTipoProducto` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idTipoProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tipoproducto VALUES("1","ALIMENTO");
INSERT INTO tipoproducto VALUES("2","MEDICINA");



DROP TABLE IF EXISTS traslados;

CREATE TABLE `traslados` (
  `idTraslado` bigint(20) NOT NULL AUTO_INCREMENT,
  `idSiembra` bigint(20) NOT NULL,
  `idEstanque` bigint(20) NOT NULL,
  `numerPece` double NOT NULL,
  `peso` double NOT NULL,
  `tamano` double NOT NULL,
  `fecha` date NOT NULL,
  `observacion` varchar(100) NOT NULL,
  PRIMARY KEY (`idTraslado`),
  KEY `idSiembra` (`idSiembra`),
  KEY `idEstanque` (`idEstanque`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

INSERT INTO traslados VALUES("14","31","8","1000","1234","123","2017-05-17","dsd");



DROP TABLE IF EXISTS usuario;

CREATE TABLE `usuario` (
  `idUsuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO usuario VALUES("1","Administrador","Administrador","$2y$12$pzJAbm/VJZg7sVk07dDIeuADUzaZ128K6XqDkKEFrGzlYu5nt4t2K");
INSERT INTO usuario VALUES("2","Consulta","Consulta","");



SET FOREIGN_KEY_CHECKS=1;