-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 01:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sta_cruz_senior_high`
--

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
(51, '2014_10_12_000000_create_users_table', 1),
(52, '2014_10_12_100000_create_password_resets_table', 1),
(53, '2019_08_19_000000_create_failed_jobs_table', 1),
(54, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(55, '2022_10_30_123559_student_information_d_b', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grade_level` int(11) DEFAULT NULL,
  `lrn_stat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balikaral_stat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_psa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_lrn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeofbirth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mothertongue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ips` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifyesips` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifyesfps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_brgy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_mun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_prov` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_ctry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_house` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_brgy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_mun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_prov` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_ctry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ffname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmdname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcontact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mlname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mfname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mmdname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mcontact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `glname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gfname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmdname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gcontact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastgradelevel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastschoolyear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schoolid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastschoolattended` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sem` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `track` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `strands` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `modality/ies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
