<?php
include "../koneksi.php";
$kode_kk = $_POST['kode_kk'];
$kode_mata_diklat=$_POST['kode_mata_diklat'];
$nama_kompetensikeahlian = $_POST['nama_kompetensikeahlian'];

 $query = "insert into kompetensi_keahlian(kode_kk, kode_mata_diklat,nama_kompetensikeahlian) values('$kode_kk','$kode_mata_diklat','$nama_kompetensikeahlian')" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
$_SESSION['kode_kk'] = "$kode_kk";
header

('location:data_kk.php');
}else{?>
<script language="JavaScript">
	alert('Inputan data gagal');
	document.location='tambah_kk.php'</script><?php
}
?>