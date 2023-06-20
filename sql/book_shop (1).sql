-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 06:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` enum('Most Popular','Religious','Fiction','Romantic','Sci-Fi','Children') NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `image`, `category`, `price`, `featured`) VALUES
(2, 'Book 3', 'kew na', 'book_images/red_queen.jpg', 'Sci-Fi', 30.00, 1),
(3, 'Darknet', 'Mathew Mather', 'book_images/darknet.jpg', 'Most Popular', 50.00, 1),
(4, 'Nightshade', 'Andrea Cremer', 'book_images/nightshade.jpg', 'Fiction', 90.00, 1),
(5, 'Book 3', 'hasan', 'book_images/history_of_modern_architecture.jpg', 'Sci-Fi', 60.00, 0),
(6, 'Mon manena', 'ami', 'book_images/book_8.png', 'Children', 45.00, 0),
(7, 'Sci-Fi book 3', 'ABC', 'book_images/arrival_1.jpg', 'Sci-Fi', 55.00, 0),
(8, 'Sci-Fi Book 4', 'DEF', 'book_images/book_7.png', 'Sci-Fi', 65.00, 0),
(9, 'Sci-Fi Book 5', 'GHI', 'book_images/arrival_10.jpg', 'Sci-Fi', 60.00, 0),
(10, 'Sci-Fi Book 6', 'JKL', 'book_images/book_11.jpg', 'Sci-Fi', 70.00, 0),
(11, 'Sci-Fi Book 7', 'JKL', 'book_images/arrival_5.jpg', 'Sci-Fi', 30.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `book_id`, `quantity`) VALUES
(1, 5, 1),
(2, 2, 2),
(3, 6, 1),
(4, 4, 5),
(5, 3, 2),
(6, 9, 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `gender`, `email`, `phone_number`, `password`) VALUES
(1, 'Md.', 'Karim', 23, 'male', 'a@a.com', '01625510598', '123'),
(2, 'Sazzad', 'Zahid', 23, 'male', 'b@b.com', '05454545', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
