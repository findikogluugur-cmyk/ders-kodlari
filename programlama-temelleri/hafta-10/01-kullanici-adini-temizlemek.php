<?php
// Hafta 10 · Canlı deneme Kullanıcı adını temizlemek
function kullanici_adi_temizle($kadi) {
    $kadi = trim($kadi);
    $kadi = mb_strtolower($kadi);
    return $kadi;
}

$girilen = "   AyŞe34  ";
$temiz = kullanici_adi_temizle($girilen);

echo "Girilen: [$girilen]\n";
echo "Temiz:   [$temiz]\n";
echo "Uzunluk: " . mb_strlen($temiz) . " karakter";
