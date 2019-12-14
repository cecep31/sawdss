var nik = document.getElementById('nik');
var live = document.getElementById('live');
var nama = document.getElementById('nama');

nik.addEventListener('keyup', function () {
   var xhr = new XMLHttpRequest()
   //cek
   xhr.onreadystatechange = function(){
       if(xhr.readyState == 4 && xhr.status==200){
           live.innerHTML = xhr.responseText;
           
           
       }
   }

   xhr.open('GET', 'ajax/manatap.php?nik='+ nik.value, true);
   xhr.send();

});
