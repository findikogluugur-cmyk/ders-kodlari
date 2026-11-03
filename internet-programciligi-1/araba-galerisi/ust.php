<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($baslik ?? 'Araba Galerisi') ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">🚗 Araba Galerisi</a>
    <div>
      <?php if (isset($_SESSION['kullanici_id'])): ?>
        <span class="text-white me-2">Merhaba, <?= e($_SESSION['kadi']) ?></span>
        <a class="btn btn-sm btn-outline-light" href="yonetim.php">Yönetim</a>
        <a class="btn btn-sm btn-outline-warning" href="cikis.php">Çıkış</a>
      <?php else: ?>
        <a class="btn btn-sm btn-outline-light" href="giris.php">Giriş</a>
        <a class="btn btn-sm btn-light" href="kayit.php">Kayıt ol</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
<main class="container">
