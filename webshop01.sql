-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Feb 2024 um 12:03
-- Server-Version: 10.4.28-MariaDB
-- PHP-Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `webshop01`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `buch_neuheiten`
--

CREATE TABLE `buch_neuheiten` (
  `Id_buch_neuheiten` int(11) NOT NULL,
  `buch_titile` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `kurzbeschreibung` varchar(255) DEFAULT NULL,
  `preis` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `buch_neuheiten`
--

INSERT INTO `buch_neuheiten` (`Id_buch_neuheiten`, `buch_titile`, `autor`, `kurzbeschreibung`, `preis`) VALUES
(1, 'Hobb-IT', 'Author 1', 'Ein Buch über einen Hobbit', 22.00),
(2, 'Harry Pointer', 'Author 2', 'Buch über zauberndes Kind.', 19.00),
(3, 'Das Kap-IT-al', 'Author 3', 'Irgendwas mit Komunissmus', 5.00),
(4, 'Der kleine Prinz', 'Author 4', 'Ein Buch mit einem Prinz.', 12.00),
(5, 'Der Schwarm', 'Author 5', 'Kein Plan kenn das Bucch nicht.', 21.00),
(6, 'Titel 1', 'Autor 6', 'das ist ein buch', 22.99),
(7, 'Titel 7', 'Autor 7', 'das ist ein buch', 12.99),
(8, 'Titel 8', 'Autor 8', 'Das ist ein Buch', 12.99),
(9, 'Titel 9', 'Autor 9', 'Das ist ein Buch', 9.99);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `carts`
--

CREATE TABLE `carts` (
  `cart` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, 'hallo', 'hallo', '$2y$10$LdeH6F8oYG66/lgfsXuveOVdL5R6bYPQzjizSVFcyFBfJXd5yOzPG'),
(2, 'hallo1', 'hallo1', '$2y$10$ug7Z5obYS7v/19tTc2/eTeMYeNkEm7O0wk3.RZW/hbNskG/9IraSS'),
(3, 'kristna', 'email', '$2y$10$opDfPLqfAO0Tuh9DkgzV/utuCoEaub3/otqiffEJRyz6mfHcac7Sa'),
(4, 'BBQ', 'BBQ', '$2y$10$IpY1/z8.ub5sASiFX9oI/.q3dAiVHq9iTQW6zF66gCNKJdv8qNJeG');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `buch_neuheiten`
--
ALTER TABLE `buch_neuheiten`
  ADD PRIMARY KEY (`Id_buch_neuheiten`);

--
-- Indizes für die Tabelle `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `user_id` (`user_id`);

--
-- Indizes für die Tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD UNIQUE KEY `title` (`title`),
  ADD UNIQUE KEY `description` (`description`) USING HASH;

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `buch_neuheiten`
--
ALTER TABLE `buch_neuheiten`
  MODIFY `Id_buch_neuheiten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `carts`
--
ALTER TABLE `carts`
  MODIFY `cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id_product`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
