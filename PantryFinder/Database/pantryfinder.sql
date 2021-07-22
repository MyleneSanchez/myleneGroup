-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2021 at 06:17 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pantryfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `community_pantry`
--

CREATE TABLE `community_pantry` (
  `pantry_id` int(20) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `pantry_name` varchar(100) NOT NULL,
  `phone_number` int(100) NOT NULL,
  `list_of_items` varchar(300) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gcash_number` int(100) NOT NULL,
  `category_id` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `community_pantry`
--

INSERT INTO `community_pantry` (`pantry_id`, `USER_ID`, `pantry_name`, `phone_number`, `list_of_items`, `street_address`, `barangay`, `municipality`, `province`, `region`, `email`, `gcash_number`, `category_id`, `status`, `image`) VALUES
(16, 28, 'Luyahan Pantry', 2147483647, 'Canned Goods', 'Silangan', 'Luyahan', 'Lian', 'Batangas', 'Region IV - A', 'luyahanpantry@gmail.com', 2147483647, 'Foods', 'Open', 'PSHS-CVisC-Community-Pantry.jpg'),
(17, 26, 'Kapito Pantry', 2147483647, 'Hygiene Kit', 'Purok 1', 'Kapito', 'Lian', 'Batangas', 'Region IV - A', 'kapitopantry@gmail.com', 2147483647, 'Hygiene Kits', 'Open', 'Robredo-to-community-pantry-critics-Will-people-line-up-if.jpg'),
(18, 27, 'Matabungkay Pantry', 2147483647, 'Clothes', 'Purok 2', 'Matabungkay', 'Lian', 'Batangas', 'Region IV - A', 'matabungkaypantry@gmail.com', 2147483647, 'Clothes', 'Open', 'CAMALIGAN_COMMUNITY_PANTRY_03.jpg'),
(19, 29, 'Ligtasin Pantry', 945115123, 'Itlog, Pancit Canton, Chichirya', 'Silangan', 'Kapito', 'Lian', 'Batangas', 'Region IV - A', 'ligtasinpantry@gmail.com', 98977827, 'Foods', 'open', 'istockphoto-1080964254-612x612.jpg'),
(20, 30, 'Prenza Pantry', 2147483647, 'Canned Goods', 'Purok 5', 'Prenza', 'Lian', 'Batangas', 'Region IV - A', 'prenzapantryu@gmail.com', 2147483647, 'Foods', 'Open', '7252.PNG'),
(21, 31, 'Bungahan Pantry', 2147483647, 'Clothes', 'Purok 1', 'Bungahan', 'Lian', 'Batangas', 'Region IV - A', 'bungahanpantry@gmail.com', 2147483647, 'Hygiene Kits', 'Closed', 'file-20200414-117562-c4nhp5.jpg'),
(22, 35, 'Vianca Pantry', 966554123, 'Cans, Pancit Canton, Vegetables', 'Ilinahan', 'Luyahan', 'Lian', 'Batangas', 'Region IV - A', 'katkay@gmail.com', 2147483640, 'Foods', 'Open', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donation_information`
--

CREATE TABLE `donation_information` (
  `donation_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `date_of_donation` varchar(100) NOT NULL,
  `transaction` varchar(100) NOT NULL,
  `pantry_id` int(20) NOT NULL,
  `USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_information`
--

INSERT INTO `donation_information` (`donation_id`, `full_name`, `address`, `email`, `phone_number`, `date_of_donation`, `transaction`, `pantry_id`, `USER_ID`) VALUES
(7, '', 'Prenza, Lian, Batangas', 'princess@gmail.com', 2147483647, 'July 25, 2021', 'GCash', 19, 30),
(8, '', 'Kapito, Lian, Batangas', 'mai@gmail.com', 2147483647, 'July 30, 2021', 'GCash', 20, 26),
(9, '', 'Lian, Batangas', 'emilymaclaindong@gmail.com', 2147483647, 'July 24, 2020', 'Face to Face', 17, 32),
(11, 'Erika Joy Bansagale Macalindong', 'Luyahan, Lian, Batangas', 'erkmacalindong@gmail.com', 2147483647, 'August 21, 2021', 'GCash', 16, 27),
(12, 'Richard Anderson', 'Lian, Batangas', 'richard@gmail.com', 966554123, 'August 21, 2021', 'Face to Face', 22, 36);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USER_ID` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `USER_FNAME` varchar(30) NOT NULL,
  `USER_MNAME` varchar(30) DEFAULT NULL,
  `USER_LNAME` varchar(30) NOT NULL,
  `USER_CONTACT` bigint(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `USER_TYPE` varchar(20) NOT NULL,
  `User_imagepath` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `username`, `password`, `USER_FNAME`, `USER_MNAME`, `USER_LNAME`, `USER_CONTACT`, `user_email`, `USER_TYPE`, `User_imagepath`) VALUES
(26, 'mai', 'mai', 'Mylene', 'Rivera', 'Sanchez', 9554171650, 'mai@gmail.com', 'Owner', 'EqzufUkVgAIqGlu.jfif'),
(27, 'erika', 'erika', 'Erika Joy', 'Bangasale', 'Macalindong', 976588271, 'erikajoy@gmail.com', 'Donor', '18-512.png'),
(28, 'vianca', 'vianca', 'Ma. Vianca', 'Doctor', 'Tumbaga', 9738777623, 'vianca@gmail.com', 'Owner', '378-3782102_group-of-employees-icon-hd-png-downloa'),
(29, 'aila', 'aila', 'Aila Mei Atienza', 'Ramirez', 'Atienza', 9765678889, 'aila@gmail.com', 'Donor', 'istockphoto-1080964254-612x612.jpg'),
(30, 'princess', 'princess', 'Princess Angel', 'Apolona', 'Rivera', 9765678889, 'princess@gmail.com', 'Owner', 'group-people-users-friends-flat-260nw-517123114.jp'),
(31, 'joseph', 'joseph', 'Joseph', 'Ferrer', 'Rivera', 9765882712, 'joseph@gmail.com', 'Owner', 'Planning and Requirements Analysis.png'),
(32, 'emily', 'emily', 'Emily', 'Bansagale', 'Macalindong', 9261886566, 'emilymaclaindong@gmail.com', 'Donor', 'faceu_20200323232453.jpg'),
(33, 'vea', 'vea', 'Vea', 'Bansagale', 'Macalindong', 9556330045, 'veabianca@gmail.com', 'Owner', 'faceu_20200323232453.jpg'),
(34, 'vic', 'vic', 'Victor', 'Sta Ana', 'Macalindong', 9261886566, 'vicmacalindong@gmail.com', 'Donor', 'dp.jpg'),
(35, 'kat', 'kat', 'Katherine', 'Hernandez', 'Sta Ana', 9556443321, 'katkay@gmail.com', 'Owner', 'cat.jpg'),
(36, 'donor', 'donor', 'Richard', 'Fockerson', 'Anderson', 9556778892, 'richard@gmail.com', 'Donor', 'download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `community_pantry`
--
ALTER TABLE `community_pantry`
  ADD PRIMARY KEY (`pantry_id`),
  ADD KEY `userid` (`USER_ID`);

--
-- Indexes for table `donation_information`
--
ALTER TABLE `donation_information`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `donation_info` (`pantry_id`),
  ADD KEY `xxx` (`USER_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `community_pantry`
--
ALTER TABLE `community_pantry`
  MODIFY `pantry_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `donation_information`
--
ALTER TABLE `donation_information`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `USER_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `community_pantry`
--
ALTER TABLE `community_pantry`
  ADD CONSTRAINT `userid` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);

--
-- Constraints for table `donation_information`
--
ALTER TABLE `donation_information`
  ADD CONSTRAINT `donation_info` FOREIGN KEY (`pantry_id`) REFERENCES `community_pantry` (`pantry_id`),
  ADD CONSTRAINT `xxx` FOREIGN KEY (`USER_ID`) REFERENCES `user` (`USER_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
