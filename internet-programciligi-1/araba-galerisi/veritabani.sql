-- Araba Galerisi · İnternet Programcılığı I, 7. hafta
-- phpMyAdmin → SQL sekmesine yapıştırıp "Git"e basın.

CREATE DATABASE IF NOT EXISTS galeri_db CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci;
USE galeri_db;

CREATE TABLE IF NOT EXISTS kullanicilar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  kadi VARCHAR(50) NOT NULL UNIQUE,
  eposta VARCHAR(100) NOT NULL,
  sifre VARCHAR(255) NOT NULL          -- password_hash() çıktısı, düz şifre DEĞİL
);

CREATE TABLE IF NOT EXISTS arabalar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  marka VARCHAR(50) NOT NULL,
  model VARCHAR(50) NOT NULL,
  yil SMALLINT NOT NULL,
  km INT NOT NULL DEFAULT 0,
  yakit VARCHAR(20) NOT NULL,          -- Benzin, Dizel, LPG, Hibrit, Elektrik
  fiyat DECIMAL(12,2) NOT NULL,
  resim VARCHAR(255) DEFAULT '',       -- resim adresi (https://...)
  aciklama TEXT,
  eklenme DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Örnek arabalar. Dosyayı ikinci kez çalıştırırsanız bu üç araba bir daha eklenir.
INSERT INTO arabalar (marka, model, yil, km, yakit, fiyat, resim, aciklama) VALUES
('Renault', 'Clio', 2019, 68000, 'Benzin', 845000, '', 'Bursa plakalı, bakımları yetkili serviste yapıldı.'),
('Fiat', 'Egea', 2021, 42000, 'Dizel', 960000, '', 'Tek sahibinden, boyasız.'),
('Toyota', 'Corolla', 2020, 55000, 'Hibrit', 1250000, '', 'Şehir içinde düşük yakıt tüketimi.');
