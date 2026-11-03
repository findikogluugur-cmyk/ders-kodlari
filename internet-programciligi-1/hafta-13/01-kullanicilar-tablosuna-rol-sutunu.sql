-- Hafta 13 · Roller kullanicilar tablosuna rol sütunu
ALTER TABLE kullanicilar
  ADD rol ENUM('uye','yonetici')
      NOT NULL DEFAULT 'uye';

CREATE TABLE yazilar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  baslik VARCHAR(150) NOT NULL,
  icerik TEXT NOT NULL,
  tarih DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE yorumlar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  yazi_id INT NOT NULL,
  kullanici_id INT NOT NULL,
  metin TEXT NOT NULL,
  tarih DATETIME DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (yazi_id) REFERENCES yazilar(id),
  FOREIGN KEY (kullanici_id)
    REFERENCES kullanicilar(id)
);
