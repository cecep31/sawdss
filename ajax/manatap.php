<?php
include "../koneksi.php";
$nik = $_GET["nik"];
$adam = mysqli_query($kon, "SELECT * from tbl_karyawan where nik LIKE '$nik%' or '%$nik' or '%$nik%' LIMIT 5");
while($rs = mysqli_fetch_array($adam)){
    //echo "$rs[nik]<br>";
    
}
$adam2 = mysqli_query($kon, "SELECT * from tbl_karyawan where nik='$nik'");
$rsd = mysqli_fetch_array($adam2);
echo "
    
    <label for=''>nama</label>
    <input style='margin-left: 60px' type='text' name='nama' id='nama' value='$rsd[nama]'>	
   <br>				
      
            <label for=''>golongan</label>
    <select style='padding-left: 3px; margin-left: 33px' name='golongan' id='golongan'>
                <option value='$rsd[golongan]'>$rsd[golongan]</option>
                <option value='A'>A</option>
                <option value='B'>B</option>
                <option value='C'>C</option>
                <option value='D'>D</option>
                <option value='E'>E</option>
            </select>	<br>				
     
            <label for=''>alamat</label>
            <input style='margin-left: 52px' type='text' name='alamat' id='alamat' value='$rsd[alamat]'>	<br>
    ";

?>
<script>

</script>