<?php
// Hafta 12 · Koruma ve çıkış araba_ekle.php ve cikis.php
// araba_ekle.php — yalnız giriş yapanlar
session_start();
if (!isset($_SESSION["kadi"])) {
    header("Location: giris.php");
    exit;
}
echo "Merhaba " . htmlspecialchars($_SESSION["kadi"]);

<?php
// cikis.php
session_start();
$_SESSION = [];
session_destroy();
header("Location: index.php");
exit;
