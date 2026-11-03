<?php
require 'giris_kontrol.php';
require 'arac_dogrula.php';
$baslik = 'Arabayı düzenle';
$hatalar = [];

$id = (int)($_GET['id'] ?? 0);
$sorgu = $db->prepare('SELECT * FROM arabalar WHERE id = ?');
$sorgu->execute([$id]);
$a = $sorgu->fetch();
if (!$a) {
    header('Location: yonetim.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = arac_al_ve_dogrula($_POST, $hatalar);
    if (!$hatalar) {
        $guncelle = $db->prepare('UPDATE arabalar SET marka = ?, model = ?, yil = ?, km = ?, yakit = ?,
                                  fiyat = ?, resim = ?, aciklama = ? WHERE id = ?');
        $guncelle->execute([$a['marka'], $a['model'], $a['yil'], $a['km'], $a['yakit'], $a['fiyat'], $a['resim'], $a['aciklama'], $id]);
        header('Location: yonetim.php');
        exit;
    }
}
require 'ust.php';
?>
<h1>Arabayı düzenle</h1>
<?php foreach ($hatalar as $h): ?><div class="alert alert-danger py-1"><?= e($h) ?></div><?php endforeach; ?>
<?php require 'arac_form.php'; ?>
<?php require 'alt.php'; ?>
