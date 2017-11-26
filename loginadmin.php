<?php
  session_start();
  require_once("koneksi.php");   
  $username = $_POST['username'];
  $password = $_POST['password'];
  $select_db= mysql_select_db($database,$conn);
  $cekuser = mysql_query("SELECT * FROM admin WHERE username = '$username' and password='$password'");
  $jumlah = mysql_num_rows($cekuser);
  $hasil = mysql_fetch_array($cekuser);  
  if($jumlah == 1) {
$_SESSION['username'] = $username;

?>
<script language="JavaScript">
	alert('Anda Berhasil Login'); 
	document.location='admin/index.php'</script><?php
} else {
// jika login salah //
?>
 <script language="JavaScript">
	alert('Username atau password Anda salah'); 
	document.location='login2.php'</script><?php
echo mysql_error() ;
}?>
