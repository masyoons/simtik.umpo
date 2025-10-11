CREATE TABLE `kuliah_pembimbing` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `kunci` varchar(100) DEFAULT NULL,
  `no_pembimbing` int(10) DEFAULT NULL,
  `pembimbing` int(50) DEFAULT NULL,
  `stts` int(10) DEFAULT '1',
  `kode_fp` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26639 DEFAULT CHARSET=latin1;

