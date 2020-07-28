-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 11:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `courseprogramming_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses_tb`
--

CREATE TABLE IF NOT EXISTS `courses_tb` (
`cs_id` int(11) NOT NULL,
  `cs_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cs_price` int(11) NOT NULL,
  `cs_imgname` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses_tb`
--

INSERT INTO `courses_tb` (`cs_id`, `cs_name`, `cs_price`, `cs_imgname`) VALUES
(1, 'Basic Programming', 1500, 'basic_new_de-01.png'),
(2, 'Blender', 1500, 'blender_new_de-01.png'),
(3, 'C++ Programming', 1500, 'cpp_new_de-01.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses_tb`
--
ALTER TABLE `courses_tb`
 ADD PRIMARY KEY (`cs_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses_tb`
--
ALTER TABLE `courses_tb`
MODIFY `cs_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
