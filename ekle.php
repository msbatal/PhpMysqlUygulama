<?php
    $baglan = new mysqli("localhost","mehmet","1234","deneme");
    $baglan->set_charset("utf8");

    $kayitno = $_POST["id"];

    if ($kayitno>0) {
        $adsoyad = $_POST["adsoyad"];
        $tckimlik = $_POST["tckimlik"];
        $telefon = $_POST["telefon"];

        $sorgu = $baglan->query("update ogrenciler set adsoyad='$adsoyad',tckimlik='$tckimlik',telefon='$telefon' where id=$kayitno");

        $toplam = $baglan->affected_rows;

        if ($toplam>0) {
            header("Location:liste.php");
        } else {
            echo "Düzenleme Yapılamadı.";
        }
    } else {
        $sorgu = $baglan->prepare("insert into ogrenciler (adsoyad,tckimlik,telefon) values (?,?,?)");
        $sorgu->bind_param("sss",$adsoyad,$tckimlik,$telefon);

        $adsoyad = $_POST["adsoyad"];
        $tckimlik = $_POST["tckimlik"];
        $telefon = $_POST["telefon"];

        $sorgu->execute();

        $toplam = $baglan->affected_rows;

        $sorgu->close();

        $baglan->close();

        if ($toplam > 0) {
            header("Location:yeni.php");
        } else {
            echo "Kayıt Eklenemedi.";
        }
    }
?>