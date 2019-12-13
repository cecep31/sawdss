<center>
<h2>laporan hasil perengkingan data karyawan</h2>
<hr>
<?php
echo "Date: ";
echo date('Y-m-d');
echo "<br>";

echo "<br>

    <table border='1' cellpadding='8' align='center'>
  <tr>
	  <th>rank</th>
    <th>nik</th>
    <th>nama</th>
    <th>nilai</th>
    <th>tgl</th>

 
    

	
 
  </tr>";
include "koneksi.php";
  $no = 1;
$sqlrank = mysqli_query($kon, "SELECT tbl_karyawan.nik, tbl_karyawan.nama, tbl_rank.nilai, tbl_rank.tgl FROM tbl_karyawan, tbl_rank WHERE tbl_karyawan.nik=tbl_rank.nik ORDER BY tbl_rank.nilai DESC limit 8"); 
while($gas = mysqli_fetch_array($sqlrank)){
  echo"
  <tr>    
    <td align='center'>$no</td>
    <td>$gas[nik]</td>
    <td>$gas[nama]</td>
    <td>$gas[nilai]</td>
    <td>$gas[tgl]</td>
  </tr>";

  $no++;
}

echo "</table>";

?>
<script>
		window.print();
</script>
</center>