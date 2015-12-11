-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.5020
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for persuratan
CREATE DATABASE IF NOT EXISTS `persuratan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `persuratan`;


-- Dumping structure for table persuratan.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `tanggal_buat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `alamat` varchar(45) DEFAULT NULL,
  `telp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `aktif` tinyint(1) DEFAULT NULL,
  `kode` int(11) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idadmin`),
  KEY `FK_admin_access` (`kode`),
  CONSTRAINT `FK_admin_access` FOREIGN KEY (`kode`) REFERENCES `akses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table persuratan.admin: ~3 rows (approximately)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`idadmin`, `nama`, `tanggal_buat`, `alamat`, `telp`, `email`, `username`, `password`, `aktif`, `kode`, `gender`) VALUES
	(1, 'admin', '2015-10-27 05:34:10', 'TT', '085707044393', 'misbachul.h@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 2, 0),
	(2, 'operator', '2015-10-30 17:28:27', 'TT', NULL, 'misbachul.h@live.com', 'operator', '21232f297a57a5a743894a0e4a801fc3', 1, 6, NULL),
	(3, 'fo', '2015-12-08 17:30:54', 'TT', NULL, NULL, 'fo', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 0);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table persuratan.agenda
CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text,
  `awal` datetime DEFAULT NULL,
  `hasil` text,
  `akhir` datetime DEFAULT NULL,
  `isi` longtext,
  `tanggal_buat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file` text,
  `admin` int(11) DEFAULT NULL,
  `surat` int(11) DEFAULT NULL,
  `tempat` text,
  PRIMARY KEY (`id`),
  KEY `FK_agenda_admin` (`admin`),
  KEY `FK_agenda_surat` (`surat`),
  CONSTRAINT `FK_agenda_admin` FOREIGN KEY (`admin`) REFERENCES `admin` (`idadmin`),
  CONSTRAINT `FK_agenda_surat` FOREIGN KEY (`surat`) REFERENCES `surat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table persuratan.agenda: ~9 rows (approximately)
DELETE FROM `agenda`;
/*!40000 ALTER TABLE `agenda` DISABLE KEYS */;
INSERT INTO `agenda` (`id`, `judul`, `awal`, `hasil`, `akhir`, `isi`, `tanggal_buat`, `file`, `admin`, `surat`, `tempat`) VALUES
	(1, 'Keadaan', '2015-12-03 00:00:00', NULL, '2015-12-03 20:18:32', 'Syalala', '2015-12-03 20:02:18', NULL, 1, 42, 'Gedung'),
	(8, 'Surat Pemberitahuan Undangan Acara Peresmian', '2015-12-04 23:59:00', NULL, '2015-12-04 23:58:00', 'asasasasasa', '2015-12-03 21:43:58', NULL, 1, NULL, 'Gedung'),
	(9, 'Judul Surat', '2015-12-04 23:59:00', NULL, '2015-12-06 00:59:00', 'Keterangan', '2015-12-03 21:55:23', NULL, 1, NULL, 'Gedung'),
	(10, 'Judul Surat', '2015-12-04 23:59:00', NULL, '2015-12-06 00:59:00', 'Keterangan', '2015-12-03 21:56:04', NULL, 1, NULL, 'Gedung'),
	(11, 'Judul Surat', '2015-12-04 23:59:00', NULL, '2015-12-06 00:59:00', 'Keterangan', '2015-12-03 21:57:13', NULL, 1, NULL, 'Gedung'),
	(12, 'Acara Peresmian', '2015-12-30 23:59:00', NULL, '2015-12-31 23:59:00', 'syalalala', '2015-12-03 22:01:26', NULL, 1, NULL, 'Gedung'),
	(13, 'Acara Peresmian', '2015-12-13 00:00:00', NULL, '2015-12-06 23:00:00', '123456', '2015-12-03 22:04:32', NULL, 1, NULL, 'Gedung'),
	(14, 'Acara Peresmian', '2015-12-13 00:00:00', NULL, '2015-12-06 23:00:00', '123456', '2015-12-03 22:05:00', NULL, 1, NULL, 'Gedung'),
	(15, 'Agenda1', '2015-12-13 22:00:00', 'Hasil', '2015-12-12 23:00:00', 'Keterangan', '2015-12-03 22:15:12', NULL, 1, NULL, 'Gedung');
/*!40000 ALTER TABLE `agenda` ENABLE KEYS */;


-- Dumping structure for table persuratan.akses
CREATE TABLE IF NOT EXISTS `akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(50) NOT NULL,
  `akses` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.akses: ~5 rows (approximately)
DELETE FROM `akses`;
/*!40000 ALTER TABLE `akses` DISABLE KEYS */;
INSERT INTO `akses` (`id`, `code`, `akses`) VALUES
	(1, 'fo', 'Front Office'),
	(2, 'coord', 'Koordinator'),
	(3, 'coord', 'Sekretaris'),
	(4, 'coord', 'Ketua'),
	(5, 'ge', 'Guest'),
	(6, 'operator', 'Operator');
/*!40000 ALTER TABLE `akses` ENABLE KEYS */;


-- Dumping structure for table persuratan.buku_tamu
CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.buku_tamu: ~0 rows (approximately)
DELETE FROM `buku_tamu`;
/*!40000 ALTER TABLE `buku_tamu` DISABLE KEYS */;
/*!40000 ALTER TABLE `buku_tamu` ENABLE KEYS */;


-- Dumping structure for view persuratan.draft
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `draft` (
	`id` INT(11) NOT NULL,
	`isi` LONGTEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`lampiran` TEXT NULL COLLATE 'latin1_swedish_ci',
	`hasil` TEXT NULL COLLATE 'latin1_swedish_ci',
	`index` INT(11) NOT NULL,
	`kategori` TEXT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_terima` DATE NULL,
	`penerima` TEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`pengirim` TEXT NULL COLLATE 'latin1_swedish_ci',
	`sifat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`perihal` TEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_surat` DATE NOT NULL,
	`tanggal_entry` TIMESTAMP NULL,
	`nomor` TEXT NULL COLLATE 'latin1_swedish_ci',
	`jurnal` TEXT NULL COLLATE 'latin1_swedish_ci',
	`jenis_surat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`isdraft` INT(11) NULL,
	`tembusan` TEXT NULL COLLATE 'latin1_swedish_ci',
	`parrent` INT(11) NULL,
	`judul` TEXT NULL COLLATE 'latin1_swedish_ci',
	`idadmin` INT(11) NOT NULL,
	`nama` VARCHAR(45) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Dumping structure for view persuratan.inbox
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `inbox` (
	`isread` VARCHAR(1) NOT NULL COLLATE 'utf8mb4_general_ci',
	`id` INT(11) NOT NULL,
	`isi` LONGTEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`lampiran` TEXT NULL COLLATE 'latin1_swedish_ci',
	`hasil` TEXT NULL COLLATE 'latin1_swedish_ci',
	`index` INT(11) NOT NULL,
	`kategori` TEXT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_terima` DATE NULL,
	`penerima` TEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`pengirim` TEXT NULL COLLATE 'latin1_swedish_ci',
	`sifat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`perihal` TEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_surat` DATE NOT NULL,
	`tanggal_entry` TIMESTAMP NULL,
	`nomor` TEXT NULL COLLATE 'latin1_swedish_ci',
	`jurnal` TEXT NULL COLLATE 'latin1_swedish_ci',
	`jenis_surat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`isdraft` INT(11) NULL,
	`tembusan` TEXT NULL COLLATE 'latin1_swedish_ci',
	`parrent` INT(11) NULL,
	`judul` TEXT NULL COLLATE 'latin1_swedish_ci',
	`idadmin` INT(11) NOT NULL,
	`tanggal` VARCHAR(72) NULL COLLATE 'utf8mb4_general_ci',
	`nama` VARCHAR(45) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Dumping structure for table persuratan.memo
CREATE TABLE IF NOT EXISTS `memo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `surat` int(11) NOT NULL DEFAULT '0',
  `dari` text NOT NULL,
  `admin_idadmin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__surat` (`surat`),
  KEY `fk_memo_admin1_idx` (`admin_idadmin`),
  CONSTRAINT `fk_memo_admin1` FOREIGN KEY (`admin_idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__surat` FOREIGN KEY (`surat`) REFERENCES `surat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.memo: ~0 rows (approximately)
DELETE FROM `memo`;
/*!40000 ALTER TABLE `memo` DISABLE KEYS */;
INSERT INTO `memo` (`id`, `isi`, `tanggal`, `surat`, `dari`, `admin_idadmin`) VALUES
	(3, 'Halo ini adalah memo', '2015-11-03 12:50:14', 30, '', 0);
/*!40000 ALTER TABLE `memo` ENABLE KEYS */;


-- Dumping structure for view persuratan.notif
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `notif` (
	`id` INT(11) NOT NULL,
	`isi` LONGTEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`lampiran` TEXT NULL COLLATE 'latin1_swedish_ci',
	`hasil` TEXT NULL COLLATE 'latin1_swedish_ci',
	`index` INT(11) NOT NULL,
	`kategori` TEXT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_terima` DATE NULL,
	`penerima` TEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`pengirim` TEXT NULL COLLATE 'latin1_swedish_ci',
	`sifat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`perihal` TEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_surat` DATE NOT NULL,
	`tanggal_entry` TIMESTAMP NULL,
	`nomor` TEXT NULL COLLATE 'latin1_swedish_ci',
	`jurnal` TEXT NULL COLLATE 'latin1_swedish_ci',
	`jenis_surat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`isdraft` INT(11) NULL,
	`tembusan` TEXT NULL COLLATE 'latin1_swedish_ci',
	`parrent` INT(11) NULL,
	`judul` TEXT NULL COLLATE 'latin1_swedish_ci',
	`idadmin` INT(11) NOT NULL,
	`tanggal` VARCHAR(72) NULL COLLATE 'utf8mb4_general_ci',
	`nama` VARCHAR(45) NULL COLLATE 'utf8_general_ci'
) ENGINE=MyISAM;


-- Dumping structure for table persuratan.notifikasi
CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surat` int(11) DEFAULT NULL,
  `isread` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_notifikasi_surat` (`surat`),
  KEY `user` (`user`),
  CONSTRAINT `FK_notifikasi_admin` FOREIGN KEY (`user`) REFERENCES `admin` (`idadmin`),
  CONSTRAINT `FK_notifikasi_surat` FOREIGN KEY (`surat`) REFERENCES `surat` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.notifikasi: ~11 rows (approximately)
DELETE FROM `notifikasi`;
/*!40000 ALTER TABLE `notifikasi` DISABLE KEYS */;
INSERT INTO `notifikasi` (`id`, `surat`, `isread`, `user`) VALUES
	(2, 2, 1, 1),
	(3, 30, 1, 1),
	(6, 31, 1, 1),
	(8, 32, 1, 1),
	(9, 33, 1, 1),
	(10, 1, 1, 1),
	(11, 34, 1, 1),
	(12, 42, 1, 1),
	(13, 43, 1, 1),
	(14, 35, 1, 1),
	(15, 30, 1, 1),
	(16, 34, 1, 1),
	(17, 30, 1, 1),
	(18, 1, 1, 1);
/*!40000 ALTER TABLE `notifikasi` ENABLE KEYS */;


-- Dumping structure for view persuratan.outbox
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `outbox` (
	`id` INT(11) NOT NULL,
	`isi` LONGTEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`lampiran` TEXT NULL COLLATE 'latin1_swedish_ci',
	`hasil` TEXT NULL COLLATE 'latin1_swedish_ci',
	`index` INT(11) NOT NULL,
	`kategori` TEXT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_terima` DATE NULL,
	`penerima` TEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`pengirim` TEXT NULL COLLATE 'latin1_swedish_ci',
	`sifat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`perihal` TEXT NOT NULL COLLATE 'latin1_swedish_ci',
	`tanggal_surat` DATE NOT NULL,
	`tanggal_entry` TIMESTAMP NULL,
	`nomor` TEXT NULL COLLATE 'latin1_swedish_ci',
	`jurnal` TEXT NULL COLLATE 'latin1_swedish_ci',
	`jenis_surat` TEXT NULL COLLATE 'latin1_swedish_ci',
	`isdraft` INT(11) NULL,
	`tembusan` TEXT NULL COLLATE 'latin1_swedish_ci',
	`parrent` INT(11) NULL,
	`judul` TEXT NULL COLLATE 'latin1_swedish_ci',
	`idadmin` INT(11) NOT NULL,
	`nama` VARCHAR(45) NULL COLLATE 'utf8_general_ci',
	`tanggal` VARCHAR(72) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;


-- Dumping structure for table persuratan.pendamping
CREATE TABLE IF NOT EXISTS `pendamping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `telp` text NOT NULL,
  `agenda` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pendamping_agenda` (`agenda`),
  CONSTRAINT `FK_pendamping_agenda` FOREIGN KEY (`agenda`) REFERENCES `agenda` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.pendamping: ~8 rows (approximately)
DELETE FROM `pendamping`;
/*!40000 ALTER TABLE `pendamping` DISABLE KEYS */;
INSERT INTO `pendamping` (`id`, `nama`, `telp`, `agenda`) VALUES
	(1, '0', '0', 12),
	(2, 'Tunggulah', '085232039393', 12),
	(3, '0', '0', 13),
	(4, 'Pembimbing1', '085232039393', 13),
	(5, 'Pembimbing1', '085232039393', 14),
	(6, 'Pembimbing2', '085232039393', 14),
	(7, 'Pendamping1 ', '08623672', 15),
	(8, 'Pendamping2', '02932824', 15);
/*!40000 ALTER TABLE `pendamping` ENABLE KEYS */;


-- Dumping structure for table persuratan.rundown
CREATE TABLE IF NOT EXISTS `rundown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` time NOT NULL,
  `pic` text NOT NULL,
  `tempat` text NOT NULL,
  `agenda` int(11) NOT NULL,
  `nama` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__agenda` (`agenda`),
  CONSTRAINT `FK__agenda` FOREIGN KEY (`agenda`) REFERENCES `agenda` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.rundown: ~0 rows (approximately)
DELETE FROM `rundown`;
/*!40000 ALTER TABLE `rundown` DISABLE KEYS */;
/*!40000 ALTER TABLE `rundown` ENABLE KEYS */;


-- Dumping structure for table persuratan.satpassus
CREATE TABLE IF NOT EXISTS `satpassus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda` int(11) NOT NULL DEFAULT '0',
  `nama` text,
  `telp` text,
  PRIMARY KEY (`id`),
  KEY `FK_satpassus_agenda` (`agenda`),
  CONSTRAINT `FK_satpassus_agenda` FOREIGN KEY (`agenda`) REFERENCES `agenda` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.satpassus: ~2 rows (approximately)
DELETE FROM `satpassus`;
/*!40000 ALTER TABLE `satpassus` DISABLE KEYS */;
INSERT INTO `satpassus` (`id`, `agenda`, `nama`, `telp`) VALUES
	(1, 15, 'passus 1', '2938928'),
	(2, 15, 'passus 2', '928323');
/*!40000 ALTER TABLE `satpassus` ENABLE KEYS */;


-- Dumping structure for table persuratan.surat
CREATE TABLE IF NOT EXISTS `surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` longtext NOT NULL,
  `lampiran` text,
  `hasil` text,
  `index` int(11) NOT NULL,
  `kategori` text,
  `tanggal_terima` date DEFAULT NULL,
  `penerima` text NOT NULL,
  `pengirim` text,
  `sifat` text,
  `perihal` text NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_entry` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nomor` text,
  `jurnal` text,
  `jenis_surat` text,
  `isdraft` int(11) DEFAULT '0',
  `tembusan` text,
  `parrent` int(11) DEFAULT NULL,
  `judul` text,
  `idadmin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_surat_admin1_idx` (`idadmin`),
  CONSTRAINT `fk_surat_admin1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.surat: ~9 rows (approximately)
DELETE FROM `surat`;
/*!40000 ALTER TABLE `surat` DISABLE KEYS */;
INSERT INTO `surat` (`id`, `isi`, `lampiran`, `hasil`, `index`, `kategori`, `tanggal_terima`, `penerima`, `pengirim`, `sifat`, `perihal`, `tanggal_surat`, `tanggal_entry`, `nomor`, `jurnal`, `jenis_surat`, `isdraft`, `tembusan`, `parrent`, `judul`, `idadmin`) VALUES
	(1, 'Isi', '', NULL, 0, 'kategori 1', '2015-10-27', 'Ketua', 'Kerajaan Siliwangi', 'penting', 'keagamaan', '2015-10-27', '2015-12-03 13:40:01', '98393823', 'judul', 'in', 0, NULL, NULL, NULL, 1),
	(2, 'Notif Surat', '', NULL, 0, 'Kategori 1', '2015-10-27', 'Ketua', 'Majapahit', 'Penting Sekali', 'Undangan', '2015-10-27', '2015-12-03 13:40:00', '12/1221n/12', 'Judul Notif', 'in', 0, NULL, NULL, NULL, 1),
	(30, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', '1446521125modules.zip', NULL, 0, 'Pemberitahuan', '2015-11-04', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', 'Undangan Haji', '2015-11-04', '2015-12-03 13:39:58', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'Kades, Kadep', NULL, 'Surat Pemberitahuan Undangan Acara Peresmian', 1),
	(31, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', NULL, NULL, 0, 'Pemberitahuan', '2015-11-04', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', 'Undangan Haji', '2015-11-04', '2015-12-03 13:39:56', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'Kades, Kadep', NULL, 'Surat Pemberitahuan Undangan Acara Peresmian', 1),
	(32, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', NULL, NULL, 0, 'Proposal', '2015-11-03', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', '', '2015-11-03', '2015-12-03 13:39:54', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'kadep, supervisi', NULL, 'Surat Pemberitahuan Undangan Senja', 1),
	(33, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', 'e5134c3357d280922fc66f7d502616f8.zip', NULL, 0, 'Proposal', '2015-11-03', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', '', '2015-11-03', '2015-12-03 13:39:52', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'kadep, supervisi', NULL, 'Surat Pemberitahuan Undangan Senja', 1),
	(34, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', 'e6abf7cb751ebc8a8d1847da0baac1ca.zip', NULL, 0, 'Proposal', '2015-11-03', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', '', '2015-11-03', '2015-12-03 13:39:51', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'kadep, supervisi', NULL, 'Surat Pemberitahuan Undangan Senja', 1),
	(35, '<p data-mce- >Dalam progres yang masih jauh dari dugaan, ada cerita dibalik materi yang dipelajari.</p>\r\n\r\n <p data-mce- style "color: rgb(34, 34, 34); font-family: \'Open Sans\', \'Helvetica Neue\', Helvetica, Arial, sans-serif; line-height: 23.8px; margin-bottom: 0.825em; font-size: 14px; text-align: justify;">MCDM adalah sebuah teknik untuk pemilihan kandidat terbaik dari beberapa calon solusi berdasarkan beberapa kriteria. Sebagai gambaran, misalkan Ilyas ingin memberi&nbsp;<i >smartphone untuk&nbsp;</i>kebutuhannya sehari-hari.</p>\r\n', '', NULL, 0, 'Pemberitahuan', '0000-00-00', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia||', 'Undangan Haji', '2015-11-03', '2015-12-03 13:39:48', '21/Y/15/Yu.20', '0', 'out', 0, '', NULL, 'Surat Balasan', 1),
	(42, '\'<p >The question marks are there because I use parametrized, prepared, statements with PHP&#39;s PDO. However, I have also tried executing this with data manually, and it really does not work.</p>\\r\\n\\r\\n <p >While I&#39;d like to know why each of them doesn&#39;t work, I would prefer to use the first query if it can be made to work</p>\\r\\n\'', '72aa05b6ff9224e6b1bc8dd3fc23d66a.zip', NULL, 0, '\'Undangan\'', '0000-00-00', '\'Ketua Umum\'', '\'Syadad bin Syam\'', '\'mendesak|rahasia|penting|biasa\'', '\'Undangan Haji\'', '0000-00-00', '2015-12-03 11:34:56', '\'21/Y/15/Yu.20\'', '\'12309839\'', 'in', 0, '\'manusia, datang\'', NULL, '\'Surat Pemberitahuan Undangan Acara Peresmian\'', 1),
	(43, '\'<p>from surat s left join admin a on (s.idadmin=a.idadmin)</p>\\r\\n\'', '1a944ce9649a7171743c44bf96aea233.zip', NULL, 0, '\'Rekomendasi\'', '0000-00-00', '\'Ketua Umum\'', '\'Syadad bin Syam\'', '\'mendesak|rahasia|penting|biasa\'', '\'Undangan Haji\'', '0000-00-00', '2015-12-03 13:46:08', '\'2928982\'', '\'102901291\'', 'in', 0, '\'1,2,2,2,1,1\'', NULL, '\'Surat Baru\'', 1);
/*!40000 ALTER TABLE `surat` ENABLE KEYS */;


-- Dumping structure for table persuratan.s_agenda_warna
CREATE TABLE IF NOT EXISTS `s_agenda_warna` (
  `id` int(11) NOT NULL,
  `warna` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.s_agenda_warna: ~0 rows (approximately)
DELETE FROM `s_agenda_warna`;
/*!40000 ALTER TABLE `s_agenda_warna` DISABLE KEYS */;
/*!40000 ALTER TABLE `s_agenda_warna` ENABLE KEYS */;


-- Dumping structure for table persuratan.tamu
CREATE TABLE IF NOT EXISTS `tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text,
  `agenda` int(11) DEFAULT NULL,
  `asal` text,
  `telp` text,
  `foto` text,
  `keterangan` text,
  `disposisi` text,
  `hasil` text,
  `file` text,
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_tamu_agenda` (`agenda`),
  CONSTRAINT `FK_tamu_agenda` FOREIGN KEY (`agenda`) REFERENCES `agenda` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table persuratan.tamu: ~1 rows (approximately)
DELETE FROM `tamu`;
/*!40000 ALTER TABLE `tamu` DISABLE KEYS */;
INSERT INTO `tamu` (`id`, `nama`, `agenda`, `asal`, `telp`, `foto`, `keterangan`, `disposisi`, `hasil`, `file`, `waktu`) VALUES
	(1, 'Nama', 12, 'asans', '98912', 'ajshajh', 'ahsjahsa', 'jahsjha', 'ajshja', 'jahsjah', '2015-12-10 14:35:44');
/*!40000 ALTER TABLE `tamu` ENABLE KEYS */;


-- Dumping structure for trigger persuratan.admin_before_insert
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `admin_before_insert` BEFORE INSERT ON `admin` FOR EACH ROW BEGIN
	if(new.password!="") then
		set new.password = md5(new.password);
	end if;	
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Dumping structure for trigger persuratan.admin_before_update
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `admin_before_update` BEFORE UPDATE ON `admin` FOR EACH ROW BEGIN
	if(new.password!="") then
		set new.password = md5(new.password);
	end if;
	
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;


-- Dumping structure for view persuratan.draft
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `draft`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `draft` AS select surat.*, admin.nama from surat left join admin on(surat.idadmin=admin.idadmin) where surat.isdraft=1 ;


-- Dumping structure for view persuratan.inbox
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `inbox`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `inbox` AS (select '0' as 'isread', s.*,  DATE_FORMAT(s.tanggal_surat,'%d %M %Y') as 'tanggal',a.nama from surat s left join admin a on (s.idadmin=a.idadmin)  
where not EXISTS (
	select 1 from notifikasi n
	where s.id = n.surat and a.idadmin=n.user
)
and s.jenis_surat="in" and s.isdraft=0 
)
union (
select '1' as 'isread', s.*,  DATE_FORMAT(s.tanggal_surat,'%d %M %Y') as 'tanggal',a.nama from surat s left join admin a on (s.idadmin=a.idadmin)
where EXISTS (
	select 1 from notifikasi n
	where s.id = n.surat and a.idadmin=n.user
)
and s.jenis_surat="in" and s.isdraft=0)

order by tanggal desc ;


-- Dumping structure for view persuratan.notif
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `notif`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `notif` AS select s.*,  DATE_FORMAT(s.tanggal_surat,'%d %M %Y') as 'tanggal',a.nama from surat s left join admin a on (s.idadmin=a.idadmin)
where not EXISTS (
	select 1 from notifikasi n
	where s.id = n.surat and a.idadmin=n.user
)
and s.jenis_surat="in" and s.isdraft=0 ;


-- Dumping structure for view persuratan.outbox
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `outbox`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `outbox` AS select surat.*, admin.nama,DATE_FORMAT(surat.tanggal_surat,'%d %M %Y') as 'tanggal' from surat left join admin on(surat.idadmin=admin.idadmin) where surat.isdraft=0 and surat.jenis_surat="out" ;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
