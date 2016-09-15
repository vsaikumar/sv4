-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 08:52 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `motor_vehicle_dealer`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
(1, 'SUV'),
(2, 'Small & Smart'),
(3, 'Large Passenger'),
(4, 'Trucks'),
(5, 'Classic Rides');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `infoId` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `info` longtext NOT NULL,
  PRIMARY KEY (`infoId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`infoId`, `title`, `info`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `customerID` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryID` int(11) NOT NULL,
  `productCode` varchar(10) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `listPrice` decimal(65,2) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `productCode`, `productName`, `colour`, `listPrice`) VALUES
(17, 1, 'hyun_ix35', 'Hyundai IX35', '', 312999.99),
(18, 1, 'Audi_Q7', 'Audi Q7', '', 699999.99),
(20, 1, 'BMW-X4M', 'BMW X4 M', '', 456987.00),
(21, 1, 'BMW_X6M', 'BMW X6 M', '', 989789.99),
(23, 1, 'Bendz_GLE', 'Mercedes GLE', '', 1234586.00),
(24, 1, 'Duster', 'Renault Duster', '', 432899.00),
(25, 1, 'Volvo_XC60', 'Volvo XC60', '', 567799.00),
(26, 1, 'Sportage', 'Kia Sportage', '', 432899.00),
(27, 2, 'Volvo_V40', 'Volvo V40', '', 299989.99),
(29, 2, 'Bendz_GLA', 'Mercedes GLA', '', 456987.00),
(32, 5, 'BMW_3S', 'BMW 3 Series', '', 399678.00),
(33, 5, 'Civic', 'Honda Civic', '', 387999.00),
(34, 5, 'Corolla', 'Toyota Corolla', '', 387987.99),
(35, 5, 'Audi_A4', 'Audi A4', '', 432899.00),
(36, 3, 'Bendz_Vian', 'Mercedes Viano', '', 899999.99),
(37, 3, 'Bendz_Vito', 'Mercedes Vito', '', 765999.99),
(38, 3, 'Ford-E_150', 'Ford E150', '', 689997.00),
(39, 3, 'VW_Carra', 'VW Carravel', '', 699999.99),
(41, 3, 'VW_kombi', 'VW Kombi', '', 699999.99),
(42, 3, 'Highlander', 'Toyota Highlander', '', 779899.99),
(50, 5, 'BMW_6S', 'BMW 6 Series', '', 911000.00),
(51, 4, 'Hilux', 'Toyota Hilux', '', 510000.00),
(53, 4, 'Isuzu', 'Isuzu KB', '', 500999.00),
(55, 4, 'Navara', 'Nissan Navara', '', 520999.00),
(56, 4, 'Legend_45', 'Toyota Legend', '', 625999.99),
(57, 4, 'Ranger', 'Ford Ranger', '', 569999.99),
(58, 4, 'VW_Amarok', 'VW Amarok', '', 532999.00),
(59, 2, 'CX3', 'Masda CX3', '', 379999.99);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
