<?php
include "../koneksi.php";
$kode_mata_diklat = $_POST['kode_mata_diklat'];
$nama_mata_diklat = $_POST['nama_mata_diklat'];

 $query = "insert into mata_diklat (kode_mata_diklat,nama_mata_diklat) values('$kode_mata_diklat','$nama_mata_diklat')" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
$_SESSION['kode_mata_diklat'] = "$kode_mata_diklat";
header

('location:data_mata.php');
}else{?>
<script language="JavaScript">
	alert('Inputan data gagal');
	document.location='tambah_mata.php'</script><?php
}
?>