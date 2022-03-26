-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2019 at 09:04 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `collagelibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE IF NOT EXISTS `addbook` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `uploadbook` varchar(500) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`id`, `bookname`, `authorname`, `uploadbook`, `datetime`) VALUES
(1, 'physics', 'vipin vishwkarma', 'addmition open 2 - Copy - Copy - Copy.png', '10/08/19 11:23:22am'),
(2, 'chemistry', 'suraj singh', 'addmition open 2 - Copy - Copy.png', '10/08/19 11:32:04am'),
(3, 'maths', 'Dr.Vivek Rao', 'addmition open - Copy.png', '10/08/19 12:13:11pm'),
(4, 'Biology', 'shashi ', 'addmition open 2 - Copy - Copy - Copy.png', '10/08/19 03:40:24pm'),
(5, 'physics', 'suraj', 'addmition open - Copy.png', '10/08/19 09:36:06pm');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(1, 'surajsrivastava044@gmail.com', '7860290469');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `datetime`) VALUES
(6, 'suraj', 'neerajsrivas99@gmail.com', 'for pay fees', 'hello sir i say you to pay the fees', '10/08/19 12:05:28pm'),
(4, 'ghjfh', 'surajsrivastava044@gmail.com', 'jgfkjgk', 'jhvkugfhm', '10/08/19 08:05:12am'),
(2, 'suraj', 'surajsrivastava044@gmail.com', 'for submit fees', 'hii sir', '09/08/19 07:10:27pm'),
(7, 'neeraj', 'adfd67856@gmail.com', 'for addmission', 'hii sir i am gyan.', '10/08/19 12:06:04pm');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile`, `email`, `feedback`, `datetime`) VALUES
(2, 'suraj', '9984992332', 'surajsrivastava055@gmail.com', 'hii this is good for me', '09/08/19 07:01:27pm'),
(4, 'suraj', '9878675665', 'physics', 'rohit shrivastava', '10/08/19 03:28:19am'),
(5, 'gyan', '9089787654', 'chemistry', 'rohit shrivastava', '10/08/19 03:33:39am'),
(10, 'gyan chandra srivastava', '8564677655', 'wsur@gmail.com', 'hii sir this website is very usefull', '10/08/19 12:06:59pm'),
(7, 'sss', '9089763324', 'maths', 'suraj singh', '10/08/19 03:41:14am'),
(8, 'gyan chandra srivastava', '780796758', 'biology', 'vipin maurya', '10/08/19 03:42:17am'),
(9, 'suraj', '87968768', 'hghg', 'suraj singh', '10/08/19 03:44:24am'),
(11, 'shyamu pal', '9767658877', 'sss123456@gmail.com', 'this is amaging website', '10/08/19 12:07:44pm');

-- --------------------------------------------------------

--
-- Table structure for table `issuebook`
--

CREATE TABLE IF NOT EXISTS `issuebook` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `ibnnumber` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `issuebook`
--

INSERT INTO `issuebook` (`id`, `name`, `mobile`, `email`, `bookname`, `authorname`, `ibnnumber`, `datetime`) VALUES
(2, 'gyan chandra srivastava', '6756455465', 'surajsrivastava044@gmail.com', 'maths', 'vipin kumar', '6576898', '10/08/19 07:28:47pm'),
(3, 'suraj', '76587474876', 'sssss098@gmailcom', 'chemistry', 'Dr.Rajat Gupta', '86897676', '10/08/19 07:29:51pm');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `mobile`, `dateofbirth`, `datetime`) VALUES
(6, 'neeraj srivastava', 'neerajsrivas99@gmail.com', '12345678', '9878654534', '2000-12-08', '10/08/19 12:00:29pm'),
(7, 'vipin verma', 'adfd67856@gmail.com', '09876', '6754678990', '1992-03-08', '10/08/19 12:01:29pm'),
(4, 'gyan chandra srivastava', 'surajsrivastava044@gmail.com', 'suraj', '897967987', '2000-05-05', '09/08/19 01:59:31am'),
(5, 'suraj', 'surajsrivastava044@gmail.com', 'suraj', '78690956457', '1999-04-05', '09/08/19 07:09:33pm'),
(8, 'satyam maurya', 'hello3456@gmail.com', '789876', '6387309350', '1988-12-31', '10/08/19 12:02:29pm'),
(9, 'suraj jain', 'sssss233@gmail.com', '767jgyjgj', '867564345', '1997-04-08', '10/08/19 12:03:32pm'),
(10, 'dshashi singh', 'shashi987@gmail.com', 'shashi@123', '8978676776', '1998-04-01', '10/08/19 12:04:26pm');

-- --------------------------------------------------------

--
-- Table structure for table `uploadbook`
--

CREATE TABLE IF NOT EXISTS `uploadbook` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `authorname` varchar(50) NOT NULL,
  `uploadbook` varchar(500) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `uploadbook`
--

INSERT INTO `uploadbook` (`id`, `name`, `mobile`, `bookname`, `authorname`, `uploadbook`, `datetime`) VALUES
(3, 'suraj', '8768657458', 'chemistry', 'Dr.Vermaj Jain', 'bg1 - Copy - Copy.jpg', '10/08/19 12:08:45pm'),
(4, 'nishtha shrivatava', '6756445545', 'maths', 'Dr.A.K.Misra', 'addmition open 2 - Copy - Copy.png', '10/08/19 12:09:54pm'),
(5, 'gyan chandra srivastava', '8978675445', 'chemistry', 'suraj singh', 'bac1.jpg', '10/08/19 03:39:03pm');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `userlogin`
--

