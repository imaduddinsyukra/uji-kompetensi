<?php
include "../koneksi.php";
$kode_kk = $_GET['kode_kk'];
$query=mysql_query("delete from kompetensi_keahlian where kode_kk='$kode_kk'");
if($query){
$_SESSION['kode_kk'] = "$kode_kk";
header
('location:data_kk.php');
}else{
header
('location:data_kk.php');
}
?>