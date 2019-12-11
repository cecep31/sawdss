<?php
echo "
<br>
<h2>KRITERIA</h2>";
echo "<table class='table1' border='1'>
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
<h2>karyawan</h2>";
echo "<table class='table1' border='1'>
  <tr>
	<th>no</th>
    <th>nik</th>
    <th>nama</th>
	<th>golongan</th>
    <th>alamat</th>
    <th>action</th>

	
 
  </tr>";

$sqla = mysqli_query($kon, "select * from tbl_karyawan order by nama");
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
     <a href='?p=altedit&ida=$rm[nik]'>Ubah</a> |
     <a href='?p=altdel&ida=$rm[nik]'>Hapus</a>
	</td>
    
    
  </tr>";
  $no++;
}  
echo "</table>";
echo "</div>";


?>