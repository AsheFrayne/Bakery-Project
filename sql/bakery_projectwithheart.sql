-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql104.epizy.com
-- Generation Time: Feb 07, 2022 at 06:07 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30882975_bakeryproject`
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
(23, 6, 'Superman'),
(24, 4, 'Superhuman'),
(26, 11, 'tiffanygo24'),
(27, 4, 'tiffanygo24'),
(28, 5, 'tiffanygo24'),
(29, 6, 'tiffanygo24'),
(30, 7, 'tiffanygo24'),
(31, 8, 'tiffanygo24'),
(32, 9, 'tiffanygo24'),
(33, 12, 'tiffanygo24'),
(34, 7, 'reydan10'),
(35, 6, 'reydan10'),
(36, 6, 'Cielooooo');

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
(11, 'BlackForestDreamCake.png', '450.00', 'A delicious chocolate moist cake with whipped cream, grated chocolate and fresh cherries on top.', '01/31/2022', 'Black Forest Dreamcake', 1),
(12, 'UbePandesal.jpg', '10.00', 'Yummy ube pandesal with  a surprise cream cheese filling inside.\r\n', '02/01/2022', 'Ube Pandesal', 1);

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
(63, 'I like to try this one', '01/31/2022', 6, 'reydan10'),
(65, 'Wow malungay pandesal I want to try this.PS. already tried it and it is super good like me', '02/01/2022', 4, 'Superhuman'),
(66, 'WOW!', '02/01/2022', 4, 'jepoy'),
(67, 'GORGEOUSSSSS!!', '02/01/2022', 11, 'tiffanygo24'),
(68, 'LOVE THIS!', '02/01/2022', 4, 'tiffanygo24'),
(69, 'Yummy!!!!!', '02/01/2022', 12, 'jepoy'),
(71, 'WANNA TRY THIS TOO! <3', '02/01/2022', 5, 'tiffanygo24'),
(72, 'YUMMYYYY! :)', '02/01/2022', 6, 'tiffanygo24'),
(73, 'MY FAVE CAKE!', '02/01/2022', 7, 'tiffanygo24'),
(74, 'WILL ORDER THIS BLUEBERRY CHEESECAKE ASAP! :)', '02/01/2022', 8, 'tiffanygo24'),
(75, 'PERFECT MERYENDAAA! <3', '02/01/2022', 9, 'tiffanygo24'),
(76, 'OMGGGG MY FAVORITEE!', '02/01/2022', 11, 'tiffanygo24'),
(77, 'YUMMY UBE PANDESAL, INDEED!', '02/01/2022', 12, 'tiffanygo24'),
(78, 'Will recommend to others', '02/01/2022', 4, 'Superhuman');

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
(11, 'Superman', 'joe@example.com', 'admin123', '01/31/2022', 'default.png', 'Describe yourself!', 'user'),
(12, 'Superhuman', 'superhuman@email.com', 'superhuman098', '02/01/2022', 'teahub.io-rem-re-zero-wallpaper-673727.png', 'Rem supremacy!', 'user'),
(13, 'jepoy', 'jepoy@email.com', '12345678', '02/01/2022', 'mikey.jpg', 'Describe yourself!', 'user'),
(14, 'tiffanygo24', 'tiffanygo24@yahoo.com', 'tiffanygoganda', '02/01/2022', 'TEP22.jpg', 'Describe yourself!', 'user'),
(15, 'kololo', 'kololo@email.com', 'kololo123', '02/03/2022', 'default.png', 'Describe yourself!', 'user'),
(16, 'Cielooooo', 'cie@gmail.com', 'abcd1234', '02/05/2022', 'default.png', 'Describe yourself!', 'user');

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
  MODIFY `heartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
