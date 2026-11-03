<?php
// Hafta 7 · Adım 6 · giris_kontrol.php Yönetim sayfalarını korumak
// Yönetim sayfalarının ilk satırı:
//   require 'giris_kontrol.php';

require_once 'baglanti.php';

if (!isset($_SESSION['kullanici_id'])) {
    header('Location: giris.php');
    exit;
}
