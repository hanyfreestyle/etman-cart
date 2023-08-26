-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 10:35 PM
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

INSERT INTO `banner_translations` (`id`, `banner_id`, `locale`, `name`, `des`, `other`, `url`) VALUES
(1, 4, 'ar', '01', '', '', NULL),
(2, 4, 'en', '01', '', '', NULL),
(3, 5, 'ar', 'PVC', '', '', NULL),
(4, 5, 'en', 'PVC', '', '', NULL),
(5, 6, 'ar', 'offer', '', '', NULL),
(6, 6, 'en', 'offer', '', '', NULL),
(7, 7, 'ar', '01', '', '', NULL),
(8, 7, 'en', '01', '', '', NULL),
(9, 8, 'ar', '02', '', '', 'https://g.page/Etman-Group&#63;share'),
(10, 8, 'en', '02', '', '', 'https://g.page/Etman-Group&#63;share'),
(11, 9, 'ar', '03', '', '', 'http://etman-group.com/ContactUs.html'),
(12, 9, 'en', '03', '', '', 'http://etman-group.com/ContactUs.html'),
(13, 10, 'ar', 'Dark', 'Dark', '', NULL),
(14, 10, 'en', 'Dark', 'Dark', '', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
