<br>
<h3 style="padding-left: 130px; color: rgb(58, 143, 115);">pengisian bobot</h3><br>
	<form action="" method="post" class="asik">		
        
   


        <label for="">NIK</label>
        <input style="margin-left: 73px" type="text" name="nik" id="nik" >
        <input style="width: 5%;" type="submit" name="cari" id="cari" value="isi" />
        <div id="live"></div><br>					
				<div id="isi"></div>				
        <label for="">pengetahuan</label>
        <input style="margin-left: 98px" type="text" name="c1" id="c1" > <br> 
        <label for="">instalasi jaringan</label>
        <input style="margin-left: 73px" type="text" name="c2" id="c2" > <br>  				
        <label for="">kepribadian</label>
        <input style="margin-left: 112px" type="text" name="c3" id="c3" > <br> 
				<label for="">agama</label>
        <input style="margin-left: 148px" type="text" name="c4" id="c4" > <br> 
        <input type="submit" name="simpan" id="simpan" value="TAMBAH" />					
        
			
    </form>
<?php

$tgln=date('Y-m-d');
if( isset($_POST["simpan"])){
  $sqlalt = mysqli_query($kon, "INSERT INTO tbl_bobot (nik,c1,c2,c3,c4,tgl) VALUES ('$_POST[nik]','$_POST[c1]','$_POST[c2]','$_POST[c3]','$_POST[c4]','$tgln')"); 
  if($sqlalt){
    echo "Data Berhasil Disimpan";
  }else{
    echo "nik sidah ditambahkan sebelumnya";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=/sawdss'>";
}

?>  
<script src="js/scripts.js"></script>
