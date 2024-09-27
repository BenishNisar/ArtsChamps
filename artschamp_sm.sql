-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 12:13 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artschamp_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `social_media` varchar(900) DEFAULT NULL,
  `country` varchar(200) DEFAULT NULL,
  `live` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `art_style` varchar(600) NOT NULL,
  `join_date` date DEFAULT NULL,
  `work` varchar(599) NOT NULL,
  `photos` varchar(600) DEFAULT NULL,
  `rating` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `user_id`, `bio`, `date_of_birth`, `social_media`, `country`, `live`, `location`, `art_style`, `join_date`, `work`, `photos`, `rating`) VALUES
(1, 5, 'Platform for artists to thrive', '2024-07-01', 'https://www.youtube.com/@benishnisarcoding', 'Afganistan', 'karachi', 'Civil Hospital', 'Best Painters Here.........', '2024-07-22', 'Developer', 'photos/w3amhbTPnWAl5PrBveT6SEtSeoNMPyWn5ivQ059A.jpg', '45'),
(2, 3, '\"Each stroke reveals a world untold.\"', '2024-07-01', 'https://www.youtube.com/@benishnisarcoding', 'Pakistan', 'Islamabad', 'DHA Phase II', 'scatch', '2024-07-22', 'developer', 'photos/lzgGLQHIi2D2NbT9TE6L32mcNZ1LlorUjGLQMdAY.jpg', '4'),
(3, 4, 'hunn', '2024-07-25', 'https://www.youtube.com/@benishnisarcoding', 'Pakistan', 'pindi', 'pakjumhuriyacolony..', 'paint', '2024-07-25', 'Artitecture', 'photos/UOtZh1AQK4y2tjGYB523pCoThZVnISl2IPWrgQ7d.jpg', '5'),
(4, 4, 'hunn', '2024-07-25', 'https://www.youtube.com/@benishnisarcoding', 'Pakistan', 'pindi', 'pakjumhuriyacolony..', 'paint', '2024-07-25', 'Artitecture', 'photos/UOtZh1AQK4y2tjGYB523pCoThZVnISl2IPWrgQ7d.jpg', '5'),
(5, 7, 'Artist', '2024-07-02', 'https://www.youtube.com/@benishnisarcoding', 'Pakistan', 'Lahore', 'nazimabad', 'styling', '2024-07-25', 'Designing', 'C:\\xampp\\tmp\\php7609.tmp', '4'),
(6, 7, 'Artist', '2024-07-25', 'https://www.youtube.com/@benishnisarcoding', 'Pakistan', 'Lahore', 'nazimabad', 'styling', '2024-07-25', 'Designing', 'C:\\xampp\\tmp\\phpE7E9.tmp', '5'),
(8, 15, 'Artist', NULL, NULL, NULL, 'karachi', 'pakjumhuriyacolony..', 'artist', NULL, 'designing', NULL, NULL),
(9, 16, 'Paintings', NULL, NULL, NULL, 'karachi', 'pakjumhuriyacolony..', 'paintin', NULL, 'designer', NULL, NULL),
(10, 16, 'Platform for artists to thrive', '2024-07-29', 'https://www.youtube.com/@benishnisarcoding', 'Pakistan', 'lahore', 'nazimabad', 'styling', '2024-07-29', 'Artitecture', 'C:\\xampp\\tmp\\php9F06.tmp', '3'),
(11, 18, 'Paintings', NULL, NULL, NULL, 'Islamabad', 'golden......', 'painting', NULL, 'office', NULL, NULL),
(12, 25, 'Platform for artists to thrive', NULL, NULL, NULL, 'karachi', 'Pakistan', 'scatch', NULL, 'house', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aboutprofile`
--

CREATE TABLE `aboutprofile` (
  `profile_id` int(11) NOT NULL,
  `about_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `artwork_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `descripation` varchar(500) NOT NULL,
  `image_path` varchar(799) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artwork`
--

INSERT INTO `artwork` (`artwork_id`, `users_id`, `title`, `descripation`, `image_path`, `created_at`) VALUES
(2, 1, 'Hina', 'khan', 'image_path/1722157180profilelogo.png', '2024-07-25 09:07:02'),
(3, 9, 'welldone', 'here is your fggol', 'image_path/1722157138left1.jpg', '2024-07-28 08:42:17'),
(4, 14, 'hel', 'arts', 'image_path/1722276916ArtsCamera_icon.png', '2024-07-29 18:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `billing_address` text NOT NULL,
  `billing_city` varchar(300) NOT NULL,
  `billing_state` varchar(200) NOT NULL,
  `billing_zip` varchar(25) NOT NULL,
  `billing_country` varchar(200) NOT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `firstname` varchar(600) NOT NULL,
  `lastname` varchar(300) NOT NULL,
  `email` varchar(599) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `billing_address`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `total_amount`, `firstname`, `lastname`, `email`, `phone`, `updated_at`, `created_at`) VALUES
(16, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:25:18', '2024-09-16 08:25:18'),
(17, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:25:40', '2024-09-16 08:25:40'),
(18, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:25:41', '2024-09-16 08:25:41'),
(19, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:25:41', '2024-09-16 08:25:41'),
(20, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:26:09', '2024-09-16 08:26:09'),
(21, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:26:10', '2024-09-16 08:26:10'),
(22, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:26:11', '2024-09-16 08:26:11'),
(23, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:26:20', '2024-09-16 08:26:20'),
(24, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:17', '2024-09-16 08:27:17'),
(25, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:18', '2024-09-16 08:27:18'),
(26, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:19', '2024-09-16 08:27:19'),
(27, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:19', '2024-09-16 08:27:19'),
(28, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:19', '2024-09-16 08:27:19'),
(29, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:20', '2024-09-16 08:27:20'),
(30, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:20', '2024-09-16 08:27:20'),
(31, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:21', '2024-09-16 08:27:21'),
(32, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:21', '2024-09-16 08:27:21'),
(33, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:21', '2024-09-16 08:27:21'),
(34, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:22', '2024-09-16 08:27:22'),
(35, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:22', '2024-09-16 08:27:22'),
(36, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:31', '2024-09-16 08:27:31'),
(37, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:32', '2024-09-16 08:27:32'),
(38, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:37', '2024-09-16 08:27:37'),
(39, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:37', '2024-09-16 08:27:37'),
(40, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:37', '2024-09-16 08:27:37'),
(41, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:40', '2024-09-16 08:27:40'),
(42, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:41', '2024-09-16 08:27:41'),
(43, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:41', '2024-09-16 08:27:41'),
(44, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:42', '2024-09-16 08:27:42'),
(45, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:42', '2024-09-16 08:27:42'),
(46, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:48', '2024-09-16 08:27:48'),
(47, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:49', '2024-09-16 08:27:49'),
(48, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:49', '2024-09-16 08:27:49'),
(49, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:50', '2024-09-16 08:27:50'),
(50, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:50', '2024-09-16 08:27:50'),
(51, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:51', '2024-09-16 08:27:51'),
(52, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:51', '2024-09-16 08:27:51'),
(53, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:52', '2024-09-16 08:27:52'),
(54, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:52', '2024-09-16 08:27:52'),
(55, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:52', '2024-09-16 08:27:52'),
(56, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:53', '2024-09-16 08:27:53'),
(57, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:53', '2024-09-16 08:27:53'),
(58, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:54', '2024-09-16 08:27:54'),
(59, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:27:54', '2024-09-16 08:27:54'),
(60, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:29:31', '2024-09-16 08:29:31'),
(61, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:29:32', '2024-09-16 08:29:32'),
(62, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:36:03', '2024-09-16 08:36:03'),
(63, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:36:04', '2024-09-16 08:36:04'),
(64, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:36:07', '2024-09-16 08:36:07'),
(65, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:36:09', '2024-09-16 08:36:09'),
(66, 'pakcolony', 'karachi', 'us', '89', 'us', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:36:10', '2024-09-16 08:36:10'),
(67, 'pakcolony', 'karachi', 'us', '33090', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:37:39', '2024-09-16 08:37:39'),
(68, 'pakcolony', 'karachi', 'us', '33090', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:37:48', '2024-09-16 08:37:48'),
(69, 'pakcolony', 'karachi', 'us', '33090', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:40:54', '2024-09-16 08:40:54'),
(70, 'pakcolony', 'karachi', 'us', '33090', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:41:00', '2024-09-16 08:41:00'),
(71, 'pakcolony', 'karachi', 'sindhi', '89', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:41:48', '2024-09-16 08:41:48'),
(72, 'pakcolony', 'karachi', 'sindhi', '89', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:41:56', '2024-09-16 08:41:56'),
(73, 'pakcolony', 'karachi', 'sindhi', '89', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 15:41:58', '2024-09-16 08:41:58'),
(74, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:34:01', '2024-09-16 09:34:01'),
(75, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:34:06', '2024-09-16 09:34:06'),
(76, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:34:08', '2024-09-16 09:34:08'),
(77, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:34:09', '2024-09-16 09:34:09'),
(78, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:34:09', '2024-09-16 09:34:09'),
(79, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:38:58', '2024-09-16 09:38:58'),
(80, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:40:01', '2024-09-16 09:40:01'),
(81, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:47:18', '2024-09-16 09:47:18'),
(82, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:47:29', '2024-09-16 09:47:29'),
(83, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:47:29', '2024-09-16 09:47:29'),
(84, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:47:30', '2024-09-16 09:47:30'),
(85, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:47:43', '2024-09-16 09:47:43'),
(86, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:49:48', '2024-09-16 09:49:48'),
(87, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:49:48', '2024-09-16 09:49:48'),
(88, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:49:59', '2024-09-16 09:49:59'),
(89, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:55:20', '2024-09-16 09:55:20'),
(90, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Benish', 'Khan', 'noor@gmail.com', '0345678999', '2024-09-16 16:55:24', '2024-09-16 09:55:24'),
(91, 'pakcolony', 'karachi', 'sindhi', '8908', 'gb', NULL, 'Benish', 'Nisar', 'noor@gmail.com', '0333445554', '2024-09-16 16:56:22', '2024-09-16 09:56:22'),
(92, 'pakcolony', 'karachi', 'sindhi', '8908', 'gb', NULL, 'Benish', 'Nisar', 'noor@gmail.com', '0333445554', '2024-09-16 16:56:30', '2024-09-16 09:56:30'),
(93, 'pakcolony', 'karachi', 'sindhi', '8908', 'gb', NULL, 'Benish', 'Nisar', 'noor@gmail.com', '0333445554', '2024-09-16 16:56:35', '2024-09-16 09:56:35'),
(94, 'pakcolony', 'karachi', 'sindhi', '8908', 'gb', NULL, 'Benish', 'Nisar', 'noor@gmail.com', '0333445554', '2024-09-16 16:56:37', '2024-09-16 09:56:37'),
(95, 'pakcolony', 'karachi', 'sindhi', '8908', 'gb', NULL, 'Benish', 'Nisar', 'noor@gmail.com', '0333445554', '2024-09-16 16:56:38', '2024-09-16 09:56:38'),
(96, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Bushra', 'Khan', 'noor@gmail.com', '0333445554', '2024-09-16 16:58:33', '2024-09-16 09:58:33'),
(97, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Bushra', 'Khan', 'noor@gmail.com', '0333445554', '2024-09-16 16:58:41', '2024-09-16 09:58:41'),
(98, 'pakcolony', 'karachi', 'sindhi', '8908', 'ca', NULL, 'Bushra', 'Khan', 'noor@gmail.com', '0333445554', '2024-09-16 17:00:24', '2024-09-16 10:00:24'),
(99, 'pakcolony', 'karachi', 'us', '89', 'ca', NULL, 'Bushra', 'khan', 'hinakhan@gmail.com', '03428410999', '2024-09-16 17:01:20', '2024-09-16 10:01:20'),
(100, 'pakcolony', 'karachi', 'us', '89', 'ca', NULL, 'Bushra', 'khan', 'hinakhan@gmail.com', '03428410999', '2024-09-16 17:01:30', '2024-09-16 10:01:30'),
(101, 'pakcolony', 'karachi', 'sindhi', '33090', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 17:07:03', '2024-09-16 10:07:03'),
(102, 'pakcolony', 'karachi', 'sindhi', '33090', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '03428410999', '2024-09-16 17:10:27', '2024-09-16 10:10:27'),
(103, 'pakcolony', 'karachi', 'sindhi', '8908', 'gb', NULL, 'Hinaah', 'khan', 'noor@gmail.com', '0333445554', '2024-09-16 17:12:24', '2024-09-16 10:12:24'),
(104, 'Railwat', 'Lahore', 'sindhi', '33090', 'ca', NULL, 'nadra', 'Khan', 'noor@gmail.com', '03566667791', '2024-09-17 14:41:35', '2024-09-17 07:41:35'),
(105, 'pakcolony', 'karachi', 'sindhi', '89', 'ca', NULL, 'Bushra', 'khan', 'noor@gmail.com', '0333445554', '2024-09-17 14:44:08', '2024-09-17 07:44:08'),
(106, 'railwaycolony', 'Islamabad', 'sindhi', '7700', 'au', NULL, 'Bushra', 'Khan', 'noor@gmail.com', '03478356751', '2024-09-17 19:38:29', '2024-09-17 12:38:29'),
(107, 'rahimyar', 'punjab', 'sindhi', '33090', 'gb', NULL, 'hoor', 'fatima', 'fatimakhan@gmail.com', '03566667791', '2024-09-17 20:00:53', '2024-09-17 13:00:53'),
(108, 'railwaycolony', 'punjab', 'sindhi', '7700', 'gb', NULL, 'beniiish', 'khann', 'beniishkhan@gmail.com', '0333445554', '2024-09-17 20:06:35', '2024-09-17 13:06:35'),
(109, 'rahimyar', 'punjab', 'sindhi', '7700', 'ca', NULL, 'hina', 'khan', 'noor@gmail.com', '03478356751', '2024-09-17 20:22:32', '2024-09-17 13:22:32'),
(110, 'railwaycolony', 'punjab', 'sindhi', '8908', 'ca', NULL, 'nadra', 'Khan', 'hinakhan@gmail.com', '03566667791', '2024-09-17 20:27:22', '2024-09-17 13:27:22'),
(111, 'rahimyar', 'punjab', 'sindhi', '7700', 'ca', NULL, 'nida', 'khan', 'noor@gmail.com', '0333445554', '2024-09-17 20:32:25', '2024-09-17 13:32:25'),
(112, 'railwaycolony', 'punjab', 'sindhi', '8908', 'ca', NULL, 'Bushra', 'khan', 'hinakhan@gmail.com', '0333445554', '2024-09-17 20:40:39', '2024-09-17 13:40:39'),
(113, 'railwaycolony', 'punjab', 'sindhi', '990', 'ca', NULL, 'Benish', 'khan', 'noor@gmail.com', '03566667791', '2024-09-26 12:31:14', '2024-09-26 05:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `card_holder_name` varchar(255) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `expiration_date` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`id`, `order_id`, `card_holder_name`, `card_number`, `expiration_date`, `created_at`, `updated_at`) VALUES
(1, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:25:18', '2024-09-16 15:25:18'),
(2, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:25:40', '2024-09-16 15:25:40'),
(3, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:25:41', '2024-09-16 15:25:41'),
(4, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:25:41', '2024-09-16 15:25:41'),
(5, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:26:09', '2024-09-16 15:26:09'),
(6, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:26:10', '2024-09-16 15:26:10'),
(7, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:26:11', '2024-09-16 15:26:11'),
(8, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:26:20', '2024-09-16 15:26:20'),
(9, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:17', '2024-09-16 15:27:17'),
(10, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:18', '2024-09-16 15:27:18'),
(11, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:19', '2024-09-16 15:27:19'),
(12, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:19', '2024-09-16 15:27:19'),
(13, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:19', '2024-09-16 15:27:19'),
(14, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:20', '2024-09-16 15:27:20'),
(15, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:20', '2024-09-16 15:27:20'),
(16, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:21', '2024-09-16 15:27:21'),
(17, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:21', '2024-09-16 15:27:21'),
(18, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:21', '2024-09-16 15:27:21'),
(19, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:22', '2024-09-16 15:27:22'),
(20, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:22', '2024-09-16 15:27:22'),
(21, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:31', '2024-09-16 15:27:31'),
(22, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:32', '2024-09-16 15:27:32'),
(23, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:37', '2024-09-16 15:27:37'),
(24, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:37', '2024-09-16 15:27:37'),
(25, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:38', '2024-09-16 15:27:38'),
(26, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:40', '2024-09-16 15:27:40'),
(27, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:41', '2024-09-16 15:27:41'),
(28, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:41', '2024-09-16 15:27:41'),
(29, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:42', '2024-09-16 15:27:42'),
(30, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:42', '2024-09-16 15:27:42'),
(31, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:48', '2024-09-16 15:27:48'),
(32, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:49', '2024-09-16 15:27:49'),
(33, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:49', '2024-09-16 15:27:49'),
(34, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:50', '2024-09-16 15:27:50'),
(35, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:50', '2024-09-16 15:27:50'),
(36, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:51', '2024-09-16 15:27:51'),
(37, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:51', '2024-09-16 15:27:51'),
(38, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:52', '2024-09-16 15:27:52'),
(39, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:52', '2024-09-16 15:27:52'),
(40, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:52', '2024-09-16 15:27:52'),
(41, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:53', '2024-09-16 15:27:53'),
(42, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:53', '2024-09-16 15:27:53'),
(43, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:54', '2024-09-16 15:27:54'),
(44, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:27:54', '2024-09-16 15:27:54'),
(45, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:29:31', '2024-09-16 15:29:31'),
(46, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:29:32', '2024-09-16 15:29:32'),
(47, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:36:03', '2024-09-16 15:36:03'),
(48, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:36:04', '2024-09-16 15:36:04'),
(49, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:36:07', '2024-09-16 15:36:07'),
(50, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:36:09', '2024-09-16 15:36:09'),
(51, NULL, 'hina', '8998899', '2024-09-16', '2024-09-16 15:36:10', '2024-09-16 15:36:10'),
(52, NULL, 'hina', '388499589', '2024-09-16', '2024-09-16 15:37:39', '2024-09-16 15:37:39'),
(53, NULL, 'hina', '388499589', '2024-09-16', '2024-09-16 15:37:48', '2024-09-16 15:37:48'),
(54, NULL, 'hina', '388499589', '2024-09-16', '2024-09-16 15:40:54', '2024-09-16 15:40:54'),
(55, NULL, 'hina', '388499589', '2024-09-16', '2024-09-16 15:41:00', '2024-09-16 15:41:00'),
(56, NULL, 'hina', '9485869', '2024-09-16', '2024-09-16 15:41:48', '2024-09-16 15:41:48'),
(57, NULL, 'hina', '9485869', '2024-09-16', '2024-09-16 15:41:56', '2024-09-16 15:41:56'),
(58, NULL, 'hina', '9485869', '2024-09-16', '2024-09-16 15:41:58', '2024-09-16 15:41:58'),
(59, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:34:01', '2024-09-16 16:34:01'),
(60, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:34:06', '2024-09-16 16:34:06'),
(61, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:34:08', '2024-09-16 16:34:08'),
(62, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:34:09', '2024-09-16 16:34:09'),
(63, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:34:09', '2024-09-16 16:34:09'),
(64, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:38:58', '2024-09-16 16:38:58'),
(65, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:40:01', '2024-09-16 16:40:01'),
(66, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:47:18', '2024-09-16 16:47:18'),
(67, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:47:29', '2024-09-16 16:47:29'),
(68, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:47:29', '2024-09-16 16:47:29'),
(69, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:47:30', '2024-09-16 16:47:30'),
(70, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:47:43', '2024-09-16 16:47:43'),
(71, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:49:48', '2024-09-16 16:49:48'),
(72, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:49:49', '2024-09-16 16:49:49'),
(73, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:49:59', '2024-09-16 16:49:59'),
(74, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:55:20', '2024-09-16 16:55:20'),
(75, NULL, 'hina', '4858489', '2024-09-16', '2024-09-16 16:55:24', '2024-09-16 16:55:24'),
(76, NULL, 'hina', '8989888', '2024-09-16', '2024-09-16 16:56:22', '2024-09-16 16:56:22'),
(77, NULL, 'hina', '8989888', '2024-09-16', '2024-09-16 16:56:30', '2024-09-16 16:56:30'),
(78, NULL, 'hina', '8989888', '2024-09-16', '2024-09-16 16:56:35', '2024-09-16 16:56:35'),
(79, NULL, 'hina', '8989888', '2024-09-16', '2024-09-16 16:56:37', '2024-09-16 16:56:37'),
(80, NULL, 'hina', '8989888', '2024-09-16', '2024-09-16 16:56:38', '2024-09-16 16:56:38'),
(81, NULL, 'hina', '994990', '2024-09-16', '2024-09-16 16:58:33', '2024-09-16 16:58:33'),
(82, NULL, 'hina', '994990', '2024-09-16', '2024-09-16 16:58:41', '2024-09-16 16:58:41'),
(83, NULL, 'hina', '994990', '2024-09-16', '2024-09-16 17:00:24', '2024-09-16 17:00:24'),
(84, NULL, 'hina', '8889999', '2024-09-16', '2024-09-16 17:01:20', '2024-09-16 17:01:20'),
(85, NULL, 'hina', '8889999', '2024-09-16', '2024-09-16 17:01:30', '2024-09-16 17:01:30'),
(86, NULL, 'hina', '9948857', '2024-09-16', '2024-09-16 17:07:03', '2024-09-16 17:07:03'),
(87, NULL, 'hina', '9948857', '2024-09-16', '2024-09-16 17:10:27', '2024-09-16 17:10:27'),
(88, NULL, 'hina', '437757888', '2024-09-16', '2024-09-16 17:12:24', '2024-09-16 17:12:24'),
(89, NULL, 'hina', '945566667', '2024-09-17', '2024-09-17 14:41:35', '2024-09-17 14:41:35'),
(90, NULL, 'hina', '99889888', '2024-09-17', '2024-09-17 14:44:08', '2024-09-17 14:44:08'),
(91, NULL, 'nida', '933344545', '2024-09-17', '2024-09-17 19:38:29', '2024-09-17 19:38:29'),
(92, NULL, 'fatima', '738889900', '2024-09-17', '2024-09-17 20:00:53', '2024-09-17 20:00:53'),
(93, NULL, 'khan', '4233999', '2024-09-17', '2024-09-17 20:06:35', '2024-09-17 20:06:35'),
(94, NULL, 'nida', '78890088', '2024-09-17', '2024-09-17 20:22:32', '2024-09-17 20:22:32'),
(95, NULL, 'hina', '665777', '2024-09-17', '2024-09-17 20:27:22', '2024-09-17 20:27:22'),
(96, NULL, 'nida', '475888990', '2024-09-17', '2024-09-17 20:32:25', '2024-09-17 20:32:25'),
(97, NULL, 'hina', '67778888', '2024-09-17', '2024-09-17 20:40:39', '2024-09-17 20:40:39'),
(98, NULL, 'nida', '67787888', '2024-09-18', '2024-09-26 12:31:14', '2024-09-26 12:31:14');

-- --------------------------------------------------------

--
-- Table structure for table `check_ins`
--

CREATE TABLE `check_ins` (
  `check_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `location_name` varchar(200) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment_name`, `user_id`, `post_id`, `created_at`) VALUES
(1, 'this is message for awesome ', 7, 46, '2024-07-30 06:39:42'),
(2, 'MashahAllah', 7, 67, '2024-08-22 05:58:28'),
(3, 'gooff', 7, 68, '2024-08-25 15:15:06'),
(4, 'gooff', 7, 68, '2024-08-25 15:15:20'),
(5, 'gooff', 7, 68, '2024-08-25 15:15:36'),
(6, 'gooff', 7, 68, '2024-08-25 15:18:37'),
(7, 'good', 7, 68, '2024-08-25 15:18:48'),
(8, 'good', 7, 68, '2024-08-25 15:19:52'),
(9, 'excellent', 7, 68, '2024-08-25 15:20:04'),
(10, 'good', 7, 68, '2024-08-25 15:22:23'),
(11, 'excellent', 7, 68, '2024-08-25 15:24:12'),
(12, 'excellent', 7, 68, '2024-08-25 15:26:05'),
(13, 'excellent', 7, 68, '2024-08-25 15:26:07'),
(14, 'good', 7, 68, '2024-08-25 15:26:18'),
(15, 'nice', 7, 68, '2024-08-25 15:34:47'),
(16, 'good', 7, 67, '2024-08-25 15:37:04'),
(17, 'excellent', 7, 66, '2024-08-28 14:24:24'),
(18, 'nice', 7, 69, '2024-09-02 13:17:44'),
(19, 'nice', 7, 69, '2024-09-02 13:17:46'),
(20, 'nice', 7, 69, '2024-09-02 13:17:48'),
(21, 'nice', 7, 69, '2024-09-02 13:17:50'),
(22, 'nice', 7, 69, '2024-09-02 13:17:51'),
(23, 'nice', 7, 69, '2024-09-02 13:17:51'),
(24, 'nice', 7, 69, '2024-09-02 13:17:52'),
(25, 'nice', 7, 69, '2024-09-02 13:17:53'),
(26, 'exc', 7, 69, '2024-09-02 13:18:08'),
(27, 'exc', 7, 69, '2024-09-02 13:18:13'),
(28, 'exc', 7, 69, '2024-09-02 13:18:14'),
(29, 'excellent', 7, 69, '2024-09-02 13:18:52'),
(30, 'excellent', 7, 69, '2024-09-04 01:23:55'),
(31, 'excellent', 7, 69, '2024-09-04 13:58:16'),
(32, 'good', 7, 68, '2024-09-04 13:58:31'),
(33, 'excellent', 7, 69, '2024-09-04 14:17:10'),
(34, 'awesome', 7, 68, '2024-09-04 14:17:30'),
(35, 'amazing', 7, 68, '2024-09-04 14:18:07'),
(36, 'amazing', 7, 68, '2024-09-04 14:18:10'),
(37, 'amazing', 7, 68, '2024-09-04 14:18:16'),
(38, 'good', 7, 68, '2024-09-04 14:18:22'),
(39, 'nice', 7, 68, '2024-09-04 14:18:32'),
(40, 'nice', 7, 68, '2024-09-04 14:19:08'),
(41, 'amazing', 7, 69, '2024-09-04 19:00:46'),
(42, 'awesome', 7, 68, '2024-09-05 01:51:30'),
(43, 'awesome', 7, 68, '2024-09-05 01:51:31'),
(44, 'excellent', 7, 68, '2024-09-05 01:51:42'),
(45, 'excellent', 7, 68, '2024-09-05 01:51:51'),
(46, 'good', 7, 68, '2024-09-05 01:52:02'),
(47, 'good', 7, 68, '2024-09-05 01:52:04'),
(48, 'good', 7, 68, '2024-09-05 01:52:07'),
(49, 'nice', 7, 69, '2024-09-05 01:52:27'),
(50, 'amazing', 7, 69, '2024-09-05 02:13:19'),
(51, 'awesome', 7, 69, '2024-09-05 02:31:20'),
(52, 'amazing', 7, 68, '2024-09-05 02:32:10'),
(53, 'nice', 7, 68, '2024-09-05 02:32:26'),
(54, 'nice', 7, 68, '2024-09-05 02:32:30'),
(55, 'sldkj', 7, 69, '2024-09-05 12:58:36'),
(56, 'awesome', 7, 69, '2024-09-14 13:26:12'),
(57, 'awesome', 7, 69, '2024-09-14 13:26:14'),
(58, 'awesome', 7, 69, '2024-09-14 13:26:15'),
(59, 'awesome', 7, 69, '2024-09-14 13:26:29'),
(60, 'good', 7, 69, '2024-09-14 13:29:06'),
(61, 'good', 7, 69, '2024-09-14 13:29:09'),
(62, 'good', 7, 69, '2024-09-14 13:29:10'),
(63, 'good', 7, 69, '2024-09-14 13:29:11'),
(64, 'vgood', 7, 69, '2024-09-14 13:29:20'),
(65, 'vgood', 7, 69, '2024-09-14 13:29:21'),
(66, 'vgood', 7, 69, '2024-09-14 13:29:22'),
(67, 'excellent', 7, 69, '2024-09-14 13:29:40'),
(68, 'excellent', 7, 69, '2024-09-14 13:29:41'),
(69, 'excellent', 7, 69, '2024-09-14 13:29:48'),
(70, 'excellent', 7, 69, '2024-09-14 13:29:51'),
(71, 'excellent', 7, 69, '2024-09-14 13:30:02'),
(72, 'good', 7, 69, '2024-09-14 13:30:40'),
(73, 'good', 7, 69, '2024-09-14 13:30:43'),
(74, 'good', 7, 69, '2024-09-14 13:50:02'),
(75, 'good', 7, 69, '2024-09-14 13:53:17'),
(76, 'good', 7, 69, '2024-09-14 13:53:21'),
(77, 'good', 7, 69, '2024-09-14 13:53:22'),
(78, 'good', 7, 69, '2024-09-14 13:53:24'),
(79, 'good', 7, 69, '2024-09-14 13:53:25'),
(80, 'good', 7, 69, '2024-09-14 13:53:25'),
(81, 'goodkk', 7, 69, '2024-09-14 13:53:36'),
(82, 'amazing', 7, 69, '2024-09-14 14:06:52'),
(83, 'amazing', 7, 69, '2024-09-14 14:06:54'),
(84, 'amazing', 7, 69, '2024-09-14 14:06:55'),
(85, 'amazing', 7, 69, '2024-09-14 14:06:56'),
(86, 'awesome', 7, 69, '2024-09-14 14:09:55'),
(87, 'gooff', 7, 69, '2024-09-14 14:12:09'),
(88, 'amazing', 7, 69, '2024-09-14 14:13:48'),
(89, 'amazing', 7, 69, '2024-09-14 14:13:49'),
(90, 'amazing', 7, 69, '2024-09-14 14:13:50'),
(91, 'amazing', 7, 69, '2024-09-14 14:13:51'),
(92, 'amazing', 7, 69, '2024-09-14 14:13:51'),
(93, 'amazing', 7, 69, '2024-09-14 14:13:52'),
(94, 'excellent', 7, 69, '2024-09-14 14:18:16'),
(95, 'nice', 7, 69, '2024-09-14 14:18:31'),
(96, 'good', 7, 69, '2024-09-14 14:18:49'),
(97, 'good', 7, 69, '2024-09-14 14:18:52'),
(98, 'nice', 7, 69, '2024-09-14 14:19:11'),
(99, 'amazing', 7, 69, '2024-09-14 14:22:55'),
(100, 'good', 7, 69, '2024-09-14 14:29:56'),
(101, 'weldone', 7, 69, '2024-09-14 14:30:07'),
(102, 'awesome', 7, 68, '2024-09-14 14:30:22'),
(103, 'gooh', 7, 69, '2024-09-15 14:28:42'),
(104, 'weldone', 7, 69, '2024-09-15 14:28:54'),
(105, 'awesome', 7, 69, '2024-09-15 15:21:58'),
(106, 'gooff', 7, 69, '2024-09-15 18:59:49'),
(107, 'gooff', 7, 69, '2024-09-15 18:59:52'),
(108, 'gooff', 7, 69, '2024-09-15 18:59:54'),
(109, 'gooff', 7, 69, '2024-09-15 18:59:56'),
(110, 'excellent', 7, 69, '2024-09-16 13:40:03'),
(111, 'good', 7, 69, '2024-09-16 13:57:10'),
(112, 'good', 7, 68, '2024-09-16 14:01:54'),
(113, 'good', 7, 68, '2024-09-16 14:01:57'),
(114, 'good', 7, 69, '2024-09-16 14:03:50'),
(115, 'good', 7, 68, '2024-09-16 14:09:11'),
(116, 'gooff', 7, 70, '2024-09-16 15:07:48'),
(117, 'goof', 7, 70, '2024-09-16 15:08:58'),
(118, 'jhbk', 7, 70, '2024-09-16 15:10:16'),
(119, 'kkkk', 7, 69, '2024-09-16 15:10:37'),
(120, 'goo', 7, 71, '2024-09-18 00:02:40'),
(121, 'h', 7, 71, '2024-09-18 00:15:10'),
(122, 'jj', 7, 71, '2024-09-18 00:28:44'),
(123, 'amazing', 7, 71, '2024-09-19 18:21:14'),
(124, 'good', 7, 72, '2024-09-19 23:33:40'),
(125, 'amazing', 7, 72, '2024-09-19 23:37:00'),
(126, 'excellent', 25, 72, '2024-09-24 15:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `conversationes`
--

CREATE TABLE `conversationes` (
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `users_id_1` int(11) NOT NULL,
  `users_id_2` int(11) NOT NULL,
  `unique_conversation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `convers_message`
--

CREATE TABLE `convers_message` (
  `conversation_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `id` int(11) NOT NULL,
  `followed_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`id`, `followed_id`, `user_id`, `created_at`) VALUES
(33, 7, 23, '2024-09-24 14:20:03'),
(36, 23, 7, '2024-09-24 14:28:45'),
(38, 7, 24, '2024-09-24 14:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `friend_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gallery_img` varchar(600) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `created_at`, `gallery_img`, `user_id`) VALUES
(31, '2024-07-29 18:33:10', 'gallery_images/1722277990car.jpg', 14),
(32, '2024-07-29 18:34:29', 'gallery_images/1722278069ArtsCamera_icon.png', 15),
(33, '2024-07-29 18:35:44', 'gallery_images/1722278144artschamps_profile.png', 1),
(44, '2024-08-09 13:18:50', 'gallery_images/1723184330.jpg', 7),
(45, '2024-08-09 13:22:59', 'gallery_images/1723184579.jpg', 7),
(46, '2024-08-09 13:36:18', 'gallery_images/1723185378.jpg', 7),
(47, '2024-08-09 13:44:34', 'gallery_images/1723185874.png', 7),
(48, '2024-08-09 13:47:28', 'gallery_images/1723186048.jpg', 7),
(49, '2024-08-09 13:50:09', 'gallery_images/1723186209.jpg', 7),
(50, '2024-08-09 13:53:36', 'gallery_images/1723186416.jpg', 7),
(51, '2024-08-09 13:54:05', 'gallery_images/1723186445.jpg', 7),
(52, '2024-08-09 14:09:14', 'gallery_images/1723187354.jpg', 7),
(53, '2024-08-09 14:16:22', 'gallery_images/1723187782.jpg', 7),
(54, '2024-08-09 14:16:34', 'gallery_images/1723187794.jpg', 7),
(55, '2024-08-09 14:17:08', 'gallery_images/1723187828.jpg', 7),
(56, '2024-08-09 14:17:31', 'gallery_images/1723187851.jpg', 7),
(57, '2024-08-09 14:35:12', 'gallery_images/1723188912.jpg', 7),
(58, '2024-09-19 18:20:27', 'gallery_images/1726744827.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `created_at`, `user_id`, `status`) VALUES
(1, 30, '2024-07-26 15:44:54', 7, 0),
(2, 30, '2024-07-26 15:44:58', 7, 0),
(3, 30, '2024-07-26 15:45:23', 7, 0),
(4, 30, '2024-07-26 15:45:31', 7, 0),
(5, 30, '2024-07-26 15:46:04', 7, 0),
(6, 30, '2024-07-26 15:46:17', 7, 0),
(7, 30, '2024-07-26 15:47:55', 7, 0),
(8, 30, '2024-07-26 15:51:33', 7, 0),
(9, 30, '2024-07-26 15:51:50', 7, 0),
(10, 30, '2024-07-26 15:52:32', 7, 0),
(11, 30, '2024-07-26 15:52:34', 7, 0),
(12, 31, '2024-07-26 15:53:10', 7, 0),
(13, 31, '2024-07-27 09:49:49', 7, 0),
(14, 31, '2024-07-27 17:56:09', 7, 0),
(15, 31, '2024-07-27 19:01:05', 7, 0),
(16, 32, '2024-07-28 12:28:22', 7, 0),
(17, 35, '2024-07-29 14:09:04', 7, 0),
(18, 40, '2024-07-29 17:44:33', 16, 0),
(19, 42, '2024-07-30 08:46:41', 7, 0),
(20, 42, '2024-07-30 09:07:21', 1, 0),
(21, 42, '2024-07-30 09:09:19', 1, 0),
(22, 42, '2024-07-30 09:09:20', 1, 0),
(23, 43, '2024-07-30 09:13:54', 1, 0),
(24, 42, '2024-07-30 09:14:37', 7, 0),
(25, 44, '2024-07-30 09:15:14', 7, 0),
(26, 44, '2024-07-30 12:29:45', 7, 0),
(27, 44, '2024-07-30 05:43:10', 7, 1),
(28, 44, '2024-07-30 12:41:52', 7, 1),
(29, 44, '2024-07-30 12:43:21', 7, 1),
(30, 44, '2024-07-30 12:44:18', 7, 1),
(31, 44, '2024-07-30 13:03:19', 7, 1),
(32, 45, '2024-07-30 06:08:29', 7, 0),
(33, 45, '2024-07-30 06:21:11', 1, 0),
(34, 45, '2024-07-30 13:11:52', 7, 1),
(35, 45, '2024-07-30 13:13:01', 7, 1),
(36, 45, '2024-07-30 13:13:02', 7, 1),
(37, 45, '2024-07-30 13:13:03', 7, 1),
(38, 45, '2024-07-30 13:13:19', 7, 1),
(39, 46, '2024-07-30 06:33:10', 7, 0),
(40, 46, '2024-07-30 06:33:10', 7, 0),
(41, 46, '2024-07-30 06:33:07', 1, 0),
(42, 46, '2024-07-30 13:47:19', 7, 1),
(43, 46, '2024-07-30 14:30:55', 7, 1),
(44, 46, '2024-07-30 14:30:56', 7, 1),
(45, 46, '2024-07-30 14:30:58', 7, 1),
(46, 46, '2024-07-30 14:30:59', 7, 1),
(47, 46, '2024-07-30 14:31:21', 7, 1),
(48, 47, '2024-07-30 08:33:06', 7, 0),
(49, 49, '2024-07-30 16:50:42', 7, 1),
(50, 50, '2024-07-30 16:52:20', 7, 1),
(51, 50, '2024-07-30 16:52:30', 7, 1),
(52, 51, '2024-07-30 17:03:25', 7, 1),
(53, 52, '2024-07-31 21:45:01', 7, 1),
(54, 52, '2024-07-31 21:45:05', 7, 1),
(55, 55, '2024-08-05 09:44:22', 7, 0),
(56, 55, '2024-08-05 16:47:36', 7, 1),
(57, 57, '2024-08-06 16:20:59', 7, 1),
(58, 58, '2024-08-07 00:35:39', 7, 1),
(59, 60, '2024-08-08 14:32:20', 7, 1),
(60, 60, '2024-08-08 14:32:23', 7, 1),
(61, 61, '2024-08-08 20:23:12', 7, 1),
(62, 61, '2024-08-08 20:23:13', 7, 1),
(63, 61, '2024-08-08 20:23:14', 7, 1),
(64, 62, '2024-08-08 18:57:54', 7, 0),
(65, 62, '2024-08-09 14:25:53', 7, 1),
(66, 63, '2024-08-12 00:57:21', 7, 1),
(67, 64, '2024-08-16 01:27:02', 7, 1),
(68, 67, '2024-08-25 02:27:28', 7, 1),
(69, 68, '2024-08-28 14:22:57', 7, 1),
(70, 68, '2024-08-28 14:23:00', 7, 1),
(71, 68, '2024-08-28 14:23:07', 7, 1),
(72, 68, '2024-08-28 14:23:18', 7, 1),
(73, 69, '2024-09-02 13:17:39', 7, 1),
(74, 70, '2024-09-16 15:11:16', 7, 1),
(75, 71, '2024-09-17 12:14:51', 7, 1),
(76, 71, '2024-09-17 12:15:01', 7, 1),
(77, 72, '2024-09-19 23:33:30', 7, 1),
(78, 72, '2024-09-24 15:14:37', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_type` varchar(300) NOT NULL,
  `media_url` varchar(399) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sender_message` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message_text` varchar(900) NOT NULL,
  `recipient_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `user_id`, `sender_message`, `created_at`, `message_text`, `recipient_id`, `post_id`) VALUES
(30, 7, 'hlo', '2024-07-30 15:30:24', 'hlo', 0, 0),
(31, 7, 'hlo', '2024-08-04 23:48:18', 'hlo', 0, 0),
(32, 7, 'hlo', '2024-08-05 00:51:53', 'hlo', 0, 0),
(33, 7, 'hlo', '2024-08-05 00:52:02', 'hlo', 0, 0),
(34, 7, 'hlo', '2024-08-05 00:52:10', 'hlo', 0, 0),
(35, 7, 'Hey how are you', '2024-08-05 00:55:29', 'Hey how are you', 0, 0),
(36, 7, 'heyyy', '2024-08-05 01:15:45', 'heyyy', 0, 0),
(37, 7, 'mm', '2024-08-05 01:21:18', 'mm', 0, 0),
(38, 7, 'good', '2024-08-05 01:26:44', 'good', 0, 0),
(39, 7, 'weldone', '2024-08-05 01:27:03', 'weldone', 0, 0),
(40, 7, 'heyyy', '2024-08-05 01:30:14', 'heyyy', 0, 0),
(41, 7, 'Hello how are you', '2024-08-06 00:37:18', 'Hello how are you', 1, NULL),
(42, 7, 'hona', '2024-08-06 01:17:48', 'hona', 1, NULL),
(43, 7, 'Hello how are you', '2024-08-06 12:53:24', 'Hello how are you', 1, NULL),
(44, 7, 'Hello how are you', '2024-08-06 12:53:25', 'Hello how are you', 1, NULL),
(45, 7, 'hlo', '2024-08-06 13:08:44', 'hlo', 1, NULL),
(46, 7, 'hona', '2024-08-06 13:09:35', 'hona', 1, NULL),
(47, 7, 'hlo', '2024-08-06 13:10:55', 'hlo', 1, NULL),
(48, 7, 'hlo', '2024-08-06 13:32:58', 'hlo', 1, NULL),
(49, 7, 'hlo', '2024-08-06 14:17:53', 'hlo', 1, NULL),
(50, 7, 'howarret', '2024-08-06 14:45:54', 'howarret', 1, NULL),
(51, 7, 'hlo', '2024-08-06 14:52:10', 'hlo', 1, NULL),
(52, 7, 'Hello how are you', '2024-08-06 14:52:25', 'Hello how are you', 1, NULL),
(53, 7, 'heyyy', '2024-08-06 14:52:35', 'heyyy', 1, NULL),
(54, 7, 'Hello how are you', '2024-08-06 15:15:03', 'Hello how are you', 1, NULL),
(55, 7, 'Hello how are you', '2024-08-06 15:15:21', 'Hello how are you', 1, NULL),
(56, 7, 'hlo', '2024-08-06 15:15:29', 'hlo', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `isread` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `message`, `isread`, `created_at`, `updated_at`) VALUES
(1, 0, 'not treat well', 1, '2024-07-22 07:00:00', '2024-09-24 06:56:10'),
(2, 0, 'nice', 1, '2024-07-26 07:00:00', '2024-09-24 06:56:10'),
(3, 0, 'weo', 1, '2024-07-27 07:00:00', '2024-09-24 06:56:10'),
(4, 19, ' started following you.', NULL, '2024-09-24 13:56:22', '2024-09-24 13:56:22'),
(5, 19, ' started following you.', NULL, '2024-09-24 13:56:25', '2024-09-24 13:56:25'),
(6, 7, ' started following you.', NULL, '2024-09-24 14:01:38', '2024-09-24 14:01:38'),
(7, 7, ' started following you.', NULL, '2024-09-24 14:07:09', '2024-09-24 14:07:09'),
(8, 23, ' started following you.', NULL, '2024-09-24 14:07:50', '2024-09-24 14:07:50'),
(9, 23, ' started following you.', NULL, '2024-09-24 14:10:27', '2024-09-24 14:10:27'),
(10, 7, ' started following you.', NULL, '2024-09-24 14:20:03', '2024-09-24 14:20:03'),
(11, 23, ' started following you.', NULL, '2024-09-24 14:22:45', '2024-09-24 14:22:45'),
(12, 23, ' started following you.', NULL, '2024-09-24 14:25:54', '2024-09-24 14:25:54'),
(13, 23, ' started following you.', NULL, '2024-09-24 14:28:45', '2024-09-24 14:28:45'),
(14, 7, ' started following you.', NULL, '2024-09-24 14:37:00', '2024-09-24 14:37:00'),
(15, 7, ' started following you.', NULL, '2024-09-24 14:46:50', '2024-09-24 14:46:50'),
(16, 17, ' started following you.', NULL, '2024-09-24 15:28:48', '2024-09-24 15:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `order_status` tinyint(1) NOT NULL DEFAULT 0,
  `order_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `method_name` enum('credit/Debit Card','ArtsChamps Wallet','Jazz Cash','Easy Paisa','Habib Bank Account','Cash on Delivery') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `method_name`, `created_at`, `updated_at`) VALUES
(1, 'Jazz Cash', '2024-08-21 13:18:14', '2024-08-21 13:18:14'),
(2, 'credit/Debit Card', '2024-08-21 15:14:41', '2024-08-21 15:14:41'),
(3, 'Jazz Cash', '2024-08-21 17:53:56', '2024-08-21 17:53:56'),
(4, 'credit/Debit Card', '2024-08-21 23:27:08', '2024-08-21 23:27:08'),
(5, 'Easy Paisa', '2024-08-21 23:44:21', '2024-08-21 23:44:21'),
(6, 'Easy Paisa', '2024-08-22 00:13:28', '2024-08-22 00:13:28'),
(7, 'Jazz Cash', '2024-08-22 00:24:18', '2024-08-22 00:24:18'),
(8, 'Jazz Cash', '2024-08-22 12:24:58', '2024-08-22 12:24:58'),
(9, 'Jazz Cash', '2024-08-23 02:05:02', '2024-08-23 02:05:02'),
(10, 'credit/Debit Card', '2024-08-23 02:08:53', '2024-08-23 02:08:53'),
(12, 'Jazz Cash', '2024-08-28 14:28:43', '2024-08-28 14:28:43'),
(13, 'Easy Paisa', '2024-09-01 22:50:40', '2024-09-01 22:50:40'),
(14, 'Easy Paisa', '2024-09-01 22:51:00', '2024-09-01 22:51:00'),
(15, 'Habib Bank Account', '2024-09-05 15:20:51', '2024-09-05 15:20:51'),
(16, 'Habib Bank Account', '2024-09-05 15:25:55', '2024-09-05 15:25:55'),
(17, 'Jazz Cash', '2024-09-16 15:38:00', '2024-09-16 15:38:00'),
(18, 'Cash on Delivery', '2024-09-16 17:12:32', '2024-09-16 17:12:32'),
(19, 'Cash on Delivery', '2024-09-17 14:41:35', '2024-09-17 14:41:35'),
(20, 'Cash on Delivery', '2024-09-17 14:41:44', '2024-09-17 14:41:44'),
(21, 'Cash on Delivery', '2024-09-17 14:42:09', '2024-09-17 14:42:09'),
(22, 'Cash on Delivery', '2024-09-17 14:44:13', '2024-09-17 14:44:13'),
(23, 'Cash on Delivery', '2024-09-17 19:38:34', '2024-09-17 19:38:34'),
(24, 'Cash on Delivery', '2024-09-17 19:38:36', '2024-09-17 19:38:36'),
(25, 'Cash on Delivery', '2024-09-17 19:38:48', '2024-09-17 19:38:48'),
(26, 'Cash on Delivery', '2024-09-17 20:00:59', '2024-09-17 20:00:59'),
(27, 'Cash on Delivery', '2024-09-17 20:01:29', '2024-09-17 20:01:29'),
(28, 'Cash on Delivery', '2024-09-17 20:01:32', '2024-09-17 20:01:32'),
(29, 'Cash on Delivery', '2024-09-17 20:06:39', '2024-09-17 20:06:39'),
(30, 'Cash on Delivery', '2024-09-17 20:06:48', '2024-09-17 20:06:48'),
(31, 'Cash on Delivery', '2024-09-17 20:22:36', '2024-09-17 20:22:36'),
(32, 'Cash on Delivery', '2024-09-17 20:22:45', '2024-09-17 20:22:45'),
(33, 'Cash on Delivery', '2024-09-17 20:27:26', '2024-09-17 20:27:26'),
(34, 'Cash on Delivery', '2024-09-17 20:32:31', '2024-09-17 20:32:31'),
(35, 'Cash on Delivery', '2024-09-17 20:40:44', '2024-09-17 20:40:44'),
(36, 'Cash on Delivery', '2024-09-17 20:40:51', '2024-09-17 20:40:51'),
(37, 'Cash on Delivery', '2024-09-26 12:31:26', '2024-09-26 12:31:26');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_img` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `content`, `created_at`, `post_img`, `user_id`, `price`) VALUES
(23, 'Farhan', '2024-08-03 07:13:00', 'posts/1721901089profile-img.jpg', 5, '900'),
(24, 'Farhan', '2024-08-03 07:13:08', 'posts/1721901131product-2.jpg', 5, '1200000'),
(25, 'Artist post here', '2024-08-03 07:13:20', 'posts/1721915414messages-2.jpg', 5, '130000'),
(28, 'Artist', '2024-08-03 07:13:33', 'posts/1721961655a2.jpg', 7, '140000'),
(29, 'artist', '2024-08-03 07:13:40', 'posts/1721974800a2.jpg', 7, '150000'),
(30, 'AARTIST', '2024-08-03 07:13:47', 'posts/1721974845a2.jpg', 7, '160000'),
(31, 'arts', '2024-08-03 07:13:53', 'posts/1721983985Happy Birthday Instagram Post.png', 7, '190000'),
(33, 'Arts', '2024-08-03 07:13:59', 'posts/1722146013log_bg.jpg', 7, '130000'),
(34, 'helo', '2024-08-03 07:14:04', 'posts/17221630691721933335_product-2.jpg', 7, '200000'),
(35, 'Artist sale paintings here', '2024-08-03 07:14:09', 'posts/1722231861arts_six.webp', 7, '140000'),
(36, 'sales paintings here', '2024-08-03 07:14:15', 'posts/1722236193art_two.webp', 15, '150000'),
(37, 'arts', '2024-08-03 07:14:20', 'posts/1722244252ArtsCamera_icon.png', 7, '18000'),
(38, 'artsuu', '2024-08-03 07:14:26', 'posts/1722247417art_one.jpg', 7, '150000'),
(39, 'arts', '2024-08-03 07:14:32', 'posts/1722248350ArtsCamera_icon.png', 7, '14000'),
(40, 'artist', '2024-08-03 07:14:37', 'posts/1722248707arts_six.webp', 16, '13000'),
(41, 'saling price of painting 25000', '2024-08-03 07:14:43', 'posts/1722251644art_three.jfif', 7, '15000'),
(42, 'artist painting', '2024-08-03 07:14:48', 'posts/1722273247arts_four.jpg', 7, '16000'),
(43, 'artust', '2024-08-03 07:14:54', 'posts/1722305622art_two.webp', 1, '19900'),
(44, 'harts', '2024-08-03 07:15:00', 'posts/1722305706art_two.webp', 7, '20000'),
(45, 'arts', '2024-08-03 07:15:05', 'posts/1722306844ArtsCamera_icon.png', 18, '21000'),
(46, 'This is Benish nisar from Navy', '2024-08-03 07:15:09', 'posts/1722321014arts_four.jpg', 7, '110000'),
(47, 'arts', '2024-08-03 07:15:13', 'posts/1722324823arts_six.webp', 7, '120000'),
(49, 'painting', '2024-07-30 16:46:42', 'posts/1722332802artschamps_profile.png', 7, ''),
(50, 'artist', '2024-07-30 16:51:05', 'posts/1722333065arts_six.webp', 7, ''),
(51, 'arrtisst', '2024-07-30 17:03:18', 'posts/1722333798art_one.jpg', 7, ''),
(52, 'artisr', '2024-07-31 15:46:30', 'posts/1722415590arts_four.jpg', 7, ''),
(53, 'hlo', '2024-08-05 16:05:38', 'posts/17228487381722333995 (1).jpg', 7, NULL),
(54, 'artist', '2024-08-05 16:19:12', 'posts/17228495521722333995 (1).jpg', 7, '6988'),
(55, 'paintings', '2024-08-05 16:26:36', 'posts/1722849996bannerleft-removebg-preview.png', 7, '8000'),
(56, 'arts', '2024-08-06 15:48:44', 'posts/17229341241722324742 (1).jpg', 7, '3000'),
(57, 'arts', '2024-08-06 16:20:52', 'posts/17229360521722244252ArtsCamera_icon.png', 7, '9000'),
(58, 'artschamps', '2024-08-07 00:06:13', 'posts/1722963973images (1).jfif', 7, '9000'),
(59, 'artsist', '2024-08-07 12:37:04', 'posts/17230090241722231861arts_six.webp', 7, '9000'),
(60, 'good', '2024-08-08 02:31:22', 'posts/17230590821722333995.jpg', 7, '8000'),
(61, 'painter', '2024-08-08 14:38:08', 'posts/1723102688Red World Art Day (Banner (Landscape)).png', 7, '100000'),
(62, 'atts', '2024-08-08 20:24:08', 'posts/17231234481722231861arts_six.webp', 7, '1000'),
(63, 'Rehman', '2024-08-12 00:57:12', 'posts/1723399032rehman.webp', 7, '900000'),
(64, 'arts', '2024-08-13 13:25:05', 'posts/1723530305images (1).jfif', 7, '4999'),
(65, 'hu', '2024-08-18 15:06:42', 'posts/1723968402rehman.webp', 7, '9000'),
(66, 'hdh', '2024-08-18 15:25:04', 'posts/1723969504images.jfif', 7, '8000'),
(67, 'good', '2024-08-22 12:55:54', 'posts/1724306154rehman.webp', 7, '9000'),
(68, 'arts', '2024-08-25 14:47:39', 'posts/1724572059images.jpeg', 7, '9000'),
(69, 'art', '2024-09-02 13:17:32', 'posts/1725257852images.jfif', 7, '9000'),
(70, 'artists', '2024-09-16 15:06:12', 'posts/1726473972linuac.jpg', 7, '1000'),
(71, 'artsii', '2024-09-16 16:22:53', 'posts/1726478573react.jpg', 21, '3000'),
(72, 'artist', '2024-09-19 23:32:13', 'posts/1726763533arts_six.webp', 7, '8900'),
(73, 'artschamps', '2024-09-24 15:27:46', 'posts/1727166466Rapid_Rescue.png', 7, '8000');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `tags_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `profile_img` varchar(300) NOT NULL,
  `banner_img` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `profile_img`, `banner_img`, `user_id`) VALUES
(1, 'C:\\xampp\\tmp\\php7DFC.tmp', 'C:\\xampp\\tmp\\php7DFD.tmp', 0),
(2, 'C:\\xampp\\tmp\\phpD219.tmp', 'C:\\xampp\\tmp\\phpD21A.tmp', 0),
(3, 'C:\\xampp\\tmp\\phpA238.tmp', 'C:\\xampp\\tmp\\phpA239.tmp', 0),
(4, 'C:\\xampp\\tmp\\php1497.tmp', 'C:\\xampp\\tmp\\php1498.tmp', 0),
(5, 'profile/1721933335_product-1.jpg', 'profile/1721933335_product-2.jpg', 0),
(6, 'profile/1721933669_product-1.jpg', 'profile/1721933669_product-2.jpg', 0),
(7, 'profile/1721934273_a2.jpg', 'profile/1721934273_foun.jpeg', 0),
(8, 'profile/1721934390_bm.jpg', 'profile/1721934390_a2.jpg', 0),
(9, 'profile/1721934922_a2.jpg', 'profile/1721934922_a2.jpg', 0),
(10, 'profile/1721935023_foun.jpeg', 'profile/1721935023_bu.jpg', 0),
(11, 'profile/1721935290_a2.jpg', 'profile/1721935290_a2.jpg', 0),
(12, 'profile/1721935990_a2.jpg', 'profile/1721935990_a2.jpg', 0),
(13, 'profile/1721936486_a2.jpg', 'profile/1721936486_Happy Birthday Instagram Post.png', 0),
(17, 'profile_images/1722060035ArtsCamera_icon.png', 'banner_images/1722060035Artsbanner.png', 7),
(18, 'profile_images/1722070261artschamps_profile.png', 'banner_images/1722060035Artsbanner.png', 7),
(19, 'profile_images/1722070324avatar-dhg.png', 'banner_images/1722060035Artsbanner.png', 7),
(20, 'profile_images/1722070465avatar-fat.jpg', 'banner_images/1722060035Artsbanner.png', 7),
(21, 'profile_images/1722070999art-artist-band-2167166.jpg', 'banner_images/1722060035Artsbanner.png', 7),
(22, 'profile_images/1722071016celebration-colored-smoke-dark-2297472.jpg', 'banner_images/1722060035Artsbanner.png', 7),
(23, 'profile_images/1722071063car.jpg', 'banner_images/1722060035Artsbanner.png', 7),
(24, 'profile_images/1722071103celebration-colored-smoke-dark-2297472.jpg', 'banner_images/1722060035Artsbanner.png', 7),
(25, 'profile_images/1722071725artschamps_profile.png', 'banner_images/1722060035Artsbanner.png', 7),
(26, 'profile_images/1722071729avatar-dhg.png', 'banner_images/1722060035Artsbanner.png', 7),
(27, 'profile_images/1722071729avatar-dhg.png', 'C:\\xampp\\htdocs\\ArtsChamps\\public\\banner_images\\1722075739_car.jpg', 7),
(28, 'profile_images/1722071729avatar-dhg.png', 'C:\\xampp\\htdocs\\ArtsChamps\\public\\banner_images\\1722075971_banner.jpg', 7),
(29, 'profile_images/1722071729avatar-dhg.png', 'C:\\xampp\\htdocs\\ArtsChamps\\public\\banner_images\\1722076027_art-artist-band-2167166.jpg', 7),
(30, 'profile_images/1722071729avatar-dhg.png', 'C:\\xampp\\htdocs\\ArtsChamps\\public\\banner_images\\1722076058_avatar-fat.jpg', 7),
(31, 'profile_images/1722071729avatar-dhg.png', 'C:\\xampp\\htdocs\\ArtsChamps\\public\\banner_images\\1722076084_brand.png', 7),
(32, 'profile_images/1722071729avatar-dhg.png', 'banner_images/banner_images\\1722076448_banner.jpg', 7),
(33, 'profile_images/1722071729avatar-dhg.png', 'banner_images/banner_images\\1722077127_architectural-design-architecture-bridge-2260784.jpg', 7),
(34, 'profile_images/1722071729avatar-dhg.png', 'banner_images/1722077181_avatar-fat.jpg', 7),
(35, 'profile_images/1722071729avatar-dhg.png', 'banner_images/1722077466_avatar-mdo.png', 7),
(36, 'profile_images/1722071729avatar-dhg.png', 'banner_images/1722077524_car.jpg', 7),
(37, 'profile_images/1722077553profilelogo.png', 'banner_images/1722077524_car.jpg', 7),
(38, 'profile_images/1722077553profilelogo.png', 'banner_images/1722081358_art-artist-band-2167166.jpg', 7),
(39, 'profile_images/1722077553profilelogo.png', 'banner_images/1722081404_avatar-mdo.png', 7),
(40, 'profile_images/1722077553profilelogo.png', 'banner_images/1722081466_adventure-alps-clouds-2259810.jpg', 7),
(41, 'profile_images/1722081483left3.jpg', 'banner_images/1722081466_adventure-alps-clouds-2259810.jpg', 7),
(42, 'profile_images/1722081579bodybuilding-exercise-fitness-2294361.jpg', 'banner_images/1722081466_adventure-alps-clouds-2259810.jpg', 7),
(43, 'profile_images/1722081579bodybuilding-exercise-fitness-2294361.jpg', 'banner_images/1722081590_log_bg.jpg', 7),
(44, 'profile_images/1722231809avatar-fat.jpg', 'banner_images/1722081590_log_bg.jpg', 7),
(45, 'profile_images/1722231819profilelogo.png', 'banner_images/1722081590_log_bg.jpg', 7),
(46, 'profile_images/1722233672avatar-dhg.png', 'NULL', 1),
(47, 'profile_images/1722233672avatar-dhg.png', 'banner_images/1722233702_Artsbanner.png', 1),
(48, 'profile_images/1722233672avatar-dhg.png', 'banner_images/1722233714_log_bg.jpg', 1),
(49, 'profile_images/1722231819profilelogo.png', 'banner_images/1722233885_mid3.jpg', 7),
(50, 'profile_images/1722236143avatar-fat.jpg', 'NULL', 15),
(51, 'profile_images/1722236143avatar-fat.jpg', 'banner_images/1722236156_mid1.jpg', 15),
(52, 'profile_images/1722249885avatar-dhg.png', 'NULL', 16),
(53, 'profile_images/1722249890avatar-fat.jpg', 'NULL', 16),
(54, 'profile_images/1722251104avatar-fat.jpg', 'NULL', 17),
(55, 'profile_images/1722273570arts_four.jpg', 'banner_images/1722233885_mid3.jpg', 7),
(56, 'profile_images/1722305048avatar-fat.jpg', 'NULL', 18),
(57, 'profile_images/1722305048avatar-fat.jpg', 'banner_images/1722305077_architectural-design-architecture-bridge-2260784.jpg', 18),
(58, 'profile_images/1722333964avatar-dhg.png', 'banner_images/1722233885_mid3.jpg', 7),
(59, 'profile_images/1722414562avatar-dhg.png', 'NULL', 19),
(60, 'profile_images/1722414562avatar-dhg.png', 'banner_images/1722414566_banner.jpg', 19),
(61, 'profile_images/1722438847artschamps_profile.png', 'banner_images/1722233885_mid3.jpg', 7),
(62, 'profile_images/1722438862arts_four.jpg', 'banner_images/1722233885_mid3.jpg', 7),
(63, 'profile_images/17224926481722307745.jpg', 'NULL', 20),
(64, 'profile_images/17224926481722307745.jpg', 'banner_images/1722492841_banner.jpg', 20),
(65, 'profile_images/1722438862arts_four.jpg', 'banner_images/1723102754_1722244252ArtsCamera_icon.png', 7),
(66, 'profile_images/1723182376usama.jpg', 'banner_images/1723102754_1722244252ArtsCamera_icon.png', 7),
(67, 'profile_images/17231823931722324742 (1).jpg', 'banner_images/1723102754_1722244252ArtsCamera_icon.png', 7),
(68, 'profile_images/17231823931722324742 (1).jpg', 'banner_images/1723399070_images.jfif', 7),
(69, 'profile_images/17233990871723186209.jpg', 'banner_images/1723399070_images.jfif', 7),
(70, 'profile_images/1723399137images.jfif', 'banner_images/1723399070_images.jfif', 7),
(71, 'profile_images/1723399137images.jfif', 'banner_images/1723530165_1723182424.jpg', 7),
(72, 'profile_images/17235302771723186209.jpg', 'banner_images/1723530165_1723182424.jpg', 7),
(73, 'profile_images/17235302771723186209.jpg', 'banner_images/1726744898_linuac.jpg', 7),
(74, 'profile_images/17267449731722307745.jpg', 'banner_images/1726744898_linuac.jpg', 7),
(75, 'profile_images/1726763667avatar-dhg.png', 'banner_images/1726744898_linuac.jpg', 7),
(76, 'profile_images/1726763667avatar-dhg.png', 'banner_images/1726763677_Artsbanner.png', 7),
(77, 'profile_images/17267638631722307745.jpg', 'banner_images/1726763677_Artsbanner.png', 7),
(78, 'profile_images/1727161238artschamps_profile (1).png', 'NULL', 23),
(79, 'profile_images/1727161238artschamps_profile (1).png', 'banner_images/1727161247_ambfor.jpg', 23),
(80, 'profile_images/1727165604artschamps_profile (1).png', 'NULL', 25),
(81, 'profile_images/1727165604artschamps_profile (1).png', 'banner_images/1727165610_ambfor.jpg', 25);

-- --------------------------------------------------------

--
-- Table structure for table `receiver_message`
--

CREATE TABLE `receiver_message` (
  `reciever_id` int(11) NOT NULL,
  `rec_message` varchar(800) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receiver_message`
--

INSERT INTO `receiver_message` (`reciever_id`, `rec_message`, `user_id`, `message_id`) VALUES
(1, 'Hello', 3, 5),
(2, 'Hello', 2, 6),
(3, 'hey', 4, 7),
(4, 'Hey how are you', 1, 9),
(5, 'Hey how are you', 1, 10),
(6, 'are you fine', 1, 11),
(7, 'are you fine', 1, 12),
(8, 'can', 1, 13),
(9, 'Hello how are you', 1, 14),
(10, 'Hello how are you', 1, 15),
(11, 'Hello how are you', 1, 16),
(12, 'hellio how are you', 1, 17),
(13, 'hi', 1, 18),
(14, 'hi', 1, 19),
(15, 'Hello how are you', 1, 20),
(16, 'Hello how are you', 1, 21),
(17, 'Hello how are you', 1, 22),
(18, 'hlo', 1, 23),
(19, 'howarret', 1, 24),
(20, 'farhan', 1, 25),
(21, 'farhan2', 1, 26),
(22, 'farhan 3', 1, 27),
(23, 'benish', 1, 28),
(24, 'hello', 1, 29),
(25, 'hlo', 1, 30),
(26, 'hlo', 1, 31),
(27, 'hlo', 1, 32),
(28, 'hlo', 1, 33),
(29, 'hlo', 1, 34),
(30, 'Hey how are you', 1, 35),
(31, 'heyyy', 1, 36),
(32, 'mm', 1, 37),
(33, 'good', 1, 38),
(34, 'weldone', 1, 39),
(35, 'heyyy', 1, 40),
(36, 'Hello how are you', 1, 41),
(37, 'hona', 1, 42),
(38, 'Hello how are you', 1, 43),
(39, 'Hello how are you', 1, 44),
(40, 'hlo', 1, 45),
(41, 'hona', 1, 46),
(42, 'hlo', 1, 47),
(43, 'hlo', 1, 48),
(44, 'hlo', 1, 49),
(45, 'howarret', 1, 50),
(46, 'hlo', 1, 51),
(47, 'Hello how are you', 1, 52),
(48, 'heyyy', 1, 53);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(399) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'artist'),
(3, 'manager'),
(4, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `searchresult`
--

CREATE TABLE `searchresult` (
  `result_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `action_button_text` varchar(100) NOT NULL,
  `additional_info` varchar(100) NOT NULL,
  `badge_text` varchar(100) NOT NULL,
  `badge_color` varchar(100) NOT NULL,
  `verify_icon_url` varchar(100) NOT NULL,
  `verify_text` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `share_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `social_id` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `social_link` varchar(300) NOT NULL,
  `social_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`social_id`, `id`, `social_link`, `social_name`) VALUES
(1, 'Youtube', '1', 'https://www.youtube.com/channel/UCQH8_0kbe_jFyPdOJ3fg1qQ');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `tag_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usergallery`
--

CREATE TABLE `usergallery` (
  `user_id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userpost`
--

CREATE TABLE `userpost` (
  `user_id` int(11) NOT NULL,
  `pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `profile_img` varchar(100) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `banner_img` varchar(900) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `phone`, `dob`, `gender`, `profile_img`, `role_id`, `created_at`, `updated_at`, `status`, `banner_img`) VALUES
(1, 'Admmin', 'Admin', '$2y$10$iiBP3jiCcJmKmSaNAhIXkOXBoIvUiMWXlg4MZXyLwxikrUkYAgiq6', 'admin@gmail.com', '0333445554', '2024-07-01', 1, 'profile_images/1722233672avatar-dhg.png', 1, '2024-07-29 06:15:14', '2024-07-29 13:15:14', 1, 'banner_images/1722233714_log_bg.jpg'),
(2, 'farhan', 'ali', '$2y$10$t1cToUbpl9KX32247UuYoujTAXkJgt/4MgO2u5iS3duQnHrquuJl6', 'farhan@gmail.com', '03566667791', '2001-01-05', 1, NULL, 4, '2024-07-22 08:34:40', '2024-07-27 08:50:36', 1, ''),
(4, 'Haniya', 'khan', '$2y$10$m9iu.ZTDxUufbzszd0dk/eWiVdaRzuwm0hOOI01wJm2EhgO5fxJlC', 'haniyakhan@gmail.com', '03566667791', '2024-07-02', 2, NULL, 4, '2024-07-22 22:06:03', '2024-07-27 08:50:36', 1, ''),
(6, 'zoya', 'abbasi', '$2y$10$7ahGi4.xS9qPXoGVh00rhe8Mj0.egFhcgQTwO.YM5.dq4EdyCT7LC', 'zoyaabbsasi@gmail.com', '03478356751', '2024-07-25', 2, NULL, 4, '2024-07-26 01:30:35', '2024-07-27 08:50:36', 1, ''),
(7, 'Benish', 'Nisar', '$2y$10$dPlSqMNvrta0CLGKRNiAoeeCV.JeRTT2MesYMZko6gOqszRC8l6XO', 'benishnisarkhan56@gmail.com', '03428410999', '2012-04-25', 2, 'profile_images/17267638631722307745.jpg', 4, '2024-09-19 16:37:43', '2024-09-19 23:37:43', 1, 'banner_images/1726763677_Artsbanner.png'),
(9, 'Zumaira', 'khan', '$2y$10$5IqkdME3tZwtcGDBveUa.O3bFdfQprHxN199j82rHfF2qqfDRKiTK', 'honakhan@gmail.cpm', '0333445554', '2024-07-27', 1, 'C:\\xampp\\tmp\\php4672.tmp', 4, '2024-07-27 18:28:52', '2024-07-28 01:28:52', 1, 'C:\\xampp\\tmp\\php4673.tmp'),
(12, 'root', 'han', 'root@13445589', 'root@gmail.com', NULL, NULL, 1, NULL, 1, '2024-07-28 03:15:35', '2024-07-28 03:15:35', 1, ''),
(13, 'admin', 'admin', '$2y$10$z/asT8ZBx0jdNRil/Va.EejyMtu1KoTRx6FTDyvTrx6nf/B120bNW', 'admin@321', NULL, NULL, 1, NULL, 1, '2024-07-28 03:32:10', '2024-07-28 03:32:10', 1, ''),
(14, 'hinah', 'khan', '$2y$10$TEbR9A0aX8D89WXdjKn15u412QCx4XIxWOtVgMk2K3qbehrLbtU9q', 'hinahkhan@gmail.com', '0359909569', '2023-02-28', 2, NULL, 4, '2024-07-29 06:53:54', '2024-07-29 06:53:54', 1, NULL),
(15, 'misbah', 'khan', '$2y$10$Kj4Y4sei7hpG6..Gz0/AzOVmUz14i467uO.pIEZMyCihnqO46fVRu', 'misbahkhan@gmail.com', '0345678999', '2016-03-28', 2, 'profile_images/1722236143avatar-fat.jpg', 4, '2024-07-29 06:55:56', '2024-07-29 13:55:56', 1, 'banner_images/1722236156_mid1.jpg'),
(16, 'rumaisa', 'khan', '$2y$10$GKLxXdD.veqAadELueEiOO49tehCfjhF.3my0jZtrap2vd9M5WMBW', 'rumaisakhan@gmail.com', '0349858889', '2007-03-29', 2, 'profile_images/1722249890avatar-fat.jpg', 4, '2024-07-29 10:44:50', '2024-07-29 17:44:50', 1, 'banner_images/1722248670_art_one.jpg'),
(17, 'uswa', 'khan', '$2y$10$.Cgv3Q9yd3/MOxun4DEY8.XVYDO3f9Wkl7eFfCXepe7EpxrZRrP4a', 'uswakhan@gmail.com', '03494585788', '2003-02-28', 2, 'profile_images/1722251104avatar-fat.jpg', 4, '2024-07-29 11:05:04', '2024-07-29 18:05:04', 1, NULL),
(18, 'iqra', 'eman', '$2y$10$NsjYwqqG62HFO4V/dqjOLOC51Oh/dfIitEEELy1SVpgiephsrFQRm', 'iqraemankhan@gmail.com', '03566667791', '2020-04-29', 2, 'profile_images/1722305048avatar-fat.jpg', 4, '2024-07-30 02:04:37', '2024-07-30 09:04:37', 1, 'banner_images/1722305077_architectural-design-architecture-bridge-2260784.jpg'),
(19, 'wahab', 'khan', '$2y$10$D8.L7xt/QjIBUYurVRPmdebCqAYE0.qXQkTXhSG0YBO20nKxMqlVi', 'wahabkhan@gmail.com', '03488599999', '2024-07-12', 1, 'profile_images/1722414562avatar-dhg.png', 4, '2024-07-31 08:29:26', '2024-07-31 15:29:26', 1, 'banner_images/1722414566_banner.jpg'),
(20, 'wahab', 'riaz', '$2y$10$VrR1jxd6HPCms7zPlZxmTOs2dcyx9/cw5ViSEicIxpbc4k/x.Kyue', 'wahabriaz@gmail.com', '03566667791', '2024-07-24', 1, 'profile_images/17224926481722307745.jpg', 4, '2024-08-01 06:14:01', '2024-08-01 13:14:01', 1, 'banner_images/1722492841_banner.jpg'),
(21, 'artist', 'artist', '$2y$10$8/fv9vxnra/pdWivX43TteJh0Xl5764pyt8E.Mqw4biasOFqWEwim', 'artist@gmail.com', '03888393989', '2024-07-03', 1, NULL, 2, '2024-08-01 18:36:23', '2024-08-01 18:34:28', 1, NULL),
(22, 'hina', 'khan', '$2y$10$Hs7pvLfQIzsszstnWSHf8O6ctqTSPn7.GNpt4fZd4oouBfx3Odo1G', 'hinakhan123@gmail.com', '0377477988', '2024-08-21', 2, NULL, 4, '2024-08-21 10:48:57', '2024-08-21 10:48:57', 1, NULL),
(23, 'Hooran Fatima', 'Fatima', '$2y$10$fP6LXr75agnmF5Y.O47vVuDjdCCz0EUEQgCaouFGTcp3uBLEdh4ki', 'Hooranfatima@gmail.com', '03566667791', '2024-09-05', 1, 'profile_images/1727161238artschamps_profile (1).png', 4, '2024-09-24 07:00:47', '2024-09-24 14:00:47', 1, 'banner_images/1727161247_ambfor.jpg'),
(24, 'Muhammad', 'khan', '$2y$10$OPGWHDxtTK8YMkQskb7YX.rc7PXdEJZa8/I3zjvDSC/LbmqMnubm6', 'muhammad@gmail.com', '03428410999', '2024-09-17', 1, NULL, 4, '2024-09-24 07:36:39', '2024-09-24 07:36:39', 1, NULL),
(25, 'seema', 'khan', '$2y$10$o7tZblU5sm3GogqHtgKCNO3U/jDHNvhd52NjsRZhf0miiYQcyHxCm', 'seema@gmail.com', '03478356751', '2024-09-24', 2, 'profile_images/1727165604artschamps_profile (1).png', 4, '2024-09-24 08:13:30', '2024-09-24 15:13:30', 1, 'banner_images/1727165610_ambfor.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE `users_profile` (
  `user_id` int(11) NOT NULL,
  `profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`user_id`, `profile_id`) VALUES
(1, 2),
(4, 1),
(7, 2),
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_about`
--

CREATE TABLE `user_about` (
  `user_id` int(11) NOT NULL,
  `about_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_about`
--

INSERT INTO `user_about` (`user_id`, `about_id`) VALUES
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_friends`
--

CREATE TABLE `user_friends` (
  `user_id` int(11) NOT NULL,
  `friend_jd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_notificaion`
--

CREATE TABLE `user_notificaion` (
  `notification_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`artwork_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `check_ins`
--
ALTER TABLE `check_ins`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`),
  ADD UNIQUE KEY `users_id_1` (`users_id_1`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`tags_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `receiver_message`
--
ALTER TABLE `receiver_message`
  ADD PRIMARY KEY (`reciever_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `searchresult`
--
ALTER TABLE `searchresult`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`share_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `artwork_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `card_details`
--
ALTER TABLE `card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `check_ins`
--
ALTER TABLE `check_ins`
  MODIFY `check_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follows`
--
ALTER TABLE `follows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `tags_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `receiver_message`
--
ALTER TABLE `receiver_message`
  MODIFY `reciever_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `searchresult`
--
ALTER TABLE `searchresult`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `share_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
