<?php
// Hafta 2 · HTML içinde PHP Değişkenleri sayfada göstermek
$uye_kadi = "ayse34";
$uye_eposta = "ayse@ornek.com";
$kayit_tarihi = date("d.m.Y");
?>
<div class="kart">
  <h2><?= $uye_kadi ?></h2>
  <p>E-posta: <?= $uye_eposta ?></p>
  <p>Kayıt: <?= $kayit_tarihi ?></p>
</div>
