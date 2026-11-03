<?php
// Hafta 13 · Sıralı dosya Satır satır yazmak ve okumak
// Sona bir satır ekle
file_put_contents("kayitlar.txt",
    "ayse34;ayse@ornek.com\n", FILE_APPEND);

// Bütün satırları oku
$satirlar = file("kayitlar.txt",
    FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($satirlar as $satir) {
    [$kadi, $eposta] = explode(";", $satir);
    echo "$kadi - $eposta\n";
}
