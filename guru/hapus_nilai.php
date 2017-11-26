<?php
include "../koneksi.php";
$no = $_GET['no'];
$query=mysql_query("delete from nilai where no='$no'");
if($query){
$_SESSION['no'] = "$no";
header
('location:data_nilai.php');
}else{
header
('location:data_nilai.php');
}
?>