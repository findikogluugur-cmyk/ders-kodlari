<?php
// Hafta 6 · Koruma ve çıkış index.php ve cikis.php
// index.php — yalnız giriş yapanlar
session_start();
if (empty($_SESSION["login"])) {
    header("Location: giris.php");
    exit;
}
?>
<p>Merhaba <?= e($_SESSION["uye"]) ?>!</p>
<a href="cikis.php">Çıkış yap</a>

<?php
// cikis.php
session_start();
$_SESSION = [];
session_destroy();
header("Location: giris.php");
exit;
