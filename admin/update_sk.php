<?php
include "../koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$kode_sk = $_POST[kode_sk];
$nama_sk = $_POST[nama_sk];

//query update data tabel dokter
$update = mysql_query("UPDATE standar_kompetensi SET nama_sk = '$nama_sk' WHERE kode_sk = '$kode_sk'");

if ($update){
//echo "sukses update data";
?><script>document.location.href="data_sk.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>