-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 06:12 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exeatdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `exeat`
--

CREATE TABLE `exeat` (
  `assign_date` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `s_id` varchar(250) NOT NULL,
  `student_form` varchar(250) NOT NULL,
  `student_program` varchar(250) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `assigned` varchar(250) NOT NULL,
  `days_allowed` varchar(250) NOT NULL,
  `return_date` varchar(250) NOT NULL,
  `return_approved_by` varchar(250) NOT NULL,
  `return_approved_date` varchar(250) NOT NULL,
  `status_` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exeat`
--

INSERT INTO `exeat` (`assign_date`, `student_name`, `s_id`, `student_form`, `student_program`, `reason`, `assigned`, `days_allowed`, `return_date`, `return_approved_by`, `return_approved_date`, `status_`) VALUES
('April-24-2020 19:39:58', '5', '5', 'Form_2', 'Business', 'Hospital', 'assign', '1', '2020-04-24', 'not returned', 'n/a', ''),
('April-24-2020 19:43:36', '3', '3', 'Form_2', 'Business', 'Hospital', 'assign', '1', '2020-04-24', 'not returned', 'n/a', ''),
('April-24-2020 19:44:28', '8', '8', 'Choose...', '', 'Home', 'assign', '1', '2020-04-13', 'not returned', 'n/a', ''),
('April-24-2020 19:47:56', '9', '9', 'Choose...', '', 'rfdfd', 'assign', '7', '2020-04-24', 'not returned', 'n/a', ''),
('April-24-2020 19:49:21', '5', '5', 'Form_2', 'Business', 'sddgrr', 'assign', '1', '2020-04-24', '', 'April-29-2020 22:10:41', 'Return'),
('April-24-2020 19:52:26', '2', '2', 'Form_2', 'Business', 'fgdfg', 'assign', '1', '2020-04-10', 'not returned', 'n/a', ''),
('April-24-2020 19:53:29', '5', '5', 'Form_2', 'Business', 'dd', 'assign', '1', '2020-04-07', 'not returned', 'n/a', ''),
('April-24-2020 19:56:55', '5', '5', 'Form_2', 'Business', 'ddszxc', 'assign', '1', '2020-04-23', 'not returned', 'n/a', ''),
('April-24-2020 19:57:44', '5', '5', 'Form_2', 'Business', 'assdf', 'assign', '1', '2020-04-16', 'not returned', 'n/a', ''),
('April-24-2020 20:02:31', '5', '5', 'Form_2', 'Business', 'ss', 'assign', '1', '2020-04-10', 'not returned', 'n/a', ''),
('April-24-2020 21:14:49', '12', '12', 'Choose...', '', 'aaaa', 'assign', '7', '2020-04-10', 'not returned', 'n/a', ''),
('April-24-2020 21:16:04', '9', '9', 'Choose...', '', 'ddd', 'assign', '1', '2020-04-16', 'not returned', 'n/a', ''),
('April-24-2020 21:20:26', '5', '5', 'Form_2', 'Business', 'fed', 'assign', '19', '2020-04-22', 'not returned', 'n/a', ''),
('April-24-2020 21:23:03', '7', '7', 'Choose...', '', 'sx', 'assign', '17', '2020-04-08', 'not returned', 'n/a', ''),
('April-24-2020 21:25:08', '6', '6', 'Form_2', 'Business', 'ss', 'assign', '1', '2020-04-08', 'not returned', 'n/a', ''),
('April-24-2020 21:25:16', '6', '6', 'Form_2', 'Business', 'ss', 'assign', '1', '2020-04-08', '', 'April-25-2020 00:54:18', 'Return'),
('April-24-2020 21:52:25', '3', '3', 'Form_2', 'Business', 'fdf', 'assign', '1', '2020-04-16', '', 'April-25-2020 00:56:05', 'Return'),
('April-24-2020 21:53:06', '4', '4', 'Form_3', 'Business', 'cvcv', 'assign', '1', '2020-04-14', '', 'April-25-2020 00:38:32', 'Return'),
('April-24-2020 23:43:01', '6', '6', 'Form_2', 'Business', 'aaaaa', 'assign', '1', '2020-04-25', '', 'April-25-2020 00:52:54', 'Return'),
('April-25-2020 17:50:35', '3', '3', 'Form_2', 'Business', 'home', 'assign', '1', '2020-04-14', 'Not Approved', 'n/a', 'Not Returned'),
('April-25-2020 18:13:36', 'Student Name', '5', 'Form_2', 'Business', 'fxxf', 'assign', '1', '2020-04-25', 'Not Approved', 'n/a', 'Not Returned'),
('April-29-2020 23:44:33', 'Ben Arthur', '002', 'Form_2', 'Business', 'Sick', 'assign', '1', '2020-04-29', 'Mavis Arthur', 'April-30-2020 00:03:14', 'Return'),
('April-30-2020 23:05:21', 'Benedicta Entsie', '003', 'Form_2', 'Science', 'Hospital', 'assign', '3', '2020-04-23', 'Mrs Rose Entsie', 'April-30-2020 23:08:39', 'Return');

-- --------------------------------------------------------

--
-- Table structure for table `staff_registration`
--

CREATE TABLE `staff_registration` (
  `stf_id` int(10) NOT NULL,
  `staff_id` varchar(250) NOT NULL,
  `staff_name` varchar(250) NOT NULL,
  `staff_position` varchar(250) NOT NULL,
  `staff_contact` varchar(250) NOT NULL,
  `staff_image` varchar(250) NOT NULL,
  `registration_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_registration`
--

INSERT INTO `staff_registration` (`stf_id`, `staff_id`, `staff_name`, `staff_position`, `staff_contact`, `staff_image`, `registration_date`) VALUES
(1, '01', 'Sir Gyampo', 'HOD', '0245158965', 'Canada.jpg', '2020-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `s_id` int(20) NOT NULL,
  `studentid` varchar(250) NOT NULL,
  `studentname` varchar(250) NOT NULL,
  `studentgender` varchar(250) NOT NULL,
  `studentform` varchar(250) NOT NULL,
  `studenthealth` varchar(250) NOT NULL,
  `studentprogram` varchar(250) NOT NULL,
  `parentname` varchar(250) NOT NULL,
  `parentcontact` varchar(250) NOT NULL,
  `parentlocation` varchar(250) NOT NULL,
  `registrationdate` varchar(250) NOT NULL,
  `studentimage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`s_id`, `studentid`, `studentname`, `studentgender`, `studentform`, `studenthealth`, `studentprogram`, `parentname`, `parentcontact`, `parentlocation`, `registrationdate`, `studentimage`) VALUES
(27, '002', 'Ben Arthur', 'M', 'Form_2', 'partial', 'Business', 'Mavis Arthur', '0258585858', 'Accra', '2020-04-29', 'UK.jpg'),
(28, '003', 'Benedicta Entsie', 'F', 'Form_2', 'healthy', 'Science', 'Mrs Rose Entsie', '0258447412', 'Kumasi', '2020-04-30', 'Selina.png');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(10) NOT NULL,
  `username` varchar(250) NOT NULL,
  `pass_word` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `registration_date` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `account_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`id`, `username`, `pass_word`, `firstname`, `middlename`, `lastname`, `contact`, `location`, `registration_date`, `image`, `account_type`) VALUES
(1, 'Mish', '5586123', 'Mish', 'Developer', 'Rule', '0245181941', 'Kumasi', '2020-04-27', 'Canada.jpg', 'administrator'),
(2, 'rule', '1', 'Mish', 'K.', 'Rule', '0245181940', 'Kumasi', '2020-04-29', 'question1.jpg', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_registration`
--
ALTER TABLE `staff_registration`
  ADD PRIMARY KEY (`stf_id`),
  ADD UNIQUE KEY `staff_id` (`staff_id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff_registration`
--
ALTER TABLE `staff_registration`
  MODIFY `stf_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
