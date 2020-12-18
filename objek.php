<?php
class kucing {      
   //property 
   var $jenis;              
   var $warna_bulu;         
   var $makanan;      
   
   //method kucing 
 function berdiri(){
          return "kucingnya berdiri <br/>";
   }

   function duduk() {
          return "kucingnya duduk <br/>";
   }
   
}
//instansiasi class kucing
$kucing = new kucing();

//memanggil method berdiri dari class kucing
echo $kucing->berdiri();

//memanggil method duduk dari class kucing
echo $kucing->duduk();

?>
