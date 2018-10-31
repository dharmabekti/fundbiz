-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 06:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwarungmodal`
--

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_11_07_030036_create_roles_table', 1),
(3, '2017_11_07_030323_create_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id_produk` int(10) NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `dana` int(20) NOT NULL,
  `deskripsi_produk` varchar(225) NOT NULL,
  `picture` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id_produk`, `nama_produk`, `dana`, `deskripsi_produk`, `picture`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'hjhj', 500000, 'grgt', '1510200668.jpg', 'hjhj', '2017-11-08 21:11:08', '2017-11-08 21:11:08'),
(2, 'yguyu', 90900, 'hjhi', '1510202538.jpg', 'yguyu', '2017-11-08 21:42:18', '2017-11-08 21:42:18'),
(3, 'telo rebus', 500000, 'banyak kali', '1510205379.png', 'telo rebus', '2017-11-08 22:29:39', '2017-11-08 22:29:39'),
(4, 'hgh', 70000, 'tuytu', '1510205469.jpeg', 'hgh', '2017-11-08 22:31:09', '2017-11-08 22:31:09'),
(5, 'ghyu', 9000, 'regtrh', '1510205522.jpg', 'ghyu', '2017-11-08 22:32:02', '2017-11-08 22:32:02'),
(6, 'fghy', 9000, 'uiku', '1510205550.jpg', 'fghy', '2017-11-08 22:32:30', '2017-11-08 22:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Pemilik Usaha', NULL, NULL),
(3, 'Donatur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_umkm`
--

CREATE TABLE `tbl_umkm` (
  `id` int(10) NOT NULL,
  `nama_umkm` varchar(225) NOT NULL,
  `deskripsi_umkm` varchar(225) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `nomor_rekening` varchar(30) NOT NULL,
  `alamat_umkm` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_umkm`
--

INSERT INTO `tbl_umkm` (`id`, `nama_umkm`, `deskripsi_umkm`, `id_pengguna`, `nomor_telp`, `nomor_rekening`, `alamat_umkm`, `created_at`, `updated_at`) VALUES
(1, 'UMKM Sejahtera', 'Umkm dibentuk sudah lama sekali. Produknyan banyak dan sudah ekspor ke Luar Negeri', 5, '081920983974', '16274691762', 'Jl Melati No 33 Yogyakarta', NULL, '2017-11-14 06:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Esthy', 'esthy', '$2y$10$b0S5JSmWgwckC8nuZGkqYeo7Mk6Xdcfa7bKwb1PdDKTchJYOHBi8K', 'zbTlHfGie0to9ecxv6wUWQ1yXTjeI3s2RNzbEmHnuKm02tFECvFOMzOPa2dd', '2017-11-06 21:04:15', '2017-11-06 21:04:15'),
(3, 3, 'Tyas Malin', 'tyasmalinda', '$2y$10$0tn25/8SuboEzADvvG9y9eM2M6CxQ1WBDq/vtC6IdDm6R729JVhN6', 'kVmn2sozxog0vzpGGprpTF1avS2MtXRVOJbEmPxqtLg0QPMEVEIsaAV9MbZt', '2017-11-09 02:16:57', '2017-11-09 02:16:57'),
(4, 2, 'mika', 'mikamika', '$2y$10$llscvVsWWQXd6cgDm0t1nuseH2TbuEvBrVnHTDy4Y0QuQeIMHvBLS', 'EkxORk4PDfzoYLfpu49D67XRKiAJECvEzzvjmNzs04bMmC8YjEX44LN6InH4', '2017-11-09 05:03:56', '2017-11-09 05:03:56'),
(5, 2, 'Pemilik Usaha', 'pemilik usaha', '$2y$10$NDRjLOV7N6cnmBJ6eNEZoOfOB5ZU3Lju6qc5QO7gSQsQMay1HZ0pG', 'WAOQIuMdkFYmjxfqCWoN6oL702iVTad7AraSkQFksQMiJw2cFA7JVyvzG4QM', '2017-11-09 05:05:56', '2017-11-09 05:05:56');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_umkm`
--
ALTER TABLE `tbl_umkm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_umkm`
--
ALTER TABLE `tbl_umkm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
