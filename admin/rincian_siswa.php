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
	top: 750px;
}
body {
	background-image: url(../images/patterngarisverticalhijau.png);
}
.TABEL {
	position: absolute;
	left: 350px;
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
<div class="logout"><a href="logoutadmin.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('logout','','../images/ADMIN_03.jpg',1)"><img src="../images/hampir-fix_11.jpg" name="logout" width="120" height="30" border="0" id="logout" /></a></div>
<div class="TABEL">
 <div id="contentbaru" align="center">
     <h3>DATA SISWA</h3>
     <p>&nbsp;</p>
     <?php
include '../koneksi.php';
$nisn = $_GET['nisn']; 
$db_selected = mysql_select_db($database,$conn);
$query = mysql_query("SELECT * FROM siswa inner join kompetensi_keahlian using(kode_kk) inner join wali_murid using(nisn) WHERE nisn = '$nisn'"); 
$baris=mysql_fetch_array($query)

 ?>
       <table width="565" border="0">
       <tr>
         <td width="168">NIS</td>
         <td width="13">:</td>
         <td width="218"><?php echo $baris['nisn']; ?></td>
         <td rowspan="4" width="11"></td>
         <td width="133" rowspan="4" align="center"><img src="../foto/<?php echo $baris['nisn'];?>.jpg" width="111" height="133" /></td>
       </tr>
      
       <tr>
         <td>NAMA</td>
         <td>:</td>
         <td><?php echo $baris['nama_siswa'];?></td>
       </tr>
       <tr>
         <td>TGL LAHIR</td>
         <td>:</td>
         <?php 
$date = date('j F, Y', strtotime($baris['tgl_lahir']));
?>
         <td><?php echo $date ;?></td>
       </tr>
       <tr>
         <td>ALAMAT</td>
         <td>:</td>
         <td><?php echo $baris['alamat_siswa'];?></td>
       </tr>
       <tr>
         <td>KOMPETENSI KEAHLIAN</td>
         <td>:</td>
         <td><?php echo $baris['nama_kompetensikeahlian'];?></td>
         <td></td>
        <td align="center" ><a href="edit_foto.php?nisn=<?php echo $baris['nisn']; ?>" > Edit Foto</a></td>
       </tr>
<tr>
         <td>NAMA AYAH</td>
         <td>:</td>
         <td><?php echo $baris['nama_ayah'];?></td>
         <td></td>
        <td align="center" >&nbsp;</td>
       </tr>
       <tr>
         <td>PEKERJAAN AYAH</td>
         <td>:</td>
         <td><?php echo $baris['pekerjaan_ayah'];?></td>
         <td></td>
        <td align="center" >&nbsp;</td>
       </tr>

<tr>
         <td>NAMA IBU</td>
         <td>:</td>
         <td><?php echo $baris['nama_ibu'];?></td>
         <td></td>
        <td align="center" >&nbsp;</td>
       </tr>

<tr>
         <td>PEKERJAAN IBU</td>
         <td>:</td>
         <td><?php echo $baris['pekerjaan_ibu'];?></td>
         <td></td>
        <td align="center" >&nbsp;</td>
       </tr>

<tr>
         <td>ALAMAT ORG TUA/WALI</td>
         <td>:</td>
         <td><?php echo $baris['alamat_wali'];?></td>
         <td></td>
        <td align="center" >&nbsp;</td>
       </tr>
<tr>
         <td>NO. TLP ORG TUA/WALI</td>
         <td>:</td>
         <td><?php echo $baris['telp_wali'];?></td>
         <td></td>
        <td align="center" >&nbsp;</td>
       </tr>
       <tr>
         <td>No Hp Siswa</td>
         <td>:</td>
         <td><?php echo $baris['no_hp'];?></td>
         <td></td>
        <td align="center" >&nbsp;</td>
       </tr>

     </table>
<form action="index.php">
<input name="index" type="submit" value="back index" id="index" />
</form>
     <p>&nbsp;</p>
     <p><br>
     </p>
  </div>s
</div>
</body>
</html>

