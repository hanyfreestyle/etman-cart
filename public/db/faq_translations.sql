-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2023 at 04:24 PM
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
(1, 1, 'ar', 'ما هى العناوين والفروع لشركة عتمان جروب ؟', 'المقر الرئيسي\r\n14 ش خليل بك متفرع من شارع\r\nاسماعيل صبري - الجمرك\r\nالاسكندرية - مصر \r\n\r\nالمقر الادارى\r\n336 طريق الجيش امام نادي التجاريين\r\nعمارات رويال بلازا - سابا باشا\r\nالاسكندرية - مصر', NULL, NULL, NULL),
(2, 1, 'en', 'What are the addresses and branches of Etman Group ?', 'Managerial Office\r\n14 Khalil Bek St., from Ismail Sabry El Gommork\r\nAlexandria - Egypt\r\n\r\nManagerial Office\r\n336 El Geish Road in front of Al Tegareen Club\r\nRoyal Plaza Buildings - Saba Basha\r\nAlexandria - Egypt', NULL, NULL, NULL),
(3, 2, 'ar', 'هل يوجد لكم معرض يمكنني من شراء المنتجات ؟', 'نعم لدينا معرض يمكنك شراء المنتجات منه باسعار مميزة سواء للجملة او التجزائة', '<h2><strong>عنوان المعرض</strong></h2>\r\n\r\n<ul>\r\n	<li>\r\n	<p>14 ش خليل بك متفرع من شارع<br />\r\n	اسماعيل صبري - الجمرك<br />\r\n	الاسكندرية - مصر</p>\r\n	</li>\r\n	<li>\r\n	<p>201006180117<br />\r\n	2034867311<br />\r\n	2034815941</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>مواعيد العمل</strong><br />\r\n	طول ايام الاسبوع<br />\r\n	من 9 صباحا وحتى 9 مساءا</p>\r\n	</li>\r\n</ul>', NULL, NULL),
(4, 2, 'en', 'Do you have a showroom where I can purchase products ?', 'Yes, we have a showroom where you can buy products at special prices, whether wholesale or retail', NULL, NULL, NULL),
(5, 3, 'ar', 'هل يوجد لكم فرع فى محافظة القاهرة ؟', 'لا يوجد لنا معرض فى القاهرة حاليا ونسعى جاهدين فى تلبية رغبة عملائنا فى توفير معرض لمنتجات عتمان جروب بالقاهرة فى اقرب وقت', NULL, NULL, NULL),
(6, 3, 'en', 'Do you have a branch in Cairo Governorate?', 'We do not currently have a showroom in Cairo, and we strive to fulfill our customers’ desire to provide a showroom for Etman Group products in Cairo as soon as possible.', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
