-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 07:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `pickup` tinyint(1) NOT NULL,
  `delivery` tinyint(1) NOT NULL,
  `isReceived` tinyint(1) NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `adress`, `pickup`, `delivery`, `isReceived`, `name`, `city`) VALUES
(4, 3, 4, 'joman 61', 0, 0, 0, 'faruk', 'Heiloo'),
(5, 3, 4, 'joman 61', 0, 0, 0, 'faruk', 'Heiloo'),
(6, 3, 5, 'joman 61', 0, 0, 0, 'faruk', 'Heiloo'),
(7, 3, 6, 'joman 61', 0, 0, 0, 'faruk', 'Heiloo'),
(8, 3, 8, 'joman 61', 0, 0, 0, 'faruk', 'Heiloo'),
(9, 3, 1, 'joman 61', 0, 0, 0, 'faruk', 'Heiloo'),
(10, 3, 6, 'joman 61', 0, 0, 0, 'faruk', 'Heiloo'),
(11, 3, 6, 'joman 61', 0, 0, 0, 'faruk', 'Heiloo'),
(12, 3, 4, 'hahahahaahahahaahahah', 0, 0, 0, 'faruk', 'Heiloo');

-- --------------------------------------------------------

--
-- Table structure for table `products`
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
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price_kg`, `fotw`, `category`, `image`) VALUES
(1, 'aardbei', '8.00', 1, 'sweet', 'aardbei'),
(3, 'banaan', '8.00', 0, 'schepijs', 'banaan'),
(4, 'caramel', '8.00', 0, 'schepijs', 'caramel'),
(5, 'chocolade', '8.00', 0, 'schepijs', 'chocolade'),
(6, 'citroen', '8.00', 0, 'schepijs', 'citroen'),
(7, 'cookiedough', '8.00', 0, 'schepijs', 'cookiedough'),
(8, 'hazelnoot', '8.00', 0, 'schepijs', 'hazelnoot'),
(9, 'kers', '8.00', 0, 'schepijs', 'kers'),
(10, 'koekjes', '8.00', 0, 'schepijs', 'koekjes'),
(11, 'mango', '8.00', 1, 'schepijs', 'mango');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `date_of_birth`, `phone`, `adress`, `zipcode`, `city`, `role`) VALUES
(3, 'admin', 'admin', 'admin', 'admin', '2022-12-09', 'admin', 'adminstraatjaman', 'admin', 'admin', 'admin'),
(4, 'homer', 'simpson', 'homer@simpsons.com', '12345', '1997-06-20', '0987654321', 'home 1', '4567AA', 'simpsonsland', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
