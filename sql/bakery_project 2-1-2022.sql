-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 09:31 AM
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
-- Table structure for table `heart`
--

CREATE TABLE `heart` (
  `heartID` int(11) NOT NULL,
  `productsID` int(11) DEFAULT NULL,
  `usersName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heart`
--

INSERT INTO `heart` (`heartID`, `productsID`, `usersName`) VALUES
(23, 6, 'Superman');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productsID` int(11) NOT NULL,
  `productsFilename` varchar(50) NOT NULL,
  `productsPrice` varchar(10) NOT NULL,
  `productsDescription` varchar(500) NOT NULL,
  `productsDate` varchar(11) NOT NULL,
  `productsName` varchar(50) NOT NULL,
  `usersID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productsID`, `productsFilename`, `productsPrice`, `productsDescription`, `productsDate`, `productsName`, `usersID`) VALUES
(4, 'MalungayPandesal.jpg', '5.00 ', 'Flavorful fresh malungay pandesal.', '01/30/2022', 'Malungay Pandesal', 1),
(5, 'MangoCheesecake.png', '450.00 ', 'Buttery graham cracker crust with rich cheesy base topped with a mango syrup and then capped with fresh mango.', '01/30/2022', 'Mango Cheesecake', 1),
(6, 'MatchaDreamCake.jpg', '350.00 ', 'A delicious matcha moist cake covered with matcha ganache and matcha powder dust on top ', '01/30/2022', 'Matcha Dreamcake', 1),
(7, 'StrawberryCheesecake.png', '450.00', 'Buttery graham cracker crust with rich cheesy base topped with strawberry syrup and then capped with fresh strawberry.', '01/30/2022', 'Strawberry Cheesecake', 1),
(8, 'Blueberry Cheesecake.jpg', '450.00', 'Buttery graham cracker crust with rich cheesy base topped with a blueberry syrup and then capped with fresh blueberries.', '01/31/2022', 'Blueberry Cheesecake', 1),
(9, 'banana bread.jpg', '120.00', 'A Bread made with banana so it is called a banana bread.', '01/31/2022', 'Banana Bread', 1),
(11, 'BlackForestDreamCake.png', '450.00', 'A delicious chocolate moist cake with whipped cream, grated chocolate and fresh cherries on top.', '01/31/2022', 'Black Forest Dreamcake', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewsID` int(11) NOT NULL,
  `reviewsCom` varchar(500) DEFAULT NULL,
  `reviewsDate` varchar(11) NOT NULL,
  `productsID` int(11) DEFAULT NULL,
  `usersName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewsID`, `reviewsCom`, `reviewsDate`, `productsID`, `usersName`) VALUES
(47, 'mag show yannnnn', '01/30/2022', 1, 'admin'),
(63, 'iop8tyw8tyqut7qtoqghtquytgoqot', '01/31/2022', 6, 'reydan10');

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
(1, 'admin12345', 'admin@email.com', 'admin12345', '01/31/2022', '1x1 Reydan.png', 'This is an admin account', 'admin'),
(7, 'reydan10', 'reydan@example.com', 'admin123', '01/27/2022', 'BlackForestDreamCake.png', 'Hhjsagdfiuyasgf9o8a', 'user'),
(8, 'admin', 'auhagfau@email.com', 'admin12345', '01/27/2022', 'default.png', 'Describe yourself!', 'user'),
(11, 'Superman', 'joe@example.com', 'admin123', '01/31/2022', 'default.png', 'Describe yourself!', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `heart`
--
ALTER TABLE `heart`
  ADD PRIMARY KEY (`heartID`),
  ADD KEY `productsID` (`productsID`),
  ADD KEY `usersName` (`usersName`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productsID`),
  ADD KEY `usersID` (`usersID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewsID`),
  ADD KEY `productsID` (`productsID`),
  ADD KEY `usersName` (`usersName`);

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
-- AUTO_INCREMENT for table `heart`
--
ALTER TABLE `heart`
  MODIFY `heartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `heart`
--
ALTER TABLE `heart`
  ADD CONSTRAINT `heart_ibfk_1` FOREIGN KEY (`productsID`) REFERENCES `products` (`productsID`),
  ADD CONSTRAINT `heart_ibfk_2` FOREIGN KEY (`usersName`) REFERENCES `users` (`usersName`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`usersID`) REFERENCES `users` (`usersID`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`productsID`) REFERENCES `products` (`productsID`),
  ADD CONSTRAINT `reviews_ibfk_3` FOREIGN KEY (`usersName`) REFERENCES `users` (`usersName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
