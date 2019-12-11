<?php
$sqlm = mysqli_query($kon, "select * from tbl_karyawan where nik='$_GET[nik]'");
$rm = mysqli_fetch_array($sqlm);
?>
<br>

<h3 style="padding-left: 130px; color: rgb(58, 143, 115);">karyawan</h3><br>
	<form action="" method="post" class="asik">		
		
				<label for="">NIK</label>
				<input style="margin-left: 73px" type="text" name="nik" id="nik" value="<?php echo "$rm[nik]"; ?>"><br>					
		
				<label for="">nama</label>
				<input style="margin-left: 60px" type="text" name="nama" id="nama" value="<?php echo "$rm[nama]"; ?>">	<br>				
          
				<label for="">golongan</label>
                <select style="padding-left: 3px; margin-left: 33px" name="golongan" id="golongan" >
                    <option value="<?php echo "$rm[golongan]"; ?>" selected><?php echo "$rm[golongan]"; ?></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>	<br>				
         
				<label for="">alamat</label>
				<input style="margin-left: 52px" type="text" name="alamat" id="alamat" value="<?php echo "$rm[alamat]"; ?>">	<br>				
           				
          
				
				<input type="submit" name="simpan" id="simpan" value="UBAH" />					
			
    </form>
<?php

if( isset($_POST["simpan"])){
  $sqlalt = mysqli_query($kon, "update tbl_karyawan set nik='$_POST[nik]', nama='$_POST[nama]', golongan='$_POST[golongan]', alamat='$_POST[alamat]' where nik='$_GET[nik]'"); 
  if($sqlalt){
    echo "Data Berhasil Diubah";
  }else{
    echo "gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/sawdss'>";
}

?>  
   