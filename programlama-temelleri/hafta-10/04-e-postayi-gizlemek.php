<?php
// Hafta 10 · Canlı deneme E-postayı gizlemek
function maskele($eposta) {
    $at = strpos($eposta, "@");
    $ad = substr($eposta, 0, $at);
    $alan = substr($eposta, $at);
    $gorunen = substr($ad, 0, 2);
    return $gorunen . str_repeat("*", strlen($ad) - 2) . $alan;
}

echo maskele("ayseyilmaz@ornek.com") . "\n";
echo maskele("mehmet@mail.com");
