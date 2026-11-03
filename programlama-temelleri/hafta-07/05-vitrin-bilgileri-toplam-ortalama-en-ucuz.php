<?php
// Hafta 7 · Adım 2 · Döngüyle hesap Vitrin bilgileri: toplam, ortalama, en ucuz
$arabalar = [
    ["marka" => "Renault", "model" => "Clio",    "yil" => 2019, "fiyat" => 845000],
    ["marka" => "Fiat",    "model" => "Egea",    "yil" => 2021, "fiyat" => 960000],
    ["marka" => "Toyota",  "model" => "Corolla", "yil" => 2020, "fiyat" => 1250000],
];

$toplam = 0;
$en_ucuz = $arabalar[0];
foreach ($arabalar as $a) {
    echo $a["marka"] . " " . $a["model"] . " (" . $a["yil"] . "): " . number_format($a["fiyat"], 0, ",", ".") . " TL\n";
    $toplam += $a["fiyat"];
    if ($a["fiyat"] < $en_ucuz["fiyat"]) {
        $en_ucuz = $a;
    }
}
$ortalama = $toplam / count($arabalar);
echo "\nOrtalama fiyat: " . number_format($ortalama, 0, ",", ".") . " TL\n";
echo "En ucuz: " . $en_ucuz["marka"] . " " . $en_ucuz["model"];
