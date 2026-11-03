<?php
// Hafta 10 · E-posta denetimi İki yol: elle ve hazır filtre
// Elle: @ var mı, @'ten sonra nokta var mı?
function eposta_kaba_kontrol($e) {
    $at = strpos($e, "@");
    if ($at === false || $at === 0) return false;
    return str_contains(substr($e, $at), ".");
}

// Hazır filtre (asıl kullanacağımız)
function eposta_gecerli_mi($e) {
    return filter_var($e,
        FILTER_VALIDATE_EMAIL) !== false;
}

var_dump(eposta_gecerli_mi("ayse@ornek.com"));
var_dump(eposta_gecerli_mi("ayse@"));
