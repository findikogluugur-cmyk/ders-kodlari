<?php
// Yeni yönetici hesabı açma
require 'baglanti.php';
$baslik = 'Kayıt ol';
$mesaj = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kadi   = trim($_POST['kadi'] ?? '');
    $eposta = trim($_POST['eposta'] ?? '');
    $sifre  = $_POST['sifre'] ?? '';

    if ($kadi === '' || $eposta === '' || $sifre === '') {
        $mesaj = 'Bütün alanları doldurun.';
    } elseif (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
        $mesaj = 'Geçerli bir e-posta yazın.';
    } elseif (strlen($sifre) < 6) {
        $mesaj = 'Şifre en az 6 karakter olmalı.';
    } else {
        $var = $db->prepare('SELECT id FROM kullanicilar WHERE kadi = ?');
        $var->execute([$kadi]);
        if ($var->fetch()) {
            $mesaj = 'Bu kullanıcı adı alınmış.';
        } else {
            $ekle = $db->prepare('INSERT INTO kullanicilar (kadi, eposta, sifre) VALUES (?, ?, ?)');
            $ekle->execute([$kadi, $eposta, password_hash($sifre, PASSWORD_DEFAULT)]);
            header('Location: giris.php?yeni=1');
            exit;
        }
    }
}
require 'ust.php';
?>
<h1>Kayıt ol</h1>
<?php if ($mesaj): ?><div class="alert alert-danger"><?= e($mesaj) ?></div><?php endif; ?>
<form method="post" class="col-md-5">
  <input class="form-control mb-2" name="kadi" placeholder="Kullanıcı adı" value="<?= e($_POST['kadi'] ?? '') ?>">
  <input class="form-control mb-2" name="eposta" type="email" placeholder="E-posta" value="<?= e($_POST['eposta'] ?? '') ?>">
  <input class="form-control mb-2" name="sifre" type="password" placeholder="Şifre (en az 6 karakter)">
  <button class="btn btn-primary">Kayıt ol</button>
</form>
<?php require 'alt.php'; ?>
