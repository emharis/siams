-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for app_stkwsby
DROP DATABASE IF EXISTS `app_stkwsby`;
CREATE DATABASE IF NOT EXISTS `app_stkwsby` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `app_stkwsby`;


-- Dumping structure for table app_stkwsby.absen_pegawai
DROP TABLE IF EXISTS `absen_pegawai`;
CREATE TABLE IF NOT EXISTS `absen_pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `nip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hadir` time DEFAULT NULL,
  `pulang` time DEFAULT NULL,
  `ijin` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.absen_pegawai: ~6 rows (approximately)
/*!40000 ALTER TABLE `absen_pegawai` DISABLE KEYS */;
INSERT INTO `absen_pegawai` (`id`, `created_at`, `updated_at`, `nip`, `nama`, `hadir`, `pulang`, `ijin`) VALUES
	(1, '2014-10-22 10:34:56', '2014-10-22 10:34:56', '05123', 'Aulia Rahman', '10:35:03', NULL, NULL),
	(2, '2014-10-22 10:35:27', '2014-10-22 10:35:27', '053565', 'Maria', '10:35:32', NULL, NULL),
	(3, '2014-10-22 10:39:06', '2014-10-22 10:39:07', '07564316', 'Mulia Nasution', '10:39:12', NULL, NULL),
	(4, '2014-10-22 10:39:16', '2014-10-22 10:39:16', '06568', 'Novi Widyastuti', '10:39:27', NULL, NULL),
	(5, '2014-10-22 10:39:31', '2014-10-22 10:39:32', '095633', 'Robi Awaluddin', '10:39:45', NULL, NULL),
	(6, '2014-10-22 10:40:02', '2014-10-22 10:40:02', '093546', 'Rika Rahardian', '10:40:08', '16:40:09', NULL);
/*!40000 ALTER TABLE `absen_pegawai` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.departemen
DROP TABLE IF EXISTS `departemen`;
CREATE TABLE IF NOT EXISTS `departemen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.departemen: ~6 rows (approximately)
/*!40000 ALTER TABLE `departemen` DISABLE KEYS */;
INSERT INTO `departemen` (`id`, `created_at`, `updated_at`, `nama`) VALUES
	(1, '2014-10-23 05:42:31', '2014-10-23 05:42:33', 'BAAK'),
	(2, '2014-10-23 05:42:41', '2014-10-23 05:42:41', 'Prodi Seni Rupa'),
	(3, '2014-10-23 05:42:51', '2014-10-23 05:42:51', 'Prodi Seni Tari'),
	(4, '2014-10-23 05:42:57', '2014-10-23 05:42:57', 'Prodi Seni Teater'),
	(5, '2014-10-23 05:43:04', '2014-10-23 05:43:04', 'Prodi Seni Karawitan'),
	(6, '2014-10-23 05:43:15', '2014-10-23 05:43:15', 'Tata Usaha');
/*!40000 ALTER TABLE `departemen` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.gapok
DROP TABLE IF EXISTS `gapok`;
CREATE TABLE IF NOT EXISTS `gapok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `rate` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Tipe Perhitungan Y=monthly, N=Per Pertemuan khusus untuk dosen',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.gapok: ~4 rows (approximately)
/*!40000 ALTER TABLE `gapok` DISABLE KEYS */;
INSERT INTO `gapok` (`id`, `created_at`, `updated_at`, `jabatan_id`, `nilai`, `rate`) VALUES
	(1, '2014-10-23 06:16:00', '2014-10-23 06:16:00', 1, 3000000, 'Y'),
	(2, '2014-10-23 06:16:18', '2014-10-23 06:16:19', 2, 2500000, 'Y'),
	(3, '2014-10-23 06:16:29', '2014-10-23 06:16:29', 3, 4500000, 'Y'),
	(4, '2014-10-23 06:16:38', '2014-10-23 06:16:38', 4, 100000, 'N');
/*!40000 ALTER TABLE `gapok` ENABLE KEYS */;


-- Dumping structure for view app_stkwsby.gapok_per_jabatan
DROP VIEW IF EXISTS `gapok_per_jabatan`;
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `gapok_per_jabatan` (
	`id` INT(11) NOT NULL,
	`created_at` DATETIME NULL,
	`updated_at` DATETIME NULL,
	`nama` VARCHAR(100) NULL COLLATE 'utf8_unicode_ci',
	`gapok` BIGINT(11) NULL,
	`rate` VARCHAR(1) NULL COLLATE 'utf8_unicode_ci'
) ENGINE=MyISAM;


-- Dumping structure for table app_stkwsby.jabatan
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE IF NOT EXISTS `jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.jabatan: ~4 rows (approximately)
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` (`id`, `created_at`, `updated_at`, `nama`) VALUES
	(1, '2014-10-23 05:44:13', '2014-10-23 05:44:14', 'Kepala Prodi'),
	(2, '2014-10-23 05:44:25', '2014-10-23 05:44:25', 'Staff'),
	(3, '2014-10-23 05:44:37', '2014-10-23 05:44:37', 'Rektor'),
	(4, '2014-10-23 05:44:42', '2014-10-23 05:44:42', 'Dosen');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.mahasiswa
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `nim` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prodi` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.mahasiswa: ~12 rows (approximately)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`id`, `created_at`, `updated_at`, `nim`, `nama`, `prodi`, `status`) VALUES
	(1, '2014-10-21 15:43:12', '2014-10-21 15:43:12', '05411123165', 'Muhammad Iriawan ', 'Seni tari', 'Y'),
	(2, '2014-10-21 15:43:23', '2014-10-21 15:43:23', '052135123163', 'Muhammad Agus Hermawan', 'Seni Tari', 'Y'),
	(3, '2014-10-21 15:43:34', '2014-10-21 15:43:34', '01553415', 'Khadija Lubis', 'Seni Tari', 'Y'),
	(4, '2014-10-21 15:43:46', '2014-10-21 15:43:46', '054321656', 'Kibtyah Assidiq', 'Seni Tari', 'Y'),
	(5, '2014-10-21 15:43:57', '2014-10-21 15:43:57', '01234561326', 'M. Nasichul Amin', 'Seni Tari', 'Y'),
	(6, '2014-10-21 15:44:08', '2014-10-21 15:44:08', '01256663', 'Rafid Ibnu Shina', 'Seni Teater', 'Y'),
	(7, '2014-10-21 15:44:21', '2014-10-21 15:44:21', '0132365346', 'Catru Prasetyawan', 'Seni Teater', 'Y'),
	(8, '2014-10-21 15:44:31', '2014-10-21 15:44:31', '01234546546', 'Syamsul Hidayat', 'Seni Teater', 'Y'),
	(9, '2014-10-21 15:44:42', '2014-10-21 15:44:42', '00231316353', 'Yunis Fauziah', 'Seni Teater', 'Y'),
	(10, '2014-10-21 15:44:52', '2014-10-21 15:44:53', '012165345', 'Ratna Dwi Suhendra', 'Seni Karawitan', 'Y'),
	(11, '2014-10-21 15:45:06', '2014-10-21 15:45:06', '0232365465', 'Selvi Widya Astuti', 'Seni Karawitan', 'Y'),
	(12, '2014-10-21 15:45:21', '2014-10-21 15:45:21', '035465465', 'Abdul Mughits', 'Seni Karawitan', 'Y');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.matkul
DROP TABLE IF EXISTS `matkul`;
CREATE TABLE IF NOT EXISTS `matkul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `kode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kode` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='mata kuliah';

-- Dumping data for table app_stkwsby.matkul: ~18 rows (approximately)
/*!40000 ALTER TABLE `matkul` DISABLE KEYS */;
INSERT INTO `matkul` (`id`, `created_at`, `updated_at`, `kode`, `nama`) VALUES
	(1, '2014-10-21 15:16:57', '2014-10-21 15:16:58', 'MK001', 'Pengantar Kebudayaan'),
	(2, '2014-10-21 15:17:26', '2014-10-21 15:17:26', 'MK002', 'Filsafat'),
	(3, '2014-10-21 15:17:43', '2014-10-21 15:17:44', 'MK003', 'Estetika I'),
	(4, '2014-10-21 15:17:59', '2014-10-21 15:17:59', 'MK004', 'Estetika II'),
	(5, '2014-10-21 15:18:07', '2014-10-21 15:18:07', 'MK0-05', 'Sejarah Seni Rupa Indonesia'),
	(6, '2014-10-21 15:18:17', '2014-10-21 15:18:17', 'MK8450', 'Sejarah Seni Rupa Timur'),
	(7, '2014-10-21 15:18:25', '2014-10-21 15:18:26', 'MLK43534', 'Sejarah Seni Rupa Barat I'),
	(8, '2014-10-21 15:18:35', '2014-10-21 15:18:36', 'MK43543', 'Sejarah Seni Rupa Barat II'),
	(9, '2014-10-21 15:18:44', '2014-10-21 15:18:45', 'MK435', 'Kritik Seni Rupa Timur I'),
	(10, '2014-10-21 15:19:41', '2014-10-21 15:19:41', 'MK2389', 'Tata Rias dan Busana'),
	(11, '2014-10-21 15:19:44', '2014-10-21 15:19:44', 'MKL765', 'Musik Traditional Daerah'),
	(12, '2014-10-21 15:19:54', '2014-10-21 15:19:54', 'MK876', 'Musik Iringan Tari'),
	(13, '2014-10-21 15:20:01', '2014-10-21 15:20:01', 'MK789', 'Manajemen Produksi Pagelaran Tari'),
	(14, '2014-10-21 15:20:27', '2014-10-21 15:20:27', 'MK987', 'Penataan Artistik'),
	(15, '2014-10-21 15:20:36', '2014-10-21 15:20:36', 'MK98', 'Metodologi Penelitian'),
	(16, '2014-10-21 15:21:05', '2014-10-21 15:21:05', 'MK98', 'Pendidikan Agama'),
	(17, '2014-10-21 15:21:09', '2014-10-21 15:21:10', 'MK934', 'Teknik Tari I'),
	(18, '2014-10-21 15:21:20', '2014-10-21 15:21:20', 'MK0989', 'Teknik Tari II');
/*!40000 ALTER TABLE `matkul` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.pegawai
DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `nip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `sex` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Jenis kelamin Y=Pria N=wanita',
  `alamat` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `departemen_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.pegawai: ~2 rows (approximately)
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` (`id`, `created_at`, `updated_at`, `nip`, `nama`, `tgl_lahir`, `sex`, `alamat`, `jabatan_id`, `departemen_id`) VALUES
	(1, '2014-10-23 05:55:30', '2014-10-23 05:55:30', '154654684', 'Rahmat Gunawan', '2014-10-23', 'Y', NULL, 1, 2),
	(2, '2014-10-23 05:55:58', '2014-10-23 05:55:58', '456485655', 'Ita Ariani', '2014-10-23', 'N', NULL, 2, 1);
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.prodi
DROP TABLE IF EXISTS `prodi`;
CREATE TABLE IF NOT EXISTS `prodi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `kode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.prodi: ~0 rows (approximately)
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.ruang
DROP TABLE IF EXISTS `ruang`;
CREATE TABLE IF NOT EXISTS `ruang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `kode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.ruang: ~0 rows (approximately)
/*!40000 ALTER TABLE `ruang` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruang` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.semester
DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `takad_id` int(11) DEFAULT NULL,
  `kode` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aktif` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT NULL,
  `awal` date DEFAULT NULL,
  `akhir` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kode` (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.semester: ~0 rows (approximately)
/*!40000 ALTER TABLE `semester` DISABLE KEYS */;
/*!40000 ALTER TABLE `semester` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.takad
DROP TABLE IF EXISTS `takad`;
CREATE TABLE IF NOT EXISTS `takad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aktif` enum('Y','N') COLLATE utf8_unicode_ci DEFAULT NULL,
  `awal` date DEFAULT NULL,
  `akhir` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order` (`order`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tahun Akademik';

-- Dumping data for table app_stkwsby.takad: ~2 rows (approximately)
/*!40000 ALTER TABLE `takad` DISABLE KEYS */;
INSERT INTO `takad` (`id`, `created_at`, `updated_at`, `order`, `nama`, `aktif`, `awal`, `akhir`) VALUES
	(1, '2014-10-21 14:07:32', '2014-10-21 14:07:32', 1, '2013/2014', 'N', '2013-07-01', '2014-06-30'),
	(2, '2014-10-21 14:12:02', '2014-10-21 14:12:02', 2, '2014/2015', 'Y', '2014-07-01', '2015-06-30');
/*!40000 ALTER TABLE `takad` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.tunjangan
DROP TABLE IF EXISTS `tunjangan`;
CREATE TABLE IF NOT EXISTS `tunjangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `nama` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.tunjangan: ~5 rows (approximately)
/*!40000 ALTER TABLE `tunjangan` DISABLE KEYS */;
INSERT INTO `tunjangan` (`id`, `created_at`, `updated_at`, `nama`) VALUES
	(1, '2014-10-23 06:20:53', '2014-10-23 06:20:53', 'Tunjangan Kepala Prodi'),
	(2, '2014-10-23 06:31:56', '2014-10-23 06:31:56', 'Tunjangan Rektor'),
	(3, '2014-10-23 06:32:02', '2014-10-23 06:32:02', 'Tunjangan Staff'),
	(4, '2014-10-23 06:33:31', '2014-10-23 06:33:32', 'Tunjangan Istri'),
	(5, '2014-10-23 07:15:44', '2014-10-23 07:15:44', 'Tunjangan Anak');
/*!40000 ALTER TABLE `tunjangan` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.tunjangan_detil
DROP TABLE IF EXISTS `tunjangan_detil`;
CREATE TABLE IF NOT EXISTS `tunjangan_detil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tunjangan_id` int(11) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.tunjangan_detil: ~11 rows (approximately)
/*!40000 ALTER TABLE `tunjangan_detil` DISABLE KEYS */;
INSERT INTO `tunjangan_detil` (`id`, `created_at`, `updated_at`, `tunjangan_id`, `jabatan_id`) VALUES
	(1, '2014-10-23 07:17:51', '2014-10-23 07:17:51', 1, 1),
	(2, '2014-10-23 07:18:14', '2014-10-23 07:18:14', 2, 3),
	(3, '2014-10-23 07:19:10', '2014-10-23 07:19:11', 3, 2),
	(4, '2014-10-23 07:19:25', '2014-10-23 07:19:25', 4, 1),
	(5, '2014-10-23 07:19:30', '2014-10-23 07:19:31', 4, 2),
	(6, '2014-10-23 07:19:35', '2014-10-23 07:19:36', 4, 3),
	(7, '2014-10-23 07:19:39', '2014-10-23 07:19:39', 4, 4),
	(8, '2014-10-23 07:19:43', '2014-10-23 07:19:43', 5, 1),
	(9, '2014-10-23 07:19:47', '2014-10-23 07:19:47', 5, 2),
	(10, '2014-10-23 07:19:53', '2014-10-23 07:19:53', 5, 3),
	(11, '2014-10-23 07:19:57', '2014-10-23 07:19:57', 5, 4);
/*!40000 ALTER TABLE `tunjangan_detil` ENABLE KEYS */;


-- Dumping structure for table app_stkwsby.tunjangan_detil_nilai
DROP TABLE IF EXISTS `tunjangan_detil_nilai`;
CREATE TABLE IF NOT EXISTS `tunjangan_detil_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `tunjangan_id` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT '0' COMMENT '0 menandakan bahwa maksmal sama dengan nilai',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table app_stkwsby.tunjangan_detil_nilai: ~5 rows (approximately)
/*!40000 ALTER TABLE `tunjangan_detil_nilai` DISABLE KEYS */;
INSERT INTO `tunjangan_detil_nilai` (`id`, `created_at`, `updated_at`, `tunjangan_id`, `nilai`, `max`) VALUES
	(1, '2014-10-23 07:22:00', '2014-10-23 07:22:00', 1, 1000000, 0),
	(2, '2014-10-23 07:22:08', '2014-10-23 07:22:08', 2, 1500000, 0),
	(3, '2014-10-23 07:22:16', '2014-10-23 07:22:16', 3, 750000, 0),
	(4, '2014-10-23 07:22:25', '2014-10-23 07:22:25', 4, 500000, 0),
	(5, '2014-10-23 07:22:29', '2014-10-23 07:22:30', 5, 250000, 750000);
/*!40000 ALTER TABLE `tunjangan_detil_nilai` ENABLE KEYS */;


-- Dumping structure for view app_stkwsby.gapok_per_jabatan
DROP VIEW IF EXISTS `gapok_per_jabatan`;
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `gapok_per_jabatan`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `gapok_per_jabatan` AS SELECT  jb.id,jb.created_at,jb.updated_at,jb.nama,
(select nilai from gapok gp where gp.jabatan_id = jb.id order by gp.created_at desc limit 1) as gapok,
(select rate from gapok gp where gp.jabatan_id = jb.id order by gp.created_at desc limit 1) as rate
from jabatan as jb ;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
