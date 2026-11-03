<?php
// Hafta 4 · Canlı deneme Üye listesi
$uyeler = [
    ["uye_id" => 1, "uye_kadi" => "ayse34", "uye_eposta" => "ayse@ornek.com"],
    ["uye_id" => 2, "uye_kadi" => "mehmet16", "uye_eposta" => "mehmet@mail.com"],
    ["uye_id" => 3, "uye_kadi" => "zeynep", "uye_eposta" => "zeynep@ornek.com"],
];

foreach ($uyeler as $uye) {
    echo $uye["uye_id"] . " - " . $uye["uye_kadi"];
    echo " (" . $uye["uye_eposta"] . ")\n";
}
echo "\nToplam: " . count($uyeler) . " üye";
