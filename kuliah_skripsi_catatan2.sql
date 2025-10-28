CREATE TABLE `kuliah_skripsi_catatan` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tgl_add` datetime NOT NULL,
  `kunci` varchar(100) NOT NULL,
  `id_dsn` int(100) NOT NULL,
  `pembimbing` int(10) NOT NULL DEFAULT '1',
  `sesi` int(20) NOT NULL,
  `tgl` date NOT NULL,
  `url_file` varchar(100) DEFAULT NULL,
  `catatan_dsn` varchar(250) NOT NULL,
  `tgl_baca` datetime DEFAULT NULL,
  `catatan_mhs` varchar(200) DEFAULT NULL,
  `stts` int(10) NOT NULL DEFAULT '0',
  `namaDosen` varchar(50) DEFAULT NULL,
  `nikDosen` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_skripsi` (`kunci`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

