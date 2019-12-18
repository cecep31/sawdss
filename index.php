<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAW</title>
    <link rel="stylesheet" href="css/gayaku.css">
</head>
<body>
<nav>
    <ul>
        <li><a href="/sawdss">Home</a></li>
        <li><a href="#">input</a>
            <ul>
                <li><a href="?p=altadd">tambah karyawan</a></li>
                <li><a href="?p=bobotadd">masukan nilai</a></li>
                
            </ul>
        </li>
        <li><a href="#">proses</a>
            <ul>
                <li><a href="?p=normal">normalisasi</a></li>
                <li><a href="?p=ranking">perengkingan</a></li>
            </ul>
        </li>
        <li><a href="#">lihat data</a>
            <ul>
                <li><a href="?p=karyawan">karyawan ternilai</a></li>
                <li><a href="?p=kriteria">kriteria</a></li>
                <li><a href="?p=lihatrank">perengkingan</a></li>
                
            </ul>
        </li>
        <li><a href="/sawdss/laporan.php" onClick="return confirm ('pastikan data di form perankingan sudah benar')">laporan</a></li>
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
        case 'karyawan':
            include "karyawan.php";
            break;
        case 'bobotadd':
            include "bobotadd.php";
            break;   
        case 'bobotedit':
            include "bobotedit.php";
            break;
        case 'bobotdel':
            include "bobotdel.php";
            break;    
        case 'altdel':
            include "altdel.php";
            break;
        case 'normal':
            include "normalisasi.php";
            break;	
        case 'ranking':
            include "ranking.php";
            break;
        case 'lihatrank':
            include "lihatrank.php";
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