-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 05:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mangalmurti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enquiry`
--

CREATE TABLE `tbl_enquiry` (
  `en_id` int(11) NOT NULL,
  `en_name` varchar(255) NOT NULL,
  `en_email` varchar(255) NOT NULL,
  `en_add` varchar(255) NOT NULL,
  `en_contact` varchar(12) NOT NULL,
  `en_question` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enquiry`
--

INSERT INTO `tbl_enquiry` (`en_id`, `en_name`, `en_email`, `en_add`, `en_contact`, `en_question`) VALUES
(1, 'Anirudd', 'ray12@.cm', 'klafjafnai hbafinjbin jn', '7506320852', 'what uis rate');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_email` varchar(255) NOT NULL,
  `f_contact` varchar(255) NOT NULL,
  `f_comment` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `f_name`, `f_email`, `f_contact`, `f_comment`) VALUES
(1, 'ani', 'rajrut92@gmail.com', '7506328021', 'Nice ..Happy with services');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `photoid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`photoid`, `photo`) VALUES
(2, 'allomatar.jpg'),
(3, 'chole.jpg'),
(4, 'image1.jpg'),
(5, 'image2.jpg'),
(6, 'image3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemid` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `itemcategory` mediumint(9) NOT NULL,
  `itemprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`itemid`, `itemname`, `itemcategory`, `itemprice`) VALUES
(1, 'Paneer Tikka Masala', 1, '150'),
(2, 'Veg Biryani', 1, '150'),
(3, 'Lunch', 1, '200'),
(4, 'Veg Kurma', 1, '200');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `o_contact` varchar(100) NOT NULL,
  `o_type` varchar(100) NOT NULL,
  `o_foodspecification` varchar(255) NOT NULL,
  `o_quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`o_id`, `o_name`, `o_contact`, `o_type`, `o_foodspecification`, `o_quantity`) VALUES
(1, 'Shrutika', '9969558294', 'Veg', '3 types of veg sabji, roti, rice and daal', '100 person'),
(2, 'seema', '9969558294', 'Veg', 'rice and daal', '50 person');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `reg _id` int(11) NOT NULL,
  `reg_name` varchar(255) NOT NULL,
  `reg_add` varchar(255) NOT NULL,
  `reg_contact` varchar(100) NOT NULL,
  `reg_email` varchar(100) NOT NULL,
  `reg_squestion` varchar(255) NOT NULL,
  `reg_sans` varchar(100) NOT NULL,
  `reg_login` varchar(100) NOT NULL,
  `reg_pwd` varchar(100) NOT NULL,
  `reg_cpwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`reg _id`, `reg_name`, `reg_add`, `reg_contact`, `reg_email`, `reg_squestion`, `reg_sans`, `reg_login`, `reg_pwd`, `reg_cpwd`) VALUES
(1, 'Shrutika', 'Worli', '9969558294', 'shruti211991@gmail.com', 'What your Favorite colour?', 'sky blue', 'shruti', 'shruti123', 'shruti123'),
(2, 'seema', 'worli', '4546554654', 'seema@gmail.com', 'What your Favorite colour?', 'black', 'seema', 'seema123', 'seema123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlogin`
--

CREATE TABLE `tbl_userlogin` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  ADD PRIMARY KEY (`en_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`photoid`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`reg _id`);

--
-- Indexes for table `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_enquiry`
--
ALTER TABLE `tbl_enquiry`
  MODIFY `en_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `photoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `reg _id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_userlogin`
--
ALTER TABLE `tbl_userlogin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
