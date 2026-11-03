<?php
// Hafta 11 · Doğrusal arama Baştan sona tek tek bakmak
function araba_bul($arabalar, $model) {
    for ($i = 0; $i < count($arabalar); $i++) {
        if ($arabalar[$i]["model"] === $model) {
            return $i;      // bulduğu sıra
        }
    }
    return -1;              // bulamadı
}

$arabalar = [
    ["model" => "Clio",    "fiyat" => 845000],
    ["model" => "Egea",    "fiyat" => 960000],
    ["model" => "Corolla", "fiyat" => 1250000],
];
echo araba_bul($arabalar, "Egea");   // 1
