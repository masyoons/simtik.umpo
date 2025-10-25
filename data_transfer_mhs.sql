CREATE TABLE `data_transfer_mhs` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `idMhs` int(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `namaUniv` varchar(50) NOT NULL,
  `alamatUniv` varchar(50) NOT NULL,
  `fakultasUniv` varchar(50) NOT NULL,
  `prodiUniv` varchar(50) NOT NULL,
  `sksUniv` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

