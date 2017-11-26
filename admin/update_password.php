<?php
  session_start();
include "../koneksi.php";
$kode_guru=$_POST['kode_guru'];
$pass_baru=$_POST['pass_baru'];
$que=mysql_query("select * from guru where kode_guru='$kode_guru'");
$cek_data=mysql_num_rows($que);
echo $cek_data['pass'];
if($cek_data){ $que2=mysql_query("update guru set pass='$pass_baru' where kode_guru='$kode_guru'");
?> 
<script language="javascript">
alert('Ganti Password Sukses');
document.location='data_guru.php'</script>
<?php }else{ ?>
<script language="javascript">
alert('Password Lama Anda Salah, Silahkan Masukkan Dengan Benar');
document.location='edit_password.php'</script> <?php } ?>