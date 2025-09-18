CREATE TABLE `kuliah_ip_mhs` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `kode_fp` varchar(10) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `semester` int(20) NOT NULL,
  `ipk` decimal(20,0) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
