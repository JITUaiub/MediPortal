-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2017 at 09:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'admin', 'Md. Nashid Kamal', 'Male', 'nashid@example.com', '1996-05-20', '01621580578', ''),
(2, 'Jitu', 'Jitu Khan', 'Male', 'jitu@example.com', '1994-07-17', '01713789047', '');

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
(4, 1, 4, NULL, '2017-12-28', '07:00:00', 'pending', 'fever', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `blood_group_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `question_1` varchar(50) NOT NULL,
  `question_2` varchar(50) NOT NULL,
  `question_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`blood_group_id`, `member_id`, `status`, `blood_group`, `question_1`, `question_2`, `question_3`) VALUES
(4, 5, 'on', 'A(+)', 'Over 50 Kg', 'Good', 'yes');

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
(1, 1, 'Apollo Hospital', 'Bashundhara', 'tue,thu', '5:00 PM - 8:00 PM', ' Bla bla bla bla', ''),
(2, 2, 'United Hospital', 'Gulshan', 'sun,mon,wed,thu', '5:00 PM - 11:00 PM', 'I am available ', ''),
(3, 2, 'Apollo Hospital', 'Uttara', 'sat,wed,fri', '7:00 PM - 12:00 PM', 'I am available', '');

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
(1, 'doctor', 'Himu', 'Male', 'himu15@gmail.com', '1995-02-25', '01685940625', 'DMC2017SA15', 'active', NULL, '2017-12-28 07:25:17'),
(2, 'susmoy', 'Susmoy Roy', 'Male', 'susmoy@gmail.com', '1994-11-12', NULL, NULL, 'pending', NULL, '2017-12-28 09:10:37'),
(3, 'zahid', 'Zahid Rahman', 'Male', 'zahid@yahoo.com', '1998-09-17', NULL, NULL, 'pending', NULL, '2017-12-28 09:11:55');

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
(1, 1, 'MBBS', 1998, 'Gazipurt Medical College', 'Graduated'),
(2, 2, 'FCPS', 2016, 'London Medical College', 'Graduate\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `Author` varchar(100) NOT NULL,
  `Question` text NOT NULL,
  `Answer` text,
  `Time` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `category`, `Author`, `Question`, `Answer`, `Time`, `Date`, `status`) VALUES
(1, 'Mediportal', 'Admin', 'What is Mediportal?', 'Mediportal is a online doctor appointment system made for general users and doctor''s accross the world. Get an appointment today. ', '3:06:12 AM', '24-11-2017', 'Read'),
(2, 'Mediportal', 'Admin', 'What is Mediportal''s Hotline?', 'Currently we don''t have any helpline number. Soon we''ll add hotline number(toll free). ', '3:07:12 AM', '24-11-2017', 'Read'),
(3, 'Appointments', 'Admin', 'How to get an appointment?', 'Get an appointment by following these step: 1. Register with us with email and a username. 2. Login and go to new Appointment. 3. Fill in the details. 4. You''re now good to go. ', '3:08:12 AM', '24-11-2017', 'Read'),
(4, 'Appointments', 'Admin', 'Can any doctor turn off taking appointment?', 'Yes. You can change that option under Manage Appointments. ', '3:09:12 AM', '24-11-2017', 'Read'),
(5, 'Econsultation', 'Admin', 'How to get econsultation?', 'Ask your doctor for an econsultation session. Get an appointment and ask him for e-consultation. Doctor''s attention required to access that features. ', '3:10:12 AM', '24-11-2017', 'Read'),
(6, 'Econsultation', 'Admin', 'Can we make live conversation here?', 'Currently we don''t have any facilities for live consultation, We are working on it. Please wait for further updates. ', '3:11:12 AM', '24-11-2017', 'Read'),
(7, 'Price and Fees', 'Admin', 'Is Mediportal free?', 'Mediportal is full free for general users. You can request for an appointment for free. You need to pay 5% of your fee if you register as an doctor. ', '3:12:12 AM', '24-11-2017', 'Read'),
(8, 'Price and Fees', 'Admin', 'What is Mediportal''s Doctor''s visit?', 'It differs from doctor to doctor. You can see doctor visit from his profile page. ', '3:13:12 AM', '24-11-2017', 'Read');

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

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` varchar(50) NOT NULL,
  `totaldays` varchar(255) NOT NULL,
  `member_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `name`, `time`, `totaldays`, `member_id`) VALUES
(1, 'Napa', '10', '1+0+1', 1);

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
(1, 'patient', 'shuvo', 'Male', 'shuvo95@yahoo.com', '1994-08-29', '0167494424', NULL, 0x6e65772e6a7067, 'active', '2017-12-28 07:26:46', NULL),
(2, 'komol', 'Komol Hasan', 'Female', 'komol@gmail.com', '1995-01-01', NULL, NULL, NULL, 'active', '2017-12-28 09:04:51', NULL),
(3, 'tasnim', 'Tasnim Khan', 'Male', 'tasnim15@gmail.com', '1996-03-26', NULL, NULL, NULL, 'active', '2017-12-28 09:05:46', NULL),
(4, 'ratul', 'Ratul Bakshi', 'Male', 'ratul@gmail.com', '1995-10-17', NULL, NULL, NULL, 'active', '2017-12-28 09:08:57', NULL),
(5, 'faria', 'Faria Hasan', 'Female', 'faria@gmail.com', '1999-02-23', '01704075642', NULL, NULL, 'active', '2017-12-28 09:13:55', NULL);

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
(1, 1, 1, '2017-12-28', 1, '2017-12-30', '                                               I am affected from fever                                            ', '                               Fever                \r\n                                            ');

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
(1, 1, 'Assistant Professor', 'Medicine', 'Dhaka Medical college');

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
('admin', 'admin', 'admin'),
('doctor', 'doctor', 'doctor'),
('faria', 'patient', 'faria'),
('Jitu', 'admin', 'admin'),
('komol', 'patient', 'komol'),
('patient', 'patient', 'patient'),
('ratul', 'patient', 'ratul'),
('susmoy', 'doctor', 'susmoy'),
('tasnim', 'patient', 'tasnim'),
('zahid', 'doctor', 'zahid');

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
  ADD PRIMARY KEY (`blood_group_id`),
  ADD KEY `member_id` (`member_id`);

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chamber`
--
ALTER TABLE `chamber`
  MODIFY `chamber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `educational_info`
--
ALTER TABLE `educational_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ChatID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `professional_info`
--
ALTER TABLE `professional_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Constraints for table `blood`
--
ALTER TABLE `blood`
  ADD CONSTRAINT `blood_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
