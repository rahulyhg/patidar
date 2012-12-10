-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2012 at 03:54 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lavajam`
--

-- --------------------------------------------------------

--
-- Table structure for table `avsan`
--

CREATE TABLE IF NOT EXISTS `avsan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `avsan_number` varchar(5) NOT NULL,
  `member_no` int(5) NOT NULL,
  `ausan_name` varchar(50) NOT NULL,
  `ausan_sender_name` varchar(50) NOT NULL,
  `ausan_sender_address` varchar(100) NOT NULL,
  `ausan_date` date NOT NULL,
  `ausan_no_of_picture` int(5) DEFAULT NULL,
  `avsan_size` int(5) NOT NULL,
  `ausan_total_amount` int(10) NOT NULL,
  `discount` int(5) NOT NULL,
  `avsan_net_amount` float NOT NULL,
  `creation_date` date NOT NULL,
  `creation_by` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_no` (`member_no`),
  KEY `avsan_size` (`avsan_size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `avsan_avak_table`
--

CREATE TABLE IF NOT EXISTS `avsan_avak_table` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `receipt_no` int(5) NOT NULL,
  `receipt_date` date NOT NULL,
  `bill_no_of_avasan` varchar(10) NOT NULL,
  `bill_date_of_avasan` date DEFAULT NULL,
  `party_no` int(5) DEFAULT NULL,
  `member_no` int(5) DEFAULT NULL,
  `bank_master_id` int(5) DEFAULT NULL,
  `cheque_dd_no` int(8) DEFAULT NULL,
  `payment_type` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `party_no` (`party_no`),
  KEY `bank_master_id` (`bank_master_id`),
  KEY `member_no` (`member_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `avsan_wise_avak_table`
--

CREATE TABLE IF NOT EXISTS `avsan_wise_avak_table` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `receipt_no` int(5) NOT NULL,
  `receipt_date` date NOT NULL,
  `bill_no_of_avasan` varchar(10) NOT NULL,
  `bill_date_of_avasan` date DEFAULT NULL,
  `party_no` int(5) DEFAULT NULL,
  `member_no` int(5) DEFAULT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `party_no` (`party_no`),
  KEY `member_no` (`member_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `bank_master`
--

CREATE TABLE IF NOT EXISTS `bank_master` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(30) NOT NULL,
  `bank_short_name` varchar(10) NOT NULL,
  `created_date` date NOT NULL,
  `creation_by` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bank_master`
--

INSERT INTO `bank_master` (`id`, `bank_name`, `bank_short_name`, `created_date`, `creation_by`) VALUES
(1, 'બેન્ક ઓફ ભારત', 'બીઓઆઇ', '2012-09-15', 5),
(2, 'બેન્ક ઓફ પંજાબ', 'બીઓપી', '2012-09-15', 5),
(3, 'આઈસીઆઈસીઆઈ', 'આઈસીઆઈસીઆઈ', '2012-09-15', 5);

-- --------------------------------------------------------

--
-- Table structure for table `bank_slip`
--

CREATE TABLE IF NOT EXISTS `bank_slip` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `slip_no` int(5) NOT NULL,
  `member_id` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE IF NOT EXISTS `expense` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `expense_voucher_no` int(5) NOT NULL,
  `expense_date` date NOT NULL,
  `expense_master_id` int(5) NOT NULL,
  `expense_amount` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `expense_master_id` (`expense_master_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `expense_group_master`
--

CREATE TABLE IF NOT EXISTS `expense_group_master` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `expense_group_name` varchar(30) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `expense_group_master`
--

INSERT INTO `expense_group_master` (`id`, `expense_group_name`, `creation_date`, `created_by`) VALUES
(1, 'જાહેરાત ખર્ચ', '2012-09-15', 5),
(2, 'અખબાર ખર્ચ', '2012-09-15', 5),
(3, 'મેગેઝિન ખર્ચ', '2012-09-15', 5);

-- --------------------------------------------------------

--
-- Table structure for table `expense_master`
--

CREATE TABLE IF NOT EXISTS `expense_master` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `expense_name` varchar(30) NOT NULL,
  `expense_group_id` int(5) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `expense_group_id` (`expense_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `expense_master`
--

INSERT INTO `expense_master` (`id`, `expense_name`, `expense_group_id`, `creation_date`, `created_by`) VALUES
(2, 'જાહેરાત', 1, '2012-09-15', 5),
(3, 'અખબાર', 2, '2012-09-15', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jaharat`
--

CREATE TABLE IF NOT EXISTS `jaharat` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `party_no` int(5) NOT NULL,
  `member_no` int(5) NOT NULL,
  `jaharat_date` date NOT NULL,
  `jaharat_biil_no` int(5) NOT NULL,
  `jaharat_from_date` date NOT NULL,
  `jaharat_to_date` date NOT NULL,
  `jaharat_ank_no_from` int(5) NOT NULL,
  `jaharat_ank_no_to` int(5) NOT NULL,
  `jaharat_type` int(5) NOT NULL,
  `jaharat_page_no` int(5) NOT NULL,
  `jaharat_by_column` int(5) NOT NULL,
  `jaharat_by_cm` int(5) NOT NULL,
  `jaharat_rate` int(5) NOT NULL,
  `jaharat_total_amount` int(10) NOT NULL,
  `jaharat_discount` int(5) NOT NULL,
  `jaharat_kasar` int(10) NOT NULL,
  `jaharat_net_amount` float NOT NULL,
  `jaharat_receive_date` date DEFAULT NULL,
  `jaharat_bill_date` date NOT NULL,
  `jaharat_type_color` varchar(10) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_no` (`member_no`),
  KEY `party_no` (`party_no`),
  KEY `jaharat_type` (`jaharat_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jaharat_type_master`
--

CREATE TABLE IF NOT EXISTS `jaharat_type_master` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `jaharat_type_name` varchar(50) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `jaharat_type_master`
--

INSERT INTO `jaharat_type_master` (`id`, `jaharat_type_name`, `creation_date`, `created_by`) VALUES
(1, 'અખબાર જાહેરાત', '2012-09-14', 5),
(2, 'મેગેઝિન જાહેરાત', '2012-09-14', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jaherat_avak_table`
--

CREATE TABLE IF NOT EXISTS `jaherat_avak_table` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `receipt_no` int(5) NOT NULL,
  `receipt_date` date NOT NULL,
  `bill_no_of_jaharat` int(5) NOT NULL,
  `bill_date_of_jaharat` date NOT NULL,
  `party_id` int(5) NOT NULL,
  `bank_master_id` int(5) DEFAULT NULL,
  `cheque_dd_no` int(5) DEFAULT NULL,
  `payment_type` varchar(30) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `party_id` (`party_id`),
  KEY `bank_master_id` (`bank_master_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `jaherat_wise_avak_table`
--

CREATE TABLE IF NOT EXISTS `jaherat_wise_avak_table` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `receipt_no` int(5) NOT NULL,
  `receipt_date` date NOT NULL,
  `bill_no_of_jaherat` int(5) NOT NULL,
  `bill_date_of_jaherat` date NOT NULL,
  `party_no` int(5) NOT NULL,
  `amount` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `party_no` (`party_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `lavajam`
--

CREATE TABLE IF NOT EXISTS `lavajam` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `member_no` int(5) NOT NULL,
  `lavajam_page_no` int(5) NOT NULL,
  `lavajam_date` date NOT NULL,
  `lavajam_no_of` int(5) NOT NULL,
  `lavajam_amount` int(10) NOT NULL,
  `lavajam_no_from` int(10) NOT NULL,
  `lavajam_no_to` int(10) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_no` (`member_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lavajam_rate_master`
--

CREATE TABLE IF NOT EXISTS `lavajam_rate_master` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `created_by` int(5) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lavajam_rate_master`
--

INSERT INTO `lavajam_rate_master` (`id`, `type`, `amount`, `created_by`, `created_date`) VALUES
(1, 'Local', 750, 5, '2012-09-25'),
(2, 'NRI', 2500, 5, '2012-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `member_master`
--

CREATE TABLE IF NOT EXISTS `member_master` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `member_number` int(5) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `member_address` varchar(100) NOT NULL,
  `member_zone` int(5) NOT NULL,
  `member_birthdate` date NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `member_zone` (`member_zone`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member_master`
--

INSERT INTO `member_master` (`id`, `member_number`, `member_name`, `member_address`, `member_zone`, `member_birthdate`, `creation_date`, `created_by`) VALUES
(5, 1, 'રવિ', 'ગુરુકુળ', 2, '1989-06-15', '2012-09-15', 5),
(6, 2, 'અજય', 'નવરંગપુરા', 1, '1986-12-13', '2012-09-15', 5);

-- --------------------------------------------------------

--
-- Table structure for table `party_master`
--

CREATE TABLE IF NOT EXISTS `party_master` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `party_name` varchar(30) NOT NULL,
  `party_address_1` varchar(30) NOT NULL,
  `party_address_2` varchar(30) NOT NULL,
  `party_address_3` varchar(30) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `party_master`
--

INSERT INTO `party_master` (`id`, `party_name`, `party_address_1`, `party_address_2`, `party_address_3`, `creation_date`, `created_by`) VALUES
(1, 'ભગવતી ઉદ્યોગ ', 'ગુરુકુળ', 'મેમનગર', 'અમદાવાદ', '2012-09-13', 5),
(2, 'રુદ્ર', 'ગુરુકુળ', 'મેમનગર', 'અમદાવાદ', '2012-09-15', 5);

-- --------------------------------------------------------

--
-- Table structure for table `rate_master_for_avasan`
--

CREATE TABLE IF NOT EXISTS `rate_master_for_avasan` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `size` varchar(15) NOT NULL,
  `rate` int(10) NOT NULL,
  `color` varchar(15) NOT NULL,
  `created_by` int(5) NOT NULL,
  `created_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rate_master_for_avasan`
--

INSERT INTO `rate_master_for_avasan` (`id`, `size`, `rate`, `color`, `created_by`, `created_date`) VALUES
(1, '1*11', 1000, 'Black & White', 5, '2012-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `rate_master_for_jaherat`
--

CREATE TABLE IF NOT EXISTS `rate_master_for_jaherat` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `rate_page_no` int(5) NOT NULL,
  `rate_type_color` varchar(10) NOT NULL,
  `rate_amount` int(10) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `rate_master_for_jaherat`
--

INSERT INTO `rate_master_for_jaherat` (`id`, `rate_page_no`, `rate_type_color`, `rate_amount`, `creation_date`, `created_by`) VALUES
(1, 10, '2 Color', 1000, '2012-09-25', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_by` int(5) NOT NULL,
  `creation_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `password`, `created_by`, `creation_date`) VALUES
(3, 'રવિ', '6f9be96a5e20d22b5bfaf3337890467f', 3, '2012-09-13'),
(4, 'admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 4, '2012-09-13'),
(5, 'ravi', '6f9be96a5e20d22b5bfaf3337890467f', 5, '2012-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `zone_master`
--

CREATE TABLE IF NOT EXISTS `zone_master` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(30) NOT NULL,
  `creation_date` date NOT NULL,
  `created_by` int(5) NOT NULL,
  `zone_number` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `zone_master`
--

INSERT INTO `zone_master` (`id`, `zone_name`, `creation_date`, `created_by`, `zone_number`) VALUES
(1, 'સૌરાષ્ટ્ર', '2012-09-13', 5, 'C1'),
(2, 'ગુજરાત', '2012-09-13', 5, 'G1'),
(3, 'ઉત્તર ગુજરાત', '2012-09-15', 5, 'UG1'),
(4, 'દક્ષિણ ગુજરાત', '2012-09-15', 5, 'DG1'),
(5, 'પશ્ચિમ ગુજરાત', '2012-09-15', 5, 'PG1'),
(6, 'કેરલ', '2012-10-04', 5, '૧૨૩');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avsan`
--
ALTER TABLE `avsan`
  ADD CONSTRAINT `avsan_ibfk_1` FOREIGN KEY (`member_no`) REFERENCES `member_master` (`id`),
  ADD CONSTRAINT `avsan_ibfk_2` FOREIGN KEY (`avsan_size`) REFERENCES `rate_master_for_avasan` (`id`);

--
-- Constraints for table `avsan_avak_table`
--
ALTER TABLE `avsan_avak_table`
  ADD CONSTRAINT `avsan_avak_table_ibfk_1` FOREIGN KEY (`party_no`) REFERENCES `party_master` (`id`),
  ADD CONSTRAINT `avsan_avak_table_ibfk_2` FOREIGN KEY (`bank_master_id`) REFERENCES `bank_master` (`id`),
  ADD CONSTRAINT `avsan_avak_table_ibfk_3` FOREIGN KEY (`member_no`) REFERENCES `member_master` (`id`);

--
-- Constraints for table `avsan_wise_avak_table`
--
ALTER TABLE `avsan_wise_avak_table`
  ADD CONSTRAINT `avsan_wise_avak_table_ibfk_1` FOREIGN KEY (`party_no`) REFERENCES `party_master` (`id`),
  ADD CONSTRAINT `avsan_wise_avak_table_ibfk_2` FOREIGN KEY (`member_no`) REFERENCES `member_master` (`id`);

--
-- Constraints for table `bank_slip`
--
ALTER TABLE `bank_slip`
  ADD CONSTRAINT `bank_slip_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `member_master` (`id`);

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`expense_master_id`) REFERENCES `expense_master` (`id`);

--
-- Constraints for table `expense_master`
--
ALTER TABLE `expense_master`
  ADD CONSTRAINT `expense_master_ibfk_1` FOREIGN KEY (`expense_group_id`) REFERENCES `expense_group_master` (`id`);

--
-- Constraints for table `jaharat`
--
ALTER TABLE `jaharat`
  ADD CONSTRAINT `jaharat_ibfk_1` FOREIGN KEY (`member_no`) REFERENCES `member_master` (`id`),
  ADD CONSTRAINT `jaharat_ibfk_2` FOREIGN KEY (`party_no`) REFERENCES `party_master` (`id`),
  ADD CONSTRAINT `jaharat_ibfk_3` FOREIGN KEY (`jaharat_type`) REFERENCES `jaharat_type_master` (`id`);

--
-- Constraints for table `jaherat_avak_table`
--
ALTER TABLE `jaherat_avak_table`
  ADD CONSTRAINT `jaherat_avak_table_ibfk_1` FOREIGN KEY (`party_id`) REFERENCES `party_master` (`id`),
  ADD CONSTRAINT `jaherat_avak_table_ibfk_2` FOREIGN KEY (`bank_master_id`) REFERENCES `bank_master` (`id`);

--
-- Constraints for table `jaherat_wise_avak_table`
--
ALTER TABLE `jaherat_wise_avak_table`
  ADD CONSTRAINT `jaherat_wise_avak_table_ibfk_1` FOREIGN KEY (`party_no`) REFERENCES `party_master` (`id`);

--
-- Constraints for table `lavajam`
--
ALTER TABLE `lavajam`
  ADD CONSTRAINT `lavajam_ibfk_1` FOREIGN KEY (`member_no`) REFERENCES `member_master` (`id`);

--
-- Constraints for table `member_master`
--
ALTER TABLE `member_master`
  ADD CONSTRAINT `fk_member_zone` FOREIGN KEY (`member_zone`) REFERENCES `zone_master` (`id`),
  ADD CONSTRAINT `member_master_ibfk_1` FOREIGN KEY (`member_zone`) REFERENCES `zone_master` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
