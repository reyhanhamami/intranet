-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 05, 2019 at 06:17 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intranet`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(11, 'Peresmian gedung 7', '#80ff00', '2019-08-07', '2019-08-07', '2019-08-06 19:06:32', '2019-08-06 19:06:32'),
(10, 'MuslimFest', '#00ff00', '2019-08-05', '2019-08-06', '2019-08-04 22:06:11', '2019-08-04 22:06:11'),
(9, 'Launching Mobile apps', '#000000', '2019-08-05', '2019-08-06', '2019-08-04 21:40:32', '2019-08-04 21:40:32'),
(12, 'Pengenalan Intranet', '#ff8000', '2019-08-12', '2019-08-13', '2019-08-11 23:05:23', '2019-08-11 23:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_07_31_082031_create_events_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'reyhan', 'muhammad.reyhanhamami@bwa.id', '$2b$10$SfFAWePZqapdNGu6QxoXPuCyyrjnkZpIKhlH9pGoBFxELQw5fS87a', 'HMJG45SRqQ1hybAAUdbErC8FR2XFlYGUhXtaWMWxvcpQEOX9ysZEokuvBRSv', NULL, NULL),
(2, 'admin', 'admin@bwa.id', '$2b$10$SfFAWePZqapdNGu6QxoXPuCyyrjnkZpIKhlH9pGoBFxELQw5fS87a', 'yUAq2hmLmZ7UdSBe1du93SnQm2ixQextpkw4ztnLuRIVSl5bJJ4yZvZDhFY8', NULL, NULL),
(3, 'reyhan', 'reyhan@bwa.id', '$2y$10$BcZxOxO8jybDy26pmB48SeZsypUOFdmZbWb.t7r./Q3ptQmIeSWP.', 'tIWwY2cn2w6MpBrmXmzbQPs44mRKOI439S98IbFmHlOGehWXrDyPI8DMWXA0', '2019-09-01 06:24:17', '2019-09-01 06:24:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
