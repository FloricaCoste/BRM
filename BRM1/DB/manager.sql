-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2017 at 09:21 AM
-- Server version: 8.0.0-dmr-log
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `e_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:json_array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `username`, `password`, `e_mail`, `isActive`, `roles`) VALUES
(1, 'student', '$2y$13$BW.cYudwWG9yutaCuLx/7uTmDmIHqu2T9JwkxIVK8zsurtmndWqim', 'super@admin.com', 1, '["ROLE_STUDENT"]'),
(2, 'admin', '$2y$13$Rw6wqRzqB08Fwz6RHAGZwuxawcEWU2w8c8PSlnrXfn6J9Q/GVwdCe', 'admin@admin.com', 1, '["ROLE_ADMIN"]'),
(3, 'lecture', '$2y$13$h83dV/2o56kQFUsKIE4nhux1A4GZkf3kwshlc.86kh82KZ7zuNPxi', 'coseflorica@yahoo.com', 1, '["ROLE_LECTURE"]'),
(4, 'Tom', 'tom', 'costeflorica@yahoo.com', 1, '"admin"');

-- --------------------------------------------------------

--
-- Table structure for table `bibliography`
--

CREATE TABLE `bibliography` (
  `id` int(11) NOT NULL,
  `bibID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yearPub` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chapter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `editor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placePub` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publisher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `book` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bibliography`
--

INSERT INTO `bibliography` (`id`, `bibID`, `userID`, `author`, `yearPub`, `title`, `chapter`, `editor`, `edition`, `placePub`, `publisher`, `book`) VALUES
(7, '1', '1', 'B Porebski, K Przystalski, L Nowak', '2011', 'Building PHP Applications with Symfony', '2', 'Wrox', 'second edition', 'online', 'Newbury House', 1),
(8, '0002', 'admin', 'Fromkin, V. & Rodman, R.', '2012', 'An introduction to language', '1', 'Paralanguage', '1st edition', 'Paris', 'http://www.slideshare.net/rachelfarnese/legal-ethical-and-social-issues-in-technology', 1),
(9, 'Bib0001', 'admin', 'Farnese, R', '1983', 'British Journal of Disorders of Communication', '4', 'Exforsys', '3rd Edition', 'USA', 'Longman', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `referenceID` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `journal_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_Of_Medium` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_publication` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_citation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `volumNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ISBN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `availability` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `textSummary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publicReference` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `referenceID`, `author`, `title`, `journal_title`, `type_Of_Medium`, `date_of_publication`, `date_of_citation`, `volumNumber`, `ISBN`, `location`, `category`, `availability`, `textSummary`, `publicReference`) VALUES
(1, 'Ref1', 'Becker, G', 'The gap between promise and reality:', 'CONCLUSIONS', 'Book', 'May 2015', 'June 2016', 'Volum 1', '1234', 'London', 'Cryptographic', 'hard copy', 'The gap between promise and reality: on the insecurity of XOR arbiter PUFs. International Workshop on Cryptographic Hardware and Embedded', 'Dublin'),
(2, 'Ref1', 'Delvaux, J., Peeters, R., Gu, D., Verbauwhede', 'A survey on entity authentication with strong PUFs', 'CONCLUSIONS', 'Computing Surveys', 'May 2015', 'Dec 2016', '26:1–26:42', '2345', 'Paris', 'Computing', 'online', 'The gap between promise and reality: on the insecurity of XOR arbiter PUFs. International Workshop on Cryptographic Hardware and Embedded', 'London');

-- --------------------------------------------------------

--
-- Table structure for table `referent`
--

CREATE TABLE `referent` (
  `id` int(11) NOT NULL,
  `userID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statusID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateEdit` datetime NOT NULL,
  `reader` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `referent`
--

INSERT INTO `referent` (`id`, `userID`, `statusID`, `dateEdit`, `reader`) VALUES
(1, 'student', 'student01', '2014-03-03 02:01:00', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `tagID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vote` int(11) NOT NULL,
  `tagStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `tagID`, `tagName`, `vote`, `tagStatus`) VALUES
(4, 'P1', 'PHP ID', 1, 'pending'),
(5, 'P1', 'web development ID', 1, 'pending'),
(6, 'T2', 'user interface ID', 2, 'pending'),
(7, 'P1', 'programming ID', 7, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `userID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userFirstName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userLastName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `landLine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eMail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastUpDate` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `userID`, `userFirstName`, `userLastName`, `phoneNo`, `landLine`, `address`, `eMail`, `status`, `lastUpDate`) VALUES
(1, 'tomuser', 'Tom', 'User', '0862305124', 'Dublin', '57 Achill Square', 'costeflorica@yahoo.com', '1', 'May 2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bibliography`
--
ALTER TABLE `bibliography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referent`
--
ALTER TABLE `referent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bibliography`
--
ALTER TABLE `bibliography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `referent`
--
ALTER TABLE `referent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
