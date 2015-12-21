-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2015 at 10:21 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `persuratan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

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
  KEY `FK_admin_access` (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `tanggal_buat`, `alamat`, `telp`, `email`, `username`, `password`, `aktif`, `kode`, `gender`) VALUES
(1, 'Koordinator', '2015-10-26 15:34:10', 'TT', '085707044393', 'misbachul.h@gmail.com', 'admin', '962012d09b8170d912f0669f6d7d9d07', 1, 2, 0),
(2, 'operator', '2015-10-30 03:28:27', 'TT', NULL, 'misbachul.h@live.com', 'operator', '21232f297a57a5a743894a0e4a801fc3', 1, 6, NULL),
(3, 'front office', '2015-12-08 03:30:54', 'TT', '083812345674', 'fh@live.com', 'fo', '962012d09b8170d912f0669f6d7d9d07', 1, 1, 0);

--
-- Triggers `admin`
--
DROP TRIGGER IF EXISTS `admin_before_insert`;
DELIMITER //
CREATE TRIGGER `admin_before_insert` BEFORE INSERT ON `admin`
 FOR EACH ROW BEGIN
	if(new.password!="") then
		set new.password = md5(new.password);
	end if;	
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `admin_before_update`;
DELIMITER //
CREATE TRIGGER `admin_before_update` BEFORE UPDATE ON `admin`
 FOR EACH ROW BEGIN
	if(new.password!="") then
		set new.password = md5(new.password);
	end if;
	
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

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
  KEY `FK_agenda_surat` (`surat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `judul`, `awal`, `hasil`, `akhir`, `isi`, `tanggal_buat`, `file`, `admin`, `surat`, `tempat`) VALUES
(1, 'Keadaan', '2015-12-03 00:00:00', NULL, '2015-12-03 20:18:32', 'Syalala', '2015-12-03 06:02:18', NULL, 1, 42, 'Gedung'),
(8, 'Surat Pemberitahuan Undangan Acara Peresmian', '2015-12-04 23:59:00', NULL, '2015-12-04 23:58:00', 'asasasasasa', '2015-12-03 07:43:58', NULL, 1, NULL, 'Gedung'),
(9, 'Judul Surat', '2015-12-04 23:59:00', NULL, '2015-12-06 00:59:00', 'Keterangan', '2015-12-03 07:55:23', NULL, 1, NULL, 'Gedung'),
(10, 'Judul Surat', '2015-12-04 23:59:00', NULL, '2015-12-06 00:59:00', 'Keterangan', '2015-12-03 07:56:04', NULL, 1, NULL, 'Gedung'),
(11, 'Judul Surat', '2015-12-04 23:59:00', NULL, '2015-12-06 00:59:00', 'Keterangan', '2015-12-03 07:57:13', NULL, 1, NULL, 'Gedung'),
(12, 'Acara Peresmian', '2015-12-30 23:59:00', NULL, '2015-12-31 23:59:00', 'syalalala', '2015-12-03 08:01:26', NULL, 1, NULL, 'Gedung'),
(13, 'Acara Peresmian', '2015-12-13 00:00:00', NULL, '2015-12-06 23:00:00', '123456', '2015-12-03 08:04:32', NULL, 1, NULL, 'Gedung'),
(14, 'Acara Peresmian', '2015-12-13 00:00:00', NULL, '2015-12-06 23:00:00', '123456', '2015-12-03 08:05:00', NULL, 1, NULL, 'Gedung'),
(15, 'Agenda1', '2015-12-13 22:00:00', 'Hasil', '2015-12-12 23:00:00', 'Keterangan', '2015-12-03 08:15:12', NULL, 1, NULL, 'Gedung');

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE IF NOT EXISTS `akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(50) NOT NULL,
  `akses` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id`, `code`, `akses`) VALUES
(1, 'fo', 'Front Office'),
(2, 'coord', 'Koordinator'),
(3, 'coord', 'Sekretaris'),
(4, 'coord', 'Ketua'),
(5, 'ge', 'Guest'),
(6, 'operator', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `draft`
--
CREATE TABLE IF NOT EXISTS `draft` (
`id` int(11)
,`isi` longtext
,`lampiran` text
,`hasil` text
,`index` int(11)
,`kategori` text
,`tanggal_terima` date
,`penerima` text
,`pengirim` text
,`sifat` text
,`perihal` text
,`tanggal_surat` date
,`tanggal_entry` timestamp
,`nomor` text
,`jurnal` text
,`jenis_surat` text
,`isdraft` int(11)
,`tembusan` text
,`parrent` int(11)
,`judul` text
,`idadmin` int(11)
,`nama` varchar(45)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `inbox`
--
CREATE TABLE IF NOT EXISTS `inbox` (
`isread` varchar(1)
,`id` int(11)
,`isi` longtext
,`lampiran` text
,`hasil` text
,`index` int(11)
,`kategori` text
,`tanggal_terima` date
,`penerima` text
,`pengirim` text
,`sifat` text
,`perihal` text
,`tanggal_surat` date
,`tanggal_entry` timestamp
,`nomor` text
,`jurnal` text
,`jenis_surat` text
,`isdraft` int(11)
,`tembusan` text
,`parrent` int(11)
,`judul` text
,`idadmin` int(11)
,`tanggal` varchar(72)
,`nama` varchar(45)
);
-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE IF NOT EXISTS `memo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `surat` int(11) NOT NULL DEFAULT '0',
  `dari` text NOT NULL,
  `admin_idadmin` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__surat` (`surat`),
  KEY `fk_memo_admin1_idx` (`admin_idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`id`, `isi`, `tanggal`, `surat`, `dari`, `admin_idadmin`) VALUES
(3, 'Halo ini adalah memo', '2015-11-02 22:50:14', 30, '', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `notif`
--
CREATE TABLE IF NOT EXISTS `notif` (
`id` int(11)
,`isi` longtext
,`lampiran` text
,`hasil` text
,`index` int(11)
,`kategori` text
,`tanggal_terima` date
,`penerima` text
,`pengirim` text
,`sifat` text
,`perihal` text
,`tanggal_surat` date
,`tanggal_entry` timestamp
,`nomor` text
,`jurnal` text
,`jenis_surat` text
,`isdraft` int(11)
,`tembusan` text
,`parrent` int(11)
,`judul` text
,`idadmin` int(11)
,`tanggal` varchar(72)
,`nama` varchar(45)
);
-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE IF NOT EXISTS `notifikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surat` int(11) DEFAULT NULL,
  `isread` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_notifikasi_surat` (`surat`),
  KEY `user` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `notifikasi`
--

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
(18, 1, 1, 1),
(19, 30, 1, 1),
(20, 30, 1, 1),
(21, 30, 1, 1),
(22, 30, 1, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `outbox`
--
CREATE TABLE IF NOT EXISTS `outbox` (
`id` int(11)
,`isi` longtext
,`lampiran` text
,`hasil` text
,`index` int(11)
,`kategori` text
,`tanggal_terima` date
,`penerima` text
,`pengirim` text
,`sifat` text
,`perihal` text
,`tanggal_surat` date
,`tanggal_entry` timestamp
,`nomor` text
,`jurnal` text
,`jenis_surat` text
,`isdraft` int(11)
,`tembusan` text
,`parrent` int(11)
,`judul` text
,`idadmin` int(11)
,`nama` varchar(45)
,`tanggal` varchar(72)
);
-- --------------------------------------------------------

--
-- Table structure for table `pendamping`
--

CREATE TABLE IF NOT EXISTS `pendamping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `telp` text NOT NULL,
  `agenda` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pendamping_agenda` (`agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `pendamping`
--

INSERT INTO `pendamping` (`id`, `nama`, `telp`, `agenda`) VALUES
(1, '0', '0', 12),
(2, 'Tunggulah', '085232039393', 12),
(3, '0', '0', 13),
(4, 'Pembimbing1', '085232039393', 13),
(5, 'Pembimbing1', '085232039393', 14),
(6, 'Pembimbing2', '085232039393', 14),
(7, 'Pendamping1 ', '08623672', 15),
(8, 'Pendamping2', '02932824', 15);

-- --------------------------------------------------------

--
-- Table structure for table `rundown`
--

CREATE TABLE IF NOT EXISTS `rundown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` time NOT NULL,
  `pic` text NOT NULL,
  `tempat` text NOT NULL,
  `agenda` int(11) NOT NULL,
  `nama` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__agenda` (`agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `satpassus`
--

CREATE TABLE IF NOT EXISTS `satpassus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agenda` int(11) NOT NULL DEFAULT '0',
  `nama` text,
  `telp` text,
  PRIMARY KEY (`id`),
  KEY `FK_satpassus_agenda` (`agenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `satpassus`
--

INSERT INTO `satpassus` (`id`, `agenda`, `nama`, `telp`) VALUES
(1, 15, 'passus 1', '2938928'),
(2, 15, 'passus 2', '928323');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

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
  KEY `fk_surat_admin1_idx` (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `isi`, `lampiran`, `hasil`, `index`, `kategori`, `tanggal_terima`, `penerima`, `pengirim`, `sifat`, `perihal`, `tanggal_surat`, `tanggal_entry`, `nomor`, `jurnal`, `jenis_surat`, `isdraft`, `tembusan`, `parrent`, `judul`, `idadmin`) VALUES
(1, 'Isi', '', NULL, 0, 'kategori 1', '2015-10-27', 'Ketua', 'Kerajaan Siliwangi', 'penting', 'keagamaan', '2015-10-27', '2015-12-02 23:40:01', '98393823', 'judul', 'in', 0, NULL, NULL, NULL, 1),
(2, 'Notif Surat', '', NULL, 0, 'Kategori 1', '2015-10-27', 'Ketua', 'Majapahit', 'Penting Sekali', 'Undangan', '2015-10-27', '2015-12-02 23:40:00', '12/1221n/12', 'Judul Notif', 'in', 0, NULL, NULL, NULL, 1),
(30, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', '1446521125modules.zip', NULL, 0, 'Pemberitahuan', '2015-11-04', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', 'Undangan Haji', '2015-11-04', '2015-12-02 23:39:58', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'Kades, Kadep', NULL, 'Surat Pemberitahuan Undangan Acara Peresmian', 1),
(31, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', NULL, NULL, 0, 'Pemberitahuan', '2015-11-04', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', 'Undangan Haji', '2015-11-04', '2015-12-02 23:39:56', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'Kades, Kadep', NULL, 'Surat Pemberitahuan Undangan Acara Peresmian', 1),
(32, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', NULL, NULL, 0, 'Proposal', '2015-11-03', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', '', '2015-11-03', '2015-12-02 23:39:54', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'kadep, supervisi', NULL, 'Surat Pemberitahuan Undangan Senja', 1),
(33, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', 'e5134c3357d280922fc66f7d502616f8.zip', NULL, 0, 'Proposal', '2015-11-03', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', '', '2015-11-03', '2015-12-02 23:39:52', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'kadep, supervisi', NULL, 'Surat Pemberitahuan Undangan Senja', 1),
(34, '<p >The accept attribute is supported in all major browsers, except Internet Explorer and Safari. Definition and Usage</p>\r\n\r\n <p >The accept attribute specifies the types of files that the server accepts (that can be submitted through a file upload).</p>\r\n', 'e6abf7cb751ebc8a8d1847da0baac1ca.zip', NULL, 0, 'Proposal', '2015-11-03', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia|penting|', '', '2015-11-03', '2015-12-02 23:39:51', '21/Y/15/Yu.20', 'P301A', 'in', 0, 'kadep, supervisi', NULL, 'Surat Pemberitahuan Undangan Senja', 1),
(35, '<p data-mce- >Dalam progres yang masih jauh dari dugaan, ada cerita dibalik materi yang dipelajari.</p>\r\n\r\n <p data-mce- style "color: rgb(34, 34, 34); font-family: ''Open Sans'', ''Helvetica Neue'', Helvetica, Arial, sans-serif; line-height: 23.8px; margin-bottom: 0.825em; font-size: 14px; text-align: justify;">MCDM adalah sebuah teknik untuk pemilihan kandidat terbaik dari beberapa calon solusi berdasarkan beberapa kriteria. Sebagai gambaran, misalkan Ilyas ingin memberi&nbsp;<i >smartphone untuk&nbsp;</i>kebutuhannya sehari-hari.</p>\r\n', '', NULL, 0, 'Pemberitahuan', '0000-00-00', 'Ketua Umum', 'Syadad bin Syam', 'mendesak|rahasia||', 'Undangan Haji', '2015-11-03', '2015-12-02 23:39:48', '21/Y/15/Yu.20', '0', 'out', 0, '', NULL, 'Surat Balasan', 1),
(42, '''<p >The question marks are there because I use parametrized, prepared, statements with PHP&#39;s PDO. However, I have also tried executing this with data manually, and it really does not work.</p>\\r\\n\\r\\n <p >While I&#39;d like to know why each of them doesn&#39;t work, I would prefer to use the first query if it can be made to work</p>\\r\\n''', '72aa05b6ff9224e6b1bc8dd3fc23d66a.zip', NULL, 0, '''Undangan''', '0000-00-00', '''Ketua Umum''', '''Syadad bin Syam''', '''mendesak|rahasia|penting|biasa''', '''Undangan Haji''', '0000-00-00', '2015-12-02 21:34:56', '''21/Y/15/Yu.20''', '''12309839''', 'in', 0, '''manusia, datang''', NULL, '''Surat Pemberitahuan Undangan Acara Peresmian''', 1),
(43, '''<p>from surat s left join admin a on (s.idadmin=a.idadmin)</p>\\r\\n''', '1a944ce9649a7171743c44bf96aea233.zip', NULL, 0, '''Rekomendasi''', '0000-00-00', '''Ketua Umum''', '''Syadad bin Syam''', '''mendesak|rahasia|penting|biasa''', '''Undangan Haji''', '0000-00-00', '2015-12-02 23:46:08', '''2928982''', '''102901291''', 'in', 0, '''1,2,2,2,1,1''', NULL, '''Surat Baru''', 1),
(46, '<p>Isinya</p>\r\n', '6060557576c59a41f89ad9bab65ca7a3.zip', NULL, 0, 'Undangan', '2015-12-09', 'Ketua Umum', 'Pak Surasip', 'mendesak|rahasia|penting|biasa', '', '2015-12-13', '2015-12-13 23:20:52', '82738278', '090283', 'in', 0, 'pak ketua, pak sekretaris', NULL, 'Surat Masuk Undangan Acara Peresmian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_agenda_warna`
--

CREATE TABLE IF NOT EXISTS `s_agenda_warna` (
  `id` int(11) NOT NULL,
  `warna` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

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
  `publik` int(11) DEFAULT '0',
  `verifikasi` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_tamu_agenda` (`agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure for view `draft`
--
DROP TABLE IF EXISTS `draft`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `draft` AS select `surat`.`id` AS `id`,`surat`.`isi` AS `isi`,`surat`.`lampiran` AS `lampiran`,`surat`.`hasil` AS `hasil`,`surat`.`index` AS `index`,`surat`.`kategori` AS `kategori`,`surat`.`tanggal_terima` AS `tanggal_terima`,`surat`.`penerima` AS `penerima`,`surat`.`pengirim` AS `pengirim`,`surat`.`sifat` AS `sifat`,`surat`.`perihal` AS `perihal`,`surat`.`tanggal_surat` AS `tanggal_surat`,`surat`.`tanggal_entry` AS `tanggal_entry`,`surat`.`nomor` AS `nomor`,`surat`.`jurnal` AS `jurnal`,`surat`.`jenis_surat` AS `jenis_surat`,`surat`.`isdraft` AS `isdraft`,`surat`.`tembusan` AS `tembusan`,`surat`.`parrent` AS `parrent`,`surat`.`judul` AS `judul`,`surat`.`idadmin` AS `idadmin`,`admin`.`nama` AS `nama` from (`surat` left join `admin` on((`surat`.`idadmin` = `admin`.`idadmin`))) where (`surat`.`isdraft` = 1);

-- --------------------------------------------------------

--
-- Structure for view `inbox`
--
DROP TABLE IF EXISTS `inbox`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `inbox` AS (select '0' AS `isread`,`s`.`id` AS `id`,`s`.`isi` AS `isi`,`s`.`lampiran` AS `lampiran`,`s`.`hasil` AS `hasil`,`s`.`index` AS `index`,`s`.`kategori` AS `kategori`,`s`.`tanggal_terima` AS `tanggal_terima`,`s`.`penerima` AS `penerima`,`s`.`pengirim` AS `pengirim`,`s`.`sifat` AS `sifat`,`s`.`perihal` AS `perihal`,`s`.`tanggal_surat` AS `tanggal_surat`,`s`.`tanggal_entry` AS `tanggal_entry`,`s`.`nomor` AS `nomor`,`s`.`jurnal` AS `jurnal`,`s`.`jenis_surat` AS `jenis_surat`,`s`.`isdraft` AS `isdraft`,`s`.`tembusan` AS `tembusan`,`s`.`parrent` AS `parrent`,`s`.`judul` AS `judul`,`s`.`idadmin` AS `idadmin`,date_format(`s`.`tanggal_surat`,'%d %M %Y') AS `tanggal`,`a`.`nama` AS `nama` from (`surat` `s` left join `admin` `a` on((`s`.`idadmin` = `a`.`idadmin`))) where ((not(exists(select 1 from `notifikasi` `n` where ((`s`.`id` = `n`.`surat`) and (`a`.`idadmin` = `n`.`user`))))) and (`s`.`jenis_surat` = 'in') and (`s`.`isdraft` = 0))) union (select '1' AS `isread`,`s`.`id` AS `id`,`s`.`isi` AS `isi`,`s`.`lampiran` AS `lampiran`,`s`.`hasil` AS `hasil`,`s`.`index` AS `index`,`s`.`kategori` AS `kategori`,`s`.`tanggal_terima` AS `tanggal_terima`,`s`.`penerima` AS `penerima`,`s`.`pengirim` AS `pengirim`,`s`.`sifat` AS `sifat`,`s`.`perihal` AS `perihal`,`s`.`tanggal_surat` AS `tanggal_surat`,`s`.`tanggal_entry` AS `tanggal_entry`,`s`.`nomor` AS `nomor`,`s`.`jurnal` AS `jurnal`,`s`.`jenis_surat` AS `jenis_surat`,`s`.`isdraft` AS `isdraft`,`s`.`tembusan` AS `tembusan`,`s`.`parrent` AS `parrent`,`s`.`judul` AS `judul`,`s`.`idadmin` AS `idadmin`,date_format(`s`.`tanggal_surat`,'%d %M %Y') AS `tanggal`,`a`.`nama` AS `nama` from (`surat` `s` left join `admin` `a` on((`s`.`idadmin` = `a`.`idadmin`))) where (exists(select 1 from `notifikasi` `n` where ((`s`.`id` = `n`.`surat`) and (`a`.`idadmin` = `n`.`user`))) and (`s`.`jenis_surat` = 'in') and (`s`.`isdraft` = 0))) order by `tanggal` desc;

-- --------------------------------------------------------

--
-- Structure for view `notif`
--
DROP TABLE IF EXISTS `notif`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `notif` AS select `s`.`id` AS `id`,`s`.`isi` AS `isi`,`s`.`lampiran` AS `lampiran`,`s`.`hasil` AS `hasil`,`s`.`index` AS `index`,`s`.`kategori` AS `kategori`,`s`.`tanggal_terima` AS `tanggal_terima`,`s`.`penerima` AS `penerima`,`s`.`pengirim` AS `pengirim`,`s`.`sifat` AS `sifat`,`s`.`perihal` AS `perihal`,`s`.`tanggal_surat` AS `tanggal_surat`,`s`.`tanggal_entry` AS `tanggal_entry`,`s`.`nomor` AS `nomor`,`s`.`jurnal` AS `jurnal`,`s`.`jenis_surat` AS `jenis_surat`,`s`.`isdraft` AS `isdraft`,`s`.`tembusan` AS `tembusan`,`s`.`parrent` AS `parrent`,`s`.`judul` AS `judul`,`s`.`idadmin` AS `idadmin`,date_format(`s`.`tanggal_surat`,'%d %M %Y') AS `tanggal`,`a`.`nama` AS `nama` from (`surat` `s` left join `admin` `a` on((`s`.`idadmin` = `a`.`idadmin`))) where ((not(exists(select 1 from `notifikasi` `n` where ((`s`.`id` = `n`.`surat`) and (`a`.`idadmin` = `n`.`user`))))) and (`s`.`jenis_surat` = 'in') and (`s`.`isdraft` = 0));

-- --------------------------------------------------------

--
-- Structure for view `outbox`
--
DROP TABLE IF EXISTS `outbox`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `outbox` AS select `surat`.`id` AS `id`,`surat`.`isi` AS `isi`,`surat`.`lampiran` AS `lampiran`,`surat`.`hasil` AS `hasil`,`surat`.`index` AS `index`,`surat`.`kategori` AS `kategori`,`surat`.`tanggal_terima` AS `tanggal_terima`,`surat`.`penerima` AS `penerima`,`surat`.`pengirim` AS `pengirim`,`surat`.`sifat` AS `sifat`,`surat`.`perihal` AS `perihal`,`surat`.`tanggal_surat` AS `tanggal_surat`,`surat`.`tanggal_entry` AS `tanggal_entry`,`surat`.`nomor` AS `nomor`,`surat`.`jurnal` AS `jurnal`,`surat`.`jenis_surat` AS `jenis_surat`,`surat`.`isdraft` AS `isdraft`,`surat`.`tembusan` AS `tembusan`,`surat`.`parrent` AS `parrent`,`surat`.`judul` AS `judul`,`surat`.`idadmin` AS `idadmin`,`admin`.`nama` AS `nama`,date_format(`surat`.`tanggal_surat`,'%d %M %Y') AS `tanggal` from (`surat` left join `admin` on((`surat`.`idadmin` = `admin`.`idadmin`))) where ((`surat`.`isdraft` = 0) and (`surat`.`jenis_surat` = 'out'));

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_admin_access` FOREIGN KEY (`kode`) REFERENCES `akses` (`id`);

--
-- Constraints for table `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `FK_agenda_admin` FOREIGN KEY (`admin`) REFERENCES `admin` (`idadmin`),
  ADD CONSTRAINT `FK_agenda_surat` FOREIGN KEY (`surat`) REFERENCES `surat` (`id`);

--
-- Constraints for table `memo`
--
ALTER TABLE `memo`
  ADD CONSTRAINT `fk_memo_admin1` FOREIGN KEY (`admin_idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK__surat` FOREIGN KEY (`surat`) REFERENCES `surat` (`id`);

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `FK_notifikasi_admin` FOREIGN KEY (`user`) REFERENCES `admin` (`idadmin`),
  ADD CONSTRAINT `FK_notifikasi_surat` FOREIGN KEY (`surat`) REFERENCES `surat` (`id`);

--
-- Constraints for table `pendamping`
--
ALTER TABLE `pendamping`
  ADD CONSTRAINT `FK_pendamping_agenda` FOREIGN KEY (`agenda`) REFERENCES `agenda` (`id`);

--
-- Constraints for table `rundown`
--
ALTER TABLE `rundown`
  ADD CONSTRAINT `FK__agenda` FOREIGN KEY (`agenda`) REFERENCES `agenda` (`id`);

--
-- Constraints for table `satpassus`
--
ALTER TABLE `satpassus`
  ADD CONSTRAINT `FK_satpassus_agenda` FOREIGN KEY (`agenda`) REFERENCES `agenda` (`id`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `fk_surat_admin1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tamu`
--
ALTER TABLE `tamu`
  ADD CONSTRAINT `FK_tamu_agenda` FOREIGN KEY (`agenda`) REFERENCES `agenda` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
