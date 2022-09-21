-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 06:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventdeco`
--

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `ord_id` int(11) NOT NULL,
  `dec_date` date NOT NULL,
  `dec_slot` varchar(32) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_tel` varchar(60) NOT NULL,
  `cus_notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`ord_id`, `dec_date`, `dec_slot`, `cus_name`, `cus_email`, `cus_tel`, `cus_notes`) VALUES
(1, '2022-06-26', 'PM', 'luxsan', 'luxsan0630@gmail.com', '768666323', 'Testingrt'),
(2, '2022-06-12', 'PM', 'luxsan', 'luxsan0630@gmail.com', '768666323', 'Testingrt'),
(3, '2022-06-24', 'PM', 'luxsan', 'luxsan0630@gmail.com', '768666323', 'hall deco 15000 Rs'),
(4, '2022-06-18', 'PM', 'luxsan', 'luxsan0630@gmail.com', '0', '7r5'),
(5, '2022-06-17', 'AM', 'luxsan', 'luxsan0630@gmail.com', '768666323', 'hall deco pack2'),
(12, '2022-09-24', 'am', 'luxsanaaaaaaaaaaaaaa', 'luxsaaaaaaaaan0630@gmail.com', '768666323', ''),
(13, '2022-09-24', 'pm', 'luxsanads', 'dcfluxsan0630@gmail.com', '768666323', 'ss');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Luxsan', 'luxsan0630@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'hari', 'hari@gmail.com', '02522a2b2726fb0a03bb19f2d8d9524d'),
(3, 'husni', 'hus@gmail.com', 'e8a88bb6f4d420a8517965d25cd54a14'),
(4, 'kathu', 'ku@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'SK', 'SHUJQN@GMAIL.COM', '0283950c2145e5182183fe16baeabf2d'),
(6, 'Luxsanath', 'luxsan06302@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'naa', 'an0630@gmail.com', '02522a2b2726fb0a03bb19f2d8d9524d'),
(8, 'haris', 'kus@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(9, 'harisnath', 'ku@gmail.coari', '202cb962ac59075b964b07152d234b70'),
(10, 'samanthi', 'haris@gmail.com12', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'harish', 'harish@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(12, 'kiru', 'kiruni@gmail.com', 'd0970714757783e6cf17b26fb8e2298f'),
(13, 'hiru', 'hiru@gmail.com', '3b712de48137572f3849aabd5666a4e3'),
(14, 'Luxsane', 'luxsan0ee630@gmail.com', '6512bd43d9caa6e02c990b0a82652dca'),
(15, 'hh', 'hi@gmail.com', '3b712de48137572f3849aabd5666a4e3'),
(16, 'lap', 'lap@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'raksan', 'ruxsan0630@gmail.com', 'e110fb45bc4f7cc5d367b06bfbc8e5c3'),
(18, 'Luxsaghg', 'luxsaddn0630@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
