CREATE TABLE `pesan` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_pengirim` int(100) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `id_penerima` int(100) NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `id_reff` int(100) NOT NULL,
  `subyek` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `stt_baca` int(10) NOT NULL DEFAULT '0',
  `stt_balas` int(10) NOT NULL DEFAULT '0',
  `stt_arsip` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

