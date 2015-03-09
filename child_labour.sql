-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 11:35 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `child labour`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `IMAGE` varchar(50) NOT NULL,
  `content` varchar(600) NOT NULL,
  `link` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `IMAGE`, `content`, `link`) VALUES
(1, 'image/banner7.jpg', 'Her name is Harsha. ', 'comment.php'),
(2, 'manju.jpg', 'At the age of five, Manju was already working on the rug looms. While she has since been found and freed from carpet work, some 250,000 children throughout South Asia still toil in obscurity. Through GoodWeave nearly 3,600 kids like Manju have been rescued, rehabilitated and educated, and thousands more deterred from entering the workforce.', 'comment.php');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `srno` int(10) NOT NULL AUTO_INCREMENT,
  `comment` varchar(600) NOT NULL,
  `id` int(10) NOT NULL,
  `uname` varchar(50) NOT NULL,
  PRIMARY KEY (`srno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`srno`, `comment`, `id`, `uname`) VALUES
(6, 'hi', 2, 'preeti'),
(7, 'I wanna help this girl!', 2, 'akshay');

-- --------------------------------------------------------

--
-- Table structure for table `compliant`
--

CREATE TABLE IF NOT EXISTS `compliant` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `compliant`
--

INSERT INTO `compliant` (`id`, `name`, `email`, `subject`, `message`) VALUES
(9, 'ak', '', 'select', ''),
(10, 'akshay', 'aks3fun@gmail.com', 'suggestion', 'hello sir pleasae try tm go to house of eah chils');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `STATE` varchar(22) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `MOBILE` int(10) DEFAULT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `NAME`, `EMAIL`, `STATE`, `ADDRESS`, `MOBILE`, `USERNAME`, `PASSWORD`) VALUES
(7, 'Akshay', 'aks2fun@gmail.com', 'Kerela', 'A/402 maruti villad', 2147483647, 'akshay', 'akshay@123'),
(8, 'manas', 'manav_78@yahoo.com', 'Gujrat', 'sfsvdvdvdvdvd', 0, 'manas', 'manasthakkar'),
(9, 'neha', 'neah@yahoo.com', 'maharastra', 'svjdsbvjsbjbsjbjlbvsjlb', 0, 'neha', 'nehakapwd'),
(10, 'akshay', 'aks3fun@gmail.com', 'maharastra', 'svsvsvsvsvsvs', 0, 'akshay', 'akshay@123'),
(11, 'dipti', 'dipti@gmail.com', 'Delhi', 'jsbcjsbkbsjbcjksbkjcb', 0, 'dipti', 'satishd'),
(12, 'preeti', 'aks3fun@gmail.com', 'maharastra', 'ddfdsdf', 0, 'preeti', 'letsgo');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `link` varchar(28) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `name`, `link`) VALUES
(1, 'gallery', 'gallery.php'),
(2, 'services', 'services.php'),
(3, 'donate', 'donate.php'),
(4, 'contact', 'contact.php'),
(5, 'child acts', 'acts.php'),
(6, 'child prevention', 'Paction.php'),
(7, 'children stories', 'acts.php'),
(8, 'child labour', 'services.php'),
(9, 'child labour causes', 'causes.php'),
(10, 'consequences of child labour', 'consequences.php'),
(11, 'site map', 'contact.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
