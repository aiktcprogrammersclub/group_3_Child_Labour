-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2014 at 02:55 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `intern_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `prod_id`, `user_id`) VALUES
(22, 2, 2),
(23, 3, 2),
(25, 1, 7),
(26, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE  `product` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(20) DEFAULT NULL,
  `c_name` varchar(20) DEFAULT NULL,
  `p_type` varchar(20) DEFAULT NULL,
  `brand` varchar(50) NOT NULL,
  `pimg` varchar(50) DEFAULT NULL,
  `pdesc` varchar(50) DEFAULT NULL,
  `hits` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `c_name`, `p_type`, `brand`, `pimg`, `pdesc`, `hits`, `cost`) VALUES
(1, 'Galaxy S4', 'Mumbai', 'Mobile', 'samsung', 'uploads/s3.jpg', 'Galaxy s4. Android 4.1', NULL, 30000),
(2, 'Galaxy S3', 'Mumbai', 'Mobile', 'htc', 'uploads/s3.jpg', 'Android version 4.1 jellybean. ', NULL, 35000),
(3, 'Nokia Lumia', 'delhi', 'Mobile', 'nokia', 'uploads/lumia.jpg', 'Windows Phone, Google Maps', NULL, 20000),
(4, 'canvas hd', 'Mumbai', 'Mobile', 'micromaxx', 'uploads/note3.jpg', 'Android version 4.1 jellybean. ', NULL, 35000),
(5, 'Xolo Q800', 'Pune', 'Mobile', 'xolo', 'uploads/q800.jpg', 'Android version 4.2.2 kitkat', NULL, 20000),
(6, 'BB Z10', 'Banglore', 'Mobile', 'blackberry', 'uploads/bb.jpg', 'Blcakberry with 3g support', NULL, 23499),
(7, 'Sony Xperia Tipo Dua', 'Kolkata', 'Mobile', 'sony', 'uploads/sony.jpg', 'andorid version 4.1, Dual Sim.', NULL, 12000),
(8, 'Cybershot', 'delhi', 'camera', 'sony', 'uploads/cybershot.jpg', '16mega pixel. water proof ', NULL, 25000),
(9, 'Coolpix', 'mumbai', 'camera', 'nikon', 'uploads/coolpix.png', '32mp camera', NULL, 32000),
(10, 'lumix', 'delhi', 'camera', 'panasonic', 'uploads/lumix.jpg', '16mega pixel. water proof ', NULL, 25000),
(11, 'Ax500', 'mumbai', 'camera', 'fujifilm', 'uploads/ax500.jpg', '32mp camera', NULL, 32000),
(12, 'A3400', 'banglore', 'camera', 'canon', 'uploads/a3400.jpg', '32mp camera', NULL, 5500),
(13, 'dell1', 'mumbai', 'laptop', 'brand', 'uploads/laptop-amc-in-mumbai.jpg', 'i5 500gb hrd dsk', NULL, 35000),
(14, 'hp1', 'mumbai', 'laptop', 'hp', 'uploads/laptop-amc-in-mumbai.jpg', 'i7 1tb', NULL, 75000),
(15, 'asus', 'pune', 'laptop', 'asus', 'uploads/laptop-amc-in-mumbai.jpg', 'i5 500gb hrd dsk', NULL, 30000),
(16, 'lenovo', 'banglore', 'laptop', 'lenovo', 'uploads/laptop-amc-in-mumbai.jpg', 'i7 1tb', NULL, 20000),
(19, 'xoloq1000', 'mumbai', 'Mobile', '', 'uploads/Sony VaioLaptopsMumbaisony-vaio.jpg', 'android 4.4', NULL, 13000),
(20, 'xp', 'mumbai', 'software', '', 'uploads/Lighthouse.jpg', 'servc pck 2', NULL, 1000),
(21, 'Toshiba Flat Tv', 'Mumbai', 'audio', '', 'uploads/toshiba.jpg ', 'Flat 22 inch TV', NULL, 15099);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `email_id`, `pass`) VALUES
(1, 'admin', 'admin@ADMIN.COM', 'admin'),
(2, 'vikas', 'demo@demo.com', 'vikas'),
(3, 'dhaval', 'demo@demo.com', 'dhaval'),
(4, 'sumeet', 'sumeet@gmail.com', 'sumeet'),
(5, 'monit', 'monit@gmail.com', 'monit'),
(6, 'rocky', 'rock@gmail.com', 'rocky'),
(7, 'amol', 'demo@demo.com', 'amol');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
