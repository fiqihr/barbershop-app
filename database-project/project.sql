-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 05:45 PM
-- Server version: 10.6.8-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `barbermen`
--

CREATE TABLE `barbermen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barbermen`
--

INSERT INTO `barbermen` (`id`, `nama`, `foto`, `umur`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Wawan', 'fjsHK3ElVNjK5F0JOrLh4ulTMtKEOnSalp8vfd7q.jpg', '26', '\"Gaya rambut yang bagus adalah aksesori terbaik\"', '2023-01-27 22:21:34', '2023-01-27 22:21:34'),
(3, 'Aziz', 'uP5Ng47nKXrKSh2Oe5xsv9d6tu3HuVo1nwCjaAkl.jpg', '25', '\"Memotong rambut adalah seni berkreasi tanpa penghapus\"', '2023-01-27 22:22:01', '2023-01-27 22:22:01');

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
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `jam`) VALUES
(2, '09:00'),
(3, '10:00'),
(4, '11:00'),
(5, '12:00'),
(6, '13:00'),
(7, '14:00'),
(8, '15:00'),
(9, '16:00'),
(10, '17:00'),
(11, '18:00'),
(12, '19:00'),
(13, '20:00');

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
(5, '2022_12_06_030632_create_pelayanans_table', 1),
(6, '2022_12_07_144300_create_transaksis_table', 1),
(7, '2022_12_17_090029_create_barbermen_table', 1),
(8, '2023_01_02_091008_create_jam_table', 1);

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
-- Table structure for table `pelayanans`
--

CREATE TABLE `pelayanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelayanans`
--

INSERT INTO `pelayanans` (`id`, `jenis`, `harga`, `foto`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Massage', 10000, 'McARqQe0NoHqedtszt6VAky9AllxhRqStXk9QpEZ.png', 'Anda dapat merasakan sensasi massage. Pijatan lembut di kepala dapat membuat anda nyaman serta rileks', '2023-01-27 22:16:55', '2023-01-27 22:16:55'),
(3, 'Hair Cutting', 30000, 'bhs9y6iXylguoWEzKJ2em6coGeqzQfIC9nSAhppg.jpg', 'Saatnya tampil beda dengan gaya rambut baru. Kami menyediakan services potong rambut nyaman yang dilakukan oleh barberman profesional kami. Tentunya sampai tahap hairwash dan hairdrying', '2023-01-27 22:17:38', '2023-01-27 22:17:38'),
(4, 'Hair Vitamin', 60000, '3s64IAodx1YYzphlAnFiwFe7G7QJz3BpIUFJtTTq.png', 'Rawat rambutmu dengan pemberian vitamin yang dapat digunakan untuk memelihara kesehatan dan keindahan rambut. Barberman kami akan menunjukkan caranya', '2023-01-27 22:18:01', '2023-01-27 22:18:01'),
(5, 'Shaving', 15000, 'u7vVoLWhBXFpXL6wh80O4gVEpcOD2oYVau67KPET.png', 'Dimulai dengan handuk panas untuk merilekskan kulit wajah dan membuka pori-pori wajah lalu diikuti dengan pencukuran yang nyaman.', '2023-01-27 22:18:25', '2023-01-27 22:18:25'),
(6, 'Hair Coloring', 120000, 'LsKMhmy5HVtEH1y5f1GWfqRox3ovVPadk4EOwve8.png', 'Warnai rambutmu dengan sempurna sesuai dengan warna idaman-mu dengan barberman kami yang sudah berpengalaman.', '2023-01-27 22:18:53', '2023-01-27 22:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', '14', 'myapptoken', '876664724ece1c8920a802a9e3022debf7b6d3c5b6cfe403ad2c2efef0f44c6c', '[\"*\"]', NULL, NULL, '2023-05-14 00:10:06', '2023-05-14 00:10:06'),
(2, 'App\\Models\\User', '14', 'myapptoken', 'bfc44ed15fbe7c8e0ec9fc63e6e9329af22de1e7bfddef3ee81aa459f74a5d6c', '[\"*\"]', NULL, NULL, '2023-05-14 00:13:38', '2023-05-14 00:13:38'),
(4, 'App\\Models\\User', '14', 'myapptoken', 'fa8ac51a9348a9fe04378526392e2e43de6b4c5583628b2eb10471bd99fe27ef', '[\"*\"]', NULL, NULL, '2023-05-14 07:19:14', '2023-05-14 07:19:14'),
(6, 'App\\Models\\User', '14', 'myapptoken', '87c58c405f5c508d47a1fa8b0110e991b169e118080fd31cdc0032fe5d924d12', '[\"*\"]', '2023-05-14 07:39:07', NULL, '2023-05-14 07:38:15', '2023-05-14 07:39:07'),
(7, 'App\\Models\\User', '14', 'myapptoken', '23f44a7548ca07a2f23feba78c3cb2be64eb3c090552546b823e5bf5602f8458', '[\"*\"]', NULL, NULL, '2023-05-15 07:20:16', '2023-05-15 07:20:16'),
(8, 'App\\Models\\User', '14', 'myapptoken', 'fbc4720a03921b87c71f9ca9c4f2a55652151c4444797b1d8b2c6de17e6f7a96', '[\"*\"]', NULL, NULL, '2023-05-17 07:20:47', '2023-05-17 07:20:47'),
(9, 'App\\Models\\User', '14', 'myapptoken', '7dee14cd917bda67dc9fd4c2cb502db1dee2f51b1c9170f3d238ba3b29dc837c', '[\"*\"]', NULL, NULL, '2023-05-17 08:52:17', '2023-05-17 08:52:17'),
(10, 'App\\Models\\User', '14', 'myapptoken', '9e51b2f088dcbdfee15b0e60e586dbaf033414c076cd83942265fbbb156ddeed', '[\"*\"]', NULL, NULL, '2023-05-17 08:53:44', '2023-05-17 08:53:44'),
(11, 'App\\Models\\User', '14', 'myapptoken', '598fcae8902e2322886ef14f13623e8cb7e1a57ccd62550779c202200a1435b4', '[\"*\"]', NULL, NULL, '2023-05-17 09:06:05', '2023-05-17 09:06:05'),
(12, 'App\\Models\\User', '14', 'myapptoken', '63f62995384db90e6ed663d100163198e62e17bcd9b161d38bbb1de0c04a0550', '[\"*\"]', NULL, NULL, '2023-05-17 09:19:13', '2023-05-17 09:19:13'),
(13, 'App\\Models\\User', '14', 'myapptoken', '8c9b76902f4b8ac01957dc92a0c9b0be733e0790fe0b8c8591ad24e193f56af5', '[\"*\"]', NULL, NULL, '2023-05-17 09:20:55', '2023-05-17 09:20:55'),
(14, 'App\\Models\\User', '14', 'myapptoken', 'e41161e1782bd8b40050b39c4dadee496137f3151439bf1136d5fc11643749c6', '[\"*\"]', NULL, NULL, '2023-05-17 09:27:16', '2023-05-17 09:27:16'),
(15, 'App\\Models\\User', '14', 'myapptoken', '28375f142d245877391198f74640b29c7f4d08db9d2b331af748710247f07776', '[\"*\"]', NULL, NULL, '2023-05-17 09:32:01', '2023-05-17 09:32:01'),
(16, 'App\\Models\\User', '14', 'myapptoken', '407444f3034b767084fd0f50aff06bba760ebd382e98631beb6d64f11f0b7fdc', '[\"*\"]', NULL, NULL, '2023-05-17 09:34:25', '2023-05-17 09:34:25'),
(17, 'App\\Models\\User', '14', 'myapptoken', '6e39180ed71eff4828c0108462eb990f27ae107989d66bd9fe6532bfa5997e81', '[\"*\"]', NULL, NULL, '2023-05-17 09:35:41', '2023-05-17 09:35:41'),
(18, 'App\\Models\\User', '14', 'myapptoken', 'e94bcf1fa45a534253672becbe9152b24539f2768d76513eb17533b2204e051d', '[\"*\"]', NULL, NULL, '2023-05-18 01:00:23', '2023-05-18 01:00:23'),
(19, 'App\\Models\\User', '14', 'myapptoken', '73acb06171754dd3697fbe57bd887ab1eb3ee2eb4d44f1551fb97d7d4f728240', '[\"*\"]', NULL, NULL, '2023-05-18 01:24:57', '2023-05-18 01:24:57'),
(20, 'App\\Models\\User', '14', 'myapptoken', 'b65aa8ccdfd6c0effd896d3f46dfb9d50d218389adaf0b0d4e350a3821c5760d', '[\"*\"]', NULL, NULL, '2023-05-18 01:37:29', '2023-05-18 01:37:29'),
(21, 'App\\Models\\User', '14', 'myapptoken', '6472a665d95793fb6618833806471cfb96cb8f274b9e98877b4916c774bb2a78', '[\"*\"]', NULL, NULL, '2023-05-19 01:01:10', '2023-05-19 01:01:10'),
(22, 'App\\Models\\User', '14', 'myapptoken', '9259d29bcfd2dac9804c43eeb4e84ba2d49b9fa9ee50e2da11e16f404f0db44d', '[\"*\"]', NULL, NULL, '2023-05-20 01:08:43', '2023-05-20 01:08:43'),
(23, 'App\\Models\\User', '14', 'myapptoken', '7ad0742784c9e8e3f86e1e48eafc4e79d902358b74e995e6d03a283f8321feda', '[\"*\"]', NULL, NULL, '2023-05-27 04:55:16', '2023-05-27 04:55:16'),
(24, 'App\\Models\\User', '14', 'myapptoken', '75ac3d7482c8d18b4d48fb945afe7448b981e03e8379302fe4340ea7402b7c8b', '[\"*\"]', NULL, NULL, '2023-06-02 08:56:50', '2023-06-02 08:56:50'),
(25, 'App\\Models\\User', '14', 'myapptoken', '5bff0011574949bbe66bb7a5988c4ca61de6395911413e436ad93dd10ce70026', '[\"*\"]', NULL, NULL, '2023-06-04 00:54:58', '2023-06-04 00:54:58'),
(26, 'App\\Models\\User', '20', 'myapptoken', 'd233fb924c4be509759fe5656a6c8d61b44cfda51b2d4b1b53a91ca342e412db', '[\"*\"]', NULL, NULL, '2023-06-04 07:38:40', '2023-06-04 07:38:40'),
(27, 'App\\Models\\User', '20', 'myapptoken', '30b158065f2c231bebd67d7c469e0383c6721712d81f2387ca7afdc736399b9f', '[\"*\"]', NULL, NULL, '2023-06-04 07:39:30', '2023-06-04 07:39:30'),
(28, 'App\\Models\\User', '14', 'myapptoken', '46a3c3265363123b98d6f7b19d065ad7fc6e539ba491306c88cc4f564731c573', '[\"*\"]', NULL, NULL, '2023-06-04 07:39:58', '2023-06-04 07:39:58'),
(29, 'App\\Models\\User', '14', 'myapptoken', 'e8d61c42fed7bb25b7ae626d4a323feedf0efa065b13699600aee9125baf6b55', '[\"*\"]', NULL, NULL, '2023-06-04 07:39:58', '2023-06-04 07:39:58'),
(30, 'App\\Models\\User', '23', 'myapptoken', '852d89c8eeae0a3c3d788a44ffe3c187ab476dc8888f5a884c04c47f3a2eb761', '[\"*\"]', NULL, NULL, '2023-06-04 08:01:56', '2023-06-04 08:01:56'),
(31, 'App\\Models\\User', '23', 'myapptoken', 'f980138d2ed9d11c5ba300372dedf2596024ca00544e523dc6a5869652444c45', '[\"*\"]', NULL, NULL, '2023-06-04 08:02:51', '2023-06-04 08:02:51'),
(32, 'App\\Models\\User', '23', 'myapptoken', '34d7dfdbd36c46d31ece03d7194135c7c59677a6fed5ecdd23985f9b7f3e5dbb', '[\"*\"]', NULL, NULL, '2023-06-04 08:04:59', '2023-06-04 08:04:59'),
(33, 'App\\Models\\User', '16', 'myapptoken', 'b7ebf3c631c49ea6348d070c2982385488dfb31934cfb75dd39b72895b59b718', '[\"*\"]', NULL, NULL, '2023-06-04 08:06:17', '2023-06-04 08:06:17'),
(34, 'App\\Models\\User', '15', 'myapptoken', 'ed3f4b56c950f73a0abcddc009ccfff5d7814fdee185f32a42de6533c308a86c', '[\"*\"]', NULL, NULL, '2023-06-04 08:07:33', '2023-06-04 08:07:33'),
(35, 'App\\Models\\User', '28', 'Api Token of Ehsan', 'd86b625f4deb080a7f216cc195bb6528c9e75de6e2ac1cdd2a9a9a7731075858', '[\"*\"]', NULL, NULL, '2023-06-04 09:00:43', '2023-06-04 09:00:43'),
(36, 'App\\Models\\User', '14', 'myapptoken', 'fa3e8952d4d5df20e352259395c292aa45938bbb7a5b2a1870e744c464e2e8bc', '[\"*\"]', NULL, NULL, '2023-06-04 09:09:10', '2023-06-04 09:09:10'),
(37, 'App\\Models\\User', '15', 'myapptoken', '21799a3a2dc1c6e275dff45ecedb3e3dddb9d5119b010c17db814dc7527e7006', '[\"*\"]', NULL, NULL, '2023-06-04 09:09:55', '2023-06-04 09:09:55'),
(38, 'App\\Models\\User', '19', 'myapptoken', 'cc375adb52e22b9c42fe2fa60e08caafa5ce0bebd381af886f430284b4d04901', '[\"*\"]', NULL, NULL, '2023-06-04 09:10:34', '2023-06-04 09:10:34'),
(39, 'App\\Models\\User', '23', 'myapptoken', 'd1153d34e623e79416dd7af1e1da615c364bca5d8990267231228edb6193be60', '[\"*\"]', NULL, NULL, '2023-06-04 09:10:54', '2023-06-04 09:10:54'),
(40, 'App\\Models\\User', '31', 'myapptoken', 'a76a8afd80547c8ac0f6c2b9e2eb6c3d01cbf5e6fe77b633cd8ef06796fc9cdf', '[\"*\"]', NULL, NULL, '2023-06-04 09:12:48', '2023-06-04 09:12:48'),
(41, 'App\\Models\\User', '32', 'myapptoken', '8521135643e5bb8363e4aacd9aec80412348809ae772a87f3af151ee7cb6e512', '[\"*\"]', NULL, NULL, '2023-06-04 09:21:45', '2023-06-04 09:21:45'),
(42, 'App\\Models\\User', '38', 'myapptoken', '0cde5e8f45bc5d43d1114408e4c36b25e71b34713e104adbcb9b1ecc01f3408e', '[\"*\"]', NULL, NULL, '2023-06-04 10:37:16', '2023-06-04 10:37:16'),
(43, 'App\\Models\\User', '26', 'myapptoken', '281cbc5db82edfcb9d0439b827e0a24a603156cd550043c5f4428f815c0e6d4e', '[\"*\"]', NULL, NULL, '2023-06-04 10:38:03', '2023-06-04 10:38:03'),
(44, 'App\\Models\\User', '40', 'myapptoken', 'be0131b6b458094e385f5cb1bee29b7fe54733dfdc5e7dfc8d1441abc445ef32', '[\"*\"]', NULL, NULL, '2023-06-04 10:42:13', '2023-06-04 10:42:13'),
(45, 'App\\Models\\User', '41', 'myapptoken', 'ba59dabf6efe58e100fe60cfd130d81d0dfd84f83b775066e65aed682d6aabf4', '[\"*\"]', NULL, NULL, '2023-06-04 10:43:54', '2023-06-04 10:43:54'),
(46, 'App\\Models\\User', '42', 'myapptoken', 'c68e7618ace8908aea8e6231b9c567d416d5776e7c76761b57a9cd2812506380', '[\"*\"]', NULL, NULL, '2023-06-04 10:46:00', '2023-06-04 10:46:00'),
(47, 'App\\Models\\User', '40', 'myapptoken', '5f5d3f1ada6508f823bff292a2e2800804b6e7a2a04e13f3069ec03e632a36c4', '[\"*\"]', NULL, NULL, '2023-06-04 11:13:56', '2023-06-04 11:13:56'),
(48, 'App\\Models\\User', '40', 'myapptoken', 'a1fe2013392a5be452a0fab23bb5c6a7b83b725e01ddae6eb2b8eff73710f382', '[\"*\"]', NULL, NULL, '2023-06-04 11:14:49', '2023-06-04 11:14:49'),
(49, 'App\\Models\\User', '40', 'myapptoken', 'e76332875ce682a542702ff8ddab0ed676abff901ee889c62f988ab41137f36e', '[\"*\"]', NULL, NULL, '2023-06-04 11:15:24', '2023-06-04 11:15:24'),
(50, 'App\\Models\\User', '40', 'myapptoken', '85be1ae1fd75d9f284079be844385f899cf554fd803dc6cd5838cc2679528dcc', '[\"*\"]', NULL, NULL, '2023-06-04 11:15:52', '2023-06-04 11:15:52'),
(51, 'App\\Models\\User', '40', 'myapptoken', '94515e6e19e2de4b5f57e5743ffc9d34185f3fb2690d1a79ddb01280e083e19d', '[\"*\"]', NULL, NULL, '2023-06-04 11:16:44', '2023-06-04 11:16:44'),
(52, 'App\\Models\\User', '40', 'myapptoken', '9c2c0c389d89cdfaaef681a42d3a95f8cc386a7d0ec3af161c818caa094f1e6d', '[\"*\"]', NULL, NULL, '2023-06-04 11:16:44', '2023-06-04 11:16:44'),
(53, 'App\\Models\\User', '40', 'myapptoken', '8fa4787f02c444f4d4ebdac7dbf36c4ab3ae5f473641074a75f73eff17f165f4', '[\"*\"]', NULL, NULL, '2023-06-08 05:56:37', '2023-06-08 05:56:37'),
(54, 'App\\Models\\User', '43', 'myapptoken', '2cb43aec16fb153400650d282b24e7f27ca0468072048b47318752bc9dfb75fb', '[\"*\"]', NULL, NULL, '2023-06-09 22:36:18', '2023-06-09 22:36:18'),
(55, 'App\\Models\\User', '44', 'myapptoken', '371bf1b6b96576b6c688bb08472bec89e0c5cd61d6c549b32139bf63b8df5c81', '[\"*\"]', NULL, NULL, '2023-06-13 08:56:50', '2023-06-13 08:56:50'),
(56, 'App\\Models\\User', '44', 'myapptoken', '67d17a1776bc245a39853ad18dc51103e514845a6ff52ac69fbf0ec15537f14c', '[\"*\"]', NULL, NULL, '2023-06-14 11:19:29', '2023-06-14 11:19:29'),
(57, 'App\\Models\\User', '45', 'myapptoken', 'a8d2270be2efa23fb68b1d4516515e547ef90d0a3fc911e323bd012130e2a0c3', '[\"*\"]', NULL, NULL, '2023-06-14 11:59:18', '2023-06-14 11:59:18'),
(58, 'App\\Models\\User', '45', 'myapptoken', '18a885d19c9e57f80f63862a509f66975e6c2c8b1537f5f385351aaa3ececf53', '[\"*\"]', NULL, NULL, '2023-06-15 09:49:16', '2023-06-15 09:49:16'),
(59, 'App\\Models\\User', '46', 'myapptoken', '926f17c8e0acce84665874bbea19a190f50d3ab065c0941bb97c549ec813992d', '[\"*\"]', NULL, NULL, '2023-06-15 11:27:23', '2023-06-15 11:27:23'),
(60, 'App\\Models\\User', '44', 'myapptoken', 'd1f08963b05d4cffad7a4e3d3209c8c586ffda0b32abe03e5bc9cf27e4c3d1a9', '[\"*\"]', NULL, NULL, '2023-06-16 01:43:55', '2023-06-16 01:43:55'),
(61, 'App\\Models\\User', '47', 'myapptoken', 'bb59ecf7d6c66e33f88295acb759ab6a7f70d5bc233c7d56bc29bf801a649b29', '[\"*\"]', NULL, NULL, '2023-06-16 01:50:01', '2023-06-16 01:50:01'),
(62, 'App\\Models\\User', '47', 'myapptoken', 'ae17e5aab49c9a8784b759dc706e28164f06c0107da19572558860ff97d0524f', '[\"*\"]', NULL, NULL, '2023-06-16 03:18:38', '2023-06-16 03:18:38'),
(63, 'App\\Models\\User', '60', 'myapptoken', '75b55851598ce2207ff0749776cc24371d67cee7be0e6c8183de058e1f83474c', '[\"*\"]', NULL, NULL, '2024-02-01 01:29:26', '2024-02-01 01:29:26'),
(64, 'App\\Models\\User', '60', 'myapptoken', 'db72cb2a3a5467a9e8242bebac4d8e55c57dc9ae46cc9a85bc5991cb8469adc2', '[\"*\"]', NULL, NULL, '2024-02-01 01:46:25', '2024-02-01 01:46:25'),
(65, 'App\\Models\\User', '60', 'myapptoken', '35ac2cae5f8473cde86374e1d000c8dc08d70187d702dfc81fa3760fbf9ab876', '[\"*\"]', NULL, NULL, '2024-02-01 02:02:05', '2024-02-01 02:02:05'),
(66, 'App\\Models\\User', '61', 'myapptoken', 'b17f4aba6db80fe0c312665b2aefca53e2e4799b860cfbd946b58d4ff26b91a6', '[\"*\"]', NULL, NULL, '2024-02-10 23:33:46', '2024-02-10 23:33:46'),
(67, 'App\\Models\\User', '61', 'myapptoken', '0b4be5309c9506e82fc0f275c35b79cadd641d1236ffbc4487cdc87c4a7c11fc', '[\"*\"]', NULL, NULL, '2024-02-28 06:19:09', '2024-02-28 06:19:09'),
(68, 'App\\Models\\User', '62', 'myapptoken', '54eab73e5935e2c5854c66bd77905d12b6414275bb712edcd41cda9d9af29b68', '[\"*\"]', NULL, NULL, '2024-03-19 09:10:48', '2024-03-19 09:10:48'),
(69, 'App\\Models\\User', '62', 'myapptoken', 'b0500032e710408adca4c38bb6629b48a4ad4832a91226c3538ddf62e8a6d9cf', '[\"*\"]', NULL, NULL, '2024-03-19 10:14:34', '2024-03-19 10:14:34'),
(70, 'App\\Models\\User', '62', 'myapptoken', '1d008a4fd725bcb943dc54ad8991e3ccc47231dd1223c851d084908e4d758498', '[\"*\"]', NULL, NULL, '2024-03-19 11:04:50', '2024-03-19 11:04:50'),
(71, 'App\\Models\\User', '62', 'myapptoken', 'a4527bc4fbb0e1fa5afd818e06d9f4c4d01b0212a7ad93b8caf6cd1edc48aada', '[\"*\"]', NULL, NULL, '2024-03-19 11:21:17', '2024-03-19 11:21:17'),
(72, 'App\\Models\\User', '62', 'myapptoken', '6448c82657dcf064405caed14fc69b780babebab4626f91cfe9976322aa7130d', '[\"*\"]', NULL, NULL, '2024-03-19 12:52:31', '2024-03-19 12:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelayanan_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barberman_id` int(10) UNSIGNED NOT NULL,
  `status_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Belum Lunas',
  `status_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Menunggu Pembayaran',
  `total_pembayaran` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `pelayanan_id`, `user_id`, `tanggal`, `jam`, `barberman_id`, `status_pembayaran`, `status_transaksi`, `total_pembayaran`, `created_at`, `updated_at`) VALUES
(46, 5, 61, '2024-02-13', '11:00', 2, 'Belum', 'Belum', 15000, '2024-02-10 23:56:31', '2024-02-10 23:56:31'),
(49, 3, 62, '2024-03-21', '11:00', 2, 'Lunas', 'Selesai', 30000, '2024-03-19 11:24:26', '2024-03-19 11:24:26'),
(50, 2, 62, '2024-03-25', '13:00', 2, 'Belum', 'Belum', 10000, '2024-03-19 11:25:05', '2024-03-19 11:25:05'),
(51, 4, 62, '2024-03-21', '13:00', 2, 'Belum', 'Belum', 60000, '2024-03-19 12:52:57', '2024-03-19 12:52:57'),
(52, 3, 62, '2024-04-02', '10:00', 2, 'Belum', 'Belum', 30000, '2024-03-30 23:27:16', '2024-03-30 23:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `telepon`, `alamat`, `jenis_kelamin`, `foto`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nicholas', 'nc@mail.com', NULL, '$2y$10$edRzArrQZS0t4bihM5jKFOS9uCL1WTAgki9xl9BraZ5dKOmMxx3Am', '089786564352', 'Jl. Melati no. 23 Sleman', 'Laki-laki', 'Ek56i8B7YxjdTBfk9M83FoIgg26dIFCrwfBeK4WP.jpg', 'Admin', NULL, '2023-01-27 07:30:54', '2023-01-27 07:30:54'),
(14, 'fiqih', 'fiqih@mail.com', NULL, '$2y$10$oKxtmW290t6Mt9rkBjD7TeUmZlz5bxUU5gXgUwEtxEsUpYkpJ.DKO', '0878654323', 'Banjarnegara', 'Laki-laki', 'lKUwCcjqPWxWljTSCA0mlihNvyCzdAqHSsS8RiHn.jpg', 'user', NULL, '2023-01-27 22:08:11', '2023-01-27 22:08:11'),
(15, 'naruto', 'n@mail.com', NULL, '$2y$10$dBU9F8uvQF24RYYIhGB6A.YnFfdy.W5jUN4200/u22Yz3iuWEQLY6', '089765754162', 'Jl. Mawar no 34 Sleman', 'Laki-laki', 'default.jpg', 'user', NULL, '2023-01-27 23:44:47', '2023-01-27 23:44:47'),
(16, 'Akun ke 2', 'akun2@mail.com', NULL, '$2y$10$R3YBb/uJ0zornhfKwAQGNeXDvM9GQ/1.kmLcIh/8.o.IW4vj/xzg6', '081234567890', 'Yogyakarta', 'L', NULL, 'user', NULL, NULL, NULL),
(17, 'Akun ke 3', 'akun3@mail.com', NULL, '$2y$10$9d83LHE3GVeGmuBz2yhYnOrAPhkCq4fqOOaKXkFCOJ1mTJokfqQwW', '081234567890', 'Yogyakarta', 'L', NULL, 'user', NULL, NULL, NULL),
(18, 'Somad', 'somad@mail.com', NULL, '$2y$10$yeVc7oFAGFzxTXI4z/R7vO86rfXBQQqhsiXgs5DxBDHX/GGXG8nNm', '081567245132', 'Nganjuk', 'L', NULL, 'user', NULL, NULL, NULL),
(19, 'Dudung', 'dudung@mail.com', NULL, '$2y$10$cgG02V8fzzKigJ/hW8ZMH.TgGV.F4XyyKzcVY2lGfys/qSdUC3xdS', '081567245132', 'Betawi', 'L', NULL, 'user', NULL, NULL, NULL),
(20, 'fadli', 'fadli@mail.com', NULL, '$2y$10$NkT2ZDNcaFaml6RZ.667o.X1w5MZvt0ArSumWxgWEkApihMknBLSe', '087483994576', 'Jakarta', 'L', NULL, 'user', NULL, NULL, NULL),
(21, 'rosi', 'rosi@mail.com', NULL, '$2y$10$FKw7.XDGlbfeedZAZCXm3eYTUdndrvZU0Iy1e/s1YcGm6cwYFepD6', '08978675645', 'Banjarnegara', 'P', NULL, 'user', NULL, NULL, NULL),
(22, 'abc', 'abc@mail.com', NULL, '$2y$10$pqiOfU35Qo23o1Emn5Z0Pe5BBvhiNSg5VZKvy2qQv01LVsmM5R1By', '0897', 'Yogyakarta', 'L', NULL, 'user', NULL, NULL, NULL),
(23, 'nokia', 'nokia@mail.com', NULL, '$2y$10$uf6ECgx6PvZc8iMgoqpvI.FmI4G0EgJi1p7mGvWonjQFZgloNxZHO', '08978676354', 'Jkt', 'L', NULL, 'user', NULL, NULL, NULL),
(24, 'Ipin', 'ipin@mail.com', NULL, '$2y$10$RruxVFGUkLI0qoensSVYq.EgCioU0DbbQuk4wLhTfdowBZp21DXnW', '081567245133', 'Betawi', 'L', NULL, 'user', NULL, NULL, NULL),
(25, 'Upin', 'Upin@mail.com', NULL, '$2y$10$jim2naJuBqTBQruALhkHC.S.AvtMC4j2uQZ6qpZ1jnhtusKyCIG8G', '081567245134', 'Betawi', 'L', 'default.jpg', 'user', NULL, NULL, NULL),
(26, 'opah', 'opah@mail.com', NULL, '$2y$10$NExye9EOd8N3uzJuHzk9p.G6CL/m9nX8/NTgUhuQioCSKDNtugvua', '08786756432', 'Malaysia', 'P', 'default.jpg', 'User', NULL, '2023-06-04 08:33:20', '2023-06-04 08:33:20'),
(27, 'Ros', 'ros@mail.com', NULL, '$2y$10$skNSrrUGCv5EA20PanoEK.Vh0KjUbBOk6RZPO2sQWjLkEk8QPUNEC', '08977856554', 'Malaysia', 'P', 'utiCn5DtI4FzHiMatGigth0Rk5BM3FqKUFlpVNXH.png', 'User', NULL, '2023-06-04 08:36:37', '2023-06-04 08:36:37'),
(28, 'Ehsan', 'ehsan@mail.com', NULL, '$2y$10$2maeJZvWCgofWtPUjTP/k.lVAwOoCvjZVK1qv3.Hn8SbqwnBk7Kk2', '081567245139', 'Malaysia', 'L', 'default.jpg', 'user', NULL, '2023-06-04 09:00:43', '2023-06-04 09:00:43'),
(29, 'Mail', 'mail@mail.com', NULL, '$2y$10$9NQj.QA9EdqPv2BcXBrvl.0ueRmG894Rw2kH9MeqbyK4h8hLNPlD.', '081567245180', 'Malaysia', 'L', 'default.jpg', 'user', NULL, '2023-06-04 09:03:30', '2023-06-04 09:03:30'),
(30, 'susanti', 'susanti@mail.com', NULL, '$2y$10$bpJ/psECma1WBoYhcuRM6Ov1edP5zwzh7aALLRSWlnqQGMlN57Gtm', '089764536228', 'Indonesia', 'Perempuan', 'default.jpg', 'user', NULL, '2023-06-04 09:05:29', '2023-06-04 09:05:29'),
(31, 'jarjit', 'jarjit@mail.com', NULL, '$2y$10$qfRq1jqfqjA8FVe.NznW0O/3fsZ3L.PKr7KCB.UABPYGmwuvinMFe', '081567245180', 'Malaysia', 'L', 'default.jpg', 'user', NULL, NULL, NULL),
(32, 'devian', 'devian@mail.com', NULL, '$2y$10$cb1gZBh2vM7F/dWe12bXNuc2P0ucPBx1oTRu18bTEqJL3/NUHoUES', '8724562876', 'DKI jkt', 'L', 'default.jpg', 'user', NULL, NULL, '2023-06-05 02:27:21'),
(33, 'devi', 'devi@mail.com', NULL, '$2y$10$WHU8N7HcJbiXqRB.WhI7VO9gz79lYaQN0P8XvSVCLO/X3VFVVGJ6e', '081567245198', 'Malaysia', 'L', 'default.jpg', 'user', NULL, '2023-06-04 09:27:04', '2023-06-04 09:27:04'),
(34, 'Adi', 'adi@mail.com', NULL, '$2y$10$NauIM4dwskNav0cMONC36Ofrt2yYFZvbaWEL.7hPoeNMZsvIe.emu', '07967', 'Jogja', 'Laki-laki', 'default.jpg', 'user', NULL, '2023-06-04 09:38:22', '2023-06-04 09:38:22'),
(35, 'rasya', 'rasya@mail.com', NULL, '$2y$10$QUwVResYkPbUdTYaZJEQJO3NiPAcgbJdpZt5ECHmmQzZjcjMtTgGq', '081567245198', 'Malaysia', 'L', 'default.jpg', 'user', NULL, '2023-06-04 09:46:10', '2023-06-04 09:46:10'),
(36, 'abi', 'abi@mail.com', NULL, '$2y$10$zzdYmdiQlZB7TBdsJWA0quPZW/ulX3gyfcj/fOf.KMfXJtXl1xlCa', '081567245178', 'JKT', 'L', 'default.jpg', 'user', NULL, '2023-06-04 10:07:48', '2023-06-04 10:07:48'),
(37, 'juley', 'juley@mail.com', NULL, '$2y$10$ArjPn.N4tfzH533EyF6B9O6gRoezd0PyUBxLhQd/ojTiuyLWMBi6W', '081567245178', 'JKT', 'L', 'default.jpg', 'user', NULL, '2023-06-04 10:27:45', '2023-06-04 10:27:45'),
(38, 'haya', 'haya@mail.com', NULL, '$2y$10$oKxtmW290t6Mt9rkBjD7TeUmZlz5bxUU5gXgUwEtxEsUpYkpJ.DKO', '081567245178', 'JKT', 'L', 'default.jpg', 'user', NULL, '2023-06-04 10:28:22', '2023-06-04 10:28:22'),
(39, 'hayabus', 'hayabus@mail.com', NULL, '$2y$10$GkOqst.vW50Tir4jUgbZZOeFRw0.IseSoWn/yO1H16UbdzbRFyabW', '081567245178', 'JKT', 'L', 'default.jpg', 'user', NULL, '2023-06-04 10:36:08', '2023-06-04 10:36:08'),
(40, 'harley', 'harley@mail.com', NULL, '$2y$10$RIOmfcvG3rDpKXva9eeZ3O/e4nAfZXahi4XCjO.yFLFqhf5jT/kJ2', '081567245178', 'Jl. Mawar no 34 Sleman', 'Laki-laki', 'default.jpg', 'user', NULL, '2023-06-04 10:41:47', '2023-06-04 10:41:47'),
(41, 'argus', 'argus@mail.com', NULL, '$2y$10$GjhtMIa2DA7uB/D470RCfevjzKATrnb8wrrWVoC.lEGt6uxQnOgF.', '089786564220', 'LOD', 'Laki-laki', 'default.jpg', 'user', NULL, '2023-06-04 10:43:33', '2023-06-04 10:43:33'),
(42, 'lesley', 'lesley@mail.com', NULL, '$2y$10$DRWwid6ij2Q0p4hV0vEGUeHvV0pnEZ1sk9IN6udxvobjgHZNSLO8a', '68758', 'LOD', 'Perempuan', 'default.jpg', 'user', NULL, '2023-06-04 10:45:37', '2023-06-04 10:45:37'),
(43, 'Gusion', 'gs@mail.com', NULL, '$2y$10$yDwtMMVKJjl2lfd4XdICKeHy98MZLYf0aMubsd.Y4B4tCtrBmOT0q', '087824103668', 'Jl. Cempaka No.46 Sleman, Yogyakarta', 'Laki-laki', 'AgLTNNCO6OlX382kuAkV1bILIesuNxc6XzvOJnpx.jpg', 'user', NULL, '2023-06-09 22:35:59', '2023-06-13 08:25:37'),
(44, 'Chou', 'chou@mail.com', NULL, '$2y$10$ZgY49jw5UCs5irG8Yg9gz.46LbM0Ty.YYFaVBiEqPTbTy7L3WUT..', '087824103668', 'Jl. Anggrek no.10 Sleman, Yogyakarta', 'Laki-laki', 'default.jpg', 'user', NULL, '2023-06-13 08:56:35', '2023-06-13 08:56:35'),
(45, 'Heri S', 'heris@mail.com', NULL, '$2y$10$czPVXoUxYLzhUNkvzFRksOVPRZJBf2fjtiuyIy67xlJX7bVjso1nO', '087824103669', 'Jl. Melati no.23 , Sleman, Yogyakarta', 'Laki-laki', 'rkapZMabvREcaS3eMbXGBy1NVQYKePaUaYZuG3zS.jpg', 'user', NULL, '2023-06-14 11:58:39', '2023-06-14 12:04:31'),
(46, 'Abdul S', 'abduls@mail.com', NULL, '$2y$10$HmZAlq9668FY/4IXdpON7eww1mHRbe0fzxAysohilUyRBouNf339u', '0897865643411', 'Jl. Melati no.20 Sleman, Yogyakarta', 'Laki-laki', '3MvJBW1f1A3ihgtcHmk6SwHDmBBFTCfqns4PTY0P.jpg', 'user', NULL, '2023-06-15 11:26:47', '2023-06-15 11:30:58'),
(47, 'Abduls', 'abdul@mail.commm', NULL, '$2y$10$fjqIHuwbo6ISAndJd.ngP.aSlvjMqH3ChRhYh24jTEuDlEWOWbWqq', '087876463827786', 'Jl. Mawar no.98 Ngaglik, Sleman, Yogyakartaaa', 'Laki-laki', 'ZlexaRSutYxDE8AwSQ9IfiBJVPv36mya5V4LOOLj.png', 'user', NULL, '2023-06-16 01:49:49', '2023-06-16 03:20:02'),
(48, 'Rafi', 'rafi@mail.com', NULL, '$2y$10$FfLUjkXUqQ4xpCOJWG0RmOwJYqMtF9E..Llajo2/DPDU9VzvyO/9y', '087463526475', 'Yogyakarta', 'L', NULL, 'User', NULL, NULL, NULL),
(49, 'sdf', 'sdf@gsdf.com', NULL, '$2y$10$pQkkJ1x4EdNQa50uF6.X..FcoBNGR/0ZV5tNTOfmt4DjC9k3dX9TS', '12345678', 'Jogja', 'P', 'B1o7xqnbRHrAkYchW1ret0gce3nw7KH3p2mptUlR.jpg', 'User', NULL, NULL, NULL),
(50, 'aji', 'aji@mail.com', NULL, '$2y$10$HrvLKA/W30lR0snaXdj/reD2DlPrZhv1YRkKJvvtjHlcF3N7clj5e', '087982738221', 'Jakarta', 'P', 'default.jpg', 'User', NULL, NULL, NULL),
(51, 'asdadsd', 'asd@mail.com', NULL, '$2y$10$DdYzRI.faz89rSyH.jfHZOHeZTw5mhpryJgxJqMIBSKx0QCB2.Rt6', '1234234', 'Jakarta', 'L', NULL, 'User', NULL, NULL, NULL),
(52, 'bcdka', 'bckda@mail.com', NULL, '$2y$10$iRouh2ATCPhlFfo3swrM6uiEDcf.2qmGguW1ybRFr6F3FaHxKcwOi', '087937336228', 'Jakarta', 'L', 'XjaoDckYLyjWiOOVG1BdFkjKWiMzvM9tCaPmcvMB.png', 'User', NULL, '2023-11-17 09:51:42', '2023-11-17 09:51:42'),
(53, 'leviii', 'levii@mail.com', NULL, '$2y$10$pRCzRa3gMp2PeoteCsZwpuLhBN2GwufS2VDf.v4KS9tFg2bE.wRbq', '087867564352', 'Yogyakarta', 'L', 'gBxQd2dfpVFoap0krpcbeVvbFaljnV8Nf3myQVz6.png', 'User', NULL, '2023-11-17 09:55:01', '2023-11-17 09:55:01'),
(54, 'papapa', 'papap@mail.com', NULL, '$2y$10$ahRpD4ay4srexeFZ7t9Z7.hfpJWHEQtfor2PQXr2I4CIyQj11Yn5m', '089675345201', 'Jakarta', 'P', '43LwS1s5iDgEGktJYp3Q0iBEpp5hAILWYIfFRDj3.jpg', 'User', NULL, '2023-11-17 09:56:02', '2023-11-17 09:56:02'),
(55, 'pasda', 'pasda@mail.com', NULL, '$2y$10$gQ4fsIkGi4Iv0UD2rC8Ypu0PjMpx6dSGAs/XaF24cvPUIIyn6OwOC', '089786564342', 'Yogyakarta', 'P', 'default.jpg', 'User', NULL, '2023-11-17 09:58:24', '2023-11-17 09:58:24'),
(57, 'dabaafgfg', 'dabaafgfg@mail.com', NULL, '$2y$10$OehUaWOjAdgt.1XDm4UDVO/gxbbpToWtWDWUCF3Gyj2lXRS8JHUXm', '089675463288', 'Singapura', 'P', 'Te718796FAxbt9GTKbOkDE1enjAEQnhexmN1K200.jpg', 'User', NULL, '2023-11-17 10:08:19', '2023-11-17 10:08:19'),
(58, 'asdsadasd', 'asdasdSS@mail.com', NULL, '$2y$10$mFgUtFzRr4e4IZ5tRUb.2uJf4nt/eKXlIP7QHxPSe03NJoG3B.w7W', '08978676552783', 'Yogyakarta', 'L', NULL, 'User', NULL, '2023-11-17 10:14:26', '2023-11-17 10:14:26'),
(59, 'udin', 'udin@mail.com', NULL, '$2y$10$7WN3yAh5PRberVISbS9qNefnrZuOhepDpugBx9mU1KXooDIidA1hi', '087824103668', 'Sleman, DIY', 'L', 'default.jpg', 'Admin', NULL, '2024-01-31 23:07:09', '2024-01-31 23:07:09'),
(60, 'Syamsul', 'syamsul@mail.com', NULL, '$2y$10$hUA/yP6VEfOjfKkzDcsc/.eWkJusyPsjFUmnypSSpMGA7gZselI1K', '087824103668', 'Banjarnegara, Jateng', 'Laki-Laki', 'mg8jDzEIi59c4i9JrHpdiiB37Rp0N9vQws29x6CF.jpg', 'user', NULL, '2024-02-01 01:29:16', '2024-02-01 02:03:16'),
(61, 'Rafif Khairudin', 'rafif@mail.com', NULL, '$2y$10$QvxP6b2tXrUHS6GNYr5zv.ZsrbihgDZ1mq5xn8rRBvX91kV7J9fGy', '08978675463', 'Banjarnegara, Jawa Tengah', 'Laki-Laki', 'default.jpg', 'user', NULL, '2024-02-10 23:33:42', '2024-02-28 06:51:29'),
(62, 'Rudi Tabuti', 'rudi@mail.com', NULL, '$2y$10$FM6l7cItXdkHiv8EjKyNN.Qfvo2yqfVM9BN.ov1uKzI.ZsrHEhebW', '087824103889', 'Sleman,DIY', 'Laki-laki', 'default.jpg', 'user', NULL, '2024-03-19 09:09:55', '2024-03-19 11:03:50'),
(63, 'Admin', 'admin@mail.com', NULL, '$2y$10$6AaqgPGi10zwviukko7oXeN9EpIysmhb1AkmhIzK3zqu/Pa.22kby', '087867556443', 'Sleman, DIY', 'L', 'default.jpg', 'Admin', NULL, '2024-03-19 11:09:31', '2024-03-19 11:09:31'),
(64, 'sdsdf', 'dsdf@mail.com', NULL, '$2y$10$O038vXJlm2GIp9oFkg4uOuRqIzMPGgwRep6j7uRTwq8pftizlSxBy', '723647324', 'sdfsdf', 'L', 'default.jpg', 'User', NULL, '2024-03-30 23:19:03', '2024-03-30 23:19:03'),
(65, 'Anjasmara', 'anjasmara@mail.com', NULL, '$2y$10$pDx78DEH1v8VLh42iu2YF.DhHzNl.pdRrI8rNjUMdLRTJmvbdnNIu', '089786564332', 'Sleman, DIY', 'Laki-laki', 'default.jpg', 'user', NULL, '2024-04-28 07:31:03', '2024-04-28 07:31:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barbermen`
--
ALTER TABLE `barbermen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
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
-- Indexes for table `pelayanans`
--
ALTER TABLE `pelayanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
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
-- AUTO_INCREMENT for table `barbermen`
--
ALTER TABLE `barbermen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pelayanans`
--
ALTER TABLE `pelayanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
