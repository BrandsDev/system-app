-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 12:41 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hires`
--

CREATE TABLE `hires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_21_065012_create_homes_table', 1),
(6, '2023_03_21_065117_create_blogs_table', 1),
(7, '2023_03_21_065207_create_contacts_table', 1),
(8, '2023_03_21_065214_create_hires_table', 1),
(9, '2023_03_21_065238_create_privacy_policies_table', 1),
(11, '2023_03_21_065536_create_site_templates_table', 1),
(12, '2023_03_21_065551_create_terms_of_services_table', 1),
(13, '2023_03_21_065606_create_why_our_themes_table', 1),
(14, '2023_03_21_065737_create_skeletons_table', 1),
(15, '2023_03_21_073413_create_abouts_table', 1),
(16, '2023_03_21_065521_create_template_details_table', 2),
(17, '2023_03_21_065521_create_template_table', 3),
(18, '2023_04_13_084653_status', 4),
(19, '2023_04_13_085045_status', 5),
(20, '2023_04_13_085204_drop_table_name', 6),
(21, '2023_04_13_085244_template_details', 6),
(22, '2023_04_13_090645_create_templates_table', 7),
(23, '2023_04_13_091925_template', 8),
(24, '2023_04_13_092130_drop_table_template_details', 9),
(25, '2023_04_13_092326_drop_table_templates', 10),
(26, '2023_04_13_092417_templates', 11),
(27, '2023_04_13_094322_templates', 12),
(28, '2023_04_13_094425_create_templates_table', 13),
(29, '2023_04_13_095421_drop_table_templates', 14),
(30, '2023_04_13_095441_create_templates_table', 15),
(31, '2023_04_15_083833_drop_table_template', 16),
(32, '2023_04_15_083955_create_templates_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_templates`
--

CREATE TABLE `site_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skeletons`
--

CREATE TABLE `skeletons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sub_category` varchar(100) DEFAULT NULL,
  `sub_sub_category` varchar(100) DEFAULT NULL,
  `sale_price` varchar(100) DEFAULT NULL,
  `regular_price` varchar(100) NOT NULL,
  `commission` varchar(100) DEFAULT NULL,
  `bootstrap_v` varchar(100) NOT NULL,
  `released` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `version` varchar(100) NOT NULL,
  `seller_name` varchar(100) NOT NULL,
  `seller_email` varchar(100) NOT NULL,
  `short_description` tinytext DEFAULT NULL,
  `long_description` tinytext DEFAULT NULL,
  `change_log` tinytext DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `live_preview_link` text DEFAULT NULL,
  `downloadable_link` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `file` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `name`, `slug`, `category`, `sub_category`, `sub_sub_category`, `sale_price`, `regular_price`, `commission`, `bootstrap_v`, `released`, `updated`, `version`, `seller_name`, `seller_email`, `short_description`, `long_description`, `change_log`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `live_preview_link`, `downloadable_link`, `image`, `file`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(14, 'Template 1', 'template-9', 'Francisco', NULL, NULL, NULL, '200', NULL, '4', NULL, NULL, '4', 'a@a.a', 'a@a.a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'calligraphy-thumbnail.jpg', NULL, 0, NULL, '2023-04-17 03:00:52', '2023-05-09 01:49:01'),
(27, 'template 11', 'template-11', 'Francisco', 'York', NULL, NULL, '2000', NULL, '2', NULL, NULL, '2', 'template 11', 'a@a.a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'calligraphy-thumbnail.jpg', NULL, 1, NULL, '2023-05-16 00:20:34', '2023-05-16 00:20:34'),
(46, 'Template 26', 'Template 26', 'Francisco', 'York', NULL, NULL, '2000', NULL, '2', NULL, NULL, '2', 'Template 26', 'a@a.a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1684655776.346050196_767516311760616_3589983963788781674_n.jpg', NULL, 1, NULL, '2023-05-21 01:56:16', '2023-05-21 01:56:16'),
(47, 'Template 27', 'Template 27', 'Francisco', 'York', NULL, NULL, '2000', NULL, '2', NULL, NULL, '2', 'Template 27', 'a@a.a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1684513973IMG-20230519-WA0001.jpg', NULL, 1, NULL, '2023-05-21 01:57:30', '2023-05-21 04:39:02'),
(48, 'Template 28', 'Template 28', 'Francisco', 'York', NULL, NULL, '2000', NULL, '2', NULL, NULL, '2', 'Template 28', 'a@a.a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sura-nas-falaq-o-ikhlas-calligraphy-painting-product-03.jpg', NULL, 1, NULL, '2023-05-21 02:00:03', '2023-05-21 02:00:03'),
(49, 'Template 29', 'Template 29', 'Francisco', 'York', NULL, NULL, '2000', NULL, '2', NULL, NULL, '2', 'Template 29', 'a@a.a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'calligraphy-thumbnail.jpg', 'Dr. Mahmudul Hasan.pdf', 1, NULL, '2023-05-21 02:06:02', '2023-05-21 02:06:02'),
(51, 'Template 30', 'Template 30', 'Francisco', 'York', NULL, NULL, '2000', NULL, '2', NULL, NULL, '2', 'Template 30', 'a@a.a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'calligraphy-thumbnail.jpg', 'Dr. Mahmudul Hasan.pdf', 1, NULL, '2023-05-21 02:16:40', '2023-05-21 02:16:40'),
(52, 'Test 1', 'test-1', 'Francisco', 'York', 'York', '222', '2000', '222', '2', NULL, NULL, '2', 'Template 31 edited 2', 'b@a.a', '<p><label class=\"form-label\" for=\"short_description\">Short Description</label></p>', '<p><label class=\"form-label\" for=\"long_description\">Long Description</label></p>', '<p><label class=\"form-label\" for=\"change_log\">Change Log</label></p>', '<p><label class=\"form-label\" for=\"youtube_iframe\">Youtube Iframe</label></p>', '<p><label class=\"form-label\" for=\"header_content\">Header Content</label></p>', '<p><label class=\"form-label\" for=\"meta_title\">Meta Title</label></p>', '<p>Meta&nbsp;</p>', 'http://localhost/system-app/public/template/detail/Template%2031', 'http://localhost/system-app/public/template/detail/Template%2031', 'calligraphy-thumbnail.jpg', 'Dr. Mahmudul Hasan.pdf', 0, '<p>Comment</p>', '2023-05-21 02:19:22', '2023-05-21 04:31:11'),
(53, 'Test 2', 'test-2', 'Francisco', 'York', 'Francisco', '222', '222', '222', '1', NULL, NULL, '1', 'Test 2', 'a@a.a', '<p><label class=\"form-label\" for=\"short_description\">Short Description</label></p>', '<p><label class=\"form-label\" for=\"long_description\">Long Description</label></p>', '<p><label class=\"form-label\" for=\"change_log\">Change Log</label></p>', '<p><label class=\"form-label\" for=\"youtube_iframe\">Youtube Iframe</label></p>', '<p><label class=\"form-label\" for=\"header_content\">Header Content</label></p>', '<p><label class=\"form-label\" for=\"meta_title\">Meta Title</label></p>', '<p><label class=\"form-label\" for=\"meta_description\">Meta Description</label></p>', 'http://localhost/system-app/public/', 'http://localhost/system-app/public/', '345847653_282874117406995_7699823351204466739_n.jpg', 'note 1.pdf', 1, '<p>Comment</p>', '2023-05-21 04:40:47', '2023-05-21 04:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `terms_of_services`
--

CREATE TABLE `terms_of_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'system-app', 'hudhoot@gmail.com', NULL, '$2y$10$QurIPsmu2wexLbKOiX1iXOCy09/I0/8QDD8gstylS69d8YOzU4ACm', NULL, '2023-03-28 01:11:27', '2023-03-28 01:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `why_our_themes`
--

CREATE TABLE `why_our_themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hires`
--
ALTER TABLE `hires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_templates`
--
ALTER TABLE `site_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skeletons`
--
ALTER TABLE `skeletons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `terms_of_services`
--
ALTER TABLE `terms_of_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `why_our_themes`
--
ALTER TABLE `why_our_themes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hires`
--
ALTER TABLE `hires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_templates`
--
ALTER TABLE `site_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skeletons`
--
ALTER TABLE `skeletons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `terms_of_services`
--
ALTER TABLE `terms_of_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_our_themes`
--
ALTER TABLE `why_our_themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
