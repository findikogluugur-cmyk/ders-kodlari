<?php
// Hafta 7 · Canlı deneme Sınıfın not analizi
$notlar = [72, 45, 88, 91, 60, 38, 77];

$toplam = 0;
$max = $notlar[0];
foreach ($notlar as $not) {
    $toplam += $not;
    if ($not > $max) $max = $not;
}

$ort = $toplam / count($notlar);
echo "Öğrenci sayısı: " . count($notlar) . "\n";
echo "Ortalama: " . round($ort, 1) . "\n";
echo "En yüksek: $max\n";
