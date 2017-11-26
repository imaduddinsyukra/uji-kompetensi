<?php
include "../koneksi.php";
$kode_guru = $_POST['kode_guru'];
$kode_kk=$_POST['kode_kk'];
$nip = $_POST['nip'];
$nama_guru = $_POST['nama_guru'];
$alamat_guru = $_POST['alamat_guru'];
$telp_guru = $_POST['telp_guru'];
$pass = $_POST['pass'];

$query = "insert into guru(kode_guru, kode_kk,nip,nama_guru,alamat_guru,telp_guru, pass) values('$kode_guru','$kode_kk','$nip','$nama_guru','$alamat_guru','$telp_guru','$pass')" ;
$hasil = mysql_query($query);
//see the result
if ($hasil) {
$_SESSION['kode_guru'] = "$kode_guru";
header

('location:data_guru.php');
}else{
?>
<script language="JavaScript">
alert('Inputan data gagal');
document.location='tambah_guru.php'</script><?php }
?>

