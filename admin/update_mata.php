<?php
include "../koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$kode_mata_diklat = $_POST['kode_mata_diklat'];
$nama_mata_diklat = $_POST['nama_mata_diklat'];

//query update data tabel dokter
$update = mysql_query("UPDATE mata_diklat SET nama_mata_diklat = '$nama_mata_diklat' WHERE kode_mata_diklat = '$kode_mata_diklat'");

if ($update){
//echo "sukses update data";
?><script>document.location.href="data_mata.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>