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
CREATE TABLE IF NOT EXISTS `anggota_rumah_tanggas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kawin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepemilikan_akta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kartu_identitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kehamilan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `riwayat_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partisipasi_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenjang_pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ijazah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kedudukan_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepala_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.anggota_rumah_tanggas: ~2 rows (approximately)
INSERT INTO `anggota_rumah_tanggas` (`id`, `nama`, `nik`, `hubungan`, `jkl`, `umur`, `status_kawin`, `kepemilikan_akta`, `kartu_identitas`, `status_kehamilan`, `riwayat_penyakit`, `partisipasi_sekolah`, `jenjang_pendidikan`, `ijazah`, `pekerjaan`, `kedudukan_pekerjaan`, `kepala_id`, `created_at`, `updated_at`) VALUES
	(1, 'sdfsdf', '21321', 'Istri/Suami', 'Perempuan', '21', 'Kawin/nikah', 'Ya, dapat ditunjukkan', 'Kartu pelajar', 'Tidak', 'Hipertensi', 'Tidak bersekolah lagi', 'Paket A', 'SMA/Sederajat', '234123', 'qwewqe', '6', '2024-08-16 12:19:42', '2024-08-16 12:19:42'),
	(2, 'sdfsdf', '21321', 'Istri/Suami', 'Perempuan', '21', 'Kawin/nikah', 'Ya, dapat ditunjukkan', 'Kartu pelajar', 'Tidak', 'Hipertensi', 'Tidak bersekolah lagi', 'Paket A', 'SMA/Sederajat', '234123', 'qwewqe', '7', '2024-08-16 12:23:34', '2024-08-16 12:23:34'),
	(42, 'sdfsdf', '12321', 'Istri/Suami', 'Perempuan', '22', 'Belum Kawin', 'Tidak', 'Akta kelahiran', 'Tidak', 'Hipertensi', 'Masih sekolah', 'Paket A', 'SD/Sederajat', '234123', 'qwewqe', '4', '2024-08-16 17:47:56', '2024-08-16 17:47:56'),
	(43, 'anak 2', '756765', 'Anak', 'Laki-laki', '11', 'Kawin/nikah', 'Tidak', 'Kartu pelajar', 'Ya', 'Kanker atau tumor ganas', 'Masih sekolah', NULL, 'SMA/Sederajat', 'qwert', '321gg', '4', '2024-08-16 17:47:56', '2024-08-16 17:47:56'),
	(50, 'sdfsdf', '12321', 'Istri/Suami', 'Perempuan', '22', 'Belum Kawin', 'Tidak', 'Akta kelahiran', 'Tidak', 'Hipertensi', 'Masih sekolah', 'Paket A', 'SD/Sederajat', '234123', 'qwewqe', '11', '2024-08-16 19:10:30', '2024-08-16 19:10:30'),
	(51, 'anak 2', '756765', 'Anak', 'Laki-laki', '11', 'Kawin/nikah', 'Tidak', 'Kartu pelajar', 'Ya', 'Kanker atau tumor ganas', 'Masih sekolah', NULL, 'SMA/Sederajat', 'qwert', '321gg', '11', '2024-08-16 19:10:30', '2024-08-16 19:10:30');

-- Dumping structure for table db_pkh.failed_jobs
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
CREATE TABLE IF NOT EXISTS `kepala_rumahs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jkl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_art` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.kepala_rumahs: ~7 rows (approximately)
INSERT INTO `kepala_rumahs` (`id`, `kk`, `nik`, `nama`, `jkl`, `alamat`, `rt`, `rw`, `jumlah_art`, `created_at`, `updated_at`) VALUES
	(1, '123123', '1231231', 'Ooka Test', 'Perempuan', 'Antang', '001', '011', 1, '2024-08-16 12:11:44', '2024-08-16 12:11:44'),
	(2, '123123', '1231231', 'Ooka Test', 'Perempuan', 'Antang', '001', '011', 1, '2024-08-16 12:12:51', '2024-08-16 12:12:51'),
	(3, '123123', '1', 'Ooka Test', 'Perempuan', 'Antang', '001', '011', 1, '2024-08-16 12:16:03', '2024-08-16 12:16:03'),
	(4, '123123', '3', 'Ooka Test', 'Perempuan', 'Antang', '001', '011', 2, '2024-08-16 12:16:26', '2024-08-16 17:46:36'),
	(5, '123123', '123', 'Ooka Test', 'Perempuan', 'Antang', '001', '011', 1, '2024-08-16 12:16:33', '2024-08-16 12:16:33'),
	(6, '123123', '21', 'Ooka Test', 'Perempuan', 'Antang', '001', '011', 1, '2024-08-16 12:19:42', '2024-08-16 12:19:42'),
	(7, '123123', '3211', 'Ooka Test', 'Perempuan', 'Antang', '001', '011', 1, '2024-08-16 12:23:34', '2024-08-16 12:23:34'),
	(11, '098787996', '123123', 'Ooka Test', 'Perempuan', 'Antang', '001', '011', 2, '2024-08-16 14:49:11', '2024-08-16 17:49:17');

-- Dumping structure for table db_pkh.ket_asets
CREATE TABLE IF NOT EXISTS `ket_asets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `have_lemari_es` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_tv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_sepeda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_motor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_lahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_ternak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_ternak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `have_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penghasilan_bulanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kepala_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.ket_asets: ~7 rows (approximately)
INSERT INTO `ket_asets` (`id`, `have_lemari_es`, `have_tv`, `have_sepeda`, `have_motor`, `luas_lahan`, `have_ternak`, `jumlah_ternak`, `have_usaha`, `penghasilan_bulanan`, `kepala_id`, `created_at`, `updated_at`) VALUES
	(1, 'Ya', 'Tidak', 'Tidak', 'Tidak', '12', 'Kerbau', '3', 'Tidak', '50', '1', '2024-08-16 12:11:44', '2024-08-16 12:11:44'),
	(2, 'Ya', 'Tidak', 'Tidak', 'Tidak', '12', 'Kerbau', '3', 'Tidak', '50', '2', '2024-08-16 12:12:51', '2024-08-16 12:12:51'),
	(3, 'Ya', 'Tidak', 'Tidak', 'Tidak', '12', 'Kerbau', '3', 'Tidak', '50', '3', '2024-08-16 12:16:03', '2024-08-16 12:16:03'),
	(4, 'Tidak', 'Ya', 'Ya', 'Ya', '12', 'Sapi', '3', 'Ya', '5000100', '4', '2024-08-16 12:16:26', '2024-08-16 17:47:03'),
	(5, 'Ya', 'Tidak', 'Tidak', 'Tidak', '12', 'Kerbau', '3', 'Tidak', '50', '5', '2024-08-16 12:16:33', '2024-08-16 12:16:33'),
	(6, 'Ya', 'Tidak', 'Tidak', 'Tidak', '12', 'Kerbau', '3', 'Tidak', '50', '6', '2024-08-16 12:19:42', '2024-08-16 12:19:42'),
	(7, 'Ya', 'Tidak', 'Tidak', 'Tidak', '12', 'Kerbau', '3', 'Tidak', '50', '7', '2024-08-16 12:23:34', '2024-08-16 12:23:34'),
	(11, 'Tidak', 'Ya', 'Ya', 'Ya', '12', 'Sapi', '3', 'Ya', '50', '11', '2024-08-16 14:49:11', '2024-08-16 14:49:11');

-- Dumping structure for table db_pkh.ket_perumahans
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.ket_perumahans: ~5 rows (approximately)
INSERT INTO `ket_perumahans` (`id`, `status_penugasan`, `status_lahan`, `luas_lantai`, `jenis_lantai`, `jenis_dinding`, `jenis_atap`, `kondisi_atap`, `jumlah_kamar`, `peroleh_air`, `sumber_penerangan`, `watt_listrik`, `bahan_energi`, `guna_wc`, `jenis_wc`, `akhir_wc`, `foto`, `kepala_id`, `created_at`, `updated_at`) VALUES
	(1, 'Milik sendiri', 'Milik orang lain', '123', 'Keramik', 'Bambu', 'Bambu', NULL, '3', 'sumur', 'listrik', NULL, 'Gas lpj', 'Sendiri', 'Leher angsa', 'Sungai', 'C:\\Users\\Wn10\\AppData\\Local\\Temp\\php19B4.tmp', '2', '2024-08-16 12:12:51', '2024-08-16 12:12:51'),
	(2, 'Bebas sewa', 'Tanah negara', '123', 'Tanah', 'Bambu', 'Asbes', NULL, '3', 'sumur', 'listrik', NULL, 'Gas lpj', 'Sendiri', 'Leher angsa', 'Sungai', '2024-08-17_01-42-31_.png', '4', '2024-08-16 12:16:26', '2024-08-16 17:42:31'),
	(3, 'Milik sendiri', 'Milik orang lain', '123', 'Keramik', 'Bambu', 'Bambu', NULL, '3', 'sumur', 'listrik', NULL, 'Gas lpj', 'Sendiri', 'Leher angsa', 'Sungai', '2024-08-16_20-16-33_.webp', '5', '2024-08-16 12:16:33', '2024-08-16 12:16:33'),
	(4, 'Milik sendiri', 'Milik orang lain', '123', 'Keramik', 'Bambu', 'Bambu', NULL, '3', 'sumur', 'listrik', NULL, 'Gas lpj', 'Sendiri', 'Leher angsa', 'Sungai', '2024-08-16_20-19-42_.webp', '6', '2024-08-16 12:19:42', '2024-08-16 12:19:42'),
	(5, 'Milik sendiri', 'Milik orang lain', '123', 'Keramik', 'Bambu', 'Bambu', NULL, '3', 'sumur', 'listrik', NULL, 'Gas lpj', 'Sendiri', 'Leher angsa', 'Sungai', '2024-08-16_20-23-34_.webp', '7', '2024-08-16 12:23:34', '2024-08-16 12:23:34'),
	(9, 'Bebas sewa', 'Tanah negara', '123', 'Tanah', 'Bambu', 'Asbes', NULL, '3', 'sumur', 'listrik', NULL, 'Gas lpj', 'Sendiri', 'Leher angsa', 'Sungai', '2024-08-17_01-49-17_.png', '11', '2024-08-16 14:49:11', '2024-08-16 17:49:17');

-- Dumping structure for table db_pkh.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(42, '2014_10_12_000000_create_users_table', 1),
	(43, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(44, '2019_08_19_000000_create_failed_jobs_table', 1),
	(45, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(46, '2024_08_16_151428_create_kepala_rumahs_table', 1),
	(47, '2024_08_16_162024_create_anggota_rumah_tanggas_table', 1),
	(48, '2024_08_16_164012_create_ket_perumahans_table', 1),
	(49, '2024_08_16_164023_create_ket_asets_table', 1),
	(50, '2024_08_16_170056_create_penerima_p_k_h_s_table', 1);

-- Dumping structure for table db_pkh.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_pkh.penerima_p_k_h_s
CREATE TABLE IF NOT EXISTS `penerima_p_k_h_s` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kepala_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perumahan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aset_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('S','B') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'B',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table db_pkh.penerima_p_k_h_s: ~0 rows (approximately)
INSERT INTO `penerima_p_k_h_s` (`id`, `kepala_id`, `perumahan_id`, `aset_id`, `status`, `created_at`, `updated_at`) VALUES
	(4, '11', '9', '11', 'S', '2024-08-16 14:49:11', '2024-08-16 21:46:59');

-- Dumping structure for table db_pkh.personal_access_tokens
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
	(1, 'admin', NULL, NULL, '$2y$12$nno3xzqJDfri8yXcDMHXnOgYiANllz8e6vrAAhwUMRKpEjHXMP.q.', NULL, '2024-08-16 12:09:35', '2024-08-16 12:09:35');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
