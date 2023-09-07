-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 05:00 PM
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
-- Dumping data for table `blog_post_translations`
--

INSERT INTO `blog_post_translations` (`id`, `blog_id`, `locale`, `slug`, `name`, `des`, `g_title`, `g_des`) VALUES
(1, 1, 'ar', 'اطلاق-النسخة-التجريبية-لموقع-عتمان-جروب', 'اطلاق النسخة التجريبية لموقع عتمان جروب www.etman-group.com', '<p>السادة عملاء عتمان جروب نحيط سيادتكم علما باطلاق النسخة التجريبية لموقعنا مع بداية العام الجديد<br />\r\nايمانا منا باهمية التواجد والمضى قدما نحو التطوير ومواكبة التحول الرقمى الذى نشهده الان يتطور اكثر واكثر</p>\r\n\r\n<h2>روابط هامة</h2>\r\n\r\n<p>صفحتنا على Faecbook<br />\r\n<a href=\"https://www.facebook.com/Etman.Group\">https://www.facebook.com/Etman.Group</a></p>\r\n\r\n<p>حسابنا على Instagram<br />\r\n<a href=\"https://www.instagram.com/etmangroup.eg\">https://www.instagram.com/etmangroup.eg</a></p>\r\n\r\n<p>حسابنا على Linkedin<br />\r\n<a href=\"https://www.linkedin.com/company/etman-group\">https://www.linkedin.com/company/etman-group</a></p>\r\n\r\n<p>كيف تصل الينا<br />\r\n<a href=\"https://g.page/Etman-Group?share\">https://g.page/Etman-Group?share</a></p>\r\n\r\n<p>Whatsapp<br />\r\n<strong>0100-6180-117</strong></p>', 'اطلاق النسخة التجريبية لموقع عتمان جروب', 'عملاء عتمان جروب الكرام نحيط سيادتكم علما باطلاق النسخة التجريبية لموقعنا ايمانا منا بأهمية التواجد والمضى قدما نحو التطوير ومواكبة التحول الرقمى'),
(2, 1, 'en', 'launching-the-trial-version-of-the-etman-group-website', 'Launching the trial version of the Etman Group website www.etman-group.com', '<p>Dear customers of Etman Group, we inform you about the launch of the trial version of our website at the beginning of the new year<br />\r\nWe believe in the importance of being present and moving forward towards development and keeping pace with the digital transformation that we are witnessing now that is developing more and more.</p>', 'Launching the trial version of the Etman Group website', 'Dear customers, we launch our trial version of the site at the beginning of the new year, and we believe in the importance of digital transformation'),
(3, 2, 'ar', 'حساب-عتمان-جروب-على-موقع-التواصل-الاجتماعى-instagram', 'حساب عتمان جروب على موقع التواصل الاجتماعى Instagram', '<p>حساب عتمان جروب على موقع التواصل الاجتماعى Instagram</p>\r\n\r\n<p><a href=\"https://www.instagram.com/etmangroup.eg\">https://www.instagram.com/etmangroup.eg</a></p>\r\n\r\n<h2>روابط هامة</h2>\r\n\r\n<p>صفحتنا على Faecbook<br />\r\n<a href=\"https://www.facebook.com/Etman.Group\">https://www.facebook.com/Etman.Group</a></p>\r\n\r\n<p>حسابنا على Instagram<br />\r\n<a href=\"https://www.instagram.com/etmangroup.eg\">https://www.instagram.com/etmangroup.eg</a></p>\r\n\r\n<p>حسابنا على Linkedin<br />\r\n<a href=\"https://www.linkedin.com/company/etman-group\">https://www.linkedin.com/company/etman-group</a></p>\r\n\r\n<p>كيف تصل الينا<br />\r\n<a href=\"https://g.page/Etman-Group?share\">https://g.page/Etman-Group?share</a></p>\r\n\r\n<p>Whatsapp<br />\r\n<strong>0100-6180-117</strong></p>', 'حساب عتمان جروب على موقع التواصل الاجتماعى Instagram', 'حساب عتمان جروب على موقع التواصل الاجتماعى https://www.instagram.com/etmangroup.eg'),
(4, 2, 'en', 'etman-group-account-on-the-social-networking-instagram', 'Etman Group account on the social networking Instagram', '<p>Etman Group account on the social networking Instagram</p>\r\n\r\n<p><a href=\"https://www.instagram.com/etmangroup.eg\">https://www.instagram.com/etmangroup.eg</a></p>\r\n\r\n<h2>Important links</h2>\r\n\r\n<p>Faecbook<br />\r\n<a href=\"https://www.facebook.com/Etman.Group\">https://www.facebook.com/Etman.Group</a></p>\r\n\r\n<p>Instagram<br />\r\n<a href=\"https://www.instagram.com/etmangroup.eg\">https://www.instagram.com/etmangroup.eg</a></p>\r\n\r\n<p>Linkedin<br />\r\n<a href=\"https://www.linkedin.com/company/etman-group\">https://www.linkedin.com/company/etman-group</a></p>\r\n\r\n<p>Get Direction<br />\r\n<a href=\"https://g.page/Etman-Group?share\">https://g.page/Etman-Group?share</a></p>\r\n\r\n<p>Whatsapp<br />\r\n<strong>0100-6180-117</strong></p>', 'Etman Group account on the social networking Instagram', 'Etman Group account on the social networking Instagram ,https://www.instagram.com/etmangroup.eg'),
(5, 3, 'ar', 'ادارة-عتمان-جروب-والعاملين-بها-يتقدمون-لكم-بأطيب-التمنيات-بمناسبة-حلول-العام-الجديد-2022', 'ادارة عتمان جروب والعاملين بها يتقدمون لكم بأطيب التمنيات بمناسبة حلول العام الجديد 2022', '<p>ادارة عتمان جروب والعاملين بها يتقدمون لكم بأطيب التمنيات بمناسبة حلول العام الجديد 2022</p>\r\n\r\n<p>راجين من الله ان يجعل عامكمْ الجديد عاما تصنعون فيه البدايات الجديدة وتستمتعون بالإنجازات المميزة.</p>\r\n\r\n<p>كل عام وأنتم في صحة وعافية وسعادة دائمة.</p>\r\n\r\n<h2>روابط هامة</h2>\r\n\r\n<p>صفحتنا على Faecbook<br />\r\n<a href=\"https://www.facebook.com/Etman.Group\">https://www.facebook.com/Etman.Group</a></p>\r\n\r\n<p>حسابنا على Instagram<br />\r\n<a href=\"https://www.instagram.com/etmangroup.eg\">https://www.instagram.com/etmangroup.eg</a></p>\r\n\r\n<p>حسابنا على Linkedin<br />\r\n<a href=\"https://www.linkedin.com/company/etman-group\">https://www.linkedin.com/company/etman-group</a></p>\r\n\r\n<p>كيف تصل الينا<br />\r\n<a href=\"https://g.page/Etman-Group?share\">https://g.page/Etman-Group?share</a></p>\r\n\r\n<p>Whatsapp<br />\r\n<span style=\"font-size:16px\"><strong>0100-6180-117</strong></span></p>\r\n', 'ادارة عتمان جروب والعاملين بها يتقدمون لكم بأطيب التمنيات بمناسبة ', 'راجين من الله ان يجعل عامكمْ الجديد عاما تصنعون فيه البدايات الجديدة وتستمتعون بالإنجازات المميزة. كل عام وأنتم في صحة وعافية وسعادة دائمة.\r\n'),
(6, 3, 'en', 'best-wishes-to-you-on-the-occasion-of-the-new-year-2022', 'best wishes to you on the occasion of the new year 2022 ', '<p>Etman Group and its employees extend their best wishes to you on the occasion of the new year 2022</p>\r\n\r\n<p>We hope that God will make your new year a year in which you make new beginnings and enjoy distinguished achievements.</p>\r\n\r\n<p>Every year and you are in good health and happiness.</p>\r\n\r\n<p>Important links</p>\r\n\r\n<p>Faecbook<br />\r\n<a href=\"https://www.facebook.com/Etman.Group\">https://www.facebook.com/Etman.Group</a></p>\r\n\r\n<p>Instagram<br />\r\n<a href=\"https://www.instagram.com/etmangroup.eg\">https://www.instagram.com/etmangroup.eg</a></p>\r\n\r\n<p>Linkedin<br />\r\n<a href=\"https://www.linkedin.com/company/etman-group\">https://www.linkedin.com/company/etman-group</a></p>\r\n\r\n<p>Get Direction<br />\r\n<a href=\"https://g.page/Etman-Group?share\">https://g.page/Etman-Group?share</a></p>\r\n\r\n<p>Whatsapp<br />\r\n<span style=\"font-size:16px\"><strong>0100-6180-117</strong></span></p>\r\n', 'Best wishes to you on the occasion of the new year 2022 ', 'We hope that God will make your new year a year in which you make new beginnings and enjoy distinguished achievements.\r\n'),
(7, 4, 'ar', 'تجربة-اضافة-جديد', 'تجربة اضافة جديد', '<p>تجربة اضافة جديد</p>', 'تجربة اضافة جديد', 'تجربة اضافة جديد'),
(8, 4, 'en', 'test-to-add-new', 'Test To Add New', '<p>Test To Add New</p>', 'Test To Add New', 'Test To Add New');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
