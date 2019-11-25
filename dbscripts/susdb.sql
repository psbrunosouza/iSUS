-- MySQL dump 10.13  Distrib 8.0.16, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: susdb
-- ------------------------------------------------------
-- Server version	5.7.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `consultas`
--

DROP TABLE IF EXISTS `consultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `consultas` (
  `codConsultas` int(11) NOT NULL AUTO_INCREMENT,
  `dataAtdm` date NOT NULL,
  `horaAtdm` time NOT NULL,
  `cpfUsuario` varchar(11) NOT NULL,
  `cpfMedico` varchar(11) NOT NULL,
  `codEsp` int(11) NOT NULL,
  PRIMARY KEY (`codConsultas`),
  KEY `cpfUsuario` (`cpfUsuario`),
  KEY `cpfMedico` (`cpfMedico`),
  KEY `codEsp` (`codEsp`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultas`
--

LOCK TABLES `consultas` WRITE;
/*!40000 ALTER TABLE `consultas` DISABLE KEYS */;
INSERT INTO `consultas` VALUES (1,'2019-11-25','05:00:00','00000000000','44444444444',4),(2,'2019-11-25','08:00:00','00000000000','44444444444',4),(3,'2019-11-25','12:00:00','00000000000','44444444444',4),(4,'2019-11-26','08:00:00','00000000000','44444444444',4),(5,'2019-11-27','08:00:00','00000000000','11111111111',1),(6,'2019-11-27','14:00:00','00000000000','11111111111',1),(7,'2019-11-27','16:00:00','00000000000','11111111111',1),(8,'2019-11-25','14:00:00','00000000000','22222222222',2),(9,'2019-11-25','16:00:00','00000000000','22222222222',2),(10,'2019-11-26','14:00:00','00000000000','22222222222',2),(11,'2019-11-27','18:00:00','00000000000','22222222222',2),(12,'2019-11-26','20:00:00','00000000000','44444444444',4),(13,'2019-11-26','21:00:00','00000000000','44444444444',4),(16,'2019-11-30','06:00:00','77777777777','33333333333',3),(15,'2019-11-30','08:00:00','00000000000','33333333333',3);
/*!40000 ALTER TABLE `consultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `especialidades` (
  `codEsp` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEsp` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`codEsp`)
) ENGINE=MyISAM AUTO_INCREMENT=10000 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidades`
--

LOCK TABLES `especialidades` WRITE;
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
INSERT INTO `especialidades` VALUES (1,'Urologista','Urologia é uma especialidade cirúrgica da medicina que trata do trato urinário de \nhomens e de mulheres e do sistema reprodutor das pessoas do sexo masculino.'),(2,'Cardiologista','Cardiologia é a especialidade médica que se ocupa do diagnóstico e tratamento \ndas doenças que acometem o coração bem como os outros componentes do sistema circulatório.'),(3,'Neurologista','O neurologista, médico que se especializou em neurologia, \né treinado para investigar, diagnosticar e tratar distúrbios neurológicos.'),(4,'Ginecologista','A ginecologia é a prática da medicina que lida diretamente\n com a saúde do aparelho reprodutor feminino (vagina, útero e ovários) e mamas.'),(5,'Pediatra','O pediatra é o médico com formação dirigida exclusivamente para os cuidados da criança e do adolescente.'),(9999,'Sem_Especialidade','Usuario não é um médico');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `usuarios` (
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tipo` char(3) NOT NULL,
  `codEsp` int(11) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `codEsp` (`codEsp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('11111111111','25d55ad283aa400af464c76d713c07ad','Batman','im@batman.com','med',1),('22222222222','25d55ad283aa400af464c76d713c07ad','Tony Stark','eusoufoda@eusoufoda.com','med',2),('33333333333','25d55ad283aa400af464c76d713c07ad','Bruce Banner','eusouhulk@gmail.com','med',3),('44444444444','25d55ad283aa400af464c76d713c07ad','Mulher Maravilha','mulhermaravilha@girl.com','med',4),('77777777777','25d55ad283aa400af464c76d713c07ad','Joao dos Santos','joao@joao.com','usr',9999);
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

-- Dump completed on 2019-11-25  8:46:10
