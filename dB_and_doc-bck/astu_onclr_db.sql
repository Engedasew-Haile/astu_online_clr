-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2017 at 12:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astu_onclr_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `astu_materials`
--

CREATE TABLE `astu_materials` (
  `mat_id` varchar(20) NOT NULL,
  `mat_name` varchar(20) NOT NULL,
  `mat_ quantity` int(11) NOT NULL,
  `mat_user_id` varchar(50) NOT NULL,
  `borrowed_date` date NOT NULL,
  `mat_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astu_materials`
--

INSERT INTO `astu_materials` (`mat_id`, `mat_name`, `mat_ quantity`, `mat_user_id`, `borrowed_date`, `mat_status`) VALUES
('astu/12', 'mouse', 2, 'astu/std/123', '2017-06-28', '');

-- --------------------------------------------------------

--
-- Table structure for table `clr_tb4both`
--

CREATE TABLE `clr_tb4both` (
  `id` varchar(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `approval_datetime` date NOT NULL,
  `clr_status` varchar(10) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clr_tb4both`
--

INSERT INTO `clr_tb4both` (`id`, `dept_name`, `approval_datetime`, `clr_status`, `remark`) VALUES
('astu/stf/003', 'Human Resource', '0000-00-00', '', 'the test'),
('astu/stf/004', 'Finance and Buget', '0000-00-00', '', 'the finance'),
('astu/stud/001', 'Computing', '0000-00-00', '', ''),
('astu/stud/002', 'Civil Eng', '0000-00-00', '', ''),
('astu/stud/003', 'Elt Eng', '0000-00-00', '', 'the elt');

-- --------------------------------------------------------

--
-- Table structure for table `user_basic_info`
--

CREATE TABLE `user_basic_info` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userp_key` varchar(50) NOT NULL,
  `cuserp_key` varchar(50) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_basic_info`
--

INSERT INTO `user_basic_info` (`id`, `name`, `user_role`, `email`, `userp_key`, `cuserp_key`, `created_date`) VALUES
('astu/stf/001', 'Tadese Haile', 'admin_staff', 'tdabule@yahoo.com', '123', '123', '2017-06-08'),
('astu/stf/004', 'Henok Meskele', 'regi_assis', 'bule@yahoo.com', '123', '123', '2017-06-08'),
('astu/stf/008', 'Gebre Meskele', 'system_admin', 'Gebre@yahoo.com', '123', '123', '2017-06-08'),
('astu/stf/021', 'Selam Yilma', 'admin_secr', 'selam@yahoo.com', '123', '123', '0000-00-00'),
('astu/stf/1', 'Gebi Hule', 'acad_staff', 'gebi@yahoo.com', '123', '123', '0000-00-00'),
('astu/stf/21', 'Afiyat Mohammed', 'library', 'afiyat@yahoo.com', '123', '123', '0000-00-00'),
('astu/stud/001', 'Tigist Birhanu', 'student', '12a@yahoo.com', '123', '123', '2017-06-08'),
('astu/stud/002', 'Mimi Haile', 'student', 'mimi@yahoo.com', '123', '123', '0000-00-00'),
('astu/stud/003', 'Gebi Wchi', 'student', '123abule@gmail.com', '123', '123', '2017-06-08'),
('astu/stud/004', 'Tinsaye Henok', 'student', 'abule@yahoo.com', '123', '123', '2017-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `institution_name` varchar(50) NOT NULL,
  `staff_position` varchar(50) NOT NULL,
  `entry_year` year(4) NOT NULL,
  `acad_year` year(4) NOT NULL,
  `year_circ` varchar(50) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `prog_type` varchar(50) NOT NULL,
  `reason_4clr` varchar(50) NOT NULL,
  `clr_status` varchar(15) NOT NULL,
  `remark` varchar(250) NOT NULL,
  `approval_datetime` date NOT NULL,
  `stud_comment` varchar(1000) NOT NULL,
  `staff_comment` varchar(1000) NOT NULL,
  `phone_num` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `sex`, `dept_name`, `institution_name`, `staff_position`, `entry_year`, `acad_year`, `year_circ`, `semester`, `prog_type`, `reason_4clr`, `clr_status`, `remark`, `approval_datetime`, `stud_comment`, `staff_comment`, `phone_num`) VALUES
('astu/stf/003', 'Male', 'Human Resource', '', '', 0000, 0000, '', '', '', 'terminating staff', '', '', '0000-00-00', '', '', ''),
('astu/stf/004', 'Male', 'Property Control', '', '', 0000, 0000, '', '', '', 'terminating staff', '', '', '0000-00-00', '', '', ''),
('astu/stf/5', '', 'Property control', '', 'Zebhgan', 0000, 0000, '', '', '', '', '', '', '0000-00-00', '', '', ''),
('astu/stud/001', '', 'computing', '', '', 2009, 2009, '1', 'III', '', 'Graduate Class', '', 'yyyyy', '0000-00-00', '', '', ''),
('astu/stud/002', 'Female', 'Computing', '', '', 2007, 2017, '4', 'II', '', 'End of year', '', 'kkkkkk', '0000-00-00', '', '', '1234567890'),
('astu/stud/003', 'Male', 'CivilEng', '', '', 2017, 2016, '5', 'I', '', 'Graduate Class', '', 'xxxxx', '0000-00-00', '', '', '12345678'),
('astu/stud/004', 'Male', 'Mechanical Engineering', '', '', 2009, 2017, '5th Year', 'III Semester', 'Postgraduate', 'No, End Of Academic Year', '', 'bbbbbbb', '0000-00-00', '', '', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `astu_materials`
--
ALTER TABLE `astu_materials`
  ADD PRIMARY KEY (`mat_id`);

--
-- Indexes for table `clr_tb4both`
--
ALTER TABLE `clr_tb4both`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_basic_info`
--
ALTER TABLE `user_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
