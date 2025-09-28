<?
$frame="1";
include"cek.admin.php";
include"sambung.php";
$kode_fp=$_POST[kode_fp];
$id_thn=$_POST["id_thn"];
$kode_mk=$_POST[kode_mk1];
$id_dosen=$_SESSION["id_dsnx"];
$kode_fp="$_SESSION[fp_dosen]";
$thn_aka=mysql_fetch_array(mysql_query("select * from kuliah_tahun WHERE stts_kuliah = '1'"));
$smtr=$thn_aka[semester];
$thn_aktif=$thn_aka[tahun];
$ta="$thn_aktif/".$thn_aktif+=1;
$id_thn=$thn_aka[id_thn];
$tahun_mk=mysql_fetch_array(mysql_query("select * from kuliah_setting WHERE angkatan = '$thn_aktif'"));
$thn_mk_pilih=$tahun_mk[tahun_mk];
$dsn=mysql_fetch_array(mysql_query("SELECT * FROM hrm_modul.v_dosen WHERE id = '$id_dosen' AND aktif='0'"));
$prodi=mysql_fetch_array(mysql_query("SELECT jurusan.nama_jurusan FROM jurusan WHERE kode_fp = '$kode_fp'"));

//include"log.dosen.php";
//	add_log("$_SESSION[user_id]","$_SESSION[nama_user]","Nilai MHS","Halaman Kelas","","$y");
include_once"../function.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title></title>
<base target="_self">
<style type="text/css">
body {
	background-color: #DCDFED;
	margin-left: 3px;
	margin-top: 3px;
	margin-right: 3px;
	margin-bottom: 3px;
	background-image: url(../images/background.jpg);
	background-repeat: repeat;
}
.tabeldata { border: 1px solid #909090; font-size : 12px }
.judul { font-weight: bold; text-align: center; background: #C0C0C0 }
.terang { background: #E8E8E8 }
.gelap { background: #D8D8D8 }
.sorot { background: #B1D5F8 }
.khusus { background:#F5C4C5}
</style>
<style fprolloverstyle>
A:hover {
	color: #FF0;
	text-decoration: none;
	font-family: Tahoma;
	font-size: 10pt;
	font-weight: normal
}
.kiri {
	background-image: url(img_kiri/kiri.gif);
	background-repeat: repeat-y;
}
.kanan {
	background-image: url(img_kiri/kanan.gif);
	background-repeat: repeat-y;
}
.bawah {
	background-image: url(img_kiri/bawah.gif);
	background-repeat: repeat-x;
}
.header {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 10pt;
	font-weight: bold;
	color: #FFF;
}
.border {
	border: 1px solid #666;
}
.putih {
	color: #FFF;
}
.putih {
	color: #FFF;
}
.teks_putih {
	color: #FFF;
}
body,td,th {
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 10pt;
	color: #000;
}
.merah {
	color:#B00508;
}
.kuning {
	color:#939203;
}
.hijau {
	color:#034D07;
}



</style>
<link href="../css/kotak.css" rel="stylesheet" type="text/css">
<link href="../css/tbl_biru_big.css" rel="stylesheet" type="text/css">
<script type=text/javascript>
<!--
var win= null;
function NewWindow(mypage,myname,w,h,scroll){
var winl = (screen.width-w)/2;
var wint = (screen.height-h)/4;
var settings ='height='+h+',';
settings +='width='+w+',';
settings +='top='+wint+',';
settings +='left='+winl+',';
settings +='scrollbars='+scroll+',';
settings +='resizable=yes';
win=window.open(mypage,myname,settings);
if(parseInt(navigator.appVersion) >= 4){win.window.focus();}
} 

function MM_openBrWindow(theURL,winName,features) { 
window.open(theURL,winName,features);
}
//-->
</script>
</head>

<body style="color: #000080; font-family: Tahoma; font-size: 10pt; background-attachment:fixed">
<table width="1000" border="0" cellpadding="0" cellspacing="0" class="bayangan2">
  <tr>
    <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="4"><img src="img_kiri/kiri_atas.gif" width="4" height="27"></td>
        <td align="left" bgcolor="#505053" class="header">DATA  MATA KULIAH AKTIF</td>
        <td width="4"><img src="img_kiri/kanan_atas.gif" width="4" height="27"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="4" align="left" class="kiri"><img src="img_kiri/kiri.gif" width="4" height="4"></td>
    <td bgcolor="#FFFFFF">
    <fieldset>
      <legend><strong>Tahun Akademik</strong></legend>
    <table width="100%" border="0" cellpadding="5" cellspacing="1" class="border">
  <tr>
    <td width="22%" bgcolor="#505053" class="teks_putih"><strong>Tahun Akademik</strong></td>
    <td colspan="2" bgcolor="#E4E4E4"><?php echo $ta;?>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#505053" class="teks_putih"><strong>Semester</strong></td>
    <td colspan="2" bgcolor="#E4E4E4"><?php txt_semester($smtr);?>      &nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#505053" class="teks_putih"><strong>Program Studi</strong></td>
    <td colspan="2" bgcolor="#E4E4E4"><?php echo $prodi[nama_jurusan];?>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#505053" class="teks_putih"><strong>Nama Dosen</strong></td>
    <td width="64%" bgcolor="#E4E4E4"><?php echo $dsn[nama];?></td>
    <td width="14%" align="right" bgcolor="#E4E4E4"><?php echo "$thn_mk";?></td>
  </tr>
    </table>
</fieldset>

    <fieldset>
      <legend><strong>Data Mata Kuliah</strong>
    </legend>
    <table width="100%" border="0" cellpadding="5" cellspacing="1" class="border">
  <tbody>
    <tr>
      <th bgcolor="#9DFDA5" scope="row">PETUJUK CETAK ABSENSI:<br>
        <span style="color: #154C96">Untuk mencetak absensi kelas gabungan (warna sama), pilih salah satu kelas gabungan saja yang akan di cetak.</span></th>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellpadding="3" cellspacing="1" class="border">
  <tr class="header">
    <td width="3%" height="31" align="center" bgcolor="#505053" class="header">No.</td>
    <td width="8%" align="center" bgcolor="#505053" class="header">Jam Kuliah</td>
    <td width="10%" align="center" bgcolor="#505053" class="header">Ruang</td>
    <td width="7%" align="center" bgcolor="#505053" class="header">Kelas</td>
    <td width="6%" align="center" bgcolor="#505053" class="header">Angatan</td>
    <td width="28%" align="center" bgcolor="#505053" class="header">Nama Mata Kuliah<br>
      (<em>Program Studi</em>)</td>
    <td width="3%" align="center" bgcolor="#505053" class="header">SKS</td>
    <td width="9%" align="center" bgcolor="#505053" class="header">Keterangan Kelas</td>
    <td width="9%" align="center" bgcolor="#505053" class="header">Cetak Jurnal dan Absensi</td>
    <td width="8%" align="center" bgcolor="#505053" class="header">Rencana Pembelajaran Semester</td>
    <td width="9%" align="center" bgcolor="#505053" class="header">Input Jurnal Dan Absensi</td>
    </tr>
  
  <?php
 $no=1;
 $no2=1;
 $no3=1;
 $nogab=0;
  $qmsd=mysql_query("select hari from hari");
  while($dp=mysql_fetch_array($qmsd)){
?>
<tr bgcolor="#A2BDF3">
      <td height="32" colspan="11" align="left"><strong><?php echo $no2;?>. Hari : <?php echo $dp[hari];?></strong></td>
      </tr>
  <?php
           $terang = true;
           $qms=mysql_query("select * from kuliah_aktif_now where id_thn_kuliah = '$id_thn' AND id_dosen = '$id_dosen' AND hari ='$dp[hari]' order by jam_kuliah");
		While($ms=mysql_fetch_array($qms)){
			$angktn=mysql_fetch_array(mysql_query("select * from kuliah_aktif_now where kode_mk='$ms[kode_mk]' and id_thn_kuliah='$id_thn'"));
	 // baca thn mk
	 $jen_kur=mysql_fetch_array(mysql_query("select * from kuliah_jenis_kurikulum where kode_fp='$kode_fp'"));
	if($jen_kur[kurikulum]=="2"){
		$tb_th_kur="kuliah_thn_mk2";
	}else{
		$tb_th_kur="kuliah_thn_mk";
	}
$thn_mk_aktf=mysql_fetch_array(mysql_query("SELECT * FROM $tb_th_kur WHERE angkatan= '$angktn[angkatan]'"));
$thn_mk_mhs=$thn_mk_aktf[thn_mk];
			
		$nm_mk[$no]=mysql_fetch_array(mysql_query("select * from mata_kuliah2 WHERE kode_mk1 = '$ms[kode_mk]' AND thn_kurikulum='$thn_mk_mhs'"));
			$kod_prod=$nm_mk[$no][kode_fp];
			$prod_mk=mysql_fetch_array(mysql_query("select * from jurusan where kode_fp='$kod_prod'"));
		/*
		$jmhs[$no]=mysql_num_rows(mysql_query("SELECT `mahasiswa`.`nama_mhs`,
       `program1`.*,
       `mahasiswa`.`angkatan`,
       `mahasiswa`.`alamat`,
       `mahasiswa`.`telepon_mhs`
FROM `program1`
     INNER JOIN `mahasiswa` ON (`program1`.`nim` = `mahasiswa`.`nim`)
WHERE `program1`.`kode_mk1` = '$ms[kode_mk]' AND `program1`.`angkatan` = '$ms[angkatan]' AND
	  `program1`.`id_kuliah_aktif` = '$id_thn' AND
      `program1`.`kelas` = '$ms[kelas]' AND `program1`.tahun_akademik = '$ta'  AND keterangan <>'t'"));
	  */
	  $jam1=$ms[jam_kuliah];
	  $jm1=mysql_fetch_array(mysql_query("SELECT * from jam_kuliah WHERE no_jam='$jam1'"));
	  $jam2 = $jam1 + $nm_mk[$no][sks]-1;
	  $jm2=mysql_fetch_array(mysql_query("SELECT * from jam_kuliah WHERE no_jam='$jam2'"));
	  $ket_jam=substr($jm1[jam],0,5)."-".substr($jm2[jam],-5,5);
	  $rg=mysql_fetch_array(mysql_query("SELECT kuliah_ruang.nama_ruang,
       kuliah_gedung.nama_gedung, kuliah_lantai.nama FROM kuliah_gedung
     INNER JOIN kuliah_ruang ON (kuliah_gedung.id_g = kuliah_ruang.id_gedung)
     INNER JOIN kuliah_lantai ON (kuliah_ruang.id_lantai = kuliah_lantai.id_L)
WHERE kuliah_ruang.id_kls = '$ms[id_ruang]'"));

$ckgab=mysql_num_rows(mysql_query("SELECT kuliah_aktif_now.kelas_kuliah
FROM kuliah_aktif_now
WHERE kuliah_aktif_now.kelas_kuliah = '$ms[kelas_kuliah]' AND
      kuliah_aktif_now.id_thn_kuliah = '$id_thn'"));
$klsg[$nogab]=$ms[kelas_kuliah];
$nogab2=$nogab -1;
if($klsg[$nogab] !== $klsg[$nogab2]){
	$nogab++;
}

if($ck_gb==0){
	
}
	  if($ckgab>=2){
		  $ket_gab="Gabungan";
		  $no_war=$warna[$nogab];
		  
	  }else{
		  $ket_gab="Tunggal";
	  }



	  $prodi=mysql_fetch_array(mysql_query("select * from jurusan where kode_fp='$ms[kode_fp]'"));
	  $dsn=mysql_fetch_array(mysql_query("SELECT * FROM hrm_modul.v_dosen WHERE id = '$ms[id_dosen]' AND aktif='0'"));	
		if($terang){
			echo "<tr class=\"terang\"
              onMouseOver=\"this.className='sorot'\"
              onMouseOut=\"this.className='terang'\">";
	            }else{
			echo "<tr class=\"gelap\"
              onMouseOver=\"this.className='sorot'\"
              onMouseOut=\"this.className='gelap'\">";
	        }
            $terang = !$terang;
            ?>
     
   
    
    <td height="32" align="center"><?=$no?></td>
    <td align="center"><?php echo "$jam1 - $jam2";?><br>(<?php echo $ket_jam;?>)</td>
    <td align="center"><? echo"<b>$rg[nama_ruang]</b><br>$rg[nama_gedung] $rg[nama]";?></td>
    <td align="center"><?=$ms[kelas]?></td>
    <td align="center"><?=$ms[angkatan]?></td>
    <td align="left"><?=$nm_mk[$no][nama_mk]?><br>
      (<em><?php echo $prod_mk[nama_jurusan];?></em>)</td>
    <td align="center"><?=$nm_mk[$no][sks]?></td>
    <td align="center" <?php if($ket_gab=="Gabungan"){?> bgcolor="<?php echo $no_war;?>"<?php } ?>><?=$ket_gab?></td>
    <td align="center" <?php if($ket_gab=="Gabungan"){?> bgcolor="<?php echo $no_war;?>"<?php } ?>>
		<?php
    if($nogab==$no3){
	?>
		<a href="jurnal.pdf.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&kelas=<?=$ms[kelas]?>&fp=<?php echo $ms[kode_fp];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>" title="Jurnal Perkuliahan" onClick="NewWindow(this.href,'jurnal','1000','900','yes');return false"><img src="../ikon/pdf.png" width="26" height="26" alt=""/></a> <a href="../fakultas/absensi.pdf.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&tam=<?=$ms[angkatan]?>&kelas=<?=$ms[kelas]?>&fp=<?php echo $ms[kode_fp];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>" title="Absensi Perkuliahan" onClick="NewWindow(this.href,'absen','1000','900','yes');return false"><img src="../ikon/pdf.png" width="26" height="26" alt=""/></a>
			<?php
		//$no3++;
	}
			?></td>
    <td align="center" <?php if($ket_gab=="Gabungan"){?> bgcolor="<?php echo $no_war;?>"<?php } ?>>
	<?php
    if($nogab==$no3){
	if(!empty($ms[rps])){	?>
	
		<?php
		if($ms[stt_rps]=="2"){
		?>
		<br><a href="rps1.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&kelas=<?=$ms[kelas]?>&fp=<?php echo $ms[kode_fp];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>" title="Upload File RPS">RPS harus direvisi dan upload ulang</a>
	<?
		}elseif($ms[stt_rps]=="3"){
			?>
		<a href="rps.pdf.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&rps=<?php echo $ms[rps];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>" title="Lihat File RPS" onClick="NewWindow(this.href,'jurnal','1000','900','yes');return false"><img src="../ikon/pdf.png" width="26" height="26" alt=""/></a><br>
		<a href="rps1.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&kelas=<?=$ms[kelas]?>&fp=<?php echo $ms[kode_fp];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>" title="Data File RPS">RPS Disetujui</a>		
			<?php
		}else{
			?>
		
		<a href="rps.pdf.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&rps=<?php echo $ms[rps];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>" title="Lihat File RPS" onClick="NewWindow(this.href,'jurnal','1000','900','yes');return false"><img src="../ikon/pdf.png" width="26" height="26" alt=""/></a><br>
		<a href="rps1.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&kelas=<?=$ms[kelas]?>&fp=<?php echo $ms[kode_fp];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>" title="Data File RPS">Menunggu di setujui</a>
		<?php
		}
	}else {
		echo"Belum Ada<br>";
	?>
		<a href="rps1.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&kelas=<?=$ms[kelas]?>&fp=<?php echo $ms[kode_fp];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>" title="Upload File RPS">Upload</a>
	<?
	}
	}
	?>
	</td>
    <td align="center" <?php if($ket_gab=="Gabungan"){?> bgcolor="<?php echo $no_war;?>"<?php } ?>>
        <?php
    if($nogab==$no3){
	?>	
		<a href="jurnal.kuliah.php?id_kuliah=<?php echo $ms[id_kuliah];?>&id_thn=<?php echo $id_thn;?>&kode_mk=<?php echo $ms[kode_mk];?>&ks=<?php echo $ms[kode_sinc];?>&ta=<?php echo $ta;?>&kelas=<?=$ms[kelas]?>&fp=<?php echo $ms[kode_fp];?>&id_dsn=<?php echo $ms[id_dosen];?>&knic=<?php echo $ms[kelas_kuliah];?>&nm_mk=<?php echo $nm_mk[$no][nama_mk];?>" title="Jurnal Perkuliahan"><img src="../ikon/edit.png" width="16" height="16" alt=""/></a>
	<?php $no3++;
    } ?></td>
    </tr>
  <?
   
	$jmlmhs[$no2]=$jmlmhs[$no2]+$jmhs[$no];
	$jsks[$no2]=$jsks[$no2]+$nm_mk[$no][sks];
	$no++;
	}
?>
  <tr>
    <td height="32" bgcolor="#505053">&nbsp;</td>
    <td colspan="2" align="center" bgcolor="#505053" class="teks_putih">&nbsp;</td>
    <td align="center" bgcolor="#505053" class="teks_putih">&nbsp;</td>
    <td align="center" bgcolor="#505053"><strong>&nbsp;</strong></td>
    <td bgcolor="#505053">&nbsp;</td>
    <td align="center" bgcolor="#505053" class="teks_putih">&nbsp;</td>
    <td bgcolor="#505053">&nbsp;</td>
    <td bgcolor="#505053">&nbsp;</td>
    <td bgcolor="#505053">&nbsp;</td>
    <td bgcolor="#505053">&nbsp;</td>
    </tr>
<?php
$no2++;
  }
  ?>
    </table>

    </fieldset></td>
    <td width="4" align="right" class="kanan"><img src="img_kiri/kanan.gif" width="4" height="4"></td>
  </tr>
  <tr>
    <td width="4"><img src="img_kiri/kiri_bawah.gif" width="4" height="4"></td>
    <td class="bawah"><img src="img_kiri/bawah.gif" width="5" height="4"></td>
    <td width="4"><img src="img_kiri/kanan_bawah.gif" width="4" height="4"></td>
  </tr>
</table>
<br>
		
</body>

</html>