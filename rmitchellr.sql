-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 10.6.173.72
-- Generation Time: Mar 30, 2015 at 07:32 AM
-- Server version: 5.5.33
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rmitchellr`
--

-- --------------------------------------------------------

--
-- Table structure for table `custTab`
--

DROP TABLE IF EXISTS `custTab`;
CREATE TABLE IF NOT EXISTS `custTab` (
  `custNo` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `custLast` varchar(25) NOT NULL,
  `custFirst` varchar(20) NOT NULL,
  `custAddress` varchar(40) NOT NULL,
  `custCity` varchar(15) NOT NULL,
  `custState` enum('MA','RI','NH') NOT NULL DEFAULT 'MA',
  `custZip` varchar(5) NOT NULL,
  `custEmail` varchar(40) DEFAULT NULL,
  `custPhone` varchar(10) DEFAULT NULL,
  `custAddDate` date NOT NULL,
  `custChangeDate` date DEFAULT NULL,
  PRIMARY KEY (`custNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `custTab`
--

INSERT INTO `custTab` VALUES(00001, 'Mouse', 'Mickey', '1 Disney Drive', 'Orlando', 'MA', '32985', 'mickey@disney.com', '7845841457', '2014-11-11', NULL);
INSERT INTO `custTab` VALUES(00002, 'Duck', 'Daisy', '2 WB Way', 'New York', 'MA', '54785', 'quack@gmail.com', '5456225445', '2014-11-02', '2014-11-03');
INSERT INTO `custTab` VALUES(00003, 'Bunny', 'Bugs', '4 Rabbit St', 'Akron', 'RI', '21455', 'carrot@hotmail.net', '9785124788', '2014-11-09', '2014-11-29');
INSERT INTO `custTab` VALUES(00004, 'BUBA', 'Daniel', '4 Bear Creek', 'Backwoods', 'RI', '12345', 'db@thewoods.net', '5084575428', '2014-11-03', '2014-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `studentTab`
--

DROP TABLE IF EXISTS `studentTab`;
CREATE TABLE IF NOT EXISTS `studentTab` (
  `stuID` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `stuFirst` varchar(20) NOT NULL DEFAULT '',
  `stuLast` varchar(25) NOT NULL DEFAULT '',
  `stuAddress` varchar(35) NOT NULL DEFAULT '',
  `stuZip` varchar(5) NOT NULL DEFAULT '',
  `stuStatus` enum('f','p') NOT NULL DEFAULT 'f',
  `stuEnrollAge` int(2) DEFAULT NULL,
  `stuComment` text NOT NULL,
  `stuDateAdded` date NOT NULL DEFAULT '0000-00-00',
  `stuDateChanged` date DEFAULT NULL,
  PRIMARY KEY (`stuID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `studentTab`
--

INSERT INTO `studentTab` VALUES(1, 'Andrew', 'Anderson', '1 Apple St', '12345', 'f', 22, 'andy test', '2014-11-03', '2014-11-03');
INSERT INTO `studentTab` VALUES(2, 'Barb', 'Bonds', '2 Blue Way', '23546', 'p', 31, '', '2014-11-03', NULL);
INSERT INTO `studentTab` VALUES(3, 'Chuck', 'Clark', '3 Carrot Way', '34568', 'f', 42, '', '2014-11-03', NULL);
INSERT INTO `studentTab` VALUES(4, 'Debby', 'Douglas', '1 East Way', '12345', 'f', 25, '', '2014-11-03', '2015-03-30');
INSERT INTO `studentTab` VALUES(21, 'Fred', 'Fellows', '10 Main St', '90210', 'f', 45, 'karate kid', '2015-03-29', '2015-03-30');
