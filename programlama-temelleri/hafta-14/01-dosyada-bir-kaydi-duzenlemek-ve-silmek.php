<?php
// Hafta 14 · Son adım Dosyada bir kaydı düzenlemek ve silmek
// araba_sil.php — giriş korumalı, POST ile
$arabalar = arabalari_oku();
$i = (int)($_POST["sira"] ?? -1);
if (isset($arabalar[$i])) {
    array_splice($arabalar, $i, 1);    // sil
    arabalari_yaz($arabalar);
}

// araba_duzenle.php — fiyatı güncelle
$arabalar = arabalari_oku();
$i = (int)$_POST["sira"];
$arabalar[$i]["fiyat"] = (int)$_POST["fiyat"];
arabalari_yaz($arabalar);
header("Location: index.php");
exit;
