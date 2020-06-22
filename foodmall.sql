-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 08:21 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `pref` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `username`, `email`, `contact`, `address`, `password`, `pref`) VALUES
(68, 'Simran', 'simmi', 'simran@gmail.com', '7878676767', 'Gurunanak Nagar,Sindhi Colony,Wani', 'simmi', 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `f_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `price` int(30) NOT NULL,
  `description` text NOT NULL,
  `r_id` int(30) NOT NULL,
  `images` text NOT NULL,
  `options` text NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `name`, `price`, `description`, `r_id`, `images`, `options`, `type`) VALUES
(26, 'Momos', 50, 'NonVeg MOmos ', 8, 'images/nonveg_momos.jpg', 'Enable', 'Non-Veg'),
(27, 'coffee', 30, 'Hot Special ', 8, 'images/coffee.jpg', 'Enable', 'Veg'),
(28, 'Biryani', 100, 'non Veg Biryani', 9, 'images/biryani_chicken.jpg', 'Enable', 'Non-Veg'),
(29, 'veg Thali', 70, 'Veg thali', 9, 'images/vegThali.jpg', 'Enable', 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(30) NOT NULL,
  `f_id` int(30) NOT NULL,
  `foodname` varchar(250) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `c_id` int(30) NOT NULL,
  `r_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `f_id`, `foodname`, `price`, `quantity`, `order_date`, `c_id`, `r_id`) VALUES
(67, 27, 'coffee', 30, 1, '2020-06-22', 68, 8);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `r_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`r_id`, `name`, `email`, `username`, `contact`, `address`, `password`) VALUES
(8, 'Aswad', 'Aswad@gmail.com', 'aswad', '7654345621', 'Gurunanak Nagar,Sindhi Colony,Wani', 'aswad'),
(9, 'Mumma\'s Kitchen', 'mummas@gmail.com', 'mummas kitchen', '8987878767', 'Kothrud,pune', 'kitchen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `f_id` (`f_id`),
  ADD KEY `r_id` (`r_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `f_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `r_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `restaurant` (`r_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `food` (`f_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`r_id`) REFERENCES `restaurant` (`r_id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`c_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
