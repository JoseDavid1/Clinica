CREATE DATABASE  IF NOT EXISTS `clinica` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `clinica`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: clinica
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

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
-- Table structure for table `alergias`
--

DROP TABLE IF EXISTS `alergias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alergias` (
  `idAlergias` int(11) NOT NULL AUTO_INCREMENT,
  `NombreAlergia` varchar(145) DEFAULT NULL,
  `Descripcion` text,
  PRIMARY KEY (`idAlergias`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alergias`
--

LOCK TABLES `alergias` WRITE;
/*!40000 ALTER TABLE `alergias` DISABLE KEYS */;
INSERT INTO `alergias` VALUES (1,'Prueba nombre','Descripcion de prueba'),(2,'Alergia #2','Descripcion');
/*!40000 ALTER TABLE `alergias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alergias_has_paciente`
--

DROP TABLE IF EXISTS `alergias_has_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alergias_has_paciente` (
  `Alergias_idAlergias` int(11) NOT NULL,
  `Paciente_idPaciente` int(11) NOT NULL,
  `fecha` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Alergias_idAlergias`,`Paciente_idPaciente`),
  KEY `fk_Alergias_has_Paciente_Paciente1_idx` (`Paciente_idPaciente`),
  KEY `fk_Alergias_has_Paciente_Alergias1_idx` (`Alergias_idAlergias`),
  CONSTRAINT `fk_Alergias_has_Paciente_Alergias1` FOREIGN KEY (`Alergias_idAlergias`) REFERENCES `alergias` (`idAlergias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alergias_has_Paciente_Paciente1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alergias_has_paciente`
--

LOCK TABLES `alergias_has_paciente` WRITE;
/*!40000 ALTER TABLE `alergias_has_paciente` DISABLE KEYS */;
INSERT INTO `alergias_has_paciente` VALUES (1,1,'24/09/2018');
/*!40000 ALTER TABLE `alergias_has_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `antecedentes`
--

DROP TABLE IF EXISTS `antecedentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `antecedentes` (
  `idAntecedentes` int(11) NOT NULL AUTO_INCREMENT,
  `Medicos` text,
  `Quirurgicos` text,
  `Traumaticos` text,
  `Familiares` text,
  `Ginecologicos` text,
  `Nacimiento` text,
  `Paciente_idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`idAntecedentes`,`Paciente_idPaciente`),
  KEY `fk_Antecedentes_Paciente1_idx` (`Paciente_idPaciente`),
  CONSTRAINT `fk_Antecedentes_Paciente1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `antecedentes`
--

LOCK TABLES `antecedentes` WRITE;
/*!40000 ALTER TABLE `antecedentes` DISABLE KEYS */;
INSERT INTO `antecedentes` VALUES (1,'','Operado por Apendisitis','Ninguno','Diabetes','Ninguno','asdfghjkl',1),(6,'Saber','Ninguno','Adriana','Peligro de extincion (calentamiento Global)','Ninguno','Ninguno',2);
/*!40000 ALTER TABLE `antecedentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consulta`
--

DROP TABLE IF EXISTS `consulta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consulta` (
  `idConsulta` int(11) NOT NULL AUTO_INCREMENT,
  `FechaConsuta` varchar(10) DEFAULT NULL,
  `MotivoConsulta` text,
  `HistoriaEnfermedad` text,
  `Diagnostico` text,
  `TratamientoRecomendado` text,
  `Observaciones` text,
  `Paciente_idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`idConsulta`,`Paciente_idPaciente`),
  KEY `fk_Consulta_Paciente_idx` (`Paciente_idPaciente`),
  CONSTRAINT `fk_Consulta_Paciente` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consulta`
--

LOCK TABLES `consulta` WRITE;
/*!40000 ALTER TABLE `consulta` DISABLE KEYS */;
INSERT INTO `consulta` VALUES (1,'18/09/2018','Nueva Consulta, motivo','Nueva Historia','Nuevo Diagnostico','Tratamiento recomendado',NULL,1),(2,'19/09/2018','Consulta 2','Historia','Diagnostico','Tratamiento',NULL,1),(3,'18/09/2018','adsfasdf','adfkl','gdfg','gdfg','',2),(4,'18/09/2018','adfad','fsdf','gdfg','hghfjhgjghj',NULL,2),(5,'18/09/2018','Probando el formulario largo','','','','UhfFLO1ei7',1),(6,'18/09/2018','','','','','I5qjPPPsFH',1),(7,'26/09/2018','','','','Tomer en sus tiempos, no comida con excesiva grasa o condimentos','jSlvxFZYgX',1),(8,'26/09/2018','','','','Comer en sus tiempos, comida con poca grasa y poco condimento','J326vK5C5f',1),(9,'29/09/2018','','','','Esomeprazol todos los dias','yDOD0xXHJg',1),(10,'','','','','1.- Cicatren  40 mgs. \r\n1 capsula en ayunas y antes d acostarse.\r\n\r\nMosaflat 5 mgs.\r\n1 tableta antes de cada comida por dos meses.','cYfDAzOum4',1),(11,'29/09/2018','','','','dksdjskeeioaioieio\r\njkshadhajkejk\r\nklasjklaskjdkjlasdlk','vI58BdbUBw',1),(12,'','','','','',NULL,1),(13,'','','','','','OX4vKeC7NY',1),(14,'','','','','',NULL,1),(15,'05/10/2018','','','','Probando receta normal',NULL,1),(16,'','','','','',NULL,1),(17,'','','','','',NULL,1),(18,'05/10/2018','','','','esto',NULL,1),(19,'05/10/2018','','','','Probando ventana emergente',NULL,1),(20,'05/10/2018','','','','Ventana emergente v2',NULL,1),(21,'05/10/2018','','','','Probando nuevamente, ventana emergente',NULL,1),(22,'05/10/2018','','','','Probando nuevamente, ventana emergente x2',NULL,1),(23,'05/10/2018','','','','Probando nuevamente, ventana emergente x2 Consulta extensa','Ao4CEWtAzx',1),(24,'05/10/2018','','','','Probando nuevamente, ventana emergente x3 Consulta extensa','5TCw44z8HE',1);
/*!40000 ALTER TABLE `consulta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examenfisico`
--

DROP TABLE IF EXISTS `examenfisico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examenfisico` (
  `idExamenfisico` int(11) NOT NULL AUTO_INCREMENT,
  `PresionArterial` varchar(45) DEFAULT NULL,
  `FrecuenciaCardiaca` varchar(45) DEFAULT NULL,
  `Temperatura` int(11) DEFAULT NULL,
  `SaturacionOxigeno` varchar(45) DEFAULT NULL,
  `FrecuenciaRespiratoria` int(11) DEFAULT NULL,
  `PielFameras` varchar(235) DEFAULT NULL,
  `Cabeza` varchar(235) DEFAULT NULL,
  `Cuello` varchar(235) DEFAULT NULL,
  `Torax` varchar(235) DEFAULT NULL,
  `Pulmones` varchar(235) DEFAULT NULL,
  `Corazon` varchar(235) DEFAULT NULL,
  `Abdomen` varchar(235) DEFAULT NULL,
  `Ginecologico` varchar(235) DEFAULT NULL,
  `Extremidades` varchar(235) DEFAULT NULL,
  `Neurologico` varchar(45) DEFAULT NULL,
  `Consulta_idConsulta` int(11) NOT NULL,
  `Consulta_Paciente_idPaciente` int(11) NOT NULL,
  PRIMARY KEY (`idExamenfisico`,`Consulta_idConsulta`,`Consulta_Paciente_idPaciente`),
  KEY `fk_Examenfisico_Consulta1_idx` (`Consulta_idConsulta`,`Consulta_Paciente_idPaciente`),
  CONSTRAINT `fk_Examenfisico_Consulta1` FOREIGN KEY (`Consulta_idConsulta`, `Consulta_Paciente_idPaciente`) REFERENCES `consulta` (`idConsulta`, `Paciente_idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examenfisico`
--

LOCK TABLES `examenfisico` WRITE;
/*!40000 ALTER TABLE `examenfisico` DISABLE KEYS */;
INSERT INTO `examenfisico` VALUES (1,'','',0,'',0,'','','','','','','','','','',7,1),(2,'','',0,'',0,'','','','','','','','','','',8,1),(3,'','',0,'',0,'','','','','','','','','','',9,1),(4,'','',0,'',0,'','','','','','','','','','',10,1),(5,'','',0,'',0,'','','','','','','','','','',11,1),(6,'','',0,'',0,'','','','','','','','','','',13,1),(7,'','',0,'',0,'','','','','','','','','','',23,1),(8,'','',0,'',0,'','','','','','','','','','',24,1);
/*!40000 ALTER TABLE `examenfisico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paciente` (
  `idPaciente` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellido` varchar(255) DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `Direccion` varchar(245) DEFAULT NULL,
  `EstadoCivil` varchar(45) DEFAULT NULL,
  `Religion` varchar(45) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Originario` varchar(45) DEFAULT NULL,
  `Residente` varchar(45) DEFAULT NULL,
  `nacimiento` varchar(45) DEFAULT NULL,
  `primeraVisita` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`idPaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'Jean Oswaldo','Linares Guerra','Masculino','Pinares del Norte,Zona 18','Soltero','Otra',23423233,'Guatemala','Guatemala','20/01/1997',NULL),(2,'Luis Guillermo','Ortiz Urrutia','Masculino','Zona 6','Soltero','Otra',44448888,'Guatemala','Guatemala','19/09/1995',NULL),(3,'Paciente de prueba','Apellidos ','Masculino','Guatemala','Soltero','CatÃ³lica',44448888,'Guatemala','Guatemala','05/10/2018','05/10/2018');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipousuario` (
  `idTipoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idTipoUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuario`
--

LOCK TABLES `tipousuario` WRITE;
/*!40000 ALTER TABLE `tipousuario` DISABLE KEYS */;
INSERT INTO `tipousuario` VALUES (1,'Super Usuario'),(2,'Ingresar,Consultar'),(3,'Consultar');
/*!40000 ALTER TABLE `tipousuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(65) DEFAULT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Password` text,
  `Correo` varchar(45) DEFAULT NULL,
  `TipoUsuario_idTipoUsuario` int(11) NOT NULL,
  PRIMARY KEY (`idUsuarios`,`TipoUsuario_idTipoUsuario`),
  KEY `fk_Usuarios_TipoUsuario1_idx` (`TipoUsuario_idTipoUsuario`),
  CONSTRAINT `fk_Usuarios_TipoUsuario1` FOREIGN KEY (`TipoUsuario_idTipoUsuario`) REFERENCES `tipousuario` (`idTipoUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Oswaldo Linares','olinares','*18249A23AAFC007E87C3A27505EE5E93DDC0F584','linares.guerra@gmail.com',1),(2,'Oswaldo Guerra','Olinares','*18249A23AAFC007E87C3A27505EE5E93DDC0F584','jean_linares@hotmail.es',3);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-06 15:41:21
