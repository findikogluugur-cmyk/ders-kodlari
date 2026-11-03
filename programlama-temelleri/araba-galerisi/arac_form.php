<?php
// Ekle ve düzenle sayfalarının ortak formu. $a dizisi alanların değerlerini taşır.
$yakitlar = ['Benzin', 'Dizel', 'LPG', 'Hibrit', 'Elektrik'];
// Boş bırakılan yıl ve fiyat doğrulamada 0 olur; formda 0 değil boş görünsün (km için 0 geçerli)
foreach (['yil', 'fiyat'] as $alan) {
    if (empty($a[$alan])) $a[$alan] = '';
}
?>
<form method="post" class="col-md-6">
  <div class="row g-2">
    <div class="col"><input class="form-control" name="marka" placeholder="Marka" value="<?= e($a['marka']) ?>"></div>
    <div class="col"><input class="form-control" name="model" placeholder="Model" value="<?= e($a['model']) ?>"></div>
  </div>
  <div class="row g-2 mt-1">
    <div class="col"><input class="form-control" name="yil" type="number" placeholder="Yıl" value="<?= e($a['yil']) ?>"></div>
    <div class="col"><input class="form-control" name="km" type="number" placeholder="Kilometre" value="<?= e($a['km']) ?>"></div>
  </div>
  <select class="form-select mt-2" name="yakit">
    <?php foreach ($yakitlar as $y): ?>
      <option <?= $a['yakit'] === $y ? 'selected' : '' ?>><?= $y ?></option>
    <?php endforeach; ?>
  </select>
  <input class="form-control mt-2" name="fiyat" type="number" placeholder="Fiyat (₺)" value="<?= e($a['fiyat']) ?>">
  <input class="form-control mt-2" name="resim" placeholder="Resim adresi (isteğe bağlı)" value="<?= e($a['resim']) ?>">
  <textarea class="form-control mt-2" name="aciklama" rows="3" placeholder="Açıklama"><?= e($a['aciklama']) ?></textarea>
  <button class="btn btn-primary mt-3">Kaydet</button>
  <a class="btn btn-link mt-3" href="yonetim.php">Vazgeç</a>
</form>
