-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: app_bdd
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.16.04.2

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
-- Table structure for table `Produits`
--

DROP TABLE IF EXISTS `Produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Produits` (
  `idProduits` int(11) NOT NULL AUTO_INCREMENT,
  `nameProduits` varchar(100) DEFAULT NULL,
  `descriptions` varchar(200) DEFAULT NULL,
  `dateProduits` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imageProduits` varchar(100) DEFAULT NULL,
  `price` decimal(3,2) NOT NULL,
  PRIMARY KEY (`idProduits`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Produits`
--

LOCK TABLES `Produits` WRITE;
/*!40000 ALTER TABLE `Produits` DISABLE KEYS */;
INSERT INTO `Produits` VALUES (3,'orange','agrume aigre','2019-12-13 12:10:32',NULL,3.00),(5,'cerise','hum  la liqueur de cerise','2019-12-13 08:01:29',NULL,3.00),(6,'pomme de terre','vodka ?','2019-12-13 08:05:54',NULL,1.00),(7,'abricot','beuuurk','2019-12-13 08:09:24',NULL,3.00),(8,'gingembre','miam','2019-12-13 09:05:13',NULL,1.00),(9,'aubergine','en caviar biensur','2019-12-13 09:06:21',NULL,2.00),(10,'banane','fruit jaune','2019-12-13 09:07:58',NULL,1.00),(11,'citron','agrume jaune','2019-12-13 09:54:08',NULL,2.00),(13,'potiron','','2019-12-13 12:11:49',NULL,5.00),(14,'letchi rÃ©unnionnais','','2019-12-13 12:12:15',NULL,6.00),(16,'myrtille','','2019-12-13 12:12:55',NULL,3.00),(17,'fraise','','2019-12-13 12:13:07',NULL,2.00),(18,'mangue','fruits dÃ©licieux juteux miam','2019-12-13 14:53:40',NULL,4.00);
/*!40000 ALTER TABLE `Produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(100) NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'ADMIN'),(2,'USER');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `surnameUser` varchar(100) NOT NULL,
  `mailUser` varchar(100) NOT NULL,
  `idRole` int(11) NOT NULL,
  `mdpUser` varchar(20) NOT NULL,
  PRIMARY KEY (`idUser`),
  KEY `fk_user` (`idRole`),
  CONSTRAINT `fk_user` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'mangata','tony','mangata.tony@gmail.com',1,'mdp'),(3,'Simon','Chris','simon.chris@gmail.com',2,'mdp2');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-13 14:56:42
