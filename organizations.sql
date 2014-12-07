-- phpMyAdmin SQL Dump
-- version 4.2.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2014 at 12:45 AM
-- Server version: 5.5.36-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `san`
--

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `organization_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `cause` enum('Environment','Social Justice','Religion','Education') NOT NULL,
  `skill1` enum('Community Organizing','Programming','Event Organizing','Networking') DEFAULT NULL,
  `skill2` enum('Community Organizing','Programming','Event Organizing','Networking') DEFAULT NULL,
  `skill3` enum('Community Organizing','Programming','Event Organizing','Networking') DEFAULT NULL,
  `skill_wanted1` enum('Community Organizing','Programming','Event Organizing','Networking') DEFAULT NULL,
  `skill_wanted2` enum('Community Organizing','Programming','Event Organizing','Networking') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `username`, `password`, `organization_name`, `email`, `description`, `cause`, `skill1`, `skill2`, `skill3`, `skill_wanted1`, `skill_wanted2`) VALUES
(7, 'Example ', '$1$dclXZXte$aBBYYm7BEl3ikJmtu2qxp0', 'Example Organization', 'example@example.com', 'n/a', 'Environment', 'Community Organizing', 'Programming', '', 'Event Organizing', ''),
(8, 'example2', '$1$ZflGuEEH$J9B9EVvHClfI0jx7DbVJa/', 'example2', 'example2@example.com', 'example organization', 'Education', 'Networking', 'Event Organizing', '', 'Community Organizing', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
 ADD PRIMARY KEY (`id`), ADD KEY `organization_name` (`organization_name`), ADD KEY `cause` (`cause`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
