<?php
include "../koneksi.php";
$nisn = $_POST['nisn'];
$kode_guru = $_POST['kode_guru'];
$kode_sk = $_POST['kode_sk'];
$nilai_angka = $_POST['nilai_angka'];

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

 $query = "insert into nilai(no,nisn,kode_guru, kode_sk,nilai_angka,nilai_huruf) values('','$nisn','$kode_guru','$kode_sk','$nilai_angka','$nilai_huruf')" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
$_SESSION['nisn'] = "$nisn";
header

('location:data_nilai.php');
}else{
?>
<script language="JavaScript">
	alert('Inputan data gagal');
	document.location='tambah_nilai.php'</script><?php
}
?>