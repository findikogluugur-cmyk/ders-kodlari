<?php
// Hafta 10 · Açılır liste Kitap eklerken yazarı seçmek
$yazarlar = $db->query(
  "SELECT id, ad FROM yazarlar ORDER BY ad"
)->fetchAll();
?>
<select name="yazar_id" class="form-select">
  <?php foreach ($yazarlar as $y): ?>
    <option value="<?= (int)$y['id'] ?>"
      <?= ($a['yazar_id'] ?? 0) == $y['id']
          ? 'selected' : '' ?>>
      <?= e($y['ad']) ?>
    </option>
  <?php endforeach; ?>
</select>
