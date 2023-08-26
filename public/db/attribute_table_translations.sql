-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 01:50 PM
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
-- Dumping data for table `attribute_table_translations`
--

INSERT INTO `attribute_table_translations` (`id`, `attribute_id`, `locale`, `name`) VALUES
(1, 1, 'ar', 'نوع المادة اللاصقة'),
(2, 1, 'en', 'Type Of Adhesive'),
(3, 2, 'ar', 'الفيلم'),
(4, 2, 'en', 'Film'),
(5, 3, 'ar', 'العرض'),
(6, 3, 'en', 'Width'),
(7, 4, 'ar', 'الطول'),
(8, 4, 'en', 'Length'),
(9, 5, 'ar', 'سماكة'),
(10, 5, 'en', 'Thickness'),
(11, 6, 'ar', 'التغليف'),
(12, 6, 'en', 'Packaging'),
(13, 7, 'ar', 'الكور'),
(14, 7, 'en', 'Core'),
(15, 8, 'ar', 'سبيكة'),
(16, 8, 'en', 'Alloy'),
(17, 9, 'ar', 'السطح'),
(18, 9, 'en', 'Surface Finishing'),
(19, 10, 'ar', 'وحدة البيع'),
(20, 10, 'en', 'Sale Unit'),
(21, 11, 'ar', 'المادة الخام'),
(22, 11, 'en', 'Materials'),
(23, 12, 'ar', 'الالوان المتاحة'),
(24, 12, 'en', 'Color'),
(25, 13, 'ar', 'الوزن'),
(26, 13, 'en', 'Weight');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
