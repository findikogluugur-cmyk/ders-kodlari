<?php
// Hafta 13 · Canlı deneme Diziden JSON'a, JSON'dan diziye
$arabalar = [
    ["marka" => "Renault", "model" => "Clio", "yil" => 2019, "fiyat" => 845000],
    ["marka" => "Toyota",  "model" => "Corolla", "yil" => 2020, "fiyat" => 1250000],
];

$metin = json_encode($arabalar, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
echo $metin . "\n\n";

$geri = json_decode($metin, true);
echo "Araba sayısı: " . count($geri);
