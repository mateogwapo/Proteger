-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2021 at 03:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `id` int(5) NOT NULL,
  `itemID` int(5) NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `itemDescription` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE `process` (
  `userID` int(6) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL,
  `Sex` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Contact` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Goods` varchar(50) NOT NULL,
  `Quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`userID`, `Name`, `Age`, `Sex`, `Address`, `Contact`, `Email`, `Goods`, `Quantity`) VALUES
(87, 'Perlado, Adrian', 0, '', '2017 Gen. Ricarte St. South Cembo', '', 'adrianperlado06@gmail.com', 'N95-MASK,', ''),
(88, 'Perlado, Adrian', 0, '', '2017 Gen. Ricarte St. South Cembo', '', 'adrianperlado06@gmail.com', 'N95-MASK,', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(3) NOT NULL,
  `categoryID` int(6) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`id`, `categoryID`, `categoryName`) VALUES
(1, 1, 'Mask'),
(2, 2, 'Mask'),
(3, 3, 'Mask'),
(4, 4, 'Face Shield'),
(5, 5, 'Face Shield'),
(6, 6, 'Body Gear'),
(7, 7, 'Sanitation'),
(8, 8, 'Medical Equipments'),
(9, 9, 'Sanitation'),
(10, 10, 'Sanitation'),
(11, 11, 'Sanitation');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategoryforitems`
--

CREATE TABLE `tblcategoryforitems` (
  `id` int(3) NOT NULL,
  `categoryname` varchar(30) NOT NULL,
  `category_desc` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategoryforitems`
--

INSERT INTO `tblcategoryforitems` (`id`, `categoryname`, `category_desc`, `date`) VALUES
(1, 'Mask', 'Lorem Ipsum', '2021-05-13'),
(2, 'Face Shields', 'Lorem Ipsum', '2021-05-13'),
(3, 'Body Gear', 'Lorem Ipsum', '2021-05-13'),
(4, 'Sanitation', 'Lorem Ipsum', '2021-05-13'),
(5, 'Medical Equipment', 'Lorem Ipsum', '2021-05-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbldonated`
--

CREATE TABLE `tbldonated` (
  `id` int(5) NOT NULL,
  `donateID` int(5) NOT NULL,
  `goods` varchar(30) NOT NULL,
  `quantit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldonated`
--

INSERT INTO `tbldonated` (`id`, `donateID`, `goods`, `quantit`) VALUES
(4, 3, '1', '100'),
(5, 4, '1', '100'),
(6, 5, '7', '25');

-- --------------------------------------------------------

--
-- Table structure for table `tbldonor`
--

CREATE TABLE `tbldonor` (
  `id` int(6) NOT NULL,
  `donorID` int(6) NOT NULL,
  `donorName` varchar(50) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Barangay` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `qrContent` varchar(250) NOT NULL,
  `qrImg` varchar(250) NOT NULL,
  `qrlink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldonor`
--

INSERT INTO `tbldonor` (`id`, `donorID`, `donorName`, `Age`, `Sex`, `Address`, `Barangay`, `City`, `Contact`, `Email`, `qrContent`, `qrImg`, `qrlink`) VALUES
(3, 29, 'Makati City, Matthew', 'Guadalupe ', 'on', 'Guadalupe Bliss Brgy. Cembo', '', '', '21', 'merispe.k11620736@umak.edu.ph', '', '', ''),
(4, 3, 'Smith, John', 'Sample Add', '', 'Sample Address', '', '', '', 'Johnsmith@gmail.com', '', '', ''),
(5, 3, 'Smith, John', 'Sample Add', 'on', 'Sample Address', '', '', '21', 'Johnsmith@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbldonorgcat`
--

CREATE TABLE `tbldonorgcat` (
  `donOrgCatID` int(6) NOT NULL,
  `donorID` varchar(30) NOT NULL,
  `organizationID` varchar(30) NOT NULL,
  `itemName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblitems`
--

CREATE TABLE `tblitems` (
  `id` int(5) NOT NULL,
  `itemID` varchar(6) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemDescription` varchar(50) NOT NULL,
  `itemCategory` varchar(30) NOT NULL,
  `item_stock` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblitems`
--

INSERT INTO `tblitems` (`id`, `itemID`, `itemName`, `itemDescription`, `itemCategory`, `item_stock`, `date`) VALUES
(1, '1', 'N95 Mask', 'multiple layers of nonwoven fabric, made from poly', 'Mask', '100', '2021-05-15'),
(2, '2', 'KN95 Respiratory', '5 - Layer Protection, 3D Foldable Design', 'Mask', '500', '2021-05-13'),
(3, '3', 'Surgical Masks', '3 - Layer Protection, Seamless Crimping', 'Mask', '1000', '2021-05-13'),
(4, '4', ' Face Shields', 'Standard Size, Anti Spittle', 'Face Shields', '3000', '2021-05-13'),
(5, '5', 'PAPR Replacement Face Shields', 'Silicone facepiece & Pressure half mask', 'Face Shields', '500', '2021-05-13'),
(6, '6', 'PPE Gown', 'Liquid Barrier Performance (non-airborne)', 'Body Gear', '200', '2021-05-13'),
(7, '7', 'Hand Sanitizer', 'Less irritating & accessible than sinks', 'Sanitation', '900', '2021-05-13'),
(8, '8', 'Thermometers', 'Lorem Ipsum', 'Medical Equipment', '', '2021-05-13'),
(9, '9', 'Disinfecting Wipes', 'Lorem Ipsum', 'Sanitation', '', '2021-05-13'),
(12, '10', 'Alcohol', 'Lorem Ipsum', 'Sanitation', '0', '2021-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `tblorganization`
--

CREATE TABLE `tblorganization` (
  `id` int(6) NOT NULL,
  `orgID` int(6) NOT NULL,
  `organizationName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Barangay` varchar(30) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorganization`
--

INSERT INTO `tblorganization` (`id`, `orgID`, `organizationName`, `Address`, `Barangay`, `City`, `Contact`, `Email`, `status`, `Date`) VALUES
(4, 14, 'Cembo', 'corner Manga St.', 'Cembo', 'Makati City', '09568013881', 'healthcenter.cembo@gmail.com', '', '2021-05-28'),
(5, 14, 'Cembo', 'corner Manga St.', 'Cembo', 'Makati City', '09568013881', 'healthcenter.cembo@gmail.com', '', '2021-05-28'),
(6, 14, 'Cembo', 'corner Manga St.', 'Cembo', 'Makati City', '09568013881', 'healthcenter.cembo@gmail.com', '', '2021-06-07'),
(7, 14, 'Cembo', 'corner Manga St.', 'Cembo', 'Makati City', '09568013881', 'healthcenter.cembo@gmail.com', '', '2021-08-27'),
(8, 14, 'Cembo', 'corner Manga St.', 'Cembo', 'Makati City', '09568013881', 'healthcenter.cembo@gmail.com', '', '2021-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest`
--

CREATE TABLE `tblrequest` (
  `id` int(6) NOT NULL,
  `requestID` int(5) NOT NULL,
  `goods` varchar(30) NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrequest`
--

INSERT INTO `tblrequest` (`id`, `requestID`, `goods`, `quantity`) VALUES
(5, 4, '1', '100'),
(6, 5, '1', '100'),
(7, 6, '1', '100'),
(8, 7, '8', '76'),
(9, 8, '8', '76');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'User',
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `password` varchar(40) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Barangay` varchar(30) NOT NULL,
  `City` varchar(40) NOT NULL,
  `Country` varchar(40) NOT NULL,
  `Postal` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `Occupation` varchar(30) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Workplace` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `pic_location` text CHARACTER SET utf8mb4 NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `firstname`, `lastname`, `email`, `contact`, `password`, `Address`, `Barangay`, `City`, `Country`, `Postal`, `username`, `Occupation`, `Title`, `Workplace`, `date`, `pic_location`, `deleted`, `status`) VALUES
(1, 'Admin', 'Admin', 'Credentials', 'ADMIN@GMAIL.COM', '', 'admin', 'JP Rizal Ext. Barangay West Rembo', '', 'Makati City', 'Philippines', 1214, 'Admin Credentials', '', '', '', '0000-00-00', '', 0, 'enabled'),
(3, 'User', 'John', 'Smith', 'Johnsmith@gmail.com', '09123456789', 'johnsmith', 'Sample Address', 'Bel-Air', 'Makati City', '', 0, 'John Smith', '', '', '', '0000-00-00', '', 0, 'enabled'),
(5, 'User', 'stephen', 'solito', 'stephen@gmail.com', '09223456782', 'sample', 'Sample Address', 'Sitio Uno\r\n\r\n\r\n', 'Manila City\r\n', 'Philippines', 1234, 'Stephen', 'sample', 'sample', 'sample', '0000-00-00', '', 0, 'enabled'),
(9, 'User', 'matthew', 'erispe', 'matthew@gmail.com', '09568013881', 'sample', 'Sample Address', 'Cembo\r\n', 'Makati City\r\n', 'Philippines', 1234, 'Matthew', 'sample', 'sample', 'sample', '0000-00-00', '', 0, 'enabled'),
(14, 'Organization', 'Cembo', '', 'healthcenter.cembo@gmail.com', '09568013881', 'cembo', 'corner Manga St.', 'Cembo', 'Makati City', '', 0, 'Cembo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(15, 'Organization', 'South Cembo', '', 'healthcenter.southcembo@gmail.com', '', 'southcembo', 'Gen. Del Pilar St.', 'South Cembo', 'Makati City', 'Philippines', 0, 'South Cembo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(16, 'Organization', 'Guadalupe Nuevo', '', 'healthcenter.guadalupenuevo@gmail.com', '', 'guadalupenuevo', 'Antipolo St.', 'Guadalupe Nuevo', 'Makati City', 'Philippines', 0, 'Guadalupe Nuevo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(17, 'Organization', 'Pitogo', '', 'healthcenter.pitogo@gmail.com', '', 'pitogo', 'Luzon St.', 'Pitogo', 'Makati City', 'Philippines', 0, 'Pitogo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(18, 'Organization', 'Guadalupe Viejo', '', 'healthcenter.guadalupeviejo@gmail.com', '', 'guadalupeviejo', 'Camia St.', 'Guadalupe Viejo', 'Makati City', 'Philippines', 0, 'Guadalupe Viejo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(19, 'Organization', 'Pinagkaisahan', '', 'healthcenter.pinagkaisahan@gmail.com', '', 'pinagkaisahan', 'Tolentino St.', 'Pinagkaisahan', 'Makati City', 'Philippines', 0, 'Pinagkaisahan Health Center', '', '', '', '2021-05-26', '', 0, ''),
(20, 'Organization', 'Northside', '', 'healthcenter.northside@gmail.com', '', 'northside', 'Northside Proper', 'Northside', 'Makati City', 'Philippines', 0, 'Northside Health Center', '', '', '', '2021-05-26', '', 0, ''),
(21, 'Organization', 'Southside', '', 'healthcenter.southside@gmail.com', '', 'southside', 'Southside Proper', 'Southside', 'Makati City', 'Philippines', 0, 'Southside Health Center', '', '', '', '2021-05-26', '', 0, ''),
(22, 'Organization', 'West Rembo', '', 'healthcenter.westrembo@gmail.com', '', 'westrembo', 'J.P Rizal Ext', 'West Rembo', 'Makati City', 'Philippines', 0, 'West Rembo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(23, 'Organization', 'East Rembo', '', 'healthcenter.eastrembo@gmail.com', '', 'eastrembo', 'J.P Rizal Ext', 'East Rembo', 'Makati City', 'Philippines', 0, 'East Rembo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(24, 'Organization', 'Pembo', '', 'healthcenter.pembo@gmail.com', '', 'pembo', 'Santan St.', 'Pembo', 'Makati City', 'Philippines', 0, 'Pembo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(25, 'Organization', 'Comembo', '', 'healthcenter.comembo@gmail.com', '', 'comembo', 'Anahaw St.', 'Comembo', 'Makati City', 'Philippines', 0, 'Comembo Health Center', '', '', '', '2021-05-26', '', 0, ''),
(26, 'Organization', 'Rizal', '', 'healthcenter.rizal@gmail.com', '', 'rizal', 'Armillo St.', 'Rizal', 'Makati City', 'Philippines', 0, 'Rizal Health Center', '', '', '', '2021-05-26', '', 0, ''),
(29, 'User', 'Matthew', 'Makati City', 'merispe.k11620736@umak.edu.ph', '09568013881', 'Matthewerispe09!', 'Guadalupe Bliss Brgy. Cembo', 'West Rembo', 'Makati City', '', 0, 'Juancho Mateo', '', '', '', '2021-05-28', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process`
--
ALTER TABLE `process`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_item` (`categoryID`);

--
-- Indexes for table `tblcategoryforitems`
--
ALTER TABLE `tblcategoryforitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldonated`
--
ALTER TABLE `tbldonated`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tblid` (`donateID`);

--
-- Indexes for table `tbldonor`
--
ALTER TABLE `tbldonor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblitems`
--
ALTER TABLE `tblitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorganization`
--
ALTER TABLE `tblorganization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblrequest`
--
ALTER TABLE `tblrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `process`
--
ALTER TABLE `process`
  MODIFY `userID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblcategoryforitems`
--
ALTER TABLE `tblcategoryforitems`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbldonated`
--
ALTER TABLE `tbldonated`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbldonor`
--
ALTER TABLE `tbldonor`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblitems`
--
ALTER TABLE `tblitems`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblorganization`
--
ALTER TABLE `tblorganization`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblrequest`
--
ALTER TABLE `tblrequest`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
