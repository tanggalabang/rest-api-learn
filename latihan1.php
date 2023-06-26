<?php
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);

$menu = $menu["menu"];
?>

<!DOCTYPE html>
<html lang="en">
<body>
  <?php foreach($menu as $hasil) :  ?>
  
  <img src='img/pizza/<?= $hasil["gambar"]; ?>' >
  <h1><?= $hasil["nama"]; ?></h1>
  <h3><?= $hasil["harga"]; ?></h3>
  <p><?= $hasil["deskripsi"]; ?></p>
    
  
  <?php endforeach ?>
</body>
</html>