-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 09:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`fname`, `lname`, `address`, `birthday`, `phone`, `email`, `school`, `gender`, `date`) VALUES
('Rodence', 'Atacador', 'Mabini Homesite, Cabanatuan City', '2002-02-22', '2147483647', 'rodencea@gmail.com', 'Araullo University', 'Male', '2022-09-26 18:58:32'),
('Rodence', 'Atacador', 'Mabini Homesite, Cabanatuan City', '2002-02-22', '09675529106', 'rodencea@gmail.com', 'Araullo University', 'Male', '2022-09-26 18:58:32'),
('Rodence', 'Atacador', 'Mabini Homesite, Cabanatuan City', '2002-02-22', '09675529106', 'rodencea@gmail.com', 'Araullo University', 'Male', '2022-09-26 18:58:32'),
('ahah', 'asadsafafd', '3242', '8888-08-08', '342432423', 'rodencea@gmail.com', 'ahahaahah', 'Female', '2022-09-26 18:58:32'),
('ahah', 'asadsafafd', '3242', '8888-08-08', '342432423', 'rodencea@gmail.com', 'ahahaahah', 'Female', '2022-09-26 19:08:33'),
('lalalaal', 'asadsafafd', '3242', '8888-08-08', '342432423', 'rodencea@gmail.com', 'ahahaahah', 'Female', '2022-09-26 19:18:39'),
('Bads', 'Collado', 'none', '0001-01-01', '0909090', 'bads@mail.com', 'AU', 'Male', '2022-09-26 19:20:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
