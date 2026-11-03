<?php
// Tek bir arabanın ayrıntısı: arac.php?id=3
require 'baglanti.php';

$id = (int)($_GET['id'] ?? 0);
$sorgu = $db->prepare('SELECT * FROM arabalar WHERE id = ?');
$sorgu->execute([$id]);
$a = $sorgu->fetch();

if (!$a) {
    header('Location: index.php');
    exit;
}

$baslik = $a['marka'] . ' ' . $a['model'];
require 'ust.php';
?>
<a href="index.php">← Vitrine dön</a>
<h1 class="mt-3"><?= e($a['marka']) ?> <?= e($a['model']) ?></h1>
<?php if ($a['resim']): ?>
  <img src="<?= e($a['resim']) ?>" class="img-fluid rounded mb-3" style="max-width:480px" alt="<?= e($baslik) ?>">
<?php endif; ?>
<table class="table w-auto">
  <tr><th>Yıl</th><td><?= e($a['yil']) ?></td></tr>
  <tr><th>Kilometre</th><td><?= number_format($a['km'], 0, ',', '.') ?> km</td></tr>
  <tr><th>Yakıt</th><td><?= e($a['yakit']) ?></td></tr>
  <tr><th>Fiyat</th><td><?= number_format($a['fiyat'], 0, ',', '.') ?> ₺</td></tr>
</table>
<p><?= nl2br(e($a['aciklama'])) ?></p>
<?php require 'alt.php'; ?>
