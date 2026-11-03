<?php
// Hafta 2 · Metinleri birleştirmek Nokta ve çift tırnak
$ad = "Ayşe";

echo "Merhaba " . $ad . "!";   // birleştirme
echo "Merhaba $ad!";            // çift tırnak içinde
echo 'Merhaba $ad!';     // olduğu gibi

echo strtoupper($ad);    // Türkçede dikkat!
echo strlen("ayse34");         // 6
echo trim("  ayse34  ");       // boşluklar silinir
