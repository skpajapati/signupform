-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 10:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoperation`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_operation`
--

CREATE TABLE `crud_operation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud_operation`
--

INSERT INTO `crud_operation` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'aniket Dogra', 'aniketdogra1130@gmail.com', '8743059673', '123456'),
(2, 'soman madal', 'soman@gmail.com', '8754122356', '123456'),
(3, 'Anup thakur', 'anup12@gmail.com', '8754212356', 'anup@1321'),
(4, 'John Deo', 'Johndeo@gmail.com', '9999999990', 'JohenDeo@321'),
(5, 'Ram laxman', 'prajapatisudhir502@gmail.com', '9015411326', 'ram@123'),
(6, 'sudhir kumar', 'prajapatisudhir5@gmail.com', '08743059673', 'sudhir@321'),
(7, 'Reetu Sharma', 'reetu@gmail.com', '8754122356', 'reetu@321');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(2, 'Ram', 'ram@gmail.com', '08743059673', '123123'),
(4, 'Reetu Sharma', 'reetu@gmail.com', '08754122356', '111111'),
(6, 'sudhir kumar', 'prajapatisudhir5@gmail.com', '8743059673', '123456'),
(7, 'Mohan', 'Mohan0001@gmail.com', '8956232154', '123123'),
(9, 'John Deo', 'johndeo1@gmail.com', '9865321245', 'john@1'),
(10, 'New user', 'newuser@gmail.com', '7854215487', 'answer'),
(11, 'hi this is sudhir kumar prajapati', 'prajapatisudhir502@gmail.com', '0874305967', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_operation`
--
ALTER TABLE `crud_operation`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_operation`
--
ALTER TABLE `crud_operation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
