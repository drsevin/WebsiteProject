<?php
   
if($_POST){
    session_start();
    $kadi = $_POST["kullaniciadi"];
    $sifre = $_POST["sifre"];
    if($kadi == "b191210007@sakarya.edu.tr"){
       if($sifre == "b191210007"){
        echo "Hoşgeldiniz ".$sifre;

       }else{
           echo "Şifrenizi Yanlış Girdiniz!!! Lütfen Yeniden Deneyiniz.";
           header("Refresh:3; url=login.html");
       }
        
    }
    elseif($kadi != "b191210007@sakarya.edu.tr" and $sifre != "b191210007"){
        echo "Kullanıcı Adınızı Ve Şifrenizi Yanlış Girdiniz!!! Lütfen Yeniden Deneyiniz.";
        header("Refresh:3; url=login.html");
    }
    else{
        echo "Kullanıcı Adınızı Yanlış Girdiniz!!! Lütfen Yeniden Deneyiniz.";
        header("Refresh:3; url=login.html");
    }
}
?>

