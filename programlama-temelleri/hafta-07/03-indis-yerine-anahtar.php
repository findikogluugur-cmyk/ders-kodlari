<?php
// Hafta 7 · İlişkisel dizi İndis yerine anahtar
$ogrenci = [
    "ad"    => "Ayşe",
    "no"    => 2026101,
    "bolum" => "Bilgisayar Prog."
];

echo $ogrenci["ad"];

foreach ($ogrenci as $anahtar => $deger) {
    echo "$anahtar: $deger\n";
}
