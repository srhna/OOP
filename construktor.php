<?php

//class kucing
class kucing {      
   //property 
   var $jenis;              
   var $warna_bulu;         
   var $makanan;      
   
   function __construct(){
          echo "ini adalah method construct <br/>";
   }
   
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
