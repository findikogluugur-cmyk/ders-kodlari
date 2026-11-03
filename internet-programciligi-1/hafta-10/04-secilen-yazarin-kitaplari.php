<?php
// Hafta 10 · Filtre Seçilen yazarın kitapları
// kitaplar.php?yazar=2
$yazar = (int)($_GET["yazar"] ?? 0);

if ($yazar > 0) {
    $s = $db->prepare("SELECT k.*, y.ad AS yazar
          FROM kitaplar k
          JOIN yazarlar y ON y.id = k.yazar_id
          WHERE k.yazar_id = ?");
    $s->execute([$yazar]);
} else {
    $s = $db->query("SELECT k.*, y.ad AS yazar
          FROM kitaplar k
          JOIN yazarlar y ON y.id = k.yazar_id");
}
$kitaplar = $s->fetchAll();
