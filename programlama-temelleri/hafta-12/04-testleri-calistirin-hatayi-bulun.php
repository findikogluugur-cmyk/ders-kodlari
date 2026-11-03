<?php
// Hafta 12 · Canlı deneme Testleri çalıştırın, hatayı bulun
function sifre_gecerli_mi($s) {
    return strlen($s) > 6;
}
function indirimli_fiyat($fiyat, $yuzde) {
    return $fiyat - $fiyat * $yuzde / 100;
}
function test($ad, $sonuc) {
    echo ($sonuc ? "✓ " : "✗ ") . $ad . "\n";
}

test("5 karakter reddedilir", sifre_gecerli_mi("12345") === false);
test("6 karakter kabul edilir", sifre_gecerli_mi("123456") === true);
test("%10 indirim", indirimli_fiyat(1000, 10) == 900);
test("indirimsiz", indirimli_fiyat(1000, 0) == 1000);
