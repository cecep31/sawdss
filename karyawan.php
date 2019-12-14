<?php
echo "
<br>
<h2 style='margin-left: 1cm;'>data bobot karyawan</h2> <br>";
echo "<table class='table2' border='1'>
  <tr>
  <th>no</th>
    <th>nik</th>
    <th>nama</th>
    <th>pengetahuan</th>
    <th>intalasi jaringan</th>
    <th>kepribadian</th>
    <th>agama</th>
    
	
	
 
  </tr>";

$panggil = mysqli_query($kon, "SELECT tbl_karyawan.nik, tbl_karyawan.nama, tbl_bobot.c1, tbl_bobot.c2, tbl_bobot.c3, tbl_bobot.c4 FROM tbl_bobot, tbl_karyawan WHERE tbl_karyawan.nik=tbl_bobot.nik");


$no = 1;
while($rs = mysqli_fetch_array($panggil)){
  echo "<tr>
    <td>$no</td>
    <td>
	  <b>$rs[nik]</b>
	</td>
    <td>
	  <b>$rs[nama]</b>
	</td>
    <td>
	 <b>$rs[c1]</b>
	</td>
    <td>
	  <b>$rs[c2]</b>
    </td>
    <td>
	  <b>$rs[c3]</b>
    </td>
    <td>
	  <b>$rs[c4]</b>
    </td>
 
  </tr>";
  $no++;
}  
echo "</table>";
?>