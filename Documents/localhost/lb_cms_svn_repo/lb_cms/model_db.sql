-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2015 at 04:06 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `model_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Models`
--

CREATE TABLE `Models` (
  `ModelID` int(11) NOT NULL,
  `ModelName` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `FbLink` varchar(50) DEFAULT NULL,
  `TwitterLink` varchar(50) DEFAULT NULL,
  `InstagramLink` varchar(50) DEFAULT NULL,
  `Image` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Models`
--

INSERT INTO `Models` (`ModelID`, `ModelName`, `Age`, `Address`, `FbLink`, `TwitterLink`, `InstagramLink`, `Image`) VALUES
(1, '', 0, '', '', '', '', NULL),
(2, 'John', 13, '89', 'fb', 'twitter', 'ig', 'catwoman1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'bob', '9a618248b64db62d15b300a07b00580b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Models`
--
ALTER TABLE `Models`
  ADD PRIMARY KEY (`ModelID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Models`
--
ALTER TABLE `Models`
  MODIFY `ModelID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;