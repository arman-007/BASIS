-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 28, 2023 at 12:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `md_arman_hosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `picture` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `picture`, `is_active`, `created_at`, `modified_at`) VALUES
(1, 'carX updated1', 'IMG_1693198662_custom-img2.jpg', 0, '2023-08-28 10:46:30', '2023-08-28 10:57:42'),
(2, 'Juta', 'IMG_1693198947_newsletter-img.jpg', 0, '2023-08-28 11:02:27', '2023-08-28 12:11:37'),
(3, 'b1', 'IMG_1693204106_retro-futurism-vector-futuristic-synth-wave-illustration-s-retro-poster-background-night-city-skyline-rave-party-flyer-design-157466232.webp', 1, '2023-08-28 12:11:52', '2023-08-28 12:28:26'),
(4, 'b2', 'IMG_1693203122_KQHZh2.webp', 1, '2023-08-28 12:12:02', '2023-08-28 12:12:02'),
(5, 'b3', 'IMG_1693203131_sunset-2177324_1920-001.jpg', 1, '2023-08-28 12:12:11', '2023-08-28 12:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `mobile`, `email`, `password`) VALUES
(1, 'arr', 'arr', '01234567890', 'ararar@ffd.co', 'arr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
