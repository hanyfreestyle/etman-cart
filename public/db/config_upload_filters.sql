-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 09:56 PM
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
-- Dumping data for table `config_upload_filters`
--

INSERT INTO `config_upload_filters` (`id`, `name`, `type`, `convert_state`, `quality_val`, `new_w`, `new_h`, `canvas_back`, `greyscale`, `flip_state`, `flip_v`, `blur`, `blur_size`, `pixelate`, `pixelate_size`, `text_state`, `text_print`, `font_size`, `font_path`, `font_color`, `font_opacity`, `text_position`, `watermark_state`, `watermark_img`, `watermark_position`, `state`, `created_at`, `updated_at`) VALUES
(1, 'NoEdit', 1, 1, 85, 100, 100, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(2, 'DefPhoto', 4, 1, 85, 800, 420, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(3, 'FavIcon', 4, 1, 85, 40, 40, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(4, 'Amenity', 4, 1, 85, 80, 80, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(5, 'PhotoGallery', 4, 1, 85, 1024, 768, '#ffffff', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-06 21:57:01', '2023-09-06 21:57:01'),
(6, 'اخر الاخبار', 4, 1, 85, 450, 237, '#FFFFFF', 0, 0, 0, 0, '0', 0, '5', 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, '2023-09-07 11:27:22', '2023-09-07 11:27:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
