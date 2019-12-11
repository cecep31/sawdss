<?php
include "../koneksi.php";
$nik = $_GET["nik"];
$adam = mysqli_query($kon, "SELECT * from tbl_karyawan where nik LIKE '$nik%' or '%$nik' or '%$nik%'");
while($rs = mysqli_fetch_array($adam)){
    echo "$rs[nama] <br>";
}


?>