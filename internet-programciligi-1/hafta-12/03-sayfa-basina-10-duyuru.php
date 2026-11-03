<?php
// Hafta 12 · Sayfalama Sayfa başına 10 duyuru
$sayfa_basi = 10;
$sayfa = max(1, (int)($_GET["sayfa"] ?? 1));

$say = $db->prepare("SELECT COUNT(*)
        FROM duyurular $where");
$say->execute($degerler);
$toplam = (int)$say->fetchColumn();
$sayfa_sayisi = max(1, ceil($toplam / $sayfa_basi));

$atla = ($sayfa - 1) * $sayfa_basi;
$s = $db->prepare("$sql LIMIT $sayfa_basi
                   OFFSET $atla");
$s->execute($degerler);
$duyurular = $s->fetchAll();
