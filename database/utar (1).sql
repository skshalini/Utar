-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 02:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utar`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_reg`
--

CREATE TABLE `buyer_reg` (
  `buyer_reg_id` int(25) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(35) NOT NULL,
  `phn_no` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_reg`
--

INSERT INTO `buyer_reg` (`buyer_reg_id`, `name`, `email`, `password`, `phn_no`, `gender`) VALUES
(1, 'shreya', 'shreya@gmail.com', 'Shreya@123', '2147483647', 'female'),
(4, 'John', 'john@gmail.com', 'John@123', '9708665645', 'male'),
(5, 'Rohit Sharma', 'rohit@gmail.com', 'Rohit@123', '8968976590', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `buyer_wishlist`
--

CREATE TABLE `buyer_wishlist` (
  `product_id` int(25) NOT NULL,
  `buyer_reg_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer_wishlist`
--

INSERT INTO `buyer_wishlist` (`product_id`, `buyer_reg_id`) VALUES
(101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(5) NOT NULL,
  `cat_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `cat_name`) VALUES
(1, 'Education'),
(2, 'Electronic'),
(3, 'Home appliance'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(15) NOT NULL,
  `item_name` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `item_quality` varchar(45) CHARACTER SET utf8 NOT NULL,
  `description` varchar(550) NOT NULL,
  `image` varchar(355) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `item_name`, `category`, `item_quality`, `description`, `image`, `price`) VALUES
(101, 'Machine Learning Book', 'Education', 'New', 'Good book', 'book1.jpg', '69'),
(102, 'C++ Book', 'Education', 'New', 'Good Reference', 'book2.jpg', '120'),
(103, 'Table Fan', 'Electronic', 'Old', 'Good Working ', 'img3.jpg', '69'),
(104, 'Mixer Grinder', 'Home Appliances', 'Old', 'Good Working', 'img2.png', '69'),
(105, 'Foot-Boll', 'Sports', 'New', 'Nice ', 'sports1.jpg', '170'),
(106, 'Sports Shoes', 'Sports', 'New', 'Nice Color', 'sports3.jpg', '200'),
(107, 'Cat-Wallpaper', 'Other', 'New', 'Nice Picture', 'cat.jpg', '69'),
(108, 'Study Lamp', 'Other', 'New', 'Good Working', 'table_lamp3.jpg', '170');

-- --------------------------------------------------------

--
-- Table structure for table `seller_add_item`
--

CREATE TABLE `seller_add_item` (
  `item_id` int(25) NOT NULL,
  `seller_reg_id` int(25) NOT NULL,
  `item_name` varchar(225) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(225) CHARACTER SET utf8mb4 NOT NULL,
  `category` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `item_quality` varchar(45) CHARACTER SET utf8mb4 NOT NULL,
  `description` varchar(550) CHARACTER SET utf8mb4 NOT NULL,
  `image` varchar(355) CHARACTER SET utf8mb4 NOT NULL,
  `price` varchar(10) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_add_item`
--

INSERT INTO `seller_add_item` (`item_id`, `seller_reg_id`, `item_name`, `email`, `category`, `item_quality`, `description`, `image`, `price`) VALUES
(5, 1, 'C++ Book', 'john@gmail.com', 'Education', 'New', 'Good Reference', 'book2.jpg', '250');

-- --------------------------------------------------------

--
-- Table structure for table `seller_reg`
--

CREATE TABLE `seller_reg` (
  `seller_reg_id` int(25) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(35) NOT NULL,
  `phn_no` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_reg`
--

INSERT INTO `seller_reg` (`seller_reg_id`, `name`, `email`, `password`, `phn_no`, `image`, `gender`) VALUES
(1, 'John ', 'john@gmail.com', 'John@123', '9996788856', 'pic4.jpg', 'Male'),
(2, 'Riya Gupta', 'riya@gmail.com', 'Riya@123', '8907564787', 'img1.jpg', 'Female'),
(6, 'Jack', 'jack@gmail.com', 'Jack@123', '9706944325', 'pic1.jpg', 'Male'),
(8, 'benny', 'benny@gmail.com', 'Benny@123', '9578656789', 'img2.jpg', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_reg`
--
ALTER TABLE `buyer_reg`
  ADD PRIMARY KEY (`buyer_reg_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phn_no` (`phn_no`);

--
-- Indexes for table `seller_add_item`
--
ALTER TABLE `seller_add_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `seller_reg`
--
ALTER TABLE `seller_reg`
  ADD PRIMARY KEY (`seller_reg_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phn_no` (`phn_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer_reg`
--
ALTER TABLE `buyer_reg`
  MODIFY `buyer_reg_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seller_add_item`
--
ALTER TABLE `seller_add_item`
  MODIFY `item_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller_reg`
--
ALTER TABLE `seller_reg`
  MODIFY `seller_reg_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
