<?php
// Hafta 3 · Zip'teki üyelik sisteminden switch ile hangi sayfa açılsın?
// inc/ozellikler.php
$sayfa = trim($_GET["sayfa"] ?? "");

switch ($sayfa) {
    case "cikis-yap":
        include "cikis.php";
        break;
    case "profil":
        include "profil.php";
        break;
    default:
        include "anasayfa.php";
}
