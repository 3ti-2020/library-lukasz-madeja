-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 26 Maj 2020, 17:34
-- Wersja serwera: 5.7.23
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `library`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `library_autor`
--

DROP TABLE IF EXISTS `library_autor`;
CREATE TABLE IF NOT EXISTS `library_autor` (
  `id_autor` int(11) NOT NULL AUTO_INCREMENT,
  `autor` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_autor`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `library_autor`
--

INSERT INTO `library_autor` (`id_autor`, `autor`) VALUES
(1, 'Lewis Hamilton\r\n'),
(2, 'Valteri Bottas'),
(3, 'Sebastian Vettel\r\n'),
(4, 'Charles Leclerc\r\n'),
(5, 'Max Verstappen\r\n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `library_book`
--

DROP TABLE IF EXISTS `library_book`;
CREATE TABLE IF NOT EXISTS `library_book` (
  `id_book` int(11) NOT NULL AUTO_INCREMENT,
  `id_autor` int(11) NOT NULL,
  `id_tytul` int(11) NOT NULL,
  PRIMARY KEY (`id_book`),
  KEY `fk_autor` (`id_autor`),
  KEY `fk_tytul` (`id_tytul`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `library_book`
--

INSERT INTO `library_book` (`id_book`, `id_autor`, `id_tytul`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `library_tytul`
--

DROP TABLE IF EXISTS `library_tytul`;
CREATE TABLE IF NOT EXISTS `library_tytul` (
  `id_tytul` int(11) NOT NULL AUTO_INCREMENT,
  `tytul` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id_tytul`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `library_tytul`
--

INSERT INTO `library_tytul` (`id_tytul`, `tytul`) VALUES
(1, 'Pole Position king - Lewis Hamilton'),
(2, 'Second Place king - Valteri Bottas'),
(3, 'Spining Career - Sebsatian Vettel'),
(4, 'Vettel\'s slayer - Charles Leclerc'),
(5, 'The best talent of the 21st century - Max Verstappen');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `library_book`
--
ALTER TABLE `library_book`
  ADD CONSTRAINT `library_book_ibfk_1` FOREIGN KEY (`id_autor`) REFERENCES `library_autor` (`id_autor`),
  ADD CONSTRAINT `library_book_ibfk_2` FOREIGN KEY (`id_tytul`) REFERENCES `library_tytul` (`id_tytul`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
