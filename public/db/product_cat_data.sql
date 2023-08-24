-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 09:12 PM
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
-- Database: `etman_20221006`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_cat_data`
--

CREATE TABLE `product_cat_data` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT 0,
  `module` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_en` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `des_en` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(11) DEFAULT 1,
  `postion` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_cat_data`
--

INSERT INTO `product_cat_data` (`id`, `cat_id`, `module`, `name`, `name_en`, `des`, `des_en`, `state`, `postion`) VALUES
(25, 6, 'Product', 'نوع المادة اللاصقة ', 'Type Of Adhesive', 'لاصق أكريليك ذو أساس مائي ', 'Water based acrylic adhesive', 1, 0),
(26, 6, 'Product', 'الفيلم', 'Film', 'شفاف ، كريستال ، الوان ، ليزير', 'clear & crystal film & easy tear film & laser color', 1, 0),
(27, 6, 'Product', 'العرض', 'Width', '12مم ,15مم ,18مم ,24مم', '12mm ,15mm ,18mm ,24mm', 1, 0),
(28, 6, 'Product', 'الطول', 'Length', '10,12,13.5,25, 30 متر', '10,12,13.5,25, 30 meters', 1, 0),
(29, 6, 'Product', 'سماكة ', 'Thickness', '38 & 40 ميكرون', '38 & 40 Micron ', 1, 0),
(43, 10, 'Product', 'نوع المادة اللاصقة', 'Type Of Adhesive', 'لاصق مطاطى', 'rubber adhesive', 1, 0),
(44, 10, 'Product', 'فيلم', 'Film', 'شريط عازل ', 'insulating tape', 1, 0),
(45, 10, 'Product', 'العرض', 'Width', '18 مم', '18mm', 1, 0),
(46, 10, 'Product', 'الطول', 'Length', '5,7,10,15,20 يارده', '5,7,10,15,20 yard ', 1, 0),
(48, 10, 'Product', 'التغليف', 'Packaging', '50 عبوة بالكرتونة', '50shrink/CTN', 1, 0),
(49, 12, 'Product', 'نوع المادة اللاصقة', 'Type Of Adhesive', 'لاصق مذيب ', 'Solvent adhesive', 1, 0),
(50, 12, 'Product', 'الفيلم', 'Film', 'شريط ورقى', 'tissue tape', 1, 0),
(51, 12, 'Product', 'العرض', 'Width', '12-15-18-24-45 مم', '12-15-18-24-45mm', 1, 0),
(52, 12, 'Product', 'طول', 'Length', '10 يارده', '10y', 1, 0),
(53, 12, 'Product', 'سماكة', 'Thickness', '190 ميكرون', '190 mic', 1, 0),
(55, 13, 'Product', 'نوع المادة اللاصقة', 'Type Of Adhesive', 'لاصق أكريليك ذو أساس مائي ', 'water based adhesive', 1, 0),
(56, 13, 'Product', 'فيلم', 'Film', 'ملون', 'COLOR', 1, 0),
(57, 13, 'Product', 'العرض', 'Width', 'متاح تحت الطلب ', 'available under request', 1, 0),
(58, 13, 'Product', 'الطول', 'Length', 'متاح تحت الطلب ', 'available under request', 1, 0),
(59, 13, 'Product', 'سماكة', 'Thickness', '45 ميكرون', '45 mic', 1, 0),
(61, 14, 'Product', 'نوع المادة اللاصقة ', 'Type Of Adhesive', 'مادة لاصقة ذات أساس مائي ', 'water based adhesive', 1, 0),
(62, 14, 'Product', 'فيلم ', 'Film', 'شفاف وأبيض ', 'clear & white based', 1, 0),
(63, 14, 'Product', 'عرض', 'Width', 'متاح حسب الطلب ', 'available under request', 1, 0),
(64, 14, 'Product', 'الطول', 'Length', 'متاح حسب الطلب ', 'available under request', 1, 0),
(65, 14, 'Product', 'سماكة ', 'Thickness', 'متاح حسب الطلب', 'available under request', 1, 0),
(66, 14, 'Product', 'الكور', 'Core', 'حسب متطلبات العملاء ', 'clients requirements', 1, 0),
(67, 16, 'Product', 'سماكة', 'Thickness ', '0.025 مم - 0.060 مم - 0.080 مم', '0.025 mm - 0.060 mm - 0.080 mm', 1, 0),
(68, 16, 'Product', 'سبيكة', 'Alloy ', ' 8011/ H14', ' 8011/ H14', 1, 0),
(69, 16, 'Product', 'السطح', 'Surface Finishing', 'جانب واحد لامع ، والاخر غير لامع ', 'one side bright, one side matte', 1, 0),
(73, 17, 'Product', 'سماكة', 'Thickness ', '0.010 مم - 0.011 مم ', '0.010 mm , 0.011 mm ', 1, 0),
(74, 17, 'Product', 'سبيكة', 'Alloy', '8011/O ', '8011/O ', 1, 0),
(75, 17, 'Product', 'السطح', 'Surface Finishing ', 'جانب واحد لامع ، والاخر غير لامع ', 'one side bright, one side matte', 1, 0),
(76, 17, 'Product', 'وحدة البيع ', 'Sale Unit ', 'معبأة في صندوق العرض أو أكياس', 'Packed in Display box or PP bag ', 1, 0),
(85, 25, 'Product', 'سماكة', 'Thickness ', '20 ميكرون', '20 micron ', 1, 0),
(86, 25, 'Product', 'الطول', 'Length', '70 سم', '70 cm', 1, 0),
(87, 25, 'Product', 'العرض', 'Width ', '100 سم', '100 cm', 1, 0),
(103, 36, 'Product', 'نوع المادة اللاصقة', 'Type Of Adhesive', 'لاصق أكريليك ذو أساس مائي ', 'water based adhesive', 1, 0),
(104, 36, 'Product', 'فيلم', 'Film', 'ليزر', 'Laser ', 1, 0),
(105, 36, 'Product', 'العرض', 'Width', '4.5 سم', '4.5 cm ', 1, 0),
(106, 36, 'Product', 'الطول', 'Length', 'متاح حسب الطلب ', 'as per request ', 1, 0),
(107, 36, 'Product', 'سماكة', 'Thickness', '40 ميكرون', '40 mic ', 1, 0),
(108, 37, 'Product', 'نوع المادة اللاصقة', 'Type of Adhesive', 'مادة لاصقة ذات أساس مذيب طبيعي ', 'Water based acrylic adhesive', 1, 0),
(109, 37, 'Product', 'العرض', 'Width', '1280 ,1610 , 1620 mm', '1280 ,1610 , 1620 mm', 1, 0),
(110, 37, 'Product', 'الطول', 'Length', '4000, 4500, 4800, 7300, 7500 متر ', '4000, 4500, 4800, 7300, 7500 Mtrs', 1, 0),
(111, 37, 'Product', 'سماكة', 'Thickness', '36 ميكرون الى 50 ميكرون', '36 microns to 50 microns', 1, 0),
(112, 37, 'Product', 'الكور', 'Core', '760 mm', '760 mm', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_cat_data`
--
ALTER TABLE `product_cat_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_cat_data`
--
ALTER TABLE `product_cat_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
