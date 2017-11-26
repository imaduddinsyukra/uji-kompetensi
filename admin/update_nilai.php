<?php
include "../koneksi.php";//sambung ke mysql

//mengambil nilai dari form
$no = $_POST['no'];
$nisn = $_POST['nisn'];
$kode_guru=$_POST['kode_guru'];
$kode_sk=$_POST['kode_sk'];
$nilai_angka=$_POST['nilai_angka'];

if($nilai_angka>= 90){
    $nilai_huruf="A";
}elseif($nilai_angka>= 80){
       $nilai_huruf="B";
}elseif($nilai_angka>=70){
       $nilai_huruf="C";
}elseif($nilai_angka>= 60){
       $nilai_huruf="D";
}else{
       $nilai_huruf="E";
}

$update = mysql_query("UPDATE nilai SET nisn = '$nisn', kode_guru = '$kode_guru', kode_sk = '$kode_sk', nilai_angka= '$nilai_angka', nilai_huruf= '$nilai_huruf' WHERE no = '$no'");

if ($update){
//echo "sukses update data";
?><script>document.location.href="data_nilai.php"</script><?php
}else{
echo "gagal : ".mysql_error();
}
?>