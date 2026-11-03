<?php
// Yönetim sayfalarının en başında: require 'giris_kontrol.php';
require_once 'baglanti.php';
if (!isset($_SESSION['kullanici_id'])) {
    header('Location: giris.php');
    exit;   // exit olmazsa sayfanın geri kalanı yine çalışır!
}
