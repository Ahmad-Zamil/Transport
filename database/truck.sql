-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 08:07 AM
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
-- Database: `truck`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `image` varchar(244) NOT NULL,
  `title` varchar(25) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `image`, `title`, `text`) VALUES
(2, 'about.jpg', 'Welcome to Carbook', '<p>A small river named Duden flows by their place and supplies it with \r\nthe necessary regelialia. It is a paradisematic country, in which \r\nroasted parts of sentences fly into your mouth.</p>\r\n	            <p>On her way she met a copy. The copy warned the Little \r\nBlind Text, that where it came from it would have been rewritten a \r\nthousand times and everything that was left from its origin would be the\r\n word \"and\" and the Little Blind Text should turn around and return to \r\nits own, safe country. A small river named Duden flows by their place \r\nand supplies it with the necessary regelialia. It is a paradisematic \r\ncountry, in which roasted parts of sentences fly into your mouth.</p><p></p>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@admin.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `bannerimage`
--

CREATE TABLE `bannerimage` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(90) DEFAULT NULL,
  `assiognFor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bannerimage`
--

INSERT INTO `bannerimage` (`id`, `image`, `title`, `description`, `assiognFor`) VALUES
(4, 'bg_1.jpg', 'Fast & Easy Way To Rent A Car', '<p>A small river named Duden flows by their place and supplies it with the \r\nnecessary reg', 'Home'),
(5, 'bg_3.jpg', 'About Us', '<p>asdfadsf<br></p>', 'About'),
(6, 'bg_3.jpg', 'Our Services', '<p>sdf<br></p>', 'Service'),
(8, 'bg_3.jpg', 'Contact Us', '<p>dsaf<br></p>', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `title`, `number`) VALUES
(1, 'Year Experienced', 8),
(2, 'Total Cars', 100),
(3, 'Happy Customers', 12),
(4, 'Total Branches', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(21) NOT NULL,
  `shortDesctiption` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `shortDesctiption`) VALUES
(1, 'Wedding Ceremony', 'A small river named Duden flows by their place and supplies it with the necessary regelialia.'),
(2, 'City Transfer', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>'),
(3, 'Airport Transfer', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>'),
(4, 'Whole City Tour', '<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sitesetting`
--

CREATE TABLE `sitesetting` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(266) NOT NULL,
  `name` varchar(122) NOT NULL,
  `whatsapp` varchar(266) NOT NULL,
  `imo` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sitesetting`
--

INSERT INTO `sitesetting` (`id`, `logo`, `email`, `address`, `phone`, `name`, `whatsapp`, `imo`) VALUES
(1, '', 'info@yoursite.com', '198  West 21th Street, Suite 721 New York ', '+ 1235 2355 98', 'M Transport Agency', '+ 1235 2355 96', '+ 1235 2355 94');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `image` varchar(244) NOT NULL,
  `name` varchar(35) NOT NULL,
  `description` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `image`, `name`, `description`) VALUES
(2, 'person_1.jpg', 'Roger Scott', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `vehicleName` varchar(255) NOT NULL,
  `vehiclePrice` int(11) NOT NULL,
  `vehicleDescription` longtext NOT NULL,
  `alignfor` int(11) NOT NULL,
  `image` varchar(344) NOT NULL,
  `featured` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vehicleName`, `vehiclePrice`, `vehicleDescription`, `alignfor`, `image`, `featured`) VALUES
(3, 'Mercedes Grand Sedan', 500, '<p>aDFDFADF<br></p>', 1, 'car-1.jpg', '0'),
(5, 'Mercedes Grand Sedan', 500, '<p>ACADCF<br></p>', 1, 'car-3.jpg', '0'),
(6, 'Mercedes Grand Sedan', 400, 'svsfcsfvfsdv<br>', 1, 'car-1.jpg', 'on'),
(7, 'adfadf', 234, '<p>adfadf<br></p>', 2, 'car-3.jpg', '0'),
(8, 'adsfads', 233423, '<p>afadfasdf<br></p>', 1, 'car-1.jpg', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bannerimage`
--
ALTER TABLE `bannerimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesetting`
--
ALTER TABLE `sitesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bannerimage`
--
ALTER TABLE `bannerimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sitesetting`
--
ALTER TABLE `sitesetting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
