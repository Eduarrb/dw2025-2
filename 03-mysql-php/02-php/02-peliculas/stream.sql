CREATE DATABASE  IF NOT EXISTS `stream` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `stream`;
-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: stream
-- ------------------------------------------------------
-- Server version	8.0.38

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actores`
--

DROP TABLE IF EXISTS `actores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actores` (
  `act_id` int unsigned NOT NULL AUTO_INCREMENT,
  `act_nombres` varchar(100) NOT NULL,
  `act_apellidos` varchar(100) NOT NULL,
  PRIMARY KEY (`act_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actores`
--

LOCK TABLES `actores` WRITE;
/*!40000 ALTER TABLE `actores` DISABLE KEYS */;
INSERT INTO `actores` VALUES (1,'Leonardo','DiCapriooooo'),(2,'Joseph','Gordon-Levitt'),(3,'Ellen','Page'),(4,'Tom','Hardy'),(5,'Christian','Bale'),(6,'Heath','Ledger'),(7,'Aaron','Eckhart'),(8,'Maggie','Gyllenhaal'),(9,'Matthew','McConaughey'),(10,'Anne','Hathaway'),(11,'Jessica','Chastain'),(12,'Michael','Caine'),(13,'Keanu','Reeves'),(14,'Laurence','Fishburne'),(15,'Carrie-Anne','Moss'),(16,'Hugo','Weaving'),(17,'John','Travolta'),(18,'Samuel L.','Jackson'),(19,'Uma','Thurman'),(20,'Bruce','Willis');
/*!40000 ALTER TABLE `actores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directores`
--

DROP TABLE IF EXISTS `directores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `directores` (
  `dire_id` int unsigned NOT NULL AUTO_INCREMENT,
  `dire_nombres` varchar(100) NOT NULL,
  `dire_apellidos` varchar(100) NOT NULL,
  PRIMARY KEY (`dire_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directores`
--

LOCK TABLES `directores` WRITE;
/*!40000 ALTER TABLE `directores` DISABLE KEYS */;
INSERT INTO `directores` VALUES (2,'Joe','Russo'),(3,'Christopher','Nolan'),(4,'Lana','Wachowski'),(5,'Steven','Spielberg'),(6,'James','Cameron'),(7,'Peter','Jackson'),(8,'Quentin','Tarantino'),(9,'Martin','Scorsese');
/*!40000 ALTER TABLE `directores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peliculas` (
  `peli_id` int unsigned NOT NULL AUTO_INCREMENT,
  `peli_dire_id` int unsigned DEFAULT NULL,
  `peli_nombre` varchar(50) NOT NULL,
  `peli_genero` varchar(30) NOT NULL,
  `peli_anio` date NOT NULL,
  `peli_restricciones` varchar(50) NOT NULL,
  `peli_imagen` text,
  PRIMARY KEY (`peli_id`),
  KEY `fk_direId` (`peli_dire_id`),
  CONSTRAINT `fk_direId` FOREIGN KEY (`peli_dire_id`) REFERENCES `directores` (`dire_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` VALUES (1,3,'Inception','Drama','2010-07-16','PG-13','https://es.web.img3.acsta.net/medias/nmedia/18/72/41/74/20198901.jpg'),(2,3,'The Dark Knight','Action','2008-07-18','PG-13','https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_FMjpg_UX1000_.jpg'),(3,3,'Interstellar','Sci-Fi','2014-11-07','PG-13','https://m.media-amazon.com/images/M/MV5BYzdjMDAxZGItMjI2My00ODA1LTlkNzItOWFjMDU5ZDJlYWY3XkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg'),(4,4,'The Matrix','Sci-Fi','1999-03-31','R','https://m.media-amazon.com/images/M/MV5BNGE1YzI4NzMtZTUxNi00Y2I5LTg2MmQtODE0NThmYTFmMDk0XkEyXkFqcGc@._V1_.jpg'),(5,NULL,'Pulp Fiction','Crime','1994-10-14','R',NULL),(6,NULL,'Forrest Gump','Drama','1994-07-06','PG-13',NULL),(7,NULL,'The Shawshank Redemption','Drama','1994-09-23','R',NULL),(8,NULL,'The Godfather','Crime','1972-03-24','R',NULL),(9,NULL,'The Lord of the Rings: The Return of the King','Fantasy','2003-12-17','PG-13',NULL),(10,NULL,'Gladiator','Action','2000-05-05','R',NULL),(11,NULL,'Avatar','Ciencia Ficción','2009-12-18','PG-13',NULL),(13,3,'The Dark Knight Rises','Acción','2012-07-20','PG-13','https://upload.wikimedia.org/wikipedia/en/thumb/1/1c/The_Dark_Knight_%282008_film%29.jpg/250px-The_Dark_Knight_%282008_film%29.jpg');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personajes`
--

DROP TABLE IF EXISTS `personajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personajes` (
  `per_peli_id` int unsigned NOT NULL,
  `per_act_id` int unsigned NOT NULL,
  `per_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personajes`
--

LOCK TABLES `personajes` WRITE;
/*!40000 ALTER TABLE `personajes` DISABLE KEYS */;
INSERT INTO `personajes` VALUES (1,1,'Dom Cobb'),(1,2,'Arthur'),(1,3,'Ariadne'),(1,4,'Eames'),(2,5,'Bruce Wayne / Batman'),(2,6,'Joker'),(2,7,'Harvey Dent / Two-Face'),(2,8,'Rachel Dawes'),(3,9,'Cooper'),(3,10,'Brand'),(3,11,'Murph'),(3,12,'Professor Brand'),(4,13,'Neo'),(4,14,'Morpheus'),(4,15,'Trinity'),(4,16,'Agent Smith'),(5,17,'Vincent Vega'),(5,18,'Jules Winnfield'),(5,19,'Mia Wallace'),(5,20,'Butch Coolidge');
/*!40000 ALTER TABLE `personajes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-10-20 19:39:21
