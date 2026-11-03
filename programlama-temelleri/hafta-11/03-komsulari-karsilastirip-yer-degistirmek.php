<?php
// Hafta 11 · Kabarcık sıralama Komşuları karşılaştırıp yer değiştirmek
function kabarcik_sirala($fiyatlar) {
    $n = count($fiyatlar);
    for ($tur = 0; $tur < $n - 1; $tur++) {
        for ($i = 0; $i < $n - 1 - $tur; $i++) {
            if ($fiyatlar[$i] > $fiyatlar[$i + 1]) {
                $gecici = $fiyatlar[$i];
                $fiyatlar[$i] = $fiyatlar[$i + 1];
                $fiyatlar[$i + 1] = $gecici;
            }
        }
    }
    return $fiyatlar;
}
print_r(kabarcik_sirala([960, 845, 1250, 780]));
