-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 03, 2015 at 04:27 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paypal`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `prod_cate` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`, `prod_cate`) VALUES
(1, 'PD1001', 'Veg Pakora', 'Veg Snacks & Rolls', 'cf.jpeg', '57.00', 1),
(2, 'PD1002', 'Onion Pakora', 'Veg Snacks & Rolls', 'cf.jpeg', '67.00', 1),
(3, 'PD1003', 'Egg Pakora', 'Non-Veg Snacks & Rolls', 'cf.jpeg', '77.00', 1),
(4, 'PD1004', 'Paneer Pakora', 'Veg Snacks & Rolls', 'cf.jpeg', '87.00', 1),
(5, 'PD1005', 'Veg Spring Roll', 'Veg Snacks & Rolls', 'cf.jpeg', '87.00', 1),
(6, 'PD1006', 'Paneer Spring Roll', 'Veg Snacks & Rolls', 'cf.jpeg', '97.00', 1),
(7, 'PD1007', 'Honey Baby Corn Cripsy', 'Veg Snacks & Rolls', 'cf.jpeg', '117.00', 1),
(8, 'PD1008', 'Chicken Spring Roll', 'Non-Veg Snacks & Rolls', 'cf.jpeg', '127.00', 1),
(9, 'PD1009', 'Fish Amritsari', 'Non-Veg Snacks & Rolls', 'cf.jpeg', '127.00', 1),
(10, 'PD1010', 'Fish Hindustani', 'Non-Veg Snacks & Rolls', 'cf.jpeg', '117.00', 1),
(11, 'PD1011', 'Chicken Pakora', 'Non-Veg Snacks & Rolls', 'cf.jpeg', '157.00', 1),
(12, 'PD2001', 'Veg Chowmin', 'Veg Chinese', 'cf.jpeg', '67.00', 2),
(13, 'PD2002', 'Veg Fried Rice', 'Veg Chinese', 'cf.jpeg', '67.00', 2),
(14, 'PD2003', 'Chilly Garlic Chowmin', 'Veg Chowmin', 'cf.jpeg', '77.00', 2),
(15, 'PD2004', 'Egg Fried Rice', 'Non-Veg Chinese', 'cf.jpeg', '77.00', 2),
(16, 'PD2005', 'Chicken Fried Rice', 'Non-Veg Chinese', 'cf.jpeg', '97.00', 2),
(17, 'PD2006', 'Paneer Chowmin', 'Veg Chinese', 'cf.jpeg', '97.00', 2),
(18, 'PD2007', 'Chicken Chowmin', 'Non-Veg Chinese', 'cf.jpeg', '107.00', 2),
(19, 'PD2008', 'Mix Chowmin', 'Non-Veg Chinese', 'cf.jpeg', '117.00', 2),
(20, 'PD2009', 'Mix Fried Rice', 'Non-Veg Chinese', 'cf.jpeg', '117.00', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
