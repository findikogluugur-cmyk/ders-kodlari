<?php
// Hafta 12 · Sıralama Kullanıcı seçer, biz izin verilen listeden alırız
$siralar = [
    "yeni"   => "tarih DESC",
    "eski"   => "tarih ASC",
    "baslik" => "baslik ASC",
];
$sirala = $_GET["sirala"] ?? "yeni";
$order  = $siralar[$sirala] ?? $siralar["yeni"];

$sql = "SELECT * FROM duyurular $where
        ORDER BY onemli DESC, $order";
