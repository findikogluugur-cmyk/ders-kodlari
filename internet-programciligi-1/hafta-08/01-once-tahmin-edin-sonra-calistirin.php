<?php
// Hafta 8 · Kod okuma Önce tahmin edin, sonra çalıştırın
$uyeler = [
    ["kadi" => "ayse",   "puan" => 82],
    ["kadi" => "mehmet", "puan" => 45],
    ["kadi" => "zeynep", "puan" => 67],
];
$gecen = 0;
foreach ($uyeler as $u) {
    if ($u["puan"] >= 50) {
        $gecen++;
        echo $u["kadi"] . " geçti\n";
    } else {
        echo $u["kadi"] . " kaldı\n";
    }
}
echo "Geçen: $gecen / " . count($uyeler);
