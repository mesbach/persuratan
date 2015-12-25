

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `tanggal_buat`, `alamat`, `telp`, `email`, `username`, `password`, `aktif`, `kode`, `gender`) VALUES
(1, 'Koordinator', '2015-10-26 15:34:10', 'TT', '085707044393', 'koor@gmail.com', 'koor', '827ccb0eea8a706c4c34a16891f84e7b', 1, 2, 0),
(2, 'operator', '2015-10-30 03:28:27', 'TT', '1234', 'op@live.com', 'op', '827ccb0eea8a706c4c34a16891f84e7b', 1, 6, 0),
(3, 'front office', '2015-12-08 03:30:54', 'TT', '083812345674', 'fh@live.com', 'fo', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1, 0),
(4, 'Sekretaris Pribadi', '2015-12-25 17:36:56', 'TT', '1234', 'sekpri@gmail.com', 'sekpri', '827ccb0eea8a706c4c34a16891f84e7b', 1, 3, 0),
(5, 'Ketua Umum', '2015-12-25 17:38:37', 'TT', '3465', 'ketum@gmail.com', 'ketum', '827ccb0eea8a706c4c34a16891f84e7b', 1, 4, 0);

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
  `publik` int(11) DEFAULT NULL,
  `awal` datetime DEFAULT NULL,
  `hasil` text,
  `akhir` datetime DEFAULT NULL,
  `isi` longtext,
  `tanggal_buat` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file` text,
  `admin` int(11) DEFAULT NULL,
  `surat` int(11) DEFAULT NULL,
  `tempat` text,
  `verifikasi` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FK_agenda_admin` (`admin`),
  KEY `FK_agenda_surat` (`surat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rundown`
--

CREATE TABLE IF NOT EXISTS `rundown` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `waktu` timestamp NULL DEFAULT NULL,
  `pic` text,
  `tempat` text,
  `agenda` int(11) NOT NULL,
  `nama` text NOT NULL,
  `keterangan` text,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `waktuberakhir` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_tamu_agenda` (`agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure for view `draft`
--
DROP TABLE IF EXISTS `draft`;

CREATE   VIEW `draft` AS select `surat`.`id` AS `id`,`surat`.`isi` AS `isi`,`surat`.`lampiran` AS `lampiran`,`surat`.`hasil` AS `hasil`,`surat`.`index` AS `index`,`surat`.`kategori` AS `kategori`,`surat`.`tanggal_terima` AS `tanggal_terima`,`surat`.`penerima` AS `penerima`,`surat`.`pengirim` AS `pengirim`,`surat`.`sifat` AS `sifat`,`surat`.`perihal` AS `perihal`,`surat`.`tanggal_surat` AS `tanggal_surat`,`surat`.`tanggal_entry` AS `tanggal_entry`,`surat`.`nomor` AS `nomor`,`surat`.`jurnal` AS `jurnal`,`surat`.`jenis_surat` AS `jenis_surat`,`surat`.`isdraft` AS `isdraft`,`surat`.`tembusan` AS `tembusan`,`surat`.`parrent` AS `parrent`,`surat`.`judul` AS `judul`,`surat`.`idadmin` AS `idadmin`,`admin`.`nama` AS `nama` from (`surat` left join `admin` on((`surat`.`idadmin` = `admin`.`idadmin`))) where (`surat`.`isdraft` = 1);

-- --------------------------------------------------------

--
-- Structure for view `inbox`
--
DROP TABLE IF EXISTS `inbox`;

CREATE   VIEW `inbox` AS (select '0' AS `isread`,`s`.`id` AS `id`,`s`.`isi` AS `isi`,`s`.`lampiran` AS `lampiran`,`s`.`hasil` AS `hasil`,`s`.`index` AS `index`,`s`.`kategori` AS `kategori`,`s`.`tanggal_terima` AS `tanggal_terima`,`s`.`penerima` AS `penerima`,`s`.`pengirim` AS `pengirim`,`s`.`sifat` AS `sifat`,`s`.`perihal` AS `perihal`,`s`.`tanggal_surat` AS `tanggal_surat`,`s`.`tanggal_entry` AS `tanggal_entry`,`s`.`nomor` AS `nomor`,`s`.`jurnal` AS `jurnal`,`s`.`jenis_surat` AS `jenis_surat`,`s`.`isdraft` AS `isdraft`,`s`.`tembusan` AS `tembusan`,`s`.`parrent` AS `parrent`,`s`.`judul` AS `judul`,`s`.`idadmin` AS `idadmin`,date_format(`s`.`tanggal_surat`,'%d %M %Y') AS `tanggal`,`a`.`nama` AS `nama` from (`surat` `s` left join `admin` `a` on((`s`.`idadmin` = `a`.`idadmin`))) where ((not(exists(select 1 from `notifikasi` `n` where ((`s`.`id` = `n`.`surat`) and (`a`.`idadmin` = `n`.`user`))))) and (`s`.`jenis_surat` = 'in') and (`s`.`isdraft` = 0))) union (select '1' AS `isread`,`s`.`id` AS `id`,`s`.`isi` AS `isi`,`s`.`lampiran` AS `lampiran`,`s`.`hasil` AS `hasil`,`s`.`index` AS `index`,`s`.`kategori` AS `kategori`,`s`.`tanggal_terima` AS `tanggal_terima`,`s`.`penerima` AS `penerima`,`s`.`pengirim` AS `pengirim`,`s`.`sifat` AS `sifat`,`s`.`perihal` AS `perihal`,`s`.`tanggal_surat` AS `tanggal_surat`,`s`.`tanggal_entry` AS `tanggal_entry`,`s`.`nomor` AS `nomor`,`s`.`jurnal` AS `jurnal`,`s`.`jenis_surat` AS `jenis_surat`,`s`.`isdraft` AS `isdraft`,`s`.`tembusan` AS `tembusan`,`s`.`parrent` AS `parrent`,`s`.`judul` AS `judul`,`s`.`idadmin` AS `idadmin`,date_format(`s`.`tanggal_surat`,'%d %M %Y') AS `tanggal`,`a`.`nama` AS `nama` from (`surat` `s` left join `admin` `a` on((`s`.`idadmin` = `a`.`idadmin`))) where (exists(select 1 from `notifikasi` `n` where ((`s`.`id` = `n`.`surat`) and (`a`.`idadmin` = `n`.`user`))) and (`s`.`jenis_surat` = 'in') and (`s`.`isdraft` = 0))) order by `tanggal` desc;

-- --------------------------------------------------------

--
-- Structure for view `notif`
--
DROP TABLE IF EXISTS `notif`;

CREATE   VIEW `notif` AS select `s`.`id` AS `id`,`s`.`isi` AS `isi`,`s`.`lampiran` AS `lampiran`,`s`.`hasil` AS `hasil`,`s`.`index` AS `index`,`s`.`kategori` AS `kategori`,`s`.`tanggal_terima` AS `tanggal_terima`,`s`.`penerima` AS `penerima`,`s`.`pengirim` AS `pengirim`,`s`.`sifat` AS `sifat`,`s`.`perihal` AS `perihal`,`s`.`tanggal_surat` AS `tanggal_surat`,`s`.`tanggal_entry` AS `tanggal_entry`,`s`.`nomor` AS `nomor`,`s`.`jurnal` AS `jurnal`,`s`.`jenis_surat` AS `jenis_surat`,`s`.`isdraft` AS `isdraft`,`s`.`tembusan` AS `tembusan`,`s`.`parrent` AS `parrent`,`s`.`judul` AS `judul`,`s`.`idadmin` AS `idadmin`,date_format(`s`.`tanggal_surat`,'%d %M %Y') AS `tanggal`,`a`.`nama` AS `nama` from (`surat` `s` left join `admin` `a` on((`s`.`idadmin` = `a`.`idadmin`))) where ((not(exists(select 1 from `notifikasi` `n` where ((`s`.`id` = `n`.`surat`) and (`a`.`idadmin` = `n`.`user`))))) and (`s`.`jenis_surat` = 'in') and (`s`.`isdraft` = 0));

-- --------------------------------------------------------

--
-- Structure for view `outbox`
--
DROP TABLE IF EXISTS `outbox`;

CREATE   VIEW `outbox` AS select `surat`.`id` AS `id`,`surat`.`isi` AS `isi`,`surat`.`lampiran` AS `lampiran`,`surat`.`hasil` AS `hasil`,`surat`.`index` AS `index`,`surat`.`kategori` AS `kategori`,`surat`.`tanggal_terima` AS `tanggal_terima`,`surat`.`penerima` AS `penerima`,`surat`.`pengirim` AS `pengirim`,`surat`.`sifat` AS `sifat`,`surat`.`perihal` AS `perihal`,`surat`.`tanggal_surat` AS `tanggal_surat`,`surat`.`tanggal_entry` AS `tanggal_entry`,`surat`.`nomor` AS `nomor`,`surat`.`jurnal` AS `jurnal`,`surat`.`jenis_surat` AS `jenis_surat`,`surat`.`isdraft` AS `isdraft`,`surat`.`tembusan` AS `tembusan`,`surat`.`parrent` AS `parrent`,`surat`.`judul` AS `judul`,`surat`.`idadmin` AS `idadmin`,`admin`.`nama` AS `nama`,date_format(`surat`.`tanggal_surat`,'%d %M %Y') AS `tanggal` from (`surat` left join `admin` on((`surat`.`idadmin` = `admin`.`idadmin`))) where ((`surat`.`isdraft` = 0) and (`surat`.`jenis_surat` = 'out'));

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


