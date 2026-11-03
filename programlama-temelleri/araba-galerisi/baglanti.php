<?php
// Veritabanı bağlantısı. Her sayfanın en başında: require 'baglanti.php';
session_start();

$host = 'localhost';
$vt   = 'galeri_db';
$kul  = 'root';   // XAMPP'ın varsayılan kullanıcısı
$sif  = '';       // XAMPP'ta varsayılan şifre boş. Gerçek sunucuda şifreyi ASLA paylaşmayın.

try {
    $db = new PDO("mysql:host=$host;dbname=$vt;charset=utf8mb4", $kul, $sif, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Veritabanına bağlanılamadı. XAMPP\'ta MySQL açık mı?');
}

// Kısa yardımcı: ekrana güvenli yazmak için
function e($metin) {
    return htmlspecialchars((string)$metin, ENT_QUOTES, 'UTF-8');
}
