<?php 
include "../koneksi.php";
$nisn= $_GET['nisn'];

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="stdef.css" type="text/css" />
</head>
<body>
<center>
<font face="BankGothic Lt BT" color="#FFFFFF">

	<?php
	if($_FILES["foto"]["size"] < (20*1024*1024)) {
	if($_FILES["foto"]["error"] > 0) { ?>
    <script language="javascript"> alert('Ada Kesalahan. Silahkan ulangi') ; document.location='edit_foto.php?nisn=<?php echo $nisn ;?>' </script>
<?php } else { 
	move_uploaded_file($_FILES["foto"]["tmp_name"],"../FOTO/".$nisn.".jpg");
	//echo "File uploaded!<br />to <b>"."usuload/".$_FILES["file"]["name"];
	?>
<script language="javascript"> alert('Berhasil mengganti Foto.') ; document.location='rincian_siswa.php?nisn=<?php echo $nisn ;?>' </script>
<?php } } else { ?>
<script language="javascript"> alert('File terlalu besar. Upload ukuran kecil') ; document.location='edit_foto.php?nisn=<?php echo $nisn ;?>' </script>
<?php } ?>

</font>
</body>
</html>
