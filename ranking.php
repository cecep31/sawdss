<h2 style='margin-left: 1cm;'>data perengkingan</h2>
<?php
$sqlrank = mysqli_query($kon, "delete from tbl_rank");



echo "<br>

    <table class='table1' border='1'>
  <tr>
	  <th>rank</th>
    <th>nik</th>
    <th>nama</th>
    <th>nilai</th>
    <th>tgl</th>

 

	
 
  </tr>";

$sqlnormal = mysqli_query($kon, "select * from tbl_normal order by mik");
//////
$sqlc = mysqli_query($kon, "select * from tbl_cat where id_cat = 'c1'");
while($rmc1 = mysqli_fetch_array($sqlc)){

    $bobot1 = $rmc1["bobotc"];
}  
//
//////
$sqlc = mysqli_query($kon, "select * from tbl_cat where id_cat = 'c2'");
while($rmc1 = mysqli_fetch_array($sqlc)){

    $bobot2 = $rmc1["bobotc"];
}  
//
//////
$sqlc = mysqli_query($kon, "select * from tbl_cat where id_cat = 'c3'");
while($rmc1 = mysqli_fetch_array($sqlc)){

    $bobot3 = $rmc1["bobotc"];
}  
//
//////
$sqlc = mysqli_query($kon, "select * from tbl_cat where id_cat = 'c4'");
while($rmc1 = mysqli_fetch_array($sqlc)){

    $bobot4 = $rmc1["bobotc"];
}  
//


$sqlnormal = mysqli_query($kon, "select * from tbl_normal order by nik");
while($sqlalt = mysqli_fetch_array($sqlnormal)){
  

    $v = ($bobot1*$sqlalt["c1"])+($bobot2*$sqlalt["c2"])+($bobot3*$sqlalt["c3"])+($bobot4*$sqlalt["c4"]);
    $sqlrangking = mysqli_query($kon, "insert into tbl_rank (nik, nilai, tgl) values ('$sqlalt[nik]','$v','$sqlalt[tgl]')");
   

  }
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

