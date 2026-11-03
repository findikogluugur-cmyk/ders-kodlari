<?php
// Hafta 7 · Adım 1 · Veri Arabaları bir dizide tutmak
$arabalar = [
    ["marka" => "Renault", "model" => "Clio",
     "yil" => 2019, "km" => 68000, "fiyat" => 845000],
    ["marka" => "Fiat", "model" => "Egea",
     "yil" => 2021, "km" => 42000, "fiyat" => 960000],
    ["marka" => "Toyota", "model" => "Corolla",
     "yil" => 2020, "km" => 55000, "fiyat" => 1250000],
];

echo $arabalar[1]["model"];       // Egea
echo count($arabalar);             // 3
$arabalar[] = ["marka" => "Honda", "model" => "Civic",
    "yil" => 2018, "km" => 90000, "fiyat" => 780000];
