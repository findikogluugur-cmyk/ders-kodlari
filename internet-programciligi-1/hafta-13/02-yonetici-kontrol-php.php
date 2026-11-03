<?php
// Hafta 13 · Yetki yonetici_kontrol.php
require_once "giris_kontrol.php";

if (($_SESSION["rol"] ?? "") !== "yonetici") {
    http_response_code(403);
    exit("Bu sayfa yalnız yöneticiler içindir.");
}

// yorum_sil.php — kendi yorumu ya da yönetici
$s = $db->prepare("SELECT kullanici_id
                   FROM yorumlar WHERE id = ?");
$s->execute([$id]);
$sahip = $s->fetchColumn();
$izin = $sahip == $_SESSION["kullanici_id"]
     || $_SESSION["rol"] === "yonetici";
