<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(Data-nilai-siswa_04.gif);
}
.atap {
	position: absolute;
	left: 74px;
	top: 3px;
	height: 117px;
}
.isiis {
	position: absolute;
	left: 74px;
	top: 203px;
}
.menuu {
	position: absolute;
	left: 74px;
	top: 126px;
}
.ASSWWAASD {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 10px;
	position: absolute;
	visibility: visible;
	left: 106px;
	top: 135px;
	height: 21px;
	width: 82px;
}
.footers {
	position: absolute;
	left: 36px;
	top: 1179px;
	width: 984px;
}
.isinya {
	position: absolute;
	left: 121px;
	top: 347px;
	width: 833px;
}
.menu1 {
	position: absolute;
	left: 97px;
	top: 162px;
	width: 105px;
}
.style3 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 10px;
	position: absolute;
	visibility: visible;
	left: 111px;
	top: 137px;
	height: 21px;
	width: 82px;
	font-weight: bold;
}
.DATASIS {
	position: absolute;
	visibility: visible;
	left: 215px;
	top: 136px;
	height: 19px;
	width: 152px;
}
-->
</style>
</head>

<body>

<p>&nbsp;</p>
<div class="DATASIS">DATA SISWA</div>
<p>&nbsp;</p>
<div class="atap"><img src="Data-nilai-siswa_03.gif" width="947" height="116" /></div>
<p>&nbsp; </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span class="menuu"><img src="menu-atas.gif" width="950" height="32" /></span></p>

<div class="style3">
  <div align="center"><a href="index.html">INDEK</a></div>
</div>
<p>&nbsp;</p>
<div class="style3">
  <div align="center"><a href="index.html">INDEK</a></div>
</div>
<div class="menuu"></div>
<p>&nbsp;</p>
<div class="tulisan2">PROFIL</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="isiis"><img src="Data-nilai-siswa_08.gif" width="926" height="948" /></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="isinya">
<div id="contentbaru" align="center">
     <h3>DATA NILAI SISWA</h3>
       
     <p>&nbsp;</p>
     <table width="834" border="1">
         <?php
include ("koneksi.php");

$sqll = "SELECT no,nisn, nama_siswa, nama_guru, kode_sk,nama_sk, nilai_angka, nilai_huruf FROM nilai inner join siswa USING(nisn) inner join guru using(kode_guru) inner join standar_kompetensi using (kode_sk)";
$resultt = mysql_query($sqll);
if(mysql_num_rows($resultt) > 0){
?>
       <tr>
         <th width="27"><div align="center">NO</div>
         <th width="77"><div align="center">NISN SIWA</div>
         <th width="130"><div align="center">NAMA SISWA</div>
         <th width="118"><div align="center">NAMA GURU</div>
         <th width="83"><div align="center">KODE SK</div>
         <th width="189"><div align="center">NAMA SK</div>
         <th width="88"><div align="center">NILAI ANGKA</div>
         <th width="70"><div align="center">HURUF</div>
            </tr>
       <?php
$nomor=1;
while($siswaa = mysql_fetch_array($resultt)){?>
       <tr>
         <td><div align="center"><?php echo $nomor++; ?></div></td>
         <td><div align="center"><?php echo $siswaa['nisn'];?></div></td>
         <td><?php echo $siswaa['nama_siswa'];?></td>
         <td><?php echo $siswaa['nama_guru'];?></td>
         <td><div align="center"><?php echo $siswaa['kode_sk'];?></div></td>
         <td><?php echo $siswaa['nama_sk'];?></td>
         <td><div align="center"><?php echo $siswaa['nilai_angka'];?></div></td>
         <td><div align="center"><?php echo $siswaa['nilai_huruf'];?></div></td>
       </tr>
       <?php }?>
     </table>

    <?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?>
<p>
<form action="index.html">
</form>
  <br>
     </p>
</div></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="footers"><img src="Data-nilai-siswa_11.gif" width="1024" height="67" /></div>
<p>&nbsp;</p>
</body>
</html>
