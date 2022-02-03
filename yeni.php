<?php
    $kayitno = $_GET["id"];

    if ($kayitno>0) {
        $baglan = new mysqli("localhost","mehmet","1234","deneme");
        $baglan->set_charset("utf8");

        $sorgu = $baglan->query("select * from ogrenciler where id=$kayitno");
        $satir = $sorgu->fetch_object();
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yeni Kayıt - Veritabanı Uygulaması</title>
</head>
<body>
    <div style="text-align:center;">
        <a href="index.html">ANA SAYFA</a> - <a href="liste.php">KAYIT LİSTESİ</a> - <a href="yeni.php">YENİ KAYIT</a>
        <br><hr><br><br>
    </div>
    <form action="ekle.php" method="post" style="text-align:center;">
        <strong>Adı Soyadı:</strong> <input type="text" name="adsoyad" value="<?php echo $satir->adsoyad; ?>" size="30">
        <br><br>
        <strong>TC Kimlik:</strong> <input type="text" name="tckimlik" value="<?php echo $satir->tckimlik; ?>" size="30">
        <br><br>
        <strong>Telefon No:</strong> <input type="text" name="telefon" value="<?php echo $satir->telefon; ?>" size="30">
        <br><br>
        <input type="hidden" name="id" value="<?php echo $satir->id; ?>">
        <input type="submit" value="Kaydet">
    </form>
</body>
</html>