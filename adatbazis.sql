-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2019. Máj 06. 09:54
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
-- Adatbázis: `adatbazis`
--
CREATE DATABASE IF NOT EXISTS `adatbazis` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `adatbazis`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_02_110459_create_utazas_table', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('probajanka@valami.com', '$2y$10$wv08n4KGxPtL5wXg8cg.T.nOY5c5KS9WVOldLRoF/yrATHe8JDLu2', '2019-04-12 10:48:18');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefonszam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utazasid` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `telefonszam`, `utazasid`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Próba Janka', 'probajanka@valami.com', NULL, '$2y$10$NoXJtHUAONfUu6GzCFRI.unwu4ENoT9WO9/n/Ow/4GwiWtpluG.Qu', '123456', 3, NULL, '2019-04-12 10:03:34', '2019-04-29 11:41:41'),
(2, 'Próba Józsi', 'probajozsi@valami.com', NULL, '$2y$10$RivsV4ZViYM0vIwgO2lA3udezZs4ZjjLdnYR82gq4cWxVscgBeB72', '2', 3, NULL, '2019-04-29 11:57:37', '2019-04-29 12:23:55'),
(3, 'Próba Jenci', 'probajenci@valami.com', NULL, '$2y$10$SwFk/Dt/0n5w0PYjfo4i7eIR8AR54T30NqISMU4HLlnaFhg/C1uly', '3', 1, NULL, '2019-04-29 12:02:01', '2019-04-29 12:05:08');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `utazas`
--

DROP TABLE IF EXISTS `utazas`;
CREATE TABLE IF NOT EXISTS `utazas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `megnevezes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ar` int(11) NOT NULL,
  `rovidleiras` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hosszuleiras` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` date NOT NULL,
  `dateig` date DEFAULT NULL,
  `helyszin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxletszam` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `utazas`
--

INSERT INTO `utazas` (`id`, `created_at`, `updated_at`, `megnevezes`, `ar`, `rovidleiras`, `hosszuleiras`, `datum`, `dateig`, `helyszin`, `maxletszam`) VALUES
(1, '2019-04-02 11:21:32', '2019-04-02 11:21:32', 'Horvátország, Porec 5 napos', 100000, 'Porecbe sör fesztivál lesz, az utazás ideje alatt.', '5 nap, 4 éjszaka, 200 méterre van a tengerpart. Buszjáratok járnak a fesztivál és a szállás között.', '2019-06-01', '2019-06-06', 'Horvátország, Porec', 30),
(2, '2019-04-12 12:19:52', '2019-04-12 12:19:52', 'Spanyolország 5 nap nyáron', 150000, 'Spanyolország csodás vidékeit járjuk körbe és Barcelona a főhadiszállás.', '5 nap / 4 éjszaka, családi utazásnak tökéletes megoldás. Sok gyerek program és a párok is találnak számukra érdekes elfoglaltságot. A part 100 méterre van a Hoteltől, ami Wellness is egyben.\r\n\r\nCsendes, nyugodt, akció dús nyaralás.', '2019-07-18', '2019-07-23', 'Spanyolország, Barcelona', 30),
(3, '2019-04-29 11:25:29', '2019-04-29 11:25:29', 'Dubai, 8 nap nyáron', 1300000, 'Menj Dubai-ba!', '8 nap, 7 éjszaka. Dubai, 2 fő, most jön a jó rész.', '2020-06-06', '2020-06-13', 'Dubai', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
