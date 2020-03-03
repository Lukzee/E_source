-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2020 at 12:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentinfo`
--
CREATE DATABASE IF NOT EXISTS `studentinfo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `studentinfo`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'ajara', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
`id` int(11) NOT NULL,
  `docTitle` varchar(100) NOT NULL,
  `docName` varchar(100) NOT NULL,
  `class` varchar(10) NOT NULL,
  `semester` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `docTitle`, `docName`, `class`, `semester`) VALUES
(9, 'Introduction to Internet', '5e122a33aa1886.70508095.pdf', 'nd1', 1),
(10, 'Computer Application Packages I', '5e123014a71ef9.95036758.pdf', 'nd1', 1),
(11, 'Computer Application Packages II', '5e123052b31e73.51281465.pdf', 'nd1', 2),
(12, 'Introduction to System Analysis', '5e12307d65c8e7.45194983.pdf', 'nd1', 2),
(13, 'Computer System Troubleshooting I', '5e1230b0d531d9.42386804.pdf', 'nd2', 1),
(14, 'Computer System Programming I', '5e123114bfbc81.14952623.pdf', 'nd2', 1),
(15, 'Introduction to System Analysis II', '5e123132ad8076.58862484.pdf', 'nd2', 1),
(16, 'Computer System Programming II', '5e123167ac5603.73194734.pdf', 'nd2', 2),
(17, 'File Organization and Management I', '5e1232718feb04.62783183.pdf', 'nd2', 2),
(18, 'Web Technology', '5e1232be811f88.03268688.pdf', 'hnd1', 1),
(19, 'Management Information System', '5e1232e8845898.53187392.pdf', 'hnd1', 1),
(20, 'OOP Java Programming', '5e1238116ea8b5.36294737.pdf', 'hnd1', 2),
(21, 'OOP PythonProgramming II', '5e123838756730.34813173.pdf', 'hnd1', 2),
(22, 'UML Programming', '5e123877b2d516.56414795.pdf', 'hnd2', 1),
(23, 'Unified Modelling Language II', '5e1238aca40ad8.32809395.pdf', 'hnd2', 1),
(24, 'Software Engineering I', '5e12391d1dac68.48387861.pdf', 'hnd2', 2),
(25, 'OO PASCAL II', '5e123946d0b8d9.93748600.pdf', 'hnd2', 2),
(26, 'Introduction to programming', '5e131679361178.55251715.pdf', 'dip2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`id` int(11) NOT NULL,
  `regNo` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `secQues` varchar(550) NOT NULL,
  `secAns` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `regNo`, `class`, `password`, `secQues`, `secAns`) VALUES
(1, '17/123402', 'nd2', '123', 'My company name', 'Hawaglobal'),
(6, 'test', 'nd1', 'pass', 'ques', 'ans'),
(8, '17/123508', 'nd2', '123', 'My name', 'Haajaaraa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
