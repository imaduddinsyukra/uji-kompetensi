<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #00CC00;
}
-->
</style>
</head>
<div id="contentbaru" align="center">
     <h3>DATA SISWA</h3>
          <p align="left"><a href="print.php">PRINT SEMUA DATA</a></p>
     <p>&nbsp;</p>
     <table width="893" border="1">
       <?php
include ("koneksi.php");
$sqll = "select * from siswa";
$resultt = mysql_query($sqll);
if(mysql_num_rows($resultt) > 0){


?>
       <tr>
         <th width="20"><div align="center">NO</div>
         <th width="77"><div align="center">NISN SISWA</div>
         <th width="178"><div align="center">NAMA SISWA</div>
         <th width="124"><div align="center">TGL LAHIR SISWA</div>
         <th width="118"><div align="center">KODE KOMPETENSI</div>
         <th width="159"><div align="center">ALAMAT</div>
        <th colspan="1"><div align="center">PILIHAN</div>        </tr>
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

         <td width="46"><div align="center"><a href="prasu.php?nisn=<?php echo $siswaa['nisn']; ?>" > print nilai</a></div></td>
       </tr>
       <?php } ?>
     </table>
     <?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?>
<form action="index.php">
<input name="index" type="submit" value="back index" id="index" />
</form>
<p><br>
     </p>
     </div>
<body>
</body>
</html>
