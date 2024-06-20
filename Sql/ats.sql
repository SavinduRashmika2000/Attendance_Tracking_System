-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2024 at 01:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuID` varchar(15) NOT NULL,
  `stuName` varchar(100) NOT NULL,
  `Level` int(11) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuID`, `stuName`, `Level`, `department`) VALUES
('2018/ASB/11', 'Nirosh', 4, 'bio'),
('2018/ASB/14', 'Chathurangi', 4, 'bio'),
('2018/ASP/10', 'Sampath', 4, 'amc'),
('2018/ASP/13', 'Upul', 4, 'amc'),
('2018/ICT/12', 'Thilini', 4, 'it'),
('2018/ICT/15', 'Sasanka', 4, 'it'),
('2019/ASB/1', 'Saman', 3, 'bio'),
('2019/ASB/10', 'Sarath', 3, 'bio'),
('2019/ASP/14', 'Sahan', 3, 'amc'),
('2019/ASP/17', 'Kavinda', 3, 'amc'),
('2019/ICT/15', 'Dinusha', 3, 'it'),
('2019/ICT/18', 'Malith', 3, 'it'),
('2020/ASB/12', 'Ishan', 2, 'bio'),
('2020/ASB/18', 'Shamika', 2, 'bio'),
('2020/ASP/11', 'Rajitha', 2, 'amc'),
('2020/ASP/14', 'Nalin', 2, 'amc'),
('2020/ICT/16', 'Haritha', 2, 'it'),
('2020/ICT/19', 'Chathura', 2, 'it'),
('2021/ASB/14', 'Harsha', 1, 'bio'),
('2021/ASB/17', 'Samitha', 1, 'bio'),
('2021/ASP/16', 'Chamila', 1, 'amc'),
('2021/ASP/7', 'Nishadini', 1, 'amc'),
('2021/ICT/12', 'Prasad', 1, 'it'),
('2021/ICT/13', 'Kavindu', 1, 'it');

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

CREATE TABLE `student_subjects` (
  `stuID` varchar(15) NOT NULL,
  `subCode` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Attendance` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_subjects`
--

INSERT INTO `student_subjects` (`stuID`, `subCode`, `Date`, `Time`, `Attendance`) VALUES
('2020/ICT/16', 'IT2223(P)', '2024-06-17', '16:43:00', '1'),
('2020/ICT/16', 'IT2223(T)', '2024-06-17', '16:44:00', '1'),
('2020/ICT/19', 'IT2223(P)', '2024-06-17', '16:43:00', '1'),
('2020/ICT/19', 'IT2223(T)', '2024-06-17', '16:44:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subCode` varchar(20) NOT NULL,
  `subName` varchar(100) DEFAULT NULL,
  `year` int(5) NOT NULL,
  `department` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subCode`, `subName`, `year`, `department`) VALUES
('CSC1223(P)', 'Database Systems(P)', 1, 'amc'),
('CSC1223(T)', 'Database Systems(T)', 1, 'amc'),
('CSC2234(P)', 'Numerical Computing(P)', 2, 'amc'),
('CSC2234(T)', 'Numerical Computing(T)', 2, 'amc'),
('CSH3254(P)', 'Parallel Computing(P)', 3, 'amc'),
('CSH3254(T)', 'Parallel Computing(T)', 3, 'amc'),
('CSH4112', 'System Analysis and Design', 4, 'amc'),
('ENS1142', 'Plant Biology', 1, 'bio'),
('ENS1223', 'Soil Science', 1, 'bio'),
('ENS2242', 'Energy and Environment', 2, 'bio'),
('ENS2252', 'Ecotourism', 2, 'bio'),
('ENS3232', 'Marine Environment and Management', 3, 'bio'),
('ENS3262', 'Biomolecules and Bio-separation', 3, 'bio'),
('ENS4152', 'Advanced Water Treatment', 4, 'bio'),
('IT1223(P)', 'Database Management Systems(P)', 1, 'it'),
('IT1223(T)', 'Database Management Systems(T)', 1, 'it'),
('IT2212', 'Management Information Systems', 2, 'it'),
('IT2223(P)', 'Design and Analysis of Algorithms(P)', 2, 'it'),
('IT2223(T)', 'Design and Analysis of Algorithms(T)', 2, 'it'),
('IT2234(P)', 'Web Services and Server Technologies(P)', 2, 'it'),
('IT2234(T)', 'Web Services and Server Technologies(T)', 2, 'it'),
('IT2244(P)', 'Operating Systems(P)', 2, 'it'),
('IT2244(T)', 'Operating Systems(T)', 2, 'it'),
('IT2252', 'Social and Professional Issues in IT', 2, 'it'),
('IT3243(P)', 'Parallel Computing(P)', 3, 'it'),
('IT3243(T)', 'Parallel Computing(T)', 3, 'it'),
('IT4113', 'Computer Organization & Architecture', 4, 'it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuID`);

--
-- Indexes for table `student_subjects`
--
ALTER TABLE `student_subjects`
  ADD PRIMARY KEY (`stuID`,`subCode`,`Date`,`Time`),
  ADD KEY `subCode` (`subCode`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subCode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_subjects`
--
ALTER TABLE `student_subjects`
  ADD CONSTRAINT `student_subjects_ibfk_1` FOREIGN KEY (`stuID`) REFERENCES `student` (`stuID`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_subjects_ibfk_2` FOREIGN KEY (`subCode`) REFERENCES `subjects` (`subCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
