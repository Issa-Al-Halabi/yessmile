-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 10:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yessmile`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_our_team`
--

CREATE TABLE `about_our_team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_our_team`
--

INSERT INTO `about_our_team` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, '{\"en\":\"رعاية احترافية لأسنانك من فريق طبي يمكنك الوثوق به\"}', '{\"en\":\"<p>&nbsp;</p><p dir=\\\"rtl\\\">&nbsp;نهدف في مركز يس سمايل إلى تقديم خدمة طبية تليق بمرضانا، وتحقق لهم أفضل نتيجة على المدى الطويل.</p><p><br></p><p dir=\\\"rtl\\\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; اخترنا لذلك نخبة من أفضل أطباء ترميم وتجميل الأسنان في تركيا، واعتمدنا على تجهيز المركز بأحدث تكنولوجيا طب الأسنان&nbsp; وفقا للمعايير العالمية للجودة.</p><p><br></p><p dir=\\\"rtl\\\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; مع يس سمايل نقدم لك: الجودة، والراحة، مع الحرص على حصولك على الابتسامة المثالية التي لطالما رغبت فيها.&nbsp;</p>\"}', 'aboutteam/01HR9BHAJREE7DAWMHSZ58TCMH.png', '2024-03-06 04:44:35', '2024-03-06 04:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_name`, `age`, `country`, `date`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"fdgregre\"}', 45, '{\"en\":\"fdtr\"}', '2024-03-27 00:00:00', '2024-03-05 14:57:43', '2024-03-05 14:57:43'),
(2, '{\"en\":\"gregr\"}', 432, '{\"en\":\"sdvfre\"}', '2024-03-30 00:00:00', '2024-03-05 15:06:16', '2024-03-05 15:06:16'),
(3, '{\"en\":\"4565465trg\"}', 45, '{\"en\":\"fewef\"}', '2024-03-09 00:00:00', '2024-03-05 15:07:57', '2024-03-05 15:07:57'),
(4, '{\"en\":\"few\"}', 567, '{\"en\":\"76fhv\"}', '2024-03-07 00:00:00', '2024-03-05 15:08:59', '2024-03-05 15:08:59'),
(5, '{\"en\":\"5433dxsf\"}', 34543, '{\"en\":\"vds\"}', '2024-03-14 00:00:00', '2024-03-05 15:10:18', '2024-03-05 15:10:18'),
(6, '{\"en\":\"vsd\"}', 545, '{\"en\":\"cxfdg\"}', '2024-03-29 00:00:00', '2024-03-05 15:11:10', '2024-03-05 15:11:10'),
(7, '{\"en\":\"vsd\"}', 545, '{\"en\":\"cxfdg\"}', '2024-03-29 00:00:00', '2024-03-05 15:13:02', '2024-03-05 15:13:02'),
(8, '{\"en\":\"645\"}', 5, '{\"en\":\"gre\"}', '2024-03-02 00:00:00', '2024-03-05 15:14:26', '2024-03-05 15:14:26'),
(9, '{\"en\":\"fdgregre\"}', 456, '{\"en\":\"rgt54\"}', '2024-03-29 00:00:00', '2024-03-05 15:17:39', '2024-03-05 15:17:39'),
(10, '{\"en\":\"rfg\"}', 45, '{\"en\":\"gregre\"}', '2024-03-22 00:00:00', '2024-03-05 15:18:44', '2024-03-05 15:18:44'),
(11, '{\"en\":\"rfg\"}', 45, '{\"en\":\"gregre\"}', '2024-03-22 00:00:00', '2024-03-05 15:23:18', '2024-03-05 15:23:18'),
(12, '{\"en\":\"gre\"}', 4545, '{\"en\":\"fdgtr\"}', '2024-03-30 00:00:00', '2024-03-05 15:23:55', '2024-03-05 15:23:55'),
(13, '{\"en\":\"gre\"}', 4545, '{\"en\":\"fdgtr\"}', '2024-03-23 00:00:00', '2024-03-05 15:27:25', '2024-03-05 15:27:25'),
(14, '{\"en\":\"fzds\"}', 435, '{\"en\":\"dsvc\"}', '2024-03-23 00:00:00', '2024-03-05 15:28:39', '2024-03-05 15:28:39'),
(15, '{\"en\":\"لقثقلث\"}', 546645, '{\"en\":\"fdtr\"}', '2024-03-21 00:00:00', '2024-03-05 15:37:37', '2024-03-05 15:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `short_description` longtext NOT NULL,
  `long_description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `socials` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`socials`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lang` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultation_requests`
--

CREATE TABLE `consultation_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `diagnose_description` longtext NOT NULL,
  `images` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultation_requests`
--

INSERT INTO `consultation_requests` (`id`, `patient_name`, `age`, `country`, `diagnose_description`, `images`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"few\"}', 436, '{\"en\":\"fdtr\"}', '{\"en\":\"dsvds\"}', '[\"conultation\\/0jTsXQ4TkcD0IUtyNsXmYQfEcG4HlkNbGXlpBoS3.png\",\"conultation\\/tCgTRjOGMErt4CM6ZpSLyNzp3iWYaJVvWh04AjBn.png\",\"conultation\\/V0Q7FTGUuYWjD8GttdseOXJ1rGELI8i3pEVHYdQz.png\"]', '2024-03-05 16:14:02', '2024-03-05 16:14:02'),
(2, '{\"en\":\"gegr\"}', 4654, '{\"en\":\"fdgr\"}', '{\"en\":\"gregreht\"}', '[\"conultation\\/15KOaSLdhsm7sdCnPpG23C4ScgfZ4dUnsD0LpvML.png\",\"conultation\\/ONG9w84h2uZBbVCsBpHLnhu603lN0NLjgyegVOKJ.png\"]', '2024-03-05 16:17:08', '2024-03-05 16:17:08'),
(3, '{\"en\":\"vdsvds\"}', 54, '{\"en\":\"v csd\"}', '{\"en\":\"xzsd\"}', '[]', '2024-03-05 16:20:34', '2024-03-05 16:20:34'),
(4, '{\"en\":\"fvder\"}', 43, '{\"en\":\"zcdsf\"}', '{\"en\":\"fdgrre\"}', '[]', '2024-03-05 16:22:28', '2024-03-05 16:22:28'),
(5, '{\"en\":\"sdefsdfesef\"}', 56, '{\"en\":\"gft\"}', '{\"en\":\"dxbfhtr\"}', '[]', '2024-03-05 16:23:50', '2024-03-05 16:23:50'),
(6, '{\"en\":\"dvgr\"}', 454, '{\"en\":\"fdgr\"}', '{\"en\":\"dfgrg\"}', '[]', '2024-03-05 16:27:09', '2024-03-05 16:27:09'),
(7, '{\"en\":\"vdsvds\"}', 546, '{\"en\":\"fdg\"}', '{\"en\":\"vfdrg\"}', '[]', '2024-03-05 16:29:14', '2024-03-05 16:29:14'),
(8, '{\"en\":\"cxvfvsdvds\"}', 54, '{\"en\":\"vds\"}', '{\"en\":\"cvds\"}', '[]', '2024-03-05 16:30:55', '2024-03-05 16:30:55'),
(9, '{\"en\":\"bcfdgt\"}', 464, '{\"en\":\"vxdfgr\"}', '{\"en\":\"vfgr\"}', '[]', '2024-03-05 16:32:38', '2024-03-05 16:32:38'),
(10, '{\"en\":\"dwdw\"}', 45, '{\"en\":\"sfdzgr\"}', '{\"en\":\"zfdgr\"}', '[]', '2024-03-05 16:34:24', '2024-03-05 16:34:24'),
(11, '{\"en\":\"v ds\"}', 546, '{\"en\":\"xfdgr\"}', '{\"en\":\"xfdg\"}', '[]', '2024-03-05 16:34:46', '2024-03-05 16:34:46'),
(12, '{\"en\":\"c dsvds\"}', 546, '{\"en\":\"dfbhdt\"}', '{\"en\":\"hbthbtr\"}', '[]', '2024-03-05 16:35:58', '2024-03-05 16:35:58'),
(13, '{\"en\":\"fdgr\"}', 6546, '{\"en\":\"xdfgr\"}', '{\"en\":\"xfdg\"}', '[]', '2024-03-05 16:38:18', '2024-03-05 16:38:18'),
(14, '{\"en\":\"vfgvr\"}', 54, '{\"en\":\"vcxdf\"}', '{\"en\":\"cxvgf\"}', '[]', '2024-03-05 16:41:20', '2024-03-05 16:41:20');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `socials` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`socials`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `phone`, `email`, `socials`, `created_at`, `updated_at`) VALUES
(1, '543543', 'admin@gmail.com', '[{\"image\":\"footer\\/01HR9C6W3VGV0175CXSGJTNGGT.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/footers\\/create\"}]', '2024-03-06 04:56:22', '2024-03-06 04:56:22');

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
(5, '2024_03_03_185446_create_appointments_table', 1),
(6, '2024_03_03_185447_create_privacy_policy_table', 1),
(7, '2024_03_03_185448_create_faqs_table', 1),
(8, '2024_03_03_185449_create_terms_of_use_table', 1),
(9, '2024_03_03_185450_create_footer_table', 1),
(10, '2024_03_03_185451_create_consultation_requests_table', 1),
(11, '2024_03_03_185452_create_branches_table', 1),
(12, '2024_03_03_185454_create_categories_table', 1),
(13, '2024_03_03_185455_create_services_table', 1),
(14, '2024_03_03_185456_create_articles_table', 1),
(15, '2024_03_03_185457_create_comments_table', 1),
(16, '2024_03_03_185457_create_teams_table', 1),
(18, '2024_03_03_185459_create_about_us_table', 1),
(19, '2024_03_05_120259_create_notifications_table', 1),
(20, '2024_03_06_071600_create_about_our_team_table', 2),
(22, '2024_03_03_185458_create_who_we_are_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('01286938-df93-4558-ab13-517248434ce3', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=8\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By cxvfvsdvds\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:30:55', '2024-03-05 16:30:55'),
('0328503e-0cae-4787-9311-d5b96b93e2f1', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/appointments?record=15\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Appointment By \\u0644\\u0642\\u062b\\u0642\\u0644\\u062b\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Appointment\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 15:37:37', '2024-03-05 15:37:37'),
('0a23be45-c34f-414f-a630-64965268a6a8', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=7\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By vdsvds\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:29:14', '2024-03-05 16:29:14'),
('1bcc8a7f-0a28-41ab-b498-693660af7786', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=4\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By fvder\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:22:28', '2024-03-05 16:22:28'),
('28c67c67-e4db-4781-838e-ddabcb83dd56', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=5\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By sdefsdfesef\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:23:50', '2024-03-05 16:23:50'),
('4e15fc2b-b16f-42d8-9ffb-e355ba271e13', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=6\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By dvgr\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:27:09', '2024-03-05 16:27:09'),
('5399d453-a4a5-4edb-b458-46595eb68f3b', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=9\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By bcfdgt\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:32:38', '2024-03-05 16:32:38'),
('63d5882f-f54c-42f0-9b81-92015177ad13', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=3\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By vdsvds\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:20:34', '2024-03-05 16:20:34'),
('773a3e0c-322c-45e4-9eef-307d99f058ec', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=11\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By v ds\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:34:46', '2024-03-05 16:34:46'),
('89bd7aba-c810-419b-8a12-41ca3e8495dd', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=13\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By fdgr\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:38:18', '2024-03-05 16:38:18'),
('98d96717-6aa8-43ae-841f-a3532b47881f', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=2\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By gegr\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:17:08', '2024-03-05 16:17:08'),
('a0de053c-a33b-42c4-90c1-3d53e9f6cbb5', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=14\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By vfgvr\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:41:20', '2024-03-05 16:41:20'),
('b46f0513-b02f-419f-a212-f79e37933f35', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=10\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By dwdw\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:34:24', '2024-03-05 16:34:24'),
('ea0d5ee8-6537-46d8-89f7-05e54cd25dd5', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=12\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By c dsvds\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:35:58', '2024-03-05 16:35:58'),
('f5ebe989-73ee-4069-b251-9d16b03f0485', 'Filament\\Notifications\\DatabaseNotification', 'App\\Models\\User', 1, '{\"actions\":[{\"name\":\"View\",\"color\":null,\"event\":null,\"eventData\":[],\"dispatchDirection\":false,\"dispatchToComponent\":null,\"extraAttributes\":[],\"icon\":null,\"iconPosition\":\"before\",\"iconSize\":null,\"isOutlined\":false,\"isDisabled\":false,\"label\":\"View\",\"shouldClose\":false,\"shouldMarkAsRead\":false,\"shouldMarkAsUnread\":false,\"shouldOpenUrlInNewTab\":false,\"size\":\"sm\",\"tooltip\":null,\"url\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/consultation-requests?record=1\",\"view\":\"filament-actions::link-action\"}],\"body\":\"New Consultation Request By few\",\"color\":null,\"duration\":\"persistent\",\"icon\":\"heroicon-o-check-circle\",\"iconColor\":\"success\",\"status\":\"success\",\"title\":\"New Conultation\",\"view\":\"filament-notifications::notification\",\"viewData\":[],\"format\":\"filament\"}', NULL, '2024-03-05 16:14:02', '2024-03-05 16:14:02');

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
-- Table structure for table `privacy_policy`
--

CREATE TABLE `privacy_policy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policy`
--

INSERT INTO `privacy_policy` (`id`, `body`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"<p>&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*<strong>&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Bod</strong>y*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body* &nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp; Body*&nbsp;</p>\"}', '2024-03-05 10:59:16', '2024-03-05 10:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `brief` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `work_history` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`work_history`)),
  `specialist` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`specialist`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `job_title`, `brief`, `image`, `work_history`, `specialist`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Name*\"}', '{\"en\":\"Job title*\"}', '{\"en\":\"<p>&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*<strong>&nbsp; Brief*&nbsp; Brief*</strong>&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief* &nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp; Brief*&nbsp;</p>\"}', 'team/01HR98Q04VAH9R75NJTVKMAAYJ.png', '{\"en\":[{\"text\":\"1\\nمؤسس ورئيس قسم الأسنان، مشفى اليت كلينك الطبي (2022 &#8211; حتى الآن)\"},{\"text\":\"مؤسس ورئيس قسم الأسنان، مشفى اليت كلينك الطبي (2022 &#8211; حتى الآن)\"},{\"text\":\"مؤسس ورئيس قسم الأسنان، مشفى اليت كلينك الطبي (2020&#8211; حتى الآن)\"}]}', '{\"en\":[{\"speciality\":\"زراعة الأسنان\"},{\"speciality\":\" علاج PRF\"},{\"speciality\":\" الترميمات الجمالية\"},{\"speciality\":\"تصميم ابتسامة هوليود\"}]}', '2024-03-06 03:55:16', '2024-03-06 04:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `terms_of_use`
--

CREATE TABLE `terms_of_use` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_of_use`
--

INSERT INTO `terms_of_use` (`id`, `body`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"<p>&nbsp;</p><p>&nbsp;</p><h1>Term Of Use termvdsvsdr</h1><p>gfergedvs</p><p>&nbsp;&nbsp;</p><p>&nbsp;</p><h1>Term Of Use termvdsvsdr</h1><p>gfergedvs</p><p>&nbsp;&nbsp;</p><p>&nbsp;</p><h1>Term Of Use termvdsvsdr</h1><p>gfergedvs</p><p>&nbsp;</p>\"}', '2024-03-05 11:04:27', '2024-03-05 11:04:27');

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
(1, 'admin', 'admin@gmail.com', '2024-03-05 09:58:07', '$2y$12$YByx99EnqWRdy0c9bj88meXQLvXx0w45y55RrqukNtotd/jIPapv2', '584IZoEKHZ', '2024-03-05 09:58:07', '2024-03-05 09:58:07');

-- --------------------------------------------------------

--
-- Table structure for table `who_we_are`
--

CREATE TABLE `who_we_are` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`features`)),
  `banner_title` varchar(255) NOT NULL,
  `banner_description` varchar(255) NOT NULL,
  `why_choose_us` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`why_choose_us`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `who_we_are`
--

INSERT INTO `who_we_are` (`id`, `title`, `body`, `image`, `features`, `banner_title`, `banner_description`, `why_choose_us`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"أحدث مركز طبي خاص في تركيا موافق لمعايير الجودة\"}', '{\"en\":\"<p>&nbsp;</p><p dir=\\\"rtl\\\">أسسنا مركز يس سمايل – YesSmile – في تركيا على أسس توافق معايير السلامة والجودة العالمية، وجهزناه بأحدث تكنولوجيا طب وتجميل الأسنان؛ ليجعل من تجربتك معنا تجربة مميزة ومريحة للغاية.</p><p dir=\\\"rtl\\\">افتح مركز يس سمايل عام 2015، ويقع المركز في قلب مدينة اسطنبول الحيوية، وتحديداً في منطقة كايتهاني وادي اسطنبول– Kagithane.&nbsp;</p><p dir=\\\"rtl\\\">هدفنا في مركز يس سمايل هو تقديم خدمة طبية متكاملة، وإدخال السعادة إلى حياة الناس برسم البسمة على وجوههم.&nbsp;</p>\"}', 'whoWeAre/01HR9EPV4JGCC5E430MRT2A8NB.png', '{\"en\":[{\"title\":\"سنوات الخبرة\",\"number\":\"9+ سنوات\",\"image\":\"articles/01HR9EPV4TQYXSEC7CS474B5QY.png\"},{\"title\":\"اطباء ومعاونين\",\"number\":\"17\",\"image\":\"articles/01HR9F1J0KW8MH9BEFQ04SHYSA.png\"},{\"title\":\"غرف عناية حديثة\",\"number\":\"20\",\"image\":\"articles/01HR9F1J0Q5SWX7RFTZD9Z521M.png\"}]}', '{\"en\":\"هل أنت مستعد لإحداث التغيير؟\"}', '{\"en\":\"بادر بحجز موعدك المناسب قبل اكتمال المقاعد.\"}', '{\"en\":[{\"title\":\"ضمان 5 سنوات\"},{\"title\":\"استشارات مجانية\"}]}', '2024-03-06 05:40:02', '2024-03-06 05:45:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_our_team`
--
ALTER TABLE `about_our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Indexes for table `consultation_requests`
--
ALTER TABLE `consultation_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_of_use`
--
ALTER TABLE `terms_of_use`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `who_we_are`
--
ALTER TABLE `who_we_are`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_our_team`
--
ALTER TABLE `about_our_team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `consultation_requests`
--
ALTER TABLE `consultation_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policy`
--
ALTER TABLE `privacy_policy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_of_use`
--
ALTER TABLE `terms_of_use`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `who_we_are`
--
ALTER TABLE `who_we_are`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
