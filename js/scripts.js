var nik = document.getElementById('nik');
var live = document.getElementById('live');
var nama = document.getElementById('nama');

nik.addEventListener('keyup', function () {
   var xhr = new XMLHttpRequest()
   //cek
   xhr.onreadystatechange = function(){
       if(xhr.readyState == 4 && xhr.status==200){
           live.innerHTML = xhr.responseText;
           nama.innerHTML = xhr.responseText;
           
       }
   }

   xhr.open('GET', 'ajax/manatap.php?nik='+ nik.value, true);
   xhr.send();

});
nik.addEventListener('keydown', function () {
    var ajax = new XMLHttpRequest()

    ajax.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status==200){
           
            nama.innerHTML = ajax.responseText;
            
        }
    }
    xhr.open('GET', 'ajax/isilangsung.php?nik='+ nik.value, true);
   xhr.send();
});