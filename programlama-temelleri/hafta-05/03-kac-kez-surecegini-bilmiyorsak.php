<?php
// Hafta 5 · while döngüsü Kaç kez süreceğini bilmiyorsak
$bakiye = 1000;
$ay = 0;

while ($bakiye < 2000) {
    $bakiye = $bakiye * 1.05;
    $ay++;
}
echo "$ay ayda ikiye katlandı.";
