<?php
// Hafta 3 · if / elseif / else Saate göre karşılama
$saat = (int)date("H");

if ($saat < 12) {
    $mesaj = "Günaydın";
} elseif ($saat < 18) {
    $mesaj = "İyi günler";
} else {
    $mesaj = "İyi akşamlar";
}
echo "$mesaj, hoş geldiniz!";
