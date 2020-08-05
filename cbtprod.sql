-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 03:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbtprod`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int(11) NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `comment`, `commentable_id`, `commentable_type`, `created_at`, `updated_at`) VALUES
(1, 'Andriawan', 'Mantap sekali!', 2, 'App\\Post', '2019-07-22 21:18:22', '2019-07-22 21:18:22'),
(2, 'Ika Santika', 'Good Job Gan!', 2, 'App\\Post', '2019-07-22 21:19:45', '2019-07-22 21:19:45'),
(3, 'Unknown', 'Apaan nich? Gak guna sekali', 2, 'App\\Post', '2019-07-22 21:26:42', '2019-07-22 21:26:42'),
(4, 'Aldi Susanto', 'iya saya juga manusia biasa gan', 1, 'App\\Post', '2019-07-22 21:30:02', '2019-07-22 21:30:02'),
(5, 'Gud Gan pertahankan!', 'aku suka dia sama dia juga suka', 2, 'App\\Post', '2019-07-22 21:39:03', '2019-07-22 21:39:03'),
(6, 'kj', 'lk', 3, 'App\\Comment', '2019-07-22 22:06:23', '2019-07-22 22:06:23'),
(7, 'mantul', 'kjdf', 1, 'App\\Comment', '2019-07-22 22:06:59', '2019-07-22 22:06:59'),
(8, 'Lupa Nama', 'Ajarin dong gan, biar ane kaya raya', 3, 'App\\Post', '2019-07-22 22:32:31', '2019-07-22 22:32:31'),
(9, 'Admin', 'Santuy aja gan ane  ajarin tenang', 8, 'App\\Comment', '2019-07-22 22:33:26', '2019-07-22 22:33:26'),
(10, 'Lupa Nama', 'hm oke bang makasih ya. jadi kapan mulainya?', 8, 'App\\Comment', '2019-07-22 22:34:00', '2019-07-22 22:34:00'),
(11, 'Admin', 'nanti ane kabarin lagi ya', 8, 'App\\Comment', '2019-07-22 22:36:25', '2019-07-22 22:36:25'),
(12, 'Unknown', 'jancoklah', 4, 'App\\Post', '2019-07-22 22:39:36', '2019-07-22 22:39:36'),
(13, 'Admin', 'Jaga Bahasa anda gan', 12, 'App\\Comment', '2019-07-22 22:40:01', '2019-07-22 22:40:01'),
(14, 'Unknown', 'uhsiap admin kun', 12, 'App\\Comment', '2019-07-22 22:41:12', '2019-07-22 22:41:12'),
(15, 'Lupa Nama', 'Jadi intina kumaha ie teh?', 4, 'App\\Post', '2019-07-22 22:46:10', '2019-07-22 22:46:10'),
(16, 'Lihat aja nanti', 'apalah dayaku yang hanya manusia biasa', 1, 'App\\Post', '2019-07-22 22:48:57', '2019-07-22 22:48:57'),
(17, 'Admin', 'iya saya juga', 4, 'App\\Comment', '2019-07-22 22:49:15', '2019-07-22 22:49:15'),
(18, 'Adiska', 'mantul gan!', 6, 'App\\Post', '2019-07-22 23:33:40', '2019-07-22 23:33:40'),
(19, 'Unknown', 'Moga aja berhasil !', 3, 'App\\Post', '2019-07-22 23:42:57', '2019-07-22 23:42:57'),
(20, 'Admin', 'Makasih gan', 18, 'App\\Comment', '2019-07-23 06:13:39', '2019-07-23 06:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'drag', '2019-07-18 04:02:10', '2019-07-18 04:02:10'),
(2, 'kuli', '2019-07-18 05:54:39', '2019-07-18 05:54:39'),
(3, 'sparepart', '2019-07-22 23:28:29', '2019-07-22 23:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_07_17_131959_create_posts_table', 1),
(14, '2019_07_17_132046_create_kategoris_table', 1),
(15, '2019_07_17_132103_create_uploads_table', 1),
(16, '2019_07_23_035315_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `slug`, `content`, `foto`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, 'andriawan', 'apa sih untungnya menggunakan web framework?', 'apa-sih-untungnya-menggunakan-web-framework', 'apalah dayaku yang hanya manusia biasa', '1563457838.jpg', '1', '2019-07-18 06:50:38', '2019-07-21 05:39:01'),
(2, 'andriawan', 'Ini alasan Kenapa ayam berkokok dipagi hari', 'ini-alasan-kenapa-ayam-berkokok-dipagi-hari', 'The str_limit is autoloaded and available in both your application code and your views. Here is a simple example demonstrating the default use case. The first parameter is your string and the second is the length you want to trim it too. In this situation seven characters', '1563712830.jpg', '2', '2019-07-21 05:40:30', '2019-07-21 05:40:30'),
(3, 'andriawan', '3 Cara Mendapatkan Penghasilan Tambahan dari Internet dengan Membuat Website', '3-cara-mendapatkan-penghasilan-tambahan-dari-internet-dengan-membuat-website', 'Sebagai sebuah platform online, blog sudah lama menjadi bagian dari eksistensi seseorang di internet. Sejalan dengan perkembangan media sosial, sebuah blog kini juga sudah diperhitungkan sebagai sarana berbagi informasi. Bahkan bisa dibilang keberadaannya hampir setara dengan media online mainstream pada umumnya.\r\n\r\nMaka dari itu, tidak heran jika banyak orang yang saat ini mulai mencari cara membuat blog yang menarik dan memanfaatkannya sebagai sumber penghasilan. Profesi sebagai blogger profesional pun mulai banyak disandang orang-orang yang sudah berjaya di bidangnya masing-masing terlebih dahulu.\r\n\r\nPenghasilan yang dihasilkan pun tidak hanya melalui AdSense, tapi juga mulai merambah ke content placement hingga review. Sehingga makin lazim rasanya apabila banyak yang mengamini bahwa menjadi blogger adalah salah satu cara cepat untuk mendapatkan uang dari internet. Namun, tidak semua orang mengerti proses yang harus dijalani saat mereka ingin menghasilkan uang dari internet, khususnya melalui blog. Sebelum membuat blog untuk tujuan agar bisa mendapatkan penghasilan, Anda perlu mempunyai target jangka pendek dan panjang. Blog tidak bisa langsung menghasilkan apabila Anda baru membuatnya dalam seminggu. Perlu ketekunan ekstra dalam mengelola konten di dalamnya hingga menghasilkan traffic yang cukup tinggi.', '1563716635.PNG', '1', '2019-07-21 06:43:55', '2019-07-21 06:43:55'),
(4, 'andriawan', '5 REFERENSI WEBSITE BELAJAR CODING SECARA ONLINE', '5-referensi-website-belajar-coding-secara-online', 'Sebagai sebuah platform belajar coding secara online, Code Avengers banyak diandalkan oleh para pemula karena metode pendekatan yang menyenangkan dalam pembelajarannya. Materi-materi di dalamnya disuguhkan dengan pendekatan yang interaktif, sehingga mampu memeberikan semangat tersendiri bagi mereka yang ingin menguasai coding secara mandiri.\r\n\r\nDengan Code Avengers, Anda bisa mempelajari bahasa pemrograman untuk web development, seperti jQuery, Javascript, Pyhton, HTML dan CSS. Tidak hanya belajar seputar pemanfaatan coding untuk mengelola website, Anda pun bisa memanfaatkannya untuk membuat aplikasi maupun game.\r\n\r\nAnda akan diberikan waktu untuk menyelesaikan setiap kursusnya hingga 12 jam jika sudah masuk menjadi member di dalamnya. User dari berbagai negara di seluruh dunia pun bisa dengan mudah mengaksesnya dengan adanya fitur pilihan bahasa yang cukup beragam.\r\n\r\nSelain itu, Code Avengers juga mengakomodir komunitas yang bisa membantu Anda untuk mempelajari coding dengan lebih mudah. Jadi, jika Anda masih ingin memastikan fitur-fitur di dalamnya, manfaatkan free trial selama seminggu agar Anda bisa lebih yakin dengan layanannya.', '1563716902.PNG', '2', '2019-07-21 06:48:22', '2019-07-21 06:48:22'),
(5, 'andriawan', 'BOOTSTRAP 5 HADIR TANPA JQUERY, DI GANTI DENGAN VANILLAJS ?', 'bootstrap-5-hadir-tanpa-jquery-di-ganti-dengan-vanillajs', 'Pastinya kita semua penasaran perihal tidak lagi disertakannya JQuery ke dalam Bootstrap, tentunya ada maksud yang tersirat dan tertulis dari pihak Bootstrap sendiri. Tidak hanya Bootstrap, pihak Github sendiri malahan sudah tidak lagi menggunakan JQuery mengurusi bagian frontend nya. Nah tentunya untuk kehidupan yang lebih baik Bootstrap sudah dipastikan senada dengan Github. Di kutip dari https://hub.packtpub.com/bootstrap-5-to-replace-jquery-with-vanilla-javascript/ \r\n\r\n\"GitHub incrementally removed jQuery from their frontend mainly because of the rapid evolution of web standards and jQuery losing its relevancy over time.\"\r\n\r\nDengan kata lain, Github sudah tidak menggunakan JQuery dengan alasan, JQuery sudah tidak lagi relevan akibat evolusi standar website yang sangat pesat perkembangannya. \r\n\r\nSebetulnya penulis sendiri tidak terlalu ambil pusing mengenai terjadinya hal ini, namun tentunya ini perubahan yang cukup besar bagi sebagian orang yang sudah terbiasa menggunakan JQuery menjadi harus membiasakan diri kembali dengan yang lainnya. Dan menurut hemat saya, di dunia web development hal ini sudah biasa bukan. Dan dituntut untuk selalu update hingga ke jero annya. :)\r\n\r\nDan bisa dibilang VanillaJS itu tidak terlalu berbeda dengan Javascript yang plain, karena VanillaJS itu memang plain javascript. Kedepannya kita akan kupas mengenai perbedaan antara JQuery  dan VanillaJS beserta cara menggunakan VanillaJS.', '1563717275.PNG', '1', '2019-07-21 06:54:35', '2019-07-21 06:54:35'),
(6, 'andriawan', 'Kenapa sparepart sangat penting?', 'kenapa-sparepart-sangat-penting', 'Jadi gini jika anda ingin pergi kepasar maka anda harus membawa uang! kenapa? kalo gak bawa uang kenapa kepasar!', '1563863399.ico', '3', '2019-07-22 23:29:59', '2019-07-22 23:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `foto`, `token`, `created_at`, `updated_at`) VALUES
(1, 'sIHbMWlri5.PNG', '0.20608091065710266', '2019-07-21 22:44:17', '2019-07-21 22:44:17'),
(4, 'XzPU35dXFR.PNG', '0.46097939060180093', '2019-07-21 22:44:18', '2019-07-21 22:44:18'),
(5, 'szK0fnfFOs.PNG', '0.20943747606230056', '2019-07-21 22:44:40', '2019-07-21 22:44:40'),
(6, 'LoXfoHaZK3.PNG', '0.6924702212766354', '2019-07-21 22:44:40', '2019-07-21 22:44:40'),
(7, 'zbsYSsgbGx.PNG', '0.45792996226131844', '2019-07-21 22:44:41', '2019-07-21 22:44:41'),
(8, 'FKGoyX8vKv.PNG', '0.6364326954689932', '2019-07-21 22:44:41', '2019-07-21 22:44:41'),
(9, 'UOdiqKrM6y.PNG', '0.6824348538134621', '2019-07-21 22:44:42', '2019-07-21 22:44:42'),
(10, '2sWVgGAyMA.PNG', '0.46536987809520824', '2019-07-21 22:44:42', '2019-07-21 22:44:42'),
(11, 'bH7TSGcsjH.PNG', '0.6705801143197485', '2019-07-21 22:44:42', '2019-07-21 22:44:42'),
(12, '50kjy3Zbwy.PNG', '0.446401578266161', '2019-07-21 22:44:43', '2019-07-21 22:44:43'),
(13, 'TyzxxgraGp.jpg', '0.4154429053664239', '2019-07-21 22:58:56', '2019-07-21 22:58:56'),
(15, 'OcdkQmjmdU.jpg', '0.4262323731439108', '2019-07-21 22:58:57', '2019-07-21 22:58:57'),
(16, 'Ei7KxqXhl9.ico', '0.47937562419510105', '2019-07-21 23:31:02', '2019-07-21 23:31:02'),
(17, '3MQl60rTQY.ico', '0.3610423387617798', '2019-07-21 23:31:36', '2019-07-21 23:31:36'),
(18, 'm6QWJeMgor.ico', '0.06835374369608904', '2019-07-21 23:31:37', '2019-07-21 23:31:37'),
(20, 'GCqGthOHaK.ico', '0.3228871853904871', '2019-07-21 23:31:38', '2019-07-21 23:31:38'),
(22, 'yzZAd3fwTC.jpg', '0.48980802026937464', '2019-07-22 20:25:54', '2019-07-22 20:25:54'),
(23, 'tll1GFvvp9.ico', '0.22927204689429814', '2019-07-22 20:25:55', '2019-07-22 20:25:55'),
(25, 'Rt7R7rV4Vz.ico', '0.7758243078934695', '2019-07-22 20:26:51', '2019-07-22 20:26:51'),
(27, 'wcLAyHb3EF.png', '0.8303582182869489', '2019-07-22 20:26:52', '2019-07-22 20:26:52'),
(28, 'Z83s1n1tOx.ico', '0.9320675709969892', '2019-07-23 06:00:28', '2019-07-23 06:00:28'),
(29, 'flpYUnSaMY.ico', '0.9692619152653419', '2019-07-23 06:00:29', '2019-07-23 06:00:29'),
(30, 'A8tJnnzJAe.ico', '0.7797412654170066', '2019-07-23 06:00:29', '2019-07-23 06:00:29'),
(31, 'Qf8PYqI0Ui.ico', '0.31338542384940427', '2019-07-23 06:00:30', '2019-07-23 06:00:30'),
(32, 'pHE7Q2Jdyq.jpg', '0.007434486857916811', '2019-07-23 06:00:30', '2019-07-23 06:00:30'),
(33, 'zx1eWPtbX4.ico', '0.4778645524300422', '2019-07-23 06:00:30', '2019-07-23 06:00:30'),
(34, '7gSNlCzo1u.png', '0.2447085597168619', '2019-07-23 06:08:20', '2019-07-23 06:08:20'),
(35, 'PCKOIHCh6X.jpg', '0.2130775231127191', '2019-07-23 06:08:21', '2019-07-23 06:08:21'),
(36, 'ItSRgmzncX.png', '0.5824760766699058', '2019-07-23 07:32:47', '2019-07-23 07:32:47'),
(37, 'ouKLxMw9ie.PNG', '0.4065764629380808', '2019-07-23 07:32:48', '2019-07-23 07:32:48'),
(38, 'vTHeaFh6Hx.jpg', '0.2669645588853935', '2019-07-23 07:38:31', '2019-07-23 07:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'andriawan', 'andriawan@gmail.com', NULL, '$2y$10$pS4c80Z6t5ubPBByJvzjau5diulxkOubCPMa7d5xedLQJwephFFfO', NULL, '2019-07-18 06:48:08', '2019-07-18 06:48:08'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$AlfmCgo7.TCAKEMYkoJYNOI5s/OZYAjVoQHDczGyfVIogBLH2qki6', NULL, '2020-08-04 18:25:16', '2020-08-04 18:25:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
