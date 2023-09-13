-- MySQL dump 10.13  Distrib 8.0.34, for Linux (x86_64)
--
-- Host: localhost    Database: blog_db
-- ------------------------------------------------------
-- Server version	8.0.34-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `specialization` varchar(100) DEFAULT NULL,
  `picture` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `authors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,1,'Redes, Progrmacion, Virtualizacion','','2023-08-17 17:59:19',NULL);
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_category` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'desarrollo web'),(2,'programacion'),(5,'redes sociales'),(4,'seguridad informática'),(1,'tecnologia'),(6,'virtualizacion');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_id` int NOT NULL,
  `user_id` int NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modied_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,2,1,'primer comentario del post navegadores','2023-08-29 17:08:59','2023-08-29 17:08:59'),(2,8,1,'New comment','2023-08-29 17:36:57','2023-08-29 17:36:57'),(3,2,1,'nuevo comentario','2023-09-01 18:38:40','2023-09-01 18:38:40');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content_posts`
--

DROP TABLE IF EXISTS `content_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `content_posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `post_id` int NOT NULL,
  `status` char(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `content_posts_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_posts`
--

LOCK TABLES `content_posts` WRITE;
/*!40000 ALTER TABLE `content_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `labels`
--

DROP TABLE IF EXISTS `labels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `labels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `color` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labels`
--

LOCK TABLES `labels` WRITE;
/*!40000 ALTER TABLE `labels` DISABLE KEYS */;
INSERT INTO `labels` VALUES (1,'hacking etico','red'),(2,'redes inalambricas','blue'),(3,'internet','yellow'),(4,'inteligencia artificial','orange'),(5,'marketing','green');
/*!40000 ALTER TABLE `labels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_label`
--

DROP TABLE IF EXISTS `post_label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_label` (
  `post_id` int NOT NULL,
  `label_id` int NOT NULL,
  PRIMARY KEY (`post_id`,`label_id`),
  KEY `label_id` (`label_id`),
  CONSTRAINT `post_label_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `post_label_ibfk_2` FOREIGN KEY (`label_id`) REFERENCES `labels` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_label`
--

LOCK TABLES `post_label` WRITE;
/*!40000 ALTER TABLE `post_label` DISABLE KEYS */;
INSERT INTO `post_label` VALUES (1,1),(1,2),(1,3),(2,3),(3,3),(4,3),(8,3),(14,3),(7,4),(8,4),(9,5);
/*!40000 ALTER TABLE `post_label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int NOT NULL,
  `views` int DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT (false),
  `featured_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`),
  KEY `author_id` (`author_id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`),
  CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Seguridad digital','La seguridad digital se refiere a las medidas y prácticas diseñadas para proteger la información y los sistemas digitales de amenazas, ataques y accesos no autorizados.',1,4,NULL,'seguridad-digital.html',1,'','2023-08-17 18:11:02',NULL),(2,'Navegadores','Nos permiten acceder a todo tipo de información y realizar diversas tareas en línea, desde el computador o desde el telefono movil.',1,3,NULL,'navegadores.html',1,'navegadores.jpeg','2023-08-17 18:14:10','2023-09-06 13:53:07'),(3,'Digitalización de Empresas ','La digitalización de empresas es un proceso fundamental en la actualidad, ya que implica la transformación de los procesos y operaciones de una compañía hacia un entorno digital.',1,1,NULL,'digitalización-de-empresas-.html',1,'','2023-08-17 18:15:34',NULL),(4,'Intelegencia Artificial','La inteligencia artificial (IA) es un conjunto de tecnologías que permiten que las computadoras realicen una variedad de funciones avanzadas.',1,1,NULL,'intelegencia-artificial.html',1,'','2023-08-17 18:17:17',NULL),(7,'Recomendaciones para aplicar la IA en su empresa','Aplicar la Inteligencia Artificial en una empresa o negocio no se trata únicamente de escoger una herramienta de IA y pedirle al equipo que la utilice.',1,1,NULL,'recomendaciones-para-aplicar-la-ia-en-su-empresa.html',1,'Ia.jpeg','2023-08-18 15:43:00',NULL),(8,'Gato rapero','descripcion del gato rapero',1,5,NULL,'gato-rapero.html',0,'gato_rapero.jpeg','2023-08-22 19:41:38','2023-08-23 11:37:20'),(9,'Social Media','Descripcion de social media',1,5,NULL,'social-media.html',0,'social_media.jpeg','2023-08-23 11:38:25',NULL),(10,'nueva publicacion','descripcion corta',1,1,NULL,'nueva-publicacion.html',0,'','2023-08-28 15:34:31',NULL),(11,'nueva publicacion 2','descripcion x',1,1,NULL,'nueva-publicacion-2.html',0,'','2023-08-28 15:36:36',NULL),(12,'tecnologia blockchain','tecnologia blockchain descripcion',1,1,NULL,'tecnologia-blockchain.html',0,'','2023-09-06 13:43:38',NULL),(13,'Dinero Electronico','Dinero Electronico description',1,1,NULL,'dinero-electronico.html',0,'','2023-09-06 13:46:05',NULL),(14,'python intermedio','descripcion de programacion python intermedio como curso',1,2,NULL,'python-intermedio.html',1,'','2023-09-06 14:00:23','2023-09-06 14:00:55');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_role` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin'),(2,'interacting');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` char(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` char(100) NOT NULL,
  `password` char(16) DEFAULT NULL,
  `status` char(20) NOT NULL DEFAULT 'disable',
  `role_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`email`),
  UNIQUE KEY `unique_username` (`username`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'branar_admin','Branar','Creator','ander.dev@gmail.com','v-123456','enabled',1,'2023-08-17 17:52:22',NULL),(16,'ander.dev','Anderson','Cordero','acorderofigueroa7@gmail.com','1234','enabled',2,'2023-08-24 20:20:54',NULL),(18,'fulano','javier','fi','acordero.dev@gmail.com','1234','enabled',2,'2023-08-25 13:08:06',NULL),(22,'new_user','new','user','corderoanderson713@gmail.com','1234','enabled',2,'2023-08-25 13:38:42',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verify_email_account`
--

DROP TABLE IF EXISTS `verify_email_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `verify_email_account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` int NOT NULL,
  `user_id` int NOT NULL,
  `expires_in` int NOT NULL,
  `create_at` datetime NOT NULL,
  `expiry_date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `verify_email_account_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verify_email_account`
--

LOCK TABLES `verify_email_account` WRITE;
/*!40000 ALTER TABLE `verify_email_account` DISABLE KEYS */;
INSERT INTO `verify_email_account` VALUES (15,3358,16,300,'2023-08-24 04:20:54','2023-08-24 04:25:54'),(17,9025,18,300,'2023-08-25 09:27:18','2023-08-25 09:32:18'),(21,9357,22,300,'2023-08-25 09:38:53','2023-08-25 09:43:53');
/*!40000 ALTER TABLE `verify_email_account` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-13 15:12:16
