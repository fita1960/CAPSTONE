-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 09:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resort`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenity`
--

CREATE TABLE `amenity` (
  `amenity_id` int(5) NOT NULL,
  `amenity_name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amenity`
--

INSERT INTO `amenity` (`amenity_id`, `amenity_name`, `active`) VALUES
(1, 'Wireless Internet (WIFI)', 1),
(2, 'Electric Kettle', 1),
(3, 'Stand Fan', 1),
(4, 'Hot and Cold Shower', 1),
(5, 'Water Dispenser', 1),
(6, 'Rice Cooker', 1),
(7, 'Airconditioning', 1),
(8, 'Television', 1),
(9, 'Gas Stove', 1),
(10, 'Mini Fridge', 1);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `facility_id` int(5) NOT NULL,
  `facility_name` varchar(100) NOT NULL,
  `facility_description` varchar(255) NOT NULL,
  `facility_image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facility_id`, `facility_name`, `facility_description`, `facility_image`, `active`) VALUES
(1, 'Swimming Pool', 'Free to Use for Check-in Guests', 'pool.webp', 1),
(2, 'Billiard Table', 'Free to use for checked-in guests', 'paddle_board.webp', 1),
(3, 'test', 'test', 'paddle_board.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(5) NOT NULL,
  `gallery_name` varchar(100) NOT NULL,
  `gallery_image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `gallery_image`, `active`) VALUES
(1, 'Gallery Image 1', 'g1.webp', 1),
(2, 'Gallery Image 2', 'g2.webp', 1),
(3, 'Gallery Image 4', 'g3.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(10) NOT NULL,
  `guest_lname` varchar(255) NOT NULL,
  `guest_fname` varchar(255) NOT NULL,
  `guest_address` varchar(255) NOT NULL,
  `guest_contactno` varchar(15) NOT NULL,
  `guest_email` varchar(50) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `guest_lname`, `guest_fname`, `guest_address`, `guest_contactno`, `guest_email`, `active`) VALUES
(1, 'test a', 'test a', 'test 123', '12345678901', 'test@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(5) NOT NULL,
  `guest_id` int(5) NOT NULL,
  `room_id` int(5) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date NOT NULL,
  `reservation_status` varchar(20) NOT NULL DEFAULT 'pending',
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `guest_id`, `room_id`, `date_start`, `date_end`, `reservation_status`, `active`) VALUES
(1, 1, 1, '2023-08-15', '2023-08-16', 'pending', 1),
(2, 1, 2, '2023-08-17', '2023-08-19', 'pending', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(5) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `room_type_id` int(5) NOT NULL,
  `room_price` double NOT NULL,
  `room_adult_count` int(5) NOT NULL,
  `room_child_count` int(5) NOT NULL,
  `room_amenities` varchar(255) NOT NULL,
  `room_image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_type_id`, `room_price`, `room_adult_count`, `room_child_count`, `room_amenities`, `room_image`, `active`) VALUES
(1, 'Standard 101', 1, 1500, 1, 1, 'Stand Fan,\r\nElectric Kettle,\r\nWater Dispenser,', 'standard_fan.jpg', 1),
(2, 'Standard 102', 1, 1500, 1, 1, 'Stand Fan,\r\nElectric Kettle,\r\nWater Dispenser,', 'standard_fan.jpg', 1),
(3, 'Standard 103', 1, 1500, 1, 1, 'Stand Fan,\r\nElectric Kettle,\r\nWater Dispenser,', 'standard_fan.jpg', 1),
(4, 'Standard 104', 1, 1500, 1, 1, 'Stand Fan,\r\nElectric Kettle,\r\nWater Dispenser,', 'standard_fan.jpg', 1),
(5, 'Beachfront 101', 2, 3500, 2, 2, 'Stand Fan,\r\nElectric Kettle,\r\nWater Dispenser,\r\nMini Fridge,\r\nGas Stove', 'beachfront.jpg', 1),
(6, 'Beachfront 102', 2, 3500, 1, 4, 'Stand Fan,\r\nElectric Kettle,\r\nWater Dispenser,\r\nMini Fridge,\r\nGas Stove', 'beachfront.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(3) NOT NULL,
  `room_type_name` varchar(100) NOT NULL,
  `room_type_description` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `room_type_name`, `room_type_description`, `active`) VALUES
(1, 'Standard Room', 'Standard Room', 1),
(2, 'Beachfront Family Native Bungalow\r\n', 'Beachfront Family Native Bungalow\r\n', 1),
(3, 'Non-beachfront Family Native Bungalow', 'Non-beachfront Family Native Bungalow', 1),
(4, 'Aircon Studio Deluxe Single Room', 'Aircon Studio Deluxe Single Room', 1),
(5, 'Aircon Studio Deluxe Twin Room', 'Aircon Studio Deluxe Twin Room', 1),
(6, 'Aircon Studio Deluxe Family Room', 'Aircon Studio Deluxe Family Room', 1),
(7, 'Treehouse1', 'Treehouse1', 1),
(10, 'test123', 'test123', 0),
(11, 'test', 'test', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(5) NOT NULL,
  `services_name` varchar(100) NOT NULL,
  `services_description` varchar(255) NOT NULL,
  `services_image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `services_name`, `services_description`, `services_image`, `active`) VALUES
(1, 'Motorbike Rental', 'Php 450 per day (requirement: driver’s license)', 'motorcycle.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_lname` varchar(100) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_contact_number` varchar(25) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_lname`, `user_fname`, `user_address`, `user_contact_number`, `user_email`, `user_password`, `user_type`, `active`) VALUES
(1, 'Taping', 'Cyril John', 'Cotabato City', '09123456789', 'cyril@gmail.com', '123', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenity`
--
ALTER TABLE `amenity`
  ADD PRIMARY KEY (`amenity_id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenity`
--
ALTER TABLE `amenity`
  MODIFY `amenity_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facility_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_type_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
