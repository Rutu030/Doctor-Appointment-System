-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 08:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_portal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `HID` int(11) NOT NULL,
  `DID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `problem` varchar(500) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `DEP_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `name`, `email`, `mobile`, `address`, `HID`, `DID`, `DATE`, `problem`, `slot_id`, `DEP_ID`) VALUES
(1, 'Sakshi Pawar', 'sk@gmail.com', 4545544, 'latur', 1, 7, '2023-11-20', 'Eye Problem bd sdgsds gst', 2, 3),
(2, 'Ram Sham', 'rs@gmail.com', 555656, 'pune', 2, 6, '2023-11-20', 'Bone Pain ', 3, 7),
(4, 'Rani Sable', 'rsable@gmail.com', 2323255, 'nagpur', 2, 5, '2023-11-21', 'mmm', 6, 10),
(5, 'pratiksha', 'P@email.com', 9096831173, 'Lane no.105', 1, 7, '2023-12-02', 'Eye Problem', 1, 3),
(6, 'trupti', 'trupti@gmail.com', 566666, 'lane no.152', 1, 7, '2023-12-02', 'eye problem', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `city_name`) VALUES
(1, 'Mumbai'),
(2, 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DID` int(11) NOT NULL,
  `D_NAME` varchar(100) NOT NULL,
  `HID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DID`, `D_NAME`, `HID`) VALUES
(1, 'Radiology Department', 1),
(2, 'Ophthalmology Department', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(12) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `address` varchar(200) NOT NULL,
  `education` varchar(100) NOT NULL,
  `experience` varchar(120) NOT NULL,
  `gender` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `HID` int(11) NOT NULL,
  `DEP_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `doctor_name`, `contact`, `email`, `address`, `education`, `experience`, `gender`, `username`, `password`, `photo`, `HID`, `DEP_ID`) VALUES
(1, 'Dr. Aditi', 9096831172, 'Aditi@email.com', 'Lane No. 105 Mumbai\"\"\"', '', '', '', 'aditi', '123', 'upload/1_hospital.png', 1, 1),
(2, 'Kalpana chawala1', 556999991, 'kal1@gmail.com', 'pune1', 'yyyy1', '2 month1', '', 'kal1', 'kal1', 'upload/2_hospital.png', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `owner_id` int(12) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `owner_address` varchar(200) NOT NULL,
  `owner_contact` bigint(20) NOT NULL,
  `e_mail` varchar(70) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `hospital_address` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `hospital_contact` bigint(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`owner_id`, `owner_name`, `owner_address`, `owner_contact`, `e_mail`, `username`, `password`, `hospital_name`, `hospital_address`, `photo`, `city`, `hospital_contact`, `date`) VALUES
(1, 'Dr. Aditya Kapoor', 'Lane no. 105, Mumbai', 9096831173, 'aditya@email.com', 'aditya', '123', 'Apolllo Hospital', 'Lane no. 255, Mumbai', 'upload/1_hospital.png', 'Mumbai', 8010688165, '2010-01-01'),
(2, 'Dr. Rahul gupta', 'Lane no. 305, Pune', 9960514864, 'rahul@email.com', 'rahul', '123', 'Gandhi Hospital', 'Lane no. 455, Pune', 'upload/2_hospital.png', 'pune', 9960514864, '2002-09-04'),
(3, 'Dr. Priyanka', 'Lane no. 488, Bangalore', 996051864, 'priyanka@email.com', 'priyanka', '123', 'Max Hospital', 'Lane no. 10, Bangalore', 'upload/3_hospital.png', 'Bangalore', 996051856, '1995-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `ID` int(11) NOT NULL,
  `SLOT` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`ID`, `SLOT`) VALUES
(1, '09-10 AM'),
(2, '10-11 AM'),
(3, '11-12 AM'),
(4, '12-01 PM'),
(5, '01-02 PM'),
(6, '02-03 PM'),
(7, '03-04 PM'),
(8, '04-05 PM'),
(9, '05-06 PM');

-- --------------------------------------------------------

--
-- Table structure for table `time_slot`
--

CREATE TABLE `time_slot` (
  `ID` int(11) NOT NULL,
  `slot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_slot`
--

INSERT INTO `time_slot` (`ID`, `slot`) VALUES
(0, '12-1 AM'),
(0, '12-1 AM'),
(0, '1-2 AM'),
(0, '2-3 AM'),
(0, '3-4 AM'),
(0, '4-5 AM'),
(0, '5-6 AM'),
(0, '6-7 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `owner_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
