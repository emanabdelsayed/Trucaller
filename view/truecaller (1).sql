-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 07:42 AM
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
-- Database: `truecaller`
--

-- --------------------------------------------------------

--
-- Table structure for table `block list`
--

DROP TABLE IF EXISTS `block list`;
CREATE TABLE `block list` (
  `blockId` int(11) NOT NULL,
  `blockName` varchar(30) NOT NULL,
  `blockPhone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `block list`
--

INSERT INTO `block list` (`blockId`, `blockName`, `blockPhone`) VALUES
(5, 'Mrglory3920', '1210499883');

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

DROP TABLE IF EXISTS `calls`;
CREATE TABLE `calls` (
  `call_Id` int(11) NOT NULL,
  `callerId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `incomingCall` int(11) NOT NULL,
  `outcomingCall` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

DROP TABLE IF EXISTS `chats`;
CREATE TABLE `chats` (
  `chatId` int(11) NOT NULL,
  `chatting` varchar(255) NOT NULL,
  `chatName` varchar(30) NOT NULL,
  `callerId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `contactlist`
--

DROP TABLE IF EXISTS `contactlist`;
CREATE TABLE `contactlist` (
  `listId` int(11) NOT NULL,
  `callerName` varchar(30) NOT NULL,
  `callerPhone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `contactlist`
--

INSERT INTO `contactlist` (`listId`, `callerName`, `callerPhone`) VALUES
(5, 'Aseel', '2382173'),
(6, 'eman', '7137897'),
(8, 'shamrdan', '123456789'),
(10, 'Ahmed Hesham', '1272026038'),
(13, 'Ali Ahmed', '1274335535');

-- --------------------------------------------------------

--
-- Table structure for table `known/unknown callers`
--

DROP TABLE IF EXISTS `known/unknown callers`;
CREATE TABLE `known/unknown callers` (
  `callerId` int(11) NOT NULL,
  `callerName` varchar(30) NOT NULL,
  `callerPhone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `known/unknown callers`
--

INSERT INTO `known/unknown callers` (`callerId`, `callerName`, `callerPhone`) VALUES
(3, 'Ahmed Hesham', '1272026038'),
(4, 'Ali Ahmed', '1274335535'),
(5, 'Aseel', '2382173'),
(6, 'eman', '7137897'),
(7, 'shamrdan', '123456789'),
(9, 'Mrglory3920', '1210499883');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE `records` (
  `recordId` int(11) NOT NULL,
  `recordName` varchar(30) NOT NULL,
  `recordStartTime` datetime NOT NULL,
  `recordEndTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) CHARACTER SET utf8 NOT NULL,
  `userPhone` int(11) NOT NULL,
  `userPassword` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userPhone`, `userPassword`) VALUES
(1, 'mohamed hesham', 1272026038, '202cb962ac59075b964b'),
(2, 'basha.simsim@gmail.com', 1210499883, 'e99a18c428cb38d5f260'),
(3, 'Mohsen hesham', 1181569256, '47d8673fd3554ce0129f'),
(4, 'khaled eleesh', 1011177889, 'd6525aa8638c1d8d4da5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block list`
--
ALTER TABLE `block list`
  ADD PRIMARY KEY (`blockId`) USING BTREE,
  ADD KEY `blockname` (`blockName`) USING BTREE,
  ADD KEY `blockphone` (`blockPhone`) USING BTREE;

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`call_Id`) USING BTREE,
  ADD KEY `callid` (`callerId`) USING BTREE,
  ADD KEY `userid` (`userId`) USING BTREE;

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chatId`) USING BTREE,
  ADD KEY `caller` (`callerId`) USING BTREE,
  ADD KEY `user` (`userId`) USING BTREE;

--
-- Indexes for table `contactlist`
--
ALTER TABLE `contactlist`
  ADD PRIMARY KEY (`listId`) USING BTREE,
  ADD KEY `callername` (`callerName`) USING BTREE,
  ADD KEY `callerphone` (`callerPhone`) USING BTREE;

--
-- Indexes for table `known/unknown callers`
--
ALTER TABLE `known/unknown callers`
  ADD PRIMARY KEY (`callerId`) USING BTREE,
  ADD UNIQUE KEY `phone` (`callerPhone`),
  ADD KEY `callerName` (`callerName`) USING BTREE;

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`recordId`) USING BTREE,
  ADD KEY `recordname` (`recordName`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`) USING BTREE,
  ADD UNIQUE KEY `phone` (`userPhone`) USING BTREE,
  ADD UNIQUE KEY `password` (`userPassword`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block list`
--
ALTER TABLE `block list`
  MODIFY `blockId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `call_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `chatId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactlist`
--
ALTER TABLE `contactlist`
  MODIFY `listId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `known/unknown callers`
--
ALTER TABLE `known/unknown callers`
  MODIFY `callerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `recordId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `block list`
--
ALTER TABLE `block list`
  ADD CONSTRAINT `blockname` FOREIGN KEY (`blockName`) REFERENCES `known/unknown callers` (`callerName`) ON UPDATE CASCADE,
  ADD CONSTRAINT `blockphone` FOREIGN KEY (`blockPhone`) REFERENCES `known/unknown callers` (`callerPhone`) ON UPDATE CASCADE;

--
-- Constraints for table `calls`
--
ALTER TABLE `calls`
  ADD CONSTRAINT `callid` FOREIGN KEY (`callerId`) REFERENCES `known/unknown callers` (`callerId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userid` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON UPDATE CASCADE;

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `caller` FOREIGN KEY (`callerId`) REFERENCES `known/unknown callers` (`callerId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON UPDATE CASCADE;

--
-- Constraints for table `contactlist`
--
ALTER TABLE `contactlist`
  ADD CONSTRAINT `callername` FOREIGN KEY (`callerName`) REFERENCES `known/unknown callers` (`callerName`) ON UPDATE CASCADE,
  ADD CONSTRAINT `callerphone` FOREIGN KEY (`callerPhone`) REFERENCES `known/unknown callers` (`callerPhone`) ON UPDATE CASCADE;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `recordname` FOREIGN KEY (`recordName`) REFERENCES `known/unknown callers` (`callerName`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
