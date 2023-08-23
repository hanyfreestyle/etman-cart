-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 04:43 PM
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
-- Database: `a_test_puzzle`
--

--
-- Dumping data for table `config_def_photos`
--

INSERT INTO `config_def_photos` (`id`, `cat_id`, `photo`, `photo_thum_1`, `photo_thum_2`, `postion`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'images/def-photo/logo-N7MXfyFq7i.webp', NULL, NULL, 6, '2023-08-16 09:18:40', '2023-08-16 11:24:00'),
(3, 'project', 'images/def-photo/project-2mW1dPGqA4.webp', 'images/def-photo/project-4CIZMONAWn.webp', NULL, 1, '2023-08-16 09:18:40', '2023-08-16 11:21:37'),
(4, 'blog', 'images/def-photo/blog-0i93d20McM.webp', 'images/def-photo/blog-ja40gxZ7NU.webp', NULL, 2, '2023-08-16 09:18:40', '2023-08-16 11:29:40'),
(5, 'district', 'images/def-photo/district-KV7ho9poco.webp', 'images/def-photo/district-vYTx3dGPKL.webp', NULL, 3, '2023-08-16 09:18:40', '2023-08-16 11:26:38'),
(6, 'units', 'images/def-photo/units-IjgBIWg5fb.webp', 'images/def-photo/units-SUapFskARy.webp', NULL, 4, '2023-08-16 09:18:40', '2023-08-16 11:27:27'),
(7, 'developer', 'images/def-photo/developer-5ZTk6EyQOs.webp', 'images/def-photo/developer-b7xM42SSYe.webp', NULL, 0, '2023-08-16 11:28:03', '2023-08-16 11:28:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
