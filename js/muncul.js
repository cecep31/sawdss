var tanggal = document.getElementById('tanggal');
var tanggal2 = document.getElementById('tanggal2');
var muncul = document.getElementById('muncul');



tanggal2.addEventListener('keyup',function(){
    var oha = new XMLHttpRequest();
    oha.onreadystatechange = function(){
        if (oha.readyState == 4 && oha.status == 200) {
            console.log ('berhasil');
            
        }
    }
})