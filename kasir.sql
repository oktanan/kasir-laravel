-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: ukk_kasir
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
INSERT INTO `password_resets` VALUES ('ad@gmail.com','$2y$10$6OMLrt8Zo.4kXCSgtvrRIOWkY5EWVG0JRyuq9BXaZuacbsndBV5jO','2024-03-08 23:11:34');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pelanggan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelanggan`
--

LOCK TABLES `pelanggan` WRITE;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` VALUES (1,'oktavia','Mojogedang','089691750829','2024-03-07 06:52:16','2024-03-07 07:06:09'),(3,'Shandya','Jumantono','087880801212','2024-03-07 07:49:00','2024-03-07 07:49:00'),(4,'isnaaa','Bendo','087900123456','2024-03-07 08:54:40','2024-03-07 08:54:40'),(5,'Nazwa','Delingan','089211992277','2024-03-07 09:40:30','2024-03-07 09:40:30'),(6,'Shofi','Mojogedang','081889081122','2024-03-08 02:08:35','2024-03-08 02:08:35');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produk` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `stok` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` VALUES (1,'Laptop Asus',8000000.00,1,'2024-03-07 06:07:16','2024-03-07 19:10:50'),(3,'Laptop Lenovo',10000000.00,1,'2024-03-07 07:49:34','2024-03-09 00:24:25'),(4,'Laptop Acer',7000000.00,2,'2024-03-07 07:50:12','2024-03-07 18:51:52'),(5,'Laptop Hp',11000000.00,1,'2024-03-07 18:03:21','2024-03-08 02:29:43'),(6,'Mouse Molucca',50000.00,0,'2024-03-07 18:41:48','2024-03-09 00:17:17'),(7,'Laptop Axioo',7000000.00,2,'2024-03-07 19:00:51','2024-03-08 02:29:43');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp`
--

DROP TABLE IF EXISTS `temp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `temp` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp`
--

LOCK TABLES `temp` WRITE;
/*!40000 ALTER TABLE `temp` DISABLE KEYS */;
/*!40000 ALTER TABLE `temp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaksi` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int NOT NULL,
  `total_harga` int NOT NULL,
  `bayar` int NOT NULL,
  `kembalian` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (1,1,22000000,23000000,1000000,'2024-03-07 18:37:56','2024-03-07 18:37:56'),(2,3,7000000,10000000,3000000,'2024-03-07 18:51:52','2024-03-07 18:51:52'),(3,3,7000000,10000000,3000000,'2024-03-07 18:52:57','2024-03-07 18:52:57'),(4,3,7000000,10000000,3000000,'2024-03-07 18:57:06','2024-03-07 18:57:06'),(5,3,7000000,10000000,3000000,'2024-03-07 18:57:22','2024-03-07 18:57:22'),(6,5,11050000,12000000,950000,'2024-03-07 18:58:33','2024-03-07 18:58:33'),(7,1,8000000,10000000,2000000,'2024-03-07 19:10:50','2024-03-07 19:10:50'),(8,4,7000000,8000000,1000000,'2024-03-07 19:33:58','2024-03-07 19:33:58'),(9,4,7000000,8000000,1000000,'2024-03-07 19:48:51','2024-03-07 19:48:51'),(10,5,50000,60000,10000,'2024-03-07 19:52:11','2024-03-07 19:52:11'),(11,5,50000,60000,10000,'2024-03-07 19:53:42','2024-03-07 19:53:42'),(12,5,50000,60000,10000,'2024-03-07 19:54:33','2024-03-07 19:54:33'),(13,6,11000000,12000000,1000000,'2024-03-08 02:09:25','2024-03-08 02:09:25'),(14,6,11000000,12000000,1000000,'2024-03-08 02:10:21','2024-03-08 02:10:21'),(15,6,11000000,12000000,1000000,'2024-03-08 02:25:25','2024-03-08 02:25:25'),(16,6,29000000,30000000,1000000,'2024-03-08 02:29:43','2024-03-08 02:29:43'),(17,6,50000,60000,10000,'2024-03-08 23:55:11','2024-03-08 23:55:11'),(18,6,50000,60000,10000,'2024-03-08 23:56:59','2024-03-08 23:56:59'),(19,1,50000,60000,10000,'2024-03-09 00:17:17','2024-03-09 00:17:17'),(20,1,50000,60000,10000,'2024-03-09 00:19:37','2024-03-09 00:19:37'),(21,1,50000,60000,10000,'2024-03-09 00:20:18','2024-03-09 00:20:18'),(22,1,50000,60000,10000,'2024-03-09 00:20:27','2024-03-09 00:20:27'),(23,6,10000000,11000000,1000000,'2024-03-09 00:24:25','2024-03-09 00:24:25');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi_detail`
--

DROP TABLE IF EXISTS `transaksi_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaksi_detail` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_transaksi` int NOT NULL,
  `id_produk` int NOT NULL,
  `jumlah` int NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi_detail`
--

LOCK TABLES `transaksi_detail` WRITE;
/*!40000 ALTER TABLE `transaksi_detail` DISABLE KEYS */;
INSERT INTO `transaksi_detail` VALUES (1,1,5,2,22000000.00,'2024-03-07 18:37:56','2024-03-07 18:37:56'),(2,2,4,1,7000000.00,'2024-03-07 18:51:52','2024-03-07 18:51:52'),(3,6,6,1,50000.00,'2024-03-07 18:58:33','2024-03-07 18:58:33'),(4,6,5,1,11000000.00,'2024-03-07 18:58:33','2024-03-07 18:58:33'),(5,7,1,1,8000000.00,'2024-03-07 19:10:50','2024-03-07 19:10:50'),(6,8,7,1,7000000.00,'2024-03-07 19:33:58','2024-03-07 19:33:58'),(7,9,7,1,7000000.00,'2024-03-07 19:48:51','2024-03-07 19:48:51'),(8,10,6,1,50000.00,'2024-03-07 19:52:11','2024-03-07 19:52:11'),(9,12,6,1,50000.00,'2024-03-07 19:54:33','2024-03-07 19:54:33'),(10,14,5,1,11000000.00,'2024-03-08 02:10:21','2024-03-08 02:10:21'),(11,16,7,1,7000000.00,'2024-03-08 02:29:43','2024-03-08 02:29:43'),(12,16,5,2,22000000.00,'2024-03-08 02:29:43','2024-03-08 02:29:43'),(13,17,6,1,50000.00,'2024-03-08 23:55:11','2024-03-08 23:55:11'),(14,19,6,1,50000.00,'2024-03-09 00:17:17','2024-03-09 00:17:17'),(15,23,3,1,10000000.00,'2024-03-09 00:24:25','2024-03-09 00:24:25');
/*!40000 ALTER TABLE `transaksi_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrator','admin@gmail.com',NULL,'$2y$10$Pbfh2WY.lJ4KtGwGozkCWehUJrb0D.loDLQGIU3xgIWp7Mv5jgYdq',NULL,'1','2024-03-08 23:21:42','2024-03-08 23:21:42'),(2,'Kasir','kasir@gmail.com',NULL,'$2y$10$JIxSIbVzp4uHbgUjYPV6QORAavKIQMXArvqCqN/CO7fTlAnEW19g.',NULL,'0','2024-03-08 23:22:21','2024-03-08 23:22:21');
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

-- Dump completed on 2024-03-12 21:24:10
