<?php
// Hafta 3 · Mantıksal operatörler Birden çok koşul
$kadi  = "ayse34";
$sifre = "123";
$onay  = false;

if ($kadi === "" || $sifre === "") {
    echo "Alanlar boş bırakılamaz.";
} elseif (!$onay) {
    echo "Üyelik kurallarını kabul edin.";
} elseif (strlen($sifre) < 6) {
    echo "Şifre en az 6 karakter olmalı.";
} else {
    echo "Kayıt tamam!";
}
