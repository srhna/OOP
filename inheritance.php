<?php

//class 
class kucing { 

   //property class manusia
   public $nama_kucing;              
          
   //method pada class kucing 
   function berinama($kucing){
          $this->nama_kucing=$kucing;
   }

}

//class turunan atau sub class dari class manusia
//kita menghubungkan class dengan syntax extends

class pemilik extends kucing{

    //property class pemilik
    public $nama_pemilik;
    
    //method pada class pemilik
    function berinamapemilik($pemilik){
        $this->nama_pemilik=$pemilik;
    }
    
}

//instansiasi class pemilik
$ina = new pemilik;

//method beri nama
$ina->berinama(" inem ");
$ina->berinamapemilik(" jun ");

//menampilkan isi property
echo "nama kucingnya :" . $ina->nama_kucing . "<br/>";
echo "nama pemiliknya :" . $ina->nama_pemilik;

?>
    
