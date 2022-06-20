-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 07:52 PM
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
-- Database: `arzyabi_pars`
--

-- --------------------------------------------------------

--
-- Table structure for table `bunches`
--

CREATE TABLE `bunches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bunches`
--

INSERT INTO `bunches` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'قابلیت های شغلی', '2022-06-03 14:36:51', '2022-06-03 14:36:51'),
(2, 'مسئولیت های شغلی', '2022-06-03 14:37:06', '2022-06-03 14:37:06'),
(3, 'توانایی شغلی', '2022-06-03 14:37:17', '2022-06-03 14:37:17'),
(4, 'شرایط کار', '2022-06-03 14:37:53', '2022-06-03 14:37:53');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_02_130519_create_bunches_table', 2),
(6, '2022_06_02_131002_create_subbunches_table', 3),
(7, '2022_06_02_131948_create_subsetbunches_table', 4),
(8, '2022_06_02_132538_create_questionbunches_table', 5),
(9, '2022_06_02_132921_create_scoures_table', 6),
(11, '2022_06_15_163955_create_permissions_adn_roles_tables', 7),
(12, '2022_06_18_180335_add_paid_to_users', 8);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(2, 'edit-users', 'ویرایش کاربران', '2022-06-16 14:36:47', '2022-06-16 14:36:47'),
(4, 'create-users', 'ایجاد کاربران', '2022-06-17 07:24:35', '2022-06-17 07:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(2, 5),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
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
-- Table structure for table `questionbunches`
--

CREATE TABLE `questionbunches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subsetbunch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questionbunches`
--

INSERT INTO `questionbunches` (`id`, `name`, `label`, `subsetbunch_id`, `created_at`, `updated_at`) VALUES
(1, 'دانش و مهارت های تخصصی کاملاً ساده', 'امتیاز حداکثر تا 10', 1, '2022-06-03 14:41:46', '2022-06-03 14:41:46'),
(2, 'دانش و مهارت های تخصصی نسبتاً ساده', 'امتیاز حداکثر تا 20', 1, '2022-06-03 14:42:19', '2022-06-03 14:42:19'),
(3, 'دانش و مهارت های تخصصی نسبتاً پیچیده', 'امتیاز حداکثر تا 30', 1, '2022-06-03 14:42:46', '2022-06-03 14:42:46'),
(4, 'دانش و مهارت های پیچیده', 'امتیاز حداکثر تا 40', 1, '2022-06-03 14:43:17', '2022-06-03 14:43:17'),
(5, 'دانش و مهارت های خیلی پیچیده', 'امتیاز حداکثر تا 50', 1, '2022-06-03 14:44:17', '2022-06-03 14:44:17'),
(6, 'آشنایی به نرم افزارهای مرتبط شغلی', '', 2, '2022-06-03 14:44:44', '2022-06-03 14:44:44'),
(7, 'توانایی کار با نرم افزارهای مرتبط شغلی', '', 2, '2022-06-03 14:45:13', '2022-06-03 14:45:13'),
(8, 'تسلط به نرم افزارهای مرتبط شغلی', '', 2, '2022-06-03 14:46:13', '2022-06-03 14:46:13'),
(9, 'مکالمه ، درک مطلب و خواندن ابتدایی', '', 3, '2022-06-03 14:46:41', '2022-06-03 14:46:41'),
(10, 'مکالمه ، درک مطلب و خواندن در حد متوسط', '', 3, '2022-06-03 14:47:25', '2022-06-03 14:47:25'),
(11, 'مکالمه ، درک مطلب و خواندن پیشرفته', '', 3, '2022-06-03 14:47:48', '2022-06-03 14:47:48'),
(12, '2 سال تجربه مفید و مرتبط', '', 4, '2022-06-03 14:49:44', '2022-06-03 14:49:44'),
(13, '4 سال تجربه مفید و مرتبط', '', 4, '2022-06-03 14:50:10', '2022-06-03 14:50:10'),
(14, '6 سال تجربه مفید و مرتبط', '', 4, '2022-06-03 14:50:31', '2022-06-03 14:50:31'),
(15, '8 سال تجربه مفید و مرتبط', '', 4, '2022-06-03 14:50:55', '2022-06-03 14:50:55'),
(16, '10 سال تجربه مفید و مرتبط', '', 4, '2022-06-03 14:51:18', '2022-06-03 14:51:18'),
(17, 'تا دیپلم یا پیش دانشگاهی', '', 5, '2022-06-03 14:53:04', '2022-06-03 14:53:04'),
(18, 'فوق دیپلم', '', 5, '2022-06-03 14:53:27', '2022-06-03 14:53:27'),
(19, 'لیسانس', '', 5, '2022-06-03 14:53:48', '2022-06-03 14:53:48'),
(20, 'فوق لیسانس', '', 5, '2022-06-03 14:54:29', '2022-06-03 14:54:29'),
(21, 'دکترا', '', 5, '2022-06-03 14:55:14', '2022-06-03 14:55:14'),
(22, 'سرپرستی کارمندی', '', 6, '2022-06-03 15:35:38', '2022-06-03 15:35:38'),
(23, 'سرپرستی کارشناسی', '', 6, '2022-06-03 15:35:56', '2022-06-03 15:35:56'),
(24, 'سرپرستی کارشناس مسئول', '', 6, '2022-06-03 15:36:11', '2022-06-03 15:36:11'),
(25, 'سرپرستی رییس گروه', '', 6, '2022-06-03 15:36:30', '2022-06-03 15:36:30'),
(26, 'سرپرستی مدیریتی', '', 6, '2022-06-03 15:36:44', '2022-06-03 15:36:44'),
(27, 'ندارد', '', 7, '2022-06-03 15:37:12', '2022-06-03 15:37:12'),
(28, 'دارد', '', 7, '2022-06-03 15:37:24', '2022-06-03 15:37:24'),
(29, 'دسترسی به اطلاعات عادی و معمولی', '', 8, '2022-06-03 15:37:57', '2022-06-03 15:37:57'),
(30, 'دسترسی به اطلاعات حساس', '', 8, '2022-06-03 15:38:13', '2022-06-03 15:38:13'),
(31, 'دسترسی به اطلاعات محرمانه', '', 8, '2022-06-03 15:38:29', '2022-06-03 15:38:29'),
(32, 'دسترسی به اطلاعات خیلی محرمانه', '', 8, '2022-06-03 15:38:48', '2022-06-03 15:38:48'),
(33, 'دسترسی به اطلاعات سری', '', 8, '2022-06-03 15:39:09', '2022-06-03 15:39:09'),
(34, 'استفاده و بکارگیری دستورالعمل ها و رویه های ساده و یکنواخت درون سازمانی', '', 9, '2022-06-03 15:39:51', '2022-06-03 15:39:51'),
(35, 'استفاده و بکارگیری دستورالعمل ها و رویه های نسبتا متنوع درون سازمانی', '', 9, '2022-06-03 15:40:07', '2022-06-03 15:40:07'),
(36, 'تهیه ، تنظیم و تبیین دستورالعمل های متنوع و نسبتا پیچیده درون سازمانی', '', 9, '2022-06-03 15:40:28', '2022-06-03 15:40:28'),
(37, 'نظارت ، بازنگری و اصالح دستورالعمل ها و رویه های متنوع و پیچیده درون سازمانی  و برون سازمانی', '', 9, '2022-06-03 15:40:47', '2022-06-03 15:40:47'),
(38, 'پیشنهاد ، ابلاغ و تصویب آیین نامه ها ، دستورالعمل ها و رویه ها و نظارت بر حسن  5 اجرای آنها در سطح برون سازمانی', '', 9, '2022-06-03 15:41:21', '2022-06-03 15:41:21'),
(39, 'امکان بروز جراحات سطحی مانند بریدگی ، ضرب دیدگی و یا حوادث کم تا 2 1 اهمیت و جزئی برای خود یا دیگران', '', 10, '2022-06-03 15:42:33', '2022-06-03 15:42:33'),
(40, 'امکان بروز جراحات عمیق برای خود یا دیگران', '', 10, '2022-06-03 15:42:47', '2022-06-03 15:42:47'),
(41, 'امکان بروز نقص عضو جزیی برای خود یا دیگران', '', 10, '2022-06-03 15:43:00', '2022-06-03 15:43:00'),
(42, 'امکان بروز نقص عضو کلی برای خود یا دیگران', '', 10, '2022-06-03 15:43:14', '2022-06-03 15:43:14'),
(43, 'امکان بروز از کارافتادگی و مرگ و میر  5 برای خود یا دیگران', '', 10, '2022-06-03 15:43:42', '2022-06-03 15:43:42'),
(44, 'نیازمند به اختیارات بسیار محدود و آزادی عمل بسیار کم', '', 11, '2022-06-03 15:44:29', '2022-06-03 15:44:29'),
(45, 'نیازمند به اختیارات محدود و آزادی عمل کم', '', 11, '2022-06-03 15:44:59', '2022-06-03 15:44:59'),
(46, 'نیازمند به اختیارات و آزادی عمل متوسط', '', 11, '2022-06-03 15:45:51', '2022-06-03 15:45:51'),
(47, 'نیازمند به اختیارات زیاد و آزادی عمل زیاد', '', 11, '2022-06-03 15:46:08', '2022-06-03 15:46:08'),
(48, 'نیازمند به اختیارات بسیار زیاد و آزادی عمل بسیار زیاد', '', 11, '2022-06-03 15:46:22', '2022-06-03 15:46:22'),
(49, 'پاسخگویی بسیار کم', '', 12, '2022-06-03 15:47:07', '2022-06-03 15:47:07'),
(50, 'پاسخگویی محدود', '', 12, '2022-06-03 15:47:21', '2022-06-03 15:47:21'),
(51, 'پاسخگویی متوسط', '', 12, '2022-06-03 15:47:35', '2022-06-03 15:47:35'),
(52, 'پاسخگویی زیاد', '', 12, '2022-06-03 15:47:47', '2022-06-03 15:47:47'),
(53, 'پاسخگویی بسیار زیاد', '', 12, '2022-06-03 15:48:00', '2022-06-03 15:48:00'),
(54, 'ندارد', '', 13, '2022-06-03 15:48:56', '2022-06-03 15:48:56'),
(55, 'دارد', '', 13, '2022-06-03 15:49:06', '2022-06-03 15:49:06'),
(56, 'ندارد', '', 14, '2022-06-03 15:49:20', '2022-06-03 15:49:20'),
(57, 'دارد', '', 14, '2022-06-03 15:49:30', '2022-06-03 15:49:30'),
(58, 'ندارد', '', 15, '2022-06-03 15:49:52', '2022-06-03 15:49:52'),
(59, 'دارد', '', 15, '2022-06-03 15:50:02', '2022-06-03 15:50:02'),
(60, 'ندارد', '', 16, '2022-06-03 15:50:17', '2022-06-03 15:50:17'),
(61, 'دارد', '', 16, '2022-06-03 15:50:25', '2022-06-03 15:50:25'),
(62, 'مستندسازی های ساده و تهیه گزارش های ساده و تکراری', '', 17, '2022-06-04 01:53:31', '2022-06-04 01:53:31'),
(63, 'مستندسازی های نسبتا مشکل و تهیه گزارش های نسبتا مهم', '', 17, '2022-06-04 01:54:00', '2022-06-04 01:54:00'),
(64, 'مستندسازی های مشکل و پیچیده و تهیه گزارش های مهم', '', 17, '2022-06-04 01:54:28', '2022-06-04 01:54:28'),
(65, 'ندارد', '', 18, '2022-06-04 01:55:10', '2022-06-04 01:55:10'),
(66, 'دارد', '', 18, '2022-06-04 01:55:24', '2022-06-04 01:55:24'),
(67, 'ندارد', '', 19, '2022-06-04 01:55:40', '2022-06-04 01:55:40'),
(68, 'دارد', '', 19, '2022-06-04 01:55:51', '2022-06-04 01:55:51'),
(69, 'ندارد', '', 20, '2022-06-04 01:56:06', '2022-06-04 01:56:06'),
(70, 'دارد', '', 20, '2022-06-04 01:56:17', '2022-06-04 01:56:17'),
(71, 'مسائل و مشکالت تکراری ، روتین و مشخص', '', 21, '2022-06-04 01:57:36', '2022-06-04 01:57:36'),
(72, 'مسائل و مشکالت نیمه روتین', '', 21, '2022-06-04 01:57:53', '2022-06-04 01:57:53'),
(73, 'مسائل و مشکالت استاندارد با رویه های نسبتا مشخص', '', 21, '2022-06-04 01:58:10', '2022-06-04 01:58:10'),
(74, 'مسائل و مشکالت نسبتا مشکل', '', 21, '2022-06-04 01:58:30', '2022-06-04 01:58:30'),
(75, 'مسائل و مشکالت بدون الگو ، وسیع ، کلی و انتزاعی', '', 21, '2022-06-04 01:58:47', '2022-06-04 01:58:47'),
(76, 'نیاز به دقت و تمرکز حواس متوسط', '', 22, '2022-06-04 01:59:29', '2022-06-04 01:59:29'),
(77, 'نیاز به دقت و تمرکز حواس زیاد', '', 22, '2022-06-04 01:59:43', '2022-06-04 01:59:43'),
(78, 'نیاز به دقت و تمرکز حواس خیلی زیاد و توام با حساسیت', '', 22, '2022-06-04 02:00:11', '2022-06-04 02:00:11'),
(79, 'نیاز به کار گروهی کم و بسیار محدود', '', 23, '2022-06-04 02:03:23', '2022-06-04 02:03:23'),
(80, 'نیاز به کار گروهی خودجوش و در حد متوسط', '', 23, '2022-06-04 02:03:47', '2022-06-04 02:03:47'),
(81, 'نیاز به کار گروهی زیاد به عنوان عضو تیم', '', 23, '2022-06-04 02:04:06', '2022-06-04 02:04:06'),
(82, 'نیاز به کار گروهی زیاد به عنوان عضو کاملا فعال و سازنده در تیم', '', 23, '2022-06-04 02:05:04', '2022-06-04 02:05:04'),
(83, 'نیاز به کار گروهی زیاد به عنوان رهبر تیم', '', 23, '2022-06-04 02:05:19', '2022-06-04 02:05:19'),
(84, 'صدمات یا جراحات سطحی و عمقی', '', 24, '2022-06-04 02:06:47', '2022-06-04 02:06:47'),
(85, 'نقص عضو جزیی', '', 24, '2022-06-04 02:07:01', '2022-06-04 02:07:01'),
(86, 'امراض جلدی ، قلبی ، ریوی ، عصبی ، فتق ، واریس ، دیسک و روماتیسم', '', 24, '2022-06-04 02:07:24', '2022-06-04 02:07:24'),
(87, 'نقص عضو کلی', '', 24, '2022-06-04 02:07:41', '2022-06-04 02:07:41'),
(88, 'از کار افتادگی', '', 24, '2022-06-04 02:07:56', '2022-06-04 02:07:56'),
(89, 'وجود دود ، بخار و محیط آلوده', '', 25, '2022-06-04 02:10:03', '2022-06-04 02:10:03'),
(90, 'وجود گرد و غبار ، سر و صدا', '', 25, '2022-06-04 02:10:51', '2022-06-04 02:10:51'),
(91, 'وجود رطوبت ، گرما یا سرما ، آفتاب و نور', '', 25, '2022-06-04 02:11:09', '2022-06-04 02:11:09'),
(92, 'بوی نامطبوع و کارهای شیمیایی', '', 25, '2022-06-04 02:11:23', '2022-06-04 02:11:23'),
(93, 'لرزش ، ارتعاش و اشعه', '', 25, '2022-06-04 02:11:38', '2022-06-04 02:11:38'),
(94, 'نگرانی و سلب آسایش کم', '', 26, '2022-06-04 02:12:46', '2022-06-04 02:12:46'),
(95, 'نگرانی و سلب آسایش در حد متوسط', '', 26, '2022-06-04 02:13:02', '2022-06-04 02:13:02'),
(96, 'نگرانی و سلب آسایش نسبتا زیاد', '', 26, '2022-06-04 02:13:17', '2022-06-04 02:13:17'),
(97, 'نگرانی و سلب آسایش زیاد', '', 26, '2022-06-04 02:13:32', '2022-06-04 02:13:32'),
(98, 'نگرانی و سلب آسایش خیلی زیاد', '', 26, '2022-06-04 02:13:47', '2022-06-04 02:13:47'),
(99, 'بالا و پایین رفتن ، خم و راست شدن ، راه رفتن و ایستادن', '', 27, '2022-06-04 02:15:11', '2022-06-04 02:15:11'),
(100, 'تمرکز قوای سمعی و بصری', '', 27, '2022-06-04 02:15:29', '2022-06-04 02:15:29'),
(101, 'نشستن مداوم جهت کار', '', 27, '2022-06-04 02:15:42', '2022-06-04 02:15:42'),
(102, 'حرکات بدنی و مستلزم صرف نیروی جسمانی', '', 27, '2022-06-04 02:15:58', '2022-06-04 02:15:58'),
(103, 'جا به جا کردن یا حمل و نقل اجسام بدون وسیله یا با وسیله', 'امتیاز حداکثر تا 50', 27, '2022-06-04 02:16:16', '2022-06-04 02:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(5, 'write-manege', 'ویراستار', '2022-06-17 08:01:53', '2022-06-17 08:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `scoures`
--

CREATE TABLE `scoures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT 0,
  `bunch_id` bigint(20) UNSIGNED NOT NULL,
  `subbunch_id` bigint(20) UNSIGNED NOT NULL,
  `subsetbunch_id` bigint(20) UNSIGNED NOT NULL,
  `questionbunch_id` bigint(20) UNSIGNED NOT NULL,
  `scoure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scoures`
--

INSERT INTO `scoures` (`id`, `user_id`, `bunch_id`, `subbunch_id`, `subsetbunch_id`, `questionbunch_id`, `scoure`, `created_at`, `updated_at`) VALUES
(13, 1, 1, 1, 2, 6, '10', '2022-06-10 10:12:59', '2022-06-10 10:12:59'),
(14, 1, 1, 1, 2, 7, '20', '2022-06-10 10:12:59', '2022-06-10 10:12:59'),
(15, 1, 1, 1, 2, 8, '30', '2022-06-10 10:12:59', '2022-06-10 10:12:59'),
(16, 1, 2, 7, 9, 34, '11', '2022-06-10 10:13:54', '2022-06-10 10:13:54'),
(17, 1, 2, 7, 9, 35, '22', '2022-06-10 10:13:54', '2022-06-10 10:13:54'),
(18, 1, 2, 7, 9, 36, '33', '2022-06-10 10:13:54', '2022-06-10 10:13:54'),
(19, 1, 2, 7, 9, 37, '44', '2022-06-10 10:13:54', '2022-06-10 10:13:54'),
(20, 1, 2, 7, 9, 38, '55', '2022-06-10 10:13:54', '2022-06-10 10:13:54'),
(21, 1, 4, 20, 27, 99, '1', '2022-06-11 15:58:47', '2022-06-11 15:58:47'),
(22, 1, 4, 20, 27, 100, '2', '2022-06-11 15:58:47', '2022-06-11 15:58:47'),
(23, 1, 4, 20, 27, 101, '3', '2022-06-11 15:58:47', '2022-06-11 15:58:47'),
(24, 1, 4, 20, 27, 102, '4', '2022-06-11 15:58:48', '2022-06-11 15:58:48'),
(25, 1, 4, 20, 27, 103, '5', '2022-06-11 15:58:48', '2022-06-11 15:58:48'),
(26, 2, 3, 12, 17, 62, '10', '2022-06-14 12:41:28', '2022-06-14 12:41:28'),
(27, 2, 3, 12, 17, 63, '20', '2022-06-14 12:41:28', '2022-06-14 12:41:28'),
(28, 2, 3, 12, 17, 64, '30', '2022-06-14 12:41:28', '2022-06-14 12:41:28'),
(29, 7, 1, 1, 1, 1, '10', '2022-06-19 13:58:19', '2022-06-19 13:58:19'),
(30, 7, 1, 1, 1, 2, '20', '2022-06-19 13:58:20', '2022-06-19 13:58:20'),
(31, 7, 1, 1, 1, 3, '30', '2022-06-19 13:58:20', '2022-06-19 13:58:20'),
(32, 7, 1, 1, 1, 4, '40', '2022-06-19 13:58:20', '2022-06-19 13:58:20'),
(33, 7, 1, 1, 1, 5, '50', '2022-06-19 13:58:20', '2022-06-19 13:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `subbunches`
--

CREATE TABLE `subbunches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bunch_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subbunches`
--

INSERT INTO `subbunches` (`id`, `name`, `bunch_id`, `created_at`, `updated_at`) VALUES
(1, 'دانش تخصصی و مهارت', 1, '2022-06-03 14:38:13', '2022-06-03 14:38:13'),
(2, 'تجربه', 1, '2022-06-03 14:38:39', '2022-06-03 14:38:39'),
(3, 'تحصیلات', 1, '2022-06-03 14:39:14', '2022-06-03 14:39:14'),
(4, 'منابع انسانی تحت سرپرستی', 2, '2022-06-03 14:56:05', '2022-06-03 14:56:05'),
(5, 'مسئولیت منابع فیزیکی', 2, '2022-06-03 14:57:41', '2022-06-03 14:57:41'),
(6, 'مسئولیت دارایی های اطلاعاتی شغلی', 2, '2022-06-03 14:58:39', '2022-06-03 14:58:39'),
(7, 'مسئولیت مقررات و روش ها', 2, '2022-06-03 14:58:59', '2022-06-03 14:58:59'),
(8, 'ایمنی ، بهداشت ، محیط زیست و ارگونومی HSEE', 2, '2022-06-03 14:59:32', '2022-06-03 14:59:32'),
(9, 'استقلال کاری و آزادی عمل (اختیارات)', 2, '2022-06-03 15:00:09', '2022-06-03 15:00:09'),
(10, 'پاسخگویی', 2, '2022-06-03 15:00:28', '2022-06-03 15:00:28'),
(11, 'فعالیت های خاص شغل', 2, '2022-06-03 15:01:36', '2022-06-03 15:01:36'),
(12, 'مستندسازی (مهارت نوشتاری)', 3, '2022-06-03 15:28:12', '2022-06-03 15:28:12'),
(13, 'برقراری ارتباط موثر', 3, '2022-06-03 15:28:27', '2022-06-03 15:28:27'),
(14, 'حل مسأله', 3, '2022-06-03 15:28:40', '2022-06-03 15:28:40'),
(15, 'دقت و تمرکز', 3, '2022-06-03 15:28:54', '2022-06-03 15:28:54'),
(16, 'توانایی کار گروهی', 3, '2022-06-03 15:29:08', '2022-06-03 15:29:08'),
(17, 'خطرات ناشی از کار', 4, '2022-06-03 15:29:35', '2022-06-03 15:29:35'),
(18, 'شرایط نامساعد محیط کار', 4, '2022-06-03 15:29:48', '2022-06-03 15:29:48'),
(19, 'استرس و سایر شرایط غیرعادی', 4, '2022-06-03 15:30:21', '2022-06-03 15:30:21'),
(20, 'کوشش های جسمانی', 4, '2022-06-03 15:30:34', '2022-06-03 15:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `subsetbunches`
--

CREATE TABLE `subsetbunches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subbunch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subsetbunches`
--

INSERT INTO `subsetbunches` (`id`, `name`, `subbunch_id`, `created_at`, `updated_at`) VALUES
(1, 'دانش و مهارت احراز شغل', 1, '2022-06-03 14:39:57', '2022-06-03 14:39:57'),
(2, 'احراز نرم افزارهای مرتبط شغلی', 1, '2022-06-03 14:40:22', '2022-06-03 14:40:22'),
(3, 'احراز زبان خارجی', 1, '2022-06-03 14:40:45', '2022-06-03 14:40:45'),
(4, 'تجربه شغلی', 2, '2022-06-03 14:49:19', '2022-06-03 14:49:19'),
(5, 'مقطع تحصیلی', 3, '2022-06-03 14:52:46', '2022-06-03 14:52:46'),
(6, 'منابع انسانی تحت سرپرستی', 4, '2022-06-03 15:23:19', '2022-06-03 15:23:19'),
(7, 'مسئولیت منابع فیزیکی', 5, '2022-06-03 15:24:08', '2022-06-03 15:24:08'),
(8, 'مسئولیت دارایی های اطلاعاتی شغلی', 6, '2022-06-03 15:24:24', '2022-06-03 15:24:24'),
(9, 'مسئولیت مقررات و روش ها', 7, '2022-06-03 15:24:39', '2022-06-03 15:24:39'),
(10, 'ایمنی ، بهداشت ، محیط زیست و ارگونومی HSEE', 8, '2022-06-03 15:24:57', '2022-06-03 15:24:57'),
(11, 'استقلال کاری و آزادی عمل (اختیارات)', 9, '2022-06-03 15:25:12', '2022-06-03 15:25:12'),
(12, 'پاسخگویی', 10, '2022-06-03 15:25:25', '2022-06-03 15:25:25'),
(13, 'نیازمند به site on و call on بودن در خارج از ساعات کاری', 11, '2022-06-03 15:25:58', '2022-06-03 15:25:58'),
(14, 'نیازمند به حضور در روزهای خاص و تعطیلات', 11, '2022-06-03 15:26:20', '2022-06-03 15:26:20'),
(15, 'نیازمند به کار در محیط عملیاتی', 11, '2022-06-03 15:26:36', '2022-06-03 15:26:36'),
(16, 'نیازمند به حضور در مکان های خاص کاری', 11, '2022-06-03 15:26:55', '2022-06-03 15:26:55'),
(17, 'مستندسازی (مهارت نوشتاری)', 12, '2022-06-03 15:31:12', '2022-06-03 15:31:12'),
(18, 'نیازمند به ارتباط مؤثر کاری با همکاران خود (درون واحدی)', 13, '2022-06-03 15:31:25', '2022-06-03 15:32:02'),
(19, 'نیازمند به ارتباط مؤثر کاری با سایر واحدهای سازمانی (بین واحدی)', 13, '2022-06-03 15:32:25', '2022-06-03 15:32:25'),
(20, 'نیازمند به ارتباط مؤثر کاری با افراد خارج از سازمان', 13, '2022-06-03 15:32:45', '2022-06-03 15:32:45'),
(21, 'حل مسأله', 14, '2022-06-03 15:33:04', '2022-06-03 15:33:04'),
(22, 'دقت و تمرکز', 15, '2022-06-03 15:33:17', '2022-06-03 15:33:17'),
(23, 'توانایی کار گروهی', 16, '2022-06-03 15:33:33', '2022-06-03 15:33:33'),
(24, 'خطرات ناشی از کار', 17, '2022-06-04 02:06:16', '2022-06-04 02:06:16'),
(25, 'شرایط نامساعد محیط کار', 18, '2022-06-04 02:09:11', '2022-06-04 02:09:11'),
(26, 'استرس و سایر شرایط غیرعادی', 19, '2022-06-04 02:12:26', '2022-06-04 02:12:26'),
(27, 'کوشش های جسمانی', 20, '2022-06-04 02:14:41', '2022-06-04 02:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `melli_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_SuperUser` tinyint(1) NOT NULL DEFAULT 0,
  `is_StaffUser` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `melli_number`, `phone_number`, `email`, `city`, `gender`, `title_job`, `code_job`, `office`, `email_verified_at`, `is_SuperUser`, `is_StaffUser`, `password`, `shift`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'رضا محترم', '2755832029', '09148082024', 'mohtaramreza@gmail.com', 'ارومیه', 'مرد', 'کارشناس IT', '12488563', 'مرکز بهداشت ارومیه', NULL, 1, 0, '$2y$10$QgYp8klfdU6qUnh99Vza2OLgSLuFX7pzapqgrCs90AuuuirbOwDge', 'شیفت کاری دارم', NULL, '2022-05-27 12:49:03', '2022-05-27 12:49:03'),
(2, 'ولی محترم', '', '', 'vali@gmail.com', '', '', '', '', '', '2022-06-17 02:40:41', 1, 0, '$2y$10$IYDD51/OfuO5/FF4JmKTauip8e4ZWBLWLsVKBpttW64Cb9fqq3z1a', '', NULL, '2022-06-14 12:40:29', '2022-06-17 02:40:41'),
(3, 'سمیرا محمود سیه بازی', '', '', 'samira@gmail.com', '', '', '', '', '', NULL, 0, 0, '$2y$10$p441SxOADSzu9l9RAzk31OQUkEnFzPAsbT0zgzx24VHPeh9Boe7u.', '', NULL, '2022-06-16 16:07:54', '2022-06-16 16:07:54'),
(4, 'دینا محترم', '', '', 'dina@gmail.com', '', '', '', '', '', '2022-06-16 16:08:39', 0, 1, '$2y$10$d5/dMvgQtQTN/RqRR15l6ekF1C6/.IjY/NK5i2MCzTbvl7S.TBMgy', '', NULL, '2022-06-16 16:08:39', '2022-06-16 16:08:39'),
(5, 'رضا محترم', 'رضا محترم', 'رضا محترم', 'reza@gmail.com', 'رضا محترم', 'رضا محترم', 'رضا محترم', 'رضا محترم', 'رضا محترم', NULL, 0, 0, '$2y$10$OClNinIEG8XkXT6S7frSuedDPg59BfGqPsvcaVOsZSRlNnqkb1f06', 'رضا محترم', NULL, '2022-06-18 14:20:09', '2022-06-18 14:20:09'),
(6, 'ولی محترم', '2740102372', 'ولی محترم', 'itmohtaram@gmail.com', 'ولی محترم', 'ولی محترم', 'ولی محترم', 'ولی محترم', 'ولی محترم', NULL, 0, 0, '$2y$10$Ey90uz0/pC/uC8307k2DWOa9ZW0F8WikWLZs6N61ARrfyGr8EjW5G', 'ولی محترم', NULL, '2022-06-18 14:22:02', '2022-06-18 14:22:02'),
(7, 'دینا محترم', '2743806729', '09147155960', 'rddd@gmail.com', 'ارومیه', 'زن', 'کارشناس IT', '1421523', 'مرکز بهداشت ارومیه', NULL, 0, 0, '$2y$10$gFtNrfzS.GgyJUtZ6C/34uWbBoI9qxlZp403MxW0ZLdnLahxX4/HC', 'شیفت کاری ندارم', NULL, '2022-06-18 14:23:55', '2022-06-18 14:23:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bunches`
--
ALTER TABLE `bunches`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`,`user_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questionbunches`
--
ALTER TABLE `questionbunches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questionbunches_subsetbunch_id_foreign` (`subsetbunch_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `scoures`
--
ALTER TABLE `scoures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scoures_bunch_id_foreign` (`bunch_id`),
  ADD KEY `scoures_subbunch_id_foreign` (`subbunch_id`),
  ADD KEY `scoures_subsetbunch_id_foreign` (`subsetbunch_id`),
  ADD KEY `scoures_questionbunch_id_foreign` (`questionbunch_id`);

--
-- Indexes for table `subbunches`
--
ALTER TABLE `subbunches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subbunches_bunch_id_foreign` (`bunch_id`);

--
-- Indexes for table `subsetbunches`
--
ALTER TABLE `subsetbunches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subsetbunches_subbunch_id_foreign` (`subbunch_id`);

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
-- AUTO_INCREMENT for table `bunches`
--
ALTER TABLE `bunches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionbunches`
--
ALTER TABLE `questionbunches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `scoures`
--
ALTER TABLE `scoures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `subbunches`
--
ALTER TABLE `subbunches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subsetbunches`
--
ALTER TABLE `subsetbunches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questionbunches`
--
ALTER TABLE `questionbunches`
  ADD CONSTRAINT `questionbunches_subsetbunch_id_foreign` FOREIGN KEY (`subsetbunch_id`) REFERENCES `subsetbunches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `scoures`
--
ALTER TABLE `scoures`
  ADD CONSTRAINT `scoures_bunch_id_foreign` FOREIGN KEY (`bunch_id`) REFERENCES `bunches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `scoures_questionbunch_id_foreign` FOREIGN KEY (`questionbunch_id`) REFERENCES `questionbunches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `scoures_subbunch_id_foreign` FOREIGN KEY (`subbunch_id`) REFERENCES `subbunches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `scoures_subsetbunch_id_foreign` FOREIGN KEY (`subsetbunch_id`) REFERENCES `subsetbunches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `scoures_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subbunches`
--
ALTER TABLE `subbunches`
  ADD CONSTRAINT `subbunches_bunch_id_foreign` FOREIGN KEY (`bunch_id`) REFERENCES `bunches` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subsetbunches`
--
ALTER TABLE `subsetbunches`
  ADD CONSTRAINT `subsetbunches_subbunch_id_foreign` FOREIGN KEY (`subbunch_id`) REFERENCES `subbunches` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
