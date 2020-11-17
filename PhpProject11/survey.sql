-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2020 at 12:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `food` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `checkbox`
--

CREATE TABLE `checkbox` (
  `vehicle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkbox`
--

INSERT INTO `checkbox` (`vehicle`) VALUES
('Bike,Cycle,Car,'),
('Bike,Cycle,'),
('Pizza,Pasta,Pap and wors,Chicken stir fry,beef stir fry,');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `surname` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `food` varchar(100) NOT NULL,
  `eat` varchar(100) NOT NULL,
  `movies` varchar(100) NOT NULL,
  `tv` varchar(100) NOT NULL,
  `radio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`surname`, `firstName`, `contact`, `date`, `age`, `food`, `eat`, `movies`, `tv`, `radio`) VALUES
('Mabasa', 'Lucia ', '0604213333', '12/12/2020', 119, 'Pizza,', 'Disagree(4)', 'Disagree(4)', 'Strongly Disagree(5)', 'Neutral(3)'),
('Mokgalaka', 'Lucia Innovate', '0604216222', '12/12/2020', 28, 'Pizza,Pasta,Pap and wors,Chicken stir fry,beef stir fry,', 'Strongly Agree(1)', 'Agree(2)', 'Agree(2)', 'Agree(2)'),
('Mabasa', 'Lucia ', '0604216233', '12/12/2020', 8, 'Pizza,', 'Disagree(4)', 'Disagree(4)', 'Strongly Disagree(5)', 'Neutral(3)'),
('mabasa', 'Matimba', '099877655', '12/12/2005', 23, 'Pizza,Pasta,Pap and wors,Chicken stir fry,', 'Strongly Agree(1)', 'Agree(2)', 'Neutral(3)', 'Strongly Disagree(5)'),
('ccx', 'cxcxc', '2333', '3232', 32, 'Pizza,Pasta,Pap and wors,Chicken stir fry,', 'Strongly Agree(1)', 'Strongly Agree(1)', 'Strongly Agree(1)', 'Strongly Agree(1)'),
('dsd', 'dssd', 'dsds', 'dsds', 23, 'Chicken stir fry,beef stir fry,', 'Strongly Agree(1)', 'Agree(2)', 'Neutral(3)', 'Disagree(4)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`contact`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
