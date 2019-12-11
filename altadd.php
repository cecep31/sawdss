<br>
<h3 style="padding-left: 130px; color: rgb(58, 143, 115);">karyawan</h3><br>
	<form action="" method="post" class="asik">		
		
				<label for="">NIK</label>
				<input style="margin-left: 73px" type="text" name="nik" id="nik"><br>					
		
				<label for="">nama</label>
				<input style="margin-left: 60px" type="text" name="nama" id="nama">	<br>				
          
				<label for="">golongan</label>
				<select style="padding-left: 3px; margin-left: 33px" name="golongan" id="golongan">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>	<br>				
         
				<label for="">alamat</label>
				<input style="margin-left: 52px" type="text" name="alamat" id="alamat">	<br>				
           				
          
				
				<input type="submit" name="simpan" id="simpan" value="TAMBAH" />					
			
    </form>
<?php

if( isset($_POST["simpan"])){
  $sqlalt = mysqli_query($kon, "insert into tbl_karyawan (nik, nama, golongan, alamat) values ('$_POST[nik]','$_POST[nama]','$_POST[golongan]','$_POST[alamat]')"); 
  if($sqlalt){
    echo "Data Berhasil Disimpan";
  }else{
    echo "gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/sawdss'>";
}

?>  
   