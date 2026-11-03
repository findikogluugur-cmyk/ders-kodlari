<?php
// Hafta 9 · Birden çok hata Hataları bir dizide toplayan fonksiyon
function kayit_hatalari($kadi, $sifre) {
    $hatalar = [];
    if (strlen($kadi) < 3) {
        $hatalar[] = "Kullanıcı adı kısa.";
    }
    if (strlen($sifre) < 6) {
        $hatalar[] = "Şifre kısa.";
    }
    return $hatalar;
}

$h = kayit_hatalari("ay", "123");
if (count($h) === 0) {
    echo "Kayıt tamam";
} else {
    foreach ($h as $hata) {
        echo "- $hata\n";
    }
}
