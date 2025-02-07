-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 10, 2024 at 05:45 AM
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
-- Database: `jobseeker`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_forms`
--

CREATE TABLE `apply_forms` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_forms`
--

INSERT INTO `apply_forms` (`id`, `name`, `email`, `description`, `company_id`, `job_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Helia', 'helia@gmail.com', 'sferedsddss', '1', '1', 1, '2024-01-29 10:19:50', '2024-01-29 10:19:50', NULL),
(2, 'Helia', 'helia@gmail.com', 'sferedsddss', '1', '1', 1, '2024-01-29 10:20:12', '2024-01-29 10:20:12', NULL),
(3, 'Dean', 'winchester@gmail.com', 'Have 2 years experience at WHO', '11', '1', 1, '2024-01-29 10:24:53', '2024-01-29 10:24:53', NULL),
(4, 'Kai', 'kai89@gmail.com', 'ASJKNDKJAK', '12', '9', 1, '2024-01-29 10:47:30', '2024-01-29 10:47:30', NULL),
(5, 'John', 'john@gmail.com', 'sdwwwwwwwwqqqqqqqqqqqq', '14', '7', 1, '2024-01-29 11:39:12', '2024-01-29 11:39:12', NULL),
(6, 'Lisa', 'lisa@gmail.com', 'csdccccccccccccaaaaaaaaaaaa', '13', '8', 1, '2024-01-29 11:52:39', '2024-01-29 11:52:39', NULL),
(7, 'Kyaw Thu', 'kyaw@gmail.com', 'jhfgfn,kjkuy', '12', '7', 1, '2024-01-29 23:13:32', '2024-01-29 23:13:32', NULL),
(8, 'Eugene', 'eu@gmail.com', 'hhgcgfcfxdfsf', '15', '10', 1, '2024-02-01 06:05:37', '2024-02-01 06:05:37', NULL),
(9, 'Iris', 'iris@gmail.com', 'Perform professional facial treatments\r\n    Provide excellent customer service for customers, including retail\'s walk in customers\r\n    Recommend skincare/body care products and treatments to customers\r\n    Manage in-store operational activities', '16', '1', 1, '2024-02-01 06:50:49', '2024-02-01 06:50:49', NULL),
(10, 'Jack', 'jack@gmail.com', 'ghgfdjksksklslsjcn', '14', '10', 1, '2024-02-09 22:15:10', '2024-02-09 22:15:10', NULL),
(11, 'vivi', '123@gmail.com', 'djhiaeslcloshid', '1', '1', 1, '2024-02-09 22:46:09', '2024-02-09 22:46:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `name`, `location`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IMPACT BPO SERVICES PTE. LTD.', 'UK, London', 'Clementi, West Region Administrative Assistants (Administration & Office Support) Full time $2,300 – $2,900 per month', 1, NULL, '2024-01-09 22:29:07', '2024-01-09 22:29:07'),
(2, 'Koufu Pte Ltd', 'USA , New York', 'Woodlands, North Region Body Corporate & Facilities Management (Real Estate & Property) Full time', 1, NULL, NULL, NULL),
(11, 'MOH Holdings Pte Ltd', 'Singapore', 'Senja, West Region Nursing - Aged Care (Healthcare & Medical) Full time', 1, '2024-01-09 09:53:26', '2024-01-09 09:53:29', '2024-01-09 09:53:29'),
(12, 'Toshiba TEC Singapore Pte Ltd', 'Singapore', 'North-East Region Electrical/Electronic Engineering (Engineering) Full time:$2500-3000', 1, '2024-01-09 11:18:05', '2024-01-09 11:18:05', NULL),
(13, 'Perennial Holdings Private Limited', 'Singapore', 'Chinatown, Central Region Commercial Sales, Leasing & Property Mgmt (Real Estate & Property) Full time', 1, '2024-01-21 09:35:06', '2024-01-21 09:35:06', NULL),
(14, 'WGT EHR Pte. Ltd.', 'Singapore', 'Central Region Maintenance & Handyperson Services (Trades & Services) Full time $2,500 – $3,700 per month', 1, '2024-01-21 10:05:25', '2024-01-21 10:05:25', NULL),
(15, 'Sous Chef', 'London', 'Maxwell, Central Region Chefs/Cooks (Hospitality & Tourism) Full time', 1, '2024-02-01 06:01:27', '2024-02-01 06:01:27', NULL),
(16, 'ELEMIS', 'London', 'Central Region Hair & Beauty Services (Trades & Services) Full time', 1, '2024-02-01 06:10:29', '2024-02-09 21:46:47', '2024-02-09 21:46:47'),
(17, 'Strategy First', 'Yangon', 'University', 1, '2024-02-09 22:16:22', '2024-02-09 22:16:22', NULL),
(18, 'guarbksdl', 'USA', 'hsickcishc', 1, '2024-02-09 22:30:19', '2024-02-09 22:30:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_jobs`
--

CREATE TABLE `company_jobs` (
  `companyjob_id` bigint UNSIGNED NOT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `job_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_jobs`
--

INSERT INTO `company_jobs` (`companyjob_id`, `company_id`, `job_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 2, 2, NULL, NULL, NULL),
(3, 12, 7, '2024-01-11 03:42:38', '2024-01-11 03:42:38', NULL),
(5, 1, 7, '2024-01-11 08:21:21', '2024-01-11 08:21:21', NULL),
(6, 11, 6, '2024-01-11 10:30:06', '2024-01-11 10:30:06', NULL),
(7, 1, 8, NULL, NULL, NULL),
(8, 1, 9, '2024-01-21 10:38:02', '2024-01-21 10:38:02', NULL),
(9, 11, 1, '2024-01-21 10:53:48', '2024-01-21 10:53:48', NULL),
(10, 14, 10, '2024-01-21 10:57:22', '2024-01-21 10:57:22', NULL),
(11, 13, 2, '2024-01-21 11:03:27', '2024-01-21 11:03:27', NULL),
(12, 15, 10, '2024-02-01 06:03:28', '2024-02-01 06:03:28', NULL),
(13, 16, 1, '2024-02-01 06:13:19', '2024-02-01 06:13:19', NULL),
(14, 17, 10, '2024-02-09 22:21:06', '2024-02-09 22:21:06', NULL),
(15, 1, 6, '2024-02-09 22:32:40', '2024-02-09 22:32:40', NULL);

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
-- Table structure for table `jobapplications`
--

CREATE TABLE `jobapplications` (
  `jobapp_id` bigint UNSIGNED NOT NULL,
  `id` bigint UNSIGNED NOT NULL,
  `companyjob_id` bigint UNSIGNED NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postDate` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `title`, `postDate`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Healthcare Admin', '2024-01-01', 'must have two years experience', 1, NULL, NULL, NULL),
(2, 'Intern', '2024-01-03', 'Does not need experience', 1, NULL, NULL, NULL),
(6, 'UI/UX Designer', '2024-01-05', 'Both desktop and mobile app', 1, '2024-01-09 09:43:24', '2024-01-09 09:44:52', '2024-01-09 09:44:52'),
(7, 'Junior Web Developer', '2024-01-06', 'Must have one year experience in web development', 1, '2024-01-09 10:04:43', '2024-01-09 10:04:43', NULL),
(8, 'Cashier', '2024-01-01', 'Good at Math', 1, NULL, NULL, NULL),
(9, 'Technician', '2024-01-10', 'Working knowledge of IPC-A-610', 1, '2024-01-21 10:13:42', '2024-01-21 10:13:42', NULL),
(10, 'Assistant Exexutive', '2024-01-18', 'Liaise with Institutional HR for necessary instructions & documents required for payroll processing.', 1, '2024-01-21 10:23:23', '2024-01-21 10:23:23', NULL),
(11, 'Enrolled Nurse', '2024-01-13', 'Assist in providing a consistent and excellent clinical and service quality to residents and sponsors.', 1, '2024-01-21 10:24:48', '2024-01-21 10:24:48', NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_08_052451_create_companies_table', 1),
(6, '2024_01_09_053457_create_jobs_table', 1),
(7, '2024_01_09_053729_create_company_jobs_table', 1),
(8, '2024_01_09_053923_create_company_job_applications_table', 1),
(9, '2024_01_09_073952_rename_column', 2),
(10, '2024_01_10_044156_jobapplication_rename_column', 3),
(11, '2024_01_10_045036_foreign_drop', 4),
(12, '2024_01_29_155742_create_apply_forms_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('emerson@gmail.com', '$2y$12$RUKu0e78XZp3bZEqNLd.9O1b.mxioNko.xLTEj0ur2a2zr3UJ8KcS', '2024-01-29 02:22:41');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Julianne', 'julia@gmail.com', NULL, '$2y$12$yw4bJbX4f0JJPus/T9VqxeiRDuW0u7Uzqg/dqZ3V9a.CN1NaTRcTG', 1, NULL, '2024-01-09 10:28:25', '2024-01-09 10:28:25'),
(2, 'Gabriel', 'emerson@gmail.com', NULL, '$2y$12$Qs8T/ZNLjfMhTDP1ghutluv9Jnbu/ZkLjyYvhYHF7HfaMgZ7ImEKW', 2, NULL, '2024-01-11 00:45:14', '2024-01-11 00:45:14'),
(3, 'Lisa', 'lisa@gmail.com', NULL, '$2y$12$Xwv0PXEQTSYmi0RwtABFWO.2D2s0Ri8YhS1yqnO882geYEAclT/Sa', 2, NULL, '2024-01-11 00:51:22', '2024-01-11 00:51:22'),
(4, 'Sam', 'winchester@gmail.com', NULL, '$2y$12$RRC3nAsyY66RnmshVeKVHO6P1zWudBdjWCG4JnBJm0ArTXgLg6GHe', 2, NULL, '2024-01-11 01:32:45', '2024-01-11 01:32:45'),
(5, 'Kai', 'kai89@gmail.com', NULL, '$2y$12$0eyyRFOGVPkCa2tZ.rhkFuRGasUEtMbqmpcJD2AfhLkUC5fEWREVS', 1, NULL, '2024-01-29 02:18:06', '2024-01-29 02:18:06'),
(6, 'Sherlock Holmes', 'detective69@gmail.com', NULL, '$2y$12$dptaExNH1Y7Mk4rPgZjffeltkboALQneTNLCoewJQoDlj4yv5oWOa', 2, NULL, '2024-01-29 02:23:35', '2024-01-29 02:23:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_forms`
--
ALTER TABLE `apply_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_jobs`
--
ALTER TABLE `company_jobs`
  ADD PRIMARY KEY (`companyjob_id`),
  ADD KEY `company_jobs_company_id_foreign` (`company_id`),
  ADD KEY `company_jobs_job_id_foreign` (`job_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD PRIMARY KEY (`jobapp_id`),
  ADD KEY `jobapplications_companyjob_id_foreign` (`companyjob_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_forms`
--
ALTER TABLE `apply_forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company_jobs`
--
ALTER TABLE `company_jobs`
  MODIFY `companyjob_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobapplications`
--
ALTER TABLE `jobapplications`
  MODIFY `jobapp_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company_jobs`
--
ALTER TABLE `company_jobs`
  ADD CONSTRAINT `company_jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`company_id`),
  ADD CONSTRAINT `company_jobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`);

--
-- Constraints for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD CONSTRAINT `jobapplications_companyjob_id_foreign` FOREIGN KEY (`companyjob_id`) REFERENCES `company_jobs` (`companyjob_id`),
  ADD CONSTRAINT `jobapplications_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
