-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 06, 2015 at 12:19 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bug`
--

CREATE TABLE IF NOT EXISTS `bug` (
  `id_bug` int(200) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `type` varchar(45) NOT NULL,
  `porirty` varchar(45) NOT NULL,
  `status` text NOT NULL,
  `id_tester` int(200) NOT NULL,
  `id_dev` int(200) NOT NULL,
  PRIMARY KEY (`id_bug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `bug`
--

INSERT INTO `bug` (`id_bug`, `description`, `type`, `porirty`, `status`, `id_tester`, `id_dev`) VALUES
(1, 'test bug', 'Ui', 'low', 'closed', 1, 1),
(2, 'ay 7ga ', 'Business', 'Medium', 'closed', 2, 1),
(3, 'kdjfsg', 'Business', 'High', 'open', 0, 0),
(4, 'hjgsdjga', 'UI', 'critical', 'open', 0, 0),
(5, 'jkfek', 'UI', 'Medium', 'open', 0, 0),
(6, 'new ', 'Business', 'Low', 'open', 0, 0),
(7, 'new ', 'Business', 'Low', 'open', 0, 0),
(8, 'again', 'UI', 'High', 'closed', 0, 0),
(9, 'test m3 dr 3''ada ', 'Business', 'critical', 'open', 0, 0),
(10, 'rana bug', 'Business', 'critical', 'open', 0, 0),
(11, 'test object', 'Business', 'Medium', 'open', 0, 0),
(12, 'maza bug ', 'Business', 'High', 'open', 0, 0),
(13, '123', 'UI', 'Medium', 'open', 0, 0),
(14, '3b7amed', 'UI', 'Low', 'open', 0, 0),
(15, 'hateraaaas', 'UI', 'High', 'open', 0, 0),
(19, 'aaaaa', 'UI', 'Medium', 'open', 0, 0),
(20, 'hh', 'UI', 'Low', 'open', 0, 0),
(21, 'test m3 dr ahd', 'Business', 'Medium', 'open', 0, 0),
(22, 'modeeer', 'Business', 'Medium', 'open', 0, 0),
(23, 'hjgsdjga', 'UI', 'critical', 'closed', 0, 0),
(24, 'bug with isma3eeeN', 'Business', 'critical', 'open', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `id_dev` int(200) NOT NULL AUTO_INCREMENT,
  `dev_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_dev`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`id_dev`, `dev_name`) VALUES
(4, 'root'),
(9, 'kjjkjkjkkj'),
(10, 'mmm'),
(11, 'hdh'),
(12, 'hdh'),
(13, 'hdh'),
(14, 'jhhfhjfdahjfdhjfsdakjfs'),
(15, 'yii'),
(16, 'yii'),
(17, 'root'),
(18, 'ahmed'),
(19, 'haterty'),
(20, 'ali'),
(21, 'tttttt'),
(22, 'omar'),
(23, 'omar'),
(24, 'root'),
(25, 'basata');

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE IF NOT EXISTS `tester` (
  `id_tester` int(200) NOT NULL AUTO_INCREMENT,
  `tester_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_tester`),
  UNIQUE KEY `id_tester` (`id_tester`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`id_tester`, `tester_name`) VALUES
(1, 'asd'),
(2, 'maza'),
(3, 'mazaaaa'),
(4, 'hhhhhh'),
(5, 'newtester'),
(6, 'root'),
(7, 'yyyyyy'),
(8, 'yyyyyy'),
(9, 'mhmd'),
(10, 'b'),
(11, 'yii'),
(12, 'root'),
(13, 'ttte'),
(14, 'zozo'),
(15, 'yyyyy'),
(16, 'sa3eeed'),
(17, 'sa3eeed'),
(18, 'esnega');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
