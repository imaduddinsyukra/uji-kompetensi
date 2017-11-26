<?php
include "../koneksi.php";
$kode_wali = $_POST['kode_wali'];
$nisn=$_POST['nisn'];
$nama_ayah = $_POST['nama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$alamat_wali = $_POST['alamat_wali'];
$telp_wali = $_POST['telp_wali'];

 $query = "insert into wali_murid values('$kode_wali','$nisn','$nama_ayah','$pekerjaan_ayah','$nama_ibu','$pekerjaan_ibu','$alamat_wali','$telp_wali')" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
$_SESSION['kode_wali'] = "$kode_wali";
?><script>document.location.href="rincian_siswa.php?nisn=<?php echo $nisn;?>"</script><?php
}else{
header

('location:tambah_wali.php');
}
?>