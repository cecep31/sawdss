<?php
echo "
<br>
<h2>KRITERIA</h2>";
echo "<table class='table1' border='1'>
  <tr>
	<th>no</th>
    <th>NIK</th>
    <th>nama</th>
	<th>jenis</th>
	
	
 
  </tr>";

$sqlm = mysqli_query($kon, "select * from tbl_karyawan");
$no = 1;
while($rm = mysqli_fetch_array($sqlm)){
  echo "<tr>
    <td>$no</td>
    <td>
	  <b>$rm[nik]</b>
	</td>
    <td>
	 <b>$rm[nama]</b>
	</td>
    <td>
	  benifit/cost : <b>$rm[jc]</b>
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
<h2>ALTERNATIF</h2>";
echo "<table class='table1' border='1'>
  <tr>
	<th>no</th>
    <th>nama</th>
    <th>pengetahuan/wawasan</th>
	  <th>instalsi jaringan</th>
    <th>kepribadian</th>
    <th>agama</th>
    <th>action</th>
	
 
  </tr>";

$sqlm = mysqli_query($kon, "select * from tbl_alt order by nama");
$no = 1;
while($rm = mysqli_fetch_array($sqlm)){
  echo "<tr>
    <td>$no</td>
    <td>
	  <b>$rm[nama]</b>
	</td>
    <td>
	   <b>$rm[nilai_rapor]</b>
	</td>
    <td>
	   <b>$rm[piagam]</b>
    </td>
    <td>
	   <b>$rm[poin_pelanggaran]</b>
    </td>
    <td>
	   <b>$rm[akhlak]</b>
    </td>
    <td>
     <a href='?p=alternatifedit&ida=$rm[ida]'>Ubah</a> |
     <a href='?p=alternatifdel&ida=$rm[ida]'>Hapus</a>
	</td>
    
    
  </tr>";
  $no++;
}  
echo "</table>";
echo "</div>";


?>