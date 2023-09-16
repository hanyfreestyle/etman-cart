-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2023 at 05:32 PM
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
-- Dumping data for table `faq_translations`
--

INSERT INTO `faq_translations` (`id`, `faq_id`, `locale`, `name`, `des`, `other`, `url`, `url_but`) VALUES
(1, 1, 'ar', 'السؤال الاول', 'السؤال الاول', NULL, NULL, NULL),
(2, 1, 'en', 'السؤال الاول', 'السؤال الاول', NULL, NULL, NULL),
(3, 2, 'ar', 'السؤال الثانى', 'السؤال الثانى', NULL, NULL, NULL),
(4, 2, 'en', 'السؤال الثانى', 'السؤال الثانى', NULL, NULL, NULL),
(5, 3, 'ar', 'السؤال الثالث', 'السؤال الثالث', NULL, NULL, NULL),
(6, 3, 'en', 'السؤال الثالث', 'السؤال الثالث', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
