-- Hafta 10 · Veritabanı kutuphane.sql
CREATE TABLE yazarlar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ad VARCHAR(100) NOT NULL
);

CREATE TABLE kitaplar (
  id INT AUTO_INCREMENT PRIMARY KEY,
  baslik VARCHAR(150) NOT NULL,
  yil SMALLINT,
  yazar_id INT NOT NULL,
  FOREIGN KEY (yazar_id) REFERENCES yazarlar(id)
);

INSERT INTO yazarlar (ad) VALUES
 ('Sabahattin Ali'), ('Orhan Pamuk');
INSERT INTO kitaplar (baslik, yil, yazar_id) VALUES
 ('Kürk Mantolu Madonna', 1943, 1),
 ('Masumiyet Müzesi', 2008, 2);
