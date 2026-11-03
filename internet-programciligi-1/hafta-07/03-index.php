<?php
// Hafta 7 · Adım 3 · index.php Vitrin: SELECT + foreach
require 'baglanti.php';

$arabalar = $db->query(
    'SELECT * FROM arabalar ORDER BY eklenme DESC'
)->fetchAll();

require 'ust.php';
?>
<div class="row g-3">
<?php foreach ($arabalar as $a): ?>
  <div class="col-md-4"><div class="card card-body">
    <h5><?= e($a['marka']) ?> <?= e($a['model']) ?></h5>
    <p><?= e($a['yil']) ?> · <?= e($a['yakit']) ?></p>
    <b><?= number_format($a['fiyat'], 0, ',', '.') ?> ₺</b>
    <a href="arac.php?id=<?= (int)$a['id'] ?>">
      Ayrıntı</a>
  </div></div>
<?php endforeach; ?>
</div>
<?php require 'alt.php'; ?>
