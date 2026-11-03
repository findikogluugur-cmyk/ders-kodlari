<?php
// Hafta 7 · Adım 2 · baglanti.php PDO ile bağlanmak
session_start();

try {
    $db = new PDO(
        "mysql:host=localhost;dbname=galeri_db;"
        . "charset=utf8mb4",
        "root", "",   // XAMPP varsayılanı
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE =>
             PDO::FETCH_ASSOC]
    );
} catch (PDOException $e) {
    die("Veritabanına bağlanılamadı. MySQL açık mı?");
}

function e($metin) {
    return htmlspecialchars((string)$metin,
                            ENT_QUOTES, "UTF-8");
}
