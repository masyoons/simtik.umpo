<?php
//include"cek.admin.php";
session_start();
if(isset($_SESSION["id_user_baea"]) or isset($_SESSION["nc"])){
include"../sambung.php";
$nim=$_GET["nim"];
include"../modul_mhs.php";
include_once"../function.php";
include"../tanggal.php";
$sett_updt="1";
$cek_skripsi=mysql_fetch_array(mysql_query("select * from kuliah_skripsi where nim='$nim'"));
	if($sett_updt =="1" and $angkatan_mhs=="2024" or $angkatan_mhs=="2025" or $cek_skripsi[stt]=="2" or $cek_skripsi[stt]=="1"){
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
	margin-bottom: 9px;
	background-image: url(../images/background.jpg);
	background-repeat: repeat;
}
.kiri {
	background-image: url(../mhs/img_kiri/kiri.gif);
	background-repeat: repeat-y;
}
.kanan {
	background-image: url(../mhs/img_kiri/kanan.gif);
	background-repeat: repeat-y;
}
.bawah {
	background-image: url(../mhs/img_kiri/bawah.gif);
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
</style>
<link href="../css/kotak.css" rel="stylesheet" type="text/css">
<link href="../css/tbl_biru_big.css" rel="stylesheet" type="text/css">
<style type="text/css">
     .error{
     	color: red;
     }
    .kuning {
	color: #F2F806;
}
</style>

    <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="jquery.validate.min.js"></script>

    <script type="text/javascript">
       $(document).ready(function(){
          $("#formMahasiswa").validate();
       });
    </script>
  <script src="jquery-ui.js"></script>
  <link rel="stylesheet" href="jquery-ui.css">
  <script>
  $(function() {
    $( "#kota1" ).autocomplete({
      source: 'search.php'
    });
  });
  $(function() {
    $( "#kota2" ).autocomplete({
      source: 'search.php'
    });
  });
  $(function() {
    $( "#sma" ).autocomplete({
      source: 'search.sma.php'
    });
  });
  </script>
</head>

<body style="color: #000080; font-family: Tahoma; font-size: 10pt; background-attachment:fixed">
<table width="800" border="0" cellpadding="0" cellspacing="0" class="bayangan2">
  <tr>
    <td colspan="3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="4"><img src="../mhs/img_kiri/kiri_atas.gif" width="4" height="27"></td>
        <td align="left" bgcolor="#505053" class="header">UPDATE BOIDATA MAHASISWA</td>
        <td width="4"><img src="../mhs/img_kiri/kanan_atas.gif" width="4" height="27"></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="4" align="left" class="kiri"><img src="../mhs/img_kiri/kiri.gif" width="4" height="4"></td>
    <td width="792" bgcolor="#FFFFFF">
    <form action="proses.update.mhs.php" method="POST" id="formMahasiswa">
    <table width="100%" border="0" cellpadding="5" cellspacing="1" class="border">
		<tr>
		    <td height="49" colspan="2" align="center" bgcolor="#C0BCBC"><p><strong>Teliti terlebih dahulu sebelum menyimpan data mahasiswa<br>
		    </strong>
		    </p></td>
		    </tr>
		  <tr>
		    <td bgcolor="#333333" class="teks_putih">NOMOR INDUK MAHASISWA</td>
		    <td align="left" bgcolor="#DCD9D9"><input name="nim_mhs" type="text" class="textbox" id="nim_mhs" value="<?php echo $nim_mhs;?>" size="10" readonly></td>
		    </tr>
		  <tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">NAMA MAHASISWA <br>
				    <span class="kuning">Sama dengan Ijazah terakhir</span></font></td>
					<td bgcolor="#DCD9D9"><input name="nama" type="text" id="nama" class="required" title=" Nama Harus Diisi" value="<?php echo $nama_mhs;?>" size="44"><label for="nama" class="error"></label></td>
				</tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">TEMPAT, TANGGAL LAHIR</font></td>
					<td bgcolor="#DCD9D9">
					<input name="kota_lahir" type="text" class="required" id="kota1" size="25" maxlength="50" value="<?php echo $kota_lahir_mhs;?>" autocomplete="off" title=" Kota Harus Diisi"/>
, <span class="error">
			  <input name="tanggal_lahir" type="text" class="required" title=" Desa Harus Diisi" id="desa2" value="<?php echo $tanggal_lahir_mhs;?>" size="25" maxlength="30">
					Contoh: 23 Januari 1995</span></td>
				</tr>
                <tr>
				  <td bgcolor="#333333" class="teks_putih">NIK / Nomor KTP Mahasiswa</td>
				  <td bgcolor="#DCD9D9"><input name="nik_mhs" type="text" class="required" id="nik_mhs" title=" No KTP Mahasiswa harus diisi" value="<?php echo $nik_mhs;?>" size="30"></td>
		  </tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">JENIS KELAMIN</font></td>
					<td bgcolor="#DCD9D9">
					<select name="sex" size="1" class="textbox">
					<?php 
					$qsx=mysql_query("select kode, sex from sex");
					while($sx=mysql_fetch_array($qsx)){
						if($sx[kode]==$sex_lp){
                    echo"<option value=\"$sx[kode]\" selected>$sx[sex]</option>";
						}else{
						echo"<option value=\"$sx[kode]\">$sx[sex]</option>";
						}
					}
					?>	
					</select></td>
				</tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">AGAMA</td>
				  <td bgcolor="#DCD9D9">
					<select name="agama" size="1" class="textbox" id="agama">
					<?php 
					$qsx=mysql_query("select * from agama");
					while($sx=mysql_fetch_array($qsx)){
						if($sx[agama]==$agama){
                    echo"<option value=\"$sx[agama]\" selected>$sx[agama]</option>";
						}else{
						echo"<option value=\"$sx[agama]\">$sx[agama]</option>";
						}
					}
					?>	
				  </select></td>
		  </tr>
				<tr>
					<td width="199" valign="top" bgcolor="#333333" class="teks_putih"><font size="2">ALAMAT<br>
				      <span class="kuning">Nama jalan, nomor, RT, RW, Dukuh
					/ Lingkungan<br>
					Contoh:<br>
					Jl. Pahlawan No. 43, RT.04 RW.03
                    </span></font></td>
					<td bgcolor="#DCD9D9"><table width="100%" border="0" cellspacing="1" cellpadding="4">
				      <tbody>
					      <tr>
					        <td colspan="2"><input name="alamat" type="text" class="required" title=" Alamat Harus Diisi" id="alamat" value="<?php echo $alamat_mhs;?>" size="65"></td>
				          </tr>
					      <tr>
					        <td width="15%">Desa</td>
					        <td width="85%"><input name="desa" type="text" class="required" title=" Desa Harus Diisi" id="desa" value="<?php echo $desa_mhs;?>" size="25" maxlength="30"></td>
				          </tr>
					      <tr>
					        <td>Kecamatan</td>
					        <td><input name="kecamatan" type="text" class="required" title=" Kecamatan Harus Diisi" id="kecamatan" value="<?php echo $kecamatan_mhs;?>" size="25" maxlength="30"></td>
				          </tr>
			          </tbody>
		          </table></td>
			  </tr>
				
				<tr>
				  <td bgcolor="#333333" class="teks_putih"><font size="2">KOTA</font></td>
				  <td bgcolor="#DCD9D9"><input name="kota_mhs" type="text" class="required" id="kota" size="25" maxlength="50" value="<?php echo $kota_mhs;?>" autocomplete="off" title=" Kota Harus Diisi" /></td>
			  </tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih">PROVINSI</td>
					<td bgcolor="#DCD9D9"><?php dropdown("select DISTINCT prov, prov from provinsi order by urutan, prov","prov","$provinsi_mhs"); ?></td>
			  </tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">TELEPON / HANDPHONE</font></td>
					<td bgcolor="#DCD9D9">
					<input name="telepon" type="text" class="required number" id="telepon" title=" Nomor HP harus valid" value="<?php echo $telepon_mhs;?>" size="25" minlength="11">
					<font size="2">Kode Pos
					<input name="kode_pos" type="text" class="textbox" id="kode_pos" value="<?php echo $kode_pos;?>" size="13">
					</font>				    </td>
				</tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih"><font size="2">EMAIL MAHASISWA</font></td>
				  <td bgcolor="#DCD9D9"><input name="email_mhs" type="text" class="required email" title=" Email harus valid" id="email_mhs" value="<?php echo $email_mhs;?>" size="40"></td>
			  </tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">ASAL SEKOLAH</font></td>
					<td bgcolor="#DCD9D9"><input name="asal_sekolah" type="text" class="required" title=" Asal Sekolah harus diisi" id="sma" value="<?php echo $asal_sekolah_mhs;?>" size="62"></td>
				</tr>
		<tr>

					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">Nomor ijazah</font></td>
					<td bgcolor="#DCD9D9">
					<input name="no_ijasah" type="text" class="required" title=" No ijazah harus diisi" value="<?php echo $no_ijasah;?>" size="24"> 
					</td>
				</tr>
				<tr>

					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">NISN</font></td>
					<td bgcolor="#DCD9D9">
					<input name="nisn_mhs" type="number" class="required" list="5" title=" NISN harus diisi" value="<?php echo $nisn_mhs;?>" size="24"> 
					Bukan Nomor Ijazah dan angka saja</td>
				</tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">TANGGAL IJAZAH</font></td>
					<td bgcolor="#DCD9D9"><input name="tgl_ijazah" type="text" class="required" id="tgl_ijazah" title=" Tanggal ijazah harus diisi" value="<?php echo $tgl_ijazah;?>" size="30"></td>
				</tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih"><font size="2">JURUSAN DI SMA</font></td>
				  <td bgcolor="#DCD9D9"><input name="jurusan_sma" type="text" class="required" title=" Harus diisi" value="<?php echo $jurusan_sma;?>" size="34"></td>
		  </tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">TAHUN LULUS</font></td>
					<td bgcolor="#DCD9D9">
					<input name="tahun_lulus" type="text" class="required" title=" Tahun lulus harus diisi" id="tahun_lulus" value="<?php echo $tahun_lulus_mhs;?>" size="4" maxlength="4"></td>
				</tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">NAMA AYAH</font></td>
					<td bgcolor="#DCD9D9"><input name="nama_ayah" type="text" class="required" title=" Nama ayah harus diisi" id="nama_ayah" value="<?php echo $nama_ayah;?>" size="40"></td>
				</tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">NIK / Nomor KTP Ayah</td>
				  <td bgcolor="#DCD9D9"><input name="nik_ayah" type="text" class="required" id="nik_ayah" title=" No KTP Ayah harus diisi" value="<?php echo $nik_ayah;?>" size="30"></td>
		  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">TANGGAL LAHIR AYAH</td>
				  <td bgcolor="#DCD9D9"><span class="error">
				    <input name="tgl_lahir_ayah" type="text" class="required" title=" Desa Harus Diisi" id="desa3" value="<?php echo $tgl_lahir_ayah;?>" size="30" maxlength="30">
				  Contoh: 06 Januari 1975</span></td>
		  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">PENDIDIKAN AYAH</td>
				  <td bgcolor="#DCD9D9"><input name="pendidikan_ayah" type="text" class="required" title=" Pendidikan ayah harus diisi" id="pendidikan_ayah" value="<?php echo $pendidikan_ayah;?>" size="40"></td>
		  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">PEKERJAAN AYAH</td>
				  <td bgcolor="#DCD9D9"><input name="pekerjaan_ayah" type="text" class="required" title=" Pekerjaan ayah harus diisi" id="nama_ibu4" value="<?php echo $pekerjaan_ayah;?>" size="40"></td>
		  </tr>
			<tr>
				  <td bgcolor="#333333" class="teks_putih"><font size="2">PENGHASILAN AYAH / BULAN<br>
		          <span class="kuning">Pilih 0, jika Ayah tidak bekerja				  </span></font></td>
				  <td bgcolor="#DCD9D9"><?php dropdown("select penghasilan, penghasilan from penghasilan","penghasilan_ayah","$penghasilan_ayah"); ?>
                  </td>
			  </tr>
              <tr>
				  <td bgcolor="#333333" class="teks_putih">NAMA IBU</td>
				  <td bgcolor="#DCD9D9"><input name="nama_ibu" type="text" class="required" title=" Nama ibu harus diisi" id="nama_ibu" value="<?php echo $nama_ibu;?>" size="40"></td>
			  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">NIK / Nomor KTP Ibu</td>
				  <td bgcolor="#DCD9D9"><input name="nik_ibu" type="text" class="required" id="nik_ibu" title=" No KTP Ibu harus diisi" value="<?php echo $nik_ibu;?>" size="30"></td>
		  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">TANGGAL LAHIR IBU</td>
				  <td bgcolor="#DCD9D9"><span class="error">
				    <input name="tgl_lahir_ibu" type="text" class="required" title=" Desa Harus Diisi" id="desa4" value="<?php echo $tgl_lahir_ibu;?>" size="30" maxlength="30">
				  Contoh: 20 Maret 1980</span></td>
			  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">PENDIDIKAN IBU</td>
				  <td bgcolor="#DCD9D9"><input name="pendidikan_ibu" type="text" class="required" title=" Nama ibu harus diisi" id="pendidikan_ibu" value="<?php echo $pendidikan_ibu;?>" size="40"></td>
		  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">PEKERJAAN IBU</td>
				  <td bgcolor="#DCD9D9"><input name="pekerjaan_ibu" type="text" class="required" title=" Pekerjaan ibu harus diisi" id="nama_ibu3" value="<?php echo $pekerjaan_ibu;?>" size="40"></td>
			  </tr>
				
				<tr>
				  <td bgcolor="#333333" class="teks_putih"><font size="2">PENGHASILAN IBU / BULAN<br>
		          <span class="kuning">Pilih 0, jika Ibu tidak bekerja				  </span></font></td>
				  <td bgcolor="#DCD9D9">
			      <?php dropdown("select penghasilan, penghasilan from penghasilan","penghasilan_ibu","$penghasilan_ibu"); ?></td>
			  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">TELEPON ORANG TUA</td>
				  <td bgcolor="#DCD9D9"><span class="error">
				    <input name="telepon_ortu" type="text" class="required" title=" Nomo Telepon Harus Diisi" id="desa5" value="<?php echo $telepon_ortu;?>" size="30" maxlength="30">
				  </span></td>
		  </tr>
                <tr>
					<td colspan="2" bgcolor="#333333" class="teks_putih"><b><font size="2">Formulir Tambahan Bagi 
					Mahasiswa Transfer atau Pindahan</font></b></td>
				</tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">ASAL PERGURUAN TINGGI</font></td>
					<td bgcolor="#DCD9D9">
					<input name="pt_awal" type="text" class="textbox" id="pt_awal" value="<?php echo $pt_awal;?>" size="61"></td>
				</tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">ALAMAT</font></td>
					<td bgcolor="#DCD9D9">
					<input name="alamat_pt" type="text" class="textbox" id="alamat_pt" value="<?php echo $alamat_pt;?>" size="73"></td>
				</tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">FAKULTAS</font></td>
					<td bgcolor="#DCD9D9">
					<input name="fakultas_pt" type="text" class="textbox" id="fakultas_pt" value="<?php echo $fakultas_pt;?>" size="40"></td>
				</tr>
				<tr>
					<td width="199" bgcolor="#333333" class="teks_putih"><font size="2">JURUSAN</font></td>
					<td bgcolor="#DCD9D9">
					<input name="jurusan_pt" type="text" class="textbox" id="jurusan_pt" value="<?php echo $jurusan_pt;?>" size="40"></td>
				</tr>
				<tr>
				  <td width="199" bgcolor="#333333" class="teks_putih"><font size="2">NIM ASAL</font></td>
				  <td bgcolor="#DCD9D9"><input name="nim_asal" type="text" class="textbox" id="nim_asal" value="<?php echo $nim_pt_mhs;?>" size="10"></td>
			  </tr>
				<tr>
				  <td bgcolor="#333333" class="teks_putih">JUMLAH SKS YANG DITEMPUH</td>
				  <td bgcolor="#DCD9D9"><input name="sks_pt" type="text" class="textbox" id="sks_pt" value="<?php echo $sks_pt;?>" size="10"></td>
		  </tr>
              <tr>
					<td width="199" bgcolor="#333333" class="teks_putih">&nbsp;</td>
					<td bgcolor="#DCD9D9">
					<input name="ubah_data" type="submit" value="SIMPAN" id="ubah_data">
					<input name="kode_mhs" type="hidden" id="kode_mhs" value="<?php echo $kode_mhs;?>"> 
					
					Teliti terlebih dahulu sebelum menyimpan.</td>
				</tr>
				<tr>
				  <td colspan="2" bgcolor="#333333" class="teks_putih">&nbsp;</td>
			  </tr>
			
	</table></form>
    </td>
    <td width="4" align="right" class="kanan"><img src="../mhs/img_kiri/kanan.gif" width="4" height="4"></td>
  </tr>
  <tr>
    <td><img src="../mhs/img_kiri/kiri_bawah.gif" width="4" height="4"></td>
    <td class="bawah"><img src="../mhs/img_kiri/bawah.gif" width="5" height="4"></td>
    <td><img src="../mhs/img_kiri/kanan_bawah.gif" width="4" height="4"></td>
  </tr>
</table>
<script type="text/javascript">
$(function() {
    $( "#kota1" ).autocomplete({
      source: 'search.php'
    });
  });
$(function() {
    $( "#kota" ).autocomplete({
      source: 'search.php'
    });
  });
</script>
</body>
</html>
<?php
}
}
?>
