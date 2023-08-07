-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 12:12 PM
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
  `order_type` tinyint(1) DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `page_images` varchar(255) DEFAULT NULL,
  `og` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `slug`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `sku`, `sale_price`, `regular_price`, `commission`, `publisher`, `ranking`, `author`, `short_description`, `long_description`, `specification`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `order_type`, `is_featured`, `image`, `page_images`, `og`, `file`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'মহিমান্বিত কুরআন – মর্মার্থ ও শাব্দিক অনুবাদ', 'mohimannito-quran-marmartho-o-sabdik-onubad-1', 'কুরআন ও হাদিস', 'মহিমান্বিত কুরআন', NULL, 'MQ001', '990', '990', NULL, 'ইলাননূর পাবলিকেশন', NULL, 'ইলাননূর সম্পাদনা পরিষদ', '<p>সংকলক: ইলাননূর সম্পাদনা পরিষদ</p>\r\n<p>সংস্করণ: তৃতীয়</p>\r\n<p><strong>বিষয়: মহিমান্বিত কুরআনের মমার্থ ও শাব্দিক অনুবাদ</strong></p>\r\n<p>আপনি কি কুরআন না বুঝেই পড়ছেন, শুনছেন? কুরআন ছাড়া আর কী আপনি না বুঝে পড়েন, শোনেন?</p>\r\n<p><strong>মহিমান্বিত কুরআন</strong>, মর্মার্থ শাব্দিক অনুবাদের নিয়মিত অধ্যয়ন-- শিশুর ভাষা শেখার মতই আপনাকে কুরআন বুঝতে সাহায্য করবে, ইন-শা~আল্লাহ।</p>', '<h2>মহিমান্বিত কুরআনের সংক্ষিপ্ত বিবরণী</h2>\r\n<p><strong>\'মহিমান্বিত কুরআন &ndash; মর্মার্থ ও শাব্দিক অনুবাদ\'</strong> একটি গবেষণামূলক সংকলন। মানুষ কোন কিছু পড়ে আনন্দ পায়, যখন সে বক্তব্যটি বোঝে।</p>\r\n<p>নিজের সাথে মিলিয়ে অনুধাবনের সাথে সাথে পড়ার আনন্দ বাড়তে থাকে। কুরআন বোঝার আনন্দ পেতে হলে মহিমান্বিত কুরআন শাব্দিক অনুবাদ অতুলনীয় কারণ &ndash; শাব্দিক অনুবাদের পাশাপাশি কুরআনের বর্ণিত বক্তব্য, প্রেক্ষিত, ঘটনা, স্থান, ভাষা, ইত্যাদির যতটুকু প্রাথমিক জ্ঞান না থাকলে পাঠকের কাছে বিষয়টির পুরোপুরি হৃদয়ঙ্গম কষ্টকর হতে পারে তা সংক্ষিপ্তভাবে যথাস্থানে সন্নিবেশিত হয়েছে।</p>\r\n<p>সহায়ক গ্রন্থ ও রিসোর্স সমূহ বিশ্লেষণপূর্বক প্রজেক্ট গাইডলাইনের আলোকে অনুবাদ প্রামাণিক ও পরিশীলিত করা হয়েছে।</p>\r\n<p><strong>কুরআনের অনুবাদ</strong>, যত নিখুঁতই হোক, অলৌকিক ঐশীগ্রন্থের ভাব-সম্পদ প্রকাশে পুরোপুরি সমর্থ নয়। তবুও মনুষ্য সীমাবদ্ধতার মধ্যেই অভিষ্ট অর্থের কাছাকাছি পৌঁছানোর প্রচেষ্টা আমাদের নিরন্তর। যদিও কুরআনের অনেক অনুবাদ রয়েছে, সেগুলো পাঠককে আরবি শব্দ ও এর অর্থের সাথে সম্পর্ক গড়তে সাহায্য করে না।</p>\r\n<p>এই শাব্দিক অনুবাদের উদ্দেশ্য কুরআনের ভাষা শিখতে সাহায্য করা। এতে--</p>\r\n<ul>\r\n<li>ক। প্রতিটি <strong>শব্দের অর্থ</strong> এর ঠিক নীচে দেওয়া হয়েছে।</li>\r\n<li>খ। আয়াতের অনুবাদগুলো <strong>ভাবার্থের</strong> চেয়ে আরবি শব্দের <strong>সরাসরি অর্থের</strong> কাছাকাছির রাখার চেষ্টা করা হয়েছে। যে ক্ষেত্রে হুবহু শাব্দিক অর্থ আয়াতের ভাব প্রকাশ করে না, সেক্ষেত্রে অভীষ্ট অর্থ বাক্যের অনুবাদে রাখা হয়েছে। পুরো কাজের উদ্দেশ্য পাঠককে সরাসরি আরবি থেকে বুঝতে সক্ষম করা।</li>\r\n<li>গ। অনুবাদে <strong>বাক্যের গঠনশৈলী</strong> কুরআনের আরবি শব্দের ক্রমধারার কাছাকাছি রাখার চেষ্টা করা হয়েছে, যা শিক্ষার্থীর জন্য আরবি ও বাংলা মিলিয়ে অনুধাবন সহায়ক।</li>\r\n<li>ঘ। পবিত্র কুরআনে প্রায় ৮০,০০০ শব্দ রয়েছে তবে মূল শব্দগুলি কেবল ২০০০ এর কাছাকাছি! এটিকে কুরআনের একটি <strong>অলৌকিক নির্দশন</strong> হিসাবেও অভিহিত করা যেতে পারে। যদি কোনও পাঠক প্রতিদিন ১০ টি নতুন শব্দ শেখার সিদ্ধান্ত নেন, তবে তিনি সাত মাসের মধ্যেই এর মূল বার্তাটি বুঝতে পারবেন! সুতরাং, এটি কুরআন বুঝতে খুব উপযোগী, যদি কেউ শিখতে আগ্রহী হয়।</li>\r\n</ul>', '<table class=\"table table-bordered\">\r\n<tbody>\r\n<tr>\r\n<td>বাইন্ডিং</td>\r\n<td>হার্ড কাভার</td>\r\n</tr>\r\n<tr>\r\n<td>কাগজ</td>\r\n<td>৬১ গ্রাম অফসেট অফ হোয়াইট</td>\r\n</tr>\r\n<tr>\r\n<td>সাইজ</td>\r\n<td>১১.২ * ৮ ইঞ্চি</td>\r\n</tr>\r\n<tr>\r\n<td>প্রকাশক</td>\r\n<td>ইলাননূর পাবলিকেশন</td>\r\n</tr>\r\n<tr>\r\n<td>সংকলন</td>\r\n<td>ইলাননূর সম্পাদনা পরিষদ</td>\r\n</tr>\r\n</tbody>\r\n</table>', '<p>&lt;iframe width=\"1068\" height=\"720\" src=\"https://www.youtube.com/embed/Wzs0dohR7Ro\" title=\"মহিমান্বিত কুরআন: মর্মার্থ ও শাব্দিক অনুবাদ মোড়ক উন্মোচন অনুষ্ঠানে প্রধান অতিথির বক্তব্য\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen&gt;&lt;/iframe&gt;</p>', '<p>&lt;!-- Facebook Meta Tags --&gt;<br>&lt;meta property=\"og:url\" content=\"https://www.ilannoor.com/quran-o-hadith/mohimannito-quran/mohimannito-quran-marmartho-o-sabdik-onubad-1/\"&gt;<br>&lt;meta property=\"og:type\" content=\"website\"&gt;<br>&lt;meta property=\"og:title\" content=\"মহিমান্বিত কুরআন &ndash; শাব্দিক অনুবাদ | ilannoor Publication\"&gt;<br>&lt;meta property=\"og:description\" content=\"মহিমান্বিত কুরআন মর্মার্থ ও শাব্দিক অনুবাদ বাংলা ভাষাভাষী মানুষের জন্য কুরআনের মূল বক্তব্য অনুধাবন, কুরানীয় আরবি শেখা ও সংগ্রহে রাখার মত একটি অনবদ্য প্রকাশনা।\"&gt;<br>&lt;meta property=\"og:image\" content=\"https://www.ilannoor.com/images/books/og/542bf03a5a722958dd32c0e40b982879.jpg\"&gt;</p>\r\n<p>&lt;!-- Twitter Meta Tags --&gt;<br>&lt;meta name=\"twitter:card\" content=\"summary_large_image\"&gt;<br>&lt;meta property=\"twitter:domain\" content=\"ilannoor.com\"&gt;<br>&lt;meta property=\"twitter:url\" content=\"https://www.ilannoor.com/quran-o-hadith/mohimannito-quran/mohimannito-quran-marmartho-o-sabdik-onubad-1/\"&gt;<br>&lt;meta name=\"twitter:title\" content=\"মহিমান্বিত কুরআন &ndash; শাব্দিক অনুবাদ | ilannoor Publication\"&gt;<br>&lt;meta name=\"twitter:description\" content=\"মহিমান্বিত কুরআন মর্মার্থ ও শাব্দিক অনুবাদ বাংলা ভাষাভাষী মানুষের জন্য কুরআনের মূল বক্তব্য অনুধাবন, কুরানীয় আরবি শেখা ও সংগ্রহে রাখার মত একটি অনবদ্য প্রকাশনা।\"&gt;<br>&lt;meta name=\"twitter:image\" content=\"https://www.ilannoor.com/images/books/og/542bf03a5a722958dd32c0e40b982879.jpg\"&gt;</p>\r\n<p>&lt;!-- Meta Pixel Code --&gt;<br>&lt;script&gt;<br>!function(f,b,e,v,n,t,s)<br>{if(f.fbq)return;n=f.fbq=function(){n.callMethod?<br>n.callMethod.apply(n,arguments):n.queue.push(arguments)};<br>if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';<br>n.queue=[];t=b.createElement(e);t.async=!0;<br>t.src=v;s=b.getElementsByTagName(e)[0];<br>s.parentNode.insertBefore(t,s)}(window, document,\'script\',<br>\'https://connect.facebook.net/en_US/fbevents.js\');<br>fbq(\'init\', \'2124809431030084\');<br>fbq(\'track\', \'PageView\');<br>fbq(\'track\', \'ViewContent\');<br>&lt;/script&gt;<br>&lt;noscript&gt;&lt;img height=\"1\" width=\"1\" style=\"display:none\"<br>src=\"https://www.facebook.com/tr?id=2124809431030084&amp;ev=PageView&amp;noscript=1\"<br>/&gt;&lt;/noscript&gt;<br>&lt;!-- End Meta Pixel Code --&gt;</p>', '<p>মহিমান্বিত কুরআন &ndash; শাব্দিক অনুবাদ | ilannoor Publication</p>', '<p>মহিমান্বিত কুরআন মর্মার্থ ও শাব্দিক অনুবাদ বাংলা ভাষাভাষী মানুষের জন্য কুরআনের মূল বক্তব্য অনুধাবন, কুরানীয় আরবি শেখা ও সংগ্রহে রাখার মত একটি অনবদ্য প্রকাশনা।</p>', 1, 1, 'mohimannito-quran-marmartho-o-sabdik-onubad-front-cover.jpg', NULL, NULL, NULL, NULL, NULL, '2023-07-24 22:53:36', '2023-07-24 23:04:24'),
(2, 'মহিমান্বিত কুরআন – মর্মার্থ ও শাব্দিক অনুবাদ, শুয়ুখ সংস্করণ', 'mohimannito-quran-shuyukh-songskoron', 'কুরআন ও হাদিস', 'মহিমান্বিত কুরআন', NULL, 'MQ002', '1200', '1200', NULL, 'ইলাননূর পাবলিকেশন', NULL, 'ইলাননূর সম্পাদনা পরিষদ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'mohimannito-quran-shuyukh-songskoron-front-cover.jpg', NULL, NULL, NULL, NULL, NULL, '2023-07-24 22:54:20', '2023-07-24 22:58:15'),
(3, 'The Glorious Quran', 'the-glorious-quran-6', 'কুরআন ও হাদিস', 'মহিমান্বিত কুরআন', NULL, 'GQ001', '1350', '1500', NULL, 'ইলাননূর পাবলিকেশন', NULL, 'ইলাননূর সম্পাদনা পরিষদ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'the-glorious-quran-front-cover.jpg', NULL, NULL, NULL, NULL, NULL, '2023-07-24 22:54:53', '2023-07-24 22:57:59'),
(4, 'Le Glorieux Saint QUR’AN', 'le-glorieux-saint-quran', 'কুরআন ও হাদিস', 'মহিমান্বিত কুরআন', NULL, 'FQ001', '1250', '1000', NULL, 'ইলাননূর পাবলিকেশন', NULL, 'ইলাননূর সম্পাদনা পরিষদ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'le-glorieux-saint-quran-fornt-cover.jpg', NULL, NULL, NULL, NULL, NULL, '2023-07-24 22:56:09', '2023-07-24 22:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `book_abouts`
--

CREATE TABLE `book_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `is_featured` tinyint(1) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `audio_file` varchar(255) DEFAULT NULL,
  `og` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
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
  `image` text DEFAULT NULL,
  `og` text DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_authors`
--

INSERT INTO `book_authors` (`id`, `name`, `slug`, `gender`, `bio`, `mobile`, `email`, `address`, `description`, `youtube_iframe`, `meta_title`, `meta_description`, `image`, `og`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ইলাননূর সম্পাদনা পরিষদ', 'illanoor-sompadona-porisod', 'male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ilannoor-publication-logo.png', 'ilannoor-publication-logo.png', 'ilannoor-publication-logo.png', NULL, '2023-07-24 22:51:09', '2023-07-24 22:51:09');

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
  `is_featured` tinyint(1) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `og` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
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
  `icon` text NOT NULL,
  `thumb` text NOT NULL,
  `cover` text NOT NULL,
  `og_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_contacts`
--

CREATE TABLE `book_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_privacys`
--

CREATE TABLE `book_privacys` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `image` text DEFAULT NULL,
  `og` text DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_publishers`
--

INSERT INTO `book_publishers` (`id`, `name`, `slug`, `mobile`, `email`, `address`, `description`, `youtube_iframe`, `meta_title`, `meta_description`, `image`, `og`, `banner`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ইলাননূর পাবলিকেশন', 'ilannoor-publication', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ilannoor-publication-logo.png', 'ilannoor-publication-logo.png', 'ilannoor-publication-logo.png', NULL, '2023-07-24 22:50:26', '2023-07-24 22:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `book_skeletons`
--

CREATE TABLE `book_skeletons` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `icon` text NOT NULL,
  `thumb` text NOT NULL,
  `cover` text NOT NULL,
  `og_image` text NOT NULL,
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
  `icon` text NOT NULL,
  `thumb` text NOT NULL,
  `cover` text NOT NULL,
  `og_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_terms`
--

CREATE TABLE `book_terms` (
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
(7, '2023_03_21_065207_create_contacts_table', 1),
(8, '2023_03_21_065214_create_hires_table', 1),
(9, '2023_03_21_065238_create_privacy_policies_table', 1),
(10, '2023_03_21_065521_create_template_table', 1),
(11, '2023_03_21_065536_create_site_templates_table', 1),
(12, '2023_03_21_065551_create_terms_of_services_table', 1),
(13, '2023_03_21_065606_create_why_our_themes_table', 1),
(14, '2023_03_21_065737_create_skeletons_table', 1),
(15, '2023_03_21_073413_create_abouts_table', 1),
(16, '2023_04_13_085244_template_details', 1),
(17, '2023_04_13_090645_create_templates_table', 1),
(18, '2023_04_13_091925_template', 1),
(19, '2023_04_13_092130_drop_table_template_details', 1),
(20, '2023_04_13_092326_drop_table_templates', 1),
(21, '2023_04_13_092417_templates', 1),
(22, '2023_04_13_094322_templates', 1),
(23, '2023_04_13_094425_create_templates_table', 1),
(24, '2023_04_13_095421_drop_table_templates', 1),
(25, '2023_04_13_095441_create_templates_table', 1),
(26, '2023_04_15_083833_drop_table_template', 1),
(27, '2023_04_15_083955_create_templates_table', 1),
(28, '2023_05_22_103504_create_categories_table', 1),
(29, '2023_05_22_103514_create_sub_categories_table', 1),
(30, '2023_05_22_103522_create_sub_sub_categories_table', 1),
(31, '2023_05_24_104323_drop_categories', 1),
(32, '2023_05_24_104446_change_categories_table', 1),
(33, '2023_06_10_083431_create_table_books', 1),
(34, '2023_06_11_045739_create_subcategories', 1),
(35, '2023_06_11_045859_create_sub_subcategories', 1),
(36, '2023_06_11_061030_create_publishers', 1),
(37, '2023_06_11_061100_create_book_publishers', 1),
(38, '2023_06_11_091106_create_book_authors', 1),
(39, '2023_06_19_041400_create_audios', 2),
(40, '2023_03_21_065117_create_blogs_table', 3),
(41, '2023_06_10_083431_create_books', 1),
(45, '2023_08_05_064514_create_template_abouts', 4),
(46, '2023_08_05_064523_create_template_audios', 4),
(47, '2023_08_05_064531_create_template_blogs', 4),
(48, '2023_08_05_064542_create_template_categories', 4),
(49, '2023_08_05_064558_create_template_contacts', 4),
(50, '2023_08_05_064605_create_template_hires', 4),
(51, '2023_08_05_064706_create_template_privacys', 4),
(52, '2023_08_05_064719_create_template_sites', 4),
(53, '2023_08_05_064730_create_template_skeletons', 4),
(54, '2023_08_05_064744_create_template_subcategories', 4),
(55, '2023_08_05_064752_create_template_sub_subcategories', 4),
(56, '2023_08_05_064803_create_template_terms', 4),
(57, '2023_08_05_064809_create_template_themes', 4),
(58, '2023_08_05_065232_create_book_terms', 5),
(59, '2023_08_05_065257_create_book_subcategories', 5),
(60, '2023_08_05_065309_create_book_sub_subcategories', 5),
(61, '2023_08_05_065345_create_book_skeletons', 5),
(62, '2023_08_05_065403_create_book_privacys', 5),
(63, '2023_08_05_065429_create_book_blogs', 5),
(64, '2023_08_05_065440_create_book_abouts', 5),
(65, '2023_08_05_065445_create_book_audios', 5),
(66, '2023_08_05_070223_create_book_categories', 5),
(67, '2023_08_05_070313_create_book_contacts', 5),
(68, '2023_08_07_050636_create_template_sellers', 6);

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
  `order_type` tinyint(1) NOT NULL DEFAULT 0,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `live_preview_link` text DEFAULT NULL,
  `downloadable_link` text DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default-image.png',
  `og` varchar(255) NOT NULL DEFAULT 'default-og.png',
  `file` varchar(255) NOT NULL DEFAULT 'default-file.docx',
  `status` tinyint(1) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `name`, `slug`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `sku`, `sale_price`, `regular_price`, `commission`, `bootstrap_v`, `released`, `updated`, `version`, `seller_name`, `seller_email`, `short_description`, `long_description`, `change_log`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `order_type`, `is_featured`, `live_preview_link`, `downloadable_link`, `image`, `og`, `file`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(11, 'Phoenix – Admin Dashboard & WebApp Template', 'web-developer', 'OnePage', 'Portfolio', 'Personal', 'wd00001', NULL, NULL, NULL, '1', NULL, NULL, '1', 'Seller Name', 'a@a.a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'default-file.docx', 0, NULL, '2023-08-06 03:49:04', '2023-08-06 05:05:18'),
(13, 'Graphics Designer', 'graphics-designer', 'OnePage', 'Portfolio', 'Personal', 'gd00001', NULL, NULL, NULL, '1', NULL, NULL, '1', 'Seller Name', 'a@a.a', '<p>Short Description</p>', '<p>Long Description</p>', '<p>Change Log</p>', 'Youtube Iframe', 'Header Content', 'Meta Title', 'Meta Description', 0, 1, 'http://localhost/ilannoor.institute/public/', 'http://localhost/ilannoor.institute/public/', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'default-file.docx', 1, '<p><label class=\"form-label\" for=\"comment\">Comment</label></p>', '2023-08-06 03:52:26', '2023-08-06 04:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `template_abouts`
--

CREATE TABLE `template_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `is_featured` tinyint(1) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `audio_file` varchar(255) DEFAULT NULL,
  `og` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
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
  `is_featured` tinyint(4) DEFAULT 0,
  `featured_image` varchar(255) NOT NULL DEFAULT 'default-featured-image.png',
  `file` varchar(255) NOT NULL DEFAULT 'default-file.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `status` tinyint(4) DEFAULT 0,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_blogs`
--

INSERT INTO `template_blogs` (`id`, `title`, `slug`, `tags`, `header_title`, `category_name`, `subcategory_name`, `sub_subcategory_name`, `template`, `seller_name`, `short_description`, `long_description`, `youtube_iframe`, `header_content`, `meta_title`, `meta_description`, `is_featured`, `featured_image`, `file`, `og_image`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(6, 'The Benefits of Downloading HTML Website Templates', 'the-benefits-of-downloading-html-website-templates', NULL, NULL, 'OnePage', 'Portfolio', 'Personal', NULL, 'TempDev', NULL, '<h1>The Benefits of Downloading <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> Website Templates</h1>\r\n<article id=\"listingBlog\" class=\"blog-post\">\r\n<p>If you\'re a web developer or designer, you know that creating a website from scratch can be a daunting task. It requires significant time and effort, and demands a high level of expertise in web development languages like <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> and <abbr class=\"initialism\" title=\"Cascading Style Sheet\">CSS</abbr>. However, there\'s a simpler way to design a website that requires minimal coding and design skills. <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates offer pre-designed layouts that can be customized to suit any purpose or aesthetic preference.</p>\r\n<p>In this blog post, we\'ll explore the benefits of downloading <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates and how they can help you create a professional-looking website with ease. We\'ll also provide some tips on how to choose the right template and customize it to meet your needs. What are <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates?</p>\r\n<p><abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates are pre-designed structures that provide the foundation for a website\'s layout and design. Templates come with pre-built components like headers, footers, and menus that can be customized with your own content and branding. <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> templates are compatible with popular web development languages like <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> and <abbr class=\"initialism\" title=\"Cascading Style Sheet\">CSS</abbr>, making it easy for web developers to customize and modify them to meet their specific needs. Why should you use <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates?</p>\r\n<p>Using <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates offers several benefits, including:</p>\r\n<ol class=\"list-group list-group-numbered\">\r\n<li class=\"list-group-item d-flex justify-content-between align-items-start\">\r\n<div class=\"ms-2 me-auto\">\r\n<div class=\"fw-bold\">Time savings</div>\r\nOne of the biggest benefits of using <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates is the time savings they offer. Instead of spending countless hours designing and developing a website from scratch, you can simply download a pre-designed template and customize it to suit your needs. This allows you to focus on creating high-quality content and refining the design and user experience of your website.</div>\r\n</li>\r\n<li class=\"list-group-item d-flex justify-content-between align-items-start\">\r\n<div class=\"ms-2 me-auto\">\r\n<div class=\"fw-bold\">Compatibility</div>\r\nUser-friendly design <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates come with pre-designed layouts and components that are optimized for user experience. This saves you the effort of designing it yourself and ensures that your website is easy to navigate and visually appealing to visitors.</div>\r\n</li>\r\n<li class=\"list-group-item d-flex justify-content-between align-items-start\">\r\n<div class=\"ms-2 me-auto\">\r\n<div class=\"fw-bold\">Compatibility</div>\r\n<abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates are compatible with popular web development languages like <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> and <abbr class=\"initialism\" title=\"Cascading Style Sheet\">CSS</abbr>, making it easy for web developers to customize and modify them to meet their specific needs. You don\'t need to be an expert in web development to use <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates, but having some basic knowledge can help you to make the most of the customization options available.</div>\r\n</li>\r\n<li class=\"list-group-item d-flex justify-content-between align-items-start\">\r\n<div class=\"ms-2 me-auto\">\r\n<div class=\"fw-bold\">Responsive design</div>\r\nMany <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates are designed with responsive layouts that can adapt to any device, including mobile phones and tablets. This ensures that your website is accessible and user-friendly regardless of the user\'s device. Responsive design is essential in today\'s mobile-first world, and <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates can help you to achieve it without the need for additional coding or design work.</div>\r\n</li>\r\n<li class=\"list-group-item d-flex justify-content-between align-items-start\">\r\n<div class=\"ms-2 me-auto\">\r\n<div class=\"fw-bold\">SEO-friendly</div>\r\n<abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates often include SEO best practices, such as properly structured headings, optimized images, and clean code. This ensures that your website is optimized for search engines, making it easier for users to find your site in search results. By using an SEO-friendly <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> template, you can give your website a boost in search engine rankings and increase the visibility of your content.</div>\r\n</li>\r\n</ol>\r\n<p>How to download <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates</p>\r\n<p>Downloading HTML website templates is simple and straightforward. There are many websites that offer free <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates, including our website [insert website name here]. Once you\'ve found a template that meets your needs, you can download it and open it in your favorite text editor to begin customizing it.</p>\r\n<p>When choosing an <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website template, it\'s important to consider factors like the purpose of your website, your branding and design preferences, and the level of customization you require. Look for templates that offer a good balance of pre-designed elements and customization options, and make sure that they are compatible with your web development platform of choice.</p>\r\n<p>In conclusion, <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates are a great option for web developers and designers who want to save time and effort</p>\r\n</article>\r\n<p><a href=\"../../../../system\">Download Now!</a></p>', NULL, NULL, NULL, NULL, 1, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'default-file.png', 'default-og-image.png', NULL, NULL, '2023-08-07 03:49:54', '2023-08-07 03:57:35'),
(7, 'Build Responsive, Mobile-Friendly Websites Effortlessly', 'the-benefits-of-downloading-bootstrap-website-templates', NULL, NULL, NULL, NULL, NULL, NULL, 'TempDev', NULL, '<p>If you\'re a web developer or designer, you know that building a website from scratch can take a significant amount of time and effort. It requires a strong understanding of web development languages like <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr>, <abbr class=\"initialism\" title=\"Cascading Style Sheet\">CSS</abbr>, and JavaScript, as well as design skills to create an aesthetically pleasing website. That\'s where <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates come in. <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> templates offer pre-designed layouts that can be easily customized, saving you time and helping you to create a professional-looking website.</p>\r\n<p>In this blog post, we\'ll explore the advantages of using <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates, and provide some tips on how to choose the right template and customize it to meet your needs.</p>\r\n<h2>Advantages of <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> Website Templates</h2>\r\n<p>Here are some of the benefits of using <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates:</p>\r\n<h3>1. Time savings</h3>\r\n<p>Building a website from scratch can take a lot of time, especially if you\'re not an experienced web developer or designer. <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates come pre-designed with various layouts, components, and features, which saves you time and effort. You don\'t need to start from scratch, and you can customize the template to suit your specific needs.</p>\r\n<h3>2. Professional-looking design</h3>\r\n<p><abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates come with professionally designed layouts and components that ensure your website looks great. Even if you don\'t have design skills, you can still create a website that looks professional and polished. <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates offer different designs that you can choose from, including eCommerce templates, portfolio templates, and business website templates.</p>\r\n<h3>3. User-friendly features</h3>\r\n<p><abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates are designed to provide a great user experience. They come with different features that help visitors navigate the site, such as menus, search bars, and call-to-action buttons. They also provide responsive design, which means your website will look great on any device, including desktops, laptops, tablets, and smartphones.</p>\r\n<h3>4. Customization options</h3>\r\n<p><abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates are highly customizable. You can change the color scheme, font styles, images, and other elements to suit your brand or business. You can also add or remove components, depending on your website\'s needs. Customization options allow you to create a unique website that stands out from the crowd.</p>\r\n<h3>5. Affordable pricing</h3>\r\n<p><abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates are generally affordable, especially compared to hiring a professional web designer or developer. You can choose from a wide variety of templates at different price points. Some templates are even available for free, which is a great option for those on a tight budget.</p>\r\n<h2>Conclusion</h2>\r\n<p><abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates offer many advantages, including time savings, professional-looking design, user-friendly features, customization options, and affordable pricing. By choosing the right template and customizing it to meet your needs, you can create a website that is visually appealing, easy to use, and helps you achieve your business goals. So why not give <abbr class=\"initialism\" title=\"HyperText Markup Language\">HTML</abbr> website templates a try and see how they can improve your web design?</p>\r\n<p><a href=\"../../../../system\">Download Now!</a></p>', NULL, NULL, NULL, NULL, NULL, 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'default-file.png', 'default-og-image.png', NULL, NULL, '2023-08-07 03:50:42', '2023-08-07 03:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `template_categories`
--

CREATE TABLE `template_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(199) NOT NULL,
  `slug` varchar(199) NOT NULL,
  `description` varchar(199) DEFAULT NULL,
  `meta_title` varchar(199) DEFAULT NULL,
  `meta_description` varchar(199) DEFAULT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'default-icon.png',
  `thumb` varchar(255) NOT NULL DEFAULT 'default-thumb.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_categories`
--

INSERT INTO `template_categories` (`id`, `category_name`, `slug`, `description`, `meta_title`, `meta_description`, `icon`, `thumb`, `cover`, `og_image`, `created_at`, `updated_at`) VALUES
(1, 'OnePage', 'onepage', '<p>Description</p>', '<p>Meta Title</p>', '<p>Meta Description</p>', 'ilannoor-publication-logo.png', 'ilannoor-publication-logo.png', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', '2023-08-06 00:20:47', '2023-08-06 00:23:30'),
(3, 'Portfolio', 'portfolio', '<p>Description</p>', 'Meta Title', 'Meta Description', 'ilannoor-publication-logo.png', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', '2023-08-06 00:25:50', '2023-08-06 00:25:50'),
(4, 'Corporate', 'corporate', '<p>Description</p>', 'Meta Title', 'Meta Description', 'ilannoor-publication-logo.png', 'ilannoor-publication-logo.png', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', '2023-08-06 00:29:30', '2023-08-06 00:29:30'),
(5, 'Restaurant', 'restaurant', '<p>Description</p>', 'Meta Title', 'Meta Description', 'ilannoor-publication-logo.png', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', '2023-08-06 01:54:06', '2023-08-06 01:54:06'),
(6, 'Cafe 1', 'cafe1', '<p>Description1</p>', 'Meta Title1', 'Meta Description1', 'dummy-icon-2.png', 'dummy-thumb-2.png', 'dummy-cover.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og-2.jpg', '2023-08-06 01:58:10', '2023-08-06 02:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `template_contacts`
--

CREATE TABLE `template_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_hires`
--

CREATE TABLE `template_hires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_privacys`
--

CREATE TABLE `template_privacys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'TempDev', 'temp-dev', 'male', '<p>BIO</p>', '01711000001', 'a@a.a', 'Address', 'Description', 'Youtube Iframe', 'Meta Title', 'Meta Description', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', 'dummy-cover.jpg', 1, '2023-08-06 23:54:30', '2023-08-07 00:46:05');

-- --------------------------------------------------------

--
-- Table structure for table `template_sites`
--

CREATE TABLE `template_sites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_skeletons`
--

CREATE TABLE `template_skeletons` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `thumb` varchar(255) NOT NULL DEFAULT 'default-thumb.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_subcategories`
--

INSERT INTO `template_subcategories` (`id`, `subcategory_name`, `slug`, `category_name`, `description`, `meta_title`, `meta_description`, `icon`, `thumb`, `cover`, `og_image`, `created_at`, `updated_at`) VALUES
(1, 'Portfolio', 'portfolio', 'OnePage', '<p>Description</p>', 'Meta Title', 'Meta Description', 'dummy-icon.png', 'dummy-thumb.png', 'dummy-cover.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', '2023-08-06 02:44:22', '2023-08-06 02:44:22'),
(2, 'Corporate', 'corporate', 'OnePage', '<p>Description</p>', '<p>Meta Title</p>', '<p>Meta Description</p>', 'dummy-icon.png', 'dummy-thumb.png', 'dummy-cover.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og.jpg', '2023-08-06 02:50:53', '2023-08-06 02:54:13');

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
  `thumb` varchar(255) NOT NULL DEFAULT 'default-thumb.png',
  `cover` varchar(255) NOT NULL DEFAULT 'default-cover.png',
  `og_image` varchar(255) NOT NULL DEFAULT 'default-og-image.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_sub_subcategories`
--

INSERT INTO `template_sub_subcategories` (`id`, `sub_subcategory_name`, `subcategory_name`, `slug`, `description`, `meta_title`, `meta_description`, `icon`, `thumb`, `cover`, `og_image`, `created_at`, `updated_at`) VALUES
(1, 'Personal', 'Portfolio', 'personal', '<p>Description</p>', 'Meta Title', 'Meta Description', 'dummy-icon-2.png', 'dummy-thumb-2.png', 'dummy-cover-2.jpg', 'mohimannito-quran-marmartho-o-sabdik-onubad-og-2.jpg', '2023-08-06 03:00:31', '2023-08-06 03:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `template_terms`
--

CREATE TABLE `template_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `template_themes`
--

CREATE TABLE `template_themes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'ilannoor', 'support@ilannoor.com', NULL, '$2y$10$EAtkKgoB61iAHY6SXLL8veoW7B/yhEnAFVok0EAM.A2yCmgZ99afG', NULL, '2023-07-24 00:34:30', '2023-07-24 00:34:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_abouts`
--
ALTER TABLE `book_abouts`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_privacys`
--
ALTER TABLE `book_privacys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_publishers`
--
ALTER TABLE `book_publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_skeletons`
--
ALTER TABLE `book_skeletons`
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
-- Indexes for table `book_terms`
--
ALTER TABLE `book_terms`
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
-- Indexes for table `template_abouts`
--
ALTER TABLE `template_abouts`
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
-- Indexes for table `template_privacys`
--
ALTER TABLE `template_privacys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_sellers`
--
ALTER TABLE `template_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_sites`
--
ALTER TABLE `template_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_skeletons`
--
ALTER TABLE `template_skeletons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_subcategories`
--
ALTER TABLE `template_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_sub_subcategories`
--
ALTER TABLE `template_sub_subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_terms`
--
ALTER TABLE `template_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_themes`
--
ALTER TABLE `template_themes`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_abouts`
--
ALTER TABLE `book_abouts`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `book_privacys`
--
ALTER TABLE `book_privacys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_publishers`
--
ALTER TABLE `book_publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_skeletons`
--
ALTER TABLE `book_skeletons`
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
-- AUTO_INCREMENT for table `book_terms`
--
ALTER TABLE `book_terms`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `template_abouts`
--
ALTER TABLE `template_abouts`
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
-- AUTO_INCREMENT for table `template_categories`
--
ALTER TABLE `template_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `template_privacys`
--
ALTER TABLE `template_privacys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_sellers`
--
ALTER TABLE `template_sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `template_sites`
--
ALTER TABLE `template_sites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_skeletons`
--
ALTER TABLE `template_skeletons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_subcategories`
--
ALTER TABLE `template_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `template_sub_subcategories`
--
ALTER TABLE `template_sub_subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `template_terms`
--
ALTER TABLE `template_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `template_themes`
--
ALTER TABLE `template_themes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
