-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 02:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `Firstname`, `Lastname`, `username`, `password`) VALUES
(1, 'Leke', 'Quni', 'qunileke', 'leka123'),
(2, 'Ded', 'Nikollbibaj', 'dedinb', 'deda123'),
(9, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `change_contact`
--

CREATE TABLE `change_contact` (
  `contactID` int(11) NOT NULL,
  `phone` bigint(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `Name`, `Email`, `Message`) VALUES
(1, 'Leke Quni', 'qunileke@gmail.com', 'mesazh prove\r\n'),
(2, 'Leke Quni', 'qunileke@gmail.com', 'mesazhi i dyte'),
(3, 'Leke Quni', 'qunileke@gmail.com', 'mesazhi trete'),
(4, 'Mama Gone', 'ganimete@gmail.com', 'porosia po vonohet'),
(5, 'klesti', 'klestcanhasi@gmail.com', 'mua nuk me pelqen duksi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `kategoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `kategoria`) VALUES
(4, 'Produkti 1', '40', 'product1.jpg', 'new-arrivals'),
(6, 'Produkti 3', '50', 'product3.jpg', 'regular'),
(7, 'Produkti 4', '50', 'product4.jpg', 'regular'),
(8, 'Produkti 5', '50', 'product5.jpg', 'regular'),
(10, 'Produkti 7', '50', 'product7.jpg', 'regular'),
(11, 'Produkti 8', '50', 'product8.jpg', 'new-arrivals'),
(18, 'produkti 1', '40', 'product1.jpg', 'discount'),
(19, 'produkti2', '40', 'product2.jpg', 'discount'),
(20, 'produkti3', '40', 'product3.jpg', 'discount'),
(23, 'leka', '1000000', 'Leke Quni.jpg', 'new-arrivals');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` bigint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fullname`, `username`, `gender`, `email`, `password`, `phone`) VALUES
(15, 'Leke Quni', 'qunileke', 'M', 'qunileke@gmail.com', 'leka123', 49491431),
(16, 'Pjeter Quni', 'pjetri', 'M', 'pjetri@gmail.com', 'pjetri123', 390320899),
(17, 'Luk Muqaj', 'luki', 'M', 'luka@gmail.com', '12345678', 49762533),
(18, 'ded nikollbibaj', 'dedinb20', 'M', 'deda123@asd', 'deda321', 44444444),
(19, 'Vlora Canhasi', 'vlora', 'F', 'vlora@gmail.com', 'vlora123', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `change_contact`
--
ALTER TABLE `change_contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `change_contact`
--
ALTER TABLE `change_contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
