<?php
// Hafta 5 · Denetim kayit_ol.php — PHP kısmı
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $uye_kadi   = trim($_POST["uye_kadi"] ?? "");
    $uye_sifre  = trim($_POST["uye_sifre"] ?? "");
    $uye_eposta = trim($_POST["uye_eposta"] ?? "");
    $onay       = isset($_POST["onay"]);

    if ($uye_kadi === "" || $uye_sifre === ""
        || $uye_eposta === "") {
        $hata = "Yıldızlı alanları doldurun.";
    } elseif (!$onay) {
        $hata = "Üyelik kurallarını kabul edin.";
    } elseif (!filter_var($uye_eposta,
              FILTER_VALIDATE_EMAIL)) {
        $hata = "E-posta geçerli değil.";
    } else {
        $basari = "Kayıt bilgileri uygun.";
    }
}
