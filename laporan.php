<center>
<h2>Laporan Hasil Perengkingan Data Karyawan Untuk Pemilihan Kepala Unit Sistem Informasi</h2>

<hr>
<?php


echo "<br>";

echo "<br>

    <table border='1' cellpadding='8' align='center' cellspacing='2'>
  <tr>
	  <th width='20px'>Ranking</th>
    <th width='50px'>Nik</th>
    <th width='100px'>Nama</th>
    <th>Total Nilai</th>
    

 
    

	
 
  </tr>";
include "koneksi.php";
  $no = 1;
$sqlrank = mysqli_query($kon, "SELECT tbl_karyawan.nik, tbl_karyawan.nama, tbl_rank.nilai, tbl_rank.tgl FROM tbl_karyawan, tbl_rank WHERE tbl_karyawan.nik=tbl_rank.nik ORDER BY tbl_rank.nilai DESC limit 10"); 
while($gas = mysqli_fetch_array($sqlrank)){
  echo"
  <tr>    
    <td align='center'>$no</td>
    <td>$gas[nik]</td>
    <td>$gas[nama]</td>
    <td>$gas[nilai]</td>
    
  </tr>";

  $no++;
}

echo "</table>";

?>
</center>
<p></p>
<b></b>
<br>
<div style="text-align: right; margin-right: 200px">tanggal <?php echo date('d'); echo"&nbsp"; echo date('M'); echo"&nbsp"; echo date('Y'); ?></div>

<div style="text-align: right; margin-right: 230px">Direktur</div>
<br>
<br>
<br>
<div style="text-align: right; margin-right: 210px">(cecep januardi)</div>

<script>
		window.print();
</script>
