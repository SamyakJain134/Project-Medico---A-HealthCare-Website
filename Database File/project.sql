-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 01:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bprecords`
--

CREATE TABLE `bprecords` (
  `uid` varchar(11) COLLATE utf8mb4_german2_ci NOT NULL,
  `dateofrecord` date NOT NULL,
  `syst` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `pulse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `bprecords`
--

INSERT INTO `bprecords` (`uid`, `dateofrecord`, `syst`, `dia`, `pulse`) VALUES
('0', '2020-07-18', 100, 69, 20),
('0', '0000-00-00', 0, 0, 0),
('0', '0000-00-00', 0, 0, 0),
('0', '0000-00-00', 0, 0, 0),
('0', '2020-07-19', 60, 26, 26),
('9988899', '2020-07-18', 60, 60, 60),
('112233', '2020-07-09', 36, 96, 85),
('336699', '2020-07-12', 36, 755, 96),
('336655', '2020-06-09', 30, 30, 30),
('0', '0000-00-00', 0, 0, 0),
('0', '0000-00-00', 0, 0, 0),
('0', '2020-07-25', 100, 80, 52),
('0', '2020-07-24', 120, 600, 50),
('jasminekala', '2020-07-25', 20, 20, 20),
('akanshagoya', '2020-06-27', 110, 200, 20),
('', '0000-00-00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `uid` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `dname` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `spec` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `qual` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `studied` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `exp` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `ppic` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `cpic` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`uid`, `dname`, `contact`, `spec`, `qual`, `studied`, `exp`, `hospital`, `address`, `city`, `state`, `email`, `website`, `ppic`, `cpic`) VALUES
('samyakj741@gmail.com', 'Samyak Jain', '8558071853', 'Dentist', 'MBBS', 'BABA FArid', '5 Yrs ', 'Jai Mata Di', 'BathindA , pUNJAB', 'bATHINDA', 'Punjab', 'samyakj741@gmail.com', 'dscsdevd', 'IMG_0106.JPG', 'IMG_0111.JPG'),
('67@gmail.com', 'Sam', '8558071853', 'Orthopaedic surgeon', 'MBBS', 'BABA FAridd', '4 years', 'Jai Mata Dii', 'BathindA , pUNJAB', 'Ludhiana', 'Punjab', 'samyakj7411@gmail.com', 'dscsdevds', 'IMG_0121.JPG', 'IMG_0120.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `uid` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `problems` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`uid`, `name`, `gender`, `age`, `city`, `state`, `zip`, `email`, `contact`, `problems`) VALUES
('', '', '', 0, '', '', '', '', '', ''),
('akanshagoyal@gmail.com', 'Akansha Goyal', 'Female', 21, 'Bokaro -Steel City', 'Jharkhand', '827013', 'akanshagoyal@gmail.com', '8558071853', 'Bhagwan ki dia se sab badhiya h'),
('purvapurohit04@gmail.com', 'Purva Purohit', 'Female', 21, 'Udaipur', 'Rajasthan', '302001', 'purvapurohit04@gmail.com', '6376510348', 'Back ache'),
('samyakj741@gmail.com', 'Samyak Jainn', 'Male', 20, 'bathinda', 'Punjab', '151001', 'samyakj741@gmail.com', '', 'Nothing'),
('samyakj7411@gmail.com', 'Samyak Jain', 'Male', 21, 'bathinda', 'Jammu and Kashmir', '151001', 'samyakj741@gmail.com', '9988899723', 'Nothing');

-- --------------------------------------------------------

--
-- Table structure for table `slips`
--

CREATE TABLE `slips` (
  `rid` int(11) NOT NULL,
  `patientid` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `doctorname` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `dovisit` datetime NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `problem` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `nextdov` date NOT NULL,
  `discussion` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `slippic` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `cpic` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `slips`
--

INSERT INTO `slips` (`rid`, `patientid`, `doctorname`, `dovisit`, `city`, `hospital`, `problem`, `nextdov`, `discussion`, `slippic`, `cpic`) VALUES
(9, 'Samyak', 'Suneel', '0000-00-00 00:00:00', 'nyndytnb', 'sdscsaczx de', 'sdas', '0000-00-00', 'wsw', 'IMG-20160323-WA0007.jpg', 'IMG-20160323-WA0007.jpg'),
(10, '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', ''),
(11, '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', ''),
(12, 'Samyak', 'asasas', '0000-00-00 00:00:00', 'bathinda', 'sdscsaczx de', 'sdas', '0000-00-00', 'wsw', 'IMG-20160429-WA0038.jpg', 'IMG-20160429-WA0036.jpg'),
(13, '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', ''),
(14, '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', ''),
(15, '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', ''),
(16, '', 'Varsha', '2020-07-22 00:00:00', 'udaipur', 'Jai Mata Dii', 'back ache', '2020-07-24', 'jio aur jine do', 'IMG_0088.JPG', 'IMG_0106.JPG'),
(17, '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', ''),
(18, '', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sugarrecord`
--

CREATE TABLE `sugarrecord` (
  `uidd` int(11) NOT NULL,
  `dateofrecordd` date NOT NULL,
  `timeofrecord` time NOT NULL,
  `sugartime` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `age` int(11) NOT NULL,
  `sugarresult` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `medintake` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `urineresult` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `sugarrecord`
--

INSERT INTO `sugarrecord` (`uidd`, `dateofrecordd`, `timeofrecord`, `sugartime`, `age`, `sugarresult`, `medintake`, `urineresult`) VALUES
(25, '2020-07-20', '16:34:00', 'FASTING', 21, '26', '23', '42'),
(0, '0000-00-00', '00:00:00', '', 0, '', '', ''),
(0, '0000-00-00', '00:00:00', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_german2_ci NOT NULL,
  `dos` date NOT NULL,
  `cgy` varchar(255) COLLATE utf8mb4_german2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_german2_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `pwd`, `mobile`, `dos`, `cgy`) VALUES
('', '', '', '2020-07-05', ''),
('akanshagoyal@gmail.com', 'Akansha@123', '8558071853', '2020-07-27', 'patient'),
('axaxajax@gmail.com', 'Samyak@123', '9846324189', '2020-07-05', 'doctor'),
('deshivgarg@gmail.com', 'Deshiv@123', '9988899723', '2020-07-21', 'patient'),
('jasminekalara@gmail.com', 'Jasminekalara', '6377848087', '2020-07-25', 'patient'),
('purvapurohit04@gmail.com', 'Purva@123', '9988899723', '2020-07-22', 'doctor'),
('samyakj7141@gmail.com', 'Samyak@123', '9846324189', '2020-07-05', 'doctor'),
('samyakj741@gmail.com', 'Samyak.123', '9846324189', '2020-07-05', 'doctor'),
('samyakj74111@gmail.com', 'Samyak!@33', '9846324189', '2020-07-07', 'patient'),
('sonia@gamil.com', 'Samyak@124d', '9846324189', '2020-07-21', 'patient'),
('suneeljain123@gmail.com', 'Samyak.@123', '9988899723', '2020-07-23', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `slips`
--
ALTER TABLE `slips`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slips`
--
ALTER TABLE `slips`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
