<?php
include "../koneksi.php";
$kode_sk = $_POST['kode_sk'];
$kode_kk=$_POST['kode_kk'];
$nama_sk = $_POST['nama_sk'];
$kelas_sk = $_POST['kelas_sk'];

 $query = "insert into standar_kompetensi(kode_sk, kode_kk,nama_sk,kelas_sk) values('$kode_sk','$kode_kk','$nama_sk','$kelas_sk')" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
$_SESSION['kode_sk'] = "$kode_sk";
header

('location:data_sk.php');
}else{
?>
<script language="JavaScript">
	alert('Inputan data gagal');
	document.location='tambah_sk.php'</script><?php
}
?>