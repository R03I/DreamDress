-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2019. Máj 31. 10:09
-- Kiszolgáló verziója: 5.7.24
-- PHP verzió: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `szakalla_webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `address`
--

INSERT INTO `address` (`id`, `name`, `address`, `comment`) VALUES
(1, 'Szakállas Róbert', 'Hajdúhadház Rózsa u 20.', 'Csak délutáni órákba tudom átvenni'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `aruk`
--

DROP TABLE IF EXISTS `aruk`;
CREATE TABLE IF NOT EXISTS `aruk` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `neve` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `miez` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `tipusa` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `ara` int(11) NOT NULL,
  `src_kep` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `aruk`
--

INSERT INTO `aruk` (`id`, `neve`, `miez`, `tipusa`, `ara`, `src_kep`, `description`) VALUES
(1, 'Szürke mintás póló', 'felso', 'polo', 2500, 'img/felsok/polo1.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(2, 'Sárga hosszított blúz', 'felso', 'bluz', 3000, 'img/felsok/bluz1.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(3, 'Fekete mintás póló', 'felso', 'polo', 2500, 'img/felsok/polo2.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(4, 'Kockás piros top', 'felso', 'top', 3500, 'img/felsok/top1.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(5, 'Sárga rövidített blúz', 'felso', 'bluz', 4000, 'img/felsok/bluz2.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(6, 'Hosszú ujjú fehér póló', 'felso', 'hosszu_polo', 3000, 'img/felsok/hosszu_polo1.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(7, 'Hosszú ujjú mintás póló', 'felso', 'hosszu_polo', 5000, 'img/felsok/hosszu_polo2.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(8, 'Hosszú ujjú szürke póló', 'felso', 'hosszu_polo', 3000, 'img/felsok/hosszu_polo3.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(9, 'Pedal felíratos póló', 'felso', 'polo', 4000, 'img/felsok/polo3.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(10, 'Sötét kék póló', 'felso', 'polo', 3000, 'img/felsok/polo4.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(11, 'Sárga top', 'felso', 'top', 3500, 'img/felsok/top2.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(12, 'Sárga rövid top', 'felso', 'top', 3000, 'img/felsok/top3.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(13, 'Hosszú ujjú fekete póló', 'felso', 'hosszu_polo', 4000, 'img/felsok/hosszu_polo4.jpg', 'Látványos top, mely két oldala különböző anyagból készült. Elöl puha, csúszós, hátul szép esést biztosító, viszkózos anyag. A nagy V-dekoltázs mentén gyönyörű csipke fut, mellette pedig hálós betét vonzza a tekinteteket. Laza fazonú darab, mely elöl látványos cipzárral rögzíthető.'),
(14, 'Hosszú világos farmer', 'nadrag', 'farmer', 10000, 'img/alsok/farmer.jpg', 'Látványos, a test vonalát követő farmer. A különleges oldalcsíknak köszönhetően ebben a darabban biztosan nem maradsz észrevétlen. Az integrált öv és az öbvújtatók igazán kényelmes viseletté teszik. Elöl két benyúlós, hátul két rávarrt zseb. Elöl rejtett cipzárral és gombbal rögzíthető.'),
(15, 'Hosszú fekete farmer', 'nadrag', 'farmer', 11000, 'img/alsok/farmer2.jpg', 'Látványos, a test vonalát követő farmer. A különleges oldalcsíknak köszönhetően ebben a darabban biztosan nem maradsz észrevétlen. Az integrált öv és az öbvújtatók igazán kényelmes viseletté teszik. Elöl két benyúlós, hátul két rávarrt zseb. Elöl rejtett cipzárral és gombbal rögzíthető.'),
(16, 'Hosszú lyukas farmer', 'nadrag', 'farmer', 15000, 'img/alsok/farmer3.jpg', 'Látványos, a test vonalát követő farmer. A különleges oldalcsíknak köszönhetően ebben a darabban biztosan nem maradsz észrevétlen. Az integrált öv és az öbvújtatók igazán kényelmes viseletté teszik. Elöl két benyúlós, hátul két rávarrt zseb. Elöl rejtett cipzárral és gombbal rögzíthető.'),
(17, 'Rövidített farmer', 'nadrag', 'farmer', 12000, 'img/alsok/farmer4.jpg', 'Látványos, a test vonalát követő farmer. A különleges oldalcsíknak köszönhetően ebben a darabban biztosan nem maradsz észrevétlen. Az integrált öv és az öbvújtatók igazán kényelmes viseletté teszik. Elöl két benyúlós, hátul két rávarrt zseb. Elöl rejtett cipzárral és gombbal rögzíthető.'),
(18, 'Rövid világos farmer', 'nadrag', 'rovid_farmer', 7000, 'img/alsok/rovid_nadrag1.jpg', 'Látványos, a test vonalát követő farmer. A különleges oldalcsíknak köszönhetően ebben a darabban biztosan nem maradsz észrevétlen. Az integrált öv és az öbvújtatók igazán kényelmes viseletté teszik. Elöl két benyúlós, hátul két rávarrt zseb. Elöl rejtett cipzárral és gombbal rögzíthető.'),
(19, 'Rövid fekete farmer', 'nadrag', 'rovid_farmer', 6000, 'img/alsok/rovid_nadrag2.jpg', 'Látványos, a test vonalát követő farmer. A különleges oldalcsíknak köszönhetően ebben a darabban biztosan nem maradsz észrevétlen. Az integrált öv és az öbvújtatók igazán kényelmes viseletté teszik. Elöl két benyúlós, hátul két rávarrt zseb. Elöl rejtett cipzárral és gombbal rögzíthető.'),
(20, 'Rózsa mintás szoknya', 'nadrag', 'szoknya', 11000, 'img/alsok/szoknya1.jpg', 'Látványos, a test vonalát követő farmer. A különleges oldalcsíknak köszönhetően ebben a darabban biztosan nem maradsz észrevétlen. Az integrált öv és az öbvújtatók igazán kényelmes viseletté teszik. Elöl két benyúlós, hátul két rávarrt zseb. Elöl rejtett cipzárral és gombbal rögzíthető.'),
(21, 'Virág mintás szoknya', 'nadrag', 'szoknya', 9500, 'img/alsok/szoknya2.jpg', 'Látványos, a test vonalát követő farmer. A különleges oldalcsíknak köszönhetően ebben a darabban biztosan nem maradsz észrevétlen. Az integrált öv és az öbvújtatók igazán kényelmes viseletté teszik. Elöl két benyúlós, hátul két rávarrt zseb. Elöl rejtett cipzárral és gombbal rögzíthető.'),
(23, 'Szürke rövid szárú csizma', 'cipo', 'csizma', 6500, 'img/cipok/csizma.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(24, 'Virág mintás nike futó cipő', 'cipo', 'futo_cipo', 21000, 'img/cipok/futo_cipo.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(25, 'Rövid szárú kék csizma', 'cipo', 'csizma', 8000, 'img/cipok/csizma2.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(26, 'Fekete magassarkú', 'cipo', 'magassarku', 9000, 'img/cipok/magassarku.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(27, 'Sötét kék csizma', 'cipo', 'csizma', 11000, 'img/cipok/csizma2.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(28, 'Fekete csizma', 'cipo', 'csizma', 9000, 'img/cipok/csizma3.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(29, 'Fekete börhatású csizma', 'cipo', 'csizma', 15000, 'img/cipok/csizma4.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(30, 'Barna magassarkú', 'cipo', 'magassarku', 8000, 'img/cipok/magassarku2.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(31, 'Fehér magassarkú', 'cipo', 'magassarku', 10000, 'img/cipok/magassarku3.jpg', 'Air-Cooled Memory Foam - Ez a típusú talpbetét biztosítja a talp izzadás mentességét, párnázott, kényelmes és elnyeli a lépés rezgéseit.'),
(32, 'Fehér szandal', 'cipo', 'szandal', 4000, 'img/cipok/szandal.jpg', 'Lilás, ezüstös hatású, old rose Tamaris, női magassarkú szandál.'),
(33, 'Szürke szandal', 'cipo', 'szandal', 4500, 'img/cipok/szandal2.jpg', 'Lilás, ezüstös hatású, old rose Tamaris, női magassarkú szandál.'),
(34, 'Rózsaszín szandal', 'cipo', 'szandal', 4000, 'img/cipok/szandal3.jpg', 'Lilás, ezüstös hatású, old rose Tamaris, női magassarkú szandál.'),
(35, 'Rózsaszín magassarkú', 'cipo', 'magassarku', 13000, 'img/cipok/magassarku4.jpg', 'Lilás, ezüstös hatású, old rose Tamaris, női magassarkú szandál.'),
(36, 'Piros magassarkú', 'cipo', 'magassarku', 18000, 'img/cipok/magassarku5.jpg', 'Lilás, ezüstös hatású, old rose Tamaris, női magassarkú szandál.'),
(37, 'Rózsaszín futó cipő', 'cipo', 'futo_cipo', 16000, 'img/cipok/futo_cipo2.jpg', 'Lilás, ezüstös hatású, old rose Tamaris, női magassarkú szandál.'),
(38, 'Feher futó cipő', 'cipo', 'futo_cipo', 18000, 'img/cipok/futo_cipo3.jpg', 'Lilás, ezüstös hatású, old rose Tamaris, női magassarkú szandál.'),
(39, 'Fekete futó cipő', 'cipo', 'futo_cipo', 21000, 'img/cipok/futo_cipo4.jpg', 'Lilás, ezüstös hatású, old rose Tamaris, női magassarkú szandál.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `comment_rate`
--

DROP TABLE IF EXISTS `comment_rate`;
CREATE TABLE IF NOT EXISTS `comment_rate` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL,
  `item_id` int(7) NOT NULL,
  `szoveg` varchar(501) COLLATE utf8_hungarian_ci NOT NULL,
  `rejtett` int(1) NOT NULL,
  `adott_pont` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `comment_rate`
--

INSERT INTO `comment_rate` (`id`, `user_id`, `item_id`, `szoveg`, `rejtett`, `adott_pont`) VALUES
(11, 2, 30, 'csúnya előbe', 1, 3),
(12, 2, 33, 'szupiii', 0, 3),
(13, 2, 21, 'Nagyon jó', 0, 5),
(14, 2, 1, 'Nagyon tetszik a minta mindig is ilyen pólót kerestem. Többszöri mosás után se nyúlik ki aminek nagyon örülök. Bárkinek tiszta szívből tudom ajánlani', 1, 5),
(15, 1, 1, 'Nem tetszik.', 0, 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'SzakallasRobert', '#!$db31f05159b3b3ca9f3102c9827334035aca374c~☺', 'szakallasotp@gmail.com'),
(2, 'Teszt', '#!$b11706e6af3767100de36d6bfe55ce502399d8aa~☺', 'teszt@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
