-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2022 at 05:23 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konzulta`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `progressnotes1` varchar(255) NOT NULL,
  `progressnotes2` varchar(255) NOT NULL,
  `progressnotes3` varchar(255) NOT NULL,
  `progressnotes4` varchar(255) NOT NULL,
  `progressnotes5` varchar(255) NOT NULL,
  `temp` float NOT NULL,
  `hr` float NOT NULL,
  `rr` float NOT NULL,
  `bp` float NOT NULL,
  `sats` float NOT NULL,
  `wt` float NOT NULL,
  `ht` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `patient_id`, `progressnotes1`, `progressnotes2`, `progressnotes3`, `progressnotes4`, `progressnotes5`, `temp`, `hr`, `rr`, `bp`, `sats`, `wt`, `ht`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', 'tess note', 'test note', 'test note', 'test note', 2, 34, 4, 3, 5, 2, 4, 1, '2022-03-19 13:53:03', '0000-00-00 00:00:00'),
(2, 1, 'qwere', 'lkjsf', '', '', '', 35, 34, 87, 98, 56, 86, 90, 1, '2022-03-19 15:22:18', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medications`
--

CREATE TABLE `medications` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `medname` varchar(255) NOT NULL,
  `preparation` varchar(255) DEFAULT NULL,
  `breakfast` varchar(255) DEFAULT NULL,
  `lunch` varchar(255) DEFAULT NULL,
  `dinner` varchar(255) DEFAULT NULL,
  `bedtime` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medications`
--

INSERT INTO `medications` (`id`, `patient_id`, `medname`, `preparation`, `breakfast`, `lunch`, `dinner`, `bedtime`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'sadf', 'dsfsdf', 'sdf', NULL, 'sdf', NULL, 1, '2022-03-17 13:20:02', '0000-00-00 00:00:00'),
(2, 1, 'paracetal', '2', '2', '22', '2', '1', 1, '2022-03-19 13:52:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `physician_id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `namext` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `civilstatus` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `philhealth` int(11) DEFAULT NULL,
  `insurance` varchar(255) DEFAULT NULL,
  `contactno` int(11) NOT NULL,
  `emailad` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `physician_id`, `lastname`, `firstname`, `middlename`, `namext`, `age`, `birthdate`, `gender`, `civilstatus`, `address`, `town`, `citizenship`, `religion`, `philhealth`, `insurance`, `contactno`, `emailad`, `photo`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'lorem', 'ipsum', 'D', '', 56, '1975-09-13', 'M', 'Married', 'Brgy Cogon ', 'Ormoc', 'Filipino', 'Roman Catholic', 523423, '', 917658452, '', '', 1, '2022-03-19 13:39:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 3, 'lorem 1', 'ipsum 1', 'D', '', 45, '1935-10-22', 'F', 'Married', 'Brgy Cogon ', 'Ormoc', 'Filipino', 'Roman Catholic', 523423, '', 917658452, '', '', 1, '2022-03-19 13:40:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 3, 'john', 'lyod', 'D', '', 23, '1975-09-30', 'M', 'Married', 'Brgy Cogon ', 'Ormoc', 'Filipino', 'Roman Catholic', 523423, '', 917658452, '', '', 1, '2022-03-19 13:40:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 'peter ', 'cruz', 'D', '', 56, '1975-09-13', 'M', 'Married', 'Brgy Cogon ', 'Ormoc', 'Filipino', 'Roman Catholic', 523423, '', 917658452, '', '', 1, '2022-03-19 13:40:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 4, 'lebron', 'james', 'D', '', 85, '1975-09-13', 'M', 'Married', 'Brgy Cogon ', 'Ormoc', 'Filipino', 'Roman Catholic', 523423, '', 917658452, '', '', 1, '2022-03-19 13:40:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 4, 'jhong', 'ipsum', 'D', '', 34, '1975-07-16', 'M', 'Married', 'Brgy Cogon ', 'Ormoc', 'Filipino', 'Roman Catholic', 523423, '', 917658452, '', '', 1, '2022-03-19 13:40:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 'test', 'choi', NULL, 'choi test', 43, '1987-04-16', 'Female', 'Married', 'Door 1 Q and M Apartment', NULL, NULL, NULL, NULL, NULL, 91231234, '1', '1', 1, '2022-02-24 22:46:01', '2022-02-24 22:46:01', NULL),
(8, 4, 'choi', 'chavez', 'B', NULL, 35, '1985-11-18', 'Male', 'Single', 'punta', NULL, NULL, NULL, NULL, NULL, 234234, NULL, NULL, 1, '2022-03-19 13:40:17', '2022-03-18 09:33:26', NULL),
(9, 4, 'test 1', 'choi', 'test', NULL, 34, '1985-11-18', 'Male', 'Single', 'Door 1 Q and M Apartment\r\nAtillo Subd San Bernardino Street Punta Princesa', NULL, NULL, NULL, NULL, NULL, 234234, NULL, NULL, 1, '2022-03-19 13:40:22', '2022-03-18 19:25:13', NULL),
(10, 3, 'Chavez', 'Harreyson', 'Choi', NULL, 34, '1985-11-18', 'Male', 'Single', 'Door 1 Q and M Apartment\r\nAtillo Subd San Bernardino Street Punta Princesa', NULL, NULL, NULL, NULL, NULL, 23234, NULL, NULL, 1, '2022-04-13 07:16:11', '2022-04-13 07:16:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'harreyson.chavez@gmail.com', NULL, 1, '$2y$10$6.BSjyJQTVCZRtpPdqqcIemvoodoZu5YySw8s9TD6g5wviCBa50Pa', NULL, '2022-03-15 23:48:11', '2022-03-15 23:48:11'),
(2, 'user', 'user@testing.com', NULL, 0, '$2y$10$94eeTE6u7kYHiTi/STOngOGct7gxvzOPtYNMAMTbkO5.FtrFD4tDe', NULL, '2022-03-15 23:48:38', '2022-03-15 23:48:38'),
(3, 'Doc Sien', 'sien@user.com', NULL, 0, '$2y$10$94eeTE6u7kYHiTi/STOngOGct7gxvzOPtYNMAMTbkO5.FtrFD4tDe', NULL, NULL, NULL),
(4, 'Doc Jaypee', 'jaypee@user.com', NULL, 0, '$2y$10$94eeTE6u7kYHiTi/STOngOGct7gxvzOPtYNMAMTbkO5.FtrFD4tDe', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `medications`
--
ALTER TABLE `medications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medications`
--
ALTER TABLE `medications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
