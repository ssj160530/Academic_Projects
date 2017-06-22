-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2012 at 08:26 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `h_db`
--
CREATE DATABASE `h_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `h_db`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `tot_amount` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`tot_amount`) VALUES
(100011);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `did` varchar(20) NOT NULL DEFAULT '',
  `dname` varchar(30) DEFAULT NULL,
  `dfname` varchar(30) DEFAULT NULL,
  `dmname` varchar(30) DEFAULT NULL,
  `padd` varchar(30) DEFAULT NULL,
  `asso` varchar(30) DEFAULT NULL,
  `dob1` date DEFAULT NULL,
  `doj1` date DEFAULT NULL,
  `class1` varchar(10) DEFAULT NULL,
  `sec1` varchar(30) DEFAULT NULL,
  `eid1` varchar(30) DEFAULT NULL,
  `mno1` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `dfname`, `dmname`, `padd`, `asso`, `dob1`, `doj1`, `class1`, `sec1`, `eid1`, `mno1`) VALUES
('2033', 'ronak', 'lalit', 'udeshi', 'lakhiani esate', 'sakec', '0000-00-00', '0000-00-00', 'AB', '', 'r@u.com', '9865659687'),
('2034', 'sagar', 'sharad', 'jadhav', 'chembur', 'thakur', '2012-09-09', '2012-09-11', 'AB', '', 's@j.com', '9869878796'),
('', '', '', '', '', '', '0000-00-00', '0000-00-00', 'SEL', '', '', ''),
('5001', 'Anant', 'Ulhas', 'Chunna', 'Bhatti', 'Stunner', '0000-00-00', '0000-00-00', 'O', '', 'stunner@wannabe.com', '9898989898'),
('12', 'ash', 'asdjh', 'asgdh', 'fghga', 'jsdfgh', '0000-00-00', '0000-00-00', 'A', '', 'f@c.om', '9898989898');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE IF NOT EXISTS `fee` (
  `stid` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `sname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `class` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `dfee` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`stid`, `sname`, `class`, `dfee`) VALUES
('11', 'ravi', '1', 1200),
('11', 'ravi', '1', 100),
('11', 'ravi', '1', 50),
('11', 'ravi', '1', 10),
('11', 'ravi', '1', 10),
('11', 'ravi', '1', 19),
('11', 'ravi', '1', 11),
('11', 'ravi', '1', 100);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `bookid` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `sid` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `card` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `doi` date NOT NULL,
  `dor` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`bookid`, `sid`, `card`, `doi`, `dor`) VALUES
('112', '12', 'card1', '2011-03-09', '2011-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subject` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `section` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `class` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `grade` varchar(5) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `uname` (`uname`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `password`, `subject`, `section`, `class`, `grade`) VALUES
('bhawani', 'singh', 'sub1', 'A', '', ''),
('anwar', 'hussain', 'sub1', 'A', 'LKG', ''),
('anupam', 'anupam', 'sub2', 'A', '', ''),
('subhash', 'sharma', 'sub3', 'A', '', ''),
('cheenu', '79cfac6387e0d582f83a29a04d0bcdc4', 'sub1', 'A', 'LKG', ''),
('singh', 'd8e9fb940baed3e845990ac5014df26d', 'sub1', 'A', 'UKG', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`name`) VALUES
('harveer'),
('bhawani singh shekhawat'),
('anwar'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma'),
('harveer'),
('bhawani singh shekhawat'),
('lalit awasthi'),
('rahul'),
('arun choudhary'),
('anwar'),
('cheenu sharma');

-- --------------------------------------------------------

--
-- Table structure for table `present`
--

CREATE TABLE IF NOT EXISTS `present` (
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `subject` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `class` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `section` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `month` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `total_attendance` int(3) NOT NULL,
  `out_of` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `present`
--


-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `grade` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `amount` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`grade`, `amount`) VALUES
('A', 20000),
('B', 15000),
('C', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `sid` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `mname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `class` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `section` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `email_id` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `mno` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `name`, `fname`, `mname`, `dob`, `doj`, `class`, `section`, `email_id`, `mno`) VALUES
('1a1', 'aditya', 'sankar', 'lila', '2007-03-15', '2011-03-05', '1', 'A', 'sdfdsfds@adweq', 2147483647),
('1lkg1', 'anwar', 'asdf', 'asdfg', '2009-03-10', '2011-03-05', 'LKG', 'A', 'dw3tt445', 12456),
('', '', '', '', '0000-00-00', '0000-00-00', 'LKG', 'A', '', 0),
('48', 'sagar', 'sharad', 'jadhav', '1991-09-09', '2012-09-02', 'AB', '+', 'sagar9sep@gmail.com', 2147483647),
('', '', '', '', '0000-00-00', '0000-00-00', 'SEL', 'SEL1', '', 0),
('53', 'sagar', 'sharad', 'nandini', '1991-09-09', '2012-09-05', 'AB', '+', 'sagar@gmail.com', 2147483647),
('', '', '', '', '0000-00-00', '0000-00-00', 'SEL', 'SEL1', '', 0),
('33', 'ronak', 'lalit', 'hghg', '2011-09-06', '2012-09-19', 'AB', '+', 'ghg@j.com', 2147483647),
('', '', '', '', '0000-00-00', '0000-00-00', 'SEL', 'SEL1', '', 0),
('', '', '', '', '0000-00-00', '0000-00-00', 'SEL', 'SEL1', '', 0),
('454', 'gjgj', 'fgfg', 'gfghf', '2012-09-05', '2012-09-10', 'AB', '+', 'gh@g.com', 2147483647),
('32', 'Sarvesh', 'ajay', 'gaitonde', '1991-10-01', '2012-10-02', 'A', '+', 'sarvesh@g.com', 2147483647),
('45', 'fgg', 'hagfga', 'jhgafga', '2012-10-09', '2012-10-04', 'AB', '-', 'S@g.com', 2147483647),
('', '', '', '', '0000-00-00', '0000-00-00', 'SEL', 'SEL1', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE IF NOT EXISTS `total` (
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `total1` int(5) NOT NULL,
  `total2` int(5) NOT NULL,
  `total3` int(5) NOT NULL,
  `total4` int(5) NOT NULL,
  `total5` int(5) NOT NULL,
  `total6` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`name`, `total1`, `total2`, `total3`, `total4`, `total5`, `total6`) VALUES
('bhawani singh shekhawat', 30, 22, 0, 0, 0, 0),
('lalit awasthi', 7, 22, 0, 0, 0, 0),
('rahul', 4, 3, 0, 0, 0, 0),
('arun choudhary', 2, 15, 0, 0, 0, 0),
('anwar', 31, 24, 0, 0, 0, 0),
('harveer', 0, 44, 0, 0, 0, 0),
('cheenu sharma', 41, 8, 0, 0, 0, 0),
('aditya', 0, 0, 0, 0, 0, 0),
('anwar', 0, 0, 0, 0, 0, 0),
('anwar', 0, 0, 0, 0, 0, 0),
('anwar', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('anwar', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('anwar', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0),
('anwar', 0, 0, 0, 0, 0, 0),
('', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `totfee`
--

CREATE TABLE IF NOT EXISTS `totfee` (
  `class` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `tfee` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `totfee`
--

INSERT INTO `totfee` (`class`, `tfee`) VALUES
('1', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `totsalary`
--

CREATE TABLE IF NOT EXISTS `totsalary` (
  `fid` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `fname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `month` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `totsalary`
--

INSERT INTO `totsalary` (`fid`, `fname`, `month`) VALUES
('11', 'ravi', 'jan'),
('11', 'ravi', 'feb');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
