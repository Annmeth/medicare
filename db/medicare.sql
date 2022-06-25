-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 03:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_items`
--

CREATE TABLE `assigned_items` (
  `skname` varchar(100) NOT NULL,
  `strname` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `ittype` varchar(100) NOT NULL,
  `itname` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `btcno` varchar(100) NOT NULL,
  `depname` varchar(100) NOT NULL,
  `adate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(100) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `hod_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`, `hod_name`) VALUES
(1, 'Laboratory', 'Dr. Martine Deus'),
(2, 'Maternity', 'Dr. Anneth NIssar'),
(3, 'Laboratory', 'Dr. Anneth NIssar');

-- --------------------------------------------------------

--
-- Table structure for table `dep_items`
--

CREATE TABLE `dep_items` (
  `dep_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nsname` varchar(100) NOT NULL,
  `ittype` varchar(100) NOT NULL,
  `itname` text NOT NULL,
  `qty` varchar(100) NOT NULL,
  `impdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `cdtn` varchar(100) NOT NULL,
  `btcno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dep_items`
--

INSERT INTO `dep_items` (`dep_id`, `id`, `nsname`, `ittype`, `itname`, `qty`, `impdate`, `cdtn`, `btcno`) VALUES
(0, 1, 'Anneth Nissar', 'Supplies', 'Gloves', '10 Boxes', '2022-06-17 15:25:06', 'Good', 'W-00004');

-- --------------------------------------------------------

--
-- Table structure for table `dep_request`
--

CREATE TABLE `dep_request` (
  `id` int(11) NOT NULL,
  `nsname` varchar(100) NOT NULL,
  `rittype` varchar(100) NOT NULL,
  `ritname` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `rrsn` varchar(100) NOT NULL,
  `rdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dep_request1`
--

CREATE TABLE `dep_request1` (
  `id` int(11) NOT NULL,
  `depid` int(100) NOT NULL,
  `hodname` varchar(100) NOT NULL,
  `strname` varchar(100) NOT NULL,
  `rittype` varchar(100) NOT NULL,
  `ritname` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `rrsn` varchar(100) NOT NULL,
  `rdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hod_id` int(100) NOT NULL,
  `hod_name` varchar(100) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hod_id`, `hod_name`, `dep_name`, `email`, `contact`, `role`, `password`) VALUES
(1, 'Msira Deus', 'Maternity', 'deusmsira@outlook.com', '+255683821920', 'HOD', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Dr. Anneth NIssar', 'Maternity', 'dranneth@hospital.com', '0755730703', 'HOD', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hosp_id` int(20) NOT NULL,
  `inst_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `hosp_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosp_id`, `inst_date`, `hosp_name`, `email`, `contact`, `location`, `price`) VALUES
(1, '2022-06-21 12:58:01', 'Bungando', 'bungando@gmail.com', 2147483647, 'Mwanza', 1500000),
(2, '2022-06-21 12:58:23', 'UDSM', 'udsm@hospital.com', 2147483647, 'Dar es Salaam', 1500000),
(3, '2022-06-21 12:59:02', 'KCMC', 'kcmchosp@yahoo.com', 2147483647, 'Kilimanjaro', 1230000);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `skname` varchar(100) NOT NULL,
  `ittype` varchar(100) NOT NULL,
  `itname` varchar(100) NOT NULL,
  `btcno` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `cdtn` varchar(100) NOT NULL,
  `impdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `moi`
--

CREATE TABLE `moi` (
  `moi_id` int(10) NOT NULL,
  `fname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `hosp_name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moi`
--

INSERT INTO `moi` (`moi_id`, `fname`, `email`, `contact`, `hosp_name`, `username`, `password`) VALUES
(1, 'Msira Deus', 'deusmsira@outlook.com', 755730703, 'Bungando', 'Msira255', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `n_id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`n_id`, `fname`, `dep_name`, `email`, `contact`, `role`) VALUES
(1, 'Anneth Nissar', 'Radiology', 'nurse@hospital.com', 2147483647, 'Nurse in Charge'),
(2, 'Magreth Martin Chibura', 'Radiology', 'magrethmartin02@gmail.com', 755895489, 'Lab Tech');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `i_id` int(100) NOT NULL,
  `ittype` varchar(100) NOT NULL,
  `itname` varchar(100) NOT NULL,
  `btcno` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `impdate` date NOT NULL,
  `cdtn` varchar(100) NOT NULL,
  `a_qty` varchar(100) NOT NULL,
  `a_dep` varchar(100) NOT NULL,
  `a_date` date NOT NULL,
  `r_qty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `strid` int(100) NOT NULL,
  `skname` varchar(100) NOT NULL,
  `rittype` varchar(100) NOT NULL,
  `ritname` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `rrsn` varchar(100) NOT NULL,
  `rdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `s_id` int(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `skeeper_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`s_id`, `s_name`, `skeeper_name`) VALUES
(1, 'Store A', 'Msira Martine Deus');

-- --------------------------------------------------------

--
-- Table structure for table `store_keeper`
--

CREATE TABLE `store_keeper` (
  `skeeper_id` int(100) NOT NULL,
  `skeeper_name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store_keeper`
--

INSERT INTO `store_keeper` (`skeeper_id`, `skeeper_name`, `s_name`, `email`, `contact`, `role`, `password`, `username`) VALUES
(1, 'Msira Martine Deus', 'Store A', 'bungando@gmail.com', '0755895489', 'Store Keeper', 'd41d8cd98f00b204e9800998ecf8427e', 'Venom255'),
(2, 'Anneth Nissar', 'Store B', 'udsm@hospital.com', '0725858996', 'Store Keeper', '827ccb0eea8a706c4c34a16891f84e7b', 'anneth255');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Msira Deus', 'Venom255', 'deusmsira@outlook.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Msira Deus', 'Venom255', 'deusmsira@outlook.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_items`
--
ALTER TABLE `assigned_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `dep_items`
--
ALTER TABLE `dep_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dep_request`
--
ALTER TABLE `dep_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dep_request1`
--
ALTER TABLE `dep_request1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`hod_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hosp_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moi`
--
ALTER TABLE `moi`
  ADD PRIMARY KEY (`moi_id`),
  ADD KEY `hosp_name` (`hosp_name`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `store_keeper`
--
ALTER TABLE `store_keeper`
  ADD PRIMARY KEY (`skeeper_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigned_items`
--
ALTER TABLE `assigned_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dep_items`
--
ALTER TABLE `dep_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dep_request`
--
ALTER TABLE `dep_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dep_request1`
--
ALTER TABLE `dep_request1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `hod_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hosp_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moi`
--
ALTER TABLE `moi`
  MODIFY `moi_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `n_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `store_keeper`
--
ALTER TABLE `store_keeper`
  MODIFY `skeeper_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
