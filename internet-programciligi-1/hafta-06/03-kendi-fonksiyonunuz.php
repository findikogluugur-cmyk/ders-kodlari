<?php
// Hafta 6 · Canlı deneme Kendi fonksiyonunuz
function kdv_ekle($fiyat, $oran = 0.20) {
    return $fiyat * (1 + $oran);
}

function para($tutar) {
    return number_format($tutar, 2, ",", ".") . " TL";
}

echo para(kdv_ekle(1000)) . "\n";
echo para(kdv_ekle(1000, 0.10)) . "\n";
