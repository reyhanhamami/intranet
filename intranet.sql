-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 11, 2019 at 09:43 AM
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
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` longtext NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `tanggal`, `deskripsi`, `foto`) VALUES
(7, 'tes', '2019-09-13', '<div id=\"lipsum\">\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id nibh\r\n sit amet lectus euismod malesuada molestie ut purus. Etiam at lorem a \r\nmetus pretium iaculis efficitur commodo dui. Morbi non ligula id sapien \r\ninterdum tincidunt vestibulum eget mauris. Vivamus eget eros eu velit \r\neleifend facilisis. Orci varius natoque penatibus et magnis dis \r\nparturient montes, nascetur ridiculus mus. Vestibulum cursus sit amet \r\ndiam ac blandit. Nunc luctus massa urna, et iaculis ipsum ultricies et. \r\nPhasellus ac euismod leo. Lorem ipsum dolor sit amet, consectetur \r\nadipiscing elit. Nunc tempor interdum tellus sit amet placerat. Nam \r\nvarius erat quam, finibus ornare mauris commodo at. Sed at urna nulla. \r\nDuis vitae velit diam. Quisque eleifend porta porttitor. Phasellus eu \r\nnunc erat. Ut ullamcorper congue ultrices.\r\n</p>\r\n<p>\r\nNullam ac felis nibh. Duis molestie pharetra urna, sit amet venenatis \r\ntellus venenatis at. Nunc volutpat mauris eu sem porta, sed faucibus dui\r\n vehicula. Duis gravida elementum mi, ut lacinia ipsum condimentum id. \r\nSed sit amet sem auctor, placerat magna sed, pretium massa. Curabitur \r\nelementum elementum cursus. Donec nec elit quis risus sollicitudin \r\nornare ac a eros. Nullam a lorem neque. Morbi eu ipsum mi. Aenean velit \r\nlacus, dignissim at arcu sed, fringilla tincidunt justo. Phasellus sed \r\ncursus erat. Sed dapibus auctor posuere. Etiam est arcu, lacinia et \r\ninterdum non, consequat ac justo. Aenean ut malesuada felis. Morbi in \r\nipsum vitae mi convallis iaculis.\r\n</p>\r\n<p>\r\nSed non risus arcu. Integer ut lorem ipsum. In gravida risus vitae purus\r\n lobortis aliquam. Mauris id eros vitae arcu pellentesque consequat. Sed\r\n ultricies, mauris quis condimentum fringilla, felis est iaculis sapien,\r\n vel egestas magna odio at quam. Sed varius hendrerit dui, in blandit \r\nlectus laoreet at. Donec nisl dolor, tincidunt at nulla auctor, \r\nullamcorper molestie sem. Proin eu libero ut felis scelerisque posuere \r\net id odio. Vestibulum diam velit, maximus vel gravida sed, interdum et \r\nlibero.\r\n</p>\r\n<p>\r\nInteger metus sapien, mollis ut faucibus non, sodales porta lacus. Morbi\r\n iaculis velit sed dui maximus lacinia. Nunc dictum augue et laoreet \r\neleifend. Praesent semper ac dolor sed molestie. Proin suscipit, dolor \r\net pellentesque aliquet, quam arcu dictum lacus, eu egestas turpis mi \r\nfacilisis felis. Mauris auctor, arcu a venenatis convallis, est tortor \r\nvolutpat justo, at consequat urna sapien id augue. Aenean ac vehicula \r\nvelit. Aenean sed ullamcorper urna. Nam vel mauris non libero consequat \r\npellentesque sit amet at ante. Donec at turpis sapien. Sed lobortis \r\nsemper enim ut ultricies. Aliquam interdum augue eu tempus sagittis. \r\nNulla non diam justo. Aliquam at ornare libero, in posuere est.\r\n</p>\r\n<p>\r\nVestibulum nec lacus nec nunc blandit volutpat. Ut pulvinar mi at elit \r\nullamcorper, non tristique enim porta. Cras sed venenatis ante. Vivamus \r\nnec sem vulputate, efficitur ex at, scelerisque libero. Donec mi eros, \r\nluctus vitae sagittis ut, eleifend iaculis elit. Duis malesuada, orci eu\r\n fermentum viverra, sem quam scelerisque tortor, eu interdum risus mi in\r\n massa. Vestibulum elit lorem, pulvinar et pretium non, suscipit eu \r\nnulla.\r\n</p></div>', '1570181198-sizeartikel.png'),
(9, 'Hello World', '2019-09-13', '<div id=\"lipsum\">\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id nibh\r\n sit amet lectus euismod malesuada molestie ut purus. Etiam at lorem a \r\nmetus pretium iaculis efficitur commodo dui. Morbi non ligula id sapien \r\ninterdum tincidunt vestibulum eget mauris. Vivamus eget eros eu velit \r\neleifend facilisis. Orci varius natoque penatibus et magnis dis \r\nparturient montes, nascetur ridiculus mus. Vestibulum cursus sit amet \r\ndiam ac blandit. Nunc luctus massa urna, et iaculis ipsum ultricies et. \r\nPhasellus ac euismod leo. Lorem ipsum dolor sit amet, consectetur \r\nadipiscing elit. Nunc tempor interdum tellus sit amet placerat. Nam \r\nvarius erat quam, finibus ornare mauris commodo at. Sed at urna nulla. \r\nDuis vitae velit diam. Quisque eleifend porta porttitor. Phasellus eu \r\nnunc erat. Ut ullamcorper congue ultrices.\r\n</p>\r\n<p>\r\nNullam ac felis nibh. Duis molestie pharetra urna, sit amet venenatis \r\ntellus venenatis at. Nunc volutpat mauris eu sem porta, sed faucibus dui\r\n vehicula. Duis gravida elementum mi, ut lacinia ipsum condimentum id. \r\nSed sit amet sem auctor, placerat magna sed, pretium massa. Curabitur \r\nelementum elementum cursus. Donec nec elit quis risus sollicitudin \r\nornare ac a eros. Nullam a lorem neque. Morbi eu ipsum mi. Aenean velit \r\nlacus, dignissim at arcu sed, fringilla tincidunt justo. Phasellus sed \r\ncursus erat. Sed dapibus auctor posuere. Etiam est arcu, lacinia et \r\ninterdum non, consequat ac justo. Aenean ut malesuada felis. Morbi in \r\nipsum vitae mi convallis iaculis.\r\n</p>\r\n<p>\r\nSed non risus arcu. Integer ut lorem ipsum. In gravida risus vitae purus\r\n lobortis aliquam. Mauris id eros vitae arcu pellentesque consequat. Sed\r\n ultricies, mauris quis condimentum fringilla, felis est iaculis sapien,\r\n vel egestas magna odio at quam. Sed varius hendrerit dui, in blandit \r\nlectus laoreet at. Donec nisl dolor, tincidunt at nulla auctor, \r\nullamcorper molestie sem. Proin eu libero ut felis scelerisque posuere \r\net id odio. Vestibulum diam velit, maximus vel gravida sed, interdum et \r\nlibero.\r\n</p>\r\n<p>\r\nInteger metus sapien, mollis ut faucibus non, sodales porta lacus. Morbi\r\n iaculis velit sed dui maximus lacinia. Nunc dictum augue et laoreet \r\neleifend. Praesent semper ac dolor sed molestie. Proin suscipit, dolor \r\net pellentesque aliquet, quam arcu dictum lacus, eu egestas turpis mi \r\nfacilisis felis. Mauris auctor, arcu a venenatis convallis, est tortor \r\nvolutpat justo, at consequat urna sapien id augue. Aenean ac vehicula \r\nvelit. Aenean sed ullamcorper urna. Nam vel mauris non libero consequat \r\npellentesque sit amet at ante. Donec at turpis sapien. Sed lobortis \r\nsemper enim ut ultricies. Aliquam interdum augue eu tempus sagittis. \r\nNulla non diam justo. Aliquam at ornare libero, in posuere est.\r\n</p>\r\n<p>\r\nVestibulum nec lacus nec nunc blandit volutpat. Ut pulvinar mi at elit \r\nullamcorper, non tristique enim porta. Cras sed venenatis ante. Vivamus \r\nnec sem vulputate, efficitur ex at, scelerisque libero. Donec mi eros, \r\nluctus vitae sagittis ut, eleifend iaculis elit. Duis malesuada, orci eu\r\n fermentum viverra, sem quam scelerisque tortor, eu interdum risus mi in\r\n massa. Vestibulum elit lorem, pulvinar et pretium non, suscipit eu \r\nnulla.\r\n</p></div>', '1568344518-sizeartikel2.png'),
(12, 'Hello World', '2019-09-13', '<p>percobaan 1<br></p>', '1568357083-sizeartikel2.png');

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

DROP TABLE IF EXISTS `diskusi`;
CREATE TABLE IF NOT EXISTS `diskusi` (
  `id_diskusi` int(11) NOT NULL AUTO_INCREMENT,
  `author_diskusi` varchar(255) NOT NULL,
  `topic_diskusi` varchar(255) NOT NULL,
  `label_diskusi` varchar(255) NOT NULL,
  `tanggal_diskusi` varchar(255) NOT NULL,
  `deskripsi_diskusi` longtext NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id_diskusi`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diskusi`
--

INSERT INTO `diskusi` (`id_diskusi`, `author_diskusi`, `topic_diskusi`, `label_diskusi`, `tanggal_diskusi`, `deskripsi_diskusi`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'first discussion', '#Ask #Rules', '08-Oct-2019', '<p>s&nbsp;&nbsp;&nbsp;&nbsp;<br></p>', '2019-10-08 02:28:55', '2019-10-08 02:28:55'),
(2, 'admin', 'first discussion', '#Rules', '08 Oct 2019', '<p>d<br></p>', '2019-10-08 02:35:06', '2019-10-08 02:35:06'),
(3, 'denny darmawan', 'Forum dari orang lain', '#FastResponsePlease', '08 Oct 2019', '<p>hai<br></p>', '2019-10-08 02:53:00', '2019-10-08 02:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id_education` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `divisi` varchar(10) NOT NULL,
  `foto1` varchar(255) DEFAULT NULL,
  `foto2` varchar(255) DEFAULT NULL,
  `foto3` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_education`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `judul`, `divisi`, `foto1`, `foto2`, `foto3`, `file`) VALUES
(15, 'Solusi untuk Fungsi Kesalahan Otentikasi RDP(Remote Desktop Problem)', '1', NULL, NULL, NULL, '731914547-Remote Desktop Solved - Documentation.pdf'),
(12, 'Web Meeting (3cx)', '1', NULL, NULL, NULL, '948747032-WebMeeting.pdf'),
(13, 'Cara koneksi Mysql di sqlserver', '1', NULL, NULL, NULL, '1433681359-Cara koneksi Mysql di SqlServer (ssms) - documentation(1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id_employee` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `handphone` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id_employee`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `nama`, `divisi`, `jabatan`, `email`, `handphone`, `foto`) VALUES
(53, 'Muhammad Reyhan Hamami', '1', 'Web Developer', 'muhammad.reyhanhamami@bwa.id', '089663085777', '1569157587-sizelistkaryawan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `eventpersonal`
--

DROP TABLE IF EXISTS `eventpersonal`;
CREATE TABLE IF NOT EXISTS `eventpersonal` (
  `id_eventpersonal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_eventpersonal`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `eventpersonal`
--

INSERT INTO `eventpersonal` (`id_eventpersonal`, `title`, `deskripsi`, `url`, `color`, `foto`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(5, 'Resign', '<p>Karyawan BWA atas nama Sapri sudah tidak menjadi karyawan lagi tertanda tanggal tertera <br></p>', NULL, '#000000', '1569118519-sizecooporatepersonal4-02.jpg', '2019-09-23', '2019-09-23', '2019-09-21 19:15:19', '2019-09-21 19:15:19');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id_eventcooporate` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_eventcooporate`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_eventcooporate`, `title`, `deskripsi`, `url`, `color`, `foto`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(39, 'Water Action for People', '<h2 class=\"et_pb_slide_title\"><a href=\"https://www.wakafquran.org/project/index\">Water Action for People</a></h2>', NULL, '#000000', '1568953166.2-min.jpg', '2019-09-20', '2019-09-20', '2019-09-19 21:03:46', '2019-09-19 21:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `masterdivisi`
--

DROP TABLE IF EXISTS `masterdivisi`;
CREATE TABLE IF NOT EXISTS `masterdivisi` (
  `id_divisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_divisi` varchar(50) NOT NULL,
  PRIMARY KEY (`id_divisi`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterdivisi`
--

INSERT INTO `masterdivisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'Teknologi Informasi '),
(2, 'Human Capital'),
(3, 'Program Dev'),
(4, 'Fundraising'),
(5, 'Keuangan');

-- --------------------------------------------------------

--
-- Table structure for table `mastertype`
--

DROP TABLE IF EXISTS `mastertype`;
CREATE TABLE IF NOT EXISTS `mastertype` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertype`
--

INSERT INTO `mastertype` (`id_type`, `nama`) VALUES
(1, 'Quran'),
(2, 'Hadist'),
(3, 'Qoutes');

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
-- Table structure for table `pencerahan`
--

DROP TABLE IF EXISTS `pencerahan`;
CREATE TABLE IF NOT EXISTS `pencerahan` (
  `id_pencerahan` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id_pencerahan`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pencerahan`
--

INSERT INTO `pencerahan` (`id_pencerahan`, `type`, `deskripsi`, `created_at`, `updated_at`) VALUES
(11, '1', 'Hai Nabi, cukuplah Allah (menjadi Pelindung) bagimu dan bagi orang-orang mukmin yang mengikutimu.[QS. Al-Anfal: 64]', '2019-09-11 09:17:07', '2019-09-11 09:48:55'),
(10, '2', 'Rasulullah shallallahu ‘alaihi wa sallam bersabda, “Apabila Allah menghendaki hamba-Nya mendapatkan kebaikan maka Allah segerakan baginya hukuman di dunia. Dan apabila Allah menghendaki keburukan untuknya maka Allah akan menahan hukumannya sampai akan disempurnakan balasannya kelak di hari kiamat.” (HR. Tirmidzi, hadits hasan gharib, lihat as-Shahihah [1220])', '2019-09-11 07:49:34', '2019-09-11 09:49:12'),
(9, '3', 'If you can dream it, you can do it. - Walt Disney', '2019-09-11 07:41:05', '2019-09-11 09:49:26'),
(12, '3', 'Kesuksesan bukan akhir, kegagalan bukan hal yang fatal: itu adalah keberanian untuk melanjutkan apa yang penting - Winston Churchill.', '2019-09-11 12:54:38', '2019-09-11 12:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

DROP TABLE IF EXISTS `pengumuman`;
CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `divisi` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `divisi`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 'Dress Codes', 2, 'A dress code is a set of rules, often written, with regards to clothing. Dress codes are created out of social perceptions and norms, and vary based on purpose, circumstances and occasions.', '2019-09-12 00:00:44', '2019-09-12 00:31:24'),
(2, 'Akan diadakan pemadaman server', 1, 'pada hari minggu\r\ntanggal 12 sep 2019\r\nakan diadakan maintance yang menyebabkan server mati', '2019-09-11 23:49:15', '2019-09-11 23:49:15'),
(4, 'risetdikti', 1, 'Pengumuman Hasil Seleksi Makalah dan Seleksi Assessment Jabatan Sekretaris LLDIKTI Wilayah V. 11 September, 2019', '2019-09-13 19:44:40', '2019-09-13 19:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id_projects` int(11) NOT NULL AUTO_INCREMENT,
  `nama_projects` varchar(255) NOT NULL,
  `status_projects` enum('Target','Delayed','Completed') NOT NULL,
  `date_projects` date DEFAULT NULL,
  `persentase_projects` varchar(4) NOT NULL,
  `divisi_projects` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id_projects`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id_projects`, `nama_projects`, `status_projects`, `date_projects`, `persentase_projects`, `divisi_projects`, `created_at`, `updated_at`) VALUES
(1, 'Mobile Aps', 'Target', '2019-10-07', '80', '1', '2019-10-07 00:06:18', '2019-10-07 00:06:18'),
(6, 'TES', 'Completed', '2019-10-16', '100', '1', '2019-10-07 21:40:58', '2019-10-07 21:40:58'),
(3, 'contoh delay', 'Delayed', '2018-10-07', '50', '1', '2019-10-07 01:19:41', '2019-10-07 01:19:41'),
(5, 'human duas', 'Delayed', '2019-10-22', '10', '2', '2019-10-07 02:46:27', '2019-10-07 20:06:21'),
(7, 'asd', 'Delayed', '2019-10-16', '34', '1', '2019-10-07 23:04:23', '2019-10-07 23:04:23'),
(8, 'asdcqw', 'Target', '2019-10-30', '22', '4', '2019-10-07 23:09:12', '2019-10-07 23:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id_tasks` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tasks` varchar(255) NOT NULL,
  `employee` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id_tasks`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id_tasks`, `nama_tasks`, `employee`, `created_at`, `updated_at`) VALUES
(24, 'Tugas pertama', '82', '2019-09-27 03:14:30', '2019-09-27 03:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `divisi`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'reyhan', '1', 'muhammad.reyhanhamami@bwa.id', '$2b$10$SfFAWePZqapdNGu6QxoXPuCyyrjnkZpIKhlH9pGoBFxELQw5fS87a', 'bwo3rzUokZqJFU1a5NE4ZAjOI8RvjVZPveBa6LbTcKVDIJrlx07dTaFBk2EW', NULL, NULL),
(2, 'admin', '1', 'admin@bwa.id', 'e0d9d3862dfb270de65719d43749df5e', '1JtFaRd5gqKYa3NRMPmOPn750h4jfys641NG3r2xQrY3cR6vIIWSfXhSY2cy', NULL, NULL),
(3, 'reyhan', '2', 'reyhan@bwa.id', '$2y$10$BcZxOxO8jybDy26pmB48SeZsypUOFdmZbWb.t7r./Q3ptQmIeSWP.', 'tIWwY2cn2w6MpBrmXmzbQPs44mRKOI439S98IbFmHlOGehWXrDyPI8DMWXA0', '2019-09-01 06:24:17', '2019-09-01 06:24:17'),
(4, 'adminmd5', '2', 'md5@bwa.id', 'e0d9d3862dfb270de65719d43749df5e', 'Z7oPQDZ1P9ZkvR4YJB1ffc4nz2sJShluCKMYA0HhEy8D1eK4B7Ot1aNVq0vD', NULL, NULL),
(5, 'asd', '3', 'asd@bwa.id', 'e0d9d3862dfb270de65719d43749df5e', 'X0o8BX4OrEsKDRDfgdT6pO4s4jGoplz17bp40B5BTMc3Jjw8H4ilMVVxnGJB', '2019-09-07 17:00:00', '2019-09-07 17:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
