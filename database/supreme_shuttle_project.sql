-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 02:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supreme_shuttle_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appraisal`
--

CREATE TABLE `appraisal` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `passport_photo` varchar(100) NOT NULL,
  `integrity` int(100) NOT NULL,
  `discpline` int(100) NOT NULL,
  `punctuality` int(100) NOT NULL,
  `accident_free` int(100) NOT NULL,
  `decent` int(100) NOT NULL,
  `points` int(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appraisal`
--

INSERT INTO `appraisal` (`id`, `names`, `id_number`, `passport_photo`, `integrity`, `discpline`, `punctuality`, `accident_free`, `decent`, `points`, `remarks`) VALUES
(2, 'PETER MWANGI', 1234568, 'Peter Mwangi.jpeg', 3, 3, 5, 5, 2, 4, 'Exceeds Expectation');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(10) NOT NULL,
  `vehicle_reg_no` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `date_of_complaint` date NOT NULL,
  `driver_incharge` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `complaint_description` varchar(100) NOT NULL,
  `action_taken` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `vehicle_reg_no`, `nickname`, `date_of_complaint`, `driver_incharge`, `id_number`, `complaint_description`, `action_taken`) VALUES
(1, 'KAB 230P', 'BABY', '2024-05-24', 'MOSES KAMAU', 123433, 'Overlapping', 'Given last warning ');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `names`, `id_number`, `email`, `phone`, `address`, `message`) VALUES
(1, 'gerald muchira', 123433, 'geraldmuchirakaburi@gmail.com', 705608609, '191', '                                         hh          ');

-- --------------------------------------------------------

--
-- Table structure for table `customertable`
--

CREATE TABLE `customertable` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customertable`
--

INSERT INTO `customertable` (`id`, `name`, `email`, `password`, `user_type`, `code`, `status`) VALUES
(6, 'GERALD MUCHIRA', 'muchirarachimu@gmail.com', '$2y$10$d1klTUHxAiVe5.3hoIcqw.zLR6tExvMKIpEBp9s4LRHEpNKUFN7eu', 'customer', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `discplinary`
--

CREATE TABLE `discplinary` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `passport_photo` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `action_taken` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discplinary`
--

INSERT INTO `discplinary` (`id`, `names`, `id_number`, `phone`, `passport_photo`, `description`, `action_taken`) VALUES
(2, 'JOHN NDERITU', 1234567, 800123456, 'John Nderitu.jpeg', 'Overspeeding', 'Given last warning');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `license_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `phone2` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `vehicle_assigned` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `passport_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `names`, `id_number`, `license_number`, `email`, `phone`, `phone2`, `address`, `vehicle_assigned`, `route`, `passport_photo`) VALUES
(2, 'JOHN NDERITU', 1234567, 'C2761345', 'johnnderitu@gmail.com', 800123456, 900123456, '14,THIKA', 'KDD 2031Q', 'NAIROBI -THIKA', 'John Nderitu.jpeg'),
(3, 'PETER MWANGI', 1234568, 'C2761346', 'PETERMWANGI@GMAIL.COM', 800123654, 900123654, '222, NAIROBI', 'KDC 419Z', 'NAIROBI -THIKA', 'Peter Mwangi.jpeg'),
(4, 'ALICE NJERI', 1234569, 'C2761347', 'ALICENJERI@GMAIL.COM', 111123456, 911123456, '12, MURANGA', 'KCD 1191L', 'NAIROBI -THIKA', 'Alice Njeri.jpg'),
(5, 'MONICA MWANGI', 1234098, 'C2761348', 'MONICAMWANGI@GMAIL.COM', 111345678, 911345678, '14,THIKA', 'KDE 292P', 'NAIROBI - MURANGA', 'Monica Mwangi.jpeg'),
(6, 'SAMWEL KINGS', 234, 'C2761344', 'SAMWELKINGS@GMAIL.COM', 2147483647, 2147483647, '176, SAGANA', 'KCD 2311K', 'MURANGA - SAGANA', 'Samwel Kings.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `drivertable`
--

CREATE TABLE `drivertable` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drivertable`
--

INSERT INTO `drivertable` (`id`, `name`, `email`, `password`, `user_type`, `code`, `status`) VALUES
(3, 'GERALD MUCHIRA', 'muchirarachimu@gmail.com', '$2y$10$mE10lcz/llzC5WhkZ/6d.ewhfTA9c61JPFSgSUJP0wRj1QTios7wm', 'user', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `driver_messages`
--

CREATE TABLE `driver_messages` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_messages`
--

INSERT INTO `driver_messages` (`id`, `names`, `email`, `phone`, `address`, `date_created`, `message`) VALUES
(4, 'ALICE NJERI', 'ALICENJERI@GMAIL.COM', 111123456, '12, MURANGA', '2024-06-03', '      Hi. I am stuck in a traffic jam and i still have mechanical problems. Kindly send me rescue.');

-- --------------------------------------------------------

--
-- Table structure for table `filedownload`
--

CREATE TABLE `filedownload` (
  `id` int(10) NOT NULL,
  `downloads` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(100) NOT NULL,
  `downloads` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `size`, `downloads`) VALUES
(1, 'LOGIN WITH FORGOT PASSWORD.docx', 320092, 2),
(2, 'KENYA_LEARNER_DRIVER_HANDBOOK.pdf', 2354501, 0),
(3, 'NTSA - Highway Code.pdf', 10478575, 0),
(4, 'NTSA - Highway Code.pdf', 10478575, 0),
(5, 'NTSA DRIVING LICENSE CATEGORIES.pdf', 206705, 0),
(6, 'Safe Driving for Work Handbook.pdf', 1812566, 0),
(7, 'The National Transport and Safety Authority Act.pdf', 6013789, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `vehicle_reg_no` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `fuel_cost_per_litre` int(100) NOT NULL,
  `litres_consumed` int(100) NOT NULL,
  `total_cost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`id`, `date`, `vehicle_reg_no`, `nickname`, `fuel_cost_per_litre`, `litres_consumed`, `total_cost`) VALUES
(2, '2024-06-01', 'KDD 2031Q', 'RAZOR', 198, 12, 2376),
(3, '2024-06-02', 'KDD 2031Q', 'RAZOR', 198, 12, 2376),
(4, '2024-06-05', 'KDD 2031Q', 'RAZOR', 198, 8, 1584);

-- --------------------------------------------------------

--
-- Table structure for table `hirings`
--

CREATE TABLE `hirings` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `vehicle_category` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hirings`
--

INSERT INTO `hirings` (`id`, `names`, `id_number`, `email`, `phone`, `address`, `vehicle_category`, `start_date`, `end_date`, `message`) VALUES
(2, 'AMBROSE MWENDIA', 2147483647, 'AMBROSEMWENDIA@GMAIL.COM', 2147483647, '1556, SAGANA', '33 seater', '2024-06-20', '2024-06-23', ' Kindly book me a clean vehicle.');

-- --------------------------------------------------------

--
-- Table structure for table `inspection`
--

CREATE TABLE `inspection` (
  `id` int(10) NOT NULL,
  `vehicle_reg_no` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `last_inspection` date NOT NULL,
  `next_inspection` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `remaining_days` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inspection`
--

INSERT INTO `inspection` (`id`, `vehicle_reg_no`, `nickname`, `last_inspection`, `next_inspection`, `status`, `remaining_days`) VALUES
(2, 'KDD 2031Q', 'RAZOR', '2024-06-04', '2024-10-23', 'Active', 141);

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `id` int(10) NOT NULL,
  `vehicle_reg_no` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `previous_insurance_date` date NOT NULL,
  `next_insurance_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `remaining_days` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`id`, `vehicle_reg_no`, `nickname`, `previous_insurance_date`, `next_insurance_date`, `status`, `remaining_days`) VALUES
(2, 'KDD 2031Q', 'RAZOR', '2024-05-28', '2024-07-31', 'Active', 57);

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` int(10) NOT NULL,
  `vehicle_reg_no` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `date_of_accident` date NOT NULL,
  `driver_incharge` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `severity` varchar(100) NOT NULL,
  `action_taken` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `vehicle_reg_no`, `nickname`, `date_of_accident`, `driver_incharge`, `id_number`, `severity`, `action_taken`) VALUES
(2, 'KDE 2921P', 'HEAVEN', '2024-06-03', 'MONICA MWANGI', 1234098, 'major', 'SUSPENDE');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(10) NOT NULL,
  `vehicle_reg_no` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `last_service` date NOT NULL,
  `next_service` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `remaining_days` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `vehicle_reg_no`, `nickname`, `last_service`, `next_service`, `status`, `remaining_days`) VALUES
(2, 'KDD 2031Q', 'RAZOR', '2024-05-26', '2024-06-26', 'Active', 22);

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `vehicle_reg_no` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `psv_earnings_per_day` int(100) NOT NULL,
  `hired_earnings_per_day` int(100) NOT NULL,
  `expenses` int(100) NOT NULL,
  `profit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`id`, `date`, `vehicle_reg_no`, `nickname`, `psv_earnings_per_day`, `hired_earnings_per_day`, `expenses`, `profit`) VALUES
(1, '2024-06-01', 'KDD 2031Q', 'RAZOR', 7000, 0, 3400, 3600),
(2, '2024-06-02', 'KDD 2031Q', 'RAZOR', 8700, 1000, 5100, 4600),
(3, '2024-06-03', 'KDD 2031Q', 'RAZOR', 5600, 0, 2300, 3300);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `driver_names` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `account_number` int(100) NOT NULL,
  `basic_pay` int(100) NOT NULL,
  `special_allowance` int(100) NOT NULL,
  `bonus` int(100) NOT NULL,
  `gross_salary` int(100) NOT NULL,
  `advance` int(100) NOT NULL,
  `NSSF` int(100) NOT NULL,
  `NHIF` int(100) NOT NULL,
  `tax` int(100) NOT NULL,
  `deductions` int(100) NOT NULL,
  `net_pay` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `date`, `driver_names`, `id_number`, `account_number`, `basic_pay`, `special_allowance`, `bonus`, `gross_salary`, `advance`, `NSSF`, `NHIF`, `tax`, `deductions`, `net_pay`) VALUES
(1, '2024-05-24', 'john maina', 123433, 2147483647, 20000, 5000, 1500, 26500, 3000, 2000, 1200, 6000, 12200, 14300);

-- --------------------------------------------------------

--
-- Table structure for table `traffic_irregularity`
--

CREATE TABLE `traffic_irregularity` (
  `id` int(10) NOT NULL,
  `names` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `passport_photo` varchar(100) NOT NULL,
  `traffic_irregularity` varchar(100) NOT NULL,
  `date_of_irregularity` date NOT NULL,
  `action_taken` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traffic_irregularity`
--

INSERT INTO `traffic_irregularity` (`id`, `names`, `id_number`, `passport_photo`, `traffic_irregularity`, `date_of_irregularity`, `action_taken`) VALUES
(1, 'gerald muchira', 123433, '0', 'overspeeding', '2024-05-16', 'Given last warning '),
(2, 'gerald muchira', 123433, 'Altman Blues.jpeg', 'overspeeding', '2024-05-23', 'Given last warning ');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `code` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `user_type`, `code`, `status`) VALUES
(5, 'GERALD MUCHIRA', 'muchirarachimu@gmail.com', '$2y$10$lcVlk6jIlDeuCYbghHmOb./wg4ZtlMsYDO3jKbirMLjgsUfi7Vd2.', 'admin', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) NOT NULL,
  `registration_number` varchar(11) NOT NULL,
  `engine_number` varchar(100) NOT NULL,
  `make` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `year_of_manufacture` int(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `vehicle_photo` varchar(100) NOT NULL,
  `names` varchar(100) NOT NULL,
  `id_number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `registration_number`, `engine_number`, `make`, `model`, `colour`, `year_of_manufacture`, `nickname`, `vehicle_photo`, `names`, `id_number`) VALUES
(3, 'KDD 2031Q', 'QW567SD', 'ISUZU', 'NPR', 'MAROON ', 2017, 'RAZOR', 'razor.jpg', 'JOHN NDERITU', 1234567),
(4, 'KDC 4191Z', 'WSA564F', 'ISUZU', 'NPR', 'GREY', 2017, 'ROG', 'ROG.jpeg', 'PETER MWANGI', 1234568),
(5, 'KCD 1191L', 'WER987B', 'NISSAN', 'HOMMY', 'LIGHT GREEN', 2016, 'SPARKLES', 'sparkles.jpeg', 'ALICE NJERI', 1234569),
(6, 'KCD 2311K', 'MPO71W', 'ISUZU', 'NPR', 'GREEN', 2017, 'ACCORD', 'Accord.jpeg', 'SAMWEL KINGS', 234),
(7, 'KDE 2921P', '12WESD6', 'ISUZU', 'NPR', 'BLUE', 2018, 'HEAVEN', 'heaven.jpeg', 'MONICA MWANGI', 1234098);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appraisal`
--
ALTER TABLE `appraisal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customertable`
--
ALTER TABLE `customertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discplinary`
--
ALTER TABLE `discplinary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivertable`
--
ALTER TABLE `drivertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_messages`
--
ALTER TABLE `driver_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filedownload`
--
ALTER TABLE `filedownload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuel`
--
ALTER TABLE `fuel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hirings`
--
ALTER TABLE `hirings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection`
--
ALTER TABLE `inspection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traffic_irregularity`
--
ALTER TABLE `traffic_irregularity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appraisal`
--
ALTER TABLE `appraisal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customertable`
--
ALTER TABLE `customertable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `discplinary`
--
ALTER TABLE `discplinary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `drivertable`
--
ALTER TABLE `drivertable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver_messages`
--
ALTER TABLE `driver_messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `filedownload`
--
ALTER TABLE `filedownload`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fuel`
--
ALTER TABLE `fuel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hirings`
--
ALTER TABLE `hirings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inspection`
--
ALTER TABLE `inspection`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `traffic_irregularity`
--
ALTER TABLE `traffic_irregularity`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
