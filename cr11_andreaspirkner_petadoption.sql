-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 24. Jul 2020 um 12:41
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr11_andreaspirkner_petadoption`
--
CREATE DATABASE IF NOT EXISTS `cr11_andreaspirkner_petadoption` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr11_andreaspirkner_petadoption`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `availability` int(10) NOT NULL,
  `island` varchar(50) NOT NULL,
  `loc_img` varchar(50) NOT NULL,
  `loc_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `size` varchar(15) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `hobbies` varchar(50) DEFAULT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `animals`
--

INSERT INTO `animals` (`id`, `img`, `name`, `description`, `availability`, `island`, `loc_img`, `loc_name`, `address`, `zip`, `size`, `age`, `hobbies`, `active`) VALUES
(1, 'img/egg.jpg', 'Dinosaur egg', 'Surprise eggs as a gift or to give yourself a present. Watch them evolve and be curious what slips out of it.', 53, 'Isla Margarita', 'img/island1.jpg', 'JP Margarita', 'Jurassic Street 1', '1J52P6', 'S', 0, 'Actually no hobbies.', 0),
(2, 'img/old1.jpg', 'Old Mc Kenzie', 'One of our oldest animal here in our Center. Maybe someone has a heart and gives him a home for his last about 97 years.', 19, 'Isla Verde', 'img/island2.jpg', 'JP Verde', 'Jurassic Blvd 1', '2J63P7', 'L', 163, 'Sleeping and eating.', 0),
(3, 'img/large1.jpg', 'Big Sam', 'Sam likes to have a big garden to feel comfortable. Not suitable for keeping in an apartment.', 17, 'Isla Jurassica', 'img/island3.jpg', 'JP Jurassica', 'Jurassica Ave 1', '3J27P8', 'L', 5, 'Addicted to melons.', 0),
(4, 'img/small1.jpg', 'Tiny Fred', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 45, 'Isla Margarita', 'img/island1.jpg', 'JP Margarita', 'Jurassic Street 1', '1J52P6', 'S', 3, 'Did not tell.', 0),
(5, 'img/small2.jpg', 'Little Jeany', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 18, 'Isla Verde', 'img/island2.jpg', 'JP Verde', 'Jurassic Blvd 1', '2J63P7', 'S', 1, 'Did not tell.', 0),
(6, 'img/small3.jpg', 'Baby Kevin', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 70, 'Isla Jurassica', 'img/island3.jpg', 'JP Jurassica', 'Jurassica Ave 1', '3J27P8', 'S', 2, 'Did not tell.', 0),
(7, 'img/large2.jpg', 'Giant Berta', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 9, 'Isla Margarita', 'img/island1.jpg', 'JP Margarita', 'Jurassic Street 1', '1J52P6', 'L', 7, 'Did not tell.', 0),
(8, 'img/large3.jpg', 'Grand Paul', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 23, 'Isla Verde', 'img/island2.jpg', 'JP Verde', 'Jurassic Blvd 1', '2J63P7', 'L', 4, 'Did not tell.', 0),
(9, 'img/large4.jpg', 'Scary Nicolas', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 23, 'Isla Jurassica', 'img/island3.jpg', 'JP Jurassica', 'Jurassica Ave 1', '3J27P8', 'L', 7, 'Did not tell.', 0),
(10, 'img/old2.jpg', 'Ancient Frieda', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 9, 'Isla Margarita', 'img/island1.jpg', 'JP Margarita', 'Jurassic Street 1', '1J52P6', 'S', 327, 'Did not tell.', 0),
(11, 'img/old3.jpg', 'The Pointer Sisters', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 2, 'Isla Verde', 'img/island2.jpg', 'JP Verde', 'Jurassic Blvd 1', '2J63P7', 'L', 87, 'Did not tell.', 0),
(12, 'img/old4.jpg', 'Slim Jim', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.', 78, 'Isla Jurassica', 'img/island3.jpg', 'JP Jurassica', 'Jurassica Ave 1', '3J27P8', 'S', 722, 'Did not tell.', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  `status` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`, `status`) VALUES
(3, 'Admin', 'admin@admin.net', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'admin'),
(4, 'Testuser', 'user@user.net', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user'),
(5, 'Andreas', 'andreas@andreas.net', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
