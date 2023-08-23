-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 10:51 PM
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
-- Dumping data for table `category_table_translations`
--

INSERT INTO `category_table_translations` (`id`, `category_table_id`, `locale`, `des`) VALUES
(1, 1, 'ar', 'لاصق أكريليك ذو أساس مائي'),
(2, 1, 'en', 'Water based acrylic adhesive'),
(3, 2, 'ar', 'شفاف ، كريستال ، الوان ، ليزير'),
(4, 2, 'en', 'clear & crystal film & easy tear film & laser color'),
(5, 3, 'ar', '12مم ,15مم ,18مم ,24مم'),
(6, 3, 'en', '12mm ,15mm ,18mm ,24mm'),
(7, 4, 'ar', '10,12,13.5,25, 30 متر'),
(8, 4, 'en', '10,12,13.5,25, 30 meters'),
(9, 5, 'ar', '38 & 40 ميكرون'),
(10, 5, 'en', '38 & 40 Micron'),
(11, 6, 'ar', 'لاصق مطاطى'),
(12, 6, 'en', 'rubber adhesive'),
(13, 7, 'ar', 'شريط عازل'),
(14, 7, 'en', 'insulating tape'),
(15, 8, 'ar', '18 مم'),
(16, 8, 'en', '18mm'),
(17, 9, 'ar', '5,7,10,15,20 يارده'),
(18, 9, 'en', '5,7,10,15,20 yard'),
(19, 10, 'ar', '50 عبوة بالكرتونة'),
(20, 10, 'en', '50shrink/CTN'),
(21, 11, 'ar', 'لاصق مذيب'),
(22, 11, 'en', 'Solvent adhesive'),
(23, 12, 'ar', 'شريط ورقى'),
(24, 12, 'en', 'tissue tape'),
(25, 13, 'ar', '12-15-18-24-45 مم'),
(26, 13, 'en', '12-15-18-24-45mm'),
(27, 14, 'ar', '10 يارده'),
(28, 14, 'en', '10 yard'),
(29, 15, 'ar', '190 ميكرون'),
(30, 15, 'en', '190 mic'),
(31, 16, 'ar', 'لاصق أكريليك ذو أساس مائي'),
(32, 16, 'en', 'water based adhesive'),
(33, 17, 'ar', 'ملون'),
(34, 17, 'en', 'COLOR'),
(35, 18, 'ar', 'متاح تحت الطلب'),
(36, 18, 'en', 'available under request'),
(37, 19, 'ar', 'متاح تحت الطلب'),
(38, 19, 'en', 'available under request'),
(39, 20, 'ar', '45 ميكرون'),
(40, 20, 'en', '45 mic'),
(41, 21, 'ar', 'مادة لاصقة ذات أساس مائي'),
(42, 21, 'en', 'water based adhesive'),
(43, 22, 'ar', 'شفاف وأبيض'),
(44, 22, 'en', 'clear & white based'),
(45, 23, 'ar', 'متاح حسب الطلب'),
(46, 23, 'en', 'available under request'),
(47, 24, 'ar', 'متاح حسب الطلب'),
(48, 24, 'en', 'available under request'),
(49, 25, 'ar', 'متاح حسب الطلب'),
(50, 25, 'en', 'available under request'),
(51, 26, 'ar', 'حسب متطلبات العملاء'),
(52, 26, 'en', 'clients requirements'),
(53, 27, 'ar', '0.025 مم - 0.060 مم - 0.080 مم'),
(54, 27, 'en', '0.025 mm - 0.060 mm - 0.080 mm'),
(55, 28, 'ar', '8011/ H14'),
(56, 28, 'en', '8011/ H14'),
(57, 29, 'ar', 'جانب واحد لامع ، والاخر غير لامع'),
(58, 29, 'en', 'one side bright, one side matte'),
(59, 30, 'ar', '0.010 مم - 0.011 مم'),
(60, 30, 'en', '0.010 mm , 0.011 mm'),
(61, 31, 'ar', '8011/O'),
(62, 31, 'en', '8011/O'),
(63, 32, 'ar', 'جانب واحد لامع ، والاخر غير لامع'),
(64, 32, 'en', 'one side bright, one side matte'),
(65, 33, 'ar', 'معبأة في صندوق العرض أو أكياس'),
(66, 33, 'en', 'Packed in Display box or PP bag'),
(67, 34, 'ar', '20 ميكرون'),
(68, 34, 'en', '20 micron'),
(69, 35, 'ar', '70 سم'),
(70, 35, 'en', '70 cm'),
(71, 36, 'ar', '100 سم'),
(72, 36, 'en', '100 cm'),
(73, 37, 'ar', 'لاصق أكريليك ذو أساس مائي'),
(74, 37, 'en', 'water based adhesive'),
(75, 38, 'ar', 'ليزر'),
(76, 38, 'en', 'Laser'),
(77, 39, 'ar', '4.5 سم'),
(78, 39, 'en', '4.5 cm'),
(79, 40, 'ar', 'متاح حسب الطلب'),
(80, 40, 'en', 'as per request'),
(81, 41, 'ar', '40 ميكرون'),
(82, 41, 'en', '40 mic'),
(83, 42, 'ar', 'مادة لاصقة ذات أساس مذيب طبيعي'),
(84, 42, 'en', 'Water based acrylic adhesive'),
(85, 43, 'ar', '1280 ,1610 , 1620 mm'),
(86, 43, 'en', '1280 ,1610 , 1620 mm'),
(87, 44, 'ar', '4000, 4500, 4800, 7300, 7500 متر'),
(88, 44, 'en', '4000, 4500, 4800, 7300, 7500 Mtrs'),
(89, 45, 'ar', '36 ميكرون الى 50 ميكرون'),
(90, 45, 'en', '36 microns to 50 microns'),
(91, 46, 'ar', '760 mm'),
(92, 46, 'en', '760 mm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
