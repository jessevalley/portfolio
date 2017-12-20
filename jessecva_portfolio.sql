-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2017 at 01:14 PM
-- Server version: 10.0.33-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jessecva_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `FAV_FILES`
--

CREATE TABLE `FAV_FILES` (
  `FAV_FID` int(11) NOT NULL,
  `FAV_UID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `FAV_FILES`
--

INSERT INTO `FAV_FILES` (`FAV_FID`, `FAV_UID`) VALUES
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `FILE`
--

CREATE TABLE `FILE` (
  `FID` int(11) NOT NULL,
  `TITLE` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Untitled',
  `FILE_NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CREATOR` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Jesse Charles Valley',
  `FDESC` text COLLATE utf8_unicode_ci,
  `CATEGORY` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `FORSALE` tinyint(4) NOT NULL DEFAULT '0',
  `PRICE` decimal(19,4) NOT NULL,
  `DOWNLOAD` tinyint(4) NOT NULL DEFAULT '0',
  `QTY` int(11) NOT NULL DEFAULT '1',
  `GALLERY_GID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `FILE`
--

INSERT INTO `FILE` (`FID`, `TITLE`, `FILE_NAME`, `CREATOR`, `FDESC`, `CATEGORY`, `FORSALE`, `PRICE`, `DOWNLOAD`, `QTY`, `GALLERY_GID`) VALUES
(2, 'Untitled', 'gdb_1.jpg', 'Jesse Charles Valley', NULL, 'Photography', 0, '5.0000', 0, 1, 7),
(4, 'Autumn Aspen', 'aspen.jpg', 'Jesse Charles Valley', 'Aspen in Autumn in Burnsville, MN. Available as a print on wood (20 inches long).', 'Photography', 1, '200.0000', 0, 1, 1),
(5, 'Totality 2017', 'eclipse.jpg', 'Jesse Charles Valley', 'Breaking through the rainstorm, totality emerges. Taken in Troy, KS.', 'Photography', 0, '50.0000', 0, 1, 1),
(6, 'Rainbow', 'rainbow.jpg', 'Jesse Charles Valley', 'Radical Rainbow! 2017', 'Photography', 0, '50.0000', 0, 1, 1),
(7, 'Wood Ducks in Love', 'wood_ducks.jpg', 'Jesse Charles Valley', 'Wood ducks on Lake Calhoun.', 'Photography', 0, '50.0000', 0, 1, 1),
(8, 'Gold Medal View', 'gold_medal.jpg', 'Jesse Charles Valley', 'View from the Guthrie Theater\'s Yellow Room.', 'Photography', 0, '50.0000', 0, 1, 1),
(9, 'After Stella', 'paint.jpg', 'Jesse Charles Valley', 'Painting by Jesse Valley that was inspired by the painter Stella.', 'Painting', 0, '3000.0000', 0, 1, 3),
(10, 'Encaustic Violette', 'painted.jpg', 'Jesse Charles Valley', 'Encaustic Photography of my daughter Violette.', 'Mixed Media', 0, '500.0000', 0, 1, 3),
(11, 'Untitled', 'ceramics.jpg', 'Jesse Charles Valley', 'Various functional pots and sculptures.', 'Pottery', 1, '1000.0000', 0, 1, 4),
(12, 'Cross-hatched Bowl', 'bowl.jpg', 'Jesse Charles Valley', 'Cross-hatched Bowl with red glaze.', 'Pottery', 0, '75.0000', 0, 1, 4),
(14, 'programming.php', 'programming.png', 'Jesse Charles Valley', 'Screen shot of php and html code.', 'Programming', 0, '1.0000', 0, 1, 5),
(15, 'Dunwoody SLC', 'slc.png', 'Jesse Charles Valley', 'Student Learning Collection for Dunwoody College of Technology.', 'Programming', 0, '1.0000', 0, 1, 5),
(16, 'It Is Telling', 'its_telling.png', 'Jesse Charles Valley', 'For Lisa Valley.', 'Poetry', 0, '5.0000', 0, 1, 2),
(17, 'Haiku on Seeing You Again', 'haiku.png', 'Jesse Charles Valley', 'A simple haiku.', 'Poetry', 0, '5.0000', 0, 1, 2),
(18, 'Miss Violette', 'miss_vi.jpg', 'Jesse Charles Valley', 'Portrait of my daughter, Violette near Lake Harriet.', 'Portraiture', 0, '50.0000', 0, 1, 6),
(19, 'Untitled', 'EL_33.jpg', 'Jesse Charles Valley', NULL, 'Portraiture', 0, '5.0000', 0, 1, 6),
(20, 'Untitled', 'EL_45.jpg', 'Jesse Charles Valley', NULL, 'Portraiture', 0, '5.0000', 0, 1, 6),
(21, 'Untitled', 'EL_51.jpg', 'Jesse Charles Valley', NULL, 'Portraiture', 0, '5.0000', 0, 1, 6),
(22, 'Untitled', 'EL_60.jpg', 'Jesse Charles Valley', NULL, 'Portraiture', 0, '5.0000', 0, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `GALLERY`
--

CREATE TABLE `GALLERY` (
  `GID` int(11) NOT NULL,
  `GNAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GDESC` text COLLATE utf8_unicode_ci NOT NULL,
  `GPW` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOGGED_IN` tinyint(4) DEFAULT NULL,
  `NUM_VIEWS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `GALLERY`
--

INSERT INTO `GALLERY` (`GID`, `GNAME`, `GDESC`, `GPW`, `LOGGED_IN`, `NUM_VIEWS`) VALUES
(1, 'Photography', 'Fine Art Photography by Jesse Valley.', NULL, 0, 1365),
(2, 'Poetry', 'Poetry by Jesse Valley.', NULL, 1, 909),
(3, 'Paintings', 'Paintings and Mixed Media by Jesse Valley.', NULL, 0, 920),
(4, 'Pottery', 'Pottery and Sculptures by Jesse Valley.', NULL, 0, 907),
(5, 'Programming', 'Sample programming projects by Jesse Valley.', '8fe4c11451281c094a6578e6ddbf5eed', 0, 932),
(6, 'Portraiture', 'Photography portraits by Jesse Valley of Jesse Valley Photography.', '8fe4c11451281c094a6578e6ddbf5eed', 1, 925),
(7, 'Grace De Boom', 'High school senior portraits by Jesse Valley. Portraits of Grace De Boom from Edina HS.', '8fe4c11451281c094a6578e6ddbf5eed', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `GALLERY_LIST`
--

CREATE TABLE `GALLERY_LIST` (
  `GLIST_UID` int(11) NOT NULL,
  `GLIST_GID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `GALLERY_LIST`
--

INSERT INTO `GALLERY_LIST` (`GLIST_UID`, `GLIST_GID`) VALUES
(2, 1),
(5, 2),
(6, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `UID` int(11) NOT NULL,
  `UNAME` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PWORD` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ADMIN` tinyint(4) NOT NULL DEFAULT '0',
  `FNAME` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LNAME` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MNAME` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BDAY` date NOT NULL,
  `STREET1` varchar(105) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `STREET2` varchar(105) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CITY` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `STATE` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ZIP` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PHONE_HOME` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PHONE_CELL` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TEXTS` tinyint(4) NOT NULL,
  `EMAIL` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NEWS` tinyint(4) NOT NULL,
  `ACTIVE` tinyint(4) NOT NULL DEFAULT '1',
  `ANNIV` date DEFAULT NULL,
  `CLIENT` tinyint(4) NOT NULL,
  `CREATE_TIME` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=sjis;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`UID`, `UNAME`, `PWORD`, `ADMIN`, `FNAME`, `LNAME`, `MNAME`, `BDAY`, `STREET1`, `STREET2`, `CITY`, `STATE`, `ZIP`, `PHONE_HOME`, `PHONE_CELL`, `TEXTS`, `EMAIL`, `NEWS`, `ACTIVE`, `ANNIV`, `CLIENT`, `CREATE_TIME`) VALUES
(1, 'admin', '797cb93f8b1159e6dc68b2b7fddd6c55', 1, 'Admin', 'Trator', 'Is', '2012-12-18', '818 Dunwoody Boulevard', 'Black 77', 'Minneapolis', 'MN', '55403', '6123745800', NULL, 1, 'valjesc@dunwoody.edu', 1, 1, '2015-12-12', 0, '2017-11-28 11:29:43'),
(2, 'louie', '8fe4c11451281c094a6578e6ddbf5eed', 0, 'Louie', 'Valley', 'Rainbow', '2017-05-09', '2821 Georgia Avenue S', 'Kennel A', 'St. Louis Park', 'MN', '55426', NULL, NULL, 0, 'valjesc@dunwoody.edu', 0, 1, NULL, 0, '2017-11-28 14:03:53'),
(3, 'vi', '617a4046ef07a0d9851942247a994cf9', 0, 'Violette', 'Valley', 'Anne', '0000-00-00', '2821 Georgia Ave S', '', 'St. Louis Park', 'MN', '55426', '', '6123822867', 1, 'jessevalley@gmail.com', 1, 0, '0000-00-00', 1, '2017-12-18 02:11:34'),
(4, 'Violette', '8fe4c11451281c094a6578e6ddbf5eed', 0, 'Violette', 'Valley', 'Anne', '0000-00-00', '2821 Georgia Ave S', 'Apt 3', 'Minneapolis', 'MN', '55402', '', '', 0, 'jessevalley@gmail.com', 0, 1, '0000-00-00', 0, '2017-12-18 02:14:07'),
(5, 'lav', '8fe4c11451281c094a6578e6ddbf5eed', 0, 'Lisa', 'Valley', 'Anne', '0000-00-00', '2821 Georgia Ave S', '', 'St. Louis Park', 'MN', '55426', '', '6123873256', 1, 'laricke@hotmail.com', 1, 1, '2005-04-23', 1, '2017-12-18 02:18:56'),
(6, 'jesse', '8fe4c11451281c094a6578e6ddbf5eed', 0, 'Jesse', 'Valley', 'Charles', '1980-02-25', '2821 Georgia Ave S', '', 'St. Louis Park', 'MN', '55426', '', '6123822867', 1, 'jessevalley@gmail.com', 1, 1, '2005-04-23', 0, '2017-12-18 02:23:39'),
(7, 'amalan', '8fe4c11451281c094a6578e6ddbf5eed', 0, 'Amalan', 'Pulendran', '', '1999-12-18', '111 South Ave', '#5', 'Stillwater', 'MN', '55489', '', '', 0, 'to@q.com', 1, 1, '0000-00-00', 0, '2017-12-18 02:35:57'),
(8, 'chris', '8fe4c11451281c094a6578e6ddbf5eed', 0, 'Chris', 'Fulton', '', '1979-12-18', '875 Main St.', 'Penthouse', 'Minneapolis', 'MN', '55402', '', '', 0, 'chris@gmail.com', 1, 1, '0000-00-00', 0, '2017-12-18 10:20:24'),
(9, 'iphone', '8fe4c11451281c094a6578e6ddbf5eed', 0, 'iPhone', 'McApple', '', '2017-12-21', '111 Apple Jack Rd', '', 'Hickville', 'MN', '55411', '', '', 0, 'mac@apple.com', 0, 1, '0000-00-00', 0, '2017-12-18 10:24:27'),
(10, 'cifulton', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'Chris', 'Fulton', 'I', '2017-12-22', '5012 Humboult Lane', '', 'Minneapolis', 'MN', '55430', '', '', 1, 'cfulton@dunwoody.edu', 1, 1, '2017-03-15', 0, '2017-12-18 12:33:54'),
(11, 'charliez', 'af88a0ae641589b908fa8b31f0fcf6e1', 0, 'charlie', 'zmuda', 'Michael', '1990-05-12', '3301 US-169 Apt 256', '', 'Plymouth', 'MN', '55441', '6128759933', '', 0, 'charliezmuda@gmail.com', 1, 1, '0000-00-00', 1, '2017-12-18 12:49:27'),
(12, 'KiaSoul', 'ab99f8f1c87bb63eee8ddc8688ce329f', 0, 'Kia', 'Soul', '', '2016-12-19', '2821 Georgia Ave S', '', 'Minneapolis', 'MN', '55426', '6123822867', '', 0, 'jessevalley@me.com', 0, 1, '0000-00-00', 1, '2017-12-18 17:39:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FAV_FILES`
--
ALTER TABLE `FAV_FILES`
  ADD PRIMARY KEY (`FAV_UID`,`FAV_FID`),
  ADD KEY `FAV_UID_idx` (`FAV_UID`),
  ADD KEY `FAV_FID` (`FAV_FID`);

--
-- Indexes for table `FILE`
--
ALTER TABLE `FILE`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `fk_FILE_GALLERY_idx` (`GALLERY_GID`);

--
-- Indexes for table `GALLERY`
--
ALTER TABLE `GALLERY`
  ADD PRIMARY KEY (`GID`),
  ADD UNIQUE KEY `GID` (`GID`),
  ADD UNIQUE KEY `GNAME` (`GNAME`);

--
-- Indexes for table `GALLERY_LIST`
--
ALTER TABLE `GALLERY_LIST`
  ADD PRIMARY KEY (`GLIST_GID`,`GLIST_UID`),
  ADD KEY `GLIST_GID_idx` (`GLIST_GID`),
  ADD KEY `GLIST_UID` (`GLIST_UID`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`UID`),
  ADD UNIQUE KEY `UNAME_UNIQUE` (`UNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `FILE`
--
ALTER TABLE `FILE`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `FAV_FILES`
--
ALTER TABLE `FAV_FILES`
  ADD CONSTRAINT `FAV_FID` FOREIGN KEY (`FAV_FID`) REFERENCES `FILE` (`FID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `FAV_UID` FOREIGN KEY (`FAV_UID`) REFERENCES `USER` (`UID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `FILE`
--
ALTER TABLE `FILE`
  ADD CONSTRAINT `fk_FILE_GALLERY` FOREIGN KEY (`GALLERY_GID`) REFERENCES `GALLERY` (`GID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `GALLERY_LIST`
--
ALTER TABLE `GALLERY_LIST`
  ADD CONSTRAINT `GLIST_GID` FOREIGN KEY (`GLIST_GID`) REFERENCES `GALLERY` (`GID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `GLIST_UID` FOREIGN KEY (`GLIST_UID`) REFERENCES `USER` (`UID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
