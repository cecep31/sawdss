<?php
$sqlm = mysqli_query($kon, "select * from tbl_bobot where nik='$_GET[nik]'");
$rm = mysqli_fetch_array($sqlm);
?>
<br>

<h3 style="padding-left: 130px; color: rgb(58, 143, 115);">karyawan</h3><br>
	<form action="" method="post" class="asik">		
		
				<label for="">NIK</label>
				<input style="margin-left: 89px" type="text" name="nik" id="nik" value="<?php echo "$rm[nik]"; ?>" disabled><br>					
    
        <label for="">tgl penilaian</label>
				<input style="margin-left: 30px" type="date" name="tgl" id="tgl" value="<?php echo "$rm[tgl]"; ?>">	<br>

				<label for="">pengetahuan</label>
				<input style="margin-left: 20px" type="text" name="nama" id="nama" value="<?php echo "$rm[c1]"; ?>">	<br>				
                  
                <label for="">jaringan</label>
				<input style="margin-left: 60px" type="text" name="nama" id="nama" value="<?php echo "$rm[c2]"; ?>">	<br>				
          		
         
				<label for="">kepribadian</label>
				<input style="margin-left: 34px" type="text" name="alamat" id="alamat" value="<?php echo "$rm[c3]"; ?>">	<br>				
           				
                <label for="">agama</label>
				<input style="margin-left: 68px" type="text" name="alamat" id="alamat" value="<?php echo "$rm[c4]"; ?>">	<br>				
           			
				
				<input type="submit" name="simpan" id="simpan" value="UBAH" />					
			
    </form>
<?php

if( isset($_POST["simpan"])){
  $sqlalt = mysqli_query($kon, "update tbl_bobot set nik='$_POST[nik]', c1='$_POST[c1]', c2='$_POST[c2]', c3='$_POST[c3]', c4='$_POST[c4]', tgl='$_POST[tgl]' where nik='$_GET[nik]'"); 
  if($sqlalt){
    echo "Data Berhasil Diubah";
  }else{
    echo "gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/sawdss'>";
}

?>  
   