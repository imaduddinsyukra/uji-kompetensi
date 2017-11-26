
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>
<script type="text/javascript">
window.print()
</script>
<body>
<p align="left"><img src="images/kop_01.jpg" width="1024" height="167" /></p>
<hr align="left" width="896" style="height:inherit"  />
<p>&nbsp;</p>
<p><span class="style1">
  <? $tgl=date('d-M-Y'); echo $tgl; ?>
</span></p>
<table width="948" border="1">
              <?php
			  if(isset($_GET['q']) && $_GET['q']){
include ("koneksi.php");

$q = $_GET['q'];
$sqll = "SELECT nisn, nama_siswa, nama_guru, kode_sk,nama_sk, nilai_angka, nilai_huruf FROM nilai inner join siswa USING(nisn) inner join guru using(kode_guru) inner join standar_kompetensi using (kode_sk) where nisn like '%$q%' or nama_guru like '%$q%' or nama_siswa like '%$q%' or kode_sk like '%$q%' or nama_sk like '%$q%'";
$resultt = mysql_query($sqll);
if(mysql_num_rows($resultt) > 0){
?>
<tr>
          <th width="27" class="style2">NO
    <th width="118" class="style2"><div align="center">NISN SIWA</div>
    <th width="137" class="style2"><div align="center">NAMA SISWA</div>
    <th width="148" class="style2"><div align="center">NAMA GURU</div>
    <th width="74" class="style2"><div align="center">KODE SK</div>
    <th width="253" class="style2"><div align="center">NAMA SK</div>
    <th width="68" class="style2"><div align="center">NILAI ANGKA
    </div>
    <th width="71" class="style2"><div align="center">NILAI HURUF</div>    </tr>
          
         <?php
$nomor=1;
while($siswaa = mysql_fetch_array($resultt)){?> 
<tr>
         <TD class="style2"><div align="center"><?php echo $nomor++; ?></div></TD>
            <td class="style2"><div align="center"><?php echo $siswaa['nisn'];?></div></td>
            <td class="style2"><?php echo $siswaa['nama_siswa'];?></td>
            <td class="style2"><?php echo $siswaa['nama_guru'];?></td>
            <td class="style2"><div align="center"><?php echo $siswaa['kode_sk'];?></div></td>
            <td class="style2"><?php echo $siswaa['nama_sk'];?></td>
            <td class="style2"><div align="center"><?php echo $siswaa['nilai_angka'];?></div></td>
            <td class="style2"><div align="center"><?php echo $siswaa['nilai_huruf'];?></div></td>
                      </tr> <?php } }?>
     

<span class="style2">
<?php
}else{
echo 'Data not found!';
echo mysql_error();
}
?>
  </table>

<span class="style2">

<p>&nbsp;</p>
<table width="787" border="0" align="center">
  <tr>
    <td width="212"><div align="center">Mengetahui,</div></td>
    <td width="352">&nbsp;</td>
    <td width="209"><div align="center"><span class="style1">
    </span></div></td>
  </tr>
  <tr>
    <td width="212"><div align="center">Kepala SMKN 2 Pekanbaru</div></td>
    <td width="352">&nbsp;</td>
    <td width="209"><div align="center">Waka Kurikulum</div></td>
  </tr>
  
  <tr>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"><u>(Dra.Hj.Dwi Gusneli,MPSA)</u></div></td>
    <td>&nbsp;</td>
    <td><pre><div align="center"> <u>(                 )</u> </div></pre></td>
  </tr>

</table>
</body>
</html>

</span>
<p class="style2">&nbsp;</p>
</body>
</html>
