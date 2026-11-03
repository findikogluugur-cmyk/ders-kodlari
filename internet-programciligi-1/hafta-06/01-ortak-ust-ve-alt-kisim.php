<?php
// Hafta 6 · include ve require Ortak üst ve alt kısım
// ust.php
?>
<!DOCTYPE html>
<html lang="tr"><head>
  <meta charset="UTF-8">
  <title><?= $baslik ?? "Üyelik" ?></title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head><body><div class="container">

<?php
// herhangi bir sayfa
$baslik = "Üye Listesi";
require "ust.php";
?>
  <h4>Üye Listesi</h4>
<?php require "alt.php"; ?>
