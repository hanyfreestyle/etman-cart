-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2023 at 09:03 PM
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
-- Dumping data for table `our_client_translations`
--

INSERT INTO `our_client_translations` (`id`, `client_id`, `locale`, `slug`, `name`, `des`, `g_title`, `g_des`) VALUES
(1, 4, 'ar', NULL, ' فاركو ب العالمية ', NULL, NULL, NULL),
(2, 4, 'en', NULL, 'Pharco B International', NULL, NULL, NULL),
(3, 5, 'ar', NULL, 'مجموعة نايل لينين', NULL, NULL, NULL),
(4, 5, 'en', NULL, 'Nile Linen Group', NULL, NULL, NULL),
(5, 6, 'ar', NULL, 'شركة فارما المنتجات الطبية', NULL, NULL, NULL),
(6, 6, 'en', NULL, 'Pharmaplast', NULL, NULL, NULL),
(7, 7, 'ar', NULL, 'الاسكندرية للادوية والصناعات الكيماوية', NULL, NULL, NULL),
(8, 7, 'en', NULL, 'Alexandria company for pharmaceuticals industries', NULL, NULL, NULL),
(9, 8, 'ar', NULL, 'الفرعونية للادوية فاروفارما', NULL, NULL, NULL),
(10, 8, 'en', NULL, 'Pharo Pharma For Pharmaceuticals', NULL, NULL, NULL),
(11, 9, 'ar', NULL, 'أبو الهول المصرية للزيوت والمنظفات ', NULL, NULL, NULL),
(12, 9, 'en', NULL, 'Abo El Hol Company For oils and detergents', NULL, NULL, NULL),
(13, 10, 'ar', NULL, 'سنيوريتا للصناعات الغذائية', NULL, NULL, NULL),
(14, 10, 'en', NULL, 'Senyorita Food Industries ', NULL, NULL, NULL),
(15, 11, 'ar', NULL, 'شركة النيل للمجمعات الاستهلاكية', NULL, NULL, NULL),
(16, 11, 'en', NULL, 'Sun Nile Co.(Family Market)', NULL, NULL, NULL),
(17, 12, 'ar', NULL, 'شركة الإسكندرية للمجمعات الإستهلاكية', NULL, NULL, NULL),
(18, 12, 'en', NULL, 'Alexandria Company for consumer complexes', NULL, NULL, NULL),
(19, 13, 'ar', NULL, 'المصرية للمطارات', NULL, NULL, NULL),
(20, 13, 'en', NULL, 'Egyptian Airports Company', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
