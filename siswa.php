<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(Data-nilai-siswa_02.gif);
}
.headeer {
	position: absolute;
	left: 104px;
	top: 2px;
	height: 125px;
}
.menubox {
	position: absolute;
	left: 104px;
	top: 137px;
	width: 1002px;
}
.dataabg {
	position: absolute;
	left: 104px;
	top: 216px;
}
.KEMBALI {
	position: absolute;
	left: 118px;
	top: 142px;
}
.isidataa {
	font-family: "data siswa";
	position: absolute;
	left: 155px;
	top: 364px;
}
.guruu {
	position: absolute;
	left: 377px;
	top: 142px;
}
.gursss {
	position: absolute;
	left: 224px;
	top: 142px;
}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="headeer"><img src="Data-nilai-siswa_03.gif" width="935" height="124" /></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="menubox"><img src="menu-atas.gif" width="936" height="32" /></div>
<div class="KEMBALI"><a href="index.html">HOME PAGE</a></div>
<div class="gursss"><a href="info.php">INFO DATA GURU</a></div>
<div class="guruu"><a href="nilai.php">INFO NILAI SISWA</a></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="dataabg"><img src="dataINFO-siswa_03.jpg" width="926" height="948" /></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="isidataa">
  <table width="826" border="1">
       <?php
include ("koneksi.php");
$sqll = "select *from siswa";
$resultt = mysql_query($sqll);
if(mysql_num_rows($resultt) > 0){


?>
<tr>
         <th width="26"><div align="center">NO</div>
         <th width="82"><div align="center">NISN SISWA</div>
         <th width="190"><div align="center">NAMA SISWA</div>
         <th width="132"><div align="center">TGL LAHIR SISWA</div>
         <th width="126"><div align="center">KODE KOMPETENSI</div>
         <th width="170"><div align="center">ALAMAT</div>
        <th colspan="3"><div align="center">FOTO SISWA</div>        
    </tr>
       <?php
$nomor=1;
while($siswaa = mysql_fetch_array($resultt)){?>
       <tr>
         <?php 
$date = date('j F, Y', strtotime($siswaa['tgl_lahir']));
?>
         <TD><div align="center"><?php echo $nomor++; ?></div></TD>
         <td><div align="center"><?php echo $siswaa['nisn'];?></div></td>
         <td><?php echo $siswaa['nama_siswa'];?></td>
         <td><div align="center"><?php echo $date ;?></div></td>
         <td><div align="center"><?php echo $siswaa['kode_kk'];?></div></td>
         <td><?php echo $siswaa['alamat_siswa'];?></td>

         <td width="111"><div align="center"><img src="FOTO/<?php echo $siswaa['nisn'];?>.jpg" width="111" height="133" /></div></td>
    </tr>
       <?php } ?>
  </table>
  <?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?>
<p><br>
</p></div>
<p>&nbsp;</p>
</body>
</html>
