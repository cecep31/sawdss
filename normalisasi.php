
<form action="" method="POST">
        <label style="margin-left: 10%;" for="">filter berdasarkan tanggal</label>
        <input style="margin-left: 10px" type="date" name="tgl1" id="tgl1" placeholder="yyyy-mm-dd">
        <input style="margin-left: 2px" type="date" name="tgl2" id="tgl2" placeholder="yyyy-mm-dd">
        <input type="submit" name="filter" id="filter" value="filter" />
</form>

<?php

if( isset($_POST["filter"])){
  
  if (!empty($_POST["tgl1"])) {
    $tgl1=$_POST["tgl1"];
  }else{
    $tgl1="0000-00-00";
  }
  
  if (!empty($_POST["tgl2"])) {
    $tgl2=$_POST["tgl2"];
  }else{
    $tgl2="3000-01-30";
  }
  
  
  
  
  
  
  echo "
  <br>
  <h2 style='margin-left: 1cm;'>Data Nilai Karyawan</h2> <br>";
  echo "<table class='table2' border='1'>
    <tr>
    <th>no</th>
      
      <th>nik</th>
      <th>pengetahuan</th>
      <th>intalasi jaringan</th>
      <th>kepribadian</th>
      <th>agama</th>
      <th>action</th>
      
    
    
   
    </tr>";
  
  $panggil = mysqli_query($kon, "SELECT * FROM tbl_bobot where tgl between '$tgl1' and '$tgl2' order by nik asc");
  
  
  $no = 1;
  while($rs = mysqli_fetch_array($panggil)){
    echo "<tr>
      <td>$no</td>
      <td>
      <b>$rs[nik]</b>
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
      <td>
       <a href='?p=bobotedit&nik=$rs[nik]'>Ubah</a> |
       <a href='?p=bobotdel&nik=$rs[nik]'>Hapus</a>
    </td>
   
    </tr>";
    $no++;
  }  
  echo "</table>";
  
  
  
  $sqlalt = mysqli_query($kon, "delete from tbl_normal");
  
  
  $sqlnilai=mysqli_query($kon, "SELECT max(c1) AS max FROM tbl_bobot");
  $sqlpiagam=mysqli_query($kon, "SELECT max(c2) AS max FROM tbl_bobot");
  $sqlpoint=mysqli_query($kon, "SELECT max(c3) AS max FROM tbl_bobot");
  $sqlakhlak=mysqli_query($kon, "SELECT max(c4) AS max FROM tbl_bobot");
  //Looping Untuk menampilkan data (namabarang,jumlah,harga)
  
  
  while($rkl = mysqli_fetch_array($sqlnilai)){
    $maxnilai = $rkl["max"];	
  }
  while($rkl = mysqli_fetch_array($sqlpiagam)){
    $maxpiagam = $rkl["max"];	
  }
  while($rkl = mysqli_fetch_array($sqlpoint)){
    $maxpoint = $rkl["max"];	
  }
  while($rkl = mysqli_fetch_array($sqlakhlak)){
    $maxakhlak = $rkl["max"];	
  }
  
  
  // echo "<h3>max nilai rapor:</h3> $maxnilai";
  // echo "<h3>max piagam     :</h3> $maxpiagam";
  // echo "<h3>min ponit      :</h3> $minpoint";
  // echo "<h3>max akhlak     :</h3>$maxakhlak";
  
  
  $sqlm = mysqli_query($kon, "SELECT * FROM tbl_bobot WHERE tgl between '$tgl1' AND '$tgl2' ORDER BY nik ASC");
  
  while($rm = mysqli_fetch_array($sqlm)){
     $c1 = $rm["c1"]/$maxnilai;
     $c2 = $rm["c2"]/$maxpiagam;
     $c3 = $rm["c3"]/$maxpoint;
     $c4 = $rm["c4"]/$maxakhlak;
      $nik = $rm["nik"];
      $tgl = $rm["tgl"];
  
  
      $sqlnormal = mysqli_query($kon, "insert into tbl_normal (nik, c1, c2, c3, c4, tgl) values ('$nik','$c1','$c2','$c3','$c4','$tgl')");
  
  
  }  
  
  
  echo "
  <br>
  <h2 style='margin-left: 1cm;'>Data Normalisasi</h2> <br>";
  echo "<table class='table2' border='1'>
    <tr>
    <th>no</th>
      <th>nama</th>
      <th>pengetahuan</th>
      <th>intalasi jaringan</th>
      <th>kepribadian</th>
      <th>agama</th>
      <th>tgl penilaian</th>
      
    
    
   
    </tr>";
  
  
  
  $panggil = mysqli_query($kon, "SELECT tbl_karyawan.nama, tbl_normal.c1, tbl_normal.c2, tbl_normal.c3, tbl_normal.c4, tbl_normal.tgl FROM tbl_normal, tbl_karyawan WHERE tbl_karyawan.nik=tbl_normal.nik ");
  
  
  $no = 1;
  while($rs = mysqli_fetch_array($panggil)){
    echo "<tr>
      <td>$no</td>
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
      <td>
      <b>$rs[tgl]</b>
      </td>
   
    </tr>";
    $no++;
  }  
  echo "</table>";
  



  
}





?>