-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.29-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for stock_market_dbs
DROP DATABASE IF EXISTS `stock_market_dbs`;
CREATE DATABASE IF NOT EXISTS `stock_market_dbs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `stock_market_dbs`;

-- Dumping structure for table stock_market_dbs.companies
DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `_user_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `office_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_tele` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `web_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table stock_market_dbs.companies: ~2 rows (approximately)
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` (`id`, `_user_id`, `title`, `office_address`, `office_tele`, `description`, `web_url`, `created_at`, `updated_at`) VALUES
	(1, 1, 'SANYR SRL', 'Via piazza Cavour 5, 10124, Turin, IT', '+39 388 472 7268', 'Nemo quo ut tenetur hic nihil expedita. Quas voluptas quaerat explicabo sed repudiandae commodi. Error enim consequatur laboriosam pariatur ullam nostrum est. Corrupti vel eveniet suscipit illum.', 'http://www.sanyr.com', '2018-01-28 12:58:31', '2018-01-28 12:58:31'),
	(2, 1, 'Parsian Tenders1', 'Mehr 6,Gorgan, Iran', '34095809348', 'slkdj flkdsjflksjdk fjkf jhf kjashkf weh iwer iurgefiuahkf sad s', 'www.parsiantender.com', '2018-01-28 12:59:16', '2018-01-28 13:22:30');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;

-- Dumping structure for table stock_market_dbs.markets
DROP TABLE IF EXISTS `markets`;
CREATE TABLE IF NOT EXISTS `markets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `_user_id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table stock_market_dbs.markets: ~5 rows (approximately)
/*!40000 ALTER TABLE `markets` DISABLE KEYS */;
INSERT INTO `markets` (`id`, `_user_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, 'New York Stock Exchange', 'Ut ut vitae reprehenderit corrupti. Enim dolorem consequuntur magni quia nam reprehenderit repudiandae. Ea dolores est dolores ut. Incidunt et omnis cupiditate expedita ex nulla ad vero.', '2018-01-28 12:58:31', '2018-01-28 12:58:31'),
	(2, 1, 'London   Stock   Exchange', ' London   Stock   Exchange  ondon   Stock   Exchange  London   Stock   Exchange  London   Stock   Exchange  London   Stock   E111xchange  London   Stock   Exchange ', '2018-01-28 13:47:32', '2018-01-28 13:48:12'),
	(3, 1, ' Hong   Kong   Stock   Exchange  ', ' Hong   Ko Hong   Kong   Stock   Exchange   Hong   Kong   Stock   Exchange   Hong   Kong   Stock   Exchange   Hong   Kong   Stock   Exchange   Hong   Kong   Stock   Exchange  ng   Stock   Exchange  ', '2018-01-28 13:48:24', '2018-01-28 13:48:24'),
	(4, 1, 'Shanghai   Stock   Exchange', 'Shanghai   SShanghai   Stock   Exchangetock   Exchange', '2018-01-28 13:48:36', '2018-01-28 13:48:36'),
	(5, 1, 'Deutsche   Börse   Frankfurt ', 'Deutsche   Börse   Frankfurt Deutsche   BörDeutsche   Börse   Frankfurt Deutsche   Börse   Frankfurt se   Frankfurt Deutsche   BörsDeutsche   Börse   Frankfurt Deutsche   Börse   Frankfurt Deutsche   Börse   Frankfurt e   Frankfurt Deutsche   Börse   Fran', '2018-01-28 13:48:55', '2018-01-28 13:48:55');
/*!40000 ALTER TABLE `markets` ENABLE KEYS */;

-- Dumping structure for table stock_market_dbs.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table stock_market_dbs.migrations: ~5 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2018_01_28_091549_create_companies_table', 1),
	('2018_01_28_100603_create_markets_table', 1),
	('2018_01_28_135550_create_stocks_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table stock_market_dbs.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table stock_market_dbs.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table stock_market_dbs.stocks
DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `_user_id` bigint(20) NOT NULL,
  `_company_id` bigint(20) NOT NULL,
  `_market_id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table stock_market_dbs.stocks: ~8 rows (approximately)
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
INSERT INTO `stocks` (`id`, `_user_id`, `_company_id`, `_market_id`, `type`, `price`, `description`, `created_at`, `updated_at`) VALUES
	(1, 1, 2, 5, 'PREFERRED', '4109', 'Sit impedit odio numquam et vitae nesciunt qui. Incidunt et quisquam dolor eius voluptas eveniet et doloribus. Accusantium id impedit velit id dolorem voluptatibus.', '2018-01-28 14:19:10', '2018-01-28 15:21:04'),
	(3, 1, 2, 5, 'COMMON', '345', 'efgfsdsdf', '2018-01-28 15:20:02', '2018-01-28 15:20:02'),
	(4, 1, 2, 4, 'NaN', '23423', 'sdfsdf', '2018-01-28 17:00:22', '2018-01-28 17:00:22'),
	(5, 1, 1, 3, 'PREFERRED', '234', 'ewfgsd', '2018-01-28 17:28:30', '2018-01-28 17:28:30'),
	(6, 1, 2, 3, 'NaN', '234', 'sadf asdf asdf ', '2018-01-28 17:28:53', '2018-01-28 17:28:53'),
	(7, 1, 2, 3, 'NaN', '242', 'sasfdf', '2018-01-28 17:29:21', '2018-01-28 17:29:21'),
	(8, 1, 2, 2, 'COMMON', '2423', 'asdf', '2018-01-28 17:32:13', '2018-01-28 19:42:12'),
	(9, 1, 2, 5, 'PREFERRED', '23428', '', '2018-01-28 17:32:32', '2018-01-28 17:32:47');
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;

-- Dumping structure for table stock_market_dbs.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table stock_market_dbs.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Javad Malek Shahkoohi', 'mrjavad@gmail.com', '$2y$10$48NhmK.c1ei5MQmcc56Y3uNOK3OYn0M46ardmaigUkzDroMZqSc4e', 'ZiKTTuwIIcIhDAAnKrmNyr1LuOvc4OozO2V2TqJfrsEp9sZJ5RGz46Lag68G', '2018-01-28 12:58:31', '2018-01-28 15:22:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
