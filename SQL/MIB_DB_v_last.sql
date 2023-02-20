-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: h1use0ulyws4lqr1.cbetxkdyhwsb.us-east-1.rds.amazonaws.com
-- Generation Time: Feb 20, 2023 at 02:35 AM
-- Server version: 8.0.28
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdbdl32mu2ovolnh`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ItemID` int NOT NULL,
  `ItemName` varchar(255) NOT NULL,
  `imageFileName` varchar(255) NOT NULL,
  `itemColor` varchar(255) NOT NULL,
  `itemRevision` varchar(255) NOT NULL,
  `itemMPN` varchar(255) NOT NULL,
  `Total` int DEFAULT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `cosA` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4  DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `ItemName`, `imageFileName`, `itemColor`, `itemRevision`, `itemMPN`, `Total`, `Date`, `Note`, `cosA`, `status`) VALUES
(44, 'AP1S2760221-Vendor-CSI', 'https://drive.google.com/uc?export=view&id=1Hw_YlIksXvExFo4F6TqPPoZLBX5YWDWC', 'Black', 'B.2', 'D1S27-60021', 0, '0000-00-00 00:00:00', '', 'Packing ,Rusty, Deform,Flash,Dirty, Broken,Bend,Shot Mold,Flow mark,Burn,Foreigner Mat’l', 'กำลังตรวจสอบ'),
(45, 'AP3276000157-Vendor-CIS', 'https://drive.google.com/uc?export=view&id=1xauaVFZSHHN8BcXDZSgriaS3-TbJC-xI', 'Black', 'A.6', 'D1S27-60015', 0, '0000-00-00 00:00:00', '', 'Packing ,Rusty, Deform,Flash,Dirty, Broken,Bend,Shot Mold,Flow mark,Burn,Foreigner Mat’l', 'กำลังตรวจสอบ'),
(46, 'GC993610771-Vendor-Panasonic', 'https://drive.google.com/uc?export=view&id=1cE-ndjkYm403GsfjB0-eqG5IQfqyDEb8', 'Black', '-', 'CZ993-60017', 0, '0000-00-00 00:00:00', '', 'Color shade ,Tear ,Rusty, Deform ,Broken ', 'ตรวจสอบเรียบร้อย'),
(62, 'GC3G2253007-Vendor-Mitsubishi', 'https://drive.google.com/uc?export=view&id=https://s10x.herokuapp.com/Logo.png', 'White ', '-', 'BBBCR2032B', NULL, NULL, NULL, 'Color shade ,Tear ,Rusty, Deform ,Broken ', 'กำลังตรวจสอบ'),
(63, 'AP3276000157-Vendor-ATII', 'https://drive.google.com/uc?export=view&id=https://s10x.herokuapp.com/Logo.png', 'BLACK', '1.1', 'CM218CFADW-6', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(68, '', 'https://drive.google.com/uc?export=view&id=1WdCRjgZAkd4OCEWSuaAoeWZpoGId68ik', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(69, '', 'https://drive.google.com/uc?export=view&id=1nMx8iW53HDT5YxjhCYOhP-js3e6jmRER', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(70, 'ใส่ข้อมูล', 'https://drive.google.com/uc?export=view&id=1c--06Xro0nC08lNSMrhTXO3AZOog5YoA', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(71, '', 'https://drive.google.com/uc?export=view&id=1ZfttVCTdzWEssjiknfTuxJr32z4prHEV', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(72, '', 'https://drive.google.com/uc?export=view&id=1mhTR21ch8CIjhsULiKGFeLiN-gKNlYYS', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(73, '', 'https://drive.google.com/uc?export=view&id=114q-x_GcnJ5R__VPBKQFosvNwhpvrAqr', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(74, '', 'https://drive.google.com/uc?export=view&id=1gIfviZDm76JT2jyeAoWlj2Pb0d2Ttc99', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(75, '', 'https://drive.google.com/uc?export=view&id=1gxnzlS-QnNKdpMygvy8eW4XbKzT4vjuf', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(76, '', 'https://drive.google.com/uc?export=view&id=1dbtpplhRcn77PFnEQu0VRBT1U7qaOuo0', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(77, '', 'https://drive.google.com/uc?export=view&id=1Q3BMxqZ96sdkqu_U7Hlt7TnshEaNS7dk', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(78, '', 'https://drive.google.com/uc?export=view&id=10t1WYix0c7sbWpcN4aHxxE4fvrCotLAt', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(79, '', 'https://drive.google.com/uc?export=view&id=1XNSe0_LpXHdpeEAuE7V86vISxzLhLfwc', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(80, '', 'https://drive.google.com/uc?export=view&id=1USiUXU5jwqRSyjqi13HupbzPphNH9Q6r', '', '', '', NULL, NULL, NULL, '', 'กำลังตรวจสอบ'),
(81, 'aaaaaaaa', 'https://drive.google.com/uc?export=view&id=1Hw_YlIksXvExFo4F6TqPPoZLBX5YWDWC', 'aaaa', 'aaa', 'aaaa', NULL, NULL, NULL, 'aaaaa', 'กำลังตรวจสอบ'),
(82, '', 'https://drive.google.com/uc?export=view&id=https://s10x.herokuapp.com/Logo.png', '', '', '', NULL, NULL, NULL, '3333', 'กำลังตรวจสอบ'),
(83, '1111', 'https://drive.google.com/uc?export=view&id=https://s10x.herokuapp.com/Logo.png', '2222', '3333', '44444', NULL, NULL, NULL, '5555', 'กำลังตรวจสอบ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `statusLogin` varchar(255) CHARACTER SET utf8mb4  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `statusLogin`) VALUES
(1, '1', '1', 'ADMIN'),
(2, 'admin', 'admin', 'ADMIN'),
(3, '2', '2', 'USER'),
(4, 'kjhk', 'jnknk', 'USER'),
(5, 'ghj', 'vbn', 'USER'),
(6, 'ghjn', 'vbn', 'USER'),
(7, 'ghjnss', 'vbn', 'USER'),
(10, 'g', 'h', 'USER'),
(11, 'C079844', '123', 'USER');

-- --------------------------------------------------------

--
-- Table structure for table `savereport`
--

CREATE TABLE `savereport` (
  `sItemID` int NOT NULL,
  `sItemName` varchar(255) DEFAULT NULL,
  `simageFileName` varchar(255) NOT NULL,
  `sitemColor` varchar(255) NOT NULL,
  `sitemRevision` varchar(255) NOT NULL,
  `sitemMPN` varchar(255) NOT NULL,
  `sTotal` int DEFAULT NULL,
  `sDate` datetime DEFAULT NULL,
  `sNote` varchar(255) DEFAULT NULL,
  `sDateCode` varchar(255) NOT NULL,
  `sInvoice` varchar(255) CHARACTER SET utf8mb4  NOT NULL,
  `scosA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `savereport`
--

INSERT INTO `savereport` (`sItemID`, `sItemName`, `simageFileName`, `sitemColor`, `sitemRevision`, `sitemMPN`, `sTotal`, `sDate`, `sNote`, `sDateCode`, `sInvoice`, `scosA`) VALUES
(61, 'GB4V60003L1-Vendor-Liteon', 'https://drive.google.com/uc?export=view&id=1mueNiwen4u9GSVNqmgnDdCmTxEUT6_IN', 'Black', 'B', '4ZZ12-60002', 0, '2023-02-01 21:12:58', '...', '', '', 'Packing, Color shade, Scratch mark, Deform , Sink Mark ,Broken'),
(62, 'AP1S2760221-Vendor-CSI', 'https://drive.google.com/uc?export=view&id=1Hw_YlIksXvExFo4F6TqPPoZLBX5YWDWC', 'Black', 'B.2', 'D1S27-60021', 0, '2023-02-14 09:05:20', '...', '', '', 'Packing ,Rusty, Deform,Flash,Dirty, Broken,Bend,Shot Mold,Flow mark,Burn,Foreigner Mat’l'),
(63, '1111', 'https://drive.google.com/uc?export=view&id=https://s10x.herokuapp.com/Logo.png', '2222', '3333', '44444', 66666, '2023-02-14 16:15:48', 'OK', '6666', '666666', '5555'),
(64, 'AP1S2760221-Vendor-CSI', 'https://drive.google.com/uc?export=view&id=1Hw_YlIksXvExFo4F6TqPPoZLBX5YWDWC', 'Black', 'B.2', 'D1S27-60021', 11111, '2023-02-14 16:37:56', 'ok', '11111', '11111', 'Packing ,Rusty, Deform,Flash,Dirty, Broken,Bend,Shot Mold,Flow mark,Burn,Foreigner Mat’l');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `savereport`
--
ALTER TABLE `savereport`
  ADD PRIMARY KEY (`sItemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `savereport`
--
ALTER TABLE `savereport`
  MODIFY `sItemID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
