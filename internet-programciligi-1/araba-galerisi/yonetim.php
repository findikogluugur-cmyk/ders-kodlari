<?php
// Yönetim: arabaların listesi, düzenle ve sil düğmeleri
require 'giris_kontrol.php';
$baslik = 'Yönetim';
$arabalar = $db->query('SELECT * FROM arabalar ORDER BY id DESC')->fetchAll();
require 'ust.php';
?>
<div class="d-flex justify-content-between align-items-center mb-3">
  <h1>Arabalar</h1>
  <a class="btn btn-success" href="arac_ekle.php">+ Yeni araba</a>
</div>
<table class="table table-striped bg-white">
  <tr><th>#</th><th>Marka / model</th><th>Yıl</th><th>Fiyat</th><th></th></tr>
  <?php foreach ($arabalar as $a): ?>
    <tr>
      <td><?= (int)$a['id'] ?></td>
      <td><?= e($a['marka']) ?> <?= e($a['model']) ?></td>
      <td><?= e($a['yil']) ?></td>
      <td><?= number_format($a['fiyat'], 0, ',', '.') ?> ₺</td>
      <td class="text-end">
        <a class="btn btn-sm btn-outline-primary" href="arac_duzenle.php?id=<?= (int)$a['id'] ?>">Düzenle</a>
        <!-- Silme bir form ile POST olarak gönderilir; bağlantıyla (GET) silinmez -->
        <form method="post" action="arac_sil.php" class="d-inline" onsubmit="return confirm('Silinsin mi?')">
          <input type="hidden" name="id" value="<?= (int)$a['id'] ?>">
          <button class="btn btn-sm btn-outline-danger">Sil</button>
        </form>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
<?php require 'alt.php'; ?>
