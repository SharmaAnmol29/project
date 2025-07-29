-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 09:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `admin_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`email`, `password`, `full_name`, `admin_type`) VALUES
('anmol99@yahoo.com', 'sharma1999', 'anmol sharma', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category_table`
--

CREATE TABLE `category_table` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_table`
--

INSERT INTO `category_table` (`category_id`, `category_name`, `description`) VALUES
(1, 'Musician', 'Select a wide range of top o the line musicians');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(500) NOT NULL,
  `professional_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `price`, `description`, `professional_id`) VALUES
(1, 'basic', 500, 'you get basic privileges', 1),
(12, 'Shagun', 45000, 'hgy jhvguj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `professional_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professional_signup`
--

CREATE TABLE `professional_signup` (
  `pid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `display_name` varchar(100) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `display_pic` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `basic_price` float NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `otp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professional_signup`
--

INSERT INTO `professional_signup` (`pid`, `email`, `password`, `display_name`, `logo`, `display_pic`, `description`, `basic_price`, `mobile_no`, `otp`) VALUES
(1, 'anmol99@yahoo.com', 'sharma1999', 'anmol', '36459-fireflies-the-last-of-us-1920x1080-game-wallpaper.ico', '36459-fireflies-the-last-of-us-1920x1080-game-wallpaper.ico', 'this is a test paragraph', 45.5, '123456789', '34191'),
(2, 'sharma88@yahoo.org', 'sharma1888', 'dinesh', 'logo', 'pic', 'example discription', 55.5, '987654321', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup_table`
--

CREATE TABLE `user_signup_table` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `display_pic` varchar(100) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `otp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_signup_table`
--

INSERT INTO `user_signup_table` (`email`, `password`, `mobileno`, `display_pic`, `display_name`, `description`, `otp`) VALUES
('monika@gmail.com', '111', '7508398855', 'uploadedimages/g1.jpg', 'Monika', 'jdsbv sdvbsfv sdbvj', ''),
('sharma99anmol@gmail.in', 'sharma1999', '123456789', '36459-fireflies-the-last-of-us-1920x1080-game-wallpaper.ico', 'anmol', 'this is an example para practice', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `category_table`
--
ALTER TABLE `category_table`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `professional_id` (`professional_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `professional_id` (`professional_id`);

--
-- Indexes for table `professional_signup`
--
ALTER TABLE `professional_signup`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user_signup_table`
--
ALTER TABLE `user_signup_table`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_table`
--
ALTER TABLE `category_table`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professional_signup`
--
ALTER TABLE `professional_signup`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`professional_id`) REFERENCES `professional_signup` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`professional_id`) REFERENCES `professional_signup` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
