<?php
// Hafta 9 · Yazım İlk fonksiyonlarımız
function sifre_gecerli_mi($sifre) {
    return strlen($sifre) >= 6;
}

function yas_hesapla($dogum_yili) {
    return date("Y") - $dogum_yili;
}

if (sifre_gecerli_mi("abc123")) {
    echo "Şifre uygun\n";
}
echo "Yaşınız: " . yas_hesapla(2007);
