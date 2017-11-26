<?php
session_start();
include"koneksi.php";
$kode_guru=$_POST['kode_guru'];
$pass=$_POST['pass'];
$sql = mysql_query("select * from guru where kode_guru='$kode_guru' and pass='$pass'");
$num = mysql_num_rows($sql);
if($num==1) {
$_SESSION['kode_guru'] = $kode_guru;

?>
<script language="JavaScript">
	alert('Anda berhasil login');
	document.location='guru/index.php'</script><?php
} else {
// jika login salah //
?>
 <script language="JavaScript">
	alert('Username atau password Anda salah'); 
	document.location='login.php'</script><?php
echo mysql_error() ;
}

?>