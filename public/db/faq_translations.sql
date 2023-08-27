-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 05:08 PM
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
(9, 5, 'ar', 'السؤال 1', 'الاجابة 1', NULL, NULL, NULL),
(10, 5, 'en', 'Question 1', 'Answer 1', NULL, NULL, NULL),
(11, 6, 'ar', 'السؤال 2', 'الاجابة 2', NULL, NULL, NULL),
(12, 6, 'en', 'Question 2', 'Answer 2', NULL, NULL, NULL),
(13, 7, 'ar', 'السؤال 3', 'الاجابة 3', NULL, NULL, NULL),
(14, 7, 'en', 'Question 3', 'Answer 3', NULL, NULL, NULL),
(15, 8, 'ar', 'السؤال الاول المجموعة 2', 'الاجابة 1 المجموعة 2', NULL, NULL, NULL),
(16, 8, 'en', 'Question 1 for Category 1', 'Answer 1 for Category 1', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
