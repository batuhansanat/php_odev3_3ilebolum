<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<body>
    <h2>Sayının 3 İle Bölünebilirliğini Kontrol etme</h2>
    <hr>
    <form action="" method="get">
        <label>Sayı: </label>
        <input type="number" name="sayi" min="0" placeholder="Sayıyı girin">

        <button type="submit">Kontrol Et</button>
    </form>
    <br><br><br>


<?php

$sayi = $_GET['sayi']; //GET İLE FORMDAN GELEN SAYIYI ALIYORUZ

if(trim($sayi) == "" && trim($sayi) == null){ //GİRİLEN SAYININ BOŞ OLUP OLMADIĞINI KONTROL EDİYOR
    echo "LÜTFEN BİR SAYI GİRİN!";
}

if(trim($sayi)){
    echo "Girilen sayı: ".$sayi;
    echo "<br>";//TEKRAR BİR KONTROL İÇİN GİRİLEN DEĞERİN VARLIĞINI KONTROL EDİYOR
    if($sayi % 3 == 0){//SAYININ 3 İLE BÖLÜNÜP BÖLÜNMEDİĞİNİ KONTROL EDİYOR
        echo "Girdiğiniz sayı 3 ile tam bölünebiliyor.";
    }
    else{//EĞER SAYI 3 İLE BÖLÜNEMİYORSA
        $checkNum = $sayi;
        while($checkNum % 3 !== 0){ //CHECKNUM DEĞİŞKENİNİ SAYIYA EŞİTLİYORUZ. VE WHILE İLE BÖLÜMDEN KALAN 0 OLANA DEK DÖNGÜYE SOKUYORUZ
            $checkNum++;
        }
        echo "3 ile bölünebilecek en yakın sayı: ".$checkNum;
    }
}
?>
</body>
</html>