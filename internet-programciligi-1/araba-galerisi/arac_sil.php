<?php
// Yalnız POST ile silinir. Tarayıcıda arac_sil.php?id=3 açmak hiçbir şey silmez.
require 'giris_kontrol.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sil = $db->prepare('DELETE FROM arabalar WHERE id = ?');
    $sil->execute([(int)($_POST['id'] ?? 0)]);
}
header('Location: yonetim.php');
exit;
