-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 06:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `aaa`
--

CREATE TABLE `aaa` (
  `day` varchar(30) NOT NULL,
  `period` varchar(30) NOT NULL,
  `course` varchar(30) DEFAULT NULL,
  `Class` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aaa`
--

INSERT INTO `aaa` (`day`, `period`, `course`, `Class`) VALUES
('Sunday', '8.15-9.15', NULL, NULL),
('Monday', '8.15-9.15', NULL, NULL),
('Tuesday', '8.15-9.15', 'Software Development for Web A', 'CSE1A'),
('Wednesday', '8.15-9.15', NULL, NULL),
('Thursday', '8.15-9.15', NULL, NULL),
('Sunday', '9.20-10.20', NULL, NULL),
('Monday', '9.20-10.20', NULL, NULL),
('Tuesday', '9.20-10.20', NULL, NULL),
('Wednesday', '9.20-10.20', NULL, NULL),
('Thursday', '9.20-10.20', NULL, NULL),
('Sunday', '10.25-11.25', NULL, NULL),
('Monday', '10.25-11.25', NULL, NULL),
('Tuesday', '10.25-11.25', NULL, NULL),
('Wednesday', '10.25-11.25', NULL, NULL),
('Thursday', '10.25-11.25', NULL, NULL),
('Sunday', '11.45-12.45', NULL, NULL),
('Monday', '11.45-12.45', NULL, NULL),
('Tuesday', '11.45-12.45', NULL, NULL),
('Wednesday', '11.45-12.45', NULL, NULL),
('Thursday', '11.45-12.45', NULL, NULL),
('Sunday', '12.50-01.50', NULL, NULL),
('Monday', '12.50-01.50', NULL, NULL),
('Tuesday', '12.50-01.50', NULL, NULL),
('Wednesday', '12.50-01.50', NULL, NULL),
('Thursday', '12.50-01.50', NULL, NULL),
('Sunday', '01.55-02.55', NULL, NULL),
('Monday', '01.55-02.55', NULL, NULL),
('Tuesday', '01.55-02.55', NULL, NULL),
('Wednesday', '01.55-02.55', NULL, NULL),
('Thursday', '01.55-02.55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`) VALUES
('Admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `Teacher` text,
  `Short Name` varchar(10) DEFAULT NULL,
  `Department` text NOT NULL,
  `Semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`Teacher`, `Short Name`, `Department`, `Semester`) VALUES
('Dardina Tasmere', NULL, 'CSE', 1),
('0', NULL, 'CSE', 2),
('', NULL, 'CSE', 3),
('', NULL, 'CSE', 4),
('', NULL, 'CSE', 5),
('', NULL, 'CSE', 6),
('', NULL, 'CSE', 7),
('', NULL, 'CSE', 8),
('', NULL, 'EEE', 1),
('', NULL, 'EEE', 2),
('', NULL, 'EEE', 3),
('', NULL, 'EEE', 4),
('', NULL, 'EEE', 5),
('', NULL, 'EEE', 6),
('', NULL, 'EEE', 7),
('', NULL, 'EEE', 8),
('', NULL, 'CE', 1),
('', NULL, 'CE', 2),
('', NULL, 'CE', 3),
('', NULL, 'CE', 4),
('', NULL, 'CE', 5),
('', NULL, 'CE', 6),
('', NULL, 'CE', 7),
('', NULL, 'CE', 8);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Code` varchar(10) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Credit` float NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Dept` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Code`, `Title`, `Credit`, `Type`, `Semester`, `Dept`) VALUES
('CSE1000', 'agdg', 10, 'tako', 7, 'CSE'),
('CSE4100', 'Project or Thesis', 3, 'Theory', 7, 'CSE'),
('CSE4101', 'System Analysis and Design', 3, 'Theory', 7, 'CSE'),
('CSE4102', 'System Analysis and Design Sessional', 0.75, 'Sessional', 7, 'CSE'),
('CSE4103', 'Artificial Intelligence', 3, 'Theory', 7, 'CSE'),
('CSE4104', 'Artificial Intelligence Sessional', 0.75, 'Sessional', 7, 'CSE'),
('CSE4106', 'Software Development for Web Apps Sessional', 0.75, 'Sessional', 7, 'CSE'),
('CSE4107', 'Digital Signal Processing', 3, 'Theory', 7, 'CSE'),
('CSE4108', 'Digital Signal Processing Sessional', 0.75, 'Sessional', 7, 'CSE'),
('CSE4127', 'Data and Network Security', 3, 'Theory', 7, 'CSE'),
('HUM4112', 'English Sessional', 0.75, 'Sessional', 7, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `cse1`
--

CREATE TABLE `cse1` (
  `Day` varchar(10) NOT NULL,
  `Period` varchar(12) NOT NULL,
  `C_id` varchar(50) DEFAULT NULL,
  `Teacher` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse1`
--

INSERT INTO `cse1` (`Day`, `Period`, `C_id`, `Teacher`) VALUES
('sun', '8-15', 'cse1101', 'Almash Alam');

-- --------------------------------------------------------

--
-- Table structure for table `cse1a`
--

CREATE TABLE `cse1a` (
  `day` varchar(30) NOT NULL,
  `period` varchar(30) NOT NULL,
  `course` varchar(30) DEFAULT NULL,
  `teacher` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse1a`
--

INSERT INTO `cse1a` (`day`, `period`, `course`, `teacher`) VALUES
('Sunday', '8.15-9.15', 'Artificial Intelligence', 'Dardina Tasmere'),
('Monday', '8.15-9.15', 'Artificial Intelligence', 'Dardina Tasmere'),
('Tuesday', '8.15-9.15', 'Software Development for Web A', 'Almash Alam'),
('Wednesday', '8.15-9.15', NULL, NULL),
('Thursday', '8.15-9.15', NULL, NULL),
('Sunday', '9.20-10.20', NULL, NULL),
('Monday', '9.20-10.20', 'Data and Network Security', 'Dardina Tasmere'),
('Tuesday', '9.20-10.20', NULL, NULL),
('Wednesday', '9.20-10.20', NULL, NULL),
('Thursday', '9.20-10.20', NULL, NULL),
('Sunday', '10.25-11.25', NULL, NULL),
('Monday', '10.25-11.25', 'Digital Signal Processing Sess', 'Dardina Tasmere'),
('Tuesday', '10.25-11.25', NULL, NULL),
('Wednesday', '10.25-11.25', NULL, NULL),
('Thursday', '10.25-11.25', NULL, NULL),
('Sunday', '11.45-12.45', NULL, NULL),
('Monday', '11.45-12.45', 'Software Development for Web A', 'Dardina Tasmere'),
('Tuesday', '11.45-12.45', 'English Sessional', 'Dardina Tasmere'),
('Wednesday', '11.45-12.45', NULL, NULL),
('Thursday', '11.45-12.45', NULL, NULL),
('Sunday', '12.50-01.50', NULL, NULL),
('Monday', '12.50-01.50', NULL, NULL),
('Tuesday', '12.50-01.50', NULL, NULL),
('Wednesday', '12.50-01.50', NULL, NULL),
('Thursday', '12.50-01.50', NULL, NULL),
('Sunday', '01.55-02.55', NULL, NULL),
('Monday', '01.55-02.55', NULL, NULL),
('Tuesday', '01.55-02.55', NULL, NULL),
('Wednesday', '01.55-02.55', NULL, NULL),
('Thursday', '01.55-02.55', 'English Sessional', 'Dardina Tasmere');

-- --------------------------------------------------------

--
-- Table structure for table `cse1b`
--

CREATE TABLE `cse1b` (
  `day` varchar(30) NOT NULL,
  `period` varchar(30) NOT NULL,
  `course` varchar(30) DEFAULT NULL,
  `teacher` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse1b`
--

INSERT INTO `cse1b` (`day`, `period`, `course`, `teacher`) VALUES
('Sunday', '8.15-9.15', NULL, NULL),
('Monday', '8.15-9.15', NULL, NULL),
('Tuesday', '8.15-9.15', NULL, NULL),
('Wednesday', '8.15-9.15', NULL, NULL),
('Thursday', '8.15-9.15', NULL, NULL),
('Sunday', '9.20-10.20', NULL, NULL),
('Monday', '9.20-10.20', NULL, NULL),
('Tuesday', '9.20-10.20', NULL, NULL),
('Wednesday', '9.20-10.20', NULL, NULL),
('Thursday', '9.20-10.20', NULL, NULL),
('Sunday', '10.25-11.25', NULL, NULL),
('Monday', '10.25-11.25', NULL, NULL),
('Tuesday', '10.25-11.25', NULL, NULL),
('Wednesday', '10.25-11.25', NULL, NULL),
('Thursday', '10.25-11.25', NULL, NULL),
('Sunday', '11.45-12.45', NULL, NULL),
('Monday', '11.45-12.45', NULL, NULL),
('Tuesday', '11.45-12.45', NULL, NULL),
('Wednesday', '11.45-12.45', NULL, NULL),
('Thursday', '11.45-12.45', NULL, NULL),
('Sunday', '12.50-01.50', NULL, NULL),
('Monday', '12.50-01.50', NULL, NULL),
('Tuesday', '12.50-01.50', NULL, NULL),
('Wednesday', '12.50-01.50', NULL, NULL),
('Thursday', '12.50-01.50', NULL, NULL),
('Sunday', '01.55-02.55', NULL, NULL),
('Monday', '01.55-02.55', NULL, NULL),
('Tuesday', '01.55-02.55', NULL, NULL),
('Wednesday', '01.55-02.55', NULL, NULL),
('Thursday', '01.55-02.55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cse7`
--

CREATE TABLE `cse7` (
  `Day` varchar(10) NOT NULL,
  `Period` varchar(12) NOT NULL,
  `C_id` varchar(50) DEFAULT NULL,
  `Teacher` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse7`
--

INSERT INTO `cse7` (`Day`, `Period`, `C_id`, `Teacher`) VALUES
('Sunday', '8.15-9.15', 'Artificial Intelligence', 'Al Mamun'),
('Sunday', '9.20-10.20', 'System Analysis and Design', 'Aminul Haque'),
('Sunday', '10.25-11.25', 'Data and Network Security', 'Muqtar Hossain'),
('Sunday', '11.45-12.45', 'System Analysis and Design Sessional', 'Golam Sarwar Bhuiyan'),
('Sunday', '12.50-01.50', 'System Analysis and Design Sessional', 'Golam Sarwar Bhuiyan'),
('Sunday', '01.55-02.55', NULL, NULL),
('Monday', '9.20-10.20', 'Digital Signal Processing Sessional', 'Muqtar Hossain'),
('Monday', '10.25-11.25', NULL, NULL),
('Monday', '11.45-12.45', NULL, NULL),
('Monday', '12.50-01.50', NULL, NULL),
('Monday', '01.55-02.55', NULL, NULL),
('Tuesday', '8.15-9.15', NULL, NULL),
('Tuesday', '9.20-10.20', NULL, NULL),
('Tuesday', '10.25-11.25', NULL, NULL),
('Tuesday', '11.45-12.45', NULL, NULL),
('Tuesday', '12.50-01.50', NULL, NULL),
('Tuesday', '01.55-02.55', NULL, NULL),
('Wednesday', '8.15-9.15', NULL, NULL),
('Wednesday', '9.20-10.20', NULL, NULL),
('Wednesday', '10.25-11.25', NULL, NULL),
('Wednesday', '11.45-12.45', NULL, NULL),
('Wednesday', '12.50-01.50', 'Artificial Intelligence Sessional', 'Tasnim Pervin'),
('Wednesday', '01.55-02.55', 'Artificial Intelligence Sessional', 'Tasnim Pervin'),
('Thursday', '8.15-9.15', 'Digital Signal Processing', 'Al Mamun'),
('Thursday', '9.20-10.20', NULL, NULL),
('Thursday', '10.25-11.25', NULL, NULL),
('Thursday', '11.45-12.45', 'Artificial Intelligence', 'Tasnim Pervin'),
('Thursday', '12.50-01.50', NULL, NULL),
('Thursday', '01.55-02.55', NULL, NULL),
('Friday', '9.20-10.20', NULL, NULL),
('Saturday', '8.15-9.15', 'System Analysis and Design', 'Aminul Huq'),
('dfyhiop', '23456789', 'cdfg', 'cv'),
('Monday', '8.15-9.15', 'Data and Network Security', 'Al Mamun'),
('Monday', '8.15-9.15', 'Data and Network Security', 'Al Mamun'),
('Monday', '8.15-9.15', 'Data and Network Security', 'Al Mamun');

-- --------------------------------------------------------

--
-- Table structure for table `cse8a`
--

CREATE TABLE `cse8a` (
  `day` varchar(30) NOT NULL,
  `period` varchar(30) NOT NULL,
  `course` varchar(30) DEFAULT NULL,
  `teacher` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse8a`
--

INSERT INTO `cse8a` (`day`, `period`, `course`, `teacher`) VALUES
('Sunday', '8.15-9.15', NULL, NULL),
('Monday', '8.15-9.15', NULL, NULL),
('Tuesday', '8.15-9.15', NULL, NULL),
('Wednesday', '8.15-9.15', NULL, NULL),
('Thursday', '8.15-9.15', NULL, NULL),
('Sunday', '9.20-10.20', NULL, NULL),
('Monday', '9.20-10.20', NULL, NULL),
('Tuesday', '9.20-10.20', 'Artificial Intelligence Sessio', 'Dardina Tasmere'),
('Wednesday', '9.20-10.20', NULL, NULL),
('Thursday', '9.20-10.20', NULL, NULL),
('Sunday', '10.25-11.25', NULL, NULL),
('Monday', '10.25-11.25', NULL, NULL),
('Tuesday', '10.25-11.25', NULL, NULL),
('Wednesday', '10.25-11.25', NULL, NULL),
('Thursday', '10.25-11.25', NULL, NULL),
('Sunday', '11.45-12.45', NULL, NULL),
('Monday', '11.45-12.45', NULL, NULL),
('Tuesday', '11.45-12.45', NULL, NULL),
('Wednesday', '11.45-12.45', NULL, NULL),
('Thursday', '11.45-12.45', NULL, NULL),
('Sunday', '12.50-01.50', NULL, NULL),
('Monday', '12.50-01.50', NULL, NULL),
('Tuesday', '12.50-01.50', NULL, NULL),
('Wednesday', '12.50-01.50', NULL, NULL),
('Thursday', '12.50-01.50', NULL, NULL),
('Sunday', '01.55-02.55', NULL, NULL),
('Monday', '01.55-02.55', NULL, NULL),
('Tuesday', '01.55-02.55', NULL, NULL),
('Wednesday', '01.55-02.55', NULL, NULL),
('Thursday', '01.55-02.55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `Day` varchar(50) NOT NULL,
  `Period` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`Day`, `Period`) VALUES
('Sunday', '8.15-9.15'),
('Sunday', '9.20-10.20'),
('Monday', '10.25-11.25'),
('Tuesday', '11.45-12.45'),
('Wednesday', '12.50-01.50'),
('Thursday', '01.55-02.55');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept Name` varchar(50) NOT NULL,
  `shortform` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept Name`, `shortform`) VALUES
('Computer Science and Engineering', 'CSE'),
('Civil Engineering', 'CE'),
('Electrical and Electronic Engineering', 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `dt`
--

CREATE TABLE `dt` (
  `day` varchar(30) NOT NULL,
  `period` varchar(30) NOT NULL,
  `course` varchar(30) DEFAULT NULL,
  `Class` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt`
--

INSERT INTO `dt` (`day`, `period`, `course`, `Class`) VALUES
('Sunday', '8.15-9.15', 'Artificial Intelligence', 'CSE1A'),
('Monday', '8.15-9.15', NULL, NULL),
('Tuesday', '8.15-9.15', NULL, NULL),
('Wednesday', '8.15-9.15', NULL, NULL),
('Thursday', '8.15-9.15', NULL, NULL),
('Sunday', '9.20-10.20', NULL, NULL),
('Monday', '9.20-10.20', NULL, NULL),
('Tuesday', '9.20-10.20', 'Artificial Intelligence Sessio', 'CSE8A'),
('Wednesday', '9.20-10.20', NULL, NULL),
('Thursday', '9.20-10.20', NULL, NULL),
('Sunday', '10.25-11.25', NULL, NULL),
('Monday', '10.25-11.25', 'Digital Signal Processing Sess', 'CSE1A'),
('Tuesday', '10.25-11.25', NULL, NULL),
('Wednesday', '10.25-11.25', NULL, NULL),
('Thursday', '10.25-11.25', NULL, NULL),
('Sunday', '11.45-12.45', NULL, NULL),
('Monday', '11.45-12.45', 'Software Development for Web A', 'CSE1A'),
('Tuesday', '11.45-12.45', 'English Sessional', 'CSE1A'),
('Wednesday', '11.45-12.45', NULL, NULL),
('Thursday', '11.45-12.45', NULL, NULL),
('Sunday', '12.50-01.50', NULL, NULL),
('Monday', '12.50-01.50', NULL, NULL),
('Tuesday', '12.50-01.50', NULL, NULL),
('Wednesday', '12.50-01.50', 'Digital Signal Processing', ''),
('Thursday', '12.50-01.50', NULL, NULL),
('Sunday', '01.55-02.55', NULL, NULL),
('Monday', '01.55-02.55', NULL, NULL),
('Tuesday', '01.55-02.55', 'Artificial Intelligence', ''),
('Wednesday', '01.55-02.55', NULL, NULL),
('Thursday', '01.55-02.55', 'English Sessional', 'CSE1A');

-- --------------------------------------------------------

--
-- Table structure for table `eee3b`
--

CREATE TABLE `eee3b` (
  `day` varchar(30) NOT NULL,
  `period` varchar(30) NOT NULL,
  `course` varchar(30) DEFAULT NULL,
  `teacher` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eee3b`
--

INSERT INTO `eee3b` (`day`, `period`, `course`, `teacher`) VALUES
('Sunday', '8.15-9.15', NULL, NULL),
('Monday', '8.15-9.15', NULL, NULL),
('Tuesday', '8.15-9.15', NULL, NULL),
('Wednesday', '8.15-9.15', NULL, NULL),
('Thursday', '8.15-9.15', NULL, NULL),
('Sunday', '9.20-10.20', NULL, NULL),
('Monday', '9.20-10.20', NULL, NULL),
('Tuesday', '9.20-10.20', NULL, NULL),
('Wednesday', '9.20-10.20', NULL, NULL),
('Thursday', '9.20-10.20', NULL, NULL),
('Sunday', '10.25-11.25', NULL, NULL),
('Monday', '10.25-11.25', NULL, NULL),
('Tuesday', '10.25-11.25', NULL, NULL),
('Wednesday', '10.25-11.25', NULL, NULL),
('Thursday', '10.25-11.25', NULL, NULL),
('Sunday', '11.45-12.45', NULL, NULL),
('Monday', '11.45-12.45', NULL, NULL),
('Tuesday', '11.45-12.45', NULL, NULL),
('Wednesday', '11.45-12.45', NULL, NULL),
('Thursday', '11.45-12.45', NULL, NULL),
('Sunday', '12.50-01.50', NULL, NULL),
('Monday', '12.50-01.50', NULL, NULL),
('Tuesday', '12.50-01.50', NULL, NULL),
('Wednesday', '12.50-01.50', NULL, NULL),
('Thursday', '12.50-01.50', NULL, NULL),
('Sunday', '01.55-02.55', NULL, NULL),
('Monday', '01.55-02.55', NULL, NULL),
('Tuesday', '01.55-02.55', NULL, NULL),
('Wednesday', '01.55-02.55', NULL, NULL),
('Thursday', '01.55-02.55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Name` varchar(35) NOT NULL,
  `Password` varchar(35) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Name`, `Password`, `Email`) VALUES
('mahadi', 'mahadi32', '01.mahadi@gmail.com'),
('asd', 'asdasd', '123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Name` varchar(50) NOT NULL,
  `Short_name` varchar(4) NOT NULL,
  `Dept` varchar(32) NOT NULL,
  `Designation` varchar(32) NOT NULL,
  `Contact_No` int(11) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Credit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Name`, `Short_name`, `Dept`, `Designation`, `Contact_No`, `Email`, `Credit`) VALUES
('Almash Alam', 'AAA', 'CSE', 'Lecturer', 123456789, 'almashalam@gmail.com', 20),
('Dardina Tasmere', 'DT', 'CSE', 'Lecturer', 123654789, 'dardina@gmail.com', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD UNIQUE KEY `Short Name` (`Short Name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Code`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD UNIQUE KEY `Contact_No` (`Contact_No`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Short_name` (`Short_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
