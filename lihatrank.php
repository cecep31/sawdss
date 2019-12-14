
<?php


echo "<br>

    <table class='table2' border='1'>
  <tr>
	  <th>rank</th>
    <th>nik</th>
    <th>nama</th>
    <th>nilai</th>
    <th>tgl</th>

 

	
 
  </tr>";
$no = 1;
$sqlrank = mysqli_query($kon, "SELECT tbl_karyawan.nik, tbl_karyawan.nama, tbl_rank.nilai, tbl_rank.tgl FROM tbl_karyawan, tbl_rank WHERE tbl_karyawan.nik=tbl_rank.nik ORDER BY tbl_rank.nilai DESC"); 
while($gas = mysqli_fetch_array($sqlrank)){
  echo"
  <tr>    
    <td>$no</td>
    <td>$gas[nik]</td>
    <td>$gas[nama]</td>
    <td>$gas[nilai]</td>
    <td>$gas[tgl]</td>
  </tr>";

  $no++;
}

echo "</table>";




?>
