<?php
// Hafta 9 · kayit.php Formdan gelen bilgiyi fonksiyonla denetlemek
require "fonksiyonlar.php";
$hatalar = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $kadi  = trim($_POST["kadi"] ?? "");
    $sifre = $_POST["sifre"] ?? "";
    $hatalar = kayit_hatalari($kadi, $sifre);
    if (!$hatalar) {
        echo "<p>Hoş geldin, " .
             htmlspecialchars($kadi) . "!</p>";
    }
}
foreach ($hatalar as $h) {
    echo "<p style='color:red'>$h</p>";
}
?>
<form method="post">
  <input name="kadi" placeholder="Kullanıcı adı">
  <input name="sifre" type="password">
  <button>Kayıt ol</button>
</form>
