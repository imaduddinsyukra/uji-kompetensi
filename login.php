<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Admin</title>
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
.menu2 {
	position: absolute;
	left: 500px;
	top: 145px;
}
.foot {
	position: absolute;
	left: 220px;
	top: 600px;
}
.menu3 {
	position: absolute;
	left: 700px;
	top: 145px;
}
.menu4 {
	position: absolute;
	left: 900px;
	top: 145px;
}
body {
	background-image: url(images/patterngarisverticalhijau.png);
}
.menu1 {
	position: absolute;
	left: 300px;
	top: 145px;
}
.login {
	position: absolute;
	left: 250px;
	top: 160px;
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

<body onload="MM_preloadImages('images/hampir-fix_12.jpg','images/hampir-fix66_03.jpg','images/hampir-fix66_06.jpg','images/hampir-fix_05 (2).jpg')">
<div class="login">
</div>
<div class="header"><img src="images/ADMIN_01.jpg" width="900" height="140" /></div>
<div class="menubg"><img src="images/ADMIN_05.jpg" width="900" height="40" /></div>
<div class="badan"><img src="images/lastttt-bglogin_02.jpg" width="900" height="450" /></div>
<div class="foot"><img src="images/fix-lah_02.jpg" width="900" height="45" /></div>
<div class="menu1"><a href="index.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('home','','images/hampir-fix_12.jpg',1)"><img src="images/hampir-fix_05.jpg" name="home" width="120" height="30" border="0" id="home" /></a></div>
<div class="menu2"><a href="login2.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('admin','','images/hampir-fix66_03.jpg',1)"><img src="images/hampir-fix_03.jpg" name="admin" width="120" height="30" border="0" id="admin" /></a></div>
<div class="menu3"><a href="login.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('guru','','images/hampir-fix66_06.jpg',1)"><img src="images/hampir-fix_09.jpg" name="guru" width="120" height="30" border="0" id="guru" /></a></div>
<div class="menu4"><a href="datasiswa.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('data','','images/hampir-fix_05 (2).jpg',1)"><img src="images/hampir-fix_14.jpg" name="data" width="120" height="30" border="0" id="data" /></a></div>
<div class="login">
<div class="login">
<form action="loginguru.php" method="post">
	<table width="400" border="0">
    	<tr>
        	<td><b>Username</b></td>
            <td><b>:</b></td>
            <td><input type="text" name="kode_guru" maxlength="25" /></td>
		</tr>
        <tr>
        	<td><b>Password</b></td>
            <td><b>:</b></td>
            <td><input type="password" name="pass" size="20" /></td>
        </tr>
    </table>
    <p align="center">
    <input type="submit" name="login" value="login" />
    <input type="reset" name="batal" value="cancel" />
	</p>
</form>
</div>
</body>
</html>