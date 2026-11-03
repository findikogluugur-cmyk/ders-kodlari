<?php
// Hafta 6 · Fonksiyonlar Tekrar eden işi bir ad altında toplamak
function uyari($tur, $mesaj) {
    $m = htmlspecialchars($mesaj);
    return "<div class=\"alert alert-$tur\">$m</div>";
}

function e($metin) {
    return htmlspecialchars((string)$metin,
                            ENT_QUOTES, "UTF-8");
}

echo uyari("danger", "Şifre hatalı!");
echo uyari("success", "Giriş başarılı.");
echo "<p>" . e("<b>ayse</b>") . "</p>";
