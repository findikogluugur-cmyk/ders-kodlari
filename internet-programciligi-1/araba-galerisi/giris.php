<?php
require 'baglanti.php';
$baslik = 'Giriş';
$mesaj = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kadi  = trim($_POST['kadi'] ?? '');
    $sifre = $_POST['sifre'] ?? '';

    $sorgu = $db->prepare('SELECT * FROM kullanicilar WHERE kadi = ?');
    $sorgu->execute([$kadi]);
    $k = $sorgu->fetch();

    // Şifreyi SQL'de değil, password_verify ile karşılaştırırız
    if ($k && password_verify($sifre, $k['sifre'])) {
        session_regenerate_id(true);
        $_SESSION['kullanici_id'] = $k['id'];
        $_SESSION['kadi'] = $k['kadi'];
        header('Location: yonetim.php');
        exit;
    }
    $mesaj = 'Kullanıcı adı veya şifre hatalı.';
}
require 'ust.php';
?>
<h1>Giriş</h1>
<?php if (isset($_GET['yeni'])): ?><div class="alert alert-success">Kayıt tamam, şimdi giriş yapın.</div><?php endif; ?>
<?php if ($mesaj): ?><div class="alert alert-danger"><?= e($mesaj) ?></div><?php endif; ?>
<form method="post" class="col-md-5">
  <input class="form-control mb-2" name="kadi" placeholder="Kullanıcı adı">
  <input class="form-control mb-2" name="sifre" type="password" placeholder="Şifre">
  <button class="btn btn-primary">Giriş yap</button>
</form>
<?php require 'alt.php'; ?>
