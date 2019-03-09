-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 11:22 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gec online forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro_admin`
--

CREATE TABLE `pro_admin` (
  `sno` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_admin`
--

INSERT INTO `pro_admin` (`sno`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pro_faculty`
--

CREATE TABLE `pro_faculty` (
  `sno` int(10) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_faculty`
--

INSERT INTO `pro_faculty` (`sno`, `userid`, `name`, `email`, `password`, `designation`, `branch`, `phonenumber`, `gender`) VALUES
(1, '8', 'priya', 'priya@gmail.com', 'fabc7cec09c5e59fd2cbf1d59cccc838', 'assistant professor', 'cse', 9898989898, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `pro_users`
--

CREATE TABLE `pro_users` (
  `sno` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `password` varchar(35) NOT NULL,
  `cpassword` varchar(35) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_users`
--

INSERT INTO `pro_users` (`sno`, `name`, `email`, `userid`, `password`, `cpassword`, `phonenumber`, `gender`) VALUES
(10, 'divya', 'divya@gmail.com', '2', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 'female'),
(15, 'tej', 'tej@gmail.com', '4', '19edacd33ab84209efc96eb76f578f38', '19edacd33ab84209efc96eb76f578f38', 2147483647, 'male'),
(16, 'harika', 'harry@gmail.com', '5', '3b87c97d15e8eb11e51aa25e9a5770e9', '3b87c97d15e8eb11e51aa25e9a5770e9', 2147483647, 'female'),
(19, 'bindu', 'bindu@gmail.com', '8', 'e637c618876f2193f7fc882ff800215e', 'e637c618876f2193f7fc882ff800215e', 2147483647, 'female'),
(20, 'sai', 'sai@gmail.com', '10', 'a29bac723ca2d59ed78a2d715e17e92f', 'a29bac723ca2d59ed78a2d715e17e92f', 2147483647, ''),
(21, 'divya', 'divya@gmail.com', '5', '2cdd7064b290132617248dbfd85f740e', '2cdd7064b290132617248dbfd85f740e', 2147483647, 'female'),
(22, 'divya', 'divya@gmail.com', '6', '4cde13613afe0defc203ffa547f55431', '4cde13613afe0defc203ffa547f55431', 2147483647, 'female'),
(23, 'divya', 'divya@gmail.com', '6', '4cde13613afe0defc203ffa547f55431', '4cde13613afe0defc203ffa547f55431', 2147483647, 'female'),
(24, 'divya', 'divya@gmail.com', '11', '4cde13613afe0defc203ffa547f55431', '0204175f84a92be3b1d1c221b1d5f892', 2147483647, 'female'),
(25, 'divya', 'divya@gmail.com', '11', '4cde13613afe0defc203ffa547f55431', '0204175f84a92be3b1d1c221b1d5f892', 2147483647, 'female'),
(26, 'divya', 'divya@gmail.com', '11', '4cde13613afe0defc203ffa547f55431', '0204175f84a92be3b1d1c221b1d5f892', 2147483647, 'female'),
(27, 'divya', 'divya@gmail.com', '1', '4cde13613afe0defc203ffa547f55431', '0204175f84a92be3b1d1c221b1d5f892', 2147483647, 'female'),
(28, 'divya', 'divya@gmail.com', '11', '4cde13613afe0defc203ffa547f55431', '0204175f84a92be3b1d1c221b1d5f892', 2147483647, 'female'),
(29, 'divya', 'divya@gmail.com', '1', '4cde13613afe0defc203ffa547f55431', '4cde13613afe0defc203ffa547f55431', 2147483647, 'female'),
(30, 'divya', 'divya@gmail.com', '1', '4cde13613afe0defc203ffa547f55431', '4cde13613afe0defc203ffa547f55431', 2147483647, 'female'),
(31, 'satish', 'satish1234@gmail.com', '5', '89668d97bc2281951a871d2170f5149d', '89668d97bc2281951a871d2170f5149d', 2147483647, 'male'),
(32, 'tej', 'tej@gmail.com', '8', 'cd2e66db60be7f59deec409e7f87603e', '3c37ccb27683f19f61debaf31fd3743f', 2147483647, 'male'),
(33, 'gorre', 'admin@gmail.com', '11', 'c3d290ef9aea576ce9c488e5e948b102', '3c37ccb27683f19f61debaf31fd3743f', 2147483647, 'male'),
(34, 'gorre', 'admin@gmail.com', '11', 'c3d290ef9aea576ce9c488e5e948b102', '3c37ccb27683f19f61debaf31fd3743f', 2147483647, 'male'),
(35, 'sai', 'sai@gmail.com', '12', 'a4a1e4ad1643591ff2c041ff9167ff45', 'a4a1e4ad1643591ff2c041ff9167ff45', 2147483647, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro_admin`
--
ALTER TABLE `pro_admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `pro_faculty`
--
ALTER TABLE `pro_faculty`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `pro_users`
--
ALTER TABLE `pro_users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pro_admin`
--
ALTER TABLE `pro_admin`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pro_faculty`
--
ALTER TABLE `pro_faculty`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pro_users`
--
ALTER TABLE `pro_users`
  MODIFY `sno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
