-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2024 at 12:26 PM
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
-- Database: `driver`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `user_id` int NOT NULL,
  `phone` int NOT NULL,
  `driver` text NOT NULL,
  `driver_id` int NOT NULL,
  `bookingdate` date NOT NULL,
  `bookingend` date NOT NULL,
  `contact` varchar(300) NOT NULL,
  `cost` int NOT NULL,
  `is_approved` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `user_id`, `phone`, `driver`, `driver_id`, `bookingdate`, `bookingend`, `contact`, `cost`, `is_approved`) VALUES
(16, 'Ismail Hossain Iqbal', 38, 1811321295, 'Shejan - Private Driver', 22, '2023-12-29', '2024-01-01', 'bayzid bostami', 2100, 1),
(18, 'Ismail Hossain Iqbal', 38, 1706542819, 'Piku Dutto - Company Driver', 41, '2024-01-12', '2024-01-20', 'Plot # 77-78 Road # 9 Rupnagar Mirpur-2', 12000, 1),
(19, 'Ismail Hossain Iqbal', 38, 1706542819, 'Asif - Uber Driver', 42, '2024-01-12', '2024-01-30', 'Commerce College Rd\n', 18000, 1),
(26, 'Ismail Hossain Iqbal', 38, 1706542819, 'Asif - Uber Driver', 42, '2024-02-12', '2024-02-28', 'S M Maleh Rd', 16000, 1),
(27, 'Alpha', 39, 46561646, 'Shejan - Private Driver', 22, '2024-01-02', '2024-01-24', 'flat no : 232, NG karim Tower', 15400, 0),
(28, 'Ismail Hossain Iqbal', 38, 1706542819, 'Piku Dutto - Company Driver', 41, '2024-01-21', '2024-01-30', 'flat no : 232, NG karim Tower', 13500, 1),
(29, 'Ishaq', 32, 565456465, 'Nuran Tanzim - Private Driver', 43, '2024-01-17', '2024-01-25', 'flat no : 232, NG karim Tower', 5600, 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `image` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `nid` int DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` int NOT NULL,
  `drivertype` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `email` text NOT NULL,
  `phone` int NOT NULL,
  `license` int DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `qualification` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `experience` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `usertype` text NOT NULL,
  `imagename` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `nid`, `dob`, `password`, `drivertype`, `email`, `phone`, `license`, `address`, `qualification`, `experience`, `usertype`, `imagename`, `is_verified`) VALUES
(1, 'Admin', 123, '2023-01-16', 1234, 'Private', 'admin@mail.com', 123456, 123, '123', '123', '123', 'admin', '1703665784.jpg', 1),
(22, 'Shejan', 12343445, '1999-10-19', 12, 'Private', 'usr@mail.com', 125547891, 1234, 'Oxyzen, Bayzid Bostami', 'SSC HSC 2020', 'Worked As Daraz Delivery Van Driver', 'driver', '1704898218.jpg', 1),
(32, 'Ishaq', 12, '2023-12-15', 12, 'Private', 'ishaq@mail.com', 565456465, NULL, 'Dewanhat road 12', NULL, NULL, 'customer', '1703666046.jpg', 1),
(38, 'Ismail Hossain Iqbal', 241451678, '1998-01-21', 12, NULL, 'ismail@mail.com', 1706542819, NULL, 'Khulshi town 232/A', NULL, NULL, 'customer', '1704866770.jpg', 1),
(39, 'Alpha', 12, '2023-12-09', 12, NULL, 'alpha@mail.com', 46561646, NULL, 'murdanogor ng karim tower', NULL, NULL, 'customer', '1703574552.jpg', 1),
(40, 'Beta', 12, '2023-12-12', 12, 'Ondemand', 'beta@mail.com', 7816593, 12, 'batiari , 232/a', 'ssc hsc jsc', 'daraz van driver for 22 years', 'driver', '1703575543.jpg', 1),
(41, 'Piku Dutto', 24146809, '2023-12-11', 12, 'Company', 'piku@mail.com', 45455233, 123192789, 'GEC more , Khulshi', 'SSC 2018 HSC 2022', 'Driver in Premier University for 22 years', 'driver', '1703665315.jpg', 1),
(42, 'Asif', 123123421, '2000-06-27', 12, 'Uber', 'asif@mail.com', 7897987, 123214324, 'GEC more , Khulshi', 'SSC 2018 HSC 2022', 'Driver in East delta University for 5 years', 'driver', '1703665516.jpg', 1),
(43, 'Nuran Tanzim', 124561234, '1996-05-06', 12, 'Private', 'nuran@mail.com', 5161588, 314354465, 'Khulshi Town Center 1 no Road', 'SSC 2018 HSC 2022', 'Driver in Port city University for 22 years', 'driver', '1703665598.jpg', 1),
(44, 'sabbir', 12345667, '2023-12-27', 12, 'Private', 'sabbir@mail.com', 23445698, NULL, 'kajer dewri', NULL, NULL, 'customer', '1704898251.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_id` (`driver_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`driver_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
