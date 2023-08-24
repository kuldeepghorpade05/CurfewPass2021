-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2021 at 02:47 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin Vachana', 'admin', 1234567890, 'adminuser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-04-14 01:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `CategoryName`, `CreationDate`) VALUES
(1, 'Logistic Deliveries', '2020-04-14 07:27:32'),
(2, 'Cleaning', '2020-04-14 07:49:09'),
(3, 'Essential Services', '2020-04-14 07:49:22'),
(4, 'eccomerce delivery boys', '2020-04-14 07:49:47'),
(5, 'Medical Supply', '2020-04-14 07:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployeepass`
--

CREATE TABLE `tblemployeepass` (
  `ID` int(10) NOT NULL,
  `PassNumber` varchar(200) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `CompanyName` varchar(100) DEFAULT NULL,
  `Designation` varchar(200) DEFAULT NULL,
  `IdentityType` varchar(200) DEFAULT NULL,
  `IdentityCardno` varchar(200) DEFAULT NULL,
  `FromDate` varchar(200) DEFAULT NULL,
  `ToDate` varchar(200) DEFAULT NULL,
  `PasscreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployeepass`
--

INSERT INTO `tblemployeepass` (`ID`, `PassNumber`, `FullName`, `ContactNumber`, `Email`, `CompanyName`, `Designation`, `IdentityType`, `IdentityCardno`, `FromDate`, `ToDate`, `PasscreationDate`) VALUES
(1, '696003609', 'Rajat Kumar', 4354545454, 'Rajat@gmail.com', 'RCS TEchnology', 'Software Developer', 'PAN Card', 'GRLKP6546R', '2021-08-01', '2021-12-31', '2021-08-13 07:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `tblhospital`
--

CREATE TABLE `tblhospital` (
  `ID` int(10) NOT NULL,
  `HospitalName` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhospital`
--

INSERT INTO `tblhospital` (`ID`, `HospitalName`, `CreationDate`) VALUES
(1, 'Ramaiah Hospital', '2021-08-12 06:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `tblhospitalpass`
--

CREATE TABLE `tblhospitalpass` (
  `ID` int(10) NOT NULL,
  `PassNumber` varchar(200) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `IdentityType` varchar(200) DEFAULT NULL,
  `IdentityCardno` varchar(200) DEFAULT NULL,
  `HospitalName` varchar(100) DEFAULT NULL,
  `Reason` varchar(200) DEFAULT NULL,
  `FromDate` varchar(200) DEFAULT NULL,
  `ToDate` varchar(200) DEFAULT NULL,
  `PasscreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhospitalpass`
--

INSERT INTO `tblhospitalpass` (`ID`, `PassNumber`, `FullName`, `ContactNumber`, `Email`, `IdentityType`, `IdentityCardno`, `HospitalName`, `Reason`, `FromDate`, `ToDate`, `PasscreationDate`) VALUES
(1, '953756200', 'Rajat Kumar', 9876543210, 'Rajat@gmail.com', 'Adhar Card', '888877779999', 'Ramaiah Hospital', 'covid test RT-PCR', '2021-08-13', '2021-08-13', '2021-08-12 07:14:11'),
(2, '569790322', 'Rajat Kumar', 1234567890, 'admin@gmail.com', 'PAN Card', '123578952586', 'Ramaiah Hospital', 'covid test', '2021-08-14', '2021-08-15', '2021-08-13 07:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `tblmarriagepass`
--

CREATE TABLE `tblmarriagepass` (
  `ID` int(10) NOT NULL,
  `PassNumber` varchar(200) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Side` varchar(200) DEFAULT NULL,
  `IdentityType` varchar(200) DEFAULT NULL,
  `IdentityCardno` varchar(200) DEFAULT NULL,
  `FromLocation` varchar(100) DEFAULT NULL,
  `ToLocation` varchar(200) DEFAULT NULL,
  `FromDate` varchar(200) DEFAULT NULL,
  `ToDate` varchar(200) DEFAULT NULL,
  `PasscreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmarriagepass`
--

INSERT INTO `tblmarriagepass` (`ID`, `PassNumber`, `FullName`, `Address`, `ContactNumber`, `Email`, `Side`, `IdentityType`, `IdentityCardno`, `FromLocation`, `ToLocation`, `FromDate`, `ToDate`, `PasscreationDate`) VALUES
(1, '512517282', 'Rajat Kumar', 'bangalore,india', 1234567890, 'Rajat@gmail.com', 'Bride Side', 'Adhar Card', '575796965252', 'MS Palya', 'Mathikere', '2021-08-15', '2021-08-24', '2021-08-13 06:26:30'),
(2, '791326413', 'Sunil Kumar', 'bangalore,india', 1234567890, 'sunil@gmail.com', 'Groom Side', 'Adhar Card', '202050501001', 'gangamma circle', 'Jalahalli', '2021-08-18', '2021-08-20', '2021-08-13 06:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblpass`
--

CREATE TABLE `tblpass` (
  `ID` int(10) NOT NULL,
  `PassNumber` varchar(200) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `ContactNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `IdentityType` varchar(200) DEFAULT NULL,
  `IdentityCardno` varchar(200) DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `FromDate` varchar(200) DEFAULT NULL,
  `ToDate` varchar(200) DEFAULT NULL,
  `PasscreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpass`
--

INSERT INTO `tblpass` (`ID`, `PassNumber`, `FullName`, `ContactNumber`, `Email`, `IdentityType`, `IdentityCardno`, `Category`, `FromDate`, `ToDate`, `PasscreationDate`) VALUES
(1, '286529906', 'Yogesh Kumar', 4654464646, 'yogi@gmail.com', 'Adhar Card', 'AD-122346', 'Cleaning', '2020-04-14', '2020-05-14', '2020-04-14 11:47:03'),
(2, '915773340', 'Suresh Khanna', 9879878978, 'suresh@gmail.com', 'Any Other Govt Issued Doc', 'KTI-896567', 'Essential Services', '2020-04-14', '2020-07-31', '2020-04-13 11:50:15'),
(3, '884595667', 'Anuj kumar', 1234567890, 'phpgurukulofficial@Gmail.com', 'Voter Card', '5235252', 'Essential Services', '2020-04-16', '2020-04-19', '2020-04-16 02:38:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblemployeepass`
--
ALTER TABLE `tblemployeepass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblhospital`
--
ALTER TABLE `tblhospital`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblhospitalpass`
--
ALTER TABLE `tblhospitalpass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblmarriagepass`
--
ALTER TABLE `tblmarriagepass`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpass`
--
ALTER TABLE `tblpass`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tblemployeepass`
--
ALTER TABLE `tblemployeepass`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblhospital`
--
ALTER TABLE `tblhospital`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblhospitalpass`
--
ALTER TABLE `tblhospitalpass`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblmarriagepass`
--
ALTER TABLE `tblmarriagepass`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblpass`
--
ALTER TABLE `tblpass`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
