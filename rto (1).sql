-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 03:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `video` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `image`, `video`) VALUES
('admin@gmail.com', 'admin', 'admin_images/download.png', 'admin_images/Automated_driving_test_track(720p).mp4');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `video1` varchar(100) NOT NULL,
  `video2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`image1`, `image2`, `image3`, `image4`, `video1`, `video2`) VALUES
('demo/Screenshot (21).png', 'demo/Screenshot (5).png', 'demo/Screenshot (4).png', 'demo/Screenshot (22).png', 'demo/license_proton_1637602172128.mp4', 'demo/vehicle_proton_1637601983172.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `licen`
--

CREATE TABLE `licen` (
  `type` varchar(50) NOT NULL,
  `rto_office` varchar(50) NOT NULL,
  `class_of_vehicle` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `d_o_b` date NOT NULL,
  `age` int(5) NOT NULL,
  `aadhar_no` varchar(60) NOT NULL,
  `education` varchar(50) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `talluk` varchar(50) NOT NULL,
  `house_no` varchar(20) NOT NULL,
  `village` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(15) NOT NULL,
  `image` varchar(200) NOT NULL,
  `l_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `licen`
--

INSERT INTO `licen` (`type`, `rto_office`, `class_of_vehicle`, `name`, `ph_no`, `email`, `gender`, `d_o_b`, `age`, `aadhar_no`, `education`, `place_of_birth`, `talluk`, `house_no`, `village`, `city`, `pincode`, `image`, `l_id`) VALUES
('Driving license', 'chennai central', '2 wheeler without gear', 'jaga', '789456123', 'jaga@gmail.com', 'male', '2021-11-03', 21, '1234567890', '12th', 'namakkal', 'namakkal', 'g-2', 'aagaram', 'namakkal', '256314', 'license_applicant/login logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `type` varchar(50) NOT NULL,
  `rto_office` varchar(50) NOT NULL,
  `class_of_vehicle` varchar(70) NOT NULL,
  `name` varchar(50) NOT NULL,
  `ph_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `d_o_b` date NOT NULL,
  `age` int(11) NOT NULL,
  `aadhar_no` varchar(70) NOT NULL,
  `education` varchar(50) NOT NULL,
  `place_of_birth` varchar(50) NOT NULL,
  `talluk` varchar(50) NOT NULL,
  `house_no` varchar(15) NOT NULL,
  `village` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(15) NOT NULL,
  `image` varchar(255) NOT NULL,
  `l_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `l_updat`
--

CREATE TABLE `l_updat` (
  `u_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `aadhar_no` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `l_updat`
--

INSERT INTO `l_updat` (`u_id`, `subject`, `date`, `aadhar_no`) VALUES
(1, 'hai', '2021-11-23', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph_no` varchar(30) NOT NULL,
  `aadhar_no` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `ph_no`, `aadhar_no`, `password`, `image`) VALUES
('jagadeesan', 'jaga27.2k@gmail.com', '9489749436', '1234567890', '04286', 'user_images/rrrr.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicl`
--

CREATE TABLE `vehicl` (
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `pan_no` varchar(50) NOT NULL,
  `birth_place` varchar(50) NOT NULL,
  `dealer_name` varchar(50) NOT NULL,
  `body_type` varchar(50) NOT NULL,
  `vehicle_type` varchar(50) NOT NULL,
  `man_date` date NOT NULL,
  `cylinder` int(11) NOT NULL,
  `horse_power` int(11) NOT NULL,
  `chassis_no` varchar(50) NOT NULL,
  `fuel_type` varchar(50) NOT NULL,
  `seating` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `reg_no` varchar(20) NOT NULL,
  `v_id` int(11) NOT NULL,
  `owner_image` varchar(200) NOT NULL,
  `pan_proof` varchar(200) NOT NULL,
  `invoice` varchar(200) NOT NULL,
  `insuranse` varchar(200) NOT NULL,
  `register` varchar(200) NOT NULL,
  `vehicle_image` varchar(200) NOT NULL,
  `aadhar_no` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicl`
--

INSERT INTO `vehicl` (`name`, `mobile`, `age`, `address`, `date`, `pan_no`, `birth_place`, `dealer_name`, `body_type`, `vehicle_type`, `man_date`, `cylinder`, `horse_power`, `chassis_no`, `fuel_type`, `seating`, `weight`, `reg_no`, `v_id`, `owner_image`, `pan_proof`, `invoice`, `insuranse`, `register`, `vehicle_image`, `aadhar_no`) VALUES
('jagadeesan', '9489749436', 21, '14-B,murugan street,\r\nnamakkal', '2000-12-21', 'ASD123FGH', 'namakkal', 'murugan', 'open body', '6 wheeler', '2019-01-25', 4, 1220, 'ASD456FGH', 'diesel', 4, 1200, 'th1503', 8, 'vehicle_applicant/login logo.png', 'vehicle_applicant/ll.png', 'vehicle_applicant/address.png', 'vehicle_applicant/appoint.png', 'vehicle_applicant/dl.png', 'vehicle_applicant/dlr.png', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `v_updat`
--

CREATE TABLE `v_updat` (
  `u_id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `subject` varchar(200) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `aadhar_no` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `v_updat`
--

INSERT INTO `v_updat` (`u_id`, `date`, `subject`, `reg_no`, `aadhar_no`) VALUES
(8, '2021-11-23', 'your application has received ,.', 'th1503', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `licen`
--
ALTER TABLE `licen`
  ADD PRIMARY KEY (`l_id`,`ph_no`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`l_id`,`ph_no`),
  ADD UNIQUE KEY `aadhar_no` (`aadhar_no`);

--
-- Indexes for table `l_updat`
--
ALTER TABLE `l_updat`
  ADD KEY `date` (`date`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`aadhar_no`);

--
-- Indexes for table `vehicl`
--
ALTER TABLE `vehicl`
  ADD PRIMARY KEY (`v_id`),
  ADD UNIQUE KEY `chassis_no` (`chassis_no`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `v_updat`
--
ALTER TABLE `v_updat`
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `licen`
--
ALTER TABLE `licen`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `l_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicl`
--
ALTER TABLE `vehicl`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
