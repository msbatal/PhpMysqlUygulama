SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE `ogrenciler` (
  `id` int(11) int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tckimlik` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;