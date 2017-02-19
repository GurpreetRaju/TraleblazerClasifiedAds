-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2014 at 06:55 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Username` varchar(20) NOT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Pass`) VALUES
('traleblazer', 'blazer');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `ad_title` varchar(50) NOT NULL,
  `photos` varchar(100) NOT NULL,
  `description` varchar(150) DEFAULT NULL,
  `price` bigint(11) DEFAULT NULL,
  `cusname` varchar(15) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `class` varchar(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ad_title`, `photos`, `description`, `price`, `cusname`, `phone`, `email`, `location`, `id`, `class`) VALUES
('Demo car', '3,demo1.jpg,demo2.jpg,demo3.jpg', 'Swift car for sale!', 200000, 'Gurpreet', 8528637935, 'gurpreetraj92@gmail.com', 'Punjab', 50, 'vehicle'),
('Demo bike', '1,b-m-w-bike.jpeg', 'Bike for sale!', 50000, 'Gurpreet', 9872069269, 'gurpreet.r.93@gmail.com', 'Punjab', 51, 'bike'),
('Car accesory', '1,_steering_wheel_1350455010.jpg', 'Steering for sale', 500, 'Raj', 7589598526, 'kumarmanjit67@yahoo.in', 'Punjab', 52, 'car_accessory'),
('Bed Demo', '1,bed.jpg', 'Bed for sale', 7500, 'Deep', 8528645612, 'deep@gmail.com', 'Punjab', 53, 'bed'),
('Chairs for sale', '1,Swedish_Windsor_Chairs.jpg', 'Fancy chairs for sale', 2000, 'Vikram singh', 8523694521, 'vikram678@gmail.com', 'Punjab', 54, 'chair'),
('Table demo', '1,mccoy_pedestal_table.jpg', 'fancy table for sale', 500, 'Mira', 7418529630, 'mira343@gmail.com', 'Punjab', 55, 'table'),
('Computer demo', '1,computer.jpg', 'Dual core Second generation', 12000, 'Deepak', 9041546765, 'deep1@gmail.com', 'Punjab', 56, 'computer'),
('Mobile Phone', '2,mob.png,nokia-lumia-710-t-mobile.jpg', 'Mobile Phone Nokia For sale', 5000, 'Mira', 9876543210, 'mira23@gmail.com', 'Punjab', 57, 'mobile');

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE IF NOT EXISTS `bike` (
  `brandname` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `kms` int(11) NOT NULL,
  `condition` varchar(4) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`brandname`, `model`, `year`, `kms`, `condition`, `id`) VALUES
('BMW', 'Bike', 2002, 80000, 'used', 51);

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE IF NOT EXISTS `computer` (
  `id` int(11) NOT NULL,
  `brandname` varchar(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `hdd` int(11) NOT NULL,
  `cpu` varchar(20) NOT NULL,
  `condition` varchar(4) NOT NULL,
  `monitor` varchar(3) DEFAULT NULL,
  `keyboard` varchar(3) DEFAULT NULL,
  `mouse` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `brandname`, `ram`, `hdd`, `cpu`, `condition`, `monitor`, `keyboard`, `mouse`) VALUES
(56, 'HP', 2048, 500, 'Dual core', 'used', 'yes', 'Yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `qual` varchar(20) NOT NULL,
  `exp` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--


-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE IF NOT EXISTS `laptop` (
  `id` int(11) NOT NULL,
  `brandname` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `ram` int(11) NOT NULL,
  `hdd` int(11) NOT NULL,
  `cpu` varchar(20) NOT NULL,
  `condition` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--


-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile` (
  `id` int(11) NOT NULL,
  `brandname` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `condition` varchar(4) NOT NULL,
  `charger` tinyint(1) DEFAULT NULL,
  `headphone` tinyint(1) DEFAULT NULL,
  `datacable` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `brandname`, `model`, `condition`, `charger`, `headphone`, `datacable`) VALUES
(57, 'Vaio', 'K67', 'new', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE IF NOT EXISTS `tv` (
  `id` int(11) NOT NULL,
  `make` varchar(15) NOT NULL,
  `model` varchar(10) NOT NULL,
  `cond` varchar(4) NOT NULL,
  `reso` varchar(10) DEFAULT NULL,
  `size` float NOT NULL,
  `type` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv`
--


-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `brandname` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `bodytype` varchar(10) DEFAULT NULL,
  `kms` int(11) NOT NULL,
  `condition` varchar(4) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`brandname`, `model`, `year`, `bodytype`, `kms`, `condition`, `id`) VALUES
('Suzuki', 'Swift', 1999, 'Sedan', 20000, 'used', 50);
