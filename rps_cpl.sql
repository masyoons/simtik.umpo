CREATE TABLE `rps_cpl` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `addtgl` datetime NOT NULL,
  `id_rpsmk` int(100) NOT NULL,
  `kurikulum` int(10) NOT NULL DEFAULT '2024',
  `kode_fp` varchar(20) NOT NULL,
  `kode_cpl` varchar(20) NOT NULL,
  `kat_cpl` varchar(20) NOT NULL,
  `cpl` text NOT NULL,
  `urutan` int(50) NOT NULL DEFAULT '0',
  `stts` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
