<?php
// Hafta 8 · Uygulama provası 10 dakikada bu programı tamamlayın
$notlar = [55, 82, 47, 90, 30, 68, 74, 49];

$gecen = 0;
$toplam = 0;
$min = $notlar[0];

// Döngüyü buraya yazın


echo "Geçen: $gecen\n";
echo "Ortalama: " . round($toplam / count($notlar), 1) . "\n";
echo "En düşük: $min\n";
