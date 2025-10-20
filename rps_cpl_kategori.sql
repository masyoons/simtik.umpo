CREATE TABLE `rps_cpl_kategori` (
  `idkat` int(50) NOT NULL AUTO_INCREMENT,
  `kode_kat` varchar(20) DEFAULT NULL,
  `kategori` varchar(100) NOT NULL,
  `stts` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idkat`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
