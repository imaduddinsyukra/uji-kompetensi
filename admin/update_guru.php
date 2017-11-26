<?php
include "../koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$kode_guru = $_POST[kode_guru];
$nama_guru = $_POST[nama_guru];
$kode_kk=$_POST[kode_kk];
$nip=$_POST[nip];
$alamat_guru=$_POST[alamat_guru];
$telp_guru=$_POST[telp_guru];

//query update data tabel dokter
$update = mysql_query("UPDATE guru SET nama_guru = '$nama_guru', kode_kk = '$kode_kk', nip = '$nip', alamat_guru= '$alamat_guru', telp_guru= '$telp_guru' WHERE kode_guru = '$kode_guru'");

if ($update){
//echo "sukses update data";
?><script>document.location.href="data_guru.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>