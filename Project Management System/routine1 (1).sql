-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 06:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routine1`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `C_code` varchar(10) NOT NULL,
  `C_name` varchar(50) NOT NULL,
  `Dept` varchar(5) NOT NULL,
  `Sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`C_code`, `C_name`, `Dept`, `Sem`) VALUES
('CSE 1101', 'Computer Fundamentals', 'CSE', 7);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Id` int(10) NOT NULL,
  `Semester` int(1) NOT NULL,
  `Dept` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Username`, `Password`, `Id`, `Semester`, `Dept`, `Email`, `Contact`) VALUES
('Sabah Tasnim', 'Sabah69', '12345', 151369, 7, 'CSE', 'sabahtasnim@gmail.com', '12345678910');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL,
  `T_name` varchar(50) NOT NULL,
  `S_name` varchar(50) NOT NULL,
  `Course_code` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`, `T_name`, `S_name`, `Course_code`) VALUES
(8, '17574-routine.zip', 'applicatio', 5, 'Almash Alam', 'Sabah Tasnim', 'CSE 1101'),
(7, '69906-routine.zip', 'applicatio', 5, 'Almash Alam', 'Sabah Tasnim', 'CSE 1101'),
(11, '67927-new-text-document.txt', 'text/plain', 0, 'Almash Alam', 'Sabah Tasnim', 'CSE 1101'),
(12, '93913-new-text-document.txt', 'text/plain', 0, 'Almash Alam', 'Sabah Tasnim', 'CSE 1101');

-- --------------------------------------------------------

--
-- Table structure for table `t_registration`
--

CREATE TABLE `t_registration` (
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Dept` varchar(10) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_registration`
--

INSERT INTO `t_registration` (`Name`, `Username`, `Password`, `Dept`, `Designation`, `Email`, `Contact`) VALUES
('Almash Alam', 'Almash_Alam', '1234', 'CSE', 'Lecturer', 'almashalam@gmail.com', '98745632101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`C_code`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Title` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Contact` (`Contact`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_registration`
--
ALTER TABLE `t_registration`
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Contact` (`Contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
