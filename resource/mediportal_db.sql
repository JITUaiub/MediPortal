-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 01:54 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediportal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `profile_picture` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `name`, `gender`, `email`, `dob`, `mobile`, `profile_picture`) VALUES
(1, 'shuvo', 'mehedi hasan shuvo', 'male', 'rpm_shuvo@outlook.com', '1995-03-19', '01521493732', 0x702e706e67),
(2, 'jitu', 'nashid kamal', 'male', 'kamal@gmail.com', '1995-12-12', '01758478754', 0x702e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `appoinment_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) NOT NULL,
  `prescription_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`appoinment_id`, `doctor_id`, `member_id`, `date`, `time`, `status`, `prescription_id`) VALUES
(1, 1, 1, '2017-12-24', '03:00:00', 'pending', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chamber`
--

CREATE TABLE `chamber` (
  `chamber_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `days` text NOT NULL,
  `time` time NOT NULL,
  `description` text NOT NULL,
  `visit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chamber`
--

INSERT INTO `chamber` (`chamber_id`, `doctor_id`, `name`, `location`, `days`, `time`, `description`, `visit`) VALUES
(1, 1, 'United Hospital', 'Gulshan, Dhaka1230', 'Sat,Sun', '05:00:00', 'Saturday and Sunday I am available in united Hospital from 10 am to 5 pm . So you can contact with me', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `bmdc_license` varchar(50) NOT NULL,
  `account_status` varchar(50) NOT NULL,
  `profile_picture` longblob NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `username`, `name`, `gender`, `email`, `dob`, `mobile`, `bmdc_license`, `account_status`, `profile_picture`, `last_login`) VALUES
(1, 'rashed', 'rashed ahmed', 'male', 'rashed@gmail.com', '1995-01-10', '01521493732', '15-45848', 'active', 0x702e706e67, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `educational_info`
--

CREATE TABLE `educational_info` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `degree_name` varchar(50) NOT NULL,
  `passed_year` year(4) NOT NULL,
  `college` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_info`
--

INSERT INTO `educational_info` (`id`, `doctor_id`, `degree_name`, `passed_year`, `college`, `description`) VALUES
(1, 1, 'MBBS', 2012, 'Dhaka Medical College', 'bla bla bla bla');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `totaldays` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `name`, `time`, `totaldays`) VALUES
(1, 'napa', '06:00:03', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `profile_picture` longblob NOT NULL,
  `account_status` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `name`, `gender`, `email`, `dob`, `mobile`, `blood_group`, `profile_picture`, `account_status`, `last_login`, `address`) VALUES
(1, 'rifat', 'rufat hasan', 'male', 'rifat@gmail.com', '1999-10-01', '012547895', 'a+', 0x702e706e67, 'active', '0000-00-00 00:00:00', 'o/26,mohammodpur');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `next_appoinment` date NOT NULL,
  `symptoms` text NOT NULL,
  `disease` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `doctor_id`, `member_id`, `date`, `medicine_id`, `next_appoinment`, `symptoms`, `disease`) VALUES
(1, 1, 1, '0000-00-00', 1, '0000-00-00', 'bla,bla,bla', 'fiver');

-- --------------------------------------------------------

--
-- Table structure for table `professional_info`
--

CREATE TABLE `professional_info` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `medical_college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_info`
--

INSERT INTO `professional_info` (`id`, `doctor_id`, `title`, `medical_college`) VALUES
(1, 1, 'Assistant Professor', 'Sir Sollimullah Medical College');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `type`, `password`) VALUES
('jitu', 'admin', 'jitu'),
('rashed', 'doctor', '154rsss'),
('rifat', 'member', 'mmmmmm'),
('shuvo', 'admin', 'rpm7876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`appoinment_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `prescription_id` (`prescription_id`);

--
-- Indexes for table `chamber`
--
ALTER TABLE `chamber`
  ADD PRIMARY KEY (`chamber_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `educational_info`
--
ALTER TABLE `educational_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `professional_info`
--
ALTER TABLE `professional_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `appoinment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chamber`
--
ALTER TABLE `chamber`
  MODIFY `chamber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `educational_info`
--
ALTER TABLE `educational_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `professional_info`
--
ALTER TABLE `professional_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `appoinment_ibfk_3` FOREIGN KEY (`prescription_id`) REFERENCES `prescription` (`prescription_id`);

--
-- Constraints for table `chamber`
--
ALTER TABLE `chamber`
  ADD CONSTRAINT `chamber_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `educational_info`
--
ALTER TABLE `educational_info`
  ADD CONSTRAINT `educational_info_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `prescription`
--
ALTER TABLE `prescription`
  ADD CONSTRAINT `prescription_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`),
  ADD CONSTRAINT `prescription_ibfk_2` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `professional_info`
--
ALTER TABLE `professional_info`
  ADD CONSTRAINT `professional_info_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
