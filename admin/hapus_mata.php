<?php
include "../koneksi.php";
$kode_mata_diklat = $_GET['kode_mata_diklat'];
$query=mysql_query("delete from mata_diklat where kode_mata_diklat='$kode_mata_diklat'");
if($query){
$_SESSION['kode_mata_diklat'] = "$kode_mata_diklat";
?>
<script language="JavaScript">
	alert('Berhasil Hapus'); 
	document.location='data_mata.php'</script><?php
} else {
// jika login salah //
?>
 <script language="JavaScript">
	alert('Gagal Hapus'); 
	document.location='data_mata.php'</script><?php
echo mysql_error() ;
}?>
