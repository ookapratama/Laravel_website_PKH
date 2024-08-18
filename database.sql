-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_pkh.anggota_rumah_tanggas
DROP TABLE IF EXISTS `anggota_rumah_tanggas`;
CREATE TABLE IF NOT EXISTS `anggota_rumah_tanggas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `status_kawin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepemilikan_akta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kartu_identitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_kehamilan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riwayat_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_cacat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partisipasi_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenjang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_perbulan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kedudukan_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepala_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.anggota_rumah_tanggas: ~2 rows (approximately)
INSERT INTO `anggota_rumah_tanggas` (`id`, `nama`, `nik`, `hubungan`, `jkl`, `umur`, `tempat_lahir`, `tgl_lahir`, `status_kawin`, `kepemilikan_akta`, `kartu_identitas`, `status_kehamilan`, `riwayat_penyakit`, `jenis_cacat`, `partisipasi_sekolah`, `jenjang_pendidikan`, `ijazah`, `pekerjaan`, `penghasilan_perbulan`, `kedudukan_pekerjaan`, `kepala_id`, `created_at`, `updated_at`) VALUES
	(3, 'lk', '34', 'sakjdh', 'dlsk', NULL, 'sdlfk', '2024-08-18', NULL, NULL, NULL, NULL, 'sdfd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'asdjkh', '4', 'Istri/Suami', 'Laki-laki', '', 'df', '2024-08-18', '', '', '', 'Tidak', 'Tidak ada', 'aksjdh', 'Tidak/belum pernah sekolah', 'SD/SLB', 'SD/Sederajat', 'Jasa kesehatan', 'Rp. 900', '', '3', '2024-08-17 22:51:08', '2024-08-17 22:51:08');

-- Dumping structure for table db_pkh.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_pkh.kepala_rumahs
DROP TABLE IF EXISTS `kepala_rumahs`;
CREATE TABLE IF NOT EXISTS `kepala_rumahs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `penghasilan_perbulan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `riwayat_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_cacat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_art` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.kepala_rumahs: ~1 rows (approximately)
INSERT INTO `kepala_rumahs` (`id`, `kk`, `nik`, `nama`, `jkl`, `alamat`, `rt`, `rw`, `pendidikan_terakhir`, `pekerjaan`, `tempat_lahir`, `tgl_lahir`, `penghasilan_perbulan`, `riwayat_penyakit`, `jenis_cacat`, `jumlah_art`, `created_at`, `updated_at`) VALUES
	(3, '44332', '2', 'Tes', 'Perempuan', 'lsdkfj', '008', '006', 'Tidak punya ijazah', 'Petani', 'dwf', '2024-07-18', '234', 'Tidak ada', 'df', 1, '2024-08-17 22:37:21', '2024-08-17 22:37:21');

-- Dumping structure for table db_pkh.ket_asets
DROP TABLE IF EXISTS `ket_asets`;
CREATE TABLE IF NOT EXISTS `ket_asets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `have_lemari_es` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_tv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_sepeda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_motor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_lahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_ternak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_ternak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_usaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penghasilan_bulanan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepala_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.ket_asets: ~1 rows (approximately)
INSERT INTO `ket_asets` (`id`, `have_lemari_es`, `have_tv`, `have_sepeda`, `have_motor`, `luas_lahan`, `have_ternak`, `jumlah_ternak`, `have_usaha`, `penghasilan_bulanan`, `kepala_id`, `created_at`, `updated_at`) VALUES
	(3, 'Ya', 'Ya', 'Ya', 'Tidak', '21', 'Sapi', '5', NULL, NULL, '3', '2024-08-17 22:37:21', '2024-08-17 22:37:21');

-- Dumping structure for table db_pkh.ket_perumahans
DROP TABLE IF EXISTS `ket_perumahans`;
CREATE TABLE IF NOT EXISTS `ket_perumahans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status_penugasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_lahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_lantai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_dinding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_atap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi_atap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kamar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peroleh_air` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_penerangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `watt_listrik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahan_energi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guna_wc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_wc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akhir_wc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepala_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.ket_perumahans: ~1 rows (approximately)
INSERT INTO `ket_perumahans` (`id`, `status_penugasan`, `status_lahan`, `luas_lantai`, `jenis_lantai`, `jenis_dinding`, `jenis_atap`, `kondisi_atap`, `jumlah_kamar`, `peroleh_air`, `sumber_penerangan`, `watt_listrik`, `bahan_energi`, `guna_wc`, `jenis_wc`, `akhir_wc`, `foto`, `kepala_id`, `created_at`, `updated_at`) VALUES
	(3, 'Milik sendiri', 'Milik sendiri', '32', 'Marmer/granit', 'Tembok', 'Beton/genteng beton', NULL, '2', 'Keran', 'Listrik', '150 watt', 'Gas', 'Sendiri', 'Leher angsa', 'Tangki', '2024-08-18_06-37-21_.jpeg', '3', '2024-08-17 22:37:21', '2024-08-17 22:37:21');

-- Dumping structure for table db_pkh.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.migrations: ~9 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(51, '2014_10_12_000000_create_users_table', 1),
	(52, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(53, '2019_08_19_000000_create_failed_jobs_table', 1),
	(54, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(55, '2024_08_16_151428_create_kepala_rumahs_table', 1),
	(56, '2024_08_16_162024_create_anggota_rumah_tanggas_table', 1),
	(57, '2024_08_16_164012_create_ket_perumahans_table', 1),
	(58, '2024_08_16_164023_create_ket_asets_table', 1),
	(59, '2024_08_16_170056_create_penerima_p_k_h_s_table', 1);

-- Dumping structure for table db_pkh.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_pkh.penerima_p_k_h_s
DROP TABLE IF EXISTS `penerima_p_k_h_s`;
CREATE TABLE IF NOT EXISTS `penerima_p_k_h_s` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kepala_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perumahan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aset_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('S','B') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'B',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.penerima_p_k_h_s: ~1 rows (approximately)
INSERT INTO `penerima_p_k_h_s` (`id`, `kepala_id`, `perumahan_id`, `aset_id`, `status`, `created_at`, `updated_at`) VALUES
	(3, '3', '3', '3', 'B', '2024-08-17 22:37:21', '2024-08-17 22:37:21');

-- Dumping structure for table db_pkh.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table db_pkh.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'admin', NULL, NULL, '$2y$12$layi1709w2X90ctENugCfOnUK5GWZmgvpmo3huJplPTGc4U8pbKn6', NULL, '2024-08-17 21:39:53', '2024-08-17 21:39:53');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
