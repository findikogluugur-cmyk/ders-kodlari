<?php
// Hafta 5 · Uyarı kutuları Sonucu Bootstrap alert ile göstermek if (!empty($hata)): ?>
  <div class="alert alert-danger">
    <?= htmlspecialchars($hata) ?>
  </div>
<?php endif; ?>

<?php if (!empty($basari)): ?>
  <div class="alert alert-success">
    <?= htmlspecialchars($basari) ?>
  </div>
<?php endif; ?>

<input class="form-control" name="uye_kadi"
  value="<?= htmlspecialchars($uye_kadi ?? "") ?>">
