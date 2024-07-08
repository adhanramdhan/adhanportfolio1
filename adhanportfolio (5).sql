-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 11:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adhanportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `decription` varchar(1000) NOT NULL,
  `decription2` varchar(10000) DEFAULT NULL,
  `whatido` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `decription`, `decription2`, `whatido`, `created_at`, `updated_at`) VALUES
(3, 'I am a Graphic Designer from Jakarta, Indonesia. has experience in the fields of social media design and print media design. I love turning complex design problems into simple, beautiful, and intuitive ones.', 'Currently, I am a multimedia student at PONCOL Vocational School located in Kemayoran, Central Jakarta. My journey in the field of graphic design began in 2020 where I worked on several projects for amateur E-Sport teams. I am proficient in using Adobe Photoshop and Figma. I have experience in Adobe Illustrator, After Effect, Premier Pro and I also know the basics of Programming. I\'m enthusiastic about exploring new opportunities in graphic design, and I\'m actively looking for part-time, internship, or even full-time positions.', 'wewew', '2024-07-08 02:43:22', '2024-07-07 19:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ctgprojects`
--

CREATE TABLE `ctgprojects` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ctgprojects`
--

INSERT INTO `ctgprojects` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'web banner', '2024-06-08 20:04:26', '2024-06-09 05:00:33'),
(2, 'feed design', '2024-06-08 20:17:14', '2024-06-09 05:00:40'),
(3, 'poster design', '2024-06-08 20:17:22', '2024-06-09 05:00:47'),
(4, 'logo', '2024-06-08 20:17:28', '2024-06-09 05:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) NOT NULL,
  `campus` varchar(50) NOT NULL,
  `bachelor` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_start` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `campus`, `bachelor`, `major`, `address`, `created_at`, `updated_at`, `date_start`) VALUES
(5, 'SMK PONCOL', '-', 'Multimedia', 'Jl. Mutiara Raya No.1, RT.14/RW.3, Sumur Batu, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10640', '2024-06-07 01:57:24', '2024-06-07 01:57:24', '2021 — 2024'),
(6, 'SMPN 228 Jakarta', '-', '-', 'Jl. Sumur Batu Raya No.6, RT.11/RW.1, Sumur Batu, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10640', '2024-06-07 01:57:49', '2024-06-07 01:57:49', '2018 — 2021'),
(7, 'SDN Cempaka Baru 11', '-', '-', 'Jl. Remaja Raya No.52, RT.5/RW.8, Cemp. Baru, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10640', '2024-06-07 01:58:33', '2024-06-07 01:58:33', '2012 — 2018'),
(8, 'Politeknik Negeri Media Kreatif', '-', 'Teknik Grafika (D3)', 'Jl. Srengseng Sawah Raya No.17, RT.8/RW.3, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630', '2024-07-07 19:41:29', '2024-07-07 19:41:29', '2024 - 2027');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) NOT NULL,
  `job` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_start` varchar(50) NOT NULL,
  `date_finish` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `job`, `company`, `description`, `date_start`, `date_finish`, `created_at`, `updated_at`) VALUES
(5, 'graphic design, video editor, animator', 'FREELANCER SERVICES', 'I am experienced in communicating with my clients. Even though it was during my amateur years, I think that\'s enough to show that I have progressed from year to year', '2020', 'Present', '2024-06-09 12:46:51', '2024-06-09 05:46:51'),
(6, 'IT Support', 'PT.GLORYMITRASUKSES', 'During my 3 month internship period in 2023, I handled several important jobs including maintaining the company website, designing several feeds for the company\'s media needs, taking photos of products to be sold, editing advertising videos for promotional purposes and creating company logo animations.', '01/2023', '04/2023', '2024-06-09 01:37:35', '2024-06-08 18:37:35'),
(7, 'Marketing Team (Video Editor)', 'PT.GLORYMITRASUKSES (egaming/cougar/hose/lexa)', 'During my 3 month internship period in 2023, I handled several important jobs including maintaining the company website, designing several feeds for the company\'s media needs, taking photos of products to be sold, editing advertising videos for promotional purposes and creating company logo animations.', '04/2024', 'Present', '2024-06-09 02:17:01', '2024-06-08 19:17:01');

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
-- Table structure for table `imgprojects`
--

CREATE TABLE `imgprojects` (
  `id` int(11) NOT NULL,
  `images` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imgprojects`
--

INSERT INTO `imgprojects` (`id`, `images`, `created_at`, `updated_at`) VALUES
(6, '1717927430_nike-feed.jpg', '2024-06-09 03:03:50', '2024-06-09 03:03:50'),
(7, '1717927662_framework-coffee.jpg', '2024-06-09 03:07:42', '2024-06-09 03:07:42'),
(8, '1717936477_logo basrng.png', '2024-06-09 05:34:37', '2024-06-09 05:34:37'),
(10, '1717936783_project-pkl1.jpg', '2024-06-09 05:39:43', '2024-06-09 05:39:43'),
(11, '1717936804_project-logo2.png', '2024-06-09 05:40:04', '2024-06-09 05:40:04'),
(12, '1717936835_project-pkl2.jpg', '2024-06-09 05:40:35', '2024-06-09 05:40:35'),
(13, '1717936862_project-pkl3.jpg', '2024-06-09 05:41:02', '2024-06-09 05:41:02'),
(14, '1717936908_project-mobo.jpg', '2024-06-09 05:41:48', '2024-06-09 05:41:48'),
(15, '1717936934_project-banner1.jpg', '2024-06-09 05:42:14', '2024-06-09 05:42:14'),
(16, '1717936956_project-banner2.jpg', '2024-06-09 05:42:36', '2024-06-09 05:42:36'),
(17, '1717936989_VINICIUS-POSTER.jpg', '2024-06-09 05:43:09', '2024-06-09 05:43:09'),
(18, '1717937011_project-poster2.jpg', '2024-06-09 05:43:31', '2024-06-09 05:43:31'),
(19, '1717937047_project-poster3.jpg', '2024-06-09 05:44:07', '2024-06-09 05:44:07'),
(20, '1717989915_mobo nature.jpg', '2024-06-09 20:25:15', '2024-06-09 20:25:15'),
(21, '1720406791_download (1).jfif', '2024-07-07 19:46:31', '2024-07-07 19:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_27_064809_create_profiles_table', 2);

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_images` int(11) DEFAULT NULL,
  `title` varchar(50) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `id_category`, `id_images`, `title`, `caption`, `created_at`, `updated_at`) VALUES
(8, 2, 6, 'NIKE FEED', 'Caption Nike Feed', '2024-06-09 03:03:50', '2024-06-09 05:33:16'),
(10, 4, 8, 'Logo Baseng Gila', 'Caption Basreng gila', '2024-06-09 05:34:37', '2024-06-09 05:34:37'),
(11, 4, 11, 'Logo Ghostcrack', 'caption ghostcrack', '2024-06-09 05:37:45', '2024-06-09 05:40:04'),
(12, 2, 10, 'Mb Centaur H81 #1', 'Caption Mb Centaur H81', '2024-06-09 05:39:43', '2024-06-09 05:39:43'),
(13, 2, 12, 'Mb Centaur H81 #2', 'Caption Mb Centaur H81', '2024-06-09 05:40:35', '2024-06-09 05:40:35'),
(14, 2, 13, 'Mb Centaur H81 #3', 'Caption Mb Centaur H81', '2024-06-09 05:41:02', '2024-06-09 05:41:02'),
(15, 2, 14, 'Komersil Motherboard', 'Caption Komersil Motherboard', '2024-06-09 05:41:48', '2024-06-09 05:41:48'),
(16, 1, 15, 'FC Forza #1-2-3', 'Caption FC Forza #1-2-3', '2024-06-09 05:42:14', '2024-06-09 05:42:14'),
(17, 1, 16, 'FC Forza #4-5-6', 'Caption FC Forza #4-5-6', '2024-06-09 05:42:36', '2024-06-09 05:42:36'),
(18, 3, 17, 'Viniciuz poster', 'Caption Viniciuz poster', '2024-06-09 05:43:09', '2024-06-09 05:43:09'),
(19, 3, 18, 'poster pildun', 'Caption poster pildun', '2024-06-09 05:43:31', '2024-06-09 05:43:31'),
(20, 3, 19, 'Komersil Emelard Blend', 'Caption Komersil Emelard Blend', '2024-06-09 05:44:07', '2024-06-09 05:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `wa_link` varchar(200) NOT NULL,
  `email_link` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profesi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `email`, `phone`, `address`, `tanggal_lahir`, `instagram_link`, `linkedin_link`, `youtube_link`, `facebook_link`, `wa_link`, `email_link`, `created_at`, `updated_at`, `profesi`) VALUES
(5, 'Bintang Ramadhan', 'ramdhan1contant@gmail.com', '0895415496555', 'Kemayoran, DKI jakarta, Indonesia', '26 September', 'https://www.instagram.com/rmdhnz7/', 'https://www.linkedin.com/in/bintang-ramadhan-969376274/', 'youtube.com/channel/UCeZ6jC-oVxNInMSezm0YVZg', 'https://www.facebook.com/dhanzvisual', 'https://api.whatsapp.com/send/?phone=62895415496555&text&type=phone_number&app_absent=0', 'https://mail.google.com/mail/u/0/#sent?compose=DmwnWstzVNfhnJbWCTtnrbJSSpZDsWSMSwrFVnhqNwkDsnhNsldLvwQkLJvGJCJzMVczxpDdmKZl', '2024-05-29 10:01:26', '2024-06-10 18:00:21', 'Desian Grafis');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('tPMS2l1Tlykwqu4bkxXi1mboqeD5mxQMhL6oUO6o', 17, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidjFrVHloVkpicGZjWk9relg2QU5wc3hMOUplVVVjQnQ5T3RYNE11bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wb3J0Zm9saW8iO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxNzt9', 1720406838);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `profile_picture` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `profile_picture`, `created_at`, `updated_at`) VALUES
(2, '1717662469_avatar-1.png', '2024-06-06 01:27:49', '2024-06-06 01:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(2, 'Web Programming', 90, '2024-06-07 08:55:54', '2024-06-07 01:55:54'),
(3, 'UI/UX Design', 75, '2024-06-07 01:43:51', '2024-06-07 01:43:51'),
(4, 'Digital Imaging', 90, '2024-06-07 01:44:09', '2024-06-07 01:44:09'),
(5, 'Vector Image', 70, '2024-06-07 01:44:25', '2024-06-07 01:44:25'),
(6, 'Layout Managing (Feed)', 80, '2024-06-07 01:45:14', '2024-06-07 01:45:14');

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
(15, 'adhan', 'adhan2@gmail.com', NULL, '$2y$12$Q3p9icXrtRFN1MoeoWRkO.bOSQpVN.iU/KGUTNYM4NSkK7dV/Fw2u', NULL, '2024-06-09 19:57:30', '2024-06-09 19:57:30'),
(17, 'ramdhan', 'adhan@gmail.com', NULL, '$2y$12$6cNaD.cdM8PycBRx6JCXRuYbPu8mEehEkHbC0tAvb5OJE8t7mxNQm', NULL, '2024-07-07 19:25:45', '2024-07-07 19:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `whatidos`
--

CREATE TABLE `whatidos` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `whatidos`
--

INSERT INTO `whatidos` (`id`, `description`, `caption`, `icon`, `created_at`, `updated_at`) VALUES
(4, 'Company Profile', 'a professional introduction of the business which aims to inform the audience about its products and services.', '1717986191_icon-company.svg', '2024-06-09 19:23:11', '2024-06-09 19:23:11'),
(5, 'Logo Design', 'Creating a unique identity that is easily recognized by the public', '1717986255_icon-logodesign.svg', '2024-06-09 19:24:15', '2024-06-09 19:24:15'),
(6, 'Sports Design', 'Can make your match schedule much cooler and more interesting', '1717986344_icon-sports.svg', '2024-06-09 19:25:44', '2024-06-09 19:25:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `ctgprojects`
--
ALTER TABLE `ctgprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `imgprojects`
--
ALTER TABLE `imgprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whatidos`
--
ALTER TABLE `whatidos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ctgprojects`
--
ALTER TABLE `ctgprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imgprojects`
--
ALTER TABLE `imgprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `whatidos`
--
ALTER TABLE `whatidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
