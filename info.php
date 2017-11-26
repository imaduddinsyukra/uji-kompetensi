<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Info Data Guru</title>
<style type="text/css">
<!--
body {
	background-image: url(Data-nilai-siswa_04.gif);
}
.atas {
	position: absolute;
	left: 115px;
	top: 15px;
	width: 882px;
	height: 109px;
}
.isisdata {
	position: absolute;
	left: 149px;
	top: 377px;
	width: 843px;
}
.home {
	position: absolute;
	left: 123px;
	top: 143px;
}
.INFODATAS {
	position: absolute;
	left: 228px;
	top: 143px;
	width: 147px;
}
.infon {
	position: absolute;
	left: 389px;
	top: 143px;
}
.menuu {
	position: absolute;
	left: 115px;
	top: 137px;
	width: 884px;
}
.infoo {
	position: absolute;
	left: 98px;
	top: 217px;
}
-->
</style>
</head>

<body>
<div class="atas"><img src="header.jpg" width="881" height="110" /></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="menuu"><img src="menu-atas.gif" width="883" height="32" /></div>
<div class="home"><a href="index.html">HOME PAGE</a></div>
<div class="INFODATAS"><a href="siswa.php">INFO DATA SISWA</a></div>
<div class="infon"><a href="nilai.php">INFO NILAI SISWA</a></div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="infoo"><img src="INFOGURU_03.jpg" width="926" height="948" /></div>
<p>&nbsp;</p>
<div class="isisdata">
<table width="819" border="1">
       <?php
include ("koneksi.php");
$sqll = "select *from guru";
$resultt = mysql_query($sqll);
if(mysql_num_rows($resultt) > 0){
?>
<tr>
         <th width="52"><div align="center">kode</div>
         <th width="122"><div align="center">Kompetensi</div>
         <th width="157"><div align="center">Nama guru</div>
         <th width="154"><div align="center">Nip</div>
         <th width="176"><div align="center">Alamat</div>
         <th width="132"><div align="center">No telp</div>
         
    </tr>
       <?php
$nomor=1;
while($guruu = mysql_fetch_array($resultt)){?>
       <tr>
         <TD><div align="center"><?php echo $guruu['kode_guru'];?></div></TD>
         <td><div align="center"><?php echo $guruu['kode_kk'];?></div></td>
         <td><div align="center"><?php echo $guruu['nama_guru'];?></div></td>
         <td><?php echo  $guruu['nip'];?></td>
         <td><?php echo $guruu['alamat_guru'];?></td>
         <td><?php echo $guruu['telp_guru'];?></td>
         
       </tr>
       <?php } ?>
  </table>
<?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?></div>
<p>&nbsp;</p>
</body>
</html>
