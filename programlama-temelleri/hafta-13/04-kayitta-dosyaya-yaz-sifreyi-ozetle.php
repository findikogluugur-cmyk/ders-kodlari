<?php
// Hafta 13 · Üyeler ve şifre Kayıtta dosyaya yaz, şifreyi özetle
// kayit.php — denetimden geçtiyse
$uyeler = uyeleri_oku();          // uyeler.json
if (uye_bul($uyeler, $kadi) >= 0) {
    $hatalar[] = "Bu kullanıcı adı alınmış.";
} else {
    $uyeler[] = [
        "kadi"   => $kadi,
        "eposta" => $eposta,
        "sifre"  => password_hash($sifre,
                                  PASSWORD_DEFAULT),
    ];
    uyeleri_yaz($uyeler);
}

// giris.php
$i = uye_bul($uyeler, $kadi);
if ($i >= 0 && password_verify($sifre,
                 $uyeler[$i]["sifre"])) { /* giriş */ }
