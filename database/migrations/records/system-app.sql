-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 11:52 AM
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
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `change_log` text DEFAULT NULL,
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

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `name`, `slug`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `sku`, `sale_price`, `regular_price`, `commission`, `bootstrap_v`, `released`, `updated`, `version`, `seller_name`, `seller_email`, `short_description`, `long_description`, `change_log`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `order_type`, `is_featured`, `live_preview_link`, `downloadable_link`, `image`, `og_image`, `file`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'BlogForge 10', 'blogforge-10', 'Blog Management System', NULL, NULL, 'portfolio', NULL, NULL, NULL, '5.2', NULL, NULL, '1.0', 'Codephics', 'codephics@gmail.com', '<p>Elevate your blogging experience with BlogForge 10, a free, SEO-friendly Laravel 10 and PHP 8.1-powered blog management system. Seamlessly designed with HTML5, CSS3, and Bootstrap 5.2, it empowers users to effortlessly create, edit, and manage blogs, categories, tags, and more through a secure admin panel.</p>', '<h2>Unleash the Power of Blogging</h2>\r\n<ul>\r\n<li>Intuitive Admin Panel</li>\r\n<li>Dynamic Blog Creation</li>\r\n<li>Effortless Category Management</li>\r\n<li>Tag Customization</li>\r\n<li>Secure Comment Handling</li>\r\n<li>Social Link Integration</li>\r\n<li>SEO-Friendly Structure</li>\r\n<li>and much more...</li>\r\n</ul>', '<p><strong>Version 1.0:</strong></p>\r\n<ul>\r\n<li>Initial Release</li>\r\n</ul>', NULL, NULL, 'BlogForge 10 - Free Laravel 10 Blog Management System', 'Experience the future of blogging with BlogForge 10. Download our free, SEO-friendly Laravel 10 blog management system. Effortlessly create, edit, and manage content in an intuitive admin panel.', NULL, NULL, NULL, NULL, 'children-and-parenting-books.jpg', 'default-og-image.png', 'default-file.mp3', 1, NULL, '2023-11-26 03:21:30', '2023-12-02 04:24:20');

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
(14, 'Revolutionize Your Blogging Journey with BlogForge 10: A Free, SEO-Friendly Laravel 10 Solution', 'revolutionize-your-blogging-journey-with-blogforge-10-a-free-seo-friendly-laravel-10-solution', NULL, NULL, NULL, NULL, NULL, 'BlogForge 10', 'Codephics', NULL, '<p>Are you tired of wrestling with complex blogging platforms? Yearning for a solution that\'s both powerful and user-friendly? Look no further! Introducing <strong>BlogForge 10</strong> &ndash; a game-changing, SEO-friendly blog management system built on Laravel 10 and PHP 8.1.</p>\r\n<p><strong>Unleash the Power of BlogForge 10</strong></p>\r\n<p>BlogForge 10 is more than just a blogging platform; it\'s a comprehensive solution crafted to simplify and enhance your blogging experience. Imagine an intuitive admin panel where you can effortlessly create, edit, and manage blogs. With HTML5, CSS3, and Bootstrap 5.2, the user interface is not just seamless but visually stunning.</p>\r\n<p><strong>Effortless Content Management</strong></p>\r\n<p>Managing blogs, categories, tags, and comments has never been easier. BlogForge 10 provides a secure admin panel where you can add, edit, update, and delete content with a few clicks. The agility of BlogForge 10 ensures that even complex tasks are streamlined for efficiency.</p>\r\n<p><strong>SEO-Friendly Magic</strong></p>\r\n<p>In the digital age, visibility matters. BlogForge 10 is inherently SEO-friendly, with structured data, clean URLs, and meta tags that make your content more discoverable. It\'s not just a blog platform; it\'s your ticket to a higher ranking on search engines.</p>\r\n<p><strong>Join the Blogging Revolution</strong></p>\r\n<p>BlogForge 10 isn\'t just a tool; it\'s a revolution in the world of blogging. It\'s a solution crafted by developers, for developers. Join a community of innovators shaping the future of web development.</p>\r\n<p><strong>Why Download BlogForge 10?</strong></p>\r\n<ol>\r\n<li><strong>User-Friendly:</strong> Effortlessly manage your blog with an intuitive admin panel.</li>\r\n<li><strong>Innovative Features:</strong> Enjoy dynamic content creation, seamless category management, and more.</li>\r\n<li><strong>Secure:</strong> Manage your content securely with advanced authentication and authorization features.</li>\r\n<li><strong>SEO Optimization:</strong> Boost your blog\'s visibility with built-in SEO features.</li>\r\n<li><strong>Community-Driven:</strong> Be part of a thriving community, shaping the future of BlogForge 10.</li>\r\n</ol>\r\n<p><strong>Download Now and Transform Your Blogging Experience!</strong></p>\r\n<p>Don\'t miss out on the future of blogging. Download BlogForge 10 now and embark on a journey where innovation meets simplicity. Revolutionize your blogs, engage your audience, and enjoy the freedom to create without limits.</p>\r\n<p>Ready to experience the power of BlogForge 10? <a href=\"../../../../detail/blogforge-10\" target=\"_new\">Download Now</a> and be part of the blogging revolution!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'default-featured-image.png', NULL, 'default-file.png', 'default-og-image.png', NULL, 1, NULL, '2023-12-02 03:51:00', '2023-12-02 03:51:00'),
(15, 'Crafting a Digital Portfolio: Unleash Your Creativity with PortFolioXpress', 'crafting-a-digital-portfolio-unleash-your-creativity-with-portfolioxpress', NULL, NULL, NULL, NULL, NULL, 'BlogForge 10', 'Codephics', NULL, '<p>Are you an artist, designer, or creative professional seeking a platform to showcase your work elegantly and effectively? Your search ends here! Welcome to <strong>PortFolioXpress</strong> &ndash; a dynamic and free portfolio web application designed to elevate your online presence.</p>\r\n<p><strong>Elevate Your Online Presence with PortFolioXpress</strong></p>\r\n<p>In a world where first impressions matter, your digital portfolio is your introduction. PortFolioXpress is not just a platform; it\'s a canvas for your creativity. Built on Laravel 10 and PHP 8.1, this application empowers you to curate and display your work seamlessly.</p>\r\n<p><strong>Why PortFolioXpress?</strong></p>\r\n<ol>\r\n<li>\r\n<p><strong>Dynamic Presentation:</strong> PortFolioXpress offers a dynamic and visually appealing way to present your work. Showcase your projects, skills, and achievements with elegance.</p>\r\n</li>\r\n<li>\r\n<p><strong>User-Friendly Admin Panel:</strong> Managing your portfolio shouldn\'t be a hassle. With PortFolioXpress, enjoy an admin panel that is not only user-friendly but also powerful, allowing you to update and modify your portfolio effortlessly.</p>\r\n</li>\r\n<li>\r\n<p><strong>Responsive Design:</strong> Your portfolio should look stunning on all devices. PortFolioXpress ensures a responsive design, so your work looks as impressive on a smartphone as it does on a desktop.</p>\r\n</li>\r\n<li>\r\n<p><strong>SEO Optimization:</strong> Just like your artwork, your portfolio deserves to be seen. PortFolioXpress is crafted with SEO best practices, ensuring that your portfolio ranks high in search engine results.</p>\r\n</li>\r\n<li>\r\n<p><strong>Community of Creatives:</strong> Join a community of fellow creatives using PortFolioXpress. Share insights, get feedback, and be part of a network that appreciates and supports your artistic journey.</p>\r\n</li>\r\n</ol>\r\n<p><strong>Transform Your Portfolio with PortFolioXpress</strong></p>\r\n<p>Creating a digital portfolio shouldn\'t be a daunting task. PortFolioXpress makes it easy for you to focus on what you do best &ndash; creating. Download PortFolioXpress now and embark on a journey where your creativity takes center stage.</p>\r\n<p><strong>Download Now and Showcase Your Creative Journey!</strong></p>\r\n<p>Ready to present your work to the world in a way that truly reflects your artistic vision? <a href=\"https://chat.openai.com/c/link-to-download\" target=\"_new\">Download PortFolioXpress</a> and let your portfolio speak volumes.</p>\r\n<p>Your creativity deserves the best platform &ndash; choose PortFolioXpress and let your work shine!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'default-featured-image.png', NULL, 'default-file.png', 'default-og-image.png', NULL, 1, NULL, '2023-12-02 03:54:23', '2023-12-02 03:54:23');

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
(1, 'Blog Management System', 'blog-management-system', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'islamic-english-books-icon.png', NULL, 'islamic-english-books-thumb.png', NULL, 'dummy-cover-3.jpg', NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', NULL, '2023-11-11 23:04:26', '2023-12-02 03:33:00'),
(2, 'Portfolio Management System', 'portfolio-management-system', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-icon.png', NULL, 'default-icon.png', NULL, 'default-icon.png', NULL, 'default-icon.png', NULL, '2023-12-02 04:23:37', '2023-12-02 04:23:37');

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
(1, 'Template Store', 'Template Store', 'template-store', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Empowering Digital Solutions | Laravel Applications', 'Elevate your web experience with our Laravel-based solutions. From blog management to technical innovations, explore a diverse range of applications.', 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', 1, NULL, '2023-11-14 03:05:03', '2023-12-02 02:45:38'),
(3, 'Why Our Themes?', 'Why Our Themes?', 'why-our-themes', NULL, NULL, NULL, NULL, NULL, '<h1>Why Choose Our Solutions</h1>\r\n<p>Welcome to a world of innovation and efficiency where our Laravel-powered solutions redefine your digital experience. Here\'s why our solutions stand out:</p>\r\n<h2>1. Seamlessness at Its Core</h2>\r\n<p>Our applications are meticulously crafted for a seamless experience. Whether you\'re managing a blog or creating dynamic content, our solutions prioritize user-friendliness. Effortlessly navigate the admin panel, edit blog posts, and engage your audience.</p>\r\n<h2>2. Community-Driven Excellence</h2>\r\n<p>Join a vibrant community of developers and enthusiasts. Our solutions are not just tools; they are part of a collaborative ecosystem. Stay updated on the latest features, share insights, and contribute to the continuous evolution of our applications.</p>\r\n<h2>3. Future-Ready Integration</h2>\r\n<p>Embrace the future with confidence. Our Laravel-based solutions are designed for seamless integration, ensuring compatibility with the latest technologies. Stay ahead of industry standards and explore the cutting edge of web development.</p>\r\n<h2>4. User-Friendly Content Hub</h2>\r\n<p>Experience content creation like never before. Our solutions prioritize user-friendliness, making them suitable for both beginners and experienced users. Manage your content with ease and efficiency.</p>\r\n<h2>5. Cutting-Edge Web Development</h2>\r\n<p>Explore the forefront of web development with our applications. Crafted with cutting-edge technologies, our solutions ensure your digital presence remains innovative and in line with industry standards.</p>\r\n<p>Choose our solutions for a digital journey that goes beyond expectations. Elevate your web experience with technology that works seamlessly and innovatively.</p>', NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:14:55', '2023-11-30 01:20:34'),
(4, 'Templates', 'Templates', 'templates', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:15:20', '2023-11-26 03:15:20'),
(5, 'QR Code Gen', 'QR Code Gen', 'qr-code-generator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:15:48', '2023-11-26 03:15:48'),
(6, 'Blog', 'Blog', 'blog', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:16:08', '2023-11-26 03:16:08'),
(7, 'Overview', 'Overview', 'overview', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:16:38', '2023-11-26 03:16:38'),
(8, 'Brand', 'Brand', 'brand', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:16:57', '2023-11-26 03:16:57'),
(9, 'License', 'License', 'license', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:17:26', '2023-11-26 03:17:26'),
(10, 'Hire Us', 'Hire Us', 'hire-us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:17:47', '2023-11-26 03:17:47'),
(11, 'Privacy Policy', 'Privacy Policy', 'privacy-policy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:18:06', '2023-11-26 03:18:06'),
(12, 'Terms of Service', 'Terms of Service', 'terms-of-service', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:18:26', '2023-11-26 03:18:26'),
(13, 'Contact Us', 'Contact Us', 'contact-us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default-thumb.png', 'default-breadcrumb.png', 'default-cover.png', 'default-og.png', NULL, NULL, '2023-11-26 03:18:52', '2023-11-26 03:18:52');

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

--
-- Dumping data for table `template_sellers`
--

INSERT INTO `template_sellers` (`id`, `name`, `slug`, `gender`, `bio`, `mobile`, `email`, `address`, `description`, `youtube_iframe`, `meta_title`, `meta_description`, `image`, `og_image`, `cover`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Codephics', 'codephics', 'company', NULL, NULL, 'codephics@gmail.com', NULL, NULL, NULL, NULL, NULL, 'default-image.png', 'default-og-image.png', 'default-cover.png', NULL, '2023-12-02 03:29:26', '2023-12-02 03:29:26');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template_audios`
--
ALTER TABLE `template_audios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_blogs`
--
ALTER TABLE `template_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `template_sellers`
--
ALTER TABLE `template_sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
