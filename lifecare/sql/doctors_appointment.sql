-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 08:06 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctors_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(5) NOT NULL,
  `patientemail` varchar(50) DEFAULT NULL,
  `doctoremail` varchar(50) DEFAULT NULL,
  `disease` varchar(40) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `apptime` varchar(50) DEFAULT NULL,
  `appdate` varchar(50) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patientemail`, `doctoremail`, `disease`, `description`, `apptime`, `appdate`, `status`) VALUES
(2, 'pankaj@gmail.com', 'ravi@gmail.com', 'cough fever', 'cough from 2 days', '17:00', '2020-06-28', 'Accept'),
(3, 'pankaj@gmail.com', 'abcd@gmail.com', 'maleria', 'fever from 2 days', '17:00', '2020-07-11', 'Pending'),
(4, 'nana@gmail.com', 'abcd@gmail.com', 'jaundice', 'severe fever', '15:10', '2020-07-17', 'Accept'),
(5, 'pankaj@gmail.com', 'harish@gmail.com', 'cough fever', 'Fever From 2 days', '17:00', '2020-07-27', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `id` int(5) NOT NULL,
  `posttitle` varchar(300) DEFAULT NULL,
  `postdetail` longtext DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `postdate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`id`, `posttitle`, `postdetail`, `image`, `postdate`) VALUES
(2, 'Supporting the research community at this time', '<p>Springer Nature is committed to supporting the global response to emerging outbreaks by enabling fast and direct access to the latest available research, data, and resources for the research community.</p>\r\n\r\n<p>This collection draws together research from across BMC journals, including broad scope titles such as&nbsp;<em>BMC Public Health, Virology Journal&nbsp;</em>and<em>&nbsp;Respiratory Research,</em>&nbsp;and our more specialist journals such as&nbsp;<em>Globalization and Health&nbsp;</em>and&nbsp;<em>Conflict and Health.&nbsp;</em></p>\r\n', 'images/Post/post2.jpg', '28-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE `clinics` (
  `clinic_id` int(100) NOT NULL,
  `d_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `location` varchar(150) DEFAULT NULL,
  `timing_ms` varchar(200) NOT NULL,
  `timing_sun` varchar(200) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `mobile_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinics`
--

INSERT INTO `clinics` (`clinic_id`, `d_id`, `name`, `address`, `location`, `timing_ms`, `timing_sun`, `contact_no`, `mobile_no`) VALUES
(0, 1, 'Clinic123', 'Minal Residency', 'Bhopal', '10 am to 7 pm', '3 pm to 5 pm', '7566011133', '7987851154');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_list`
--

CREATE TABLE `doctor_list` (
  `did` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `speciality` varchar(100) NOT NULL,
  `fees` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_list`
--

INSERT INTO `doctor_list` (`did`, `name`, `image`, `speciality`, `fees`, `address`, `description`, `emailid`, `contact`, `password`) VALUES
(1, 'harish', 'images/Doctors/avatarboy923.jpg', 'heart', '200', 'indrapuri', 'Heart Specialist', 'harish@gmail.com', '8602768211', 'harish'),
(29, 'Rahul', 'images/Doctors/avatarboy923.jpg', 'eye', '500', '303 sweet homes Indrapuri\r\nIndrapuri C Sector', 'eye specialist 10 year experience', 'rahul@gmail.com', '8602768345', 'rahul'),
(30, 'abcd', 'images/Doctors/avatarboy923.jpg', 'nose', '500', '303 sweet homes Indrapuri\r\nIndrapuri C Sector', '5 yr experience', 'abcd@gmail.com', '8602768299', 'abcd'),
(31, 'ratnesh', 'images/Doctors/avatarboy923.jpg', 'Nose', '500', 'indrapuri', 'hdjs', 'ratnesh@gmail.com', '9229465038', '1234'),
(32, 'xyz', 'images/Doctors/avatarboy.jpg', 'Nose', '500', 'ayodhya bypass\r\nH Sector', '5 yr experience', 'xyz@gmail.com', '7987851154', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(5) NOT NULL,
  `patientname` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patientname`, `emailid`, `contact`, `password`, `gender`, `address`, `image`) VALUES
(1, 'Pankaj Panjwani', 'pankaj@gmail.com', '7987851154', '1234', 'Male', '260 Mohini tower F2 Indrapuri', 'images/Patients/boyavatarNew1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(5) NOT NULL,
  `doctor` varchar(50) DEFAULT NULL,
  `patient` varchar(50) DEFAULT NULL,
  `symptom` varchar(200) DEFAULT NULL,
  `prescriptionmsg` longtext DEFAULT NULL,
  `pdate` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `doctor`, `patient`, `symptom`, `prescriptionmsg`, `pdate`) VALUES
(3, 'harish@gmail.com', 'pankaj@gmail.com', 'cough', 'dlldld dkdl', '26-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fbid` int(11) NOT NULL,
  `fbname` varchar(50) DEFAULT NULL,
  `fbphone` varchar(15) DEFAULT NULL,
  `fbemail` varchar(50) DEFAULT NULL,
  `fbsubject` varchar(150) DEFAULT NULL,
  `fbmessage` varchar(500) DEFAULT NULL,
  `fbproductid` varchar(50) DEFAULT NULL,
  `fbtime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fbid`, `fbname`, `fbphone`, `fbemail`, `fbsubject`, `fbmessage`, `fbproductid`, `fbtime`) VALUES
(8, 'Neelesh', '123123123', 'nkp@gmail.com', 'testt', 'ttt', NULL, '2019-04-29 22:14:35'),
(9, 'Abhishek', '9229345892', 'abhi342kumar@gmail.com', 'Enquiry', 'covid test', NULL, '2020-07-26 16:51:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logindetails`
--

CREATE TABLE `tbl_logindetails` (
  `user_id` int(11) NOT NULL,
  `did` int(11) NOT NULL DEFAULT 0,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_pass` varchar(20) DEFAULT NULL,
  `user_type` int(1) DEFAULT NULL COMMENT '1-User, 2-Employee, 3-Admin ',
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0-disable, 1-active',
  `createDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logindetails`
--

INSERT INTO `tbl_logindetails` (`user_id`, `did`, `user_name`, `user_email`, `user_pass`, `user_type`, `status`, `createDate`) VALUES
(10, 0, 'Admin', 'admin', '1234', 3, 1, '2018-05-19 02:17:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_list`
--
ALTER TABLE `doctor_list`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `tbl_logindetails`
--
ALTER TABLE `tbl_logindetails`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_list`
--
ALTER TABLE `doctor_list`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_logindetails`
--
ALTER TABLE `tbl_logindetails`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
