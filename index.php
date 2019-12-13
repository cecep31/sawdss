<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/gaya.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="/sawdss">Home</a></li>
        <li><a href="#">input</a>
            <ul>
                <li><a href="?p=altadd">tambah karyawan</a></li>
                <li><a href="?p=bobotadd">masukan bobot</a></li>
                <li><a href="?p=kriteria">kriteria</a></li>
            </ul>
        </li>
        <li><a href="#">penilaian</a>
            <ul>
                <li><a href="?p=normal">normalisasi</a></li>
                <li><a href="?p=ranking">perengkingan</a></li>
            </ul>
        </li>
        <li><a href="#">lihat data</a>
            <ul>
                <li><a href="#">karyawan ternilai</a></li>
                <li><a href="#">normalisasi</a></li>
                <li><a href="#">perengkingan</a></li>
                
            </ul>
        </li>
        <li><a href="#" onClick="return confirm ('pastikan data di form peremhkingan sudah benar')">laporan</a></li>
    </ul>
</nav>
<?php

include "koneksi.php";
if(isset($_GET['p'])){
    $page = $_GET['p'];

    switch ($page) {
        case 'altadd':
            include "altadd.php";
            break;
        case 'altedit':
            include "altedit.php";
            break;
        case 'bobotadd':
            include "bobotadd.php";
            break;    
        case 'alternatifdel':
            include "alternatifdel.php";
            break;
        case 'normal':
            include "normalisasi.php";
            break;	
        case 'ranking':
            include "ranking.php";
            break;
        case 'kriteria':
            include "kriteria.php";
            break;	    	
        default:
            echo "<br><center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
    }
}else{
    include "home.php";
}
?>
    
</body>
</html>