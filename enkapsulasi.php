<?php

//class kucing
class kucing {      
   //prop
   public $jenis;              
   public $warna_bulu;         
   
   //method kucing 
   function berdiri(){
          return "kucingnya berdiri <br/>";
   }

}
//instansiasi class kucing
$kucing = new kucing();

//memanggil method berdiri dari class kucing
echo $kucing->berdiri();


?>
