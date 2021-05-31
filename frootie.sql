-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< Updated upstream
-- Generation Time: May 19, 2021 at 03:11 PM
=======
-- Generation Time: May 31, 2021 at 05:28 AM
>>>>>>> Stashed changes
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frootie`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
                          `order_id` int(11) NOT NULL,
                          `user_id` int(11) NOT NULL,
                          `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                          `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `date`, `message`) VALUES
<<<<<<< Updated upstream
(9, 3, '2021-05-17 03:48:17', 'adadadada'),
(37, 2, '2021-05-19 12:11:40', 'accc');
=======
(9, 3, '2021-05-17 03:48:17', 'adadadada');
>>>>>>> Stashed changes

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
                          `id_produk` int(11) NOT NULL,
                          `nama_produk` varchar(100) NOT NULL,
                          `harga_produk` int(11) NOT NULL,
                          `berat_produk` int(11) NOT NULL,
                          `foto_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `user_id` int(11) NOT NULL,
                         `name` varchar(200) NOT NULL,
                         `email` varchar(200) NOT NULL,
                         `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

<<<<<<< Updated upstream
INSERT INTO `users` (`user_id`, `name`, `email`, `password`) VALUES
(2, 'Justin', 'justin@gmail.com', 'justin'),
(3, 'A', 'A', 'A');
=======
INSERT INTO `users` (`user_id`, `username`, `name`, `password`, `email`, `status`) VALUES
(3, '', 'Kevin Sander', 'A', 'ksu@gmail.com', ''),
(4, 'justin', 'justin', '$2y$10$Pf.ad/qNKKYyA1B.jxsJAOP1TF.0X0Y9vQ7qCs.SQHFYre.3ze1DW', 'justin@gmail.com', 'customer'),
(5, 'admin', 'Admin Frootie', '$2y$10$WB56QPkD4XhTR.zbhZStDex064LnifC9ZxCEIK03g7I8lHSfUoZcC', 'admin@frootie.com', 'admin');
>>>>>>> Stashed changes

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
    ADD PRIMARY KEY (`order_id`),
    ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
    ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
    MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
    MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< Updated upstream
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
=======
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
>>>>>>> Stashed changes

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
<<<<<<< Updated upstream
    ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
=======
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
>>>>>>> Stashed changes
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
