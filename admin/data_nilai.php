<?php
  session_start();
  if(!isset($_SESSION['username'])) {
  header('location:../login2.php'); }
  else { $username = $_SESSION['username']; }
  require_once("../koneksi.php");
  $query = mysql_query("SELECT * FROM admin WHERE username = '$username'");
  $hasil = mysql_fetch_array($query);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DATA NILAI</title>
<style type="text/css">
<!--
.header {
	position: absolute;
	left: 220px;
	top: 0px;
}
.menubg {
	position: absolute;
	left: 220px;
	top: 140px;
}
.badan {
	position: absolute;
	left: 220px;
	top: 180px;
}
.menu1 {
	position: absolute;
	left: 300px;
	top: 145px;
}
.logout {
	position: absolute;
	left: 1000px;
	top: 0px;
}
.foot {
	position: absolute;
	left: 220px;
	top: 750px;
}
body {
	background-image: url(../images/patterngarisverticalhijau.png);
}
.tabel {
	position: absolute;
	left: 250px;
	top: 250px;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>

<body onload="MM_preloadImages('../images/hampir-fix_12.jpg','../images/ADMIN_03.jpg')">
<div class="header"><img src="../images/ADMIN_01.jpg" width="900" height="140" /></div>
<div class="menubg"><img src="../images/ADMIN_05.jpg" width="900" height="40" /></div>
<div class="badan"><img src="../images/hampir-fix_23.jpg" width="900" height="600" /></div>
<div class="foot"><img src="../images/fix-lah_02.jpg" width="900" height="45" /></div>
<div class="menu1"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','../images/hampir-fix_12.jpg',1)"><img src="../images/hampir-fix_05.jpg" name="home" width="120" height="30" border="0" id="home" /></a></div>
<div class="logout"><a href="../logoutadmin.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('logout','','../images/ADMIN_03.jpg',1)"><img src="../images/hampir-fix_11.jpg" name="logout" width="120" height="30" border="0" id="logout" /></a></div>
<div class="tabel">
<div id="contentbaru" align="center">
     <h3>DATA NILAI SISWA</h3>
          <p align="left"><a href="tambah_nilai.php">Tambah Data Nilai</a></p>
     <p>&nbsp;</p>
     <table width="850" border="1">
       <?php
include ("../koneksi.php");

$sqll = "SELECT no,nisn, nama_siswa, nama_guru, kode_sk,nama_sk, nilai_angka, nilai_huruf FROM nilai inner join siswa USING(nisn) inner join guru using(kode_guru) inner join standar_kompetensi using (kode_sk)";
$resultt = mysql_query($sqll);
if(mysql_num_rows($resultt) > 0){
?>
       <tr>
         <th width="17"><div align="center">NO</div>
         <th width="80"><div align="center">NISN SIWA</div>
         <th width="144"><div align="center">NAMA SISWA</div>
         <th width="128"><div align="center">NAMA GURU</div>
         <th width="86"><div align="center">KODE SK</div>
         <th width="218"><div align="center">NAMA SK</div>
         <th width="89"><div align="center">NILAI ANGKA</div>
         <th width="66"><div align="center">HURUF</div>
         <th colspan="2"><div align="center">PILIHAN</div>         </tr>
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
         <td width="34"><div align="center"><a href="edit_nilai.php?no=<?php echo $siswaa['no']; ?>"> Edit</a></div></td>
            <td width="32"><div align="center"><a href="hapus_nilai.php?no=<?php echo $siswaa['no']; ?> " onClick="return confirm('Apakah Anda Yakin Hapus Data?')">Hapus</a></div></td>
       </tr>
       <?php }?>
     </table>

     <?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?>
<form action="print.php">
<input name="index" type="submit" value="print" id="index" />
</form>
<p><br>
     </p>
     </div>
</div>
</body>
</html>

