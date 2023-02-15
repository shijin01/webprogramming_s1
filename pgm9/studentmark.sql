-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 04:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `ase`
--

CREATE TABLE `ase` (
  `regno` varchar(13) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `att` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `df`
--

CREATE TABLE `df` (
  `regno` varchar(13) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `att` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ds`
--

CREATE TABLE `ds` (
  `regno` varchar(13) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `att` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ds`
--

INSERT INTO `ds` (`regno`, `s1`, `s2`, `a1`, `a2`, `att`) VALUES
('TVE22MCA-2001', 37, 42, 5, 6, 90),
('TVE22MCA-2044', 46, 42, 5, 6, 90);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `slno` int(11) NOT NULL,
  `regno` varchar(13) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `person` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`slno`, `regno`, `password`, `name`, `person`) VALUES
(2, 'tvaads', '123', 'Priya', 'teacher'),
(4, 'tvaase', '123', 'Sreerekha', 'teacher'),
(3, 'tvadfc', '123', 'Sabeena', 'teacher'),
(1, 'tvamcp', '123', 'Indu', 'teacher'),
(22, 'TVE22MCA-2001', '12345', 'Abhay', 'student'),
(23, 'TVE22MCA-2002', '12345', 'Abhinand', 'student'),
(26, 'TVE22MCA-2003', '12345', 'Abhinav', 'student'),
(19, 'TVE22MCA-2044', '12345', 'Nikhil', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `mf`
--

CREATE TABLE `mf` (
  `regno` varchar(13) NOT NULL,
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `att` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mf`
--

INSERT INTO `mf` (`regno`, `s1`, `s2`, `a1`, `a2`, `att`) VALUES
('TVE22MCA-2001', 37, 44, 6, 6, 100);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `regno` varchar(13) NOT NULL,
  `sub` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`regno`, `sub`) VALUES
('tvaads', 'ds'),
('tvadfc', 'df'),
('tvamcp', 'mf'),
('tvaase', 'ase');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ds`
--
ALTER TABLE `ds`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`regno`),
  ADD KEY `slno` (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
