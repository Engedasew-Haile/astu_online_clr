-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2017 at 11:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1astu_clearance`
--

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `clno` varchar(255) NOT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `acadyear` int(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `office` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clno`, `sid`, `acadyear`, `semester`, `office`) VALUES
('1', 'sid-001', 2017, 'II', 1),
('2', 'sid-002', 2000, 'I', 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `did` varchar(255) NOT NULL,
  `dname` varchar(255) DEFAULT NULL,
  `noofstudents` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `dname`, `noofstudents`) VALUES
('d-001', 'Computing', 59);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `did` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `email`, `name`, `password`, `position`, `did`) VALUES
('e-001', 't@g.com', 'Abule', '123', 'library', 'd-001'),
('e-002', 'tigist@yahoo.com', 'testing One', '123', 'head', 'd-001'),
('e-003', 'second@yahoo.com', 'second testing', '123', 'store', 'd-001');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `entry_year` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `did` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `email`, `name`, `sex`, `entry_year`, `duration`, `did`, `password`) VALUES
('sid-001', 'a@g.com', 'tinsae', 'f', '4000', '3', 'd-001', '123'),
('sid-002', 'testing@yahoo.com', 'Xtesting', 'Female', '2133', '411', 'd-001', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`clno`),
  ADD KEY `st_id` (`sid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `did` (`did`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `dept_id` (`did`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `clearance`
--
ALTER TABLE `clearance`
  ADD CONSTRAINT `fkstudclerance` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fkdeptemp` FOREIGN KEY (`did`) REFERENCES `department` (`did`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fkstudemp` FOREIGN KEY (`did`) REFERENCES `department` (`did`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
