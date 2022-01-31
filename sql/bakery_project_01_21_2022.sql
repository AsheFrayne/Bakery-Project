-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 06:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersID` int(11) NOT NULL,
  `usersName` varchar(30) NOT NULL,
  `usersEmail` varchar(30) NOT NULL,
  `usersPwd` varchar(30) NOT NULL,
  `dateJoined` varchar(11) NOT NULL,
  `filename` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `usersType` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `usersName`, `usersEmail`, `usersPwd`, `dateJoined`, `filename`, `description`, `usersType`) VALUES
(0, 'guest', 'guest@email.com', '', '01/31/2022', 'default.png', 'This is for Guest account', 'guest'),
(1, 'admin123', 'admin@email.com', 'admin123', '01/31/2022', 'default.png', 'This is an admin account', 'admin'),
(7, 'reydan10', 'reydan@example.com', 'admin123', '01/27/2022', 'BlackForestDreamCake.png', 'Hhjsagdfiuyasgf9o8a', 'user'),
(8, 'admin', 'auhagfau@email.com', 'admin12345', '01/27/2022', 'default.png', 'Describe yourself!', 'user'),
(9, 'reydan', 'reydan@email.com', 'admin123', '01/29/2022', 'default.png', 'Describe yourself!', 'user'),
(11, 'Superman', 'joe@example.com', 'admin123', '01/31/2022', 'default.png', 'Describe yourself!', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersID`),
  ADD UNIQUE KEY `usersName` (`usersName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
