<?php
// Hafta 13 · JSON Dizinin tamamını tek dosyada saklamak
function arabalari_oku() {
    if (!file_exists("arabalar.json")) return [];
    $metin = file_get_contents("arabalar.json");
    return json_decode($metin, true) ?? [];
}

function arabalari_yaz($arabalar) {
    $metin = json_encode($arabalar,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents("arabalar.json", $metin);
}

$arabalar = arabalari_oku();
$arabalar[] = ["marka" => "Fiat", "model" => "Egea",
               "yil" => 2021, "fiyat" => 960000];
arabalari_yaz($arabalar);
