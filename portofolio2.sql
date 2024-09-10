-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 01:17 PM
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
-- Database: `portofolio2`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Wesley Kirby', 'xosu@mailinator.com', 'Mollit vel dolor ex', '2024-09-04 04:00:01', '2024-09-04 04:00:01'),
(5, 'Mufutau Watts', 'humazyqy@mailinator.com', 'Earum ab consequatur', '2024-09-04 04:05:56', '2024-09-04 04:05:56');

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
(4, '2024_08_28_100059_create_profiles_table', 2),
(5, '2024_08_28_100500_create_skills_table', 2),
(6, '2024_08_29_074632_update_profiles_table', 3),
(7, '2024_08_29_075440_update_profiles_table', 4),
(8, '2024_08_30_023936_create_experiences_table', 5),
(9, '2024_08_30_035052_create_education_table', 6),
(10, '2024_08_30_085027_update_education_table', 7),
(11, '2024_09_04_094325_create_contacts_table', 8);

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
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(55) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tahun_lulus` varchar(18) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_sekolah`, `jurusan`, `tahun_lulus`, `created_at`, `updated_at`) VALUES
(7, 'SMKN kuki', 'akuntansi', '2020', '2024-08-30 00:27:49', '2024-09-03 02:17:29'),
(8, 'Adipisci aut minim e', 'Manajemen Informatika', '2023', '2024-08-30 00:33:23', '2024-09-03 02:09:13'),
(9, 'Velit reiciendis ips', 'fullstack engineer', '96', '2024-08-30 01:56:16', '2024-09-03 02:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `perusahaan` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `posisi`, `perusahaan`, `deskripsi`, `tahun`, `created_at`, `updated_at`) VALUES
(1, 'web developer', 'kiki sofware', 'saya adalah seorang akuntan dengan pengalaman dalam pengelolaan keuangan dan pelaporan. Memiliki keahlian dalam menyusun laporan keuangan, menganalisis anggaran, dan memastikan kepatuhan terhadap standar akuntansi. Terampil dalam menggunakan perangkat lunak akuntansi dan dikenal karena ketelitian serta kemampuan analisis yang kuat. [Nama Anda] berkomitmen untuk memberikan akurasi dan efisiensi dalam setiap aspek pekerjaan akuntansi.', '2023', '2024-08-29 20:10:27', '2024-09-03 02:43:47'),
(2, 'akuntan', 'kiku finance', 'saya adalah seorang Software Engineer dengan keahlian dalam pengembangan perangkat lunak dan pemrograman. Memiliki pengalaman dalam merancang, mengembangkan, dan memelihara aplikasi serta sistem perangkat lunak dengan menggunakan berbagai bahasa pemrograman dan teknologi. Terampil dalam analisis kebutuhan pengguna, pengkodean, dan pemecahan masalah teknis. [Nama Anda] berkomitmen untuk menciptakan solusi perangkat lunak yang efisien dan inovatif serta terus berusaha untuk meningkatkan keterampilan dan pengetahuan dalam teknologi terbaru.', '2026', '2024-08-29 20:13:50', '2024-09-03 02:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `nama`, `gambar`, `email`, `deskripsi`, `no_telepon`, `created_at`, `updated_at`) VALUES
(5, 'Aziz simamora', 'images/CLWztDGaiZQDk628t1UIWYDgTSZs6rafVrFUUD4w.png', 'aziz@mailinator.com', 'Aziz pemakan segala', '085801010100', '2024-08-29 18:47:13', '2024-09-03 20:34:28');

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
('6pyZi4HYS57MI84DtQXNJlyXkdrqlpmKEKgbC2xZ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibEhxTWtHSWs2OFhuNU5VQUlBRWRZWXlFdURLUlFFZjkwUGZoOE9OMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1725448606);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skills` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skills`, `created_at`, `updated_at`) VALUES
(1, 'java', '2024-08-30 01:17:41', '2024-09-03 03:03:39'),
(2, 'php', '2024-08-30 01:26:33', '2024-09-03 03:03:43'),
(5, 'js', '2024-09-03 03:03:59', '2024-09-03 03:03:59'),
(6, 'laravel', '2024-09-03 03:04:06', '2024-09-03 03:04:06'),
(7, 'push up 100  kali', '2024-09-03 03:17:58', '2024-09-03 03:17:58'),
(8, 'lari 100 meter', '2024-09-03 03:18:08', '2024-09-03 03:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aziz Rizqi', 'azizrizqiiii@gmail.com', NULL, '$2y$12$Y4dEdI27ZT79xYSwf.PiD.Nzscl/P9zsB55KaSom076HUm7oIAG9G', NULL, NULL, '2024-08-29 00:31:32'),
(4, 'jablay', 'hmmm@gmail.com', NULL, NULL, NULL, '2024-08-28 22:14:11', '2024-09-03 19:35:33'),
(6, 'haji kiki tapi pelit', 'aki@gmail.com', NULL, NULL, NULL, '2024-08-28 22:14:42', '2024-09-03 19:35:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
