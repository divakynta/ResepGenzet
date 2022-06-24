-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 04:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resepgenzet`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categories_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `created_at`, `updated_at`) VALUES
(3, 'Dessert', '2022-06-09 00:40:48', '2022-06-09 00:40:48'),
(4, 'Snack', '2022-06-09 00:49:04', '2022-06-09 00:49:04'),
(5, 'Appetize', '2022-06-09 00:55:19', '2022-06-09 00:55:19'),
(6, 'Main Dish', '2022-06-09 00:57:48', '2022-06-09 00:57:48'),
(7, 'Cake', '2022-06-09 01:31:55', '2022-06-09 01:31:55'),
(11, 'Vegetable Dish', '2022-06-20 19:49:50', '2022-06-20 19:49:50'),
(12, 'Cookies', '2022-06-20 20:11:37', '2022-06-20 20:11:37');

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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_member` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `nomor_telp` varchar(13) NOT NULL,
  `domisili` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_resep` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resep_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nama_member`, `status_id`, `nomor_telp`, `domisili`, `review_resep`, `image`, `resep_id`, `created_at`, `updated_at`) VALUES
(1, 'meleka', 1, '087307299247', 'Indonesia', 'ioiooi', '1655778696.jpg', 1, '2022-06-20 19:31:36', '2022-06-20 19:31:36'),
(2, 'doni', 3, '3980920855', 'Jakarta', 'enak sekali resepnya ampuh', '1655781223.jpg', 2, '2022-06-20 20:13:43', '2022-06-20 20:13:43'),
(3, 'joa', 1, '13212312', 'Palembang', 'wdaaaaaaafffffffff ffffssssssssssfffffffffffffffffffffffffffff', '1656071017.jpg', 1, '2022-06-21 05:56:37', '2022-06-24 04:43:37'),
(5, 'kakasi', 3, '09292992232', 'Bali', 'aaaaaaaaaawenak', '1656058775.png', 4, '2022-06-24 01:19:35', '2022-06-24 01:19:35'),
(6, 'melika', 1, '087307299247', 'Indonesia', 'wdaaee', '1656061832.jpg', 1, '2022-06-24 02:10:32', '2022-06-24 02:10:32');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_06_07_094213_create_sessions_table', 1),
(7, '2022_06_09_070113_create_categories_table', 2);

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
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `recipe_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cooking_methods` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cooking_time` int(10) NOT NULL,
  `servings` varchar(50) NOT NULL,
  `recipe_info` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `steps` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `recipe_name`, `image`, `categories_id`, `level`, `rating`, `cooking_methods`, `cooking_time`, `servings`, `recipe_info`, `ingredients`, `steps`, `created_at`, `updated_at`) VALUES
(1, 'Strawberry  Yoghurt Ogura Cake', '1654784933.jpg', 3, 'Hard', '8', 'Baking', 100, '9 potong', 'Cotton cake populer asal negeri Jiran ini adalah jenis cake terlembut di antara semua jenis cake lain, selain rendah kalori, teksturnya bagaikan kapas saat kita menikmatinya, dijamin ketagihan, yuk mommies harus coba, ya.', 'BAHAN A:\r\n\r\n90 gr tepung terigu protein rendah 5 butir kuning telur 1 butir telur 50 gr minyak goreng 120 ml yoghurt stroberi (blender 40 ml yoghurt + 80 gr stroberi segar) 1/4 sdt pewarna/esens stroberi kalau ingin cakenya lebih pinky 1.5 sdt poppy seeds\r\n\r\nBAHAN B:\r\n\r\n5 butir putih telur 1/4 sdt garam 1 sdm air jeruk nipis 90 gr gula pasir', 'CARA MEMBUAT:\r\n\r\n1. Panaskan oven suhu 160 °C, masukkan loyang besar berisi air setinggi 1 cm (Au Bain Marie).\r\n\r\n2. Blender susu/yoghurt dengan stroberi sampai halus. Sisihkan.\r\n\r\n3. Pasta A: campur semua bahan A jadi 1, aduk memakai whisk aja, sisihkan.\r\n\r\n4. Kocok putih telur, garam, dan air jeruk nipis sampai berbusa. Masukkan gula pasir bertahap sambil terus di-mixer sampai mengembang soft peak.\r\n\r\nMasukkan kocokan putih telur ke dalam pasta 5. A bertahap, aduk lipat memakai spatula sampai tercampur rata dan homogen.\r\n\r\n6. Tuang ke dalam loyang kotak 22 cm yang sudah dialasi kertas, panggang dengan sistem Au Bain Marie sekitar 70 menit.\r\n\r\nTIPS:\r\n\r\nPoppy seeds boleh ditiadakan, tidak ada perbedaan tekstur akhir. Ogura cake dengan buah asli lebih lembap daripada ogura cake jenis lain. Boleh menggunakan yoghurt rasa stroberi supaya aroma makin harum.', '2022-06-09 07:28:53', '2022-06-21 06:14:00'),
(2, 'Pizza Mini Simple Super Empuk', '1654828491.jpg', 4, 'Medium', '9', 'Baking', 60, '29 buah', 'Cotton cake populer asal negeri Jiran ini adalah jenis cake terlembut di antara semua jenis cake lain, selain rendah kalori, teksturnya bagaikan kapas saat kita menikmatinya, dijamin ketagihan, yuk mommies harus coba, ya.', 'BAHAN:\r\n200 gr tepung protein tinggi \r\n100 gr tepung protein sedang \r\n40 gr gula pasir \r\n1 butir kuning telur \r\n6 gr ragi instan \r\n1/2 sdt garam \r\n60 gr salted butter\r\n150 ml air dingin\r\n\r\nTOPPING:\r\nSaus tomat botolan/saus bolognaise\r\nMayonnaise\r\nKeju parut/mozzarella\r\nSosis sapi/daging cincang \r\nBawang bombai (potong dadu) \r\nOregano untuk taburan \r\nBayam, petik daunnya', '1. Campurkan semua bahan kering, aduk rata, tuang kuning telur dan air dingin perlahan sambil terus dikocok menggunakan mixer spiral sampai kalis. Tuang air secukupnya supaya tidak terlalu lembek.\r\n\r\n2. Tambahkan garam dan margarin sambil terus dikocok sampai rata dan elastis, tutup dengan serbet basah. Fermentasikan selama 30 menit sampai adonan mengembang.\r\n\r\n3. Ambil adonan dan timbang masing masing 30 gr dan bulatkan. Taruh di dalam loyang yang sudah diolesi margarin/kertas roti. Pipihkan ke samping dengan bantuan tangan.\r\n\r\n4. Beri saus tomat, ratakan dengan sendok. Tambahkan potongan sosis sapi, daun bayam, dan taburi keju parut. Semprotkan saus tomat dan mayonaise.\r\n\r\n5. Terakhir, taburi dengan oregano dan bawang bombai cincang. Diamkan sekitar 30 menit sampai mengembang.\r\n\r\n6. Panggang adonan selama 10 - 12 menit dengan panas oven 190-200 °C sampai matang keemasan.\r\n\r\ntips:\r\ncepat Memanggang pizza harus menggunakan api besar supaya lapisan luar crunchy dan bagian dalam mengembang matang karena tipis. Kalau api kecil membuat matang terlalu lama dan roti keras. Topping boleh diganti apa pun sesuai selera masing-masing karena ini adalah resep dasar roti pizza empuk. Adonan harus benar-benar kalis elastis, tandanya adonan jika ditarik bisa merenggang seperti selaput tipis. Tahap ini sangat menentukan empuk tidaknya roti.', '2022-06-09 07:30:27', '2022-06-13 20:03:18'),
(3, 'Sapo Tahu', '1654787035.jpg', 11, 'Easy', '7', 'Sautéing', 20, '4 porsi', 'Sapo tahu tidak harus selalu memakai seafood atau ayam untuk isiannya. Cobalah sesekali memakai sosis. Anda tidak akan kecewa dengan rasanya.', '1 buah tofu, potong-potong 2 siung bawang putih, memarkan 1/2 buah bawang bombai 3 batang sosis, potong-potong 5 lembar sawi putih 1 sdt saus tiram 1 batang wortel 1 sdm kecap asin 5 batang buncis, potong-potong 1 sdt kecap ikan 1 batang daun bawang 1 sdm kecap manis 1 batang seledri Garam, gula, merica, air secukupnya Larutan maizena untuk mengentalkan', '1. Goreng tofu sampai berkulit. Sisihkan.\r\n\r\n2. Cuci dan potong-potong sayuran.\r\n\r\n3. Tumis bawang putih dan bawang bombai sampai harum, masukkan sosis, tumis sebentar\r\n\r\n4. Masukkan wortel kemudian sayuran lain, tambahkan saus, kecap, garam, gula, merica, dan air secukupnya\r\n\r\n5. Masak sampai sayur cukup empuknya. Cicipi. Kentalkan dengan larutan maizena. Menjelang diangkat masukkan daun bawang dan seledri.\r\n\r\nTips:\r\n\r\nGoreng tofu dalam minyak yang cukup panas, cukup 1x saja membalikkan tofu supaya tidak hancur.', '2022-06-09 08:03:55', '2022-06-20 20:01:49'),
(4, 'Bihun Goreng Putih', '1656058709.jpe', 5, 'easy', '6', 'Goreng', 3, '3 porsi', 'efasssssssssss', 'ssdawd', 'dddddddddddd', '2022-06-24 01:18:29', '2022-06-24 01:18:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AzKjnioIkOK3iTof3Wcy7HF1PyePQ9RwbKDZXjfX', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS2hpTXV0enlzYkxiY1V2UkhXVEp5aTRGaHAwTmRHUHZzcm1PdHc5bSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWRpcmVjdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1656080542);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status_name`, `created_at`, `updated_at`) VALUES
(1, 'Premium Member', '2022-06-20 18:21:27', '2022-06-20 18:21:27'),
(3, 'Gold Member', '2022-06-20 18:21:53', '2022-06-20 18:21:53'),
(4, 'Silver Member', '2022-06-20 18:22:17', '2022-06-20 18:22:17'),
(5, 'Member', '2022-06-20 18:22:22', '2022-06-20 18:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0', '0812111', 'Jepang pinggiran kali', NULL, '$2y$10$erJt1N94tLes5rC4ak1oieE4mOKqG1EWVOginkV34xAqFAyXb1BMq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-07 03:08:35', '2022-06-07 03:08:35'),
(2, 'admin', 'admin@gmail.com', '1', '0823789', 'Brazil goal kapel', NULL, '$2y$10$iMCfWFTjfhaFfHgfI3iiC.n/XCd9.By253m8VakRZbHe/yQTBRkQK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-07 03:11:20', '2022-06-07 03:11:20'),
(3, 'jhoni', 'joni@gmail.com', '0', '666787980', 'kolewa', NULL, '$2y$10$m56uIy5VxqZ/nUAp5TKER.GgaIeIegsPoqkaZVG9VNnrS13dubPHO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 20:04:09', '2022-06-20 20:04:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resep_id` (`resep_id`),
  ADD KEY `status_id` (`status_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_id_2` (`categories_id`),
  ADD KEY `categories_id` (`categories_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`resep_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
