<?php
include "../koneksi.php";
$kode_sk = $_GET['kode_sk'];
$query=mysql_query("delete from standar_kompetensi where kode_sk='$kode_sk'");
if($query){
$_SESSION['kode_sk'] = "$kode_sk";
header
('location:data_sk.php');
}else{
header
('location:data_sk.php');
}
?>