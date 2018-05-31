-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2018 at 08:50 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exemplo_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `utilizador`
--

CREATE TABLE `utilizador` (
  `id` int(11) NOT NULL,
  `Nome_completo` varchar(120) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(110) NOT NULL,
  `is_cliente` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizador`
--

INSERT INTO `utilizador` (`id`, `Nome_completo`, `username`, `password`, `is_cliente`) VALUES
(1, 'Cliente Primeiro', 'cliente', 'secret', 1),
(2, 'Admin User', 'admin', 'secret', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilizador`
--
ALTER TABLE `utilizador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilizador`
--
ALTER TABLE `utilizador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
