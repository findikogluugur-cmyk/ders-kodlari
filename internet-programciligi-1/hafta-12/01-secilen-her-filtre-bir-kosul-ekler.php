<?php
// Hafta 12 · Sorguyu parça parça kurmak Seçilen her filtre bir koşul ekler
$ara      = trim($_GET["ara"] ?? "");
$kategori = $_GET["kategori"] ?? "";

$kosullar = [];
$degerler = [];

if ($ara !== "") {
    $kosullar[] = "(baslik LIKE ? OR metin LIKE ?)";
    $degerler[] = "%$ara%";
    $degerler[] = "%$ara%";
}
if ($kategori !== "") {
    $kosullar[] = "kategori = ?";
    $degerler[] = $kategori;
}
$where = $kosullar
    ? "WHERE " . implode(" AND ", $kosullar) : "";
