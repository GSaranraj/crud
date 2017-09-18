-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 04:30 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(6) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `connfirmpassword` varchar(15) NOT NULL,
  `pnumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `connfirmpassword`, `pnumber`) VALUES
(63, 'cherry', 'Saranraj', 'G', 'saranrajganesh99@gmail.com', '987654321', '987654321', '1234567333'),
(64, 'Balaji Rajendran', 'Balaji', 'Rajendran', 'karurbalamathi@gmail.com', '12345678', '12345678', '9566711894'),
(70, 'cherry', 'cherry', 'G', 'saranraj.15bit2049@mkce.ac.in', '98765432', '98765432', '9025890602'),
(73, 'sridhar', 'sridhar', 's', 'sridhars.it@mkce.ac.in', '12345678', '12345678', '9791248665'),
(74, 'nandhakumar', 'nandha', 'kumar', 'nandhakumar.9.3.r@gmail.com', '12345678', '12345678', '8526286373'),
(75, 'cherry', 'saran', 'raj', 'raj@gmail.com', '9629559989', '9629559989', '9791249160'),
(76, 'Balaji Rajendran', 'Balaji', 'Rajendran', 'karurbalamathi@gmail.com', '12345678', '12345678', '9566711894'),
(77, 'Sudharsan', 'Sudharsan', 'R', 'sudharsansudha45@gmail.com', 'warcraft', 'warcraft', '9659389013'),
(78, 'Sudharsan', 'Sudharsan', 'R', 'sudharsansudha45@gmail.com', 'warcraft', 'warcraft', '9659389013');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
