-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 03 Ara 2022, 18:59:14
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hit-takip`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makaleler`
--

CREATE TABLE `makaleler` (
  `id` int(10) UNSIGNED NOT NULL,
  `makale_baslik` varchar(250) NOT NULL,
  `makale_icerik` text NOT NULL,
  `gosterim_sayisi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `makaleler`
--

INSERT INTO `makaleler` (`id`, `makale_baslik`, `makale_icerik`, `gosterim_sayisi`) VALUES
(1, 'Çürük dişin taşıdığı inanılmaz risk! Hayati önemi var', 'Çürük diş ağız sağlığını kötü etkilemesinin yanında kalp sağlığını da etkileyebiliyor. Çürük dişlerin kalp sağlığına olan etkileri oldukça fazladır. Diş sağlığı genel anlamda herkes için önemli olmakla birlikte özellikle doğumsal kalp hastalığı olan çocuklarda ve kalp kapak rahatsızlığı olan erişkinlerde çok daha büyük önem kazanmaktadır.\r\n', 3),
(2, 'Yeni asgari ücret ne kadar olacak? TİSK Yönetim Kurulu Başkanı Akkol\'dan kritik açıklama \'Biz yine elimizi taşın altına koyacağız\'', '2023 yılı yeni asgari ücretin ne kadar olacağı merak konusu olmaya devam ediyor. Türkiye İşveren Sendikaları Konfederasyonu (TİSK) ve Türkiye Metal Sanayicileri Sendikası (MESS) Yönetim Kurulu Başkanı Özgür Burak Akkol, yeni yılda geçerli olacak asgari ücret rakamıyla ilgili, \"Biz yine elimizi taşın altına koyacağız. İşçilerimizin, işçi sendikalarımızın memnun olmadığı bir durumu arzu etmiyoruz. Bununla birlikte işverenlerin ağır maliyetler altında ezildiği bir durumu da istemiyoruz.\" dedi.', 30),
(3, 'SON DAKİKA | Milyonlar ilk kez alacak! Şimdi de Şubat heyecanı sardı: En düşük EYT emekli maaşı...\r\n', 'EYT\'lilerin aylık hesaplamalarında 1999 yılı öncesi 1999-2008 yılları arası ve 2008\'den sonraki dönem olmak üzere 3 ayrı hesaplama söz konusu olacak. 3 ayrı dönem için hesap yapılıp birleştirilecek.\r\n\r\nBöylelikle EYT\'lilerin emekli maaşı hesaplamasında tüm kazançları dikkate alınmış olacak.\r\n\r\n', 1),
(4, 'ABD\'de işsizlik maaşı başvuruları geriledi', 'ABD\'de ilk kez işsizlik maaşı başvurusunda bulunanların sayısı, 12 Kasım ile biten haftada beklentiler paralelinde 222 bine geriledi. Ülkede işsizlik maaşı başvurusunda bulunanların sayısı geçen hafta 4 bin kişi azaldı', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `makaleler`
--
ALTER TABLE `makaleler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `makaleler`
--
ALTER TABLE `makaleler`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
