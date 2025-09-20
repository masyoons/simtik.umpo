CREATE TABLE `data_login_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(100) DEFAULT NULL COMMENT 'MHS, DOSEN, KAPRODI, DEKAN, ADMIN, REKTOR, WR, KABAPK, KABAEA, DLL\r\n',
  `aksi` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `login_time` datetime NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `device` varchar(20) DEFAULT NULL,
  `os` varchar(50) DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;
