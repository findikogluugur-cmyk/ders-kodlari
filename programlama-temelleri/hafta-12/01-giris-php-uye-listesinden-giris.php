<?php
// Hafta 12 · Oturum giris.php: üye listesinden giriş
session_start();
require "fonksiyonlar.php";   // $uyeler dizisi burada

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kadi  = kullanici_adi_temizle($_POST["kadi"]);
    $sifre = $_POST["sifre"];
    $i = uye_bul($uyeler, $kadi);

    if ($i >= 0 && $uyeler[$i]["sifre"] === $sifre) {
        $_SESSION["kadi"] = $kadi;
        header("Location: index.php");
        exit;
    }
    $hata = "Kullanıcı adı veya şifre hatalı.";
}
