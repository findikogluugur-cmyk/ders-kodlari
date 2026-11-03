<?php
// Hafta 7 · Diziyi gezmek foreach ile her elemana uğramak
$sehirler = ["Bursa", "İzmir", "Ankara"];

$sehirler[] = "Trabzon";   // sona ekle

foreach ($sehirler as $sehir) {
    echo $sehir . "\n";
}

echo "Toplam: " . count($sehirler);
