<?php
// Hafta 11 · Canlı deneme Kaç karşılaştırma yaptık?
$modeller = ["Clio", "Egea", "Corolla", "Civic", "Focus", "Golf", "i20"];
$aranan = "Golf";
$karsilastirma = 0;
$bulundu = -1;

foreach ($modeller as $i => $m) {
    $karsilastirma++;
    if ($m === $aranan) {
        $bulundu = $i;
        break;
    }
}

echo $bulundu >= 0 ? "Bulundu: $bulundu. sırada\n" : "Bulunamadı\n";
echo "Karşılaştırma sayısı: $karsilastirma";
