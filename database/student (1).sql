-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 07:31 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('rkmondal41', 'riki@nitdgp');

-- --------------------------------------------------------

--
-- Table structure for table `cgpa`
--

CREATE TABLE IF NOT EXISTS `cgpa` (
  `reg_no` int(20) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `cgpa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE IF NOT EXISTS `choice` (
  `slno` int(11) NOT NULL,
  `choiceno` int(11) NOT NULL,
  `subcode` varchar(20) NOT NULL,
  `roll` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=761 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `elective`
--

CREATE TABLE IF NOT EXISTS `elective` (
  `Name` varchar(50) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `subcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Name` varchar(100) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `gpa` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `valid` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `reg_no`, `roll_no`, `department`, `semester`, `gpa`, `dob`, `email`, `password`, `valid`, `status`) VALUES
('Riki Mondal', '20130340', '13/IT/17', 'Information Technology', 'Fifth', '7.0', '1994-07-24', 'rkmondal41@gmail.com', '1234', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `Lastdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Lastdate`) VALUES
('12-03-2016');

-- --------------------------------------------------------

--
-- Table structure for table `subjectlist`
--

CREATE TABLE IF NOT EXISTS `subjectlist` (
  `Slno` int(10) NOT NULL,
  `subcode` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `department` varchar(60) NOT NULL,
  `BT` int(10) NOT NULL,
  `CH` int(10) NOT NULL,
  `CE` int(10) NOT NULL,
  `CS` int(10) NOT NULL,
  `EC` int(10) NOT NULL,
  `EE` int(10) NOT NULL,
  `IT` int(10) NOT NULL,
  `ME` int(10) NOT NULL,
  `MM` int(10) NOT NULL,
  `Total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `slno` int(11) NOT NULL,
  `subcode` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `capacity` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cgpa`
--
ALTER TABLE `cgpa`
  ADD PRIMARY KEY (`reg_no`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `subjectlist`
--
ALTER TABLE `subjectlist`
  ADD PRIMARY KEY (`Slno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=761;
--
-- AUTO_INCREMENT for table `subjectlist`
--
ALTER TABLE `subjectlist`
  MODIFY `Slno` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
