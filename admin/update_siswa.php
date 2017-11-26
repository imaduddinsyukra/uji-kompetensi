<?php
include "../koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$alamat_siswa=$_POST['alamat_siswa'];
$tgl_lahir=$_POST['tgl_lahir'];
$kode_kk=$_POST['kode_kk'];
$no_hp=$_POST['no_hp'];
$update = mysql_query("UPDATE siswa SET nama_siswa = '$nama_siswa', tgl_lahir = '$tgl_lahir' , alamat_siswa='$alamat_siswa', kode_kk = '$kode_kk',no_hp = '$no_hp' WHERE nisn = '$nisn'");

if ($update){
//echo "sukses update data";
?><script>document.location.href="data_siswa.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>