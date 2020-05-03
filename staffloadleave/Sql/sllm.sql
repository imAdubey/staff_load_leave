-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2020 at 07:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sllm`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_leave`
--

CREATE TABLE `applied_leave` (
  `al_id` int(255) NOT NULL,
  `applied_by` varchar(255) NOT NULL,
  `l_from` varchar(255) NOT NULL,
  `l_to` varchar(255) NOT NULL,
  `casual` varchar(255) NOT NULL,
  `special` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `vacation` varchar(255) NOT NULL,
  `managed_load_doc` varchar(255) NOT NULL,
  `staff_reason` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admins_response` varchar(500) NOT NULL,
  `applied_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied_leave`
--

INSERT INTO `applied_leave` (`al_id`, `applied_by`, `l_from`, `l_to`, `casual`, `special`, `medical`, `vacation`, `managed_load_doc`, `staff_reason`, `status`, `admins_response`, `applied_date`) VALUES
(6, 'Tarun Sharma', '2020-05-04', '2020-05-04', '8', '', '', '', '8508-prtigyapatra-ilovepdf-compressed.pdf', 'bbjh', 'Approved', 'bjbjh', '2020-05-03 05:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `assign_leave`
--

CREATE TABLE `assign_leave` (
  `id` int(255) NOT NULL,
  `v_from` varchar(255) NOT NULL,
  `v_to` varchar(255) NOT NULL,
  `casual` varchar(255) NOT NULL,
  `special` varchar(255) NOT NULL,
  `medical` varchar(255) NOT NULL,
  `vacation` varchar(255) NOT NULL,
  `assign_to` varchar(255) NOT NULL,
  `assign_by` varchar(255) NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_leave`
--

INSERT INTO `assign_leave` (`id`, `v_from`, `v_to`, `casual`, `special`, `medical`, `vacation`, `assign_to`, `assign_by`, `assign_date`) VALUES
(9, '2020-05-02', '2021-05-01', '10', '10', '20', '28', 'Vaibhav Badbe', 'admin', '2020-05-03 05:48:59'),
(10, '2020-05-02', '2021-05-01', '10', '10', '20', '28', 'Tarun Sharma', 'admin', '2020-05-03 05:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `assign_load`
--

CREATE TABLE `assign_load` (
  `id` int(255) NOT NULL,
  `assigned_to` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `assigned_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_load`
--

INSERT INTO `assign_load` (`id`, `assigned_to`, `year`, `subject`, `type`, `assigned_date`) VALUES
(136, 'Vaibhav Badbe', '4', 'CG', 'B', '2020-05-03 05:46:16'),
(137, 'Tarun Sharma', '5', 'TCS', 'T', '2020-05-03 05:46:30'),
(138, 'Vaibhav Badbe', '5', 'MMS', 'T', '2020-05-03 05:46:45'),
(139, 'Vaibhav Badbe', '6', 'CSS', 'B', '2020-05-03 05:46:57'),
(140, 'Tarun Sharma', '6', 'SE', 'B', '2020-05-03 05:47:20'),
(141, 'Tarun Sharma', '7', 'AI', 'B', '2020-05-03 05:47:52'),
(142, 'Vaibhav Badbe', '7', 'MCC', 'B', '2020-05-03 05:51:54'),
(143, 'Vaibhav Badbe', '8', 'BD', 'B', '2020-05-03 05:52:09'),
(144, 'Tarun Sharma', '8', 'HMI', 'B', '2020-05-03 05:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `prof_name` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `ltime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `subjects`, `prof_name`, `day`, `ltime`) VALUES
(1, 'CSS', 'VB(T)', 'Monday', '9:30am-10:30am'),
(2, 'CSS', 'VB(T)', 'Monday', '10:30am-11:30am'),
(3, 'ACN / ADBMS', 'DA(B1) / SI(B2)', 'Monday', '12:00pm-1:00pm'),
(4, 'ACN / ADBMS', 'DA(B1) / SI(B2)', 'Monday', '1:00pm-2:00pm'),
(5, 'CSS / SPCC', 'VB(B1) / GS(B2)', 'Monday', '2:15pm-3:15pm'),
(6, 'CSS / SPCC', 'VB(B1) / GS(B2)', 'Monday', '3:15pm-4:15pm'),
(7, '--', '--', 'Monday', '4:15pm-5:15pm'),
(8, 'SPCC', 'GS(T)', 'Tuesday', '9:30am-10:30am'),
(9, 'SPCC', 'GS(T)', 'Tuesday', '10:30am-11:30am'),
(10, 'DWH / SE', 'SK(B1) / TS(B2)', 'Tuesday', '12:00pm-1:00pm'),
(11, 'DWH / SE', 'SK(B1) / TS(B2)', 'Tuesday', '1:00pm-2:00pm'),
(12, 'SE / DWH', 'TS(B1) / SK(B2)', 'Tuesday', '2:15pm-3:15pm'),
(13, 'SE / DWH', 'TS(B1) / SK(B2)', 'Tuesday', '3:15pm-4:15pm'),
(14, 'DWH', 'SK(T)', 'Tuesday', '4:15pm-5:15pm'),
(15, 'SE', 'TS(T)', 'Wednesday', '9:30am-10:30am'),
(16, 'SPCC', 'GS(T)', 'Wednesday', '10:30am-11:30am'),
(17, 'SPCC / CSS', 'GS(B1) / VB(B2)', 'Wednesday', '12:00pm-1:00pm'),
(18, 'SPCC / CSS', 'GS(B1) / VB(B2)', 'Wednesday', '1:00pm-2:00pm'),
(19, 'DWH', 'SK(T)', 'Wednesday', '2:15pm-3:15pm'),
(20, 'DWH', 'SK(T)', 'Wednesday', '3:15pm-4:15pm'),
(21, '--', '--', 'Wednesday', '4:15pm-5:15pm'),
(22, 'DWH', 'SK(T)', 'Thursday', '9:30am-10:30am'),
(23, 'SE', 'TS(T)', 'Thursday', '10:30am-11:30am'),
(24, 'CSS', 'VB(T)', 'Thursday', '12:00pm-1:00pm'),
(25, 'CSS', 'VB(T)', 'Thursday', '1:00pm-2:00pm'),
(26, 'SPCC', 'GS(T)', 'Thursday', '2:15pm-3:15pm'),
(27, '--', '--', 'Thursday', '3:15pm-4:15pm'),
(28, '--', '--', 'Thursday', '4:15pm-5:15pm'),
(29, 'SE', 'TS(T)', 'Friday', '9:30am-10:30am'),
(30, 'SE', 'TS(T)', 'Friday', '10:30am-11:30am'),
(31, 'ACN / ADBMS', 'DA(B1) / SI(B2)', 'Friday', '12:00pm-1:00pm'),
(32, 'ACN/ ADBMS', 'DA(B1) / SI(B2)', 'Friday', '1:00pm-2:00pm'),
(33, '--', '--', 'Friday', '2:15pm-3:15pm'),
(34, '--', '--', 'Friday', '3:15pm-4:15pm'),
(35, '--', '--', 'Friday', '4:15pm-5:15pm');

-- --------------------------------------------------------

--
-- Table structure for table `lectures_be`
--

CREATE TABLE `lectures_be` (
  `id` int(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `prof_name` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `ltime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lectures_fe`
--

CREATE TABLE `lectures_fe` (
  `id` int(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `prof_name` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `ltime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lectures_fe`
--

INSERT INTO `lectures_fe` (`id`, `subjects`, `prof_name`, `day`, `ltime`) VALUES
(1, 'M1', 'NY', 'Monday', '9:30am-10:30am'),
(3, 'SPA', 'SI(T)', 'Monday', '12:00pm-1:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `lectures_se`
--

CREATE TABLE `lectures_se` (
  `id` int(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `prof_name` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `ltime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `managed_leave`
--

CREATE TABLE `managed_leave` (
  `id` int(255) NOT NULL,
  `valid_from` varchar(256) NOT NULL,
  `valid_to` varchar(256) NOT NULL,
  `year` varchar(256) NOT NULL,
  `managed_by` varchar(256) NOT NULL,
  `fe_sub_from` varchar(256) NOT NULL,
  `fe_managed_to` varchar(256) NOT NULL,
  `fe_sub_to` varchar(256) NOT NULL,
  `se_sub_from` varchar(256) NOT NULL,
  `se_managed_to` varchar(256) NOT NULL,
  `se_sub_to` varchar(256) NOT NULL,
  `te_sub_from` varchar(256) NOT NULL,
  `te_managed_to` varchar(256) NOT NULL,
  `te_sub_to` varchar(256) NOT NULL,
  `be_sub_from` varchar(256) NOT NULL,
  `be_managed_to` varchar(256) NOT NULL,
  `be_sub_to` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managed_leave`
--

INSERT INTO `managed_leave` (`id`, `valid_from`, `valid_to`, `year`, `managed_by`, `fe_sub_from`, `fe_managed_to`, `fe_sub_to`, `se_sub_from`, `se_managed_to`, `se_sub_to`, `te_sub_from`, `te_managed_to`, `te_sub_to`, `be_sub_from`, `be_managed_to`, `be_sub_to`) VALUES
(1, '2020-05-05', '2020-05-07', '7', 'Tarun Sharma', '', '', '', '', '', '', 'TCS', 'Vaibhav Badbe', 'MMS', 'AI', 'Vaibhav Badbe', 'MCC');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `docs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`, `role`, `gender`, `dob`, `branch`, `qualification`, `address`, `image`, `docs`) VALUES
(45, 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 'Admin', 'Male', '', '', '', '', '', ''),
(46, 'Vaibhav Badbe', 'vb@gmail.com', '033464563eddeba90907d336be45becc', 'Staff', 'Male', '1980-06-11', 'Computer', 'M Tech', 'Badlapur', 0x6c6f67696e696d672e6a7067, '99666-EligibilityStatusReport (10)-1.pdf'),
(48, 'Tarun Sharma', 'ts@gmail.com', 'f489527eaa3e1f2e8272f7fdcf5653ad', 'Staff', 'Male', '1985-06-12', 'Computer', 'M Tech', 'Badlapur', 0x6c6f67696e696d672e6a7067, '25618-EligibilityStatusReport (10)-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `s_id` int(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `y_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`s_id`, `subjects`, `y_id`) VALUES
(1, 'AM-1', 1),
(2, 'Mechanics', 1),
(3, 'BEE', 1),
(4, 'AP-1', 1),
(5, 'AC-1', 1),
(6, 'EVS', 1),
(7, 'AM-2', 2),
(8, 'ED', 2),
(9, 'SPA', 2),
(10, 'AP-2', 2),
(11, 'AC-2', 2),
(12, 'CS', 2),
(13, 'AM-3', 3),
(14, 'DLDA', 3),
(15, 'DSGT', 3),
(16, 'ECCF', 3),
(17, 'DS', 3),
(18, 'OOPM', 3),
(19, 'AM-4', 4),
(20, 'AOA', 4),
(21, 'COA', 4),
(22, 'CG', 4),
(23, 'OS', 4),
(24, 'Open Source', 4),
(25, 'MP', 5),
(26, 'DBMS', 5),
(27, 'CN', 5),
(28, 'TCS', 5),
(29, 'MMS', 5),
(30, 'WD', 5),
(31, 'ACN', 6),
(32, 'ADBMS', 6),
(33, 'CSS', 6),
(34, 'SE', 6),
(35, 'SPCC', 6),
(36, 'DWM', 6),
(37, 'DSIP', 7),
(38, 'MCC', 7),
(39, 'AI', 7),
(40, 'OC-1', 7),
(41, 'OC-2', 7),
(42, 'HMI', 8),
(43, 'DC', 8),
(44, 'DWM', 8),
(45, 'BD', 8),
(46, 'PDS', 8),
(47, 'CC', 8);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `y_id` int(255) NOT NULL,
  `year-sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`y_id`, `year-sem`) VALUES
(1, 'FE(SEM-1)'),
(2, 'FE(SEM-2)'),
(3, 'SE(SEM-3)'),
(4, 'SE(SEM-4)'),
(5, 'TE(SEM-5)'),
(6, 'TE(SEM-6)'),
(7, 'BE(SEM-7)'),
(8, 'BE(SEM-8)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_leave`
--
ALTER TABLE `applied_leave`
  ADD PRIMARY KEY (`al_id`);

--
-- Indexes for table `assign_leave`
--
ALTER TABLE `assign_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_load`
--
ALTER TABLE `assign_load`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures_be`
--
ALTER TABLE `lectures_be`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures_fe`
--
ALTER TABLE `lectures_fe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lectures_se`
--
ALTER TABLE `lectures_se`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managed_leave`
--
ALTER TABLE `managed_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`y_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_leave`
--
ALTER TABLE `applied_leave`
  MODIFY `al_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assign_leave`
--
ALTER TABLE `assign_leave`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assign_load`
--
ALTER TABLE `assign_load`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `lectures_be`
--
ALTER TABLE `lectures_be`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lectures_fe`
--
ALTER TABLE `lectures_fe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lectures_se`
--
ALTER TABLE `lectures_se`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `managed_leave`
--
ALTER TABLE `managed_leave`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `y_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
