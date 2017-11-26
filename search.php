<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search Page</title>
</head>

     <div id="contentbaru" align="center">
     <h3>PENCARIAN DATA NILAI SISWA</h3>
     <p>&nbsp;</p>

     <form action="" method="get" name="formcr" id="formcr">
       <p>Cari  data nilai siswa :
         <input type="text" name="q" id="q"/>
         <input type="submit" value="Search"/>
       </p>
       <p>&nbsp;  </p>
     </form>
     <table width="903" border="1" cellspacing="1" cellpadding="10">
       <?php
			  if(isset($_GET['q']) && $_GET['q']){
include ("koneksi.php");

$q = $_GET['q'];
$sqll = "SELECT nisn, nama_siswa, nama_guru, kode_sk,nama_sk, nilai_angka, nilai_huruf FROM nilai inner join siswa USING(nisn) inner join guru using(kode_guru) inner join standar_kompetensi using (kode_sk) where nisn like '%$q%' or nama_guru like '%$q%' or nama_siswa like '%$q%' or kode_sk like '%$q%' or nama_sk like '%$q%'";
$resultt = mysql_query($sqll);
if(mysql_num_rows($resultt) > 0){
?>
       <tr>
         <th width="34"><div align="center">NO
         </div>
         <th width="75"><div align="center">NISN SIWA</div>
         <th width="153"><div align="center">NAMA SISWA</div>
         <th width="128"><div align="center">NAMA GURU</div>
         <th width="81"><div align="center">KODE SK</div>
         <th width="216"><div align="center">NAMA SK</div>
         <th width="86"><div align="center">NILAI ANGKA</div>
         <th width="78"><div align="center">HURUF</div>         </tr>
       <?php
$nomor=1;
while($siswaa = mysql_fetch_array($resultt)){?>
       <tr>
         <td><div align="center"><?php echo $nomor++; ?></div></td>
         <td><div align="center"><?php echo $siswaa['nisn'];?></div></td>
         <td><div align="center"><?php echo $siswaa['nama_siswa'];?></div></td>
         <td><div align="center"><?php echo $siswaa['nama_guru'];?></div></td>
         <td><div align="center"><?php echo $siswaa['kode_sk'];?></div></td>
         <td><div align="center"><?php echo $siswaa['nama_sk'];?></div></td>
         <td><div align="center"><?php echo $siswaa['nilai_angka'];?></div></td>
         <td><div align="center"><?php echo $siswaa['nilai_huruf'];?></div></td>
       </tr>
       <?php } }?>
       <?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?>
     </table>
     <p>&nbsp;</p>
     <p><a href="print_nilai.php?q=<?php echo $q; ?>" >Print nilai</a>
     <form action="index.php">
<input name="index" type="submit" value="back index" id="index" />
</form>
     </div>
     <p>
<body>
</body>
</html>
