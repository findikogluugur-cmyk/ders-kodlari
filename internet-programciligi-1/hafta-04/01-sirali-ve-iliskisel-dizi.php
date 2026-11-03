<?php
// Hafta 4 · Diziler Sıralı ve ilişkisel dizi
// Sıralı dizi: 0, 1, 2 ...
$markalar = ["Renault", "Fiat", "Toyota"];
echo $markalar[0];          // Renault
echo count($markalar);      // 3
$markalar[] = "Honda";      // sona ekler

// İlişkisel dizi: anahtar => değer
$uye = [
    "uye_id"     => 7,
    "uye_kadi"   => "ayse34",
    "uye_eposta" => "ayse@ornek.com",
];
echo $uye["uye_kadi"];      // ayse34
