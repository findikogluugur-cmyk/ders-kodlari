<?php
// Hafta 10 · JOIN Kitabı yazarının adıyla birlikte getirmek
$sql = "SELECT k.id, k.baslik, k.yil,
               y.ad AS yazar
        FROM kitaplar k
        JOIN yazarlar y ON y.id = k.yazar_id
        ORDER BY k.baslik";
$kitaplar = $db->query($sql)->fetchAll();
?>
<?php foreach ($kitaplar as $k): ?>
  <tr>
    <td><?= e($k["baslik"]) ?></td>
    <td><?= e($k["yazar"]) ?></td>
    <td><?= e($k["yil"]) ?></td>
  </tr>
<?php endforeach; ?>
