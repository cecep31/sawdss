<?php

echo "<br>";
$sql=mysqli_query($kon, "SELECT SUM(bobotc) AS Total FROM tbl_cadd");
// if($sql){
//     echo "Terkoneksi dengan MySQL Server <br>";
//     echo "Database $db bisa diakses";
//   }else{
//     echo "Koneksi Gagal Bro..";
//   }

//Looping Untuk menampilkan data (namabarang,jumlah,harga)

// echo "<div class='total'>";
// while($rkl = mysqli_fetch_array($sql)){
// 	echo "<big>total: $rkl[Total]</big>
// 	<br> <h3>pastikan total hasilnya 1</h3>";
	
	
// }	
echo "</div>";

/////////////////////////////////////////////////

echo "
<br>
<h2 style='margin-left: 1cm;'>karyawan</h2>";
echo "<table class='table1' border='1'>
  <tr>
	<th>no</th>
    <th>nik</th>
    <th>nama</th>
	<th>golongan</th>
    <th>alamat</th>
    <th>action</th>

	
 
  </tr>";

$sqla = mysqli_query($kon, "select * from tbl_karyawan order by nik");
$no = 1;
while($ra = mysqli_fetch_array($sqla)){
  echo "<tr>
    <td>$no</td>
    <td>
	  <b>$ra[nik]</b>
	</td>
    <td>
	   <b>$ra[nama]</b>
	</td>
    <td>
	   <b>$ra[golongan]</b>
    </td>
    <td>
        <b>$ra[alamat]</b>
    </td>
   
    <td>
     <a href='?p=altedit&nik=$ra[nik]'>Ubah</a> |
     <a href='?p=altdel&nik=$ra[nik]'>Hapus</a>
	</td>
    
    
  </tr>";
  $no++;
}  
echo "</table>";
echo "</div>";


?>