<?php
class kucing {      
   //property 
   var $jenis;              
   var $warna_bulu;         
   var $makanan;      
   
   //method kucing 
  function berdiri() {
   //... isi method
   }
 
   function duduk() {
   //... isi method
   }
   
}
//instansiasi class kucing
$kucing = new kucing();

//memanggil method berdiri dari class kucing
echo $kucing->berdiri();

//memanggil method duduk dari class kucing
echo $kucing->duduk();

?>
