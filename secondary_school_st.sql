-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 05:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `secondary_school_st`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$zRe8Ii/45irUzBIVXAefDeNOthtdMHsyk8IxPeAYzPEzm9HzGLUKa', '2019-08-18 17:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `id` int(11) NOT NULL,
  `registrationDate` text NOT NULL,
  `staffId` text NOT NULL,
  `surname` text NOT NULL,
  `otherName` text NOT NULL,
  `gender` text NOT NULL,
  `maritalStatus` text NOT NULL,
  `state` text NOT NULL,
  `lga` text NOT NULL,
  `academicQualification` text NOT NULL,
  `typeOfStaff` text NOT NULL,
  `dateOfAppointment` text NOT NULL,
  `position` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`id`, `registrationDate`, `staffId`, `surname`, `otherName`, `gender`, `maritalStatus`, `state`, `lga`, `academicQualification`, `typeOfStaff`, `dateOfAppointment`, `position`, `photo`) VALUES
(1, '08/09/2019', '8517', 'John', 'Etim', 'Male', 'Single', 'Rivers', 'Obia Akpor', 'HND', 'MaTeaching Staffle', '2019-09-02', 'Head Teacher', '93899168702.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `id` int(11) NOT NULL,
  `registrationDate` text NOT NULL,
  `admissionId` text NOT NULL,
  `surname` text NOT NULL,
  `otherName` text NOT NULL,
  `gender` text NOT NULL,
  `state` text NOT NULL,
  `lga` text NOT NULL,
  `classAdmittedInto` text NOT NULL,
  `nextOfKinName` text NOT NULL,
  `nextOfKinAddress` text NOT NULL,
  `nextOfKinPhone` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `registrationDate`, `admissionId`, `surname`, `otherName`, `gender`, `state`, `lga`, `classAdmittedInto`, `nextOfKinName`, `nextOfKinAddress`, `nextOfKinPhone`, `photo`) VALUES
(1, '08/09/2019', '9021', 'John', 'Glory', 'Female', 'Rivers', 'Obia Akpor', 'Obia Akpor', 'INI', '4 Ikot Ubo', '0900998', '311293282245.png'),
(2, '08/09/2019', '8987', 'Effiong', 'Effong Okond', 'Female', 'AkwaIbom', 'IKA', 'SSS1', 'INI', '4 Ikot Ubo', '0900998', '388795431256.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
