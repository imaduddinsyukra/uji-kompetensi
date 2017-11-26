<?php
include "../koneksi.php";

$kode_kk = $_POST[kode_kk];
$nama_kompetensikeahlian = $_POST[nama_kompetensikeahlian];

$update = mysql_query("UPDATE kompetensi_keahlian SET nama_kompetensikeahlian = '$nama_kompetensikeahlian' WHERE kode_kk = '$kode_kk'");

if ($update){
?><script>document.location.href="data_kk.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>