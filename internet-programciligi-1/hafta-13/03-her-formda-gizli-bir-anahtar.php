<?php
// Hafta 13 · CSRF Her formda gizli bir anahtar
// baglanti.php içine
if (empty($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(random_bytes(16));
}
function token_alani() {
    return '<input type="hidden" name="token" value="'
         . $_SESSION["token"] . '">';
}
function token_kontrol() {
    if (!hash_equals($_SESSION["token"],
                     $_POST["token"] ?? "")) {
        exit("Geçersiz istek.");
    }
}
?>
<form method="post">
  <?= token_alani() ?>
  <textarea name="metin"></textarea>
</form>
