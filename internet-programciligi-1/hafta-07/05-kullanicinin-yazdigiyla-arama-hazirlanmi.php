<?php
// Hafta 7 · Adım 4 · Arama Kullanıcının yazdığıyla arama: hazırlanmış sorgu
$ara = trim($_GET['ara'] ?? '');

if ($ara !== '') {
    $sorgu = $db->prepare(
        'SELECT * FROM arabalar
         WHERE marka LIKE ? OR model LIKE ?'
    );
    $sorgu->execute(["%$ara%", "%$ara%"]);
} else {
    $sorgu = $db->query('SELECT * FROM arabalar');
}
$arabalar = $sorgu->fetchAll();
?>
<form method="get">
  <input name="ara" value="<?= e($ara) ?>">
  <button>Ara</button>
</form>
