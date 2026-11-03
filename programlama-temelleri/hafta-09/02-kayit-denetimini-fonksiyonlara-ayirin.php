<?php
// Hafta 9 · Canlı deneme Kayıt denetimini fonksiyonlara ayırın
function bos_mu($metin) {
    return trim($metin) === "";
}

function kullanici_adi_gecerli_mi($kadi) {
    return strlen($kadi) >= 3 && !str_contains($kadi, " ");
}

function sifre_gecerli_mi($sifre) {
    return strlen($sifre) >= 6;
}

$kadi  = "ayse34";
$sifre = "gizli12";

if (bos_mu($kadi) || bos_mu($sifre)) {
    echo "Alanlar boş bırakılamaz.";
} elseif (!kullanici_adi_gecerli_mi($kadi)) {
    echo "Kullanıcı adı en az 3 karakter olmalı ve boşluk içermemeli.";
} elseif (!sifre_gecerli_mi($sifre)) {
    echo "Şifre en az 6 karakter olmalı.";
} else {
    echo "Kayıt bilgileri uygun: $kadi";
}
