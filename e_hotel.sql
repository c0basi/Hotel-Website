-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 04:17 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `Fname` varchar(200) NOT NULL,
  `Lname` varchar(200) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Fname`, `Lname`, `Date`, `Address`) VALUES
(1, 'Abrar', 'ahmad', '4/9/2019', 'NTU Faisalbad'),
(2, 'Abrar', 'ahmad', '4/25/2019', 'NTU Faisalbad'),
(3, 'Abrar', 'ahmad', '4/16/2019', 'NTU Faisalbad'),
(4, 'Abrar', 'ahmad', '4/16/2019', 'NTU Faisalbad'),
(5, 'Abrar', 'ahmad', '4/15/2019', 'NTU Faisalbad'),
(6, 'Abrar', 'ahmad', '4/19/2019', 'NTU Faisalbad');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `Lname` varchar(200) NOT NULL,
  `FName` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `hotelAddress` int(11) NOT NULL,
  `HQAddress` int(11) NOT NULL,
  `Manager` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `Lname`, `FName`, `Address`, `hotelAddress`, `HQAddress`, `Manager`) VALUES
(2, 'ahmad', 'Abrar', 'NTU Faisalbad', 0, 0, 'Yes'),
(3, 'ahmad', 'Abrar', 'NTU Faisalbad', 0, 0, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `hotal_chain`
--

CREATE TABLE `hotal_chain` (
  `id` int(10) NOT NULL,
  `HQAddress` varchar(200) NOT NULL,
  `NumberOfHotels` int(11) NOT NULL,
  `HQEmail` varchar(11) NOT NULL,
  `PhoneNumbers` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotal_chain`
--

INSERT INTO `hotal_chain` (`id`, `HQAddress`, `NumberOfHotels`, `HQEmail`, `PhoneNumbers`) VALUES
(12, 'NTU Faisalbad', 778, 'abrardogar7', 14),
(14, 'NTU Faisalbad', 778, 'abrardogar7', 16),
(16, 'NTU Faisalbad', 778, 'abrardogar7', 18);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotelAddress` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `numberOfRooms` int(11) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `HQid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotelAddress`, `email`, `rating`, `numberOfRooms`, `phonenumber`, `HQid`) VALUES
(2, 'NTU Faisalbad', 'abrardogar77@gmail.com', '4', 45, 114, 12),
(3, 'NTU Faisalbad', 'abrardogar77@gmail.com', '4', 45, 115, 12),
(4, 'NTU Faisalbad', 'abrardogar77@gmail.com', '2', 24, 116, 12);

-- --------------------------------------------------------

--
-- Table structure for table `phonenumbers`
--

CREATE TABLE `phonenumbers` (
  `id` int(11) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `hotelAddress` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonenumbers`
--

INSERT INTO `phonenumbers` (`id`, `phonenumber`, `hotelAddress`) VALUES
(2, '', ''),
(3, '', ''),
(4, '3004985882', 'NTU Faisalbad'),
(5, '3004985882', 'NTU Faisalbad kjsdksjds'),
(6, '3004985882', 'NTU Faisalbad kjsdksjds'),
(7, '3004985882', 'NTU Faisalbad kjsdksjds'),
(8, '3004985882', 'NTU Faisalbad kjsdksjds'),
(9, '3004985882', 'NTU Faisalbad'),
(10, '3004985882', 'NTU Faisalbad'),
(11, '3004985882', 'NTU Faisalbad'),
(12, '3004985882', 'NTU Faisalbad'),
(13, '3004985882', 'NTU Faisalbad'),
(14, '3004985882', 'NTU Faisalbad'),
(15, '3004985882', 'NTU Faisalbad'),
(16, '3004985882', 'NTU Faisalbad'),
(17, '3004985882', 'NTU Faisalbad'),
(18, '3004985882', 'NTU Faisalbad'),
(19, '3004985882', 'NTU Faisalbad'),
(20, '3004985882', 'NTU Faisalbad'),
(21, '3004985882', 'NTU Faisalbad'),
(22, '3004985882', 'NTU Faisalbad'),
(23, '3004985882', 'NTU Faisalbad'),
(24, '3004985882', 'NTU Faisalbad'),
(25, '3004985882', 'NTU Faisalbad'),
(26, '3004985882', 'NTU Faisalbad'),
(27, '3004985882', 'NTU Faisalbad'),
(28, '3004985882', 'NTU Faisalbad'),
(29, '3004985882', 'NTU Faisalbad'),
(30, '3004985882', 'NTU Faisalbad'),
(31, '3004985882', 'NTU Faisalbad'),
(32, '3004985882', 'NTU Faisalbad'),
(33, '3004985882', 'NTU Faisalbad'),
(34, '3004985882', 'NTU Faisalbad'),
(35, '3004985882', 'NTU Faisalbad'),
(36, '3004985882', 'NTU Faisalbad'),
(37, '3004985882', 'NTU Faisalbad'),
(38, '3004985882', 'NTU Faisalbad'),
(39, '3004985882', 'NTU Faisalbad'),
(40, '3004985882', 'NTU Faisalbad'),
(41, '3004985882', 'NTU Faisalbad'),
(42, '3004985882', 'NTU Faisalbad'),
(43, '3004985882', 'NTU Faisalbad'),
(44, '3004985882', 'NTU Faisalbad'),
(45, '3004985882', 'NTU Faisalbad'),
(46, '3004985882', 'NTU Faisalbad'),
(47, '3004985882', 'NTU Faisalbad'),
(48, '3004985882', 'NTU Faisalbad'),
(49, '3004985882', 'NTU Faisalbad'),
(50, '3004985882', 'NTU Faisalbad'),
(51, '3004985882', 'NTU Faisalbad'),
(52, '3004985882', 'NTU Faisalbad'),
(53, '3004985882', 'NTU Faisalbad'),
(54, '3004985882', 'NTU Faisalbad'),
(55, '3004985882', 'NTU Faisalbad'),
(56, '3004985882', 'NTU Faisalbad'),
(57, '3004985882', 'NTU Faisalbad'),
(58, '3004985882', 'NTU Faisalbad'),
(59, '3004985882', 'NTU Faisalbad'),
(60, '3004985882', 'NTU Faisalbad'),
(61, '3004985882', 'NTU Faisalbad'),
(62, '3004985882', 'NTU Faisalbad'),
(63, '3004985882', 'NTU Faisalbad'),
(64, '3004985882', 'NTU Faisalbad'),
(65, '3004985882', 'NTU Faisalbad'),
(66, '3004985882', 'NTU Faisalbad'),
(67, '3004985882', 'NTU Faisalbad'),
(68, '3004985882', 'NTU Faisalbad'),
(69, '3004985882', 'NTU Faisalbad'),
(70, '3004985882', 'NTU Faisalbad'),
(71, '3004985882', 'NTU Faisalbad'),
(72, '3004985882', 'NTU Faisalbad'),
(73, '3004985882', 'NTU Faisalbad'),
(74, '3004985882', 'NTU Faisalbad'),
(75, '3004985882', 'NTU Faisalbad'),
(76, '3004985882', 'NTU Faisalbad'),
(77, '3004985882', 'NTU Faisalbad'),
(78, '3004985882', 'NTU Faisalbad'),
(79, '3004985882', 'NTU Faisalbad'),
(80, '3004985882', 'NTU Faisalbad'),
(81, '3004985882', 'NTU Faisalbad'),
(82, '3004985882', 'NTU Faisalbad'),
(83, '3004985882', 'NTU Faisalbad'),
(84, '3004985882', 'NTU Faisalbad'),
(85, '3004985882', 'NTU Faisalbad'),
(86, '3004985882', 'NTU Faisalbad'),
(87, '3004985882', 'NTU Faisalbad'),
(88, '3004985882', 'NTU Faisalbad'),
(89, '3004985882', 'NTU Faisalbad'),
(90, '3004985882', 'NTU Faisalbad'),
(91, '3004985882', 'NTU Faisalbad'),
(92, '3004985882', 'NTU Faisalbad'),
(93, '3004985882', 'NTU Faisalbad'),
(94, '3004985882', 'NTU Faisalbad'),
(95, '3004985882', 'NTU Faisalbad'),
(96, '3004985882', 'NTU Faisalbad'),
(97, '3004985882', 'NTU Faisalbad'),
(98, '3004985882', 'NTU Faisalbad'),
(99, '3004985882', 'NTU Faisalbad'),
(100, '3004985882', 'NTU Faisalbad'),
(101, '3004985882', 'NTU Faisalbad'),
(102, '3004985882', 'NTU Faisalbad'),
(103, '3004985882', 'NTU Faisalbad'),
(104, '3004985882', 'NTU Faisalbad'),
(105, '3004985882', 'NTU Faisalbad'),
(106, '3004985882', 'NTU Faisalbad'),
(107, '3004985882', 'NTU Faisalbad'),
(108, '3004985882', 'NTU Faisalbad'),
(109, '3004985882', 'NTU Faisalbad'),
(110, '3004985882', 'NTU Faisalbad'),
(111, '3004985882', 'NTU Faisalbad'),
(112, '3004985882', 'NTU Faisalbad'),
(113, '3004985882', 'NTU Faisalbad'),
(114, '3004985882', 'NTU Faisalbad'),
(115, '3004985882', 'NTU Faisalbad'),
(116, '3004985882', 'NTU Faisalbad');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `extended` varchar(200) NOT NULL,
  `view` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `hotelAddress` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `capacity`, `extended`, `view`, `price`, `hotelAddress`, `c_id`) VALUES
(12, 4, 'yes', 'kjdk dksndksnd', 42, 2, 6),
(13, 4, 'yes', 'nice view', 55, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_amenities`
--

CREATE TABLE `room_amenities` (
  `id` int(11) NOT NULL,
  `amenities` varchar(200) NOT NULL,
  `hotelAddress` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_amenities`
--

INSERT INTO `room_amenities` (`id`, `amenities`, `hotelAddress`, `room_id`) VALUES
(1, 'hot water, dinner', 2, 12),
(2, 'hot water, dinner', 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `room_damage`
--

CREATE TABLE `room_damage` (
  `id` int(11) NOT NULL,
  `damage` varchar(200) NOT NULL,
  `hotelAddress` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_damage`
--

INSERT INTO `room_damage` (`id`, `damage`, `hotelAddress`, `room_id`) VALUES
(1, 'wall damage', 2, 12),
(2, '', 2, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotelAddress` (`hotelAddress`),
  ADD KEY `HQAddress` (`HQAddress`),
  ADD KEY `Manager` (`Manager`);

--
-- Indexes for table `hotal_chain`
--
ALTER TABLE `hotal_chain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `PhoneNumbers` (`PhoneNumbers`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phonenumber` (`phonenumber`),
  ADD KEY `HQid` (`HQid`);

--
-- Indexes for table `phonenumbers`
--
ALTER TABLE `phonenumbers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `hotelAddress` (`hotelAddress`);

--
-- Indexes for table `room_amenities`
--
ALTER TABLE `room_amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotelAddress` (`hotelAddress`),
  ADD KEY `hotelAddress_2` (`hotelAddress`),
  ADD KEY `hotelAddress_3` (`hotelAddress`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_damage`
--
ALTER TABLE `room_damage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotelAddress` (`hotelAddress`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `hotelAddress_2` (`hotelAddress`),
  ADD KEY `hotelAddress_3` (`hotelAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotal_chain`
--
ALTER TABLE `hotal_chain`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `phonenumbers`
--
ALTER TABLE `phonenumbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `room_amenities`
--
ALTER TABLE `room_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room_damage`
--
ALTER TABLE `room_damage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotal_chain`
--
ALTER TABLE `hotal_chain`
  ADD CONSTRAINT `hotal_chain_ibfk_1` FOREIGN KEY (`PhoneNumbers`) REFERENCES `phonenumbers` (`id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`phonenumber`) REFERENCES `phonenumbers` (`id`),
  ADD CONSTRAINT `hotel_ibfk_2` FOREIGN KEY (`HQid`) REFERENCES `hotal_chain` (`id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`hotelAddress`) REFERENCES `hotel` (`id`);

--
-- Constraints for table `room_amenities`
--
ALTER TABLE `room_amenities`
  ADD CONSTRAINT `room_amenities_ibfk_1` FOREIGN KEY (`hotelAddress`) REFERENCES `hotel` (`id`),
  ADD CONSTRAINT `room_amenities_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`);

--
-- Constraints for table `room_damage`
--
ALTER TABLE `room_damage`
  ADD CONSTRAINT `room_damage_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`),
  ADD CONSTRAINT `room_damage_ibfk_2` FOREIGN KEY (`hotelAddress`) REFERENCES `hotel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
