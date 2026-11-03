<?php
// Hafta 4 · Canlı deneme Harf notu hesaplayıcı
$not = 72;

if ($not >= 85) {
    $harf = "AA";
} elseif ($not >= 70) {
    $harf = "BA";
} elseif ($not >= 50) {
    $harf = "CC";
} else {
    $harf = "FF";
}

echo "Notunuz: $not → Harf: $harf";
