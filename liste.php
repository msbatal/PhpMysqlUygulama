<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kayıt Listesi - Veritabanı Uygulaması</title>
</head>
<body>
    <div style="text-align:center;">
        <a href="index.html">ANA SAYFA</a> - <a href="liste.php">KAYIT LİSTESİ</a> - <a href="yeni.php">YENİ KAYIT</a>
        <br><hr><br><br>
    </div>
    <?php
        $baglan = new mysqli("localhost","mehmet","1234","deneme");
        $baglan->set_charset("utf8");

        $sorgu = $baglan->query("select * from ogrenciler order by id asc");

        echo "<table width='100%' border='1'>
        <tr align='center'>
        <th>S. No</th>
        <th>Adı Soyadı</th>
        <th>TC Kimlik</th>
        <th>Telefon No</th>
        <td>İşlemler</th>
        </tr>";
        
        while ($satir = $sorgu->fetch_object()) {
            echo "<tr align='center'>
            <td> $satir->id </td>
            <td> $satir->adsoyad </td>
            <td> $satir->tckimlik </td>
            <td> $satir->telefon </td>
            <td> <a href='yeni.php?id=$satir->id'>dz</a> - <a href='sil.php?id=$satir->id'>sl</a> </td>
            </tr>";
        }

        echo "</table>";

        $toplam = $sorgu->num_rows;

        $sorgu->free_result();

        $baglan->close();

        echo "<br><br>Toplam $toplam Kayıt Bulundu.";
    ?>
</body>
</html>