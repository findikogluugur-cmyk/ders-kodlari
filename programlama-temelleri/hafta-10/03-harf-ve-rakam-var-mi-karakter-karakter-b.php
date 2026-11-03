<?php
// Hafta 10 · Şifre kuralı Harf ve rakam var mı? Karakter karakter bakmak
function sifre_guclu_mu($sifre) {
    if (mb_strlen($sifre) < 8) return false;
    $harf = false;
    $rakam = false;
    for ($i = 0; $i < strlen($sifre); $i++) {
        $c = $sifre[$i];
        if (ctype_digit($c)) $rakam = true;
        if (ctype_alpha($c)) $harf = true;
    }
    return $harf && $rakam;
}

var_dump(sifre_guclu_mu("gizli2026"));
var_dump(sifre_guclu_mu("gizlisifre"));
