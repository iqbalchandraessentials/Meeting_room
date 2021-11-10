-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2021 at 11:05 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meeting-room`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_nows`
--

CREATE TABLE `booking_nows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `fnb` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_nows`
--

INSERT INTO `booking_nows` (`id`, `date`, `title`, `start`, `end`, `id_room`, `pic_name`, `code`, `pic_email`, `pic_phone`, `status`, `description`, `fnb`, `created_at`, `updated_at`) VALUES
(1, '2021-11-08', 'Ulang Tahun Andre', '2021-11-08T13:00:00+07:00', '2021-11-08T15:30:00+07:00', '3', 'iqbal', 'TRX-773985', 'iqbal@emai.com', '085718892726', NULL, NULL, NULL, '2021-11-07 02:45:46', '2021-11-07 02:45:46'),
(2, '2021-11-10', 'Isi aja', '2021-11-10T08:30:00+07:00', '2021-11-10T13:30:00+07:00', '3', 'iqbal', 'TRX-419720', 'iqbal@emai.com', '085718892726', NULL, NULL, NULL, '2021-11-07 02:51:43', '2021-11-07 02:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `category_facilities`
--

CREATE TABLE `category_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_facilities`
--

INSERT INTO `category_facilities` (`id`, `name`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Stasionary', 'Alat Tulis, dan alat-alat lainya', 'ACTIVE', NULL, '2021-11-07 02:31:25', '2021-11-07 02:31:25'),
(2, 'Sound System', 'JBL', 'ACTIVE', NULL, '2021-11-07 02:31:49', '2021-11-07 02:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `category_fnbs`
--

CREATE TABLE `category_fnbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fnb_orders`
--

CREATE TABLE `fnb_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_book` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_facilities`
--

CREATE TABLE `menu_facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_facilities`
--

INSERT INTO `menu_facilities` (`id`, `id_category`, `name`, `status`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'Speaker', 'ACTIVE', 'Simbadda', NULL, '2021-11-07 02:32:44', '2021-11-07 02:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `menu_fnbs`
--

CREATE TABLE `menu_fnbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2021_10_23_152558_create_facility_categories_table', 1),
(14, '2021_10_23_153115_create_facilities_table', 1),
(15, '2021_10_23_153204_create_fnb_categories_table', 1),
(16, '2021_10_23_153218_create_fnb_menus_table', 1),
(17, '2021_10_23_153256_create_bookings_table', 1),
(18, '2021_10_23_153316_create_rooms_table', 1),
(19, '2021_10_23_153329_create_photos_table', 1),
(20, '2021_11_07_094728_create_fnb_orders_table', 2);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `room_galeries`
--

CREATE TABLE `room_galeries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_galeries`
--

INSERT INTO `room_galeries` (`id`, `photos`, `room_id`, `created_at`, `updated_at`) VALUES
(1, 'assets/room/A2cl96DV0srk49htDxTLt7zKXGN3qrZbbaKLst0T.jpg', 2, '2021-11-07 02:38:45', '2021-11-07 02:38:45'),
(2, 'assets/room/8Hl6TNrWCAb3Xs6jttnnOY2x1tV2fQyUxFNFNPBh.jpg', 3, '2021-11-07 02:41:51', '2021-11-07 02:41:51'),
(3, 'assets/product/uk8HISS6r8DOmMRlhHv0xxqJjyLHt01n5nCPeWDp.jpg', 3, '2021-11-07 02:42:23', '2021-11-07 02:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `room_meetings`
--

CREATE TABLE `room_meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours_availibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days_availibility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `room_meetings`
--

INSERT INTO `room_meetings` (`id`, `name`, `capacity`, `location`, `facility`, `hours_availibility`, `days_availibility`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Jasper', 15, 'Gd.Agro Plaza Jakarta', 'Speaker', 'Full Days', 'All Days', 'ACTIVE', '2021-11-07 02:41:51', '2021-11-07 02:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
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
-- Indexes for table `booking_nows`
--
ALTER TABLE `booking_nows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_facilities`
--
ALTER TABLE `category_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_fnbs`
--
ALTER TABLE `category_fnbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fnb_orders`
--
ALTER TABLE `fnb_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_facilities`
--
ALTER TABLE `menu_facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_fnbs`
--
ALTER TABLE `menu_fnbs`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `room_galeries`
--
ALTER TABLE `room_galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_meetings`
--
ALTER TABLE `room_meetings`
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
-- AUTO_INCREMENT for table `booking_nows`
--
ALTER TABLE `booking_nows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_facilities`
--
ALTER TABLE `category_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category_fnbs`
--
ALTER TABLE `category_fnbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fnb_orders`
--
ALTER TABLE `fnb_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_facilities`
--
ALTER TABLE `menu_facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_fnbs`
--
ALTER TABLE `menu_fnbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_galeries`
--
ALTER TABLE `room_galeries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room_meetings`
--
ALTER TABLE `room_meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
