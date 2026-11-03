<?php
// Hafta 2 · Canlı deneme Fiyat hesaplayıcı
$urun  = "Klavye";
$fiyat = 850;
$adet  = 2;
$kdv   = 0.20;

$ara_toplam = $fiyat * $adet;
$toplam     = $ara_toplam * (1 + $kdv);

echo "$adet adet $urun\n";
echo "Ara toplam: $ara_toplam TL\n";
echo "KDV dahil: " . number_format($toplam, 2, ",", ".") . " TL";
