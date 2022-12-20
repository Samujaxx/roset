-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 dec 2022 om 22:32
-- Serverversie: 10.4.25-MariaDB
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `de-roset`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `orderdate` date DEFAULT NULL,
  `adress` varchar(255) NOT NULL,
  `pickup` tinyint(1) NOT NULL,
  `delivery` tinyint(1) NOT NULL,
  `isReceived` tinyint(1) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `orderdate`, `adress`, `pickup`, `delivery`, `isReceived`, `customer_name`, `city`) VALUES
(21, 3, 3, '2022-12-20', 'awdeawdawdawdwadad', 0, 1, 0, 'wdawdawdawdad', 'Castricum'),
(22, 3, 1, '2022-12-20', 'awdeawdawdawdwadad', 0, 1, 0, 'wdawdawdawdad', 'Castricum');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price_kg` decimal(6,2) NOT NULL,
  `fotw` tinyint(1) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price_kg`, `fotw`, `category`, `image`) VALUES
(1, 'aardbei', '8.00', 0, 'sweet', 'aardbei'),
(3, 'banaan', '8.00', 0, 'schepijs', 'banaan'),
(4, 'caramel', '8.00', 1, 'schepijs', 'caramel'),
(5, 'chocolade', '8.00', 0, 'schepijs', 'chocolade'),
(6, 'citroen', '8.00', 0, 'schepijs', 'citroen'),
(7, 'cookiedough', '8.00', 0, 'schepijs', 'cookiedough'),
(8, 'hazelnoot', '8.00', 0, 'schepijs', 'hazelnoot'),
(9, 'kers', '8.00', 0, 'schepijs', 'kers'),
(10, 'koekjes', '8.00', 0, 'schepijs', 'koekjes'),
(11, 'mango', '8.00', 1, 'schepijs', 'mango');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `date_of_birth`, `phone`, `adress`, `zipcode`, `city`, `role`) VALUES
(3, 'admin', 'admin', 'admin', 'admin', '2022-12-09', 'admin', 'adminstraatjaman', 'admin', 'admin', 'admin'),
(4, 'homer', 'simpson', 'homer@simpsons.com', '12345', '1997-06-20', '0987654321', 'home 1', '4567AA', 'simpsonsland', 'user');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT voor een tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
