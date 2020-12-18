<?php

//class kucing
class kucing {      
   //menentukan property dengan protected
   protected $nama = "inem";             
   
   //method protected
   protected function nama(){
          return "nama kucingnya " .$this->nama;
   }

   public function tampilkan_nama(){
          return $this->tampilkan_nama;
   }

}
//instansiasi class kucing
$kucing = new kucing();

//memanggil method public tampilkan_nama dari class kucing
echo $kucing->tampilkan_nama();


?>
