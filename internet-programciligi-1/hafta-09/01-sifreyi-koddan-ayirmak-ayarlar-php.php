<?php
// Hafta 9 · Adım 3 · Bağlantı ayarı Şifreyi koddan ayırmak: ayarlar.php
// ayarlar.php  — GitHub'a GÖNDERİLMEZ
return [
    "host" => "localhost",
    "vt"   => "ugurf_galeri",
    "kul"  => "ugurf_galeriuser",
    "sif"  => "panelin-verdigi-sifre",
];

<?php
// baglanti.php
session_start();
$ay = require "ayarlar.php";
$db = new PDO(
  "mysql:host={$ay['host']};dbname={$ay['vt']};"
  . "charset=utf8mb4", $ay["kul"], $ay["sif"],
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
