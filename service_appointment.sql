-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 02:32 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_access`
--

CREATE TABLE `admin_access` (
  `admin_username` varchar(10) NOT NULL,
  `admin_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_access`
--

INSERT INTO `admin_access` (`admin_username`, `admin_password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `car_manufacturer` varchar(100) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `car_reg_num` varchar(20) NOT NULL,
  `kilo_met_driven` varchar(10) NOT NULL,
  `services` varchar(100) NOT NULL,
  `pickup_drop` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'pending',
  `booking_time` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `username`, `number`, `email`, `address`, `date`, `car_manufacturer`, `car_model`, `car_reg_num`, `kilo_met_driven`, `services`, `pickup_drop`, `status`, `booking_time`) VALUES
(6, 'sample', '9043141800', '', 'sample address for booking', '2022-04-20', 'ford', 'ford mustang', 'tn997645', '15000', '001,004,010,002', 'self', 'completed', '2022-05-03 18:12:50'),
(39, 'tharun', '9043141800', '', '67e,9th street,nehru nagar west,cbe-14', '0000-00-00', 'ford', 'Ford', '', '', '003', 'Self', 'pending', '2022-05-03 18:12:50'),
(40, 'tharunk19mss046@skasc.ac.in', '9043141800', '', '67e,9th street,nehru nagar west,cbe-14', '0000-00-00', 'nissan', 'Nissan', '', '', '21', 'Autologic ', 'completed', '2022-05-03 18:12:50'),
(45, 'test', '8248348640', '', 'sample address', '2022-04-30', 'ford', 'Ford_EcoSport', '', '', '001,002,003,21', '', 'pending', '2022-05-03 18:12:50'),
(46, 'test', '8248348640', '', 'sample address', '2022-04-30', 'ford', 'Ford_Figo', '', '', '001,003,21', '', 'pending', '2022-05-03 18:12:50'),
(47, 'nirmal', '8877665542', '', 'coimbatore', '2099-02-22', 'ford', 'Ford_Figo', 'tn 99 7645', '200000', '001,002,21', 'Self', 'pending', '2022-05-03 18:12:50'),
(48, 'test', '9043141800', '', '67e,9th street,nehru nagar west,cbe-14', '0000-00-00', 'ford', 'Ford_Figo', '', '', '003', '', 'completed', '2022-05-03 18:12:50'),
(49, 'Syed', '7845225224', '', '67e,9th street,nehru nagar west,cbe-14', '2022-04-30', 'tata', 'Tata_Harrier', 'tn 99 7645', '25000', '003,21', 'Autologic ', 'on progress', '2022-05-03 18:12:50'),
(50, 'test', '9043141800', '', '67e,9th street,nehru nagar west,cbe-14', '0000-00-00', 'skoda', 'Skoda_Superb', 'tn37 dm 2133', '1000', '002,003,005', 'Autologic ', 'on progress', '2022-05-03 18:12:50'),
(56, 'test02', '9043141800', '', '67e,9th street,nehru nagar west,cbe-14', '2022-05-14', 'tata', 'Tata_Harrier', 'tn37 dm 2133', '10000', '002,003,21', 'Autologic ', 'pending', '2022-05-03 18:12:50'),
(57, 'test0001', '9043141800', 'test@gmail.com', '67e,9th street,nehru nagar west,cbe-14', '2022-05-19', 'skoda', 'Skoda_Octavia', 'tn37 dm 2133', '14000', '003,005', 'Autologic ', 'pending', '2022-05-03 18:14:28'),
(67, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '2022-05-05', 'tata', 'Tata_Safari', 'tn 36 7649', '200000', '002,003,005,21', 'Autologic ', 'pending', '2022-05-05 10:55:30'),
(68, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '2022-05-05', 'ford', 'Ford_Figo', 'tn 36 7649', '200000', '002,003,005,21', 'Autologic ', 'pending', '2022-05-05 10:58:01'),
(69, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '2022-05-05', 'ford', 'Ford_Figo', 'tn 36 7649', '200000', '002,003,005,21', 'Autologic ', 'pending', '2022-05-05 10:59:40'),
(70, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '0000-00-00', 'ford', 'Ford_Figo', '1', '1', '002', '', 'pending', '2022-05-05 11:04:31'),
(71, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '0000-00-00', 'ford', 'Ford_Figo', '', '', '005', 'Autologic ', 'pending', '2022-05-05 11:04:40'),
(73, 'vignes', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '0000-00-00', 'ford', 'Ford_Figo', '', '', '005', 'Self', 'pending', '2022-05-05 11:06:47'),
(74, 'vignes', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '0000-00-00', 'ford', 'Ford_Figo', '', '', '005', 'Self', 'pending', '2022-05-05 11:08:15'),
(75, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '0000-00-00', 'ford', 'Ford_Figo', '', '', '005', 'Self', 'pending', '2022-05-05 11:09:11'),
(76, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '0000-00-00', 'ford', 'Ford_Figo', '', '200000', '002', 'Autologic ', 'pending', '2022-05-05 11:40:40'),
(78, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '0000-00-00', 'maruti', 'Maruti_Baleno', '1', '14000', '002,21', 'Self', 'pending', '2022-05-05 11:44:20'),
(79, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '2022-05-06', 'honda', 'Honda_City', 'tn 38 da 0904 ', '25000', '002,003,005,21', 'Autologic ', 'pending', '2022-05-05 15:14:02'),
(80, 'karthik', '8300165557', 'hkarthik435@gmail.com', 'sample address', '2022-05-12', 'toyota', 'Toyota_Fortuner', 'tn 99 7645', '14000', '003,005', 'Autologic ', 'pending', '2022-05-05 18:57:12'),
(81, 'parthi', '7845151383', 'parthibhan1999@gmail.com', '3, S.R.Avenue, CheranManagar, cbe-35', '2022-05-09', 'volkswagen', 'VolkswagenPolo', '2210', '77589', '002,21', 'Autologic ', 'on progress', '2022-05-08 14:43:01'),
(82, 'parthi', '7845151383', 'parthibhan1999@gmail.com', '3, S.R.Avenue, CheranManagar, cbe-35', '2022-05-21', 'ford', 'Ford_Figo', '1221', '25000', '005,021', 'Self', 'pending', '2022-05-08 14:59:33'),
(83, 'parthi', '7845151383', 'parthibhan1999@gmail.com', '3, S.R.Avenue, CheranManagar, cbe-35', '2022-05-19', 'ford', 'Ford_Mustang', 'tn 38 da 0904 ', '14000', '001,003,021', 'Autologic ', 'pending', '2022-05-08 15:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `type`, `description`) VALUES
(1, 'test', 'feedback', 'sample feedback'),
(3, 'test03', 'feedback', '233'),
(4, 'test03', 'feedback', '233'),
(6, 'thiru', 'feedback', 'talking bad words to customer'),
(8, 'karthik', 'feedback', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE `service_list` (
  `service_id` varchar(10) NOT NULL,
  `service_name` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`service_id`, `service_name`, `price`) VALUES
('002', 'Oil service', '99991'),
('003', 'engine tuning', '50000'),
('005', 'accessory', '500'),
('021', 'foam wash', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `number`, `email`, `address`, `password`) VALUES
(27, 'nirmal', '8877665542', 'nirmal@gmail.com', 'coimbatore', 'nirmal12'),
(28, 'test', '8680079466', 'test@gmail.com', '67e,9th street,nehru nagar west,cbe-14', '1111'),
(29, 'syed', '7845225224', 'syed@gmail.com', '67e,9th street,nehru nagar west,cbe-14', 'Syed'),
(31, 'thiru', '7867032742', 'mohanthiruvenkadanath@gmail.com', '285 2D/8 j k nagar p.n palayam', '12345678'),
(32, 'karthik', '8300165557', 'hkarthik435@gmail.com', 'sample address', 'karthi'),
(33, 'parthi', '7845151383', 'parthibhan1999@gmail.com', '3, S.R.Avenue, CheranManagar, cbe-35', 'parthi12'),
(34, 'Ezhil', '9012403290', 'VEzhila@gmail.com', 'jsadhfjds', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
