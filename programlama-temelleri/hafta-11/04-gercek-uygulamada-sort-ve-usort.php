<?php
// Hafta 11 · Hazır fonksiyonlar Gerçek uygulamada: sort ve usort
$modeller = ["Egea", "Clio", "Corolla"];
sort($modeller);       // a → z
rsort($modeller);      // z → a

// Arabaları fiyata göre (ucuzdan pahalıya)
usort($arabalar, fn($a, $b) =>
      $a["fiyat"] <=> $b["fiyat"]);

// Markaya göre alfabetik
usort($arabalar, fn($a, $b) =>
      strcmp($a["marka"], $b["marka"]));
