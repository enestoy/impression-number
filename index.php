<?php require 'database.php'; ?>
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
        <td><a href="index.php" class="link-success text-decoration-none">Ana Sayfa</a></td>
      </tr>
      <tr>
        <td colspan="2"></td>
      </tr>
      <tr class="bg-primary">
        <td><b class="text-white">Makalenin Başlığı</b></td>
        <td class="text-white">Gösterim Sayısı</td>
      </tr>
      <?php

      $Sorgu = $db->prepare("SELECT * FROM makaleler");
      $Sorgu->execute();
      $KayitSayisi = $Sorgu->rowCount();
      $Kayitlar = $Sorgu->fetchAll(PDO::FETCH_ASSOC);
      if ($KayitSayisi > 0) {
        foreach ($Kayitlar as $Satirlar) {
      ?>
          <tr class="bg-light">
            <td><a class="link-dark text-decoration-none"href="read.php?id=<?php echo $Satirlar["id"];?>"><?php echo $Satirlar["makale_baslik"];?></a></td>
            <td class="text-danger"><?php echo $Satirlar["gosterim_sayisi"];?></td>
          </tr>
      <?php
        }
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