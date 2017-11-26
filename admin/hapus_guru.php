<?php
include "../koneksi.php";
$kode_guru = $_GET['kode_guru'];
$query=mysql_query("delete from guru where kode_guru='$kode_guru'");
if($query){
$_SESSION['kode_guru'] = "$kode_guru";
header
('location:data_guru.php');
}else{
header
('location:data_guru.php');
}
?>