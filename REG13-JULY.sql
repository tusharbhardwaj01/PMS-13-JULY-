-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 11:28 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `activesessions`
--

CREATE TABLE IF NOT EXISTS `activesessions` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `sessionid` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `activesessions`
--

INSERT INTO `activesessions` (`id`, `userid`, `sessionid`) VALUES
(6, 'sumit@pal.com', 't3hh15tp5p0i0hpas36t9ln5i7'),
(20, 'a@a.com', 't8vf9cmj027bc6hq8o528qq3n7'),
(22, 'asdf@asdf.com', '565oiccf041dm7ngd2ipju2696'),
(27, 'amit@gmail.com', '69fsdtjnhm65osrm7gaqjfvqv2'),
(33, 'rajeev@yahoo.com', 'ij37cc4ghuv2nevt3q2kbbga80'),
(34, 'admin@admin.com', 'mt7e148rkocajhbgu75l961hc5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cust_id` int(20) NOT NULL AUTO_INCREMENT,
  `cust_rank` varchar(50) NOT NULL,
  `cust_fname` varchar(50) NOT NULL,
  `cust_lname` varchar(50) NOT NULL,
  `cust_type` varchar(50) NOT NULL,
  `cust_other` varchar(50) NOT NULL,
  `cust_add1` varchar(50) NOT NULL,
  `cust_add2` varchar(50) NOT NULL,
  `cust_add3` varchar(50) NOT NULL,
  `cust_city` varchar(50) NOT NULL,
  `cust_state` varchar(50) NOT NULL,
  `cust_pin` int(50) NOT NULL,
  `cust_contact` int(50) NOT NULL,
  `cust_email` varchar(50) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `cust_rank`, `cust_fname`, `cust_lname`, `cust_type`, `cust_other`, `cust_add1`, `cust_add2`, `cust_add3`, `cust_city`, `cust_state`, `cust_pin`, `cust_contact`, `cust_email`) VALUES
(1, 'scientist e', 'abc', 'sd', 'Others', 'anything', 'ahaf', '', '', 'lucknow', 'up', 123456, 1234567, 'abc@abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dispatchdetails`
--

CREATE TABLE IF NOT EXISTS `tbl_dispatchdetails` (
  `regid2` int(11) NOT NULL AUTO_INCREMENT,
  `Item_name` varchar(30) NOT NULL,
  `Item_quantity` int(30) NOT NULL,
  `Dispatch_to` varchar(30) NOT NULL,
  `Dispatch_date` date NOT NULL,
  `Dispatch_address` varchar(60) NOT NULL,
  `Dispatch_medium` varchar(30) NOT NULL,
  `Serial_no` varchar(30) NOT NULL,
  PRIMARY KEY (`regid2`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_dispatchdetails`
--

INSERT INTO `tbl_dispatchdetails` (`regid2`, `Item_name`, `Item_quantity`, `Dispatch_to`, `Dispatch_date`, `Dispatch_address`, `Dispatch_medium`, `Serial_no`) VALUES
(6, 'nbrsn', 0, 'trt', '2017-06-03', 'trwhjyt', '', 'brgtn'),
(7, 'nbrsn', 0, 'trt', '2017-06-03', 'trwhjyt', '', 'brgtn'),
(8, 'q', 2, 'r', '2017-06-09', 'edwfgrew', '', 'fdsbg545'),
(9, 'q', 2, 'r', '2017-06-09', 'edwfgrew', '', 'fdsbg545'),
(10, '', 0, '', '0000-00-00', '', '', ''),
(11, 'rrr', 6, 'ttt', '2017-06-02', 'gtrehyt', '', '4334'),
(12, 'rrr', 8, 'lll', '2017-06-01', 'ktuuijt', 'check', '543y6'),
(13, 'aaa', 5, 'ppp', '2017-06-01', 'grtwege', 'check', '654'),
(14, 'ttt', 7, 'ooo', '2017-06-02', 'eruyt', 'regdparcel', '546');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_det`
--

CREATE TABLE IF NOT EXISTS `tbl_emp_det` (
  `emp_id` int(50) NOT NULL AUTO_INCREMENT,
  `emp_fname` varchar(25) NOT NULL,
  `emp_lname` varchar(25) NOT NULL,
  `emp_desg` varchar(50) NOT NULL,
  `emp_gender` varchar(6) NOT NULL,
  `emp_dob` date NOT NULL,
  `emp_mobile` bigint(10) NOT NULL,
  `emp_doj` date NOT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `doj` (`emp_doj`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_emp_det`
--

INSERT INTO `tbl_emp_det` (`emp_id`, `emp_fname`, `emp_lname`, `emp_desg`, `emp_gender`, `emp_dob`, `emp_mobile`, `emp_doj`) VALUES
(2, 'Admin', 'Admin', 'Admin', 'M', '2017-06-30', 9876543210, '2017-08-01'),
(8, 'shubham', 'harsh', 'Trainee', 'M', '2017-07-30', 1716763567, '2017-07-31'),
(10, 'amit', 'sharma', 'student', 'M', '2017-07-01', 1234567890, '2017-07-09'),
(11, 'Tushar', 'Bharadwaj', 'Trainee', 'M', '2017-07-20', 98765142365, '2017-07-28'),
(12, 'Shubham', 'Harsh Singh', 'Trainee', 'M', '2017-07-21', 8005267125, '2017-07-06'),
(13, 'Rajeev', 'Kumar', 'Student', 'M', '2017-07-21', 9867543621, '2017-07-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exhibition_detail`
--

CREATE TABLE IF NOT EXISTS `tbl_exhibition_detail` (
  `exbt_id` int(50) NOT NULL AUTO_INCREMENT,
  `exbt_name` varchar(50) NOT NULL,
  `exbt_venue` varchar(50) NOT NULL,
  `exbt_strt_date` date NOT NULL,
  `exbt_end_date` date NOT NULL,
  `exbt_organiser` varchar(50) NOT NULL,
  `exbt_year` int(50) NOT NULL,
  PRIMARY KEY (`exbt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publication`
--

CREATE TABLE IF NOT EXISTS `tbl_publication` (
  `pub_id` int(50) NOT NULL AUTO_INCREMENT,
  `pub_title` varchar(50) NOT NULL,
  `pub_author` varchar(50) NOT NULL,
  `pub_isbn` varchar(40) NOT NULL,
  `pub_year` int(10) NOT NULL,
  `pub_price_inr` int(10) NOT NULL,
  `pub_price_usd` int(10) NOT NULL,
  `pub_nop` int(10) NOT NULL,
  `pub_type` varchar(50) NOT NULL,
  `pub_qty` int(10) NOT NULL,
  PRIMARY KEY (`pub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_publication`
--

INSERT INTO `tbl_publication` (`pub_id`, `pub_title`, `pub_author`, `pub_isbn`, `pub_year`, `pub_price_inr`, `pub_price_usd`, `pub_nop`, `pub_type`, `pub_qty`) VALUES
(2, 'abc', 'xyz', '1234566', 2013, 23, 4, 123, 'Complimentary', 12),
(3, 'qwert', 'wer', '21344444', 2012, 234, 32, 2345, 'Priced', 123),
(4, 'bbbbbb', 'xxxxxxx', '22222222222', 2011, 1234, 23, 145, 'Complimentary', 120),
(5, 'aaaa', 'ccccc', '113232233', 2011, 456, 23, 345, 'Priced', 34),
(6, 'eeeee', 'ffffff', '123456', 2010, 345, 34, 678, 'Priced', 34);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_details`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_details` (
  `purchase_id` int(50) NOT NULL AUTO_INCREMENT,
  `fk_cust_id` int(50) NOT NULL,
  `fk_pub_id` int(50) NOT NULL,
  `mono_qnty` int(50) NOT NULL,
  `purchase_date` date NOT NULL,
  `fk_user_id` int(50) NOT NULL,
  `fk_exbt_id` int(50) NOT NULL,
  PRIMARY KEY (`purchase_id`),
  KEY `fk_cust_id_idx` (`fk_cust_id`),
  KEY `fk_pub_id_idx` (`fk_pub_id`),
  KEY `fk_user_id_idx` (`fk_user_id`),
  KEY `fk_exbt_id_idx` (`fk_exbt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `fk_emp_id` int(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `fk_emp_id_idx` (`fk_emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `fk_emp_id`, `user_name`, `user_pass`) VALUES
(2, 2, 'admin@admin.com', 'admin123'),
(8, 8, 'ab@ab.com', '12'),
(10, 10, 'amit@gmail.com', '12345'),
(11, 11, 'tushar@gmail.com', '12345'),
(12, 12, 'theshubham36@gmail.com', '123'),
(13, 13, 'rajeev@yahoo.com', 'abc');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_purchase_details`
--
ALTER TABLE `tbl_purchase_details`
  ADD CONSTRAINT `fk_cust_id` FOREIGN KEY (`fk_cust_id`) REFERENCES `tbl_customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_exbt_id` FOREIGN KEY (`fk_exbt_id`) REFERENCES `tbl_exhibition_detail` (`exbt_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pub_id` FOREIGN KEY (`fk_pub_id`) REFERENCES `tbl_publication` (`pub_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`fk_user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_emp_id` FOREIGN KEY (`fk_emp_id`) REFERENCES `tbl_emp_det` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
