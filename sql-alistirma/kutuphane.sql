-- Örnek veritabanı: Okul Kütüphanesi (SQL alıştırmaları için)
CREATE TABLE yazarlar (
  yazar_id INTEGER PRIMARY KEY,
  ad_soyad TEXT NOT NULL,
  ulke TEXT,
  dogum_yili INTEGER
);
CREATE TABLE kitaplar (
  kitap_id INTEGER PRIMARY KEY,
  baslik TEXT NOT NULL,
  yazar_id INTEGER REFERENCES yazarlar(yazar_id),
  tur TEXT,
  sayfa INTEGER,
  yayin_yili INTEGER,
  stok INTEGER DEFAULT 1
);
CREATE TABLE uyeler (
  uye_id INTEGER PRIMARY KEY,
  ad_soyad TEXT NOT NULL,
  bolum TEXT,
  sinif INTEGER,
  kayit_tarihi DATE
);
CREATE TABLE odunc (
  odunc_id INTEGER PRIMARY KEY,
  kitap_id INTEGER REFERENCES kitaplar(kitap_id),
  uye_id INTEGER REFERENCES uyeler(uye_id),
  alis_tarihi DATE NOT NULL,
  iade_tarihi DATE
);

INSERT INTO yazarlar VALUES
(1,'Sabahattin Ali','Türkiye',1907),
(2,'Orhan Pamuk','Türkiye',1952),
(3,'Elif Şafak','Türkiye',1971),
(4,'Yaşar Kemal','Türkiye',1923),
(5,'Oğuz Atay','Türkiye',1934),
(6,'George Orwell','İngiltere',1903),
(7,'Fyodor Dostoyevski','Rusya',1821),
(8,'Isaac Asimov','ABD',1920),
(9,'Ahmet Hamdi Tanpınar','Türkiye',1901),
(10,'Ursula K. Le Guin','ABD',1929);

INSERT INTO kitaplar VALUES
(1,'Kürk Mantolu Madonna',1,'Roman',160,1943,3),
(2,'İçimizdeki Şeytan',1,'Roman',270,1940,1),
(3,'Kar',2,'Roman',480,2002,2),
(4,'Masumiyet Müzesi',2,'Roman',590,2008,1),
(5,'Aşk',3,'Roman',420,2009,2),
(6,'İnce Memed',4,'Roman',430,1955,2),
(7,'Tutunamayanlar',5,'Roman',720,1972,1),
(8,'1984',6,'Bilim Kurgu',350,1949,4),
(9,'Hayvan Çiftliği',6,'Distopya',150,1945,3),
(10,'Suç ve Ceza',7,'Roman',700,1866,2),
(11,'Vakıf',8,'Bilim Kurgu',300,1951,2),
(12,'Ben, Robot',8,'Bilim Kurgu',250,1950,1),
(13,'Saatleri Ayarlama Enstitüsü',9,'Roman',380,1961,2),
(14,'Huzur',9,'Roman',440,1949,1),
(15,'Yerdeniz Büyücüsü',10,'Fantastik',210,1968,2);

INSERT INTO uyeler VALUES
(1,'Ayşe Yılmaz','Bilgisayar Programcılığı',1,'2026-09-22'),
(2,'Mehmet Demir','Bilgisayar Programcılığı',1,'2026-09-23'),
(3,'Zeynep Kaya','Bilgisayar Programcılığı',2,'2025-09-29'),
(4,'Can Öztürk','Elektronik Teknolojisi',1,'2026-09-24'),
(5,'Elif Şahin','Bilgisayar Programcılığı',2,'2025-10-01'),
(6,'Burak Arslan','Makine',2,'2025-09-30'),
(7,'Selin Çelik','Bilgisayar Programcılığı',1,'2026-09-25'),
(8,'Emre Koç','Elektronik Teknolojisi',2,'2025-10-02');

INSERT INTO odunc VALUES
(1,1,1,'2026-09-29','2026-10-06'),
(2,8,2,'2026-09-30',NULL),
(3,11,3,'2026-10-01','2026-10-08'),
(4,3,5,'2026-10-01',NULL),
(5,1,7,'2026-10-02','2026-10-09'),
(6,9,4,'2026-10-03',NULL),
(7,7,3,'2026-10-05',NULL),
(8,13,1,'2026-10-06','2026-10-12'),
(9,8,6,'2026-10-07',NULL),
(10,15,7,'2026-10-08',NULL),
(11,10,8,'2026-10-08','2026-10-12'),
(12,12,2,'2026-10-09',NULL);
