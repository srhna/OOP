<?php

//class kucing
class kucing {      
   //menentukan property dengan private
   private $nama = "inem";             
   
   //method public
   public function tampilkan_nama(){
          return "nama kucingnya " .$this->nama;
   }

}
//instansiasi class kucing
$kucing = new kucing();

//memanggil method public tampilkan_nama dari class kucing
echo $kucing->tampilkan_nama();


?>
