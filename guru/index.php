<?php
  session_start();
  if(!isset($_SESSION['kode_guru'])) {
  header('location:../login.php'); }
  else { $kode_guru = $_SESSION['kode_guru']; }
  require_once("../koneksi.php");
  $query = mysql_query("SELECT * FROM guru WHERE kode_guru = '$kode_guru'");
  $hasil = mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	top: 1080px;
}
body {
	background-image: url(../images/patterngarisverticalhijau.png);
}
.tabel {
	position: absolute;
	left: 350px;
	top: 200px;
}
.menu2 {
	position: absolute;
	left: 500px;
	top: 145px;
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

<body onload="MM_preloadImages('../images/hampir-fix_12.jpg','../images/ADMIN_03.jpg','../images/halaman-baru_05.jpg')">
<div class="header"><img src="../images/ADMIN_01.jpg" width="900" height="140" /></div>
<div class="menubg"><img src="../images/ADMIN_05.jpg" width="900" height="40" /></div>
<div class="badan"><img src="../images/hampir-fix_23.jpg" width="900" height="910" /></div>
<div class="foot"><img src="../images/ADMIN_07.jpg" width="900" height="44" /></div>
<div class="menu1"><a href="haladmin.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','../images/hampir-fix_12.jpg',1)"><img src="../images/hampir-fix_05.jpg" name="home" width="120" height="30" border="0" id="home" /></a></div>
<div class="logout"><a href="../logoutadmin.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('logout','','../images/ADMIN_03.jpg',1)"><img src="../images/hampir-fix_11.jpg" name="logout" width="120" height="30" border="0" id="logout" /></a></div>
<div class="tabel">
  <table width="500" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <th scope="col"><a href="tambah_nilai.php"><img src="../icon/nilai.png" width="200" height="200" /></a></th>
      <th scope="col"><a href="data_nilai.php"><img src="../icon/rincian.png" width="200" height="200" /></a></th>
      <th scope="col"><a href="print.php"><img src="../icon/print.png" width="200" height="200" /></a></th>
    </tr>
    <tr>
      <td><div align="center"><strong><a href="tambah_nilai.php">Tambah Nilai</a></strong></div></td>
      <td><div align="center"><strong><a href="data_nilai.php">Lihat Nilai</a></strong></div></td>
      <td><div align="center"><strong><a href="print.php">Print Nilai</a></strong></div></td>
    </tr>
    
  </table>
</div>
<div class="menu2"><a href="edit.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('edit','','../images/halaman-baru_05.jpg',1)"><img src="../images/hampir-fix_05 (3).jpg" name="edit" width="120" height="30" border="0" id="edit" /></a></div>
</body>
</html>
