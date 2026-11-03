<?php
// Hafta 5 · Canlı deneme Denetimi deneyin
$uye_kadi   = trim("  ayse34 ");
$uye_sifre  = "12345678";
$uye_eposta = "ayse@ornek.com";
$onay       = true;

if ($uye_kadi === "" || $uye_sifre === "" || $uye_eposta === "") {
    echo "Yıldızlı alanları doldurun.";
} elseif (!$onay) {
    echo "Üyelik kurallarını kabul edin.";
} elseif (!filter_var($uye_eposta, FILTER_VALIDATE_EMAIL)) {
    echo "E-posta geçerli değil.";
} else {
    echo "Kayıt bilgileri uygun: [$uye_kadi]";
}
