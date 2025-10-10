CREATE TABLE `kuliah_bobot_nilai` (
  `id` int(100) NOT NULL,
  `id_thn_kuliah` int(100) NOT NULL DEFAULT '0',
  `kode_fp` varchar(10) NOT NULL,
  `kode_mk` varchar(20) NOT NULL,
  `kelas_kuliah` varchar(100) NOT NULL,
  `bbt_aktif` int(10) NOT NULL DEFAULT '0',
  `bbt_proyek` int(10) NOT NULL DEFAULT '0',
  `bbt_tugas` int(10) NOT NULL DEFAULT '0',
  `bbt_quiz` int(10) NOT NULL DEFAULT '0',
  `bbt_uts` int(10) NOT NULL DEFAULT '0',
  `bbt_uas` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
