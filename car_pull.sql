-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 05:48 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_pull`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `car_num` int(10) NOT NULL,
  `car_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `from` varchar(18) NOT NULL,
  `to` varchar(18) NOT NULL,
  `time` varchar(20) NOT NULL,
  `owner_id` varchar(20) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_num`, `car_name`, `date`, `from`, `to`, `time`, `owner_id`, `desc`) VALUES
(123, 'Tata Nano', '2016-04-20', 'vit', 'vellore', '10 am', 'saviour@gmail.com', 'vit main gate vellore bus stand market dominos'),
(124, 'Tata Tiyago', '2016-04-20', 'Katpadi', 'vit', '8 am', 'savanmorya@gmail.com', 'katpadi railway station vit main gate hostel'),
(125, 'Maruti WagonR', '2016-04-22', 'vit', 'chennai', '4 am', 'pkmorya@gmail.com', 'vit main gate chennai'),
(126, 'Mahindra Scorpio Aut', '2016-04-22', 'ara', 'patna', '10am', 'mithilesh@gmail.com', 'ara station patna station gandhi maidan big bazar'),
(127, 'Mahindra Xylo', '2016-04-25', 'vellore', 'cmc', '10am', 'saviour@gmail.com', 'vit main gate chitoor cms dominos'),
(128, 'Honda CRV', '2016-04-25', 'cmc', 'vit', '4pm', 'falim@gmail.com', 'cmc vellore vit main gate'),
(129, 'Tata Safari', '2016-04-25', 'cmc', 'vit', '6pm', 'mithu@gmail.com', 'cmc chittor vit main gate'),
(130, 'Tata Vista', '2016-04-23', 'katpadi', 'vellore', '10am', 'mks@gmail.com', 'katpadi cmc vellore bus stand');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `zipcode` int(10) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `mob` varchar(11) DEFAULT '8110019407'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `city`, `zipcode`, `pass`, `mob`) VALUES
('mks', 'mithu@gmail.com', 'ara', 895623, '1478963', '8110019407'),
('onemore', 'falim@gmail.com', 'Ara', 802183, '852140', '8110019407'),
('MITHILE', 'mithilesh@gmail.com', 'VELLORE', 632014, '856321', '8110019407'),
('gdgg', 'mithilesh@gmail.com', 'VELLORE', 856321, '46555', '8110019407'),
('czvxv', 'saviour@gmail.com', 'VELLORE', 852314, '879654', '8110019407'),
('vhsvhcvsv', 'saviour@gmail.com', 'ara', 789456, 'saefedd', '8110019407'),
('mithilesh kumar', 'mithileshkumar.singh2013@vit.ac.in', 'vellore', 632014, 'savanmorya1', '8229003807'),
('rishav kumar', 'rishav@gmail.com', 'vellore', 632014, '123456', '98653096'),
('savan morya', 'savanmorya@gmail.com', 'vellore', 632014, 'savan', '8110019407');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
