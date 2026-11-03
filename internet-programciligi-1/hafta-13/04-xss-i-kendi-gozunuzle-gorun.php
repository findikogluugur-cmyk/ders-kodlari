<?php
// Hafta 13 · Canlı deneme XSS'i kendi gözünüzle görün
$yorum = "Harika yazı! <script>alert('hack')</script>";

echo "Kaçırılmış:\n";
echo htmlspecialchars($yorum, ENT_QUOTES, "UTF-8");

echo "\n\nUzunluk: " . strlen($yorum) . " karakter";
