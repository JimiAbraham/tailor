-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 01:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailors`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_log` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_log` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `phone`, `address`, `DOB`, `job`, `m1`, `m2`, `m3`, `m4`, `m5`, `user_id`, `created_at`, `updated_at`, `gender`, `m6`, `email`, `email_log`, `sms_log`) VALUES
(1, 'Cleints 1', '12345', 'soething in there', '2022-04-10', 'Student/programmer', '34', '40', '42', '44', '23', 1, '2022-04-02 23:56:01', '2022-04-02 23:56:01', 'Female', '45', 'mail@mail', NULL, NULL),
(2, 'BigBrother tailor', '72637698763', NULL, '2022-04-10', 'Banker and more', '67', '99', '78', '40', NULL, 1, '2022-04-03 00:10:32', '2022-04-03 00:10:32', 'Male', NULL, NULL, NULL, NULL),
(3, 'Jimi Adesokan', '07061050176', 'Ilorin, Tanke', '2022-04-10', 'Programmer', NULL, NULL, NULL, NULL, NULL, 2, '2022-04-03 05:44:48', '2022-04-03 05:44:48', 'Male', NULL, 'adesokanjimmy@gmail.com', NULL, NULL),
(4, 'Governor 001', '090878787', 'Governor of the state', '2022-04-10', 'Governor of the state', '12', '12', '222', NULL, NULL, 1, '2022-04-10 08:00:05', '2022-04-10 08:00:05', 'Male', NULL, 'gover@nor.com', NULL, NULL),
(5, 'Jakande Micheal', '12120912', 'someehre in the wolrd', '2022-04-10', 'Good Works', NULL, '34', '32', NULL, NULL, 3, '2022-04-11 03:47:16', '2022-04-11 03:47:16', 'Male', '44', 'miii@kel.com', NULL, NULL);

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `body`, `name`, `phone`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(1, 'what did I not give you?', 'Jimi From Us', '12231431135', 1, '2022-04-10 11:57:58', '2022-04-10 13:22:49', '0'),
(2, 'Hey yooooo..you have done well actually', 'Sweet Mum', '12345', 1, '2022-04-10 11:59:23', '2022-04-10 11:59:23', '0'),
(3, 'Omooo....i no like wetin you sow for mw ooo...please, skill up biko', NULL, NULL, 1, '2022-04-10 21:02:29', '2022-04-10 21:02:29', '0'),
(4, 'omooo....i no like wetin you sow for me oooo......go skill up abeg! you just dey sow rubbish', NULL, NULL, 1, '2022-04-10 21:03:02', '2022-04-10 21:03:02', '0'),
(5, 'once this works....this feature is out of it, means less work to go!', 'Message from Opera', '3463844444444444', 1, '2022-04-12 14:48:01', '2022-04-12 14:48:01', '0'),
(6, 'just doing a final check jareee', NULL, NULL, 1, '2022-04-13 04:15:36', '2022-04-13 04:15:36', '0');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_02_105734_create_clients_table', 2),
(6, '2022_04_02_162944_add_m6_to_clients_table', 3),
(7, '2022_04_02_163045_add_gender_to_clients_table', 3),
(8, '2022_04_02_163306_add_gender_to_clients_table', 4),
(9, '2022_04_02_163619_add_email_to_clients-table', 5),
(10, '2022_04_08_232036_add__email_status_to_clients_table', 6),
(11, '2022_04_10_041437_create_messages_table', 7),
(12, '2022_04_10_043228_create_messages_table', 8),
(13, '2022_04_10_054332_add_status_to_messages_table', 9),
(14, '2022_04_11_062703_create_photos_table', 10),
(15, '2022_04_11_065952_add_path_to_photos_table', 11),
(16, '2022_04_15_091208_add_google_id_to_users_table', 12);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `user_id`, `media`, `client_id`, `created_at`, `updated_at`, `path`) VALUES
(1, '3', 'cards-1.jpg', 5, '2022-04-11 15:29:59', '2022-04-11 15:29:59', '/storage/uploads/cards-1.jpg'),
(2, '3', 'event-category-1.jpg', 5, '2022-04-11 15:37:29', '2022-04-11 15:37:29', '/storage/uploads/event-category-1.jpg'),
(3, '1', 'Screenshot_20210529-140448_WhatsApp.jpg', 4, '2022-04-13 07:12:38', '2022-04-13 07:12:38', '/storage/uploads/Screenshot_20210529-140448_WhatsApp.jpg'),
(4, '1', 'comment-img-2.jpg', 1, '2022-04-14 02:53:49', '2022-04-14 02:53:49', '/storage/uploads/comment-img-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logoPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bannerpath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `logo`, `logoPath`, `banner`, `bannerpath`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'Jimi Wears 2', 'jw@w.com', '$2y$10$O8ysjbaHPDzajF.ZSopGpOJjzRYrhxe3d8FMfY/WdOQG6zcR01cB6', '1234567', 'scholarship.png', 'public/logo/wArBCUQPMCJ1dFNoXDHfHq8Dw09U80Nsypea1JXB.png', 'blog10.jpg', 'public/banners/lzh1EoE4PazALj7NxPPoGpvfyy9136WelC0SSvqo.jpg', '2022-04-02 16:32:48', '2022-04-15 15:30:36', NULL),
(2, 'KingsDavid Clothings', 'king@david.com', '$2y$10$si/cpffQqdG5L/PEie527.BiX6CM1pmuaJYH.wPkNgenybux8FeLa', NULL, NULL, NULL, NULL, NULL, '2022-04-03 05:25:34', '2022-04-03 05:25:34', NULL),
(3, 'JBL Wears', 'jim@my.com', '$2y$10$wAwWvZ7Z2NsA7v4xhOm1M.4yL.cCCgGGmEcsVA7BCOvuJkk51nP.S', NULL, NULL, NULL, NULL, NULL, '2022-04-11 03:32:54', '2022-04-11 03:32:54', NULL),
(4, 'Adesokan Adejimi', 'adesokanjimmy@gmail.com', 'eyJpdiI6Im9PeldzM2JJaTlCYnlSZG1QazMvRWc9PSIsInZhbHVlIjoiKzc0T2dTdTNNY0p3M29yNXdDY2I0L2QvdFBTZmI2MkJDcG95d2cyWm5UST0iLCJtYWMiOiIyNDVlMjdmNjU2YmQ0MWU5NzA1N2NjYTRmYjY2YjhlNGNlZjc3OWZiMTkwZTA3MTgxMTdlYjNkYzk4ZGEyOWRjIiwidGFnIjoiIn0=', NULL, NULL, NULL, NULL, NULL, '2022-04-15 17:03:03', '2022-04-15 17:03:03', '105878940831996444174');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clients_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_client_id_foreign` (`client_id`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
