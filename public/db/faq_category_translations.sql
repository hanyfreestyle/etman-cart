-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 11:27 PM
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
-- Dumping data for table `faq_category_translations`
--

INSERT INTO `faq_category_translations` (`id`, `category_id`, `locale`, `slug`, `name`, `des`, `g_title`, `g_des`) VALUES
(5, 3, 'ar', 'العناوين-والفروع', 'العناوين والفروع', 'نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق', 'العناوين والفروع', 'العناوين والفروع نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر'),
(6, 3, 'en', 'addresses-and-branches', 'Addresses and branches', 'We provide fast and reliable delivery service to all governorates of Egypt. We provide fast and reliable delivery service to all governorates of Egypt.', 'Addresses and branches', 'Addresses and branches We provide fast and reliable delivery service to all governorates of Egypt. We provide fast and reliable delivery service to'),
(7, 4, 'ar', 'الطلبات', 'الطلبات', 'الطلبات نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق', 'الطلبات', 'الطلبات نوفر خدمة التوصيل السريع والموثوق إلى جميع جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى'),
(8, 4, 'en', 'orders', 'Orders', 'We provide fast and reliable delivery service to all governorates of Egypt. We provide fast and reliable delivery service to all governorates of Egypt.', 'Orders', 'Orders We provide fast and reliable delivery service to all governorates of Egypt. We provide fast and reliable delivery service to all governorates of Egypt.'),
(9, 5, 'ar', 'خدمات-التوصيل', 'خدمات التوصيل', 'خدمات التوصيل نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق', 'خدمات التوصيل', 'نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق'),
(10, 5, 'en', 'delivery-services', 'Delivery Services', 'Delivery Services We provide fast and reliable delivery service to all governorates of Egypt. We provide fast and reliable delivery service to all governorates of Egypt.', 'Delivery Services', 'We provide fast and reliable delivery service to all governorates of Egypt. We provide fast and reliable delivery service to all governorates of Egypt.'),
(11, 6, 'ar', 'خدمات-الشحن-للمحافظات', 'خدمات الشحن للمحافظات', 'خدمات الشحن للمحافظات', 'خدمات الشحن للمحافظات', 'نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق'),
(12, 6, 'en', 'shipping-services-to-governorates', 'Shipping services to governorates', 'Shipping services to governorates', 'Shipping services to governorates', 'Shipping services to governorates'),
(13, 7, 'ar', 'سياسية-الاسترجاع', 'سياسية الاسترجاع', 'سياسية الاسترجاع', 'سياسية الاسترجاع', 'نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق'),
(14, 7, 'en', 'return-policy', 'Return Policy', 'Return Policy', 'Return Policy', 'Return Policy'),
(15, 8, 'ar', 'طلبات-التصنيع-الخاصة', 'طلبات التصنيع الخاصة', 'طلبات التصنيع الخاصة', 'طلبات التصنيع الخاص', 'نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق'),
(16, 8, 'en', 'special-requests', 'Special requests', 'Special requests', 'Special requests', 'Special requests'),
(17, 9, 'ar', 'خدمات-التصدير', 'خدمات التصدير', 'خدمات التصدير', 'خدمات التصدير', 'نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق إلى جميع محافظات مصر. نوفر خدمة التوصيل السريع والموثوق'),
(18, 9, 'en', 'export-services', 'Export services', 'Export services', 'Export services', 'Export services'),
(19, 10, 'ar', 'مجموعة-فارغة', 'مجموعة فارغة', 'مجموعة فارغة', 'مجموعة فارغة', 'مجموعة فارغة'),
(20, 10, 'en', 'empty-category', 'Empty Category', 'Empty Category', 'Empty Category', 'Empty Category');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
