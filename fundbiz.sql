/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.34-MariaDB : Database - db_warung
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_warung` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_warung`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_100000_create_password_resets_table',1),
(2,'2017_11_07_030036_create_roles_table',1),
(3,'2017_11_07_030323_create_user_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `produks` */

DROP TABLE IF EXISTS `produks`;

CREATE TABLE `produks` (
  `id_produk` int(10) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(225) NOT NULL,
  `dana` int(20) NOT NULL,
  `deskripsi_produk` varchar(225) NOT NULL,
  `picture` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `waktu_pinjam` int(2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `produks` */

insert  into `produks`(`id_produk`,`nama_produk`,`dana`,`deskripsi_produk`,`picture`,`slug`,`waktu_pinjam`,`user_id`,`status`,`created_at`,`updated_at`) values 
(1,'Testing beras',200000,'Testing','1540973200.jpg','Testing beras',2,2,'Approved','2018-10-31 08:06:41','2018-10-31 08:06:41'),
(2,'Terigu',500000,'Terigu Asli Buatan Manusia','1540974751.jpg','Terigu',4,2,'Waiting','2018-10-31 08:32:31','2018-10-31 08:32:31'),
(3,'Madu Randu',500000,'Madu asli wonosari','1540975090.jpg','Madu Randu',1,2,'Waiting','2018-10-31 08:38:10','2018-10-31 08:38:10');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Admin',NULL,NULL),
(2,'Pemilik Usaha',NULL,NULL),
(3,'Mitra',NULL,NULL);

/*Table structure for table `tbl_umkm` */

DROP TABLE IF EXISTS `tbl_umkm`;

CREATE TABLE `tbl_umkm` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_umkm` varchar(225) NOT NULL,
  `deskripsi_umkm` varchar(225) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  `nomor_rekening` varchar(30) NOT NULL,
  `alamat_umkm` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_umkm` */

insert  into `tbl_umkm`(`id`,`nama_umkm`,`deskripsi_umkm`,`id_pengguna`,`nomor_telp`,`nomor_rekening`,`alamat_umkm`,`created_at`,`updated_at`) values 
(1,'UMKM Sejahtera','Umkm dibentuk sudah lama sekali. Produknyan banyak dan sudah ekspor ke Luar Negeri',5,'081920983974','16274691762','Jl Melati No 33 Yogyakarta',NULL,'2017-11-14 13:17:40');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`role_id`,`name`,`email`,`username`,`password`,`remember_token`,`photo`,`created_at`,`updated_at`) values 
(1,1,'admin',NULL,'admin','$2y$10$EiPl66D6EX5Q9zzQC/eySuj1O6sdEjK8jzV2XkIWcPmu8dICeYRvK','02sYd6joSGF0WKjRG6lAWrsJZoDIbe6KHUM7jZ8oBXkvHhiX4lTDTNfUf5kG',NULL,'2018-10-31 04:37:56','2018-10-31 04:37:56'),
(2,2,'pemilik usaha',NULL,'pemilikusaha','$2y$10$RUELuFDwvuRrNVR3tKZhLeF9FLc5o/Lf0SXLDqxP7KiZXxUeJZ0ha','JotLttOPHGYUUbGmIhzNZYG4B04HEo6ACNpDVLsHPSq78vrB36KszKy17xFS',NULL,'2018-10-31 04:38:33','2018-10-31 04:38:33'),
(3,3,'donatur',NULL,'donatur','$2y$10$orNvsgvRoyjJrJDp9sje2..vEjSfB69SdMbEwIZYxrUXwhWoRVAb6','sSZHa4k5csKPzLLhdxxbf0dQwkiNZ2fIfv4XTYeUJqZIVVSuJ2BZK0IOPgPj',NULL,'2018-10-31 04:38:54','2018-10-31 04:38:54');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
