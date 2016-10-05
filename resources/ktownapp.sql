-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2016 at 05:13 AM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `c9`
--
--
-- Database: `ktownapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings_general`
--

CREATE TABLE IF NOT EXISTS `listings_general` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `views` smallint(6) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `username` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cars_type` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cars_price` decimal(12,0) DEFAULT NULL,
  `cars_year` smallint(4) DEFAULT NULL,
  `cars_make` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cars_model` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cars_mileage` mediumint(12) DEFAULT NULL,
  `homes_type` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homes_price` decimal(12,0) DEFAULT NULL,
  `homes_bedrooms` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homes_bathrooms` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homes_parking` tinyint(2) DEFAULT NULL,
  `homes_sqft` mediumint(9) DEFAULT NULL,
  `homes_year` smallint(4) DEFAULT NULL,
  `jobs_type` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobs_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobs_compensation` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_type` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` decimal(12,0) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `listings_general`
--

INSERT INTO `listings_general` (`id`, `views`, `date`, `datetime`, `username`, `category`, `region`, `phone`, `email`, `subject`, `body`, `image`, `cars_type`, `cars_price`, `cars_year`, `cars_make`, `cars_model`, `cars_mileage`, `homes_type`, `homes_price`, `homes_bedrooms`, `homes_bathrooms`, `homes_parking`, `homes_sqft`, `homes_year`, `jobs_type`, `jobs_title`, `jobs_compensation`, `sale_type`, `sale_price`) VALUES
(1, 0, '2016-09-20', '0000-00-00 00:00:00', 'dev', 'cars', 'Los Angeles, CA', '213-323-3100', 'testing@gmail.com', '시범 제목입니다. Testing 테스팅 시범 제목 123', '시범 게시글 입니다. Testing text box lalalala.\r\n\r\nspacespace new paragraph.', 'resources/images/cars/mustang2.jpg', 'lease', '300', 2017, 'Infiniti', 'Q50', 1099, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, '2016-09-23', '0000-00-00 00:00:00', 'adhelper01', 'cars', 'Los Angeles, CA', '213-123-1234', 'testing@gmail.com', 'TESTING post num 2 geegeehee', 'TESTING post num 2 geegeehee\r\nbodyyyyy\r\n', 'resources/images/cars/mustang2.jpg', 'lease', '310', 2017, 'Lexus', 'CT200h', 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, '2016-09-23', '0000-00-00 00:00:00', 'dev', 'cars', 'Los Angeles, CA', '213-123-1234', 'testing@gmail.com', '1234wwwwwwjjjjgg gjgjgjgwwwwwwMMMMMMPPPPAJJJFJFJF JJJJJJJJJJ', '1234wwwwwwjjjjgg gjgjgjgwwwwwwMMMMMMPPPPAJJJFJFJF JJJJJJJJJJ\r\nbodyyy\r\nbody\r\nbody\r\n', 'resources/images/cars/mustang1.jpg', 'rent', '30', 2010, 'ford', 'mustang boss 302 longnam', 33333, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 0, '2016-10-01', '2016-10-01 09:23:20', 'adhelper02', 'cars', 'Los Angeles, CA', '213-123-1234', 'testing@gmail.com', 'doge jaja dooge jaja', 'jjjjjjjjjjjjjjjajajajajajaajajaja', 'resources/images/cars/mustang2.jpg', 'rent', '30', 2017, 'Audi', 'A7 Quattro', 33333, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 0, '2016-10-01', '2016-10-01 09:22:10', 'dev', 'cars', 'San Francisco, CA', '213-123-1234', 'testing@gmail.com', 'affogato afoafogato', 'jajaaj doge affogato', 'resources/images/cars/mustang1.jpg', 'sale', '300000', 2016, 'Ferrari', '458', 1200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 0, '2016-10-01', '2016-10-01 09:25:25', 'dev', 'cars', 'Cerritos, CA', '213-123-1234', 'testing@gmail.com', 'yayayapokepokepoke', 'pokepokepoke body testing yayayaya', 'resources/images/cars/mustang2.jpg', 'sale', '5000', 2005, 'Toyota', 'Avalon', 130000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 0, '2016-09-20', '0000-00-00 00:00:00', 'dev', 'cars', 'Los Angeles, CA', '213-323-3100', 'testing@gmail.com', '시범 제목 gagaga Testing 테스팅 시범 제목 123', '시범 게시글 입니다. Testing text box lalalala.\r\n\r\nspacespace new paragraph.', NULL, 'lease', '300', 2017, 'Infiniti', 'Q50', 1099, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 0, '2016-09-23', '0000-00-00 00:00:00', 'adhelper01', 'cars', 'Los Angeles, CA', '213-123-1234', 'testing@gmail.com', 'TESTING post num 2 geegeehee', 'TESTING post num 2 geegeehee\r\nbodyyyyy\r\n', NULL, 'lease', '310', 2017, 'Lexus', 'CT200h', 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 0, '2016-10-01', '2016-10-01 09:25:25', 'dev', 'cars', 'Cerritos, CA', '213-123-1234', 'testing@gmail.com', 'yay2a2y2a2po2k2e2pokepoke', 'pokepokepoke body testing yayayaya', NULL, 'sale', '5500', 2005, 'Toyota', 'Avalon', 120000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 0, '2016-10-04', '2016-10-04 00:07:58', 'dev', 'homes', 'Fullerton, CA', '213-322-2223', 'email@gmail.com', 'yogiygoigyoigyogyogyigoygoigy', 'yogiygoigyoigyogyogyigoygoigy', 'resources/images/homes/homeimage.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'sale', '500000', '3', '3', 2, 1500, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 0, '2016-10-04', '2016-10-04 01:22:50', 'dev', 'jobs', 'Fullerton, CA', '123-456-789', 'email2@gmail.com', 'ondemandkorea', 'employer body text text area', 'resources/images/jobs/jobs.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'full-time', 'administrative assistant', '30000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listings_premium`
--

CREATE TABLE IF NOT EXISTS `listings_premium` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `views` smallint(6) NOT NULL DEFAULT '1',
  `date` date NOT NULL,
  `datetime` datetime NOT NULL,
  `username` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cars_type` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cars_price` decimal(12,0) DEFAULT NULL,
  `cars_year` smallint(4) DEFAULT NULL,
  `cars_make` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cars_model` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cars_mileage` mediumint(12) DEFAULT NULL,
  `homes_type` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homes_price` decimal(12,0) DEFAULT NULL,
  `homes_bedrooms` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homes_bathrooms` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homes_parking` tinyint(2) DEFAULT NULL,
  `homes_sqft` mediumint(9) DEFAULT NULL,
  `homes_year` smallint(4) DEFAULT NULL,
  `jobs_type` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobs_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobs_compensation` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_type` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` decimal(12,0) DEFAULT NULL,
  `premium_status` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `listings_premium`
--

INSERT INTO `listings_premium` (`id`, `views`, `date`, `datetime`, `username`, `category`, `region`, `phone`, `email`, `subject`, `body`, `image`, `cars_type`, `cars_price`, `cars_year`, `cars_make`, `cars_model`, `cars_mileage`, `homes_type`, `homes_price`, `homes_bedrooms`, `homes_bathrooms`, `homes_parking`, `homes_sqft`, `homes_year`, `jobs_type`, `jobs_title`, `jobs_compensation`, `sale_type`, `sale_price`, `premium_status`) VALUES
(1, 3333, '2016-10-01', '2016-10-01 09:21:45', 'dev', 'cars', 'Los Angeles, CA', '213-323-3100', 'testing@gmail.com', '프리미엄 포스팅 시범 1 Premium POST Testing 1', '프리미엄 포스팅 시범 1 Premium POST Testing 1\r\n\r\nbody body body.', NULL, 'lease', '310', 2017, 'volkswagen', 'CC', 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `active`) VALUES
(1, 'adhelper01', '5f1055b5d434626a401c78aaa4d11b32', 'joe', 'lee', 'dalmuri002@gmail.com', 1),
(2, 'adhelper02', '5f1055b5d434626a401c78aaa4d11b32', 'john', 'smith', 'adhelper02@gmail.com', 1);
--
-- Database: `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE IF NOT EXISTS `pma__bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE IF NOT EXISTS `pma__column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=71 ;

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`) VALUES
(1, 'ktownapp', 'listings_general', 'id', '', '', '_', ''),
(2, 'ktownapp', 'listings_general', 'date', '', '', '_', ''),
(3, 'ktownapp', 'listings_general', 'username', '', '', '_', ''),
(4, 'ktownapp', 'listings_general', 'category', '', '', '_', ''),
(5, 'ktownapp', 'listings_general', 'region', '', '', '_', ''),
(6, 'ktownapp', 'listings_general', 'phone', '', '', '_', ''),
(7, 'ktownapp', 'listings_general', 'email', '', '', '_', ''),
(8, 'ktownapp', 'listings_general', 'subject', '', '', '_', ''),
(9, 'ktownapp', 'listings_general', 'body', '', '', '_', ''),
(10, 'ktownapp', 'listings_general', 'image', '', '', '_', ''),
(11, 'ktownapp', 'listings_general', 'cars_type', '', '', '_', ''),
(12, 'ktownapp', 'listings_general', 'cars_price', '', '', '_', ''),
(13, 'ktownapp', 'listings_general', 'cars_year', '', '', '_', ''),
(14, 'ktownapp', 'listings_general', 'cars_make', '', '', '_', ''),
(15, 'ktownapp', 'listings_general', 'cars_model', '', '', '_', ''),
(16, 'ktownapp', 'listings_general', 'cars_mileage', '', '', '_', ''),
(17, 'ktownapp', 'listings_general', 'homes_type', '', '', '_', ''),
(18, 'ktownapp', 'listings_general', 'homes_price', '', '', '_', ''),
(19, 'ktownapp', 'listings_general', 'homes_bedrooms', '', '', '_', ''),
(20, 'ktownapp', 'listings_general', 'homes_bathrooms', '', '', '_', ''),
(21, 'ktownapp', 'listings_general', 'homes_parking', '', '', '_', ''),
(22, 'ktownapp', 'listings_general', 'homes_sqft', '', '', '_', ''),
(23, 'ktownapp', 'listings_general', 'homes_year', '', '', '_', ''),
(24, 'ktownapp', 'listings_general', 'jobs_type', '', '', '_', ''),
(25, 'ktownapp', 'listings_general', 'jobs_title', '', '', '_', ''),
(27, 'ktownapp', 'listings_general', 'jobs_compensation', '', '', '_', ''),
(28, 'ktownapp', 'listings_general', 'sale_type', '', '', '_', ''),
(29, 'ktownapp', 'listings_general', 'sale_price', '', '', '_', ''),
(30, 'ktownapp', 'listings_premium', 'id', '', '', '_', ''),
(31, 'ktownapp', 'listings_premium', 'date', '', '', '_', ''),
(32, 'ktownapp', 'listings_premium', 'username', '', '', '_', ''),
(33, 'ktownapp', 'listings_premium', 'category', '', '', '_', ''),
(34, 'ktownapp', 'listings_premium', 'region', '', '', '_', ''),
(35, 'ktownapp', 'listings_premium', 'phone', '', '', '_', ''),
(36, 'ktownapp', 'listings_premium', 'email', '', '', '_', ''),
(37, 'ktownapp', 'listings_premium', 'subject', '', '', '_', ''),
(38, 'ktownapp', 'listings_premium', 'body', '', '', '_', ''),
(39, 'ktownapp', 'listings_premium', 'image', '', '', '_', ''),
(40, 'ktownapp', 'listings_premium', 'cars_type', '', '', '_', ''),
(41, 'ktownapp', 'listings_premium', 'cars_price', '', '', '_', ''),
(42, 'ktownapp', 'listings_premium', 'cars_year', '', '', '_', ''),
(43, 'ktownapp', 'listings_premium', 'cars_make', '', '', '_', ''),
(44, 'ktownapp', 'listings_premium', 'cars_model', '', '', '_', ''),
(45, 'ktownapp', 'listings_premium', 'cars_mileage', '', '', '_', ''),
(46, 'ktownapp', 'listings_premium', 'homes_type', '', '', '_', ''),
(47, 'ktownapp', 'listings_premium', 'homes_price', '', '', '_', ''),
(48, 'ktownapp', 'listings_premium', 'homes_bedrooms', '', '', '_', ''),
(49, 'ktownapp', 'listings_premium', 'homes_bathrooms', '', '', '_', ''),
(50, 'ktownapp', 'listings_premium', 'homes_parking', '', '', '_', ''),
(51, 'ktownapp', 'listings_premium', 'homes_sqft', '', '', '_', ''),
(52, 'ktownapp', 'listings_premium', 'homes_year', '', '', '_', ''),
(53, 'ktownapp', 'listings_premium', 'jobs_type', '', '', '_', ''),
(54, 'ktownapp', 'listings_premium', 'jobs_title', '', '', '_', ''),
(56, 'ktownapp', 'listings_premium', 'jobs_compensation', '', '', '_', ''),
(57, 'ktownapp', 'listings_premium', 'sale_type', '', '', '_', ''),
(58, 'ktownapp', 'listings_premium', 'sale_price', '', '', '_', ''),
(59, 'ktownapp', 'listings_premium', 'premium_status', '', '', '_', ''),
(60, 'ktownapp', 'users', 'id', '', '', '_', ''),
(61, 'ktownapp', 'users', 'username', '', '', '_', ''),
(62, 'ktownapp', 'users', 'password', '', '', '_', ''),
(63, 'ktownapp', 'users', 'first_name', '', '', '_', ''),
(64, 'ktownapp', 'users', 'last_name', '', '', '_', ''),
(65, 'ktownapp', 'users', 'email', '', '', '_', ''),
(66, 'ktownapp', 'users', 'active', '', '', '_', ''),
(67, 'ktownapp', 'listings_general', 'datetime', '', '', '_', ''),
(68, 'ktownapp', 'listings_premium', 'datetime', '', '', '_', ''),
(69, 'ktownapp', 'listings_general', 'views', '', '', '_', ''),
(70, 'ktownapp', 'listings_premium', 'views', '', '', '_', '');

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma__designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE IF NOT EXISTS `pma__history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE IF NOT EXISTS `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('ejh2163', '[{"db":"ktownapp","table":"listings_general"},{"db":"ktownapp","table":"listings_premium"},{"db":"ktownapp","table":"users"},{"db":"ktownapp","table":"listings_generic"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE IF NOT EXISTS `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE IF NOT EXISTS `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE IF NOT EXISTS `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE IF NOT EXISTS `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE IF NOT EXISTS `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('ejh2163', '2016-09-21 06:07:52', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `pma_bookmark`
--

CREATE TABLE IF NOT EXISTS `pma_bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_column_info`
--

CREATE TABLE IF NOT EXISTS `pma_column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_designer_coords`
--

CREATE TABLE IF NOT EXISTS `pma_designer_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `x` int(11) DEFAULT NULL,
  `y` int(11) DEFAULT NULL,
  `v` tinyint(4) DEFAULT NULL,
  `h` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma_history`
--

CREATE TABLE IF NOT EXISTS `pma_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_pdf_pages`
--

CREATE TABLE IF NOT EXISTS `pma_pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pma_recent`
--

CREATE TABLE IF NOT EXISTS `pma_recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma_relation`
--

CREATE TABLE IF NOT EXISTS `pma_relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_coords`
--

CREATE TABLE IF NOT EXISTS `pma_table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_info`
--

CREATE TABLE IF NOT EXISTS `pma_table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_table_uiprefs`
--

CREATE TABLE IF NOT EXISTS `pma_table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma_tracking`
--

CREATE TABLE IF NOT EXISTS `pma_tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma_userconfig`
--

CREATE TABLE IF NOT EXISTS `pma_userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
