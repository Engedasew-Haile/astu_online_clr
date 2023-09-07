-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2017 at 06:02 AM
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
-
CREATE TABLE `clearance` (
  `clno` int(255) NOT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `acadyear` int(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `office` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`clno`, `sid`, `acadyear`, `semester`, `office`) VALUES
(30, 'sid-002', 2017, 'II', 1),
(31, 'sid-100', 2017, 'II', 1),
(32, 'sid-009', 2017, 'II', 1);

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
('d-001', 'Computing', 59),
('d-002', 'Civil-Engineering', 100),
('d-003', 'Eletrical Engineering', 123),
('d-Lib', 'Library', NULL),
('d-Regi', 'Office of Registrar', NULL),
('d-studAfr', 'Student Afters', NULL),
('sys-admin', 'Sys-Admin', NULL);

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
('e-002', 'testing2@yahoo.com', 'Yuhne Abera', '123', 'computing', 'd-001'),
('e-003', 'tafa@tafa.com', 'Tafa Teftafa', '123', 'CivlEng', 'd-002'),
('e-004', 'hagos@hagos.com', 'Hagos Teklu', 'ecx123', 'EltEngr', 'd-003'),
('e-005', 'Abera@astu.com', 'Abera Belew', '123', 'library', 'd-Lib'),
('e-regi_assistant', 'Henok@astu.com', 'Henok Lema', '123', 'regi_assis', 'd-Regi'),
('e-stud_afr', 'Aynalem@astu.com', 'Aynalem Abera', '123', 'stud_affairs', 'd-studAfr'),
('e-sys-admin', 'getachew@astu.com', 'Getachew Getachew', '123', 'system_admin', 'sys-admin');

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
  `reason_4clr` varchar(250) DEFAULT NULL,
  `did` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `email`, `name`, `sex`, `entry_year`, `duration`, `reason_4clr`, `did`, `password`) VALUES
('sid-001', 'Xafiyat@g.com ', 'Afiyat Gebi', 'Female', '2017', '7', 'Yes, Graduate class', 'd-001', '123'),
('sid-002', 'Yanet@yahoo.com ', 'Yanet Abera', 'Female', '2090', '5', 'Yes, Graduate class', 'd-001', '321'),
('sid-009', 'Zelalem@yahoo.com ', 'Zelalem Jirata Nazareth', 'Female', '2020', '6', 'Yes, Graduate class', 'd-001', '123'),
('sid-011', 'tdabule@yahoo.com', 'Abule Guma', 'Male', '2020', '3', 'Yes, Graduate class', 'd-003', 'ttx'),
('sid-012', 'haile@yahoo.com', 'Haile Guma', 'Male', '2019', '5', 'No, End Of Academic Year', 'd-003', 'onex'),
('sid-013', 'melaku@yahoo.com', 'Mekaku Haile', 'Male', '2100', '4', 'No, End Of Academic Year', 'd-002', '999'),
('sid-014', 'fesawhenok@yahoo.com', 'Henok Fesaw', 'Male', '2019', '4', 'Yes, Graduate class', 'd-002', '123'),
('sid-100', 'nati@astu.com ', 'Nati xx', 'Male', '2134', '4', 'Yes, Graduate class', 'd-001', 'asd');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `clno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
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
