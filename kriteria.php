<?php

echo "
<br>
<h2 style='margin-left: 1cm;'>KRITERIA</h2>";
echo "<table class='table2' border='1'>
  <tr>
	<th>no</th>
    <th>nama</th>
    <th>bobot</th>
	<th>jenis</th>
	
	
 
  </tr>";

$sqlm = mysqli_query($kon, "select * from tbl_cat");
$no = 1;
while($rm = mysqli_fetch_array($sqlm)){
  echo "<tr>
    <td>$no</td>
    <td>
	  <b>$rm[nama]</b>
	</td>
    <td>
	 <b>$rm[bobotc]</b>
	</td>
    <td>
	  <b>$rm[jenis]</b>
	</td>
  </tr>";
  $no++;
}  
echo "</table>";

?>