-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2020 at 03:59 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chowis`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL,
  `active` int(1) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brandName`, `active`, `dateTime`) VALUES
(1, 'Olay', 0, '0000-00-00 00:00:00'),
(2, 'Olay', 0, '0000-00-00 00:00:00'),
(3, 'test', 1, '0000-00-00 00:00:00'),
(4, 'Laneige', 1, '2020-08-25 13:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `frequencies`
--

CREATE TABLE `frequencies` (
  `id` int(11) NOT NULL,
  `freqname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frequencies`
--

INSERT INTO `frequencies` (`id`, `freqname`) VALUES
(1, 'Every morning'),
(2, 'Every evening'),
(3, 'Morning and evening'),
(4, 'Every other morning');

-- --------------------------------------------------------

--
-- Table structure for table `impurities`
--

CREATE TABLE `impurities` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `impurities`
--

INSERT INTO `impurities` (`id`, `age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES
(1, 30, 'Male', 'D cleanser', 'Moisturized', 'Every morning', 'More than 6 months');

-- --------------------------------------------------------

--
-- Table structure for table `keratin`
--

CREATE TABLE `keratin` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keratin`
--

INSERT INTO `keratin` (`id`, `age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES
(1, 40, 'Female', 'D cleanser', 'Normal', 'Every morning', '3 months');

-- --------------------------------------------------------

--
-- Table structure for table `moisture`
--

CREATE TABLE `moisture` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moisture`
--

INSERT INTO `moisture` (`id`, `age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES
(1, 30, 'Male', 'D cleanser', 'Normal', 'Morning and evening', '1 - 2 months');

-- --------------------------------------------------------

--
-- Table structure for table `pores`
--

CREATE TABLE `pores` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pores`
--

INSERT INTO `pores` (`id`, `age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES
(1, 20, 'Female', 'Product test', 'Moisturized', 'Every morning', 'More than 6 months');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `properties` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `barcode` float NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `brand`, `family`, `description`, `properties`, `price`, `barcode`, `img`) VALUES
(1, 'Product test', 'Olay', 'Anti-wrinkle mask', 'This is my description', 'My properties', 520, 253885, 0x433a66616b657061746832303230303732355f3131353731352e6a7067),
(2, 'Product test1', 'Laneige', 'Anti-oxidant/anti-aging product', 'My description', 'My properties', 230, 458693000, 0x433a66616b657061746832303230303732355f3132323332302e6a7067),
(3, 'D cleanser', 'Olay', 'Anti-oxidant/anti-aging product', 'D cleanser description', 'D cleanser properties', 650, 56987100, 0x433a66616b657061746832303230303732355f3132303231392e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `productfamilies`
--

CREATE TABLE `productfamilies` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productfamilies`
--

INSERT INTO `productfamilies` (`id`, `productname`) VALUES
(1, 'Anti-wrinkle mask'),
(2, 'Anti-imperfection product'),
(3, 'Anti-oxidant/anti-aging product');

-- --------------------------------------------------------

--
-- Table structure for table `spots`
--

CREATE TABLE `spots` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spots`
--

INSERT INTO `spots` (`id`, `age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES
(1, 40, 'Male', 'Product test1', 'Moisturized', 'Every morning', 'More than 6 months');

-- --------------------------------------------------------

--
-- Table structure for table `treatmentduration`
--

CREATE TABLE `treatmentduration` (
  `id` int(11) NOT NULL,
  `durationname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatmentduration`
--

INSERT INTO `treatmentduration` (`id`, `durationname`) VALUES
(1, 'More than 6 months'),
(2, '1 - 2 months'),
(3, '3 months'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `wrinkles`
--

CREATE TABLE `wrinkles` (
  `id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `diagnosis` varchar(255) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wrinkles`
--

INSERT INTO `wrinkles` (`id`, `age`, `gender`, `product`, `diagnosis`, `frequency`, `duration`) VALUES
(1, 30, 'Male', 'D cleanser', 'Dehydrated', 'Morning and evening', '1 - 2 months');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frequencies`
--
ALTER TABLE `frequencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impurities`
--
ALTER TABLE `impurities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keratin`
--
ALTER TABLE `keratin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moisture`
--
ALTER TABLE `moisture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pores`
--
ALTER TABLE `pores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productfamilies`
--
ALTER TABLE `productfamilies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spots`
--
ALTER TABLE `spots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatmentduration`
--
ALTER TABLE `treatmentduration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wrinkles`
--
ALTER TABLE `wrinkles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `frequencies`
--
ALTER TABLE `frequencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `impurities`
--
ALTER TABLE `impurities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keratin`
--
ALTER TABLE `keratin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `moisture`
--
ALTER TABLE `moisture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pores`
--
ALTER TABLE `pores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `productfamilies`
--
ALTER TABLE `productfamilies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `spots`
--
ALTER TABLE `spots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `treatmentduration`
--
ALTER TABLE `treatmentduration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wrinkles`
--
ALTER TABLE `wrinkles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
