<?php

$sqls = mysqli_query($kon, "delete from tbl_bobot where nik='$_GET[nik]'");

if($sqls){
  echo "Data Berhasil Dihapus";
}else{
  echo "Gagal Menghapus";
}
echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=normal'>";
?>