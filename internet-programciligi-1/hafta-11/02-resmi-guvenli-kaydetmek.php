<?php
// Hafta 11 · PHP Resmi güvenli kaydetmek
$r = $_FILES["resim"] ?? null;
$dosya_adi = "";

if ($r && $r["error"] === UPLOAD_ERR_OK) {
    if ($r["size"] > 2 * 1024 * 1024) {
        $hatalar[] = "Resim 2 MB'tan büyük olamaz.";
    }
    $tur = mime_content_type($r["tmp_name"]);
    $uzantilar = ["image/jpeg" => "jpg",
                  "image/png"  => "png",
                  "image/webp" => "webp"];
    if (!isset($uzantilar[$tur])) {
        $hatalar[] = "Yalnız JPG, PNG, WEBP.";
    }
    if (!$hatalar) {
        $dosya_adi = bin2hex(random_bytes(8))
                   . "." . $uzantilar[$tur];
        move_uploaded_file($r["tmp_name"],
                           "uploads/" . $dosya_adi);
    }
}
