-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 09:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdbms`
--
CREATE DATABASE IF NOT EXISTS `rdbms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rdbms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` bigint(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `username`, `password`) VALUES
(1, 'A', 'X'),
(2, 'B', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `citizen_records`
--

CREATE TABLE `citizen_records` (
  `citizen_record_id` bigint(20) UNSIGNED NOT NULL,
  `ward_no` int(11) NOT NULL,
  `house_no` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen_records`
--

INSERT INTO `citizen_records` (`citizen_record_id`, `ward_no`, `house_no`, `Name`, `Phone`) VALUES
(1, 1, 1, 'Vaishak', '9895232318'),
(2, 1, 2, 'Janardhanan', '9895231491'),
(3, 1, 3, 'Ashwini menon P', '7283323588'),
(4, 1, 4, 'Shanakrakurup Melevettil', '8077312767'),
(5, 1, 5, 'Sulaiman Ibrahimkunju', '6127910479'),
(6, 1, 6, 'Arvindakshan B', '8917409776'),
(7, 1, 7, 'MN Shivakumar', '7931305257'),
(8, 1, 8, 'Muhammad Wasim', '6989219528'),
(9, 1, 9, 'Devendran ', '8917710302'),
(10, 1, 10, 'P Fathima', '8701406272'),
(11, 1, 11, 'Saajan Aluva', '8078227680'),
(12, 1, 12, 'Basheer Ponani', '9807114699'),
(13, 1, 13, 'Qaseem Kutty', '8910824451'),
(14, 1, 14, 'Ravindran Nambiar', '9088400286'),
(15, 1, 15, 'Parvathy Shekar', '7217192701'),
(16, 1, 16, 'Sudha Shekar', '8388318240'),
(17, 1, 17, 'Fareed Anwar', '8073416402'),
(18, 1, 18, 'Joseph Peter', '8247627003'),
(19, 1, 19, 'Himansh Sharma', '8079511083'),
(20, 1, 20, 'Joy Idapalli', '7046776101'),
(21, 1, 21, 'Hussain ML', '7979899495'),
(22, 1, 22, 'Xavier Kechery', '7881792083'),
(23, 1, 23, 'David Augustin', '8079418600'),
(24, 1, 24, 'Mercy George', '8917710482'),
(25, 1, 25, 'Safiya Muhammadkutty', '7979716870'),
(26, 1, 26, 'Arshad Sohrabuddin', '9995312233'),
(27, 1, 27, 'M Vijayraghavan', '8079616591'),
(28, 1, 28, ' Manoj Kacheripadi', '8079510651'),
(29, 1, 29, 'Balachandran Puthanvettil', '8917402951'),
(30, 1, 30, 'Ismail Ismail M', '8079995293');

-- --------------------------------------------------------

--
-- Table structure for table `collection_points`
--

CREATE TABLE `collection_points` (
  `collection_point_id` bigint(20) UNSIGNED NOT NULL,
  `citizen_record_id` bigint(20) UNSIGNED NOT NULL,
  `collection_point` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collection_points`
--

INSERT INTO `collection_points` (`collection_point_id`, `citizen_record_id`, `collection_point`) VALUES
(1, 1, 'A'),
(2, 2, 'A'),
(3, 3, 'A'),
(4, 4, 'A'),
(5, 5, 'A'),
(6, 6, 'A'),
(7, 7, 'A'),
(8, 8, 'A'),
(9, 9, 'A'),
(10, 10, 'A'),
(11, 11, 'A'),
(12, 12, 'A'),
(13, 13, 'A'),
(14, 14, 'A'),
(15, 15, 'A'),
(16, 16, 'B'),
(17, 17, 'B'),
(18, 18, 'B'),
(19, 19, 'B'),
(20, 20, 'B'),
(21, 21, 'B'),
(22, 22, 'B'),
(23, 23, 'B'),
(24, 24, 'B'),
(25, 25, 'B'),
(26, 26, 'B'),
(27, 27, 'B'),
(28, 28, 'B'),
(29, 29, 'B'),
(30, 30, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `collection_trucks`
--

CREATE TABLE `collection_trucks` (
  `truck_id` bigint(20) UNSIGNED NOT NULL,
  `collection_point` varchar(2) NOT NULL,
  `truck_index` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collection_trucks`
--

INSERT INTO `collection_trucks` (`truck_id`, `collection_point`, `truck_index`) VALUES
(1, 'A', 'X'),
(2, 'B', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pickup_time`
--

CREATE TABLE `pickup_time` (
  `s_time` varchar(15) NOT NULL,
  `schedule` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup_time`
--

INSERT INTO `pickup_time` (`s_time`, `schedule`) VALUES
('4:00 - 4:10', '1'),
('4:12 - 4:22', '2'),
('4:24 - 4:34', '3'),
('4:36 - 4:46', '4'),
('4:50 - 5:00', '5');

-- --------------------------------------------------------

--
-- Table structure for table `scheduler_table`
--

CREATE TABLE `scheduler_table` (
  `d_t` date NOT NULL DEFAULT current_timestamp(),
  `citizen_record_id` bigint(20) UNSIGNED NOT NULL,
  `truck_id` bigint(20) UNSIGNED NOT NULL,
  `schedule` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheduler_table`
--

INSERT INTO `scheduler_table` (`d_t`, `citizen_record_id`, `truck_id`, `schedule`) VALUES
('2021-06-13', 1, 1, '4'),
('2021-06-13', 2, 1, '3'),
('2021-06-13', 4, 1, '1'),
('2021-06-13', 5, 1, '2'),
('2021-06-13', 12, 1, '5'),
('2021-06-13', 17, 2, '3'),
('2021-06-13', 18, 2, '4'),
('2021-06-13', 20, 2, '1'),
('2021-06-13', 22, 2, '5'),
('2021-06-13', 30, 2, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `citizen_records`
--
ALTER TABLE `citizen_records`
  ADD PRIMARY KEY (`citizen_record_id`),
  ADD UNIQUE KEY `ward_no` (`ward_no`,`house_no`);

--
-- Indexes for table `collection_points`
--
ALTER TABLE `collection_points`
  ADD PRIMARY KEY (`collection_point_id`),
  ADD UNIQUE KEY `citizen_record_id` (`citizen_record_id`,`collection_point`);

--
-- Indexes for table `collection_trucks`
--
ALTER TABLE `collection_trucks`
  ADD PRIMARY KEY (`truck_id`),
  ADD UNIQUE KEY `collection_point` (`collection_point`,`truck_index`);

--
-- Indexes for table `pickup_time`
--
ALTER TABLE `pickup_time`
  ADD PRIMARY KEY (`s_time`);

--
-- Indexes for table `scheduler_table`
--
ALTER TABLE `scheduler_table`
  ADD UNIQUE KEY `d_t` (`d_t`,`truck_id`,`schedule`),
  ADD UNIQUE KEY `d_t_2` (`d_t`,`citizen_record_id`),
  ADD UNIQUE KEY `d_t_3` (`d_t`,`citizen_record_id`,`truck_id`,`schedule`),
  ADD KEY `FK_schedule_citizen` (`citizen_record_id`),
  ADD KEY `FK_schedule_truck` (`truck_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `citizen_records`
--
ALTER TABLE `citizen_records`
  MODIFY `citizen_record_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `collection_points`
--
ALTER TABLE `collection_points`
  MODIFY `collection_point_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `collection_trucks`
--
ALTER TABLE `collection_trucks`
  MODIFY `truck_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_points`
--
ALTER TABLE `collection_points`
  ADD CONSTRAINT `FK_collection_points` FOREIGN KEY (`citizen_record_id`) REFERENCES `citizen_records` (`citizen_record_id`);

--
-- Constraints for table `scheduler_table`
--
ALTER TABLE `scheduler_table`
  ADD CONSTRAINT `FK_schedule_citizen` FOREIGN KEY (`citizen_record_id`) REFERENCES `citizen_records` (`citizen_record_id`),
  ADD CONSTRAINT `FK_schedule_truck` FOREIGN KEY (`truck_id`) REFERENCES `collection_trucks` (`truck_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
