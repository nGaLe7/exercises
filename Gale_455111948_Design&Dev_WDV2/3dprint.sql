-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 17, 2018 at 07:40 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3dprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `loginID` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`loginID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginID`, `username`, `password`) VALUES
(1, 'FirstUser', 'FirstPasswrd'),
(2, 'SecondUser', 'SecondPassword'),
(3, 'ThirdUser', 'ThirdPassword'),
(4, 'username', 'password'),
(5, 'ninth', '$2y$10$AamBEbgRDiyib0.qlm.Dj..3dwHWaQgckUS1xcUSRI70zc9gl8Iwi'),
(6, 'hhh', '$2y$10$.rGhzeNfn89Q3sUJVOvfsOGaFwL9u7TIPCjg.tLFrIavG1i0vLKue'),
(7, 'gggg', '$2y$10$JNlX8oEsDtO8Cm7URV4H9OFQlGBklYUcSy/aZXXlgdUlnTP4QVFji'),
(8, 'admin', '$2y$10$WXlRlucI/8LeJkyD0Cja4u8DUbNgCrdivSKBNWsIkobgoNcXTR0Eu'),
(9, 'Low_Value_User', '$2y$10$qG6qdA5LQ.Fg/LnJr6TjgeS2az.sL4aJH1Io3PFidvUFzvTqY7Q6O');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `partnerID` int(10) NOT NULL AUTO_INCREMENT,
  `PartnerName` varchar(255) NOT NULL,
  `PartnerLeaderName` varchar(255) NOT NULL,
  `PartnerContact` varchar(255) NOT NULL,
  PRIMARY KEY (`partnerID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partnerID`, `PartnerName`, `PartnerLeaderName`, `PartnerContact`) VALUES
(1, 'Joe\'s Construct', 'Joe D', '1800 555 555'),
(2, 'National Build', 'Alec T', '1300 555 999'),
(3, 'Zee food print', 'Chef Zee L', '0400882942');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `projectID` int(10) NOT NULL AUTO_INCREMENT,
  `Article` varchar(255) NOT NULL,
  `SiteReferenced` varchar(255) NOT NULL,
  `ArchiveArticle` varchar(255) NOT NULL,
  `ProjectType` varchar(255) NOT NULL,
  `partnerID` int(10) NOT NULL,
  PRIMARY KEY (`projectID`),
  KEY `partnerID` (`partnerID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `Article`, `SiteReferenced`, `ArchiveArticle`, `ProjectType`, `partnerID`) VALUES
(1, 'Building Printing', 'www.homeprinting.com', 'no', 'Home Construction', 2),
(2, 'Furniture printing ', 'www.joefurnitureprint.com', 'no', 'furniture print', 1),
(3, 'Food Print', 'www.zeefoodprint.com.au', 'yes', 'Food', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `usersID` int(10) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(255) NOT NULL,
  `DateOfBirth` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `MobileNumber` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `accessRights` varchar(255) NOT NULL,
  PRIMARY KEY (`usersID`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `FullName`, `DateOfBirth`, `email`, `MobileNumber`, `Address`, `accessRights`) VALUES
(1, 'Joe Dee', '19/09/1987', 'joe@build.com.au', '0400298198', '41 That St Aspley', 'user'),
(2, 'Alec Tred', '18/09/1977', 'alec@construct.com.au', '0402177241', '44 This Rd Chermside', 'user'),
(3, 'Zee Lee', '19/07/1989', 'zee@foodprint.com', '0499223113', '67 Eats St Aspley', 'user'),
(4, 'UsEr1', '31/06/1989', 'text@gmail.com', '0419189606', '29 that street chermside', 'user'),
(71, 'name', '07/07/2007', 'email', '0400116226', 'address', 'accessRights'),
(72, 'gggg', '2018-09-10', 'gggg', 'gggg', 'gggg', 'gggg'),
(73, 'Main admin', '2018-09-17', 'admin@fixedit.com.su', '1300 443 243', '13 Residential Rd Brisbane', 'Administration'),
(74, 'unimportant', '1967-06-14', 'lowe@ihavesomeworth.com', '0477993243', '44 Fleet Street', 'View');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`partnerID`) REFERENCES `partners` (`partnerID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
