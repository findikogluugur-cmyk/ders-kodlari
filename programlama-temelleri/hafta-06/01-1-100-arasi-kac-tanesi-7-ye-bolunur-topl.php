<?php
// Hafta 6 · Canlı deneme 1-100 arası: kaç tanesi 7'ye bölünür, toplamı ne?
$adet = 0;
$toplam = 0;

for ($n = 1; $n <= 100; $n++) {
    if ($n % 7 == 0) {
        $adet++;
        $toplam += $n;
    }
}

echo "7'ye bölünen sayı adedi: $adet\n";
echo "Toplamları: $toplam\n";
