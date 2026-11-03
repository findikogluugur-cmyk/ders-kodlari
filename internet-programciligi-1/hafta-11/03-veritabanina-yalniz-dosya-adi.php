<?php
// Hafta 11 · Kaydet ve göster Veritabanına yalnız dosya adı
$ekle = $db->prepare("INSERT INTO ilanlar
   (baslik, sehir, oda, m2, fiyat, resim)
   VALUES (?, ?, ?, ?, ?, ?)");
$ekle->execute([$baslik, $sehir, $oda,
                $m2, $fiyat, $dosya_adi]);
?>

<!-- Vitrinde -->
<?php if ($i["resim"]): ?>
  <img class="card-img-top"
       src="uploads/<?= e($i['resim']) ?>"
       alt="<?= e($i['baslik']) ?>">
<?php endif; ?>
