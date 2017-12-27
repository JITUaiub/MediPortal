-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 06:01 AM
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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `prescription_id` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) NOT NULL,
  `problem` text,
  `appointment_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `doctor_id`, `member_id`, `prescription_id`, `date`, `time`, `status`, `problem`, `appointment_type`) VALUES
(1, 1, 1, 0, '2017-12-24', '03:00:00', 'pending', NULL, ''),
(2, 1, 1, NULL, '2017-12-12', '05:00:00', 'pending', NULL, ''),
(3, 2, 2, NULL, '2017-12-12', '05:00:00', 'pending', NULL, ''),
(4, 18, 8, NULL, '2017-12-30', '05:00:00', 'accepted', 'fever', 'online'),
(5, 2, 2, NULL, '2017-12-01', '05:05:00', 'pending', 'aaaa', 'online'),
(6, 8, 2, NULL, '2017-12-08', '04:04:00', 'pending', 'wwwwwwwwwwwwwwwwww', 'direct'),
(7, 8, 8, NULL, '2017-12-31', '10:10:00', 'pending', 'hi', 'online'),
(8, 12, 8, NULL, '2017-12-31', '00:00:00', 'pending', 'ttttttttttttttttttttttttttttttttttttttttt', 'direct'),
(9, 8, 8, NULL, '2017-12-08', '04:04:00', 'pending', '', 'online'),
(10, 8, 8, NULL, '2017-12-14', '03:03:00', 'pending', '', 'direct'),
(11, 8, 8, NULL, '2017-12-14', '16:04:00', 'pending', 'zxzxzxzxzxzxzxzxzxzxzxzxzxzxz', 'online'),
(12, 12, 10, NULL, '2017-12-15', '04:04:00', 'pending', 'hello', 'online'),
(13, 15, 10, NULL, '2017-12-15', '04:05:00', 'pending', 'mm', 'direct');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `blood_group_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `question_1` varchar(50) NOT NULL,
  `question_2` varchar(50) NOT NULL,
  `question_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `schedule` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `visit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chamber`
--

INSERT INTO `chamber` (`chamber_id`, `doctor_id`, `name`, `location`, `days`, `schedule`, `description`, `visit`) VALUES
(1, 1, 'United Hospital', 'Gulshan, Dhaka1230', 'Sat,Sun', '05:00:00', 'Saturday and Sunday I am available in united Hospital from 10 am to 5 pm . So you can contact with me', ''),
(6, 18, 'Square', 'Dhanmondi', 'mon,tue', '14:34 - 17:06', 'I am available at this time', ''),
(7, 8, 'popular', 'uttara', 'sun,wed', '14:00 - 08:00', 'i am available', '');

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
  `mobile` varchar(50) DEFAULT NULL,
  `bmdc_license` varchar(50) DEFAULT NULL,
  `account_status` varchar(50) NOT NULL,
  `profile_picture` longblob,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `username`, `name`, `gender`, `email`, `dob`, `mobile`, `bmdc_license`, `account_status`, `profile_picture`, `last_login`) VALUES
(8, 'rashed', 'rashed ', 'male', 'rashed@gmail.com', '2017-05-04', NULL, NULL, 'pending', NULL, '2017-04-04 05:00:00'),
(12, 'erfefe', 'efre', 'Other', 'eeewjndjwbdhjw', '2017-12-01', NULL, NULL, 'pending', NULL, '2017-12-25 02:35:06'),
(13, 'adadadad', 'adad adad', 'Female', 'a@gmail.com', '2017-12-07', NULL, NULL, 'pending', NULL, '2017-12-25 06:38:03'),
(14, 'adadadad', 'adad adad', 'Female', 'a@gmail.com', '2017-12-07', NULL, NULL, 'pending', NULL, '2017-12-25 06:38:13'),
(15, 'adadadad', 'adad adad', 'Female', 'a@gmail.com', '2017-12-07', NULL, NULL, 'pending', NULL, '2017-12-25 06:38:13'),
(16, 'dbdbdbd', 'dbdbdbdbbd', 'Male', 'a@gmail.com', '2017-12-03', NULL, NULL, 'pending', NULL, '2017-12-25 06:42:12'),
(17, 'popopopo', 'popopop', 'Male', 'a@gmail.com', '2017-12-05', NULL, NULL, 'pending', NULL, '2017-12-25 06:46:35'),
(18, 'lasttest', 'Last test', 'Male', 'a@gmail.com', '2017-12-06', NULL, NULL, 'pending', NULL, '2017-12-25 06:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `educational_info`
--

CREATE TABLE `educational_info` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `degree_name` varchar(50) NOT NULL,
  `passed_year` int(5) NOT NULL,
  `college` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_info`
--

INSERT INTO `educational_info` (`id`, `doctor_id`, `degree_name`, `passed_year`, `college`, `description`) VALUES
(1, 1, 'MBBS', 2012, 'Dhaka Medical College', 'bla bla bla bla'),
(2, 8, 'FCPS', 2011, 'Dhaka Medical College', 'my best part'),
(3, 18, 'Frcs', 2007, 'London Medical College', 'I am graduated');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `SenderName` varchar(100) NOT NULL,
  `RecipientName` varchar(100) NOT NULL,
  `ChatID` int(11) NOT NULL,
  `Subject` varchar(200) DEFAULT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`SenderName`, `RecipientName`, `ChatID`, `Subject`, `Status`) VALUES
('Jitu', 'aaaaa', 1, 'aaaaaaa', 'Unread');

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
  `mobile` varchar(50) DEFAULT NULL,
  `blood_group_id` int(11) DEFAULT NULL,
  `profile_picture` longblob,
  `account_status` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `name`, `gender`, `email`, `dob`, `mobile`, `blood_group_id`, `profile_picture`, `account_status`, `last_login`, `address`) VALUES
(1, 'rifat', 'rufat hasan', 'male', 'rifat@gmail.com', '1999-10-01', '012547895', 0, 0x702e706e67, 'active', '0000-00-00 00:00:00', 'o/26,mohammodpur'),
(2, 'israk', 'israk', 'Male', 'israk@gmail.com', '2017-12-01', NULL, NULL, NULL, '', '0000-00-00 00:00:00', NULL),
(8, 'aaaaa', 'mr.yyyyyy', 'Female', '', '2017-12-14', '01521493732', NULL, NULL, 'active', '2017-12-27 01:39:47', ''),
(9, 'adadadad', 'adad adad', 'Female', 'a@gmail.com', '2017-12-07', NULL, NULL, NULL, 'active', '2017-12-25 06:38:03', NULL),
(10, 'testdb', 'gcghf fghf  f', 'Other', 'a@gmail.com', '2017-12-01', NULL, NULL, NULL, 'active', '2017-12-25 06:40:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ChatID` int(11) NOT NULL,
  `Body` text NOT NULL,
  `attachment` blob,
  `Time` varchar(20) NOT NULL,
  `Date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ChatID`, `Body`, `attachment`, `Time`, `Date`) VALUES
(1, 'aaaaaaa', '', '12:55:07am', 'Wednesday 2017-12-27');

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
  `next_appointment` date NOT NULL,
  `symptoms` text NOT NULL,
  `disease` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `doctor_id`, `member_id`, `date`, `medicine_id`, `next_appointment`, `symptoms`, `disease`) VALUES
(1, 1, 1, '0000-00-00', 1, '0000-00-00', 'bla,bla,bla', 'fiver'),
(2, 18, 8, '2016-05-04', 1, '2018-12-01', 'bla nla mla', 'dengu');

-- --------------------------------------------------------

--
-- Table structure for table `professional_info`
--

CREATE TABLE `professional_info` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `medical_college` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional_info`
--

INSERT INTO `professional_info` (`id`, `doctor_id`, `title`, `department`, `medical_college`) VALUES
(2, 8, 'Assitant professor', 'Medicine', 'Dhaka Medical College'),
(3, 12, 'junior assistant', 'cancer', 'solimulla'),
(4, 18, 'consultant', 'medicine', 'rajshahi'),
(5, 13, 'Assitant professor', 'Surgery', 'sylhet');

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
('aaaaa', 'patient', 'aaaaaaaaa'),
('adadadad', 'doctor', 'adadadad'),
('dbdbdbd', 'doctor', 'dddddddd'),
('erfefe', 'doctor', '12345678'),
('jitu', 'admin', 'jitu'),
('lasttest', 'doctor', 'qqqqqqqq'),
('popopopo', 'doctor', 'pppppppp'),
('pppppp', 'doctor', 'pppppppp'),
('qqqqq', 'patient', 'qqqqqqqq'),
('rashed', 'doctor', '154rsss'),
('rifat', 'member', 'mmmmmm'),
('shuvo', 'admin', 'rpm7876'),
('testaaa', 'doctor', 'aaaaaaaa'),
('testdb', 'patient', '11111111'),
('xxxxxx', 'doctor', 'xxxxxxxx');

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
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_group_id`);

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
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ChatID`);

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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chamber`
--
ALTER TABLE `chamber`
  MODIFY `chamber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `educational_info`
--
ALTER TABLE `educational_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ChatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `professional_info`
--
ALTER TABLE `professional_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
