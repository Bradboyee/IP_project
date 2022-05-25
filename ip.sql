-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2022 at 07:56 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip`
--

-- --------------------------------------------------------

--
-- Table structure for table `atk`
--

CREATE TABLE `atk` (
  `ATK_ID` int(4) NOT NULL,
  `ATK_DetectPlace` varchar(28) DEFAULT NULL,
  `ATK_DetectDate` varchar(9) DEFAULT NULL,
  `ATK_InfectedHistory` int(1) DEFAULT NULL,
  `ATK_DetectResult` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `atk`
--

INSERT INTO `atk` (`ATK_ID`, `ATK_DetectPlace`, `ATK_DetectDate`, `ATK_InfectedHistory`, `ATK_DetectResult`) VALUES
(2, 'โรงพยาบาลเจริญกรุงประชารักษ์', '1/17/2022', 0, 0),
(3, 'โรงพยาบาลหลวงพ่อทวีศักดิ์', '1/16/2022', 1, 0),
(4, 'โรงพยาบาลบางนากรุงเทพมหานคร', '1/25/2022', 0, 0),
(5, 'โรงพยาบาลสิรินธร', '1/26/2022', 0, 0),
(7, 'Bannn', '2022-03-0', 1, 1),
(8, '1234', '2022-03-0', 1235, 1234),
(9, '13', '2022-03-1', 123, 324),
(10, '11111', '2022-03-0', 123, 23),
(11, '1', '2022-03-1', 1, 1),
(12, '1', '2022-03-1', 1, 1),
(13, '1234', '2022-03-0', 1, 1),
(14, '1', '2022-04-1', 2, 1),
(15, '1', '2022-04-2', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(2) NOT NULL,
  `Customer_Name` varchar(20) DEFAULT NULL,
  `Customer_Address` varchar(48) DEFAULT NULL,
  `Customer_Tel` varchar(13) DEFAULT NULL,
  `Customer_Birth` date DEFAULT NULL,
  `Customer_Gender` varchar(6) DEFAULT NULL,
  `Customer_Email` varchar(23) DEFAULT NULL,
  `Customer_Password` varchar(20) NOT NULL,
  `Payment_ID` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `Customer_Name`, `Customer_Address`, `Customer_Tel`, `Customer_Birth`, `Customer_Gender`, `Customer_Email`, `Customer_Password`, `Payment_ID`) VALUES
(8, 'บุรี ศรีทอง', '218 หมู่ที่ 8 น่าน-ทุ่งช้าง ปัว ปัว น่าน', '085-461-32293', '0000-00-00', 'Male', 'Moonoy_Noun@hotmail.com', '1', 1),
(9, 'มาริษา ศรีสุข', '44/4 หมู่ที่ 3 ลําลูกกา คูคต ลําลูกกา ปทุมธานี', '091-636-00248', '0000-00-00', 'Female', 'met_boom@hotmail.com', '1', 2),
(10, 'นรีรัตน์ เลิศคุณวงส์', '1 พัฒนาการคูขวาง ในเมือง เมือง นครศรีธรรมราช', '085-713-0307', '0000-00-00', 'Female', 'jassadawat@hotmail.com', '1', 3),
(11, 'ภาคภูมิ วัชรจิระกุล', '21/4 ทางหลวงแผ่นดินสาย 36 มาบข่า นิคมพัฒนา ระยอง', '082-443-6279', '0000-00-00', 'Male', 'sidazz@hotmail.com', '1', 4),
(12, 'ญาตา ปราสาทงาม', '51/135 หมู่ 6 วิชิตสงคราม กะทู้ กะทู้ ภูเก็ต', '080-383-7630', '0000-00-00', 'Female', 'fear_ba-555@hotmail.com', '1', 5),
(23, 'เทพราช พึ่งโพธิ์สภ', '88/8 หมู่ 1', '111-111-1111', '2022-02-00', 'Male', 'Baddyzaza@hotmail.com', '1', 17),
(24, 'เทพราช พึ่งโพธิ์สภ', '88/8 หมู่ 1', '999-999-9999', '2022-02-00', 'Male', 'Baddyzaza@hotmail.com', '1', 14),
(25, 'Thepparat Phengposop', '88/8 หมู่ 1', '567-567-5678', '2022-02-00', 'Male', 'Baddyzaza@hotmail.com', '1', 0),
(26, '123', '123', '000-000-0000', '2022-03-09', 'Male', '123123@hotmail.com', '1', NULL),
(27, 'เทพราช พึ่งโพธิ์สภ', '88/8 หมู่ 1', '599-595-5959', '2022-04-12', 'Female', 'Baddyzaza@hotmail.com', '1', NULL),
(28, 'Thepparat Phengposop', '88/8 หมู่ 1', '987-456-1111', '2022-03-22', 'Male', 'Baddyzaza@hotmail.com', '1', NULL),
(29, '123', '123', '623-121-8787', '2022-04-12', 'Male', '123123@hotmail.com', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Driver_ID` int(1) NOT NULL,
  `Driver_Name` varchar(19) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Driver_Tel` varchar(13) DEFAULT NULL,
  `Driver_Address` varchar(103) DEFAULT NULL,
  `Driver_WorkPlace` varchar(13) DEFAULT NULL,
  `Driver_Password` varchar(20) NOT NULL,
  `ATK_ID` int(1) DEFAULT NULL,
  `Vaccine_ID` int(1) DEFAULT NULL,
  `Licence_ID` int(1) DEFAULT NULL,
  `Problem_ID` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Driver_ID`, `Driver_Name`, `Driver_Tel`, `Driver_Address`, `Driver_WorkPlace`, `Driver_Password`, `ATK_ID`, `Vaccine_ID`, `Licence_ID`, `Problem_ID`) VALUES
(49, 'Brad test', '999-999-9999', '88/8 หมู่ 1', 'home', '1', 12, 1, 13, NULL),
(51, 'Thepparat Phengposo', '888-888-8888', '88/8 หมู่ 1', '2', '1', 15, 22, 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `licence`
--

CREATE TABLE `licence` (
  `licence_ID` int(1) NOT NULL,
  `Licence_IssueDate` varchar(9) DEFAULT NULL,
  `Licence_ExpiryDate` varchar(9) DEFAULT NULL,
  `Licence_LicencePlate` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `licence`
--

INSERT INTO `licence` (`licence_ID`, `Licence_IssueDate`, `Licence_ExpiryDate`, `Licence_LicencePlate`) VALUES
(1, '10/9/2021', '10/9/2022', '4กธ415'),
(2, '9/11/2018', '9/14/2023', '5กน159'),
(3, '7/1/2020', '7/1/2025', '1กท9565'),
(4, '5/10/2017', '5/10/2022', '6กข8006'),
(9, '2022-03-0', '2022-03-1', '1'),
(10, '2022-04-1', '2022-04-2', '555666'),
(11, '2022-04-0', '2022-04-1', '559999'),
(12, '2022-04-1', '2022-04-2', '5555'),
(13, '2022-04-1', '2022-04-2', '123'),
(14, '2022-04-0', '2022-04-1', '123'),
(15, '2022-04-1', '2022-04-0', '123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(1) NOT NULL,
  `MobileBanking_BankName` varchar(9) DEFAULT NULL,
  `MobileBanking_AccID` varchar(12) DEFAULT NULL,
  `MobileBanking_AccName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_ID`, `MobileBanking_BankName`, `MobileBanking_AccID`, `MobileBanking_AccName`) VALUES
(1, 'UOB', '044-370-6688', 'บุรี ศรีทอง'),
(2, 'Krungthai', '054-333-6756', 'มาริษา ศรีสุข'),
(3, 'Kasikorn', '033-786-6465', 'นรีรัตน์ เลิศคุณวงส์'),
(4, 'Aomsin', '094-756-2543', 'ภาคภูมิ วัชรจิระกุล'),
(5, 'Kasikorn', '054-055-5121', 'ญาตา ปราสาทงาม'),
(8, '', '431-321-3123', '1111'),
(9, '', '597-855-8888', '123'),
(10, '', '432-423-4444', '12334'),
(11, '', '888-888-8888', 'testttttttttttttttt'),
(12, '', '143-242-8588', '123123'),
(13, '', '143-241-2411', '1231234134'),
(14, '', '333-444-5555', '1123123123'),
(15, '', '555-555-5555', 'rqrwer'),
(16, '', '123-111-1323', '1242'),
(17, '', '222-222-2222', '1');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `Problem_ID` int(1) NOT NULL,
  `Problem_text` varchar(47) DEFAULT NULL,
  `Problem_reportDate` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`Problem_ID`, `Problem_text`, `Problem_reportDate`) VALUES
(1, 'ไม่สามารถไปส่งได้เนื่องจากรถเสีย', '2/7/2022'),
(3, '123123', '04/08/202'),
(4, '123123123', '04/08/202'),
(5, 'tyutyu', '04/08/202');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Review_ID` int(2) NOT NULL,
  `Review_Score` int(1) DEFAULT NULL,
  `Review_Feedback` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Review_ID`, `Review_Score`, `Review_Feedback`) VALUES
(2, 5, 'สุภาพ ขับขี่ระมัดระวัง เคารพกฎจราจร'),
(3, 4, 'ขับขี่แบบปลอดภัย แต่ถึงช้าเล็กน้อย'),
(6, 4, 'D mark kub '),
(7, 4, '555'),
(8, 0, 'ส่งไว ครับ');

-- --------------------------------------------------------

--
-- Table structure for table `review_test`
--

CREATE TABLE `review_test` (
  `Review_ID` int(4) NOT NULL,
  `Driver_Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Review_Score` int(2) NOT NULL,
  `Review_Text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `review_test`
--

INSERT INTO `review_test` (`Review_ID`, `Driver_Name`, `Review_Score`, `Review_Text`) VALUES
(1, 'Brad', 4, 'qweqwe'),
(2, 'Brad', 2, 'qweqwe'),
(3, 'Brad', 4, 'qweqwe'),
(4, 'BB', 1, 'qweqwe'),
(5, 'Brad', 4, 'qweqwe'),
(6, 'BB', 4, 'qweqwe');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `Trip_ID` int(2) NOT NULL,
  `Customer_ID` int(2) DEFAULT NULL,
  `Driver_ID` int(1) DEFAULT NULL,
  `Trip_Date` varchar(9) DEFAULT NULL,
  `Trip_Source` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Trip_Destination` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `Trip_Distance` int(4) DEFAULT NULL,
  `Trip_Price` int(4) DEFAULT NULL,
  `Trip_TimeTotal` int(3) DEFAULT NULL,
  `Review_ID` int(2) DEFAULT NULL,
  `Trip_Time` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`Trip_ID`, `Customer_ID`, `Driver_ID`, `Trip_Date`, `Trip_Source`, `Trip_Destination`, `Trip_Distance`, `Trip_Price`, `Trip_TimeTotal`, `Review_ID`, `Trip_Time`) VALUES
(41, 23, 49, '04/09/202', 'แว่นบิ้วตี้ฟูล', 'สำนักงานองค์การบริหารส่วนตำบลท', 1, 45, 3, 8, '05:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `Vaccine_ID` int(4) NOT NULL,
  `Vaccine_Product_First` varchar(11) DEFAULT NULL,
  `Vaccine_Product_Sec` varchar(11) DEFAULT NULL,
  `Vaccine_Product_Third` varchar(7) DEFAULT NULL,
  `Vaccine_VaccinatedNumber` int(1) DEFAULT NULL,
  `Vaccine_Date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`Vaccine_ID`, `Vaccine_Product_First`, `Vaccine_Product_Sec`, `Vaccine_Product_Third`, `Vaccine_VaccinatedNumber`, `Vaccine_Date`) VALUES
(1, 'Sinovac', 'Sinovac', '', 2, '11/23/2021'),
(2, 'Astrazenaca', 'Astrazenaca', '', 2, '11/16/2021'),
(3, 'Sinopharm', 'Sinopharm', 'Moderna', 3, '1/13/2022'),
(4, 'Pfizer', 'Pfizer', '', 2, '12/30/2021'),
(5, 'Sinovac', 'Sinovac', 'Pfizer', 3, '1/24/2022'),
(6, '1', '2', '3', 1, '1'),
(7, '1', '2', '3', 1, '1'),
(8, '1', '2', '3', 4, '2022-02-24'),
(9, '7', '7', '', 3, '2022-02-14'),
(10, '4123', '1325', '1234', 234234, '2022-03-14'),
(11, '1', '123', '234', 2, '2022-03-07'),
(12, '123', '1', '3', 1, '2022-04-20'),
(13, '2', '123', '3', 4, '2022-04-13'),
(14, '2', '2', '3', 4, '2022-04-05'),
(15, '1', '1', '1', 4, '2022-04-12'),
(16, '1', '1', '1', 4, '2022-04-12'),
(17, '123', '2', '3', 4, '2022-04-13'),
(18, '123', '1', '3', 1, '2022-04-15'),
(19, '123', '1', '3', 1, '2022-04-15'),
(20, 'lasta', '1ats', '3', 1, '2022-04-15'),
(21, 'lasta', '1ats', '3', 1, '2022-04-15'),
(22, '123', '2', '1', 3, '2022-04-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atk`
--
ALTER TABLE `atk`
  ADD PRIMARY KEY (`ATK_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD KEY `Payment` (`Payment_ID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Driver_ID`),
  ADD KEY `ATK_ID` (`ATK_ID`),
  ADD KEY `driver_ibfk_2` (`Vaccine_ID`),
  ADD KEY `driver_ibfk_3` (`Licence_ID`),
  ADD KEY `driver_ibfk_4` (`Problem_ID`);

--
-- Indexes for table `licence`
--
ALTER TABLE `licence`
  ADD PRIMARY KEY (`licence_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`Problem_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`Review_ID`);

--
-- Indexes for table `review_test`
--
ALTER TABLE `review_test`
  ADD PRIMARY KEY (`Review_ID`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`Trip_ID`),
  ADD KEY `Review_ID` (`Review_ID`),
  ADD KEY `Driver_ID` (`Driver_ID`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`Vaccine_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atk`
--
ALTER TABLE `atk`
  MODIFY `ATK_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `Driver_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `licence`
--
ALTER TABLE `licence`
  MODIFY `licence_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `Problem_ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `Review_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `review_test`
--
ALTER TABLE `review_test`
  MODIFY `Review_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `Trip_ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `Vaccine_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`ATK_ID`) REFERENCES `atk` (`ATK_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `driver_ibfk_2` FOREIGN KEY (`Vaccine_ID`) REFERENCES `vaccine` (`Vaccine_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `driver_ibfk_3` FOREIGN KEY (`Licence_ID`) REFERENCES `licence` (`licence_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `driver_ibfk_4` FOREIGN KEY (`Problem_ID`) REFERENCES `problem` (`Problem_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_ibfk_2` FOREIGN KEY (`Review_ID`) REFERENCES `review` (`Review_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_3` FOREIGN KEY (`Review_ID`) REFERENCES `review` (`Review_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_4` FOREIGN KEY (`Driver_ID`) REFERENCES `driver` (`Driver_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
