# ************************************************************
# Sequel Pro SQL dump
# Versión 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.21)
# Base de datos: cortex
# Tiempo de Generación: 2015-08-24 17:54:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla administradores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `administradores`;

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permisoCompleto` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `idUsuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_administradores_usuarios1_idx` (`idUsuario`),
  CONSTRAINT `fk_administradores_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `administradores` WRITE;
/*!40000 ALTER TABLE `administradores` DISABLE KEYS */;

INSERT INTO `administradores` (`id`, `permisoCompleto`, `created_at`, `updated_at`, `idUsuario`)
VALUES
	(2,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',2);

/*!40000 ALTER TABLE `administradores` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla citas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `citas`;

CREATE TABLE `citas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time DEFAULT NULL,
  `cliente` varchar(45) DEFAULT NULL,
  `horaInicio` datetime DEFAULT NULL,
  `horaFin` datetime DEFAULT NULL,
  `aceptada` tinyint(1) NOT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `idServicio` int(11) NOT NULL,
  `idOferta` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idTicket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_citas_servicios1_idx` (`idServicio`),
  KEY `fk_citas_ofertas1_idx` (`idOferta`),
  KEY `fk_citas_clientes1_idx` (`idCliente`),
  KEY `fk_citas_tiquets1_idx` (`idTicket`),
  CONSTRAINT `fk_citas_clientes1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_ofertas1` FOREIGN KEY (`idOferta`) REFERENCES `ofertas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_servicios1` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_tiquets1` FOREIGN KEY (`idTicket`) REFERENCES `tickets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `descripcion` text,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `idUsuario` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clientes_usuarios` (`idUsuario`),
  CONSTRAINT `fk_clientes_usuarios` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `telefono`, `descripcion`, `created_at`, `updated_at`, `idUsuario`)
VALUES
	(30,'Bloonde','Moreno Martín','955675566','','2015-08-19 19:29:27','2015-08-19 19:29:27',47),
	(31,'Prueba','prueba','955662165','','2015-08-19 20:39:26','2015-08-19 20:39:26',48),
	(32,'papa','pap','955667777','','2015-08-20 06:51:45','2015-08-20 06:51:45',49),
	(33,'Olga Minerva','Moreno Martín','955667777','','2015-08-20 08:47:43','2015-08-20 08:47:43',50),
	(34,'Olga Minerva','Moreno Martín 3','955662165','Tinte:\r\n\r\nPelo: \r\n\r\nMechas:','2015-08-20 10:03:27','2015-08-22 09:10:19',51),
	(35,'Toni','Toni','955667777','','2015-08-20 19:55:04','2015-08-20 19:55:04',52),
	(36,'clara','clara','955675566','','2015-08-20 20:05:33','2015-08-20 20:05:33',53),
	(37,'grillo','frillo','955667777','cheuvhqeiriqhofr\r\nerfkermfkemfklmqel\r\nwdjiuewhfheru\r\nkdvcdjhbvjdanvklnñaknfva','2015-08-22 09:09:09','2015-08-22 09:09:55',54),
	(38,'María','Benavente García','955667777','','2015-08-23 16:58:20','2015-08-23 16:58:20',55),
	(39,'Antonia','Jiménez','955675566','','2015-08-23 19:03:47','2015-08-23 19:03:47',56),
	(40,'Minerva','MmM','955662165','','2015-08-23 19:39:18','2015-08-23 19:39:18',57),
	(41,'hector','moreno','955667777','','2015-08-23 21:16:14','2015-08-23 21:16:14',58);

/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla eventos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `eventos`;

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaFin` time DEFAULT NULL,
  `diaCompleto` tinyint(1) NOT NULL DEFAULT '0',
  `color` varchar(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla galerias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `galerias`;

CREATE TABLE `galerias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `galerias` WRITE;
/*!40000 ALTER TABLE `galerias` DISABLE KEYS */;

INSERT INTO `galerias` (`id`, `nombre`, `created_at`, `updated_at`)
VALUES
	(23,'Nuestro Salón','2015-08-23 10:33:36','2015-08-23 10:33:36'),
	(25,'Peinados para pelo corto','2015-08-23 11:23:15','2015-08-23 11:23:15'),
	(26,'Peinados para pelo largo','2015-08-23 11:23:42','2015-08-23 11:23:42'),
	(31,'Peinados para novias','2015-08-23 11:41:22','2015-08-23 11:41:22');

/*!40000 ALTER TABLE `galerias` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla imagenes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `imagenes`;

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `idGaleria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_imagenes_galerias1_idx` (`idGaleria`),
  CONSTRAINT `fk_imagenes_galerias1` FOREIGN KEY (`idGaleria`) REFERENCES `galerias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;

INSERT INTO `imagenes` (`id`, `nombre`, `created_at`, `updated_at`, `idGaleria`)
VALUES
	(15,'Cortex-34.jpg','2015-08-20 18:32:58','2015-08-20 18:32:58',NULL),
	(16,'Cortex-35.jpg','2015-08-20 19:56:00','2015-08-20 19:56:00',NULL),
	(17,'Cortex-36.jpg','2015-08-20 20:19:49','2015-08-20 20:19:49',NULL),
	(48,'Cortex-37.jpg','2015-08-23 09:33:13','2015-08-23 09:33:13',NULL),
	(50,'Cortex-Galeria-23.jpg','2015-08-23 10:33:37','2015-08-23 10:33:37',23),
	(51,'Cortex-Imagen-bxkoy7be4q.jpg','2015-08-23 11:08:22','2015-08-23 11:08:22',23),
	(52,'Cortex-Imagen-ct5f7t91re.jpg','2015-08-23 11:08:45','2015-08-23 11:08:45',23),
	(53,'Cortex-Imagen-264hnb7a6t.jpg','2015-08-23 11:09:04','2015-08-23 11:09:04',23),
	(54,'Cortex-Imagen-a2v9l3mwhq.jpg','2015-08-23 11:09:15','2015-08-23 11:09:15',23),
	(55,'Cortex-Imagen-9rfs3iwhm1.jpg','2015-08-23 11:09:32','2015-08-23 11:09:32',23),
	(56,'Cortex-Imagen-jkmf1vwkrh.jpg','2015-08-23 11:10:35','2015-08-23 11:10:35',23),
	(57,'Cortex-Imagen-4zfwc8xw1h.jpg','2015-08-23 11:10:56','2015-08-23 11:10:56',23),
	(58,'Cortex-Imagen-gt4h92wbks.jpg','2015-08-23 11:11:07','2015-08-23 11:11:07',23),
	(59,'Cortex-Imagen-ysd7ezd11i.jpg','2015-08-23 11:12:06','2015-08-23 11:12:06',23),
	(60,'Cortex-Galeria-25.jpg','2015-08-23 11:23:15','2015-08-23 11:23:15',25),
	(61,'Cortex-Galeria-26.jpg','2015-08-23 11:23:42','2015-08-23 11:23:42',26),
	(66,'Cortex-Galeria-31.jpg','2015-08-23 11:41:23','2015-08-23 11:41:23',31),
	(67,'Cortex-Producto-2.jpg','2015-08-23 18:36:15','2015-08-23 18:36:15',NULL),
	(68,'Cortex-Producto-3.jpg','2015-08-23 19:20:58','2015-08-23 19:20:58',NULL),
	(71,'Cortex-Producto-6.jpg','2015-08-23 21:18:24','2015-08-23 21:18:24',NULL);

/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla ofertas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ofertas`;

CREATE TABLE `ofertas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text NOT NULL,
  `porcentaje` double NOT NULL,
  `fechaFin` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ofertas` WRITE;
/*!40000 ALTER TABLE `ofertas` DISABLE KEYS */;

INSERT INTO `ofertas` (`id`, `nombre`, `porcentaje`, `fechaFin`, `created_at`, `updated_at`)
VALUES
	(2,'Martes de laca',1,'0000-00-00','2015-08-20 07:26:51','2015-08-20 07:26:51'),
	(3,'2x1 en Mascarillas',5,'0000-00-00','2015-08-20 07:27:37','2015-08-20 07:27:37'),
	(4,'prueba',7,'0000-00-00','2015-08-20 07:28:25','2015-08-20 07:28:25'),
	(5,'Nails',1,'2015-08-05','2015-08-20 07:29:30','2015-08-20 07:29:30'),
	(7,'Probando',1,'2015-08-27','2015-08-20 07:32:12','2015-08-20 07:32:12'),
	(9,'Olga Minerva',10,'0000-00-00','2015-08-20 08:28:46','2015-08-20 08:28:46'),
	(10,'todo',9,'0000-00-00','2015-08-20 08:29:18','2015-08-20 08:29:18'),
	(11,'Lunes locos',80,'0000-00-00','2015-08-20 08:29:35','2015-08-20 08:29:35'),
	(12,'dckmekcme',0,'0000-00-00','2015-08-20 08:29:43','2015-08-20 08:29:43'),
	(13,'cejcmenkjcne',60,'0000-00-00','2015-08-20 08:29:53','2015-08-20 08:29:53'),
	(14,'dcejnwc',12,'0000-00-00','2015-08-20 08:29:58','2015-08-20 08:29:58');

/*!40000 ALTER TABLE `ofertas` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla productos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `codigo` varchar(45) DEFAULT NULL,
  `cantidadActual` int(11) NOT NULL,
  `cantidadMinima` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `iva` double NOT NULL DEFAULT '21',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `idImagen` int(11) DEFAULT NULL,
  `publicado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_productos_imagenes1_idx` (`idImagen`),
  CONSTRAINT `fk_productos_imagenes1` FOREIGN KEY (`idImagen`) REFERENCES `imagenes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;

INSERT INTO `productos` (`id`, `nombre`, `codigo`, `cantidadActual`, `cantidadMinima`, `descripcion`, `precio`, `iva`, `created_at`, `updated_at`, `idImagen`, `publicado`)
VALUES
	(2,'Acondicionador 2','fjkv876f',5,3,'hjbuhjlniluhjlu\"\"wjfnvrjhv\"\"\"\"\"\"',4.5,21,'2015-08-23 18:36:15','2015-08-24 07:17:27',67,1),
	(3,'Laca Revlon','rejn840',5,4,'nrjnerb`qon`v',6,21,'2015-08-23 19:20:57','2015-08-23 19:20:58',68,0),
	(6,'Cepillo redondo púas blandas','jef79ewf',3,2,'Nuestro cepillo...\"',6,21,'2015-08-23 21:18:24','2015-08-24 07:15:16',71,0);

/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla productosTickets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `productosTickets`;

CREATE TABLE `productosTickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cantidad` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `iva` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `idProducto` int(11) DEFAULT NULL,
  `idTicket` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pedidosTiquets_productos1_idx` (`idProducto`),
  KEY `fk_productosTiquets_tickets1_idx` (`idTicket`),
  CONSTRAINT `fk_pedidosTiquets_productos1` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_productosTiquets_tickets1` FOREIGN KEY (`idTicket`) REFERENCES `tickets` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla servicios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `servicios`;

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `precio` double NOT NULL,
  `iva` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;

INSERT INTO `servicios` (`id`, `nombre`, `precio`, `iva`, `created_at`, `updated_at`)
VALUES
	(1,'Lavar-Cortar',24,21,'0000-00-00 00:00:00','2015-08-19 12:00:38'),
	(2,'Peinar',10,21,'0000-00-00 00:00:00','2015-08-19 11:52:38'),
	(16,'Lavar-Cortar-Peinar',18,21,'2015-08-19 10:17:50','2015-08-19 11:53:23'),
	(17,'Mechas',40,21,'2015-08-19 10:17:56','2015-08-19 11:55:12'),
	(18,'Tinte-Cortar-Peinar',4,21,'2015-08-19 10:18:01','2015-08-19 11:55:54'),
	(28,'Lavar-Peinar',10,21,'2015-08-19 18:48:32','2015-08-19 18:48:32'),
	(30,'Tinte',30,21,'2015-08-19 18:49:00','2015-08-19 18:49:00'),
	(31,'Corte niño',9,21,'2015-08-19 18:49:14','2015-08-19 18:49:14'),
	(32,'Corte niña',7,21,'2015-08-19 18:49:24','2015-08-19 18:49:24'),
	(37,'Plumas',8,21,'2015-08-19 19:02:17','2015-08-19 19:02:17'),
	(39,'Reflejos',30,21,'2015-08-20 06:57:59','2015-08-20 06:57:59');

/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla tickets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `total` double DEFAULT NULL,
  `iva` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL DEFAULT '',
  `password` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` text,
  `idImagen` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_usuarios_imagenes1_idx` (`idImagen`),
  CONSTRAINT `fk_usuarios_imagenes1` FOREIGN KEY (`idImagen`) REFERENCES `imagenes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`, `remember_token`, `idImagen`)
VALUES
	(2,'Chari\n','','chari@email.com','0000-00-00 00:00:00','0000-00-00 00:00:00',NULL,NULL),
	(47,'olga','$2y$10$GTra31EDMkAEImo4P5Z2COf/AUeYhy6S/lEdzg','omoreno@bloonde.com','2015-08-19 19:29:27','2015-08-19 19:29:27',NULL,NULL),
	(48,'prueba','$2y$10$6mYh1AZomZegNvzPlLYvquJEULbioboYa0HtSH','prueba@prueba.com','2015-08-19 20:39:25','2015-08-19 20:39:25',NULL,NULL),
	(49,'papa','$2y$10$ACDvfJKSXhDNqjvVa0BdUuYR0KBVV8mUAXdSH8','papa@email.com','2015-08-20 06:51:45','2015-08-20 06:51:45',NULL,NULL),
	(50,'admin','$2y$10$Iqf50MVjrzaubTTAxLV8qOv8Ip/T7IL/tqTgU6','admin@admin.com','2015-08-20 08:47:43','2015-08-20 08:47:43',NULL,NULL),
	(51,'Olga Minerva','$2y$10$fnTjHuHXsauv1/7NT6DcIOZC.cfeaeKaTSKA.F','olga@mail.com','2015-08-20 10:03:27','2015-08-20 19:29:23',NULL,15),
	(52,'toni','$2y$10$msrCInz7elwszlI8vWCFQ.Bb9iBYd9vuTEQ3ch','toni@gmail.com','2015-08-20 19:55:04','2015-08-20 19:56:00',NULL,16),
	(53,'Clara','$2y$10$SgHNxw9rIGkOT95nOsyGIeNQLAd/wCOFKcHM5z','clara@email.com','2015-08-20 20:05:33','2015-08-20 20:19:49',NULL,17),
	(54,'olga3emes','$2y$10$Z24AoxO59VjrWm/qFxEeIOFYAaQtB5J7mz9aUI','grillo@email.com','2015-08-22 09:09:09','2015-08-23 09:33:31',NULL,48),
	(55,'maria','$2y$10$N4FVrFVJZe03.WFgTUNX/eGxxOxuLgAYK6QFR4','maria@gmail.com','2015-08-23 16:58:20','2015-08-23 16:58:20',NULL,NULL),
	(56,'Antonia','$2y$10$KnTJ7YGLm24id.QvBBQcKuVthgHycncBisUbQg','antonia@email.com','2015-08-23 19:03:47','2015-08-23 19:03:47',NULL,NULL),
	(57,'minerva','$2y$10$.nM6xNYiTAHvXqIBLxEI6uFD/1YGnOW0f9WbJD','minerva@email.com','2015-08-23 19:39:18','2015-08-23 19:39:18',NULL,NULL),
	(58,'hector','$2y$10$uB5wVFEUhLUZLNpuGKXwpOKNc3w.JSKDYzArdD','hector@email.com','2015-08-23 21:16:14','2015-08-23 21:16:14',NULL,NULL);

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
