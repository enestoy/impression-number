<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=hit-takip;charset=UTF8","root","");
}catch(PDOException $Hata){
    echo "Bağlantı Hatası";
    die();
}


function Filtrele($Deger){
    $Bir = trim($Deger);
    $iki = strip_tags($Bir);
    $Uc =  htmlspecialchars($iki, ENT_QUOTES);
    $Sonuc = $Uc;
    return $Sonuc;
  }
?>