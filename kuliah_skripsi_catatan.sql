CREATE TABLE `kuliah_skripsi_catatan` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tgl_add` datetime NOT NULL,
  `kunci` varchar(100) NOT NULL,
  `id_dsn` int(100) NOT NULL,
  `sesi` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `catatan` varchar(250) NOT NULL,
  `tgl_baca` datetime DEFAULT NULL,
  `catatan_mhs` varchar(200) DEFAULT NULL,
  `stts` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

