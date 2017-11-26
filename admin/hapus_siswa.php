<?php
include "../koneksi.php";
$nisn = $_GET['nisn'];
$query=mysql_query("delete from siswa where nisn='$nisn'");
if($query){
$_SESSION['nisn'] = "$nisn";
header
('location:data_siswa.php');
}else{
header
('location:data_siswa.php');
}
?>