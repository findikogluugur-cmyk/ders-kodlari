<?php
// Vitrin: herkes görebilir. Markaya göre arama yapılabilir.
require 'baglanti.php';
$baslik = 'Galerideki arabalar';

$ara = trim($_GET['ara'] ?? '');
if ($ara !== '') {
    $sorgu = $db->prepare('SELECT * FROM arabalar WHERE marka LIKE ? OR model LIKE ? ORDER BY eklenme DESC');
    $sorgu->execute(["%$ara%", "%$ara%"]);
} else {
    $sorgu = $db->query('SELECT * FROM arabalar ORDER BY eklenme DESC');
}
$arabalar = $sorgu->fetchAll();

require 'ust.php';
?>
<form class="d-flex mb-4" method="get">
  <input class="form-control me-2" name="ara" value="<?= e($ara) ?>" placeholder="Marka veya model ara">
  <button class="btn btn-primary">Ara</button>
</form>

<?php if (!$arabalar): ?>
  <div class="alert alert-info">Aradığınız kritere uygun araba yok.</div>
<?php endif; ?>

<div class="row g-3">
  <?php foreach ($arabalar as $a): ?>
    <div class="col-md-4">
      <div class="card h-100">
        <?php if ($a['resim']): ?>
          <img src="<?= e($a['resim']) ?>" class="card-img-top" alt="<?= e($a['marka'] . ' ' . $a['model']) ?>">
        <?php endif; ?>
        <div class="card-body">
          <h5 class="card-title"><?= e($a['marka']) ?> <?= e($a['model']) ?></h5>
          <p class="card-text text-muted"><?= e($a['yil']) ?> · <?= number_format($a['km'], 0, ',', '.') ?> km · <?= e($a['yakit']) ?></p>
          <p class="fs-5 fw-bold"><?= number_format($a['fiyat'], 0, ',', '.') ?> ₺</p>
          <a href="arac.php?id=<?= (int)$a['id'] ?>" class="btn btn-outline-primary btn-sm">Ayrıntı</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
<?php require 'alt.php'; ?>
