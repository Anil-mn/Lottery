-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 05:53 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lottery`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `phno` varchar(30) NOT NULL,
  `tcname` varchar(30) NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `phno`, `tcname`, `number`) VALUES
(5, '9746903914', 'Monsoon Bumper', 'kc-112345'),
(19, '9876543210', 'Monsoon Bumper', 'mc-98745'),
(53, '9746903914', 'win win', 'kc-112345'),
(54, '9746903914', 'Akshaya', 'AK-112345'),
(55, '9746903914', 'pournami', 'pc-112345'),
(56, '9876543210', 'Akshaya', 'AK-12365');

-- --------------------------------------------------------

--
-- Table structure for table `draw`
--

CREATE TABLE `draw` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` varchar(6) NOT NULL,
  `series` varchar(5) NOT NULL,
  `win price` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `Lwintc` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draw`
--

INSERT INTO `draw` (`id`, `name`, `price`, `series`, `win price`, `date`, `Lwintc`) VALUES
(1, 'win win', '60 rs', 'kc', '1 cr', '2019-09-10', ''),
(2, 'Monsoon Bumper', '50 rs', 'mc', '60 L', '2019-09-26', ''),
(3, 'pournami', '40 rs', 'pc', '50 L', '2019-10-01', ''),
(4, 'sthre shakthi', '70 rs', 'SS', '70 L', '2019-09-24', ''),
(5, 'Akshaya', '100 rs', 'AK', '2 cr', '2019-09-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(54) NOT NULL,
  `number` varchar(12) NOT NULL,
  `password` varchar(54) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `number`, `password`) VALUES
(19, 'AnilNambuthiripad', '9746903914', 'anil123'),
(20, 'Amitha S', '9876543210', 'amitha123'),
(21, 'sona@sona.com', '9876544321', 'kuttytharav'),
(22, 'Seena ', '1234567890', 'seena123'),
(23, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draw`
--
ALTER TABLE `draw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `draw`
--
ALTER TABLE `draw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
