-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 03:39 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_etman`
--

--
-- Dumping data for table `banner_translations`
--

INSERT INTO `banner_translations` (`id`, `banner_id`, `locale`, `name`, `des`, `other`, `url`, `url_but`) VALUES
(1, 4, 'ar', '01', NULL, NULL, NULL, NULL),
(2, 4, 'en', '01', NULL, NULL, NULL, NULL),
(3, 5, 'ar', 'PVC', '', '', NULL, NULL),
(4, 5, 'en', 'PVC', '', '', NULL, NULL),
(5, 6, 'ar', 'offer', '', '', NULL, NULL),
(6, 6, 'en', 'offer', '', '', NULL, NULL),
(7, 7, 'ar', '01', '', '', NULL, NULL),
(8, 7, 'en', '01', '', '', NULL, NULL),
(9, 8, 'ar', '02', '', '', 'https://g.page/Etman-Group&#63;share', NULL),
(10, 8, 'en', '02', '', '', 'https://g.page/Etman-Group&#63;share', NULL),
(11, 9, 'ar', '03', '', '', 'http://etman-group.com/ContactUs.html', NULL),
(12, 9, 'en', '03', '', '', 'http://etman-group.com/ContactUs.html', NULL),
(13, 10, 'ar', 'Dark', 'Dark', NULL, NULL, NULL),
(14, 10, 'en', 'Dark', 'Dark', NULL, NULL, NULL),
(15, 11, 'ar', 'الشركة', NULL, NULL, NULL, NULL),
(16, 11, 'en', 'الشركة', NULL, NULL, NULL, NULL),
(17, 12, 'ar', 'عروض', NULL, NULL, NULL, NULL),
(18, 12, 'en', 'عروض', NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
