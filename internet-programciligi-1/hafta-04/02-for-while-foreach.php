<?php
// Hafta 4 · Döngüler for, while, foreach
for ($i = 1; $i <= 3; $i++) {
    echo "$i. satır\n";
}

$sayac = 3;
while ($sayac > 0) {
    echo "$sayac...\n";
    $sayac--;
}

foreach ($markalar as $marka) {
    echo "- $marka\n";
}
