<?php
$sqlm = mysqli_query($kon, "delete from tbl_karyawan where nik='$_GET[nik]'");
$sqls = mysqli_query($kon, "delete from tbl_bobot where nik='$_GET[nik]'");

if($sqlm){
  echo "Data Berhasil Dihapus";
}else{
  echo "Gagal Menghapus";
}
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/sawdss'>";
?>