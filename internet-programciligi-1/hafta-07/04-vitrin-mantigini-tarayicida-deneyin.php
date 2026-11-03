<?php
// Hafta 7 · Canlı deneme Vitrin mantığını tarayıcıda deneyin
$arabalar = [
    ["marka" => "Renault", "model" => "Clio",    "yil" => 2019, "fiyat" => 845000],
    ["marka" => "Fiat",    "model" => "Egea",    "yil" => 2021, "fiyat" => 960000],
    ["marka" => "Toyota",  "model" => "Corolla", "yil" => 2020, "fiyat" => 1250000],
];

foreach ($arabalar as $a) {
    echo $a["marka"] . " " . $a["model"] . " (" . $a["yil"] . "): ";
    echo number_format($a["fiyat"], 0, ",", ".") . " TL\n";
}
