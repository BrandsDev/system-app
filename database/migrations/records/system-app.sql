-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 12:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `subcategory_name` varchar(100) NOT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `sku` varchar(100) NOT NULL,
  `sale_price` varchar(100) DEFAULT NULL,
  `regular_price` varchar(100) NOT NULL,
  `commission` varchar(100) DEFAULT NULL,
  `publisher` varchar(100) NOT NULL,
  `ranking` varchar(4) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `specification` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `order_type` tinyint(4) NOT NULL DEFAULT 0,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL DEFAULT 'default-image.png',
  `page_images` varchar(255) NOT NULL DEFAULT 'default-page-image.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `file` varchar(255) NOT NULL DEFAULT 'default-file.pdf',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_audios`
--

CREATE TABLE `book_audios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `release_date` varchar(100) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `cover_image` varchar(255) NOT NULL DEFAULT 'default-cover-image.png',
  `audio_file` varchar(255) NOT NULL DEFAULT 'default-audio-file.mp3',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_authors`
--

CREATE TABLE `book_authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bio` varchar(199) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(199) DEFAULT NULL,
  `description` varchar(199) DEFAULT NULL,
  `youtube_iframe` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default-image.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_blogs`
--

CREATE TABLE `book_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `header_title` varchar(100) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `book` varchar(100) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `featured_image` varchar(255) NOT NULL DEFAULT 'default-featured-image.png',
  `file` varchar(255) NOT NULL DEFAULT 'default-file.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_contacts`
--

CREATE TABLE `book_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_publishers`
--

CREATE TABLE `book_publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `mobile` varchar(199) DEFAULT NULL,
  `email` varchar(199) DEFAULT NULL,
  `address` varchar(199) DEFAULT NULL,
  `description` varchar(199) DEFAULT NULL,
  `youtube_iframe` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default-image.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_subcategories`
--

CREATE TABLE `book_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `category_name` varchar(199) NOT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_sub_subcategories`
--

CREATE TABLE `book_sub_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_subcategory_name` varchar(199) NOT NULL,
  `subcategory_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
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
(105, '2014_10_12_000000_create_users_table', 1),
(106, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(107, '2019_08_19_000000_create_failed_jobs_table', 1),
(108, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(109, '2023_04_15_083955_create_templates', 1),
(110, '2023_06_10_083431_create_books', 1),
(111, '2023_06_11_061100_create_book_publishers', 1),
(112, '2023_06_11_091106_create_book_authors', 1),
(113, '2023_08_05_064523_create_template_audios', 1),
(114, '2023_08_05_064531_create_template_blogs', 1),
(115, '2023_08_05_064542_create_template_categories', 1),
(116, '2023_08_05_064558_create_template_contacts', 1),
(117, '2023_08_05_064744_create_template_subcategories', 1),
(118, '2023_08_05_064752_create_template_sub_subcategories', 1),
(119, '2023_08_05_065257_create_book_subcategories', 1),
(120, '2023_08_05_065309_create_book_sub_subcategories', 1),
(121, '2023_08_05_065429_create_book_blogs', 1),
(122, '2023_08_05_065445_create_book_audios', 1),
(123, '2023_08_05_070223_create_book_categories', 1),
(124, '2023_08_05_070313_create_book_contacts', 1),
(125, '2023_08_07_050636_create_template_sellers', 1),
(126, '2023_08_10_095108_create_template_subscriptions', 1),
(127, '2023_08_13_061731_create_template_hires', 1),
(128, '2023_08_24_040247_create_template_pages', 1),
(129, '2023_11_09_102128_create_template_blog_category', 1),
(130, '2023_11_09_102135_create_template_blog_subcategory', 1),
(131, '2023_11_09_102141_create_template_blog_sub_subcategory', 1),
(132, '2023_11_11_085544_create_template_blog_categories', 2),
(133, '2023_11_11_085555_create_template_blog_subcategories', 2),
(134, '2023_11_11_085605_create_template_blog_sub_subcategories', 2),
(135, '2023_11_15_095336_create_template_blog_tags', 3);

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
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `sku` varchar(100) NOT NULL,
  `sale_price` varchar(100) DEFAULT NULL,
  `regular_price` varchar(100) DEFAULT NULL,
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
  `order_type` tinyint(4) DEFAULT 0,
  `is_featured` tinyint(4) DEFAULT 0,
  `live_preview_link` text DEFAULT NULL,
  `downloadable_link` text DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default-image.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `file` varchar(255) NOT NULL DEFAULT 'default-file.mp3',
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_audios`
--

CREATE TABLE `template_audios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `release_date` varchar(100) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `album` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `cover_image` varchar(255) NOT NULL DEFAULT 'default-cover-image.png',
  `audio_file` varchar(255) NOT NULL DEFAULT 'default-audio-file.mp3',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_blogs`
--

CREATE TABLE `template_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `header_title` varchar(100) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `seller_name` varchar(100) NOT NULL DEFAULT 'TempDev',
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `facebook_meta_title` varchar(100) DEFAULT NULL,
  `facebook_meta_description` varchar(200) DEFAULT NULL,
  `twitter_meta_title` varchar(100) DEFAULT NULL,
  `twitter_meta_description` varchar(200) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT 0,
  `featured_image` varchar(255) NOT NULL DEFAULT 'default-featured-image.png',
  `featured_img_alt_text` varchar(255) DEFAULT NULL,
  `file` varchar(255) NOT NULL DEFAULT 'default-file.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_blogs`
--

INSERT INTO `template_blogs` (`id`, `title`, `slug`, `tags`, `header_title`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `template`, `seller_name`, `short_description`, `long_description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `is_featured`, `featured_image`, `featured_img_alt_text`, `file`, `og_image`, `og_img_alt_text`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(6, 'c', 'c', 'c', 'c', 'A', 'c2', NULL, 'c', 'c', '<p>c</p>', '<p>c</p>', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 0, 'islamic-authentic-english-books-og.jpg', 'c', 'default-file.png', 'islamic-authentic-english-books-og.jpg', 'c', 1, '<p>c</p>', '2023-11-19 02:40:29', '2023-11-19 02:40:29'),
(7, 'e', 'e', 'e', 'e', 'A', 'c2', NULL, 'e', 'e', '<p>e</p>', '<p>e</p>', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 1, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'e', 'islamic-authentic-english-books-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'e', 1, '<p>e</p>', '2023-11-19 03:29:27', '2023-11-19 03:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `template_blog_categories`
--

CREATE TABLE `template_blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_blog_categories`
--

INSERT INTO `template_blog_categories` (`id`, `category_name`, `slug`, `title`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `created_at`, `updated_at`) VALUES
(4, 'A', 'A', NULL, '<p>A</p>', 'A', 'A', NULL, NULL, NULL, NULL, 'islamic-english-books-icon.png', NULL, 'islamic-english-books-thumb.png', NULL, 'dummy-cover-3.jpg', NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', NULL, '2023-11-11 23:35:18', '2023-11-11 23:35:18'),
(5, 'B', 'B', NULL, '<p>B</p>', 'B', 'B', 'B', 'B', 'B', 'B', 'dummy-icon.png', 'B', 'dummy-thumb.png', 'B', 'dummy-cover.jpg', 'B', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'B', '2023-11-12 00:28:05', '2023-11-12 00:28:05'),
(6, 'C1', 'C1', 'C1', '<p>C1</p>', 'C1', 'C1', 'C1', 'C1', 'C1', 'C1', 'dummy-icon.png', 'C1', 'dummy-thumb.png', 'C1', 'dummy-cover.jpg', 'C1', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'C1', '2023-11-12 23:03:41', '2023-11-12 23:06:29'),
(7, 'd', 'd', 'd', '<p>d</p>', 'd', 'd', 'd', 'd', 'd', 'd', 'dummy-icon-2.png', 'd', 'dummy-thumb-2.png', 'd', 'dummy-cover-2.jpg', 'd', 'islamic-authentic-english-books-og.jpg', 'd', '2023-11-19 03:37:36', '2023-11-19 03:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `template_blog_subcategories`
--

CREATE TABLE `template_blog_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `category_name` varchar(199) NOT NULL,
  `title` text DEFAULT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_blog_subcategories`
--

INSERT INTO `template_blog_subcategories` (`id`, `subcategory_name`, `slug`, `category_name`, `title`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 'A', 'a', '<p>a</p>', 'a', 'a', 'a', 'a', 'a', 'a', 'islamic-english-books-icon.png', 'a', 'islamic-english-books-thumb.png', 'a', 'dummy-cover-2.jpg', 'a', 'islamic-authentic-english-books-og.jpg', 'a', '2023-11-12 23:24:20', '2023-11-12 23:37:15'),
(4, 'c', 'c', 'C1', 'c', '<p>c</p>', 'c', 'c', 'c', 'c', 'c', 'c', 'dummy-icon-2.png', 'c', 'dummy-thumb-2.png', 'c', 'dummy-cover-2.jpg', 'c', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'c', '2023-11-19 03:46:06', '2023-11-19 03:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `template_blog_sub_subcategories`
--

CREATE TABLE `template_blog_sub_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_subcategory_name` varchar(199) NOT NULL,
  `subcategory_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `title` text DEFAULT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_blog_sub_subcategories`
--

INSERT INTO `template_blog_sub_subcategories` (`id`, `sub_subcategory_name`, `subcategory_name`, `slug`, `title`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `created_at`, `updated_at`) VALUES
(3, 'c', 'c', 'c', 'c', '<p>c</p>', 'c', 'c', 'c', 'c', 'c', 'c', 'dummy-icon-2.png', 'c', 'dummy-thumb-2.png', 'c', 'dummy-cover-2.jpg', 'c', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'c', '2023-11-19 03:48:14', '2023-11-19 03:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `template_blog_tags`
--

CREATE TABLE `template_blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `facebook_meta_title` varchar(100) DEFAULT NULL,
  `facebook_meta_description` varchar(200) DEFAULT NULL,
  `twitter_meta_title` varchar(100) DEFAULT NULL,
  `twitter_meta_description` varchar(200) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-thumb.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_blog_tags`
--

INSERT INTO `template_blog_tags` (`id`, `name`, `slug`, `description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `og_image`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_img_alt_text`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(15, 'e', 'e', '<p>e</p>', NULL, NULL, 'e', 'e', 'e', 'e', 'e', 'e', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'dummy-icon-2.png', 'e', 'dummy-thumb-2.png', 'e', 'dummy-cover-2.jpg', 'e', 'e', 1, NULL, '2023-11-18 03:43:12', '2023-11-19 03:50:59'),
(16, 'b', 'b', '<p>b</p>', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'islamic-authentic-english-books-og.jpg', 'dummy-icon.png', 'b', 'dummy-thumb.png', 'b', 'dummy-cover.jpg', 'b', 'b', 1, '<p>b</p>', '2023-11-19 03:50:18', '2023-11-19 03:50:18');

-- --------------------------------------------------------

--
-- Table structure for table `template_categories`
--

CREATE TABLE `template_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `facebook_meta_title` text DEFAULT NULL,
  `facebook_meta_description` text DEFAULT NULL,
  `twitter_meta_title` text DEFAULT NULL,
  `twitter_meta_description` text DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `icon_alt_text` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb_alt_text` varchar(255) DEFAULT NULL,
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover_alt_text` varchar(255) DEFAULT NULL,
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_img_alt_text` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_categories`
--

INSERT INTO `template_categories` (`id`, `category_name`, `slug`, `title`, `description`, `meta_title`, `meta_description`, `facebook_meta_title`, `facebook_meta_description`, `twitter_meta_title`, `twitter_meta_description`, `icon`, `icon_alt_text`, `thumb`, `thumb_alt_text`, `cover`, `cover_alt_text`, `og_image`, `og_img_alt_text`, `created_at`, `updated_at`) VALUES
(1, 'A', 'a', NULL, '<p>A</p>', 'A', 'A', NULL, NULL, NULL, NULL, 'islamic-english-books-icon.png', NULL, 'islamic-english-books-thumb.png', NULL, 'dummy-cover-3.jpg', NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', NULL, '2023-11-11 23:04:26', '2023-11-11 23:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `template_contacts`
--

CREATE TABLE `template_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_hires`
--

CREATE TABLE `template_hires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `budget` varchar(255) DEFAULT 'below',
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_pages`
--

CREATE TABLE `template_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `subcategory_name` varchar(100) DEFAULT NULL,
  `sub_subcategory_name` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `youtube_iframe` text DEFAULT NULL,
  `header_content` text DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` varchar(200) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL DEFAULT 'default-thumb.png',
  `breadcrumb_image` varchar(255) NOT NULL DEFAULT 'default-breadcrumb.png',
  `cover_image` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og.png',
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_pages`
--

INSERT INTO `template_pages` (`id`, `name`, `title`, `slug`, `tags`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `short_description`, `long_description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `thumb`, `breadcrumb_image`, `cover_image`, `og_image`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Home', 'home', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', 1, NULL, '2023-11-14 03:05:03', '2023-11-14 03:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `template_sellers`
--

CREATE TABLE `template_sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bio` varchar(199) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(199) DEFAULT NULL,
  `description` varchar(199) DEFAULT NULL,
  `youtube_iframe` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default-image.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_subcategories`
--

CREATE TABLE `template_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `category_name` varchar(199) NOT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_subcategories`
--

INSERT INTO `template_subcategories` (`id`, `subcategory_name`, `slug`, `category_name`, `description`, `meta_title`, `meta_description`, `icon`, `thumb`, `cover`, `og_image`, `created_at`, `updated_at`) VALUES
(1, 'c2', 'c2', 'C1', '<p>c2</p>', 'c2', 'c2', 'dummy-icon.png', 'dummy-thumb.png', 'dummy-cover.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', '2023-11-12 23:13:09', '2023-11-12 23:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `template_subscriptions`
--

CREATE TABLE `template_subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_sub_subcategories`
--

CREATE TABLE `template_sub_subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_subcategory_name` varchar(199) NOT NULL,
  `subcategory_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-icon.png',
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
(1, 'ilannoor', 'support@ilannoor.com', NULL, '$2y$10$WEQB8LpLd4EBvbPoN6Tw0unCOi4U2Y0MSgltgZt5/C9OC1.zUAqVu', NULL, '2023-11-11 01:20:27', '2023-11-11 01:20:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_audios`
--
ALTER TABLE `book_audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_authors`
--
ALTER TABLE `book_authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_blogs`
--
ALTER TABLE `book_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_contacts`
--
ALTER TABLE `book_contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_contacts_name_unique` (`name`),
  ADD UNIQUE KEY `book_contacts_email_unique` (`email`);

--
-- Indexes for table `book_publishers`
--
ALTER TABLE `book_publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_subcategories`
--
ALTER TABLE `book_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_sub_subcategories`
--
ALTER TABLE `book_sub_subcategories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_audios`
--
ALTER TABLE `template_audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_blogs`
--
ALTER TABLE `template_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_blog_categories`
--
ALTER TABLE `template_blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_blog_subcategories`
--
ALTER TABLE `template_blog_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_blog_sub_subcategories`
--
ALTER TABLE `template_blog_sub_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_blog_tags`
--
ALTER TABLE `template_blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_categories`
--
ALTER TABLE `template_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_contacts`
--
ALTER TABLE `template_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_hires`
--
ALTER TABLE `template_hires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_pages`
--
ALTER TABLE `template_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_sellers`
--
ALTER TABLE `template_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_subcategories`
--
ALTER TABLE `template_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_subscriptions`
--
ALTER TABLE `template_subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `template_subscriptions_email_unique` (`email`);

--
-- Indexes for table `template_sub_subcategories`
--
ALTER TABLE `template_sub_subcategories`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_audios`
--
ALTER TABLE `book_audios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_authors`
--
ALTER TABLE `book_authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_blogs`
--
ALTER TABLE `book_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_contacts`
--
ALTER TABLE `book_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_publishers`
--
ALTER TABLE `book_publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_subcategories`
--
ALTER TABLE `book_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_sub_subcategories`
--
ALTER TABLE `book_sub_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_audios`
--
ALTER TABLE `template_audios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_blogs`
--
ALTER TABLE `template_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `template_blog_categories`
--
ALTER TABLE `template_blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `template_blog_subcategories`
--
ALTER TABLE `template_blog_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `template_blog_sub_subcategories`
--
ALTER TABLE `template_blog_sub_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `template_blog_tags`
--
ALTER TABLE `template_blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `template_categories`
--
ALTER TABLE `template_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template_contacts`
--
ALTER TABLE `template_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_hires`
--
ALTER TABLE `template_hires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_pages`
--
ALTER TABLE `template_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `template_sellers`
--
ALTER TABLE `template_sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_subcategories`
--
ALTER TABLE `template_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template_subscriptions`
--
ALTER TABLE `template_subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_sub_subcategories`
--
ALTER TABLE `template_sub_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
