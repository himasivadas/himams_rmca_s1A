-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2020 at 11:39 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arotic`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcrops`
--

CREATE TABLE IF NOT EXISTS `addcrops` (
  `a_id` int(20) NOT NULL AUTO_INCREMENT,
  `t_id` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `price` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `addcrops`
--

INSERT INTO `addcrops` (`a_id`, `t_id`, `name`, `quantity`, `price`, `image`) VALUES
(11, 3, 'white feather', '20-piece', '1piece-500', 'o1.jpg'),
(12, 4, 'mangosteen', '20kg', '1kg-300', 'fr1.jpg'),
(13, 4, 'black berry', '50 kg', '1kg-350', 'fr8.jpg'),
(14, 4, 'cashewnut', '30kg', '1kg-250', 'fr10.jpg'),
(17, 4, 'plum', '9kg', '1kg-250', 'fr2.jpg'),
(18, 2, 'vanila', '40kg', '1kg-500', 'v1.jpg'),
(22, 3, 'rubber', '25', '1piece-500', 'o15.jpg'),
(23, 3, 'ficus rubber', '25', '1piece-500', 'o18m.jpg'),
(24, 3, 'green homecare', '56piece', '1piece-450', 'o17.jpg'),
(25, 4, 'mulberry', '10kg', '1kg-300', 'fr17.jpg'),
(26, 4, 'plum', '10kg', '1kg-400', 'fr2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `c_id` int(30) NOT NULL AUTO_INCREMENT,
  `cu_id` int(20) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `cu_id`, `quantity`) VALUES
(1, 0, '2kg'),
(2, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `category`) VALUES
(1, 'Bride and Groom'),
(2, ' Decorations'),
(3, 'Eventmanagement'),
(4, 'Photography'),
(5, 'Rentcars'),
(7, 'Honeymoon Packages'),
(8, 'Bride');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `cu_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `s_id` int(20) NOT NULL,
  `d_id` int(20) NOT NULL,
  `p_id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  PRIMARY KEY (`cu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cu_id`, `name`, `address`, `s_id`, `d_id`, `p_id`, `email`, `phone`, `user`, `password`, `u_id`) VALUES
(11, 'hima', 'madavath (h)ambalavayal (po)puthykkad', 1, 2, 4, '2018himams@gmail.com', 2147483647, 'chakkara', '9164', 0),
(12, '', '', 0, 0, 0, '', 0, '', '', 0),
(13, 'amrutha', 'fghjkl', 3, 1, 2, 'amruthagnair@gmail.c', 234567890, 'iii', '111', 0),
(14, 'waesrtdyfguihjok', 'sdftgyhjkl;', 1, 1, 2, 'amruthagnair@gmail.c', 234567890, 'yyy', '111', 0),
(15, 'anju', 'thanhvundgjd', 0, 0, 0, 'amruthagnair@gmail.c', 234567890, 'iii', '111', 0),
(16, '', '', 0, 0, 0, '', 0, 'hima', '9164', 0);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`d_id`, `s_id`, `district`) VALUES
(1, 1, 'Wayanad'),
(2, 1, 'Calicut'),
(3, 1, 'Palakkad'),
(4, 1, 'Malappuram'),
(5, 1, 'Ernakulam'),
(6, 1, 'Thrissur'),
(7, 3, 'Nilgiri'),
(8, 1, 'wayanadu'),
(9, 3, 'wayanadu');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE IF NOT EXISTS `farmer` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `s_id` int(20) NOT NULL,
  `d_id` int(20) NOT NULL,
  `p_id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  `u_id` int(20) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `name`, `address`, `s_id`, `d_id`, `p_id`, `email`, `phone`, `user`, `password`, `u_id`) VALUES
(1, 'rtyuikl', 'fghjkl', 5678, 69, 678, 'dtyjukjl;''', 0, '', 0, 0),
(2, 'ertyui', 'jhg', 1, 1, 2, 'amruthagnair@gmail.com', 234567890, 'ammu', 111, 0),
(3, 'ertyui', 'edrtyguhijkol', 0, 0, 0, 'amruthagnair@gmail.com', 234567890, 'iii', 111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `farmingtips`
--

CREATE TABLE IF NOT EXISTS `farmingtips` (
  `f_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL,
  `itemname` varchar(30) NOT NULL,
  `quantity` varchar(45) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `farmingtips`
--

INSERT INTO `farmingtips` (`f_id`, `name`, `address`, `phone`, `itemname`, `quantity`) VALUES
(0, 'disa', 'chandanachalil', 799654467, 'sugarcanre', '2kg'),
(8, 'nudmug', 'madavath ghjjkdufaugfjsdklkdbsvbn', 4567890, '', '4567'),
(9, 'anjana', 'hemannd bavan ambalavayal po', 98764346, 'nudmug', '1pieace'),
(10, 'shaqna', 'eravannapuram', 2147483647, 'whitefrather', '25piece'),
(11, 'ammu', 'hemanadbavan', 986545677, 'mulberry', '10kg'),
(12, 'aleena', 'mattaklkullam', 2147483647, 'strobaryy', '2kg');

-- --------------------------------------------------------

--
-- Table structure for table `farmingtips2`
--

CREATE TABLE IF NOT EXISTS `farmingtips2` (
  `fa_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(43) NOT NULL,
  `season` varchar(100) NOT NULL,
  `tips` varchar(30) NOT NULL,
  PRIMARY KEY (`fa_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `farmingtips2`
--

INSERT INTO `farmingtips2` (`fa_id`, `name`, `season`, `tips`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, '', '', ''),
(8, 'ssdff', 'hfjhkj.', 'FYGHUJIKOPL;[');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE IF NOT EXISTS `feedbacks` (
  `fe_id` int(30) NOT NULL AUTO_INCREMENT,
  `cu_id` int(40) NOT NULL,
  `itemname` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  PRIMARY KEY (`fe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`fe_id`, `cu_id`, `itemname`, `feedback`) VALUES
(7, 0, 'cardamom', 'good'),
(8, 0, 'ghjkl', 'dfghj'),
(9, 0, 'dfghbmn,.', 'ghjk'),
(10, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `t_id` int(40) NOT NULL AUTO_INCREMENT,
  `item` varchar(56) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`t_id`, `item`) VALUES
(2, 'spices'),
(3, 'ornamental flowers'),
(4, 'fruits');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `language` text NOT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`l_id`, `language`) VALUES
(1, 'Malayalam'),
(2, 'English'),
(3, 'Hindi');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `p_id` int(20) NOT NULL AUTO_INCREMENT,
  `s_id` int(20) NOT NULL,
  `d_id` int(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`p_id`, `s_id`, `d_id`, `place`) VALUES
(1, 1, 1, 'ambalavayal'),
(2, 1, 1, 'mananadavadi'),
(4, 3, 2, 'thamarasheri'),
(5, 3, 1, 'ambukuthi'),
(6, 1, 1, 'bathery'),
(7, 5, 7, 'thaloor'),
(8, 3, 5, 'kochi'),
(9, 1, 1, 'anappara'),
(10, 1, 1, 'kalppatta'),
(11, 1, 1, 'vaduvanchal'),
(12, 3, 2, 'ambalavayal');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(20) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`s_id`, `state`) VALUES
(1, 'kerala'),
(2, 'kerala'),
(3, 'kerala'),
(4, 'karanataka'),
(5, 'Tamilnadu'),
(6, 'Maharashtra'),
(7, 'Maharashtra'),
(8, 'Maharashtra'),
(9, 'kerala'),
(10, 'kerala');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `utype` varchar(2) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `user`, `password`, `utype`) VALUES
(1, 'admin', 'system', 'A'),
(2, 'iii', '111', 'G'),
(3, 'yyy', '111', 'C'),
(4, 'iii', '111', 'C'),
(5, 'hima', '9164', 'C');
