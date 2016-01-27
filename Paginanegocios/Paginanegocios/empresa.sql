CREATE DATABASE  IF NOT EXISTS `empresa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `empresa`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: empresa
-- ------------------------------------------------------
-- Server version	5.6.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `carrito`
--

DROP TABLE IF EXISTS `carrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrito` (
  `CrtId` int(11) NOT NULL AUTO_INCREMENT,
  `UsrID` int(11) NOT NULL,
  `CrtfchCreacion` datetime DEFAULT NULL,
  `CrtModificacion` datetime DEFAULT NULL,
  `CrtEstado` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`CrtId`),
  UNIQUE KEY `CrtId_UNIQUE` (`CrtId`),
  KEY `UsrID_idx` (`UsrID`),
  CONSTRAINT `asd` FOREIGN KEY (`UsrID`) REFERENCES `usuarios` (`UsrID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `carritodetalle`
--

DROP TABLE IF EXISTS `carritodetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carritodetalle` (
  `CrtId` int(11) NOT NULL,
  `PrtId` int(11) NOT NULL,
  `CrtDtlCantidad` int(11) DEFAULT NULL,
  `CrtDtlPrecio` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`CrtId`,`PrtId`),
  KEY `tres_idx` (`PrtId`),
  CONSTRAINT `dos` FOREIGN KEY (`CrtId`) REFERENCES `carrito` (`CrtId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tres` FOREIGN KEY (`PrtId`) REFERENCES `producto` (`PrtId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `detallepedido`
--

DROP TABLE IF EXISTS `detallepedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detallepedido` (
  `PddID` int(11) NOT NULL,
  `PrtId` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `PrecioVenta` decimal(10,2) NOT NULL,
  PRIMARY KEY (`PddID`,`PrtId`),
  KEY `PrtId_idx` (`PrtId`),
  CONSTRAINT `PddID` FOREIGN KEY (`PddID`) REFERENCES `pedido` (`PddID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `PrtId` FOREIGN KEY (`PrtId`) REFERENCES `producto` (`PrtId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pedido`
--

DROP TABLE IF EXISTS `pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedido` (
  `PddID` int(11) NOT NULL AUTO_INCREMENT,
  `UsrID` int(11) NOT NULL,
  `PddfchRegistro` datetime DEFAULT NULL,
  PRIMARY KEY (`PddID`),
  UNIQUE KEY `PddID_UNIQUE` (`PddID`),
  KEY `UsrID_idx` (`UsrID`),
  CONSTRAINT `UsrID` FOREIGN KEY (`UsrID`) REFERENCES `usuarios` (`UsrID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `producto` (
  `PrtId` int(11) NOT NULL AUTO_INCREMENT,
  `PrtCodigo` varchar(20) NOT NULL,
  `PtrNombre` varchar(45) NOT NULL,
  `PrtPrecio` decimal(10,2) NOT NULL,
  `PtrExistencia` int(11) NOT NULL,
  `PtrFchRegistro` datetime NOT NULL,
  PRIMARY KEY (`PrtId`),
  UNIQUE KEY `PrtId_UNIQUE` (`PrtId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `UsrID` int(11) NOT NULL AUTO_INCREMENT,
  `UsrName` varchar(30) NOT NULL,
  `UsrLastName` varchar(30) DEFAULT NULL,
  `UsrCorreo` varchar(30) NOT NULL,
  `UsrPwd` varchar(64) NOT NULL,
  `UsrFchRegistro` datetime NOT NULL,
  `UsrUltimoIngreso` datetime DEFAULT NULL,
  PRIMARY KEY (`UsrID`),
  UNIQUE KEY `UsrID_UNIQUE` (`UsrID`),
  UNIQUE KEY `UsrCorreo_UNIQUE` (`UsrCorreo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping routines for database 'empresa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-08  0:07:03
