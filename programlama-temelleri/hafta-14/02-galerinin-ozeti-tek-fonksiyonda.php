<?php
// Hafta 14 · Son deneme Galerinin özeti tek fonksiyonda
function galeri_ozeti($arabalar) {
    if (count($arabalar) === 0) return "Galeri boş.";
    $toplam = 0;
    $en_ucuz = $arabalar[0];
    foreach ($arabalar as $a) {
        $toplam += $a["fiyat"];
        if ($a["fiyat"] < $en_ucuz["fiyat"]) $en_ucuz = $a;
    }
    $ort = number_format($toplam / count($arabalar), 0, ",", ".");
    return count($arabalar) . " araba, ortalama $ort TL, en ucuz: " . $en_ucuz["model"];
}

$json = '[{"model":"Clio","yil":2019,"fiyat":845000},{"model":"Egea","yil":2021,"fiyat":960000},{"model":"Corolla","yil":2020,"fiyat":1250000}]';
echo galeri_ozeti(json_decode($json, true));
