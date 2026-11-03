<?php
require 'giris_kontrol.php';
require 'arac_dogrula.php';
$baslik = 'Yeni araba';
$hatalar = [];
$a = ['marka' => '', 'model' => '', 'yil' => '', 'km' => '', 'yakit' => 'Benzin', 'fiyat' => '', 'resim' => '', 'aciklama' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = arac_al_ve_dogrula($_POST, $hatalar);
    if (!$hatalar) {
        $ekle = $db->prepare('INSERT INTO arabalar (marka, model, yil, km, yakit, fiyat, resim, aciklama)
                              VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        $ekle->execute([$a['marka'], $a['model'], $a['yil'], $a['km'], $a['yakit'], $a['fiyat'], $a['resim'], $a['aciklama']]);
        header('Location: yonetim.php');
        exit;
    }
}
require 'ust.php';
?>
<h1>Yeni araba</h1>
<?php foreach ($hatalar as $h): ?><div class="alert alert-danger py-1"><?= e($h) ?></div><?php endforeach; ?>
<?php require 'arac_form.php'; ?>
<?php require 'alt.php'; ?>
