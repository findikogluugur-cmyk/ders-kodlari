<?php
// Hafta 7 · Adım 7 · arac_ekle.php Create: formdan gelen arabayı kaydetmek
require 'giris_kontrol.php';
$hatalar = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $marka    = trim($_POST['marka'] ?? '');
    $model    = trim($_POST['model'] ?? '');
    $yil      = (int)($_POST['yil'] ?? 0);
    $km       = (int)($_POST['km'] ?? 0);
    $yakit    = $_POST['yakit'] ?? '';
    $fiyat    = (float)($_POST['fiyat'] ?? 0);
    $resim    = trim($_POST['resim'] ?? '');
    $aciklama = trim($_POST['aciklama'] ?? '');

    if ($marka === '' || $model === '')
        $hatalar[] = 'Marka ve model boş olamaz.';
    if ($yil < 1950) $hatalar[] = 'Yıl geçersiz.';
    if ($fiyat <= 0) $hatalar[] = 'Fiyat geçersiz.';

    if (!$hatalar) {
        $ekle = $db->prepare('INSERT INTO arabalar
          (marka, model, yil, km, yakit, fiyat, resim, aciklama)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $ekle->execute([$marka, $model, $yil, $km,
            $yakit, $fiyat, $resim, $aciklama]);
        header('Location: yonetim.php');
        exit;
    }
}
