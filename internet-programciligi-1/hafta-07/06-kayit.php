<?php
// Hafta 7 · Adım 5 · kayit.php ve giris.php Şifre saklamanın doğru yolu
// KAYIT
$ekle = $db->prepare(
  'INSERT INTO kullanicilar (kadi, eposta, sifre)
   VALUES (?, ?, ?)'
);
$ozet = password_hash($sifre, PASSWORD_DEFAULT);
$ekle->execute([$kadi, $eposta, $ozet]);

// GİRİŞ
$sorgu = $db->prepare(
  'SELECT * FROM kullanicilar WHERE kadi = ?');
$sorgu->execute([$kadi]);
$k = $sorgu->fetch();

if ($k && password_verify($sifre, $k['sifre'])) {
    session_regenerate_id(true);
    $_SESSION['kullanici_id'] = $k['id'];
    $_SESSION['kadi'] = $k['kadi'];
    header('Location: yonetim.php');
    exit;
}
$mesaj = 'Kullanıcı adı veya şifre hatalı.';
