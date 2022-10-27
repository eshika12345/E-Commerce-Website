-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2022 at 06:14 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `groupproject_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_tbl`
--

DROP TABLE IF EXISTS `registration_tbl`;
CREATE TABLE IF NOT EXISTS `registration_tbl` (
  `Seller_ID` int(5) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Mobile_No` varchar(16) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Seller_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_tbl`
--

INSERT INTO `registration_tbl` (`Seller_ID`, `First_Name`, `Last_Name`, `Mobile_No`, `Email`, `Password`) VALUES
(1, 'Mona ', 'Chaudhuri', '1234567890', 'rajiv@gmail.com', '12345'),
(2, 'Ekta ', 'Tikka', '1234567890', 'ekta@gmail.com', '12345'),
(10, 'Ajay ', 'Dhingra', '9730078423', 'ajay@gmail.com', '12345'),
(11, 'Ajay ', 'Dhingra', '9730078423', 'ajay@gmail.com', '12345'),
(8, 'Abha ', 'Konda', '3124567890', 'abha@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration_tbl`
--

DROP TABLE IF EXISTS `userregistration_tbl`;
CREATE TABLE IF NOT EXISTS `userregistration_tbl` (
  `Cust_ID` int(10) NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Mobile_no` int(100) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`Cust_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregistration_tbl`
--

INSERT INTO `userregistration_tbl` (`Cust_ID`, `First_Name`, `Last_Name`, `Mobile_no`, `Email`, `Password`) VALUES
(1, 'Selena', 'Rathi', 1234567890, 'selena@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `womensproduct_tbl`
--

DROP TABLE IF EXISTS `womensproduct_tbl`;
CREATE TABLE IF NOT EXISTS `womensproduct_tbl` (
  `Product_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Category` varchar(10) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Manufacturer` varchar(50) NOT NULL,
  `Brand_Name` varchar(50) NOT NULL,
  `Size` varchar(5) NOT NULL,
  `Price` int(10) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(200) NOT NULL,
  `file_size` int(150) NOT NULL,
  PRIMARY KEY (`Product_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womensproduct_tbl`
--

INSERT INTO `womensproduct_tbl` (`Product_ID`, `Category`, `Product_Name`, `Manufacturer`, `Brand_Name`, `Size`, `Price`, `Quantity`, `file_name`, `file_type`, `file_size`) VALUES
(3, 'Women', 'Lymio Women Top', 'ComfyIndustries', 'Lymio', 'l', 0, 10, 'womens_wear2.jpg', '', 0),
(6, 'Women', 'Floral Print Top', 'Carlton London', 'Carlton', 'xxl', 0, 10, 'womens_wear3.jpg', '', 0),
(5, 'Women', 'RodZen Womens Crop Top', 'Loyal Group', 'RodZen', 'm', 0, 10, 'womens_wear4.jpg', '', 0),
(7, 'Women', 'Aahwan Womens Crop Top', 'Nayak Trading Company', 'Aahwan', 's', 0, 10, 'womens_wear5.jpg', '', 0),
(8, 'Women', 'White Women Fashionable Crepe Printed Tunic Top', 'Mahi Enterprises', 'Happy Fashion', 'xs', 0, 10, 'womens_wear6.jpg', '', 0),
(11, 'Men', 'DENNISLINGO PREMIUM ATTIRE', 'Swastik Creation', 'Dennins', 'l', 703, 10, '1507-mens_wear2.jpg', 'image/jpeg', 32),
(12, 'Men', 'Striped Slim Fit Shirt', 'Swastik Creation', 'Dennins', 'xs', 800, 10, '2939-mens_wear3.jpg', 'image/jpeg', 52);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
