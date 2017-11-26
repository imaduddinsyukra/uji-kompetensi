<?php
include "../koneksi.php";//sambungkan ke mysql

//mengambil data dari form inputan
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa = $_POST['alamat_siswa'];
$tgl_lahir= $_POST['tgl_lahir']; 
$lokasi_file = $_FILES['gilang']['tmp_name'];
$tipe_file   = $_FILES['gilang']['type'];
$nama_file   = $_FILES['gilang']['name'];
$direktori   = "image/$nama_file";
$kode_kk = $_POST['kode_kk'];
$no_hp = $_POST['no_hp'];

$direktori   = "../FOTO/$nama_file";
if (!empty($lokasi_file)) {
move_uploaded_file($_FILES["gilang"]["tmp_name"],"../FOTO/".$nisn.".jpg");

$simpan=mysql_query("INSERT INTO siswa(nisn, foto, kode_kk, nama_siswa, alamat_siswa, tgl_lahir,no_hp) VALUES('$nisn','$foto','$kode_kk','$nama_siswa','$alamat_siswa','$tgl_lahir','$no_hp')");

if ($simpan){
//echo "Sukses Input data siswa";
?><script>document.location.href="tambah_wali.php?nisn=<?php echo $nisn;?>"</script><?php
}else{
?>
<script language="JavaScript">
	alert('Inputan data gagal');
	document.location='tambah_siswa.php'</script><?php
} }
?>