<?php
// Hafta 12 · Araçlar Değişkenin içini görmek ve küçük testler
var_dump($kadi);          // tipi ve değeri
print_r($arabalar);       // dizinin içi
echo "<pre>"; print_r($_POST); echo "</pre>";

// Küçük testler: beklenen = gerçek mi?
function test($ad, $sonuc) {
    echo ($sonuc ? "✓ " : "✗ ") . $ad . "\n";
}
test("kısa şifre reddedilir",
     sifre_gecerli_mi("123") === false);
test("6 karakter kabul edilir",
     sifre_gecerli_mi("123456") === true);
test("olmayan araba -1",
     araba_bul($arabalar, "Yok") === -1);
