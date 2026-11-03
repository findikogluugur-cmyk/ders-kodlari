<?php
// Hafta 12 · Bağlantılar Filtreleri koruyarak sayfa değiştirmek
function adres($degisen) {
    $q = array_merge($_GET, $degisen);
    return "?" . http_build_query($q);
}
?>
<nav><ul class="pagination">
<?php for ($i = 1; $i <= $sayfa_sayisi; $i++): ?>
  <li class="page-item
      <?= $i === $sayfa ? 'active' : '' ?>">
    <a class="page-link"
       href="<?= e(adres(['sayfa' => $i])) ?>">
      <?= $i ?></a>
  </li>
<?php endfor; ?>
</ul></nav>
