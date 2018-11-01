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

/*Table structure for table `donates` */

DROP TABLE IF EXISTS `donates`;

CREATE TABLE `donates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `email_penerima` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `donates` */

insert  into `donates`(`id`,`user_id`,`product_id`,`amount`,`email_penerima`,`created_at`,`updated_at`) values 
(1,3,1,200000,'dharma.bekti16696@gmail.com','2018-11-01 08:00:54','2018-11-01 08:00:54'),
(2,5,1,200000,'dharma.bekti16696@gmail.com','2018-11-01 08:18:14','2018-11-01 08:18:14');

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
(3,'Madu Randu',500000,'Madu Ransu Asli','1541052170.png','Madu Randu',3,4,'Approved','2018-11-01 06:02:51','2018-11-01 06:03:51');

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
  `avatar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`role_id`,`name`,`email`,`username`,`password`,`remember_token`,`avatar`,`status`,`created_at`,`updated_at`) values 
(1,1,'admin','dharma.bekti16696@gmail.com','admin','$2y$10$e.VDCS67Q3iO6qEHvRLEW.yEi0W1ih8hPDHMrizdaiYvcCkOjSflC','vl5e3x3ZgkL4P1stFf1e36MOqkyNahtml53kNMyFGPaVSH2lTG1yJcnqZUSO','1541040418.png',1,'2018-10-31 04:37:56','2018-11-01 03:01:35'),
(2,2,'pemilik usaha','dharma.bekti16696@gmail.com','pemilikusaha','$2y$10$9tzEtXYV1vLI1ElYZkv1D.ba22VLBVgPFpaitRDQ3al7vB4WCmk2W','mcngWCzoFlGc4vyXSqNOZUp8taZO7lFdPveNntiymPslHsHq855UesvpS8pM','1541039512.png',1,'2018-11-01 02:24:14','2018-11-01 03:02:31'),
(3,3,'donatur','dharma.bekti16696@gmail.com','donatur','$2y$10$ro57ccdo/MTdhp1hW8elF.1qDXW.3k6eLAkPKb4b43ObEWd/3BryC','yW9DbIjoQRNhHmuwuN6xFT5pMbwyojer5zjJexDkZfHGCJIwDoiSL1kdFQJq','1541039560.png',1,'2018-11-01 02:24:43','2018-11-01 03:52:03'),
(4,2,'gens',NULL,'gens','$2y$10$hMBdkoROsZOMISzUepkj6uqv4iUQ8qM35hxAmKyqSd12HWqXfcZTu','NuHBmSlwUb3oCKV0jU4sGx6zz4iGhbJbL60A0NwVtMbz7aMhAEO18yuLKV8i',NULL,1,'2018-11-01 02:57:00','2018-11-01 03:45:29'),
(5,3,'anom','dharma.bekti16696@gmail.com','anom','$2y$10$t0bxfOg/MlNNPQNEJasKcehJ3t3FChMnND84J8/EJsZW71U4pi17e','oRNjyLxVnwLRGy8JOs7ZGT1P4enXJV3YFLBFmWRj8IihsPB33kvksZYV4xjJ','1541060286.png',1,'2018-11-01 08:17:47','2018-11-01 08:18:07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
