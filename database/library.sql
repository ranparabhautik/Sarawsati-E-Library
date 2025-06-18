-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2024 at 06:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `BookId` int(10) NOT NULL,
  `Author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`BookId`, `Author`) VALUES
(3, 'Jay Prakash'),
(4, 'Jay Prakash'),
(5, 'x'),
(6, 'a1'),
(7, 'Bogart'),
(7, 'Kenneth'),
(8, 'Auer'),
(8, 'Davil J.'),
(9, 'Rob'),
(9, 'Williams'),
(10, 'Deiteil'),
(11, 'Sharma'),
(12, 'Barney Stinson'),
(13, 'Puri'),
(14, 'Manna'),
(15, 'Jindal U.C'),
(16, 'Prasad'),
(17, 'Aravind Alex'),
(17, 'Haldar Sibsankar'),
(18, 'Sandhu'),
(18, 'Singh'),
(19, 'M K Gandhi'),
(20, 'Rs Agrawal'),
(21, 'Balaguru Swamy'),
(22, 'Kanetkar Yashavant'),
(23, ' Colleen Hoover'),
(24, 'Colleen Hoover');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookId` int(10) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Publisher` varchar(50) DEFAULT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `Availability` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookId`, `Title`, `Publisher`, `Year`, `Availability`) VALUES
(1, 'OS', 'PEARSON', '2023', 18),
(3, 'TOC', 'NITC', '2023', 19),
(4, 'TOC', 'NITC', '2023', 20),
(5, 'DAA', 'y', '2023', 20),
(6, 'DSA', 'X', '2023', 20),
(7, 'Discrete Structures', 'Pearson', '2023', 19),
(8, 'Database Processing', 'Prentice Hall', '2023', 19),
(9, 'Computer System Architecture', 'Prentice Hall', '2023', 18),
(10, 'C: How to program', 'Prentice Hall', '2023', 20),
(11, 'Atomic and Nuclear Systems', 'Pearson India ', '2023', 19),
(12, 'The PlayBook', 'Stinson', '2023', 19),
(13, 'General Theory of Relativity', 'Pearson India ', '2023', 20),
(14, 'Heat and Thermodynamics', 'Pearson', '2023', 19),
(15, 'Machine Design', 'Pearson India ', '2023', 19),
(16, 'Nuclear Physics', 'Pearson India ', '2023', 19),
(17, 'Operating System', 'Pearson India ', '2023', 20),
(18, 'Theory of Machines', 'Pearson', '2023', 17),
(19, 'The Experiments of truth ', 'shah publisher', '2023', 18),
(20, 'RS Agrawal Mathematics', 'Delta Publication', '2023', 18),
(21, 'Anci C', 'Tata Mac-Graw Hill', '2023', 19),
(22, 'Let Us C', ' BPB Publications', '2023', 19),
(23, 'It Starts with Us', 'Atria Books', '2023', 19),
(24, ' It Ends with Us', 'Atria Books', '2023', 19);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `RollNo` int(3) NOT NULL,
  `feedback_id` int(3) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`RollNo`, `feedback_id`, `feedback`) VALUES
(101, 1, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `M_Id` int(10) NOT NULL,
  `RollNo` varchar(50) DEFAULT NULL,
  `Msg` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`M_Id`, `RollNo`, `Msg`, `Date`, `Time`) VALUES
(1, '101', 'Kindly submit your books before due dates ', '2024-02-20', '22:56:48'),
(2, '101', 'Your request for renewal of BookId: 1 has been accepted', '2024-02-20', '22:57:12'),
(3, '101', 'Your request for return of BookId: 20  has been accepted', '2024-02-20', '22:57:18'),
(4, '102', 'Your request for issue of BookId: 20 has been accepted', '2024-02-20', '23:10:16'),
(5, '102', 'Your request for issue of BookId: 3 has been accepted', '2024-02-20', '23:10:21'),
(6, '102', 'Your request for issue of BookId: 19 has been accepted', '2024-02-20', '23:10:27'),
(7, '102', 'Your request for issue of BookId: 24 has been accepted', '2024-02-20', '23:10:32'),
(8, '103', 'Your request for issue of BookId: 12 has been accepted', '2024-02-20', '23:10:37'),
(9, '103', 'Your request for issue of BookId: 18 has been accepted', '2024-02-20', '23:10:42'),
(10, '103', 'Your request for issue of BookId: 20 has been accepted', '2024-02-20', '23:10:45'),
(11, '104', 'Your request for issue of BookId: 1 has been accepted', '2024-02-20', '23:10:51'),
(12, '104', 'Your request for issue of BookId: 18 has been accepted', '2024-02-20', '23:10:55'),
(13, '104', 'Your request for issue of BookId: 21 has been accepted', '2024-02-20', '23:10:58'),
(14, '104', 'Your request for issue of BookId: 7 has been accepted', '2024-02-20', '23:11:03'),
(15, '104', 'Your request for issue of BookId: 16 has been accepted', '2024-02-20', '23:11:07'),
(16, '105', 'Your request for issue of BookId: 20 has been accepted', '2024-02-20', '23:11:11'),
(17, '105', 'Your request for issue of BookId: 9 has been accepted', '2024-02-20', '23:11:15'),
(18, '105', 'Your request for issue of BookId: 22 has been accepted', '2024-02-20', '23:11:18'),
(19, '105', 'Your request for issue of BookId: 11 has been accepted', '2024-02-20', '23:11:26'),
(20, '105', 'Your request for issue of BookId: 23 has been accepted', '2024-02-20', '23:11:32'),
(21, '105', 'Your request for issue of BookId: 8 has been accepted', '2024-02-20', '23:11:37'),
(22, '106', 'Your request for issue of BookId: 1 has been accepted', '2024-02-20', '23:11:43'),
(23, '106', 'Your request for issue of BookId: 19 has been accepted', '2024-02-20', '23:11:47'),
(24, '106', 'Your request for issue of BookId: 9 has been accepted', '2024-02-20', '23:11:50'),
(25, '106', 'Your request for issue of BookId: 15 has been accepted', '2024-02-20', '23:11:54'),
(26, '106', 'Your request for issue of BookId: 18 has been accepted', '2024-02-20', '23:11:58'),
(27, '106', 'Your request for issue of BookId: 14 has been accepted', '2024-02-20', '23:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `recommendations`
--

CREATE TABLE `recommendations` (
  `R_ID` int(10) NOT NULL,
  `Book_Name` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `RollNo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `recommendations`
--

INSERT INTO `recommendations` (`R_ID`, `Book_Name`, `Description`, `RollNo`) VALUES
(1, 'Os', 'Best reference to study the operating system ', '101'),
(2, 'It starts with us ', 'Nice book to depict the romances', '101');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `RollNo` varchar(50) NOT NULL,
  `BookId` int(10) NOT NULL,
  `Date_of_Issue` date DEFAULT NULL,
  `Due_Date` date DEFAULT NULL,
  `Date_of_Return` date DEFAULT NULL,
  `Dues` int(10) DEFAULT NULL,
  `Renewals_left` int(10) DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`RollNo`, `BookId`, `Date_of_Issue`, `Due_Date`, `Date_of_Return`, `Dues`, `Renewals_left`, `Time`) VALUES
('101', 1, '2024-02-20', '2024-10-17', NULL, NULL, 0, '20:10:48'),
('101', 20, '2024-02-20', '2024-04-20', '2024-02-20', -60, 1, '20:10:40'),
('101', 21, '2024-02-20', '2024-04-20', NULL, NULL, 1, '20:10:38'),
('101', 23, '2024-02-20', '2024-04-20', NULL, NULL, 1, '20:10:42'),
('101', 24, '2024-02-20', '2024-04-20', NULL, NULL, 1, '20:10:44'),
('102', 3, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:06:02'),
('102', 11, NULL, NULL, NULL, NULL, NULL, '23:06:06'),
('102', 15, NULL, NULL, NULL, NULL, NULL, '23:05:56'),
('102', 18, NULL, NULL, NULL, NULL, NULL, '23:06:00'),
('102', 19, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:05:58'),
('102', 20, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:05:54'),
('102', 24, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:06:09'),
('103', 3, NULL, NULL, NULL, NULL, NULL, '23:06:53'),
('103', 12, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:06:29'),
('103', 16, NULL, NULL, NULL, NULL, NULL, '23:06:32'),
('103', 18, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:06:33'),
('103', 20, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:06:57'),
('103', 24, NULL, NULL, NULL, NULL, NULL, '23:07:04'),
('104', 1, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:07:32'),
('104', 7, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:07:44'),
('104', 13, NULL, NULL, NULL, NULL, NULL, '23:07:41'),
('104', 16, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:07:34'),
('104', 18, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:07:35'),
('104', 21, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:07:37'),
('105', 8, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:17'),
('105', 9, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:05'),
('105', 11, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:20'),
('105', 17, NULL, NULL, NULL, NULL, NULL, '23:08:07'),
('105', 18, NULL, NULL, NULL, NULL, NULL, '23:08:14'),
('105', 20, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:01'),
('105', 22, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:10'),
('105', 23, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:12'),
('105', 24, NULL, NULL, NULL, NULL, NULL, '23:08:03'),
('106', 1, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:44'),
('106', 9, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:56'),
('106', 10, NULL, NULL, NULL, NULL, NULL, '23:08:39'),
('106', 13, NULL, NULL, NULL, NULL, NULL, '23:08:50'),
('106', 14, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:49'),
('106', 15, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:42'),
('106', 18, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:08:46'),
('106', 19, '2024-02-20', '2024-08-18', NULL, NULL, 1, '23:09:01');

-- --------------------------------------------------------

--
-- Table structure for table `renew`
--

CREATE TABLE `renew` (
  `RollNo` varchar(50) NOT NULL,
  `BookId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `return`
--

CREATE TABLE `return` (
  `RollNo` varchar(50) NOT NULL,
  `BookId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `return`
--

INSERT INTO `return` (`RollNo`, `BookId`) VALUES
('101', 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `RollNo` varchar(50) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `EmailId` varchar(50) DEFAULT NULL,
  `MobNo` bigint(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`RollNo`, `Name`, `Type`, `Category`, `EmailId`, `MobNo`, `Password`) VALUES
('100', 'Utsav', 'Student', 'CS&IT', 'utsav@gmail.com', 9999999999, '123456'),
('101', 'Bhautik', 'Student', 'FOBC', 'b@g.c', 9999988888, '123456'),
('102', 'Pavitra', 'Student', 'FOET', 'pavitra@gmail.com', 9988776655, '123456'),
('103', 'Dev ', 'Student', 'FOH', 'dev@gmail.com', 9911773355, '123456'),
('104', 'Subhman ', 'Student', 'CS&IT', 'Subh@gmail.com', 55116681328, '123456'),
('105', 'Jay', 'Student', 'FOET', 'jay@gmail.com', 8585633634, '123456'),
('106', 'Rahul', 'Student', 'FOBC', 'rahul@gmail.com', 9542368441, '123456'),
('ADMIN', 'admin', 'Admin', NULL, 'admin@nitc.ac.in', 123456789, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`BookId`,`Author`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`M_Id`),
  ADD KEY `RollNo` (`RollNo`);

--
-- Indexes for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD PRIMARY KEY (`R_ID`),
  ADD KEY `RollNo` (`RollNo`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`RollNo`,`BookId`),
  ADD KEY `BookId` (`BookId`);

--
-- Indexes for table `renew`
--
ALTER TABLE `renew`
  ADD PRIMARY KEY (`RollNo`,`BookId`),
  ADD KEY `BookId` (`BookId`);

--
-- Indexes for table `return`
--
ALTER TABLE `return`
  ADD PRIMARY KEY (`RollNo`,`BookId`),
  ADD KEY `BookId` (`BookId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`RollNo`),
  ADD UNIQUE KEY `EmailId` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BookId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `M_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `recommendations`
--
ALTER TABLE `recommendations`
  MODIFY `R_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`);

--
-- Constraints for table `recommendations`
--
ALTER TABLE `recommendations`
  ADD CONSTRAINT `recommendations_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`);

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`),
  ADD CONSTRAINT `record_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`);

--
-- Constraints for table `renew`
--
ALTER TABLE `renew`
  ADD CONSTRAINT `renew_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`),
  ADD CONSTRAINT `renew_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`);

--
-- Constraints for table `return`
--
ALTER TABLE `return`
  ADD CONSTRAINT `return_ibfk_1` FOREIGN KEY (`RollNo`) REFERENCES `user` (`RollNo`),
  ADD CONSTRAINT `return_ibfk_2` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
