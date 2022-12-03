<?php
require 'database.php';
$GelenID = Filtrele($_GET["id"]);
$HitGuncelle = $db->prepare("UPDATE makaleler SET 	gosterim_sayisi=gosterim_sayisi+1 WHERE id=?");
$HitGuncelle->execute([$GelenID]);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Görüntüleme ve Hit Uygulaması</title>
</head>

<body>
    <div class="container">
        <table class="table bg-light">
            <tr>
                <td><b>Görüntüleme ve Hit Uygulaması</b></td>
                <td><a href="index.php" class="link-success text-decoration-none">Anasayfa</a></td>
            </tr>
            <?php

            $Sorgu = $db->prepare("SELECT * FROM makaleler WHERE id=?");
            $Sorgu->execute([$GelenID]);
            $KayitSayisi = $Sorgu->rowCount();
            $Kayit = $Sorgu->fetch(PDO::FETCH_ASSOC);
            if ($KayitSayisi > 0) {
            ?>
                <tr>
                    <td><h4><?php echo $Kayit["makale_baslik"] . "<br>"; ?></h4></td>
                </tr>
                <tr>
                    <td><p><?php echo $Kayit["makale_icerik"] . "<br>"; ?></p></td>
                </tr>
                <tr>
                    <td><b><?php echo $Kayit["gosterim_sayisi"]; ?> defa görüntülendi.</b></td>
                </tr>


            <?php
            } else {
                header("Location:index.php");
            }
            ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php
$db = null;
?>