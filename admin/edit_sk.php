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
<title>EDIT STANDAR KOMPETENSI</title>
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
	left: 330px;
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
<div class="tabel">
<div id="contentbaru" align="center">
     <h3>EDIT DATA STANDAR KOMPETENSI</h3>
     <form action="update_sk.php" method="post">
       <br />
       <?php
include '../koneksi.php';
$kode_sk = $_GET['kode_sk']; //get the no which will updated
$query = mysql_query("SELECT * FROM standar_kompetensi WHERE kode_sk = '$kode_sk'"); //get the data that will be updated
$r=mysql_fetch_array($query)

 ?>
       <table width="525" border="0">
         <tr>
           <td>KODE STANDAR KOMPETENSI</td>
           <td>:</td>
           <td><input type="hidden" name="kode_sk" id="kode_sk" value="<?php echo $r['kode_sk']; ?>"/><?php echo $r['kode_sk']; ?></td>
         </tr>
         <tr>
           <td>KODE KOMPETENSI KEAHLIAN</td>
           <td>:</td>
           <td><?php echo "<select name=\"kode_kk\" id=\"kode_kk\">";
    $myquery="select kode_kk, nama_kompetensikeahlian from kompetensi_keahlian";
    $daftar=mysql_query($myquery) or die (mysql_error());
	
    while($databid=mysql_fetch_object($daftar))
    {
        //perulangan menampilkan data
        echo "<option value=\"$databid->kode_kk\">$databid->nama_kompetensikeahlian</option>";
		
    }
    echo "</select>";
?></td>
         </tr>
         <tr>
           <td>STANDAR KOMPETENSI</td>
           <td>:</td>
           <td><input type="text" name="nama_sk" id="nama_sk" value="<?php echo $r['nama_sk']; ?>" /></td>
         </tr>
         <tr>
           <td>KELAS</td>
           <td>:</td>
           <td><select name="sk_kelas" id="sk_kelas">
             <option value="X">X</option>
             <option value="XI">XI</option>
             <option value="XII">XII</option>
           </select></td>
         </tr>
       </table>
       <input name="Submit" type="submit" value="Submit" />
     </form>
     <p><br>
     </p>
     </div>
</div>
</body>
</html>
