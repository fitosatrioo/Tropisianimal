-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 04:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'lOcFU2EYUcSGCxmFpdVN0lNMROXRs6ljyw4k4fad.png', 'Visi', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute urure dolor in reprehenderit in voluptate velit esse cillium dolore eu fugiat nulla pariatur. exceptur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', '2022-02-23 13:36:28', '2022-03-08 15:51:43'),
(2, 'Q5Y7j07CMKFVlmN6ESjQM5cFpjjQOvqcdcMD56hl.png', 'Misi', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute urure dolor in reprehenderit in voluptate velit esse cillium dolore eu fugiat nulla pariatur. exceptur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', '2022-02-23 13:43:42', '2022-03-08 15:53:46');

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
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(10, 'IQEF1Qh6CeymqeE9KaxPDK54Cdk1OAhF96UQ7pF3.png', 'Gambar 1', '2022-03-01 22:04:13', '2022-03-01 22:04:13'),
(11, 'GLGAX0MCvJvAbGPR6VT1L9ndftzqlWC2yB12WpcB.png', 'Gambar 2', '2022-03-01 22:05:19', '2022-03-01 22:05:19'),
(12, 'OWwNnclm1lMKti8Y00ouZcaIkWPFvBVz9M28RNcl.png', 'Gambar 3', '2022-03-01 22:05:31', '2022-03-01 22:05:31'),
(13, 'gVkwIbLAgBx3VjVcr1b1sJr7e1aaudC3og9pW7Fx.png', 'Gambar 4', '2022-03-01 22:05:54', '2022-03-01 22:07:58'),
(15, 'dBiLmCyG5MnE4TfALZ8oC6OmpPXjBcDLIgoZfOmY.png', 'Gambar 5', '2022-03-02 02:09:14', '2022-03-02 02:09:14'),
(16, 'Qiaf5P93bwFyAYZ5r5mJUE8hf5q02L1NYCFC8uWa.png', 'Gambar 6', '2022-03-02 02:13:07', '2022-03-02 02:13:07'),
(17, '2HXTiYBaBoJszAQDFFZLcNnR1xQ8iOazOA1c3qTj.png', 'Gambar 7', '2022-03-02 02:13:36', '2022-03-02 02:13:36'),
(18, 'YDFExzjylQQojcBaC2QSMQXZ2KKS4nHI35qNJbsP.png', 'Gambar 8', '2022-03-02 02:14:28', '2022-03-02 02:14:28');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_02_23_050704_create_news_table', 1),
(11, '2022_02_23_200537_create_about_table', 2),
(12, '2022_02_23_202253_create_abouts_table', 3),
(13, '2022_02_25_172143_create_gallerys_table', 4),
(14, '2022_03_02_072230_create_abouts2_table', 5),
(15, '2022_03_02_074250_create_about2s_table', 6),
(16, '2022_03_02_081501_create_gallery2s_table', 7),
(17, '2022_03_02_083711_create_gallerys2s_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'kprtui6p7adg1Tbj8bCSykwptIHK0U6S1ay9zAvp.png', 'Apa Kabar Kebun Binatang Saat Wabah Covid-19?', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do</p>', '2022-02-23 08:35:37', '2022-03-08 19:05:35'),
(2, 'HpYsgN1BMNp3TQOyG5NbU8hH49zJLCy8MIXpPZky.png', 'Anugrah dari Hutan Indonesia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do</p>', '2022-02-23 08:36:07', '2022-03-01 22:54:17'),
(3, '501G4jndmBZ7ukuQbV4tWE2dbOWviQCg7BNDy9KF.png', '10 Hewan Herbivora Yang Berbahaya', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do</p>', '2022-02-23 08:36:48', '2022-02-23 08:36:48'),
(8, 'SedcQmdqB6e0slF5aN4UDwH2kMnV9bBYf9GJoc1I.png', '4 Penyakit yang Ditularkan Hewan ke Manusia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do</p>', '2022-03-01 03:53:58', '2022-03-01 03:53:58'),
(9, '0iYNLpyivb98mipIOc3Y00rY029To0NPfR2LlLNj.png', 'Terumbu Karang: Pengertian, Jenis, Sebaran, dan Masalah', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do</p>', '2022-03-01 03:54:45', '2022-03-01 21:39:53'),
(10, 'EtRZPTv9J7290eiVauRMQ7t4MKgkOXc3Z1xbu8Kl.png', 'Ternyata, Tanduk Rusa Berasal dari Sel Kanker Tulang', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do</p>', '2022-03-01 03:55:24', '2022-03-01 03:55:24');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `username`, `username_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fito Satrio', 'admin', 'fitosatrioo', NULL, '$2y$10$/rAvuV5YDJ7xr3dHBUxO2Ox/50qhWrcFApaGIIpk7U2r45cFqKpXK', 'fgRttVvRFHeV9kZAvxBNTWRjXcemgrFIUYWuZy3gkj9B1H2FJ0A9TsDKiwKO', '2022-02-23 09:02:08', '2022-02-23 09:02:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
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
