-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: homework
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Current Database: `homework`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `homework` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `homework`;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL,
  `available_amount` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `sold_amount` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `default_shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'Test1','images/SmiTy6QAp1WIdYiP1eAHFCW1p7o9glRM2riq7Cvf.jpeg','Nothing.',1,1000,1,'2017-09-19 03:10:21','2017-09-20 01:55:23',35.96,0,'2017-09-20 01:55:23',0.00),(2,'test2','images/Bm7IdkOTmkACi2IPBlM1R9ejx0x9lMjmrXnChcAp.png','No desc.',0,500,1,'2017-09-19 03:29:26','2017-09-20 02:06:57',36.00,0,NULL,0.00),(3,'Test3','images/H4P0x2Yq7Pt5aQQ8IPaf3ZteMmT4UKGXJX9Oipx2.jpeg','This is test 3.',1,98,1,'2017-09-20 01:56:04','2017-09-21 20:20:17',199.99,0,NULL,0.00),(4,'Test4','images/kesm3myxfzf9CE8udPmcwmZXH8sA5IZKg17Tx9Ru.jpeg','Test 4',1,999,1,'2017-09-20 01:58:59','2017-09-21 19:27:21',100.10,0,NULL,0.00),(5,'Test5','images/9HyA46fcCpKJDj5me4pXdoXm0W2r1vI2wd4Qk2L1.jpeg','No Description...',1,1000,1,'2017-09-20 04:45:44','2017-09-20 04:45:44',10.24,0,NULL,0.00),(6,'test6','images/FmsfnUOXhcKra2Ar47ozU0CI76x8tyhRgOqURVQ7.jpeg','No de.',1,18,1,'2017-09-21 19:15:08','2017-09-21 19:30:14',123.45,0,NULL,0.00);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7,'2014_10_12_000000_create_users_table',1),(8,'2014_10_12_100000_create_password_resets_table',1),(9,'2017_09_18_122802_create_items_table',1),(10,'2017_09_19_021832_edit_item_table',2),(11,'2017_09_19_024345_edit_item_nullable',3),(12,'2017_09_19_030500_edit_item_price_float',4),(13,'2017_09_19_033114_edit_user_seller_admin',5),(14,'2017_09_20_050024_init_order_table',6),(15,'2017_09_20_062931_create_order_items_table',7),(16,'2017_09_20_074230_add_address_to_user',8),(17,'2017_09_21_124735_add_default_shipping_fee_to_items',9),(18,'2017_09_21_181043_add_name_to_order_items',10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `real_price` decimal(10,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_fee` decimal(10,2) NOT NULL DEFAULT '0.00',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,2,2,36.00,NULL,'2017-09-21 12:48:31','2017-09-21 12:48:31',0.00,''),(2,3,3,199.99,NULL,'2017-09-21 13:12:24','2017-09-21 13:12:24',0.00,''),(3,4,4,100.10,NULL,'2017-09-21 13:13:15','2017-09-21 13:13:15',0.00,''),(4,5,4,100.10,NULL,'2017-09-21 13:14:09','2017-09-21 13:14:09',0.00,''),(5,6,3,199.99,NULL,'2017-09-21 18:14:03','2017-09-21 18:14:03',0.00,'Test3'),(6,7,3,199.99,NULL,'2017-09-21 18:51:42','2017-09-21 18:51:42',0.00,'Test3'),(7,8,4,100.10,NULL,'2017-09-21 18:59:36','2017-09-21 18:59:36',0.00,'Test4'),(8,9,6,123.45,NULL,'2017-09-21 19:15:13','2017-09-21 19:15:13',0.00,'test6'),(9,10,6,123.45,NULL,'2017-09-21 19:17:02','2017-09-21 19:17:02',0.00,'test6'),(10,11,3,199.99,NULL,'2017-09-21 19:21:25','2017-09-21 19:21:25',0.00,'Test3'),(11,12,3,199.99,NULL,'2017-09-21 19:22:20','2017-09-21 19:22:20',0.00,'Test3'),(12,13,3,199.99,NULL,'2017-09-21 19:23:14','2017-09-21 19:23:14',0.00,'Test3'),(13,14,3,199.99,NULL,'2017-09-21 19:24:41','2017-09-21 19:24:41',0.00,'Test3'),(14,15,3,199.99,NULL,'2017-09-21 19:25:22','2017-09-21 19:25:22',0.00,'Test3'),(15,16,3,199.99,NULL,'2017-09-21 19:27:14','2017-09-21 19:27:14',0.00,'Test3'),(16,17,4,100.10,NULL,'2017-09-21 19:27:20','2017-09-21 19:27:20',0.00,'Test4'),(17,18,6,123.45,NULL,'2017-09-21 19:30:07','2017-09-21 19:30:07',0.00,'test6'),(18,19,6,123.45,NULL,'2017-09-21 19:30:13','2017-09-21 19:30:13',0.00,'test6'),(19,20,3,199.99,NULL,'2017-09-21 20:19:53','2017-09-21 20:19:53',0.00,'Test3');
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `tracking_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_fee` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,1,1,0,'payment_required',NULL,'2017-09-21 12:46:51','2017-09-21 12:46:51',0.00),(2,1,1,0,'payment_required',NULL,'2017-09-21 12:48:31','2017-09-21 12:48:31',0.00),(3,1,1,0,'processing',NULL,'2017-09-21 13:12:24','2017-09-21 18:14:05',0.00),(4,1,1,0,'processing',NULL,'2017-09-21 13:13:15','2017-09-21 13:16:09',0.00),(5,1,1,0,'payment_required',NULL,'2017-09-21 13:14:09','2017-09-21 13:14:09',0.00),(6,1,1,0,'processing',NULL,'2017-09-21 18:14:03','2017-09-21 19:15:13',0.00),(7,1,1,0,'payment_required',NULL,'2017-09-21 18:51:42','2017-09-21 18:51:42',0.00),(8,1,1,0,'payment_required',NULL,'2017-09-21 18:59:36','2017-09-21 18:59:36',0.00),(9,1,1,0,'payment_required',NULL,'2017-09-21 19:15:13','2017-09-21 19:15:13',0.00),(10,1,1,0,'payment_required',NULL,'2017-09-21 19:17:02','2017-09-21 19:17:02',0.00),(11,1,1,0,'payment_required',NULL,'2017-09-21 19:21:25','2017-09-21 19:21:25',0.00),(12,1,1,0,'payment_required',NULL,'2017-09-21 19:22:20','2017-09-21 19:22:20',0.00),(13,1,1,0,'payment_required',NULL,'2017-09-21 19:23:14','2017-09-21 19:23:14',0.00),(14,1,1,0,'payment_required',NULL,'2017-09-21 19:24:41','2017-09-21 19:24:41',0.00),(15,1,1,0,'processing',NULL,'2017-09-21 19:25:22','2017-09-21 19:25:23',0.00),(16,1,1,0,'processing',NULL,'2017-09-21 19:27:14','2017-09-21 19:27:15',0.00),(17,1,1,0,'processing',NULL,'2017-09-21 19:27:20','2017-09-21 19:27:21',0.00),(18,1,1,0,'processing',NULL,'2017-09-21 19:30:07','2017-09-21 19:30:08',0.00),(19,1,1,0,'processing',NULL,'2017-09-21 19:30:13','2017-09-21 19:30:14',0.00),(20,1,1,0,'processing',NULL,'2017-09-21 20:19:53','2017-09-21 20:20:17',0.00);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_seller` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'imi415','imi415.public@gmail.com','$2y$10$01s6aLK/pyyheVp.LFo7f.j45s3a.13wG/q8mChciG3taXEEvFaNq','wO9in2MM4IZhwgoY3AvAN3wtjBSuCfRHG847oMX2WfMMB9xOhxNG0gQLhFzT','2017-09-20 02:14:25','2017-09-20 02:14:25',0,1,'');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-22  4:22:48
