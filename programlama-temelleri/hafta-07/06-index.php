<?php
// Hafta 7 · Adım 4 · index.php Diziyi HTML kartlarına dökmek
require "arabalar.php"; ?>
<!DOCTYPE html>
<html lang="tr"><head><meta charset="UTF-8">
<title>Araba Galerisi</title></head><body>
<h1>Araba Galerisi (<?= count($arabalar) ?> araç)</h1>

<?php foreach ($arabalar as $a): ?>
  <div style="border:1px solid #ccc; padding:8px;
              margin:8px; display:inline-block">
    <h3><?= $a["marka"] ?> <?= $a["model"] ?></h3>
    <p><?= $a["yil"] ?> · <?= $a["km"] ?> km</p>
    <b><?= number_format($a["fiyat"], 0, ",", ".") ?>
       TL</b>
    <?php if ($a["fiyat"] > 1000000): ?>
      <p>⭐ Lüks</p>
    <?php endif; ?>
  </div>
<?php endforeach; ?>
</body></html>
