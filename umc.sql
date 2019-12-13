-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 dec 2019 om 09:13
-- Serverversie: 10.1.39-MariaDB
-- PHP-versie: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umc`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `checklist`
--

CREATE TABLE `checklist` (
  `checklist_id` int(255) NOT NULL,
  `verzegeling_intact` varchar(150) NOT NULL,
  `merktekens` varchar(150) NOT NULL,
  `gewichtsafwijking` varchar(150) NOT NULL,
  `excentrische_belasting` varchar(150) NOT NULL,
  `herhaalbaarheidsfout` varchar(150) NOT NULL,
  `beweeglijkheidsfout` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `checklist`
--

INSERT INTO `checklist` (`checklist_id`, `verzegeling_intact`, `merktekens`, `gewichtsafwijking`, `excentrische_belasting`, `herhaalbaarheidsfout`, `beweeglijkheidsfout`) VALUES
(1, 'akkoord', 'akkoord', 'akkoord', 'akkoord', 'akkoord', 'akkoord'),
(2, 'akkoord', 'akkoord', 'niet akkoord', 'niet akkoord', 'akkoord', 'akkoord'),
(3, 'akkoord', 'akkoord', 'akkoord', 'akkoord', 'akkoord', 'akkoord'),
(4, 'akkoord', 'niet akkoord', 'niet akkoord', 'niet akkoord', 'niet akkoord', 'niet akkoord'),
(5, 'niet akkoord', 'akkoord', 'niet akkoord', 'akkoord', 'niet akkoord', 'akkoord'),
(6, 'akkoord', 'akkoord', 'akkoord', 'akkoord', 'akkoord', 'akkoord');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gegevens_klant`
--

CREATE TABLE `gegevens_klant` (
  `klant_id` int(255) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `plaats` varchar(255) NOT NULL,
  `datum_onderhoud` date NOT NULL,
  `contactpersoon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `gegevens_klant`
--

INSERT INTO `gegevens_klant` (`klant_id`, `naam`, `adres`, `plaats`, `datum_onderhoud`, `contactpersoon`) VALUES
(1, '1', '', '1', '1111-11-01', '1'),
(2, 'stetes', 'testes', 'tESte', '2019-05-14', 'teET'),
(3, 'vcxc ', 'vzcxvczx', 'vzcxvczx', '2019-05-09', 'vzcvc'),
(4, 'q', 'q', 'q', '2019-05-10', 'q'),
(5, 'z', 'z', 'z', '2019-05-08', 'z'),
(6, 'a', 'a', 'a', '2019-04-29', 'a'),
(7, '', '', '', '0000-00-00', ''),
(8, 'g', 'g', 'g', '2019-06-18', 'g'),
(9, 'p', 'p', 'p', '2019-06-21', 'p'),
(10, 'u', 'u', 'u', '2019-06-01', 'u');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gegevens_weegschaal`
--

CREATE TABLE `gegevens_weegschaal` (
  `weegschaal_id` int(255) NOT NULL,
  `locatie` text NOT NULL,
  `inventarisnummer` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `serienummer` int(255) NOT NULL,
  `ijkklasse` varchar(255) NOT NULL,
  `bouwjaar` date NOT NULL,
  `bereik_max` decimal(4,3) DEFAULT NULL,
  `bereik_min` decimal(4,3) DEFAULT NULL,
  `schaalverdeling_e` decimal(10,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `gegevens_weegschaal`
--

INSERT INTO `gegevens_weegschaal` (`weegschaal_id`, `locatie`, `inventarisnummer`, `merk`, `type`, `serienummer`, `ijkklasse`, `bouwjaar`, `bereik_max`, `bereik_min`, `schaalverdeling_e`) VALUES
(1, 'test', '1', '1', '1', 1, '1', '0001-01-01', '1.000', '1.000', '1.000'),
(2, 'dfz', 'zdsf', 'fdzs', 'dsf', 0, 'zdfs', '2019-05-07', '2.000', '2.000', '2.000'),
(3, 'z', 'z', 'z', 'z', 0, 'z', '2019-05-19', '1.000', '1.000', '1.000'),
(4, 'a', 'a', 'a', 'a', 0, 'a', '2019-05-17', '2.000', '2.000', '2.000'),
(5, 'p', 'p', 'p', 'pp', 0, 'pp', '2019-06-22', '9.000', '9.000', '9.000'),
(6, 'u', 'u', 'u', 'u', 0, 'u', '2019-06-14', '8.000', '8.000', '8.000');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `meet_result_afwegend`
--

CREATE TABLE `meet_result_afwegend` (
  `afweeg_id` int(255) NOT NULL,
  `300_kg` decimal(6,3) DEFAULT NULL,
  `250_kg` decimal(6,3) DEFAULT NULL,
  `200_kg` decimal(6,3) DEFAULT NULL,
  `150_kg` decimal(6,3) DEFAULT NULL,
  `100_kg` decimal(6,3) DEFAULT NULL,
  `50_kg` decimal(6,3) DEFAULT NULL,
  `20_kg` decimal(6,3) DEFAULT NULL,
  `15_kg` decimal(6,3) DEFAULT NULL,
  `10_kg` decimal(6,3) DEFAULT NULL,
  `5_kg` decimal(6,3) DEFAULT NULL,
  `2_kg` decimal(6,3) DEFAULT NULL,
  `0_kg` decimal(6,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `meet_result_afwegend`
--

INSERT INTO `meet_result_afwegend` (`afweeg_id`, `300_kg`, `250_kg`, `200_kg`, `150_kg`, `100_kg`, `50_kg`, `20_kg`, `15_kg`, `10_kg`, `5_kg`, `2_kg`, `0_kg`) VALUES
(1, '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999'),
(2, '1.000', '1.000', '11.000', '1.000', '1.000', '1.000', '11.000', '1.000', '1.000', '1.000', '11.000', '1.000'),
(3, '2.000', '2.000', '22.000', '2.000', '2.000', '2.000', '22.000', '2.000', '2.000', '2.000', '22.000', '22.000'),
(4, '9.000', '9.000', '9.000', '99.000', '9.000', '9.000', '9.000', '9.000', '9.000', '99.000', '9.000', '9.000'),
(5, '8.000', '8.000', '88.000', '8.000', '8.000', '88.000', '8.000', '88.000', '999.999', '88.000', '88.000', '8.000');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `meet_result_opwegend`
--

CREATE TABLE `meet_result_opwegend` (
  `opweeg_id` int(255) NOT NULL,
  `0_kg` decimal(6,3) DEFAULT NULL,
  `2_kg` decimal(6,3) DEFAULT NULL,
  `5_kg` decimal(6,3) DEFAULT NULL,
  `10_kg` decimal(6,3) DEFAULT NULL,
  `15_kg` decimal(6,3) DEFAULT NULL,
  `20_kg` decimal(6,3) DEFAULT NULL,
  `50_kg` decimal(6,3) DEFAULT NULL,
  `100_kg` decimal(6,3) DEFAULT NULL,
  `150_kg` decimal(6,3) DEFAULT NULL,
  `200_kg` decimal(6,3) DEFAULT NULL,
  `250_kg` decimal(6,3) DEFAULT NULL,
  `300_kg` decimal(6,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `meet_result_opwegend`
--

INSERT INTO `meet_result_opwegend` (`opweeg_id`, `0_kg`, `2_kg`, `5_kg`, `10_kg`, `15_kg`, `20_kg`, `50_kg`, `100_kg`, `150_kg`, `200_kg`, `250_kg`, `300_kg`) VALUES
(1, '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999', '0.999'),
(2, '0.999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '0.999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '0.855', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '0.855', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '300.000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '1.000', '1.000', '1.000', '11.000', '1.000', '1.000', '1.000', '1.000', '11.000', '11.000', '1.000', '1.000'),
(8, '22.000', '2.000', '2.000', '22.000', '2.000', '2.000', '2.000', '2.000', '2.000', '22.000', '2.000', '2.000'),
(9, '9.000', '9.000', '9.000', '99.000', '9.000', '9.000', '9.000', '9.000', '99.000', '9.000', '9.000', '9.000'),
(10, '8.000', '8.000', '8.000', '88.000', '8.000', '8.000', '8.000', '88.000', '8.000', '8.000', '88.000', '8.000');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `overig`
--

CREATE TABLE `overig` (
  `overig_id` int(255) NOT NULL,
  `uitvoerder` varchar(255) NOT NULL,
  `datum` date NOT NULL,
  `batterij` varchar(255) NOT NULL DEFAULT 'Niet vervangen',
  `onderhoudssticker` varchar(255) NOT NULL DEFAULT 'Niet geplakt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `overig`
--

INSERT INTO `overig` (`overig_id`, `uitvoerder`, `datum`, `batterij`, `onderhoudssticker`) VALUES
(1, '1', '1111-11-01', 'Batterij vervangen', 'Onderhoudssticker geplakt'),
(2, 'z', '2019-05-08', 'Batterij vervangen', 'Onderhoudssticker geplakt'),
(3, 'zzzz', '2019-04-29', 'Batterij vervangen', 'Onderhoudssticker geplakt'),
(4, 'uuuuu', '2019-06-01', 'Batterij vervangen', 'Onderhoudssticker geplakt');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rapportage_onderdelen`
--

CREATE TABLE `rapportage_onderdelen` (
  `rapport_id` int(255) NOT NULL,
  `klant_id` int(255) NOT NULL,
  `weegschaal_id` int(255) NOT NULL,
  `checklist_id` int(255) NOT NULL,
  `opweeg_id` int(255) NOT NULL,
  `afweeg_id` int(255) NOT NULL,
  `overig_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created_at`) VALUES
(4, 'germain', '$2y$10$FKtbjpij3EmBzWa24nhpqOEC1ws9N5oKbeTdMfBQtA8SNjliJLf/2', '2019-05-23 19:26:53');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`checklist_id`);

--
-- Indexen voor tabel `gegevens_klant`
--
ALTER TABLE `gegevens_klant`
  ADD PRIMARY KEY (`klant_id`);

--
-- Indexen voor tabel `gegevens_weegschaal`
--
ALTER TABLE `gegevens_weegschaal`
  ADD PRIMARY KEY (`weegschaal_id`);

--
-- Indexen voor tabel `meet_result_afwegend`
--
ALTER TABLE `meet_result_afwegend`
  ADD PRIMARY KEY (`afweeg_id`);

--
-- Indexen voor tabel `meet_result_opwegend`
--
ALTER TABLE `meet_result_opwegend`
  ADD PRIMARY KEY (`opweeg_id`);

--
-- Indexen voor tabel `overig`
--
ALTER TABLE `overig`
  ADD PRIMARY KEY (`overig_id`);

--
-- Indexen voor tabel `rapportage_onderdelen`
--
ALTER TABLE `rapportage_onderdelen`
  ADD PRIMARY KEY (`rapport_id`),
  ADD KEY `klant_id` (`klant_id`),
  ADD KEY `weegschaal_id` (`weegschaal_id`),
  ADD KEY `checklist_id` (`checklist_id`),
  ADD KEY `opweeg_id` (`opweeg_id`),
  ADD KEY `afweeg_id` (`afweeg_id`),
  ADD KEY `overig_id` (`overig_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `checklist`
--
ALTER TABLE `checklist`
  MODIFY `checklist_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `gegevens_klant`
--
ALTER TABLE `gegevens_klant`
  MODIFY `klant_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `gegevens_weegschaal`
--
ALTER TABLE `gegevens_weegschaal`
  MODIFY `weegschaal_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `meet_result_afwegend`
--
ALTER TABLE `meet_result_afwegend`
  MODIFY `afweeg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `meet_result_opwegend`
--
ALTER TABLE `meet_result_opwegend`
  MODIFY `opweeg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `overig`
--
ALTER TABLE `overig`
  MODIFY `overig_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `rapportage_onderdelen`
--
ALTER TABLE `rapportage_onderdelen`
  MODIFY `rapport_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `rapportage_onderdelen`
--
ALTER TABLE `rapportage_onderdelen`
  ADD CONSTRAINT `rapportage_onderdelen_ibfk_1` FOREIGN KEY (`opweeg_id`) REFERENCES `meet_result_opwegend` (`opweeg_id`),
  ADD CONSTRAINT `rapportage_onderdelen_ibfk_2` FOREIGN KEY (`afweeg_id`) REFERENCES `meet_result_afwegend` (`afweeg_id`),
  ADD CONSTRAINT `rapportage_onderdelen_ibfk_3` FOREIGN KEY (`klant_id`) REFERENCES `gegevens_klant` (`klant_id`),
  ADD CONSTRAINT `rapportage_onderdelen_ibfk_4` FOREIGN KEY (`weegschaal_id`) REFERENCES `gegevens_weegschaal` (`weegschaal_id`),
  ADD CONSTRAINT `rapportage_onderdelen_ibfk_5` FOREIGN KEY (`checklist_id`) REFERENCES `checklist` (`checklist_id`),
  ADD CONSTRAINT `rapportage_onderdelen_ibfk_6` FOREIGN KEY (`overig_id`) REFERENCES `overig` (`overig_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
