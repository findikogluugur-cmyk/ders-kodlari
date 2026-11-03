<?php
// Formdan gelen araba bilgisini temizler ve denetler. Hata varsa $hatalar dolar.
function arac_al_ve_dogrula(array $p, array &$hatalar) {
    $a = [
        'marka'    => trim($p['marka'] ?? ''),
        'model'    => trim($p['model'] ?? ''),
        'yil'      => (int)($p['yil'] ?? 0),
        'km'       => (int)($p['km'] ?? 0),
        'yakit'    => $p['yakit'] ?? '',
        'fiyat'    => (float)($p['fiyat'] ?? 0),
        'resim'    => trim($p['resim'] ?? ''),
        'aciklama' => trim($p['aciklama'] ?? ''),
    ];
    if ($a['marka'] === '' || $a['model'] === '') $hatalar[] = 'Marka ve model boş olamaz.';
    if ($a['yil'] < 1950 || $a['yil'] > (int)date('Y') + 1) $hatalar[] = 'Yıl 1950 ile ' . ((int)date('Y') + 1) . ' arasında olmalı.';
    if ($a['km'] < 0) $hatalar[] = 'Kilometre eksi olamaz.';
    if ($a['fiyat'] <= 0) $hatalar[] = 'Fiyat sıfırdan büyük olmalı.';
    if (!in_array($a['yakit'], ['Benzin', 'Dizel', 'LPG', 'Hibrit', 'Elektrik'], true)) $hatalar[] = 'Yakıt türünü listeden seçin.';
    if ($a['resim'] !== '' && (!filter_var($a['resim'], FILTER_VALIDATE_URL) || !preg_match('#^https?://#i', $a['resim']))) {
        $hatalar[] = 'Resim adresi http:// ya da https:// ile başlamalı.';
    }
    return $a;
}
