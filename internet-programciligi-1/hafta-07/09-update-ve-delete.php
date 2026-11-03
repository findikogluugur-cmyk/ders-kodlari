<?php
// Hafta 7 · Adım 8 · Düzenle ve sil Update ve Delete
// arac_duzenle.php?id=3
require 'giris_kontrol.php';
require 'arac_dogrula.php';
$hatalar = [];

$id = (int)($_GET['id'] ?? 0);
$sorgu = $db->prepare('SELECT * FROM arabalar WHERE id = ?');
$sorgu->execute([$id]);
$a = $sorgu->fetch();   // eski değerler forma gelir

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = arac_al_ve_dogrula($_POST, $hatalar);
    if (!$hatalar) {
        $g = $db->prepare('UPDATE arabalar SET
            marka = ?, model = ?, yil = ?, km = ?, yakit = ?,
            fiyat = ?, resim = ?, aciklama = ? WHERE id = ?');
        $g->execute([$a['marka'], $a['model'], $a['yil'],
            $a['km'], $a['yakit'], $a['fiyat'], $a['resim'],
            $a['aciklama'], $id]);
        header('Location: yonetim.php');
        exit;
    }
}
