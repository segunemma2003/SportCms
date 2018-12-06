-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2018 at 04:43 PM
-- Server version: 10.1.37-MariaDB-1
-- PHP Version: 7.2.9-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enyimbafc`
--

-- --------------------------------------------------------

--
-- Table structure for table `allcategories`
--

CREATE TABLE `allcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allcategories`
--

INSERT INTO `allcategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Match preview', '2018-11-19 19:27:59', '2018-11-19 19:27:59'),
(3, 'Match review', '2018-11-19 19:34:21', '2018-11-19 19:34:21'),
(4, 'Newsline', '2018-11-19 19:34:31', '2018-11-19 19:34:31'),
(5, 'Football gist', '2018-11-19 19:34:47', '2018-11-19 19:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `competition_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `competition_name`, `created_at`, `updated_at`, `logo`, `nickname`) VALUES
(1, 'CAF champions league', '2018-11-19 13:49:11', '2018-11-19 13:49:11', NULL, 'CAF'),
(2, 'Nigeria premier league', '2018-11-19 13:49:30', '2018-11-19 13:49:30', NULL, 'NPFL');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fixtures`
--

CREATE TABLE `fixtures` (
  `id` int(10) UNSIGNED NOT NULL,
  `home` int(10) UNSIGNED NOT NULL,
  `away` int(10) UNSIGNED NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `season_id` int(10) UNSIGNED NOT NULL,
  `competition` int(10) UNSIGNED NOT NULL,
  `home_score` int(11) DEFAULT NULL,
  `away_score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time` time DEFAULT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matchday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fixtures`
--

INSERT INTO `fixtures` (`id`, `home`, `away`, `date`, `season_id`, `competition`, `home_score`, `away_score`, `created_at`, `updated_at`, `time`, `venue`, `matchday`, `status`) VALUES
(1, 2, 1, '2018-12-14', 1, 1, NULL, NULL, '2018-11-19 13:51:10', '2018-11-19 13:51:10', '14:00:00', 'Maracana Stadium', 'MDAY5', 0),
(2, 1, 3, '2018-12-30', 1, 2, 1, 1, '2018-11-20 05:23:47', '2018-12-04 13:21:08', '02:34:00', 'Maracana Stadium', 'mday-3', 0),
(3, 2, 1, '2018-12-03', 1, 2, NULL, NULL, '2018-12-02 09:17:42', '2018-12-02 09:17:42', '14:30:00', 'Maracana Stadium', 'MDay4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `post_id`, `file`, `text`, `created_at`, `updated_at`) VALUES
(21, 18, 'ABI_1543705724.png', 'ABI', '2018-12-01 22:08:44', '2018-12-01 22:08:44'),
(22, 18, 'ABS_1543705724.png', 'ABS', '2018-12-01 22:08:44', '2018-12-01 22:08:44'),
(23, 18, 'AKW_1543705725.png', 'AKW', '2018-12-01 22:08:45', '2018-12-01 22:08:45'),
(24, 18, 'ELK_1543705725.png', 'ELK', '2018-12-01 22:08:45', '2018-12-01 22:08:45'),
(25, 18, 'elkanemi_1543705725.png', 'elkanemi', '2018-12-01 22:08:45', '2018-12-01 22:08:45'),
(26, 19, 'img-01_1543712757.jpg', 'img-01', '2018-12-02 00:05:57', '2018-12-02 00:05:57'),
(27, 19, 'img-02_1543712757.jpg', 'img-02', '2018-12-02 00:05:57', '2018-12-02 00:05:57'),
(28, 19, 'img-03_1543712757.jpg', 'img-03', '2018-12-02 00:05:57', '2018-12-02 00:05:57');

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
(3, '2018_11_10_231936_create_posts_table', 1),
(4, '2018_11_10_232020_create_teams_table', 1),
(5, '2018_11_10_232036_create_categories_table', 1),
(6, '2018_11_10_232103_create_seasons_table', 1),
(7, '2018_11_10_232210_create_comments_table', 1),
(8, '2018_11_10_232637_create_galleries_table', 1),
(9, '2018_11_10_233802_create-table-fixtures', 1),
(10, '2018_11_10_234920_create_players_table', 1),
(11, '2018_11_10_235002_create-table-scorers', 1),
(12, '2018_11_16_062756_add_to_table_fixtures', 1),
(13, '2018_11_16_225927_add_to_table_scorers', 1),
(14, '2018_11_16_230201_add_to_table_post', 1),
(15, '2018_11_19_185105_create_allcategories_table', 2),
(16, '2018_11_19_191103_add_to_table_categories', 3),
(17, '2018_11_19_191548_add_to_table_fixturess', 3),
(18, '2018_11_19_191741_add_to_table_scorers', 3),
(19, '2018_11_19_192506_create_post_category', 4),
(20, '2018_11_19_194813_add_to_table_users', 5),
(21, '2018_11_20_003434_add_to_table_posters', 6),
(22, '2018_11_20_063454_add_to_table_postersfixtures', 7),
(23, '2018_12_04_114436_add_to_tables_tables_players', 8),
(24, '2018_12_04_123455_add_to_tables_tables_spocs', 9);

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
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shirt_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `welcome_video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `injury` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `years_of_contract` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_signed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `former_club` int(10) UNSIGNED DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `name`, `dob`, `weight`, `height`, `shirt_number`, `picture`, `welcome_video`, `injury`, `years_of_contract`, `salary`, `year_signed`, `team_id`, `former_club`, `created_at`, `updated_at`, `position`) VALUES
(1, 'Kalu Uche', '2018-11-15', '30kg', '49kg', '11', 'ft-player_1543753935.png', NULL, '1', '5years', '300000', '2018', 1, 1, '2018-11-20 02:51:23', '2018-12-04 10:56:04', 'Forward'),
(2, 'Chukwude', '2000-10-12', '30kg', '40kg', '16', '9-Chukwude_1543795667.png', NULL, '1', '5years', '300000', '2018', 1, 1, '2018-12-02 23:07:47', '2018-12-04 10:56:23', 'Defender'),
(3, 'Afelokhai', '2013-10-12', '30kg', '40kg', '11', '1-Afelokhai_1543795727.png', NULL, '1', '5years', '300000', '2018', 1, 1, '2018-12-02 23:08:47', '2018-12-04 10:56:42', 'Goal Keeper'),
(4, 'Kester', '2006-10-01', '30kg', '40kg', '1', '12-Kester_1543795878.png', NULL, '1', '5years', '300000', '2018', 1, 1, '2018-12-02 23:11:18', '2018-12-04 10:57:00', 'Midfielder'),
(5, 'ibrahim', '1991-09-12', '30kg', '40kg', '2', '19-Ibrahim_1543795936.png', NULL, '1', '5years', '300000', '2018', 1, 1, '2018-12-02 23:12:16', '2018-12-04 10:57:24', 'Attacker'),
(6, 'Osadiaye', '1971-12-07', '30kg', '49kg', '3', '20-Osadiaye_1543796002.png', NULL, '1', '5years', '300000', '2018', 1, 1, '2018-12-02 23:13:22', '2018-12-04 10:57:37', 'Forward'),
(7, 'Nelson', '1981-12-21', '30kg', '40kg', '4', '24-Nelson_1543796042.png', NULL, '1', '5years', '300000', '2018', 1, 1, '2018-12-02 23:14:02', '2018-12-04 10:57:49', 'Defender'),
(8, 'Gbadebo', '1987-01-18', '30kg', '40kg', '5', '26-Gbadebo_1543796091.png', NULL, '1', '5years', '300000', '2018', 1, 1, '2018-12-02 23:14:51', '2018-12-04 10:57:58', 'Midfielder');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fixture_id` int(10) UNSIGNED DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `title_image`, `body`, `user_id`, `created_at`, `updated_at`, `fixture_id`, `summary`) VALUES
(1, 'Nigeria of today', 'md30_1542683706.jpg', '<p><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>\n<p>\"&gt;</p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>', 1, '2018-11-19 23:54:34', '2018-11-20 02:15:06', 1, '<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p> </p>'),
(3, 'Nigeria of todayss', 'img-02_1542682418.jpg', '<p><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>\n<p>\"&gt;</p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>\n<p>\"&gt;</p>\n<p><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>\n<p>\"&gt;</p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>\n<p>\"&gt;</p>\n<p>First, we have created the product and save in the <strong>products </strong>table.</p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>\n<p>\"&gt;</p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>\n<p>\"&gt;</p>\n<p><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>\n<p>\"&gt;</p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\">Since we just need an ID of categories, so right now, I have coded manually, but in real-time, you have those ids in the form request</span></p>', 1, '2018-11-19 23:57:39', '2018-11-20 01:53:38', NULL, '<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">First, we have created the product and save in the <strong>products </strong>table.</span></p>\n<p style=\"text-align:justify;\"><span style=\"font-size:12pt;\">Now, it is time, to assign the categories to the newly created product.</span></p>\n<p><span style=\"font-size:12pt;\"> </span></p>'),
(18, 'hey hey whats up', 'ELK_1543705724.png', '<p>not by might dnbjfnfj</p>', 1, '2018-12-01 22:08:44', '2018-12-01 22:08:44', 2, '<p>coming from me xmccnjn</p>'),
(19, 'first', 'img-01_1543712756.jpg', '<p>fdxgchjkljh</p>', 1, '2018-12-02 00:05:56', '2018-12-02 00:05:56', 2, '<p>dfdfdtft</p>');

-- --------------------------------------------------------

--
-- Table structure for table `posts_allcategories`
--

CREATE TABLE `posts_allcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `allcategory_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_allcategories`
--

INSERT INTO `posts_allcategories` (`id`, `post_id`, `allcategory_id`, `created_at`, `updated_at`) VALUES
(2, 3, 4, '2018-11-19 23:57:39', '2018-11-19 23:57:39'),
(17, 18, 2, '2018-12-01 22:08:44', '2018-12-01 22:08:44'),
(18, 19, 4, '2018-12-02 00:05:56', '2018-12-02 00:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `scorers`
--

CREATE TABLE `scorers` (
  `id` int(10) UNSIGNED NOT NULL,
  `goals` int(11) DEFAULT '1',
  `assists` int(11) DEFAULT '1',
  `player_id` int(10) UNSIGNED DEFAULT NULL,
  `fixture_id` int(10) UNSIGNED DEFAULT NULL,
  `scorer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opponentScorer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opponentAssist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assistplayer_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scorers`
--

INSERT INTO `scorers` (`id`, `goals`, `assists`, `player_id`, `fixture_id`, `scorer`, `assist`, `created_at`, `updated_at`, `time`, `opponentScorer`, `opponentAssist`, `assistplayer_id`) VALUES
(7, 1, 1, 1, 2, NULL, NULL, '2018-12-04 13:18:56', '2018-12-04 13:18:56', '20mins', NULL, NULL, 6),
(8, 1, 1, NULL, 2, NULL, NULL, '2018-12-04 13:21:09', '2018-12-04 13:21:09', '40mins', 'tola', 'femi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `season` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `season`, `created_at`, `updated_at`) VALUES
(1, '2018/2019', '2018-11-19 13:50:08', '2018-11-19 13:50:08'),
(2, '2016/2017', '2018-11-19 13:50:20', '2018-11-19 13:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coach` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `country`, `file`, `coach`, `created_at`, `updated_at`) VALUES
(1, 'Enyimba Fc', 'Nigeria', 'index_1542638706.jpeg', 'Mourinho', '2018-11-19 13:45:06', '2018-11-19 13:45:06'),
(2, 'Plateau United', 'Nigeria', 'indeddx_1542638739.jpeg', 'Cart men', '2018-11-19 13:45:39', '2018-11-19 13:45:39'),
(3, 'Aba United', 'Nigeria', 'horse-logo2_1542638916.jpg', 'Arsene', '2018-11-19 13:48:36', '2018-11-19 13:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Bamidele Segun', 'segunemma2003@gmail.com', NULL, NULL, '$2y$10$2r8IDFIS6qBTDLuDbFLRfus91y/pq/ajczp.WP.eNv7Rx5KwSuHR2', NULL, '2018-11-19 13:36:40', '2018-11-19 13:36:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allcategories`
--
ALTER TABLE `allcategories`
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
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fixtures_home_foreign` (`home`),
  ADD KEY `fixtures_away_foreign` (`away`),
  ADD KEY `fixtures_season_id_foreign` (`season_id`),
  ADD KEY `fixtures_competition_foreign` (`competition`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_post_id_foreign` (`post_id`);

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
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_team_id_foreign` (`team_id`),
  ADD KEY `players_former_club_foreign` (`former_club`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_fixture_id_foreign` (`fixture_id`);

--
-- Indexes for table `posts_allcategories`
--
ALTER TABLE `posts_allcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_allcategories_post_id_foreign` (`post_id`),
  ADD KEY `posts_allcategories_allcategory_id_foreign` (`allcategory_id`);

--
-- Indexes for table `scorers`
--
ALTER TABLE `scorers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `scorers_player_id_foreign` (`player_id`),
  ADD KEY `scorers_fixture_id_foreign` (`fixture_id`),
  ADD KEY `scorers_assistplayer_id_foreign` (`assistplayer_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `allcategories`
--
ALTER TABLE `allcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fixtures`
--
ALTER TABLE `fixtures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `posts_allcategories`
--
ALTER TABLE `posts_allcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `scorers`
--
ALTER TABLE `scorers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fixtures`
--
ALTER TABLE `fixtures`
  ADD CONSTRAINT `fixtures_away_foreign` FOREIGN KEY (`away`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fixtures_competition_foreign` FOREIGN KEY (`competition`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fixtures_home_foreign` FOREIGN KEY (`home`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fixtures_season_id_foreign` FOREIGN KEY (`season_id`) REFERENCES `seasons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_former_club_foreign` FOREIGN KEY (`former_club`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `players_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_fixture_id_foreign` FOREIGN KEY (`fixture_id`) REFERENCES `fixtures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts_allcategories`
--
ALTER TABLE `posts_allcategories`
  ADD CONSTRAINT `posts_allcategories_allcategory_id_foreign` FOREIGN KEY (`allcategory_id`) REFERENCES `allcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_allcategories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scorers`
--
ALTER TABLE `scorers`
  ADD CONSTRAINT `scorers_assistplayer_id_foreign` FOREIGN KEY (`assistplayer_id`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scorers_fixture_id_foreign` FOREIGN KEY (`fixture_id`) REFERENCES `fixtures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `scorers_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
