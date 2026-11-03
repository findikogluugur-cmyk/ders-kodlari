<?php
// Hafta 6 · Zip'teki giriş mantığı giris.php — veritabanısız sürüm
session_start();
// Bu hafta tek kullanıcı; 7. haftada veritabanından
$dogru_kadi  = "admin";
$dogru_sifre = "Gizli123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kadi  = trim($_POST["kullanici_adi"] ?? "");
    $sifre = $_POST["sifre"] ?? "";

    if ($kadi === $dogru_kadi
        && $sifre === $dogru_sifre) {
        $_SESSION["login"] = true;
        $_SESSION["uye"] = $kadi;
        header("Location: index.php");
        exit;
    }
    $hata = "Kullanıcı adı veya şifre hatalı.";
}
