-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2021 at 06:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitted`
--

CREATE TABLE `admitted` (
  `Bed_ID` varchar(20) NOT NULL,
  `ward_ID` varchar(20) NOT NULL,
  `patient_ID` varchar(20) NOT NULL,
  `Discharged_Date` date NOT NULL,
  `Discharged_Time` time(6) NOT NULL,
  `Admitted_Date` date NOT NULL,
  `Admitted_Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admitted`
--

INSERT INTO `admitted` (`Bed_ID`, `ward_ID`, `patient_ID`, `Discharged_Date`, `Discharged_Time`, `Admitted_Date`, `Admitted_Time`) VALUES
('BED001', 'W001', 'P00001', '2021-09-05', '12:03:00.000000', '2021-09-30', '00:11:16.000000'),
('BED002', 'W002', 'P00003', '2021-09-22', '14:18:28.000000', '2021-10-04', '14:09:28.000000');

-- --------------------------------------------------------

--
-- Table structure for table `assigned`
--

CREATE TABLE `assigned` (
  `Emp_ID` varchar(20) NOT NULL,
  `Patient_Care_Unit_ID` varchar(20) NOT NULL,
  `Hours` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigned`
--

INSERT INTO `assigned` (`Emp_ID`, `Patient_Care_Unit_ID`, `Hours`) VALUES
('E001', 'PCU01', 8),
('E002', 'PCU02', 4),
('E003', 'PCU03', 2);

-- --------------------------------------------------------

--
-- Table structure for table `attendant`
--

CREATE TABLE `attendant` (
  `Emp_ID` varchar(20) NOT NULL,
  `Hourly_Charge_Rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendant`
--

INSERT INTO `attendant` (`Emp_ID`, `Hourly_Charge_Rate`) VALUES
('E009', 750),
('E010', 500);

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE `bed` (
  `Bed_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`Bed_ID`) VALUES
('BED001'),
('BED002'),
('BED003'),
('BED004');

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE `check` (
  `Diagnostic_Code` varchar(20) NOT NULL,
  `Patient_ID` varchar(20) NOT NULL,
  `DEA_No` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL,
  `Description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `check`
--

INSERT INTO `check` (`Diagnostic_Code`, `Patient_ID`, `DEA_No`, `Date`, `Time`, `Description`) VALUES
('DC001', 'P00001', 'D001', '2021-10-01', '14:13:09.000000', 'Situation is critical , Need to perform a oparation');

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

CREATE TABLE `cleaner` (
  `Emp_ID` varchar(20) NOT NULL,
  `Contract_No` varchar(10) NOT NULL,
  `Contract_startDate` date NOT NULL,
  `Contract_EndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`Emp_ID`, `Contract_No`, `Contract_startDate`, `Contract_EndDate`) VALUES
('E007', 'C001', '2018-09-14', '2022-09-14'),
('E008', 'C002', '2014-09-14', '2018-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic`
--

CREATE TABLE `diagnostic` (
  `Diagnostic_Code` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnostic`
--

INSERT INTO `diagnostic` (`Diagnostic_Code`, `Name`) VALUES
('DC001', 'Cancer'),
('DC002', 'Cardiac Arrest'),
('DC003', 'Covid');

-- --------------------------------------------------------

--
-- Table structure for table `diagnostic_unit`
--

CREATE TABLE `diagnostic_unit` (
  `Unit_ID` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Patient_Care_Unit_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diagnostic_unit`
--

INSERT INTO `diagnostic_unit` (`Unit_ID`, `Name`, `Patient_Care_Unit_ID`) VALUES
('DU001', 'Critical', 'PCU01'),
('WDU002', ' radiology', 'PCU02');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DEA_No` varchar(20) NOT NULL,
  `Registered_ID` varchar(20) NOT NULL,
  `Speciality_Area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DEA_No`, `Registered_ID`, `Speciality_Area`) VALUES
('D001', 'SLMC1001', 'Neurologist'),
('D002', 'SLMC1002', 'Physician'),
('D003', 'SLMC1003', 'Psycologist');

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `Drug_code` varchar(20) NOT NULL,
  `Drug_Name` varchar(50) NOT NULL,
  `Drug_Type` varchar(50) NOT NULL,
  `Unit_Cost` int(5) NOT NULL,
  `Treatment_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`Drug_code`, `Drug_Name`, `Drug_Type`, `Unit_Cost`, `Treatment_ID`) VALUES
('DRUG0001', 'Panaball', 'Painkiller', 3, 'TR002'),
('DRUG0002', 'Cycloxillin', 'Antibiotic', 10, 'TR001'),
('DRUG0003', 'Amoxillin', 'Antibiotic', 8, 'TR003'),
('DRUG0004', 'Aspirine', 'Painkiller', 5, 'TR003');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_contact`
--

CREATE TABLE `emergency_contact` (
  `Patient_ID` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Relationship` varchar(20) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency_contact`
--

INSERT INTO `emergency_contact` (`Patient_ID`, `Address`, `Relationship`, `Contact_No`, `FName`, `LName`) VALUES
('P00001', '17, Vijay Rd, Hatton', 'Father', 785878459, 'Ajith', 'Samarasekara'),
('P00002', '!9, Vavarset place, Dehiwala', 'Mother', 752525258, 'Kamala', 'Kariyavasam'),
('P00004', '12, Sinha Rd, Galle', 'Aunt', 174105684, 'Sarath', 'Lakmal'),
('P00003', '11, Chapter Rd, Nugegoda', 'Mother', 113623812, 'Kamala', 'Silva');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `Working_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Name`, `Address`, `Contact_No`, `Working_status`) VALUES
('E001', 'Dr.suraif', '22/A, Mohammad Rd, Dehiwala', 113667812, 'Full time'),
('E002', 'Dr. Mahinda Rajapaksha', '12/A, Senenayaka Rd, Araliyagaha mangdiraya', 113667813, 'Full time'),
('E003', 'Dr. Trineesha', '21, Tree Rd, Maharagama', 75485869, 'Part-time'),
('E004', 'Ms. Susanthika', '21, Prince street, Colombo', 721549895, 'Full-time'),
('E005', 'Ms. Smrithi ', '12, Taj Rd, Kirulapone', 775123478, 'Part-time'),
('E006', 'Mrs. Sara', '74, Princess st, Galle', 115784952, 'Full-time'),
('E007', 'Mr. Susantha', '24, Perera lane, Colombo-04', 785785624, 'Full-time'),
('E008', 'Mr, Sarath', '34, Dean place, Pettah', 745785968, 'Full-time'),
('E009', 'Ms. Chamari', '56, Rose St, Kolpity', 748758695, 'Part-time'),
('E010', 'Mrs. Mala', 'Galle Rd, Panadura.', 113667234, 'Part time');

-- --------------------------------------------------------

--
-- Table structure for table `inpatient`
--

CREATE TABLE `inpatient` (
  `BirthDate` varchar(10) NOT NULL,
  `DEA_No` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inpatient`
--

INSERT INTO `inpatient` (`BirthDate`, `DEA_No`) VALUES
('1999-02-11', 'D001'),
('2000-02-26', 'D002'),
('2005-02-26', 'D003');

-- --------------------------------------------------------

--
-- Table structure for table `insurance_info`
--

CREATE TABLE `insurance_info` (
  `Patient_ID` varchar(20) NOT NULL,
  `Branch_Contact_No` int(10) NOT NULL,
  `Branch_Name` varchar(50) NOT NULL,
  `Branch_Address` varchar(100) NOT NULL,
  `Company_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance_info`
--

INSERT INTO `insurance_info` (`Patient_ID`, `Branch_Contact_No`, `Branch_Name`, `Branch_Address`, `Company_Name`) VALUES
('P00001', 111191192, 'Borella Branch', '14, Startford Avenue, Borella', 'Ceypinko Insurance'),
('P00002', 372457845, 'Kurunegala Branch', '24, Nawinna Rd, Nawinna', 'Janasirasa Insurance'),
('P00004', 123578495, 'Peradheniya', '11, Kandy Rd, Kandy', 'CIC'),
('P00003', 912267890, 'Colombo 7', '23, Princee Rd, Colombo 7', 'Janashkthi');

-- --------------------------------------------------------

--
-- Table structure for table `in_out`
--

CREATE TABLE `in_out` (
  `Patient_ID` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `OPD_Date` date NOT NULL,
  `OPD_Time` time(6) NOT NULL,
  `BirthDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in_out`
--

INSERT INTO `in_out` (`Patient_ID`, `Name`, `OPD_Date`, `OPD_Time`, `BirthDate`) VALUES
('P00001', 'Mr. Anjana', '2021-09-08', '18:00:00.000000', '2004-10-06'),
('P00002', 'Mr. Sajith Premadasa', '2021-09-05', '14:00:00.000000', '1960-02-11'),
('P00003', 'Mr. Sirisena', '2021-08-01', '12:01:00.000000', '1950-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `medical_staff`
--

CREATE TABLE `medical_staff` (
  `Registered_ID` varchar(20) NOT NULL,
  `Emp_ID` varchar(20) NOT NULL,
  `Joined_Date` varchar(10) NOT NULL,
  `Resigned_Date` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_staff`
--

INSERT INTO `medical_staff` (`Registered_ID`, `Emp_ID`, `Joined_Date`, `Resigned_Date`) VALUES
('SLMC1001', 'E001', '2016-12-12', NULL),
('SLMC1002', 'E002', '2012-06-14', '2020-02-11'),
('SLMC1003', 'E003', '2021-05-22', NULL),
('SLNC1001', 'E004', '2018-10-21', NULL),
('SLNC1002', 'E005', '2016-10-02', '2022-09-08'),
('SLNC1003', 'E006', '2014-09-02', '2022-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `non_medical_staff`
--

CREATE TABLE `non_medical_staff` (
  `Emp_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_medical_staff`
--

INSERT INTO `non_medical_staff` (`Emp_ID`) VALUES
('E007'),
('E008'),
('E009');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `Registered_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`Registered_ID`) VALUES
('SLNC1001'),
('SLNC1002'),
('SLNC1003');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_ID` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_ID`, `Name`) VALUES
('P00001', 'Mr. Wimal'),
('P00002', 'Mr. Ranjan'),
('P00003', 'Mr. Anjana'),
('P00004', 'Dilly');

-- --------------------------------------------------------

--
-- Table structure for table `patient_care_unit`
--

CREATE TABLE `patient_care_unit` (
  `Patient_Care_Unit_ID` varchar(20) NOT NULL,
  `Emp_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_care_unit`
--

INSERT INTO `patient_care_unit` (`Patient_Care_Unit_ID`, `Emp_ID`) VALUES
('PCU01', 'E001'),
('PCU02', 'E002'),
('PCU03', 'E003');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `Patient_ID` varchar(20) NOT NULL,
  `Registered_ID` varchar(20) NOT NULL,
  `Weight` int(5) NOT NULL,
  `Blood_Pressure` int(5) NOT NULL,
  `Pulse` int(5) NOT NULL,
  `Temperature` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`Patient_ID`, `Registered_ID`, `Weight`, `Blood_Pressure`, `Pulse`, `Temperature`) VALUES
('P00001', 'SLNC1002', 32, 56, 74, 54),
('P00002', 'SLNC1001', 66, 120, 23, 34),
('P00003', 'SLNC1003', 120, 240, 24, 37),
('P00004', 'SLNC1001', 56, 23, 74, 31);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `Patient_ID` varchar(20) NOT NULL,
  `Contact_No` int(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Relationship` varchar(20) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`Patient_ID`, `Contact_No`, `Address`, `Relationship`, `FName`, `LName`) VALUES
('P00004', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `supply`
--

CREATE TABLE `supply` (
  `Registered_No` varchar(20) NOT NULL,
  `Drug_Code` varchar(20) NOT NULL,
  `Drug_Type` varchar(50) NOT NULL,
  `Supply_Date` date NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Unit_Cost` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supply`
--

INSERT INTO `supply` (`Registered_No`, `Drug_Code`, `Drug_Type`, `Supply_Date`, `Quantity`, `Unit_Cost`) VALUES
('SLVC001', 'DRUG0001', 'Painkiller', '2021-07-13', 2500, 3),
('SLVC002', 'DRUG0002', 'Antibiotic', '2021-07-23', 1500, 10),
('SLVC003', 'DRUG0003', 'Antibiotic', '2021-07-23', 1000, 9),
('SLVC004', 'DRUG0004', 'Painkiller', '2021-03-17', 500, 5);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Test_Code` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Cost` int(10) NOT NULL,
  `Treatment_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Test_Code`, `Name`, `Cost`, `Treatment_ID`) VALUES
('TEST001', 'Urine Test', 1500, 'TR001'),
('TEST002', 'ECG', 500, 'TR001');

-- --------------------------------------------------------

--
-- Table structure for table `treat`
--

CREATE TABLE `treat` (
  `Treatment_ID` varchar(20) NOT NULL,
  `Patient_ID` varchar(20) NOT NULL,
  `DEA_No` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treat`
--

INSERT INTO `treat` (`Treatment_ID`, `Patient_ID`, `DEA_No`, `Date`, `Time`) VALUES
('TR001', 'P00001', 'D001', '2021-10-05', '09:35:23.000000'),
('TR002', 'P00002', 'D003', '2021-10-04', '14:35:53.079000'),
('TR003', 'P00003', 'D003', '2021-10-04', '14:36:15.139000');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `Treatment_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Treatment_ID`) VALUES
('TR001'),
('TR002'),
('TR003');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `Registered_No` varchar(20) NOT NULL,
  `Contact_No` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`Registered_No`, `Contact_No`, `Name`, `Address`) VALUES
('SLVC001', '0998787581', 'Nuwan (Pvt) Ltd', '11, King St, Kandy'),
('SLVC002', '0721549869', 'Pharma PLC', '21, Sea st, Jaffna'),
('SLVC003', '0511234567', 'New Pharmacy', '14, Moor Rd, Dehiwala'),
('SLVC004', '0741524785', 'Florence pharmaceuticals', '17, Queen Rd, Badulla'),
('SLVC005', '0775128478', 'Havalock Pharmacy', '12, Havelock Rd, Kirulapone');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `Ward_ID` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Patient_Care_Unit_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`Ward_ID`, `Name`, `Patient_Care_Unit_ID`) VALUES
('W001', 'Child Care', 'PCU01'),
('W002', 'Mother Care', 'PCU02'),
('W003', 'Cancer Care', 'PCU03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admitted`
--
ALTER TABLE `admitted`
  ADD KEY `Bed_ID` (`Bed_ID`),
  ADD KEY `patient_ID` (`patient_ID`),
  ADD KEY `ward_ID` (`ward_ID`);

--
-- Indexes for table `assigned`
--
ALTER TABLE `assigned`
  ADD KEY `Emp_ID` (`Emp_ID`),
  ADD KEY `Patient_Care_Unit_ID` (`Patient_Care_Unit_ID`);

--
-- Indexes for table `attendant`
--
ALTER TABLE `attendant`
  ADD KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `bed`
--
ALTER TABLE `bed`
  ADD PRIMARY KEY (`Bed_ID`);

--
-- Indexes for table `check`
--
ALTER TABLE `check`
  ADD KEY `Diagnostic_Code` (`Diagnostic_Code`,`Patient_ID`,`DEA_No`),
  ADD KEY `PatienS` (`Patient_ID`),
  ADD KEY `DEAB` (`DEA_No`);

--
-- Indexes for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`Contract_No`),
  ADD KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `diagnostic`
--
ALTER TABLE `diagnostic`
  ADD PRIMARY KEY (`Diagnostic_Code`);

--
-- Indexes for table `diagnostic_unit`
--
ALTER TABLE `diagnostic_unit`
  ADD PRIMARY KEY (`Unit_ID`),
  ADD KEY `Patient_Care_Unit_ID` (`Patient_Care_Unit_ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DEA_No`),
  ADD KEY `Registered_ID` (`Registered_ID`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`Drug_code`),
  ADD KEY `Treatment_ID` (`Treatment_ID`);

--
-- Indexes for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `inpatient`
--
ALTER TABLE `inpatient`
  ADD KEY `DEA_No` (`DEA_No`);

--
-- Indexes for table `insurance_info`
--
ALTER TABLE `insurance_info`
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `in_out`
--
ALTER TABLE `in_out`
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD PRIMARY KEY (`Registered_ID`),
  ADD KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `non_medical_staff`
--
ALTER TABLE `non_medical_staff`
  ADD KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD KEY `Registered_ID` (`Registered_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `patient_care_unit`
--
ALTER TABLE `patient_care_unit`
  ADD PRIMARY KEY (`Patient_Care_Unit_ID`),
  ADD KEY `Emp_ID` (`Emp_ID`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD KEY `Registered_ID` (`Registered_ID`),
  ADD KEY `Registered_ID_2` (`Registered_ID`),
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `supply`
--
ALTER TABLE `supply`
  ADD KEY `Registered_No` (`Registered_No`),
  ADD KEY `Registered_No_2` (`Registered_No`),
  ADD KEY `Drug_Code` (`Drug_Code`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Test_Code`),
  ADD KEY `Treatment_ID` (`Treatment_ID`);

--
-- Indexes for table `treat`
--
ALTER TABLE `treat`
  ADD KEY `Treatment_ID` (`Treatment_ID`),
  ADD KEY `DEA_No` (`DEA_No`),
  ADD KEY `Patient_ID` (`Patient_ID`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`Treatment_ID`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`Registered_No`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`Ward_ID`),
  ADD KEY `Patient_Care_Unit_ID` (`Patient_Care_Unit_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admitted`
--
ALTER TABLE `admitted`
  ADD CONSTRAINT `bed` FOREIGN KEY (`Bed_ID`) REFERENCES `bed` (`Bed_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patientA` FOREIGN KEY (`patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ward` FOREIGN KEY (`ward_ID`) REFERENCES `ward` (`Ward_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assigned`
--
ALTER TABLE `assigned`
  ADD CONSTRAINT `PCU` FOREIGN KEY (`Patient_Care_Unit_ID`) REFERENCES `patient_care_unit` (`Patient_Care_Unit_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee5` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendant`
--
ALTER TABLE `attendant`
  ADD CONSTRAINT `employeeAttendance` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `check`
--
ALTER TABLE `check`
  ADD CONSTRAINT `DEAB` FOREIGN KEY (`DEA_No`) REFERENCES `doctor` (`DEA_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Diagno` FOREIGN KEY (`Diagnostic_Code`) REFERENCES `diagnostic` (`Diagnostic_Code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PatienS` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD CONSTRAINT `employee3` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diagnostic_unit`
--
ALTER TABLE `diagnostic_unit`
  ADD CONSTRAINT `PCU2` FOREIGN KEY (`Patient_Care_Unit_ID`) REFERENCES `patient_care_unit` (`Patient_Care_Unit_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `Register` FOREIGN KEY (`Registered_ID`) REFERENCES `medical_staff` (`Registered_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `drug`
--
ALTER TABLE `drug`
  ADD CONSTRAINT `TreatmentC` FOREIGN KEY (`Treatment_ID`) REFERENCES `treatment` (`Treatment_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `emergency_contact`
--
ALTER TABLE `emergency_contact`
  ADD CONSTRAINT `PatientC` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inpatient`
--
ALTER TABLE `inpatient`
  ADD CONSTRAINT `DEA` FOREIGN KEY (`DEA_No`) REFERENCES `doctor` (`DEA_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `insurance_info`
--
ALTER TABLE `insurance_info`
  ADD CONSTRAINT `PatientD` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `in_out`
--
ALTER TABLE `in_out`
  ADD CONSTRAINT `PatientB` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD CONSTRAINT `employee` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `non_medical_staff`
--
ALTER TABLE `non_medical_staff`
  ADD CONSTRAINT `employee2` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nurse`
--
ALTER TABLE `nurse`
  ADD CONSTRAINT `nurselink` FOREIGN KEY (`Registered_ID`) REFERENCES `medical_staff` (`Registered_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `patient_care_unit`
--
ALTER TABLE `patient_care_unit`
  ADD CONSTRAINT `employee4` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `Patient` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `qwerty` FOREIGN KEY (`Registered_ID`) REFERENCES `medical_staff` (`Registered_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD CONSTRAINT `PatientE` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supply`
--
ALTER TABLE `supply`
  ADD CONSTRAINT `DrugH` FOREIGN KEY (`Drug_Code`) REFERENCES `drug` (`Drug_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RegisterH` FOREIGN KEY (`Registered_No`) REFERENCES `vendor` (`Registered_No`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `TreatmentB` FOREIGN KEY (`Treatment_ID`) REFERENCES `treatment` (`Treatment_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treat`
--
ALTER TABLE `treat`
  ADD CONSTRAINT `DEAA` FOREIGN KEY (`DEA_No`) REFERENCES `doctor` (`DEA_No`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PatientF` FOREIGN KEY (`Patient_ID`) REFERENCES `patient` (`Patient_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TreatmentA` FOREIGN KEY (`Treatment_ID`) REFERENCES `treatment` (`Treatment_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `PCU3` FOREIGN KEY (`Patient_Care_Unit_ID`) REFERENCES `patient_care_unit` (`Patient_Care_Unit_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
