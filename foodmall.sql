-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2020 at 03:30 PM
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
  `cust_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `contact` int(15) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL,
  `pref` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `username`, `email`, `contact`, `address`, `password`, `pref`) VALUES
(1, 'hhgvh', 'bkj', 'gbkuh@gvjh', 76543456, '0', '66', 'Veg'),
(2, 'bhj', 'cxv', 'dvd@bk', 98767844, '0', 'hhh', 'Non-Veg'),
(3, 'fgttbt', 'tgbt', 'btrg@hn', 2147483647, 'hyf', 'a1', 'Veg'),
(4, 'fvf', 'v', 'v@fbgdb', 4567876, 'y', 'aa', 'Veg'),
(5, 'fvf', 'v', 'v@fbgdb', 4567876, 'y', 'aa', 'Veg'),
(6, 'bm', 'bhn', 'bhjb@vkh', 4567876, 'bkj', 'rr', 'Non-Veg'),
(7, 'bm', 'bhn', 'bhjb@vkh', 4567876, 'bkj', 'rr', 'Non-Veg'),
(8, 'bkj', 'bj', 'gvujg@djh', 56786787, 'nvjhb', 'bhkjh', 'Non-Veg'),
(9, 'Chanchal Amarwani', 'ef', 'chanchal.amarwani1001@gmail.com', 76543456, 'saiheritage@gmail.com', 'saidutta@123', 'Non-Veg'),
(10, 'sfc', 'dd', 'dcds@gmai', 2147483647, 'ddd', 'dd', 'Veg'),
(11, 'Chanchal Amarwani', 'fce', 'chanchal.amarwani1001@gmail.com', 98767844, 'Gurunanak Nagar,Sindhi Colony,Wani', 'j', 'Non-Veg'),
(12, 'ss', 's', 'chanchal.amarwani1001@gmail.com', 4567876, 'Gurunanak Nagar,Sindhi Colony,Wani', 's', 'Veg'),
(13, 'Chanchal Amarwani', 'bkj', 'chanchal.amarwani1001@gmail.com', 4567876, 'admin@gmail.com', 'ADMIN', 'Veg'),
(14, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 4567876, 'admin@gmail.com', 'ADMIN', 'Non-Veg'),
(15, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 4567876, 'admin@gmail.com', 'ADMIN', 'Non-Veg'),
(16, 'Chanchal Amarwani', 'bkj', 'chanchal.amarwani1001@gmail.com', 4567876, 'saiheritage@gmail.com', 'saidutta@123', ''),
(17, 'Chanchal Amarwani', 'bkj', 'chanchal.amarwani1001@gmail.com', 4567876, 'admin@gmail.com', 'ADMIN', ''),
(18, 'Chanchal Amarwani', 'bkj', 'chanchal.amarwani1001@gmail.com', 76543456, 'admin@gmail.com', 'ADMIN', ''),
(19, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 4567876, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(20, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 76543456, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(21, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 4567876, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(22, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 76543456, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(23, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 76543456, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(24, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 4567876, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(25, 'Chanchal Amarwani', 'm', 'chanchal.amarwani1001@gmail.com', 4567876, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(26, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 76543456, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(27, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 4567876, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(28, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 4567876, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(29, 'bj', 'saiheritage@gmail.com', 'nbkj@vyj', 2147483647, 'bkj', 'saidutta@123', 'Non-Veg'),
(30, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(31, 'ssa', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(32, 'x', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(33, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(34, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(35, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(36, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(37, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(38, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(39, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(40, 'as', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(41, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(42, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(43, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(44, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(45, 'Chanchal Amarwani', 'saiheritage@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', ''),
(46, 'Chanchal Amarwani', 'saiheritag', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', '1', 'Non-Veg'),
(47, 'Chanchal Amarwani', 'sai', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(48, 'Chanchal Amarwani', 'sa', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(49, 'Chanchal Amarwani', 'hh@gmail.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(50, 'Chanchal Amarwani', 'saiheritag.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(51, 'Chanchal Amarwani', 'vv.com', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(52, 'Chanchal Amarwani', 'hhhj', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(53, 'Chanchal Amarwani', 'aa', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(54, 'Chanchal Amarwani', 'jh', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(55, 'Chanchal Amarwani', 'hg', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Veg'),
(56, 'Chanchal Amarwani', 'tt', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(57, 'Chanchal Amarwani', 'hhth', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(58, 'Chanchal Amarwani', 'mj', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(59, 'Chanchal Amarwani', 'jujj', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(60, 'Chanchal Amarwani', 'jjjjj', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg'),
(61, 'Chanchal Amarwani', 'saiheritakkk', 'chanchal.amarwani1001@gmail.com', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'saidutta@123', 'Non-Veg');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `f_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `r_id` int(11) NOT NULL,
  `images` text NOT NULL,
  `options` text NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`f_id`, `name`, `price`, `description`, `r_id`, `images`, `options`, `type`) VALUES
(23, 'juice', 30, 'rferfvridoufvoisdl', 3, 'images/Chocolate_Golgappe.jpg', 'Enable', 'Veg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(30) NOT NULL,
  `f_id` int(30) NOT NULL,
  `foodname` varchar(100) NOT NULL,
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
(42, 23, 'juice', 30, 1, '2020-06-21', 12, 3),
(43, 23, 'juice', 30, 1, '2020-06-21', 12, 3),
(44, 23, 'juice', 30, 1, '2020-06-21', 12, 3),
(45, 23, 'juice', 30, 1, '2020-06-21', 12, 3),
(46, 23, 'juice', 30, 1, '2020-06-21', 12, 3),
(47, 23, 'juice', 30, 1, '2020-06-21', 12, 3),
(48, 23, 'juice', 30, 1, '2020-06-21', 12, 3),
(49, 23, 'juice', 30, 1, '2020-06-21', 12, 3),
(50, 23, 'juice', 30, 3, '2020-06-21', 12, 3),
(51, 23, 'juice', 30, 3, '2020-06-21', 12, 3),
(52, 23, 'juice', 30, 3, '2020-06-21', 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `r_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `contact` int(15) NOT NULL,
  `address` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`r_id`, `name`, `email`, `username`, `contact`, `address`, `password`) VALUES
(3, 'Aswad', 'chanchal.amarwani1001@gmail.com', 'aswad', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'aa11'),
(4, 'Chanchal Amarwani', 'chanchal.amarwani1001@gmail.com', 'mummas kitchen', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'aa'),
(5, 'Chanchal Amarwani', 'chanchal.amarwani1001@gmail.com', 'mummas kitchen', 2147483647, 'Gurunanak Nagar,Sindhi Colony,Wani', 'aa');

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
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
