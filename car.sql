-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 03:33 PM
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
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `branchID` int(11) NOT NULL,
  `approved` int(1) NOT NULL DEFAULT '0',
  `productID` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `customerID`, `branchID`, `approved`, `productID`, `date`) VALUES
(2, 1, 3, 2, 83, '2017-11-02'),
(3, 2, 3, 1, 20, '2017-11-05'),
(4, 1, 3, 2, 11, '2017-11-03'),
(5, 1, 1, 0, 53, '2017-12-01'),
(6, 1, 3, 0, 10, '2017-12-02'),
(7, 4, 1, 0, 6, '2017-11-30'),
(8, 5, 2, 2, 5, '2017-11-30'),
(9, 5, 3, 1, 11, '2017-11-01'),
(10, 7, 1, 1, 6, '2017-11-08'),
(11, 7, 2, 2, 11, '2017-12-02'),
(12, 7, 3, 0, 53, '2017-11-20'),
(13, 1, 1, 0, 18, '2017-11-30'),
(14, 1, 1, 0, 1, '2017-11-29'),
(15, 1, 1, 0, 1, '2017-11-29'),
(16, 1, 1, 0, 1, '2017-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchID`, `name`, `location`) VALUES
(1, 'Rangsit', '99 Moo 18, Km. 41 on Paholyothin Highway Khlong Luang, Pathum Thani 12120, Thailand'),
(2, 'Branch2', 'Location of Branch 2'),
(3, 'Branch 3', 'Location of Branch 3');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brandID` int(11) NOT NULL,
  `brandName` varchar(40) NOT NULL,
  `logoURL` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brandID`, `brandName`, `logoURL`) VALUES
(1, 'Mercedes-Benz', 'http://www.add-impact.com/wp-content/uploads/2015/06/6.gif'),
(2, 'Nissan', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5_Fdx_597cwzXiln4OKAunXGqsxMTCgjG3rsax7yCngr-Du5dPvk'),
(3, 'Renault', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOeY5DobCsU7B2bYyuiKfa_e1qYoBfd1B2aX4vL2MGmBo5IQ2NNxw'),
(4, 'BMW', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj8VTj6Nt2AXH3G7XeUGaUtFG5qisDsy8ZWeP6-Xty-bKIyogkGLg'),
(5, 'Mazda Motor Corporation', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRECN4eLF9FZzJxgZKKeT8EAW_bQNqt3FYXfGmR3WqAs__nWfDzlnU'),
(6, 'Bentley Motors Limited', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6i-O94-HtwLwR_44w35LvvBIIxsQuC9qetl56x8QnlqtW6Kxo8Ww'),
(7, 'Fiat Automobiles', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAYqTtZROjJK-0eNwv4CXQcpmEULkIKmVELp4do0135hlompW9ADI'),
(8, 'Land Rover', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR3W3kb-bIHuCDTgposx2U9gaZROFqnWfln_WvOqLJiWqNL0H42qL8'),
(9, 'Kia Motors', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgiF7yAlGk_ALnhXYH3-PTt91w6EekdptkA8eoSPXNJJ8CPebSYZ8'),
(10, 'Peugeot', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoKBzmH0DS7_ucXy0R2LFI-o-4Hjtqx2wKdDj3iVVP_T-nTYegBaE'),
(11, 'Suzuki', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR81pQj2lDLQD_wantn8erAZ896jEwhjbWWgyYEOa4E3ufNdfIzUF0'),
(12, 'Vauxhall Motors', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9Wye54DSyXp9h73v-AvmulN7sZTCe1JR1M6zT0O5QhCLs3zxOgRc'),
(13, 'Porsche', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM-NXw3abymZCHV2myZ9iPJFKrZ1a9WVCLVgBG_HUBMN0N3W8M5eg'),
(14, 'Jaguar Cars', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyNnN13QBiQP7YBQ-5axBQQrq32mlczxkDZ9hQM-BaQaxQGPc8bOs'),
(15, 'Ford Motor Company', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCEcUvvq0h_FFop2qIoNX_iSfExZERPClRZjyNNXsMU47hYURC6pY'),
(16, 'Maserati', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSbsFkuSfzBoCtRqbtRtMXGop0NdzzRdedJvMwqCB7Q2FN-E3hM46k'),
(17, 'Skoda Auto', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG0frdDofLiJwWNpeR90pw2yzbuOHzYqcwpdKSzeFv3ocdF1aWKBE'),
(18, 'Bugatti', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrbvCf__b0dRRL5JBxfml16_bvTWOTK6MURIiEa7m8nAHHI-SFjvQ'),
(19, 'Infiniti', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-1zKFvI-O_10WaWPp9HHORVWaAnlKlI8tS7vlUvuFIexNwDX6hi0'),
(20, 'Ferrari S.p.A.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzaNW1dbRW23WEnDNW_1Axiz0eusr6M0O_tbRPgeKWw8ugO_2O5q0'),
(21, 'Lexus', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6wiHun948zqpt9FgL0hKDfQn6k5TxfkR47D5NmuI5JWvd0LTvgOY'),
(22, 'Lamborghini', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ70pP1_ULWq6FVI1HVNCJFtxFjXW8jEw0uwCX9cJMmX_7TghUYCw'),
(23, 'Citroen', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQVbboHdwqpcBcrcKDsfpaZq5u6WPgDlwGluJmtFjvzYzd74xouUyI'),
(24, 'Aston Martin', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsK-lT8jT5q2P_M2cvOWvRgcWuE4mSyDc5Ku2DVb8ZARLn_0ZAkb0'),
(25, 'Dodge', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQzyNe38pF2PjuTgF4bznIXawsz9PX7u-ZO4E8ejzN2nv8rqScjNTM'),
(26, 'Toyota', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjadMt7atoqB7BUHPb4bjurQSMGPiJinY8lUeyAtTgLXyF_1H7uQo'),
(27, 'McLaren Automotive', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxYf4Z9EDmjMtSBKJOJCw7WKnaABPm4ztYir4NjAPGO_PdnWE5QQs'),
(28, 'Geely', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2Mw0hm6hOlEIQGM3QyNvH6XTZvrxxiwvEsgZbpDdJfap4bLuf63g'),
(29, 'SSC North America', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkuY6Ly2Vu3xBcurwiFWfJYp_7VPOFTM3Jt557mlIxJ2IDBvPR2Hg'),
(30, 'Opel', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwKtH2tMNVawUaAyCRH_vYbWkmJnr9zt0nH9YnCNiKh2jugwMj_cU'),
(31, 'Acura', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOFqA_9Rrue8wSCCWmmVU-tT3_OqiTMoCcVFXciAf_5e_m6aKFxRg'),
(32, 'Chery', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtmJuPsPqM1hyNfSPZrtGnmEKs7-MoSqgW1YQ4L9JyLDc0fM3K8Eo'),
(33, 'Alfa Romeo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_yYj7g07Rr6NMmEEyV0Ids10afgl4yLP_qBhKxWif8ckVbPKceQY'),
(34, 'Koenigsegg Automotive AB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeZYyJ0RY8Y5hDda4ETWHBcnXlB_lZVVP-zqC2wPew1M7ZGjbgd-Q'),
(35, 'Lotus Cars', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAQDytRwcOfKQMIc7GGAKabgdcPYK6F4karp8NRQ5KXO-yJvsTVQM'),
(36, 'Pagani', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmcuzivW5HwlDhzeep7wpq9bgnkSJjLHB0ldOLbzLJ1fnO1cKNwhY'),
(37, 'SEAT', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCgBzdh7M42YDM1ZJdUYwb7-evRKggwflBE_DJsj5nxiPKt9zJKjE'),
(38, 'Vector Motors Corporation', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2VtGSzTbxkpl1R15VyuJ-X6_SBX00-BqIkKFNVpjqIPhm9nzM-FA'),
(39, 'Abarth', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9G6tbZAi2R4hopH2ud0fXJyQbsSaZwOD-l7OH4Gfp8X1XHQ4cgMI'),
(40, 'Arrinera', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSHNNFqfrQzclQxDiymr9fksxt3LSUKZd8yLAaO0XJ_Ih_0Yl-XEss'),
(41, 'Luxgen', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRTl50pQQqoSaBZz7Adurt7zXgljmf1uscuLku702X2diOn0jvz7k'),
(42, 'BYD Auto', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlbV1Ca8Pdu5T2cjYMwbh0Fz1fwqcVhoGzZz38R2PctpmxMOUc0OY'),
(43, 'Maruti Suzuki', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCIAtXQtODTqsfufoVkQRw-q2ozV4Kp2PQ2FuRF1Ouc8iqyl-q6F0'),
(44, 'Perodua', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTGwyypWBlT3_f3AIOC5i1JBvVjZzrF9LxQ-0jlUCyslPM1tX8_yis'),
(45, 'Isuzu Motors Ltd.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuH6CgZCvYRuqTLixvVzfxEzae7Ay4y_dCE9HM6Y4Yoh0vHXzLvzA'),
(46, 'Ascari Cars', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQGU5zq12QYzcCEbmGxZVI6jRIeg2ouL1zXgh1QeuwQRodsJrmoG8'),
(47, 'Subaru', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrHyr2QVcc6v_n-xHRqQMD5Wa0hbpB574fvStr7p4lU2iOm4arkMg'),
(48, 'PROTON Holdings', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkUySK8IM39MJO2o4oaHnH_zJlAJUGvoyLOOdpatvTJTNErTKRfGk'),
(49, 'Tata Motors', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRolt_HwrE2FSZgpORIDXskUbjlMpmODgkjFkhcT5wEdxREq6igXKU'),
(50, 'Panoz, LLC', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqwUUlnSHIf2KHvEIQavlN_u2dfLiGfnC7GJnklCPkW1m78KmwG90'),
(51, 'Mitsubishi Motors', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIrLg6fkR_oQrjiaGYFOSHhnnHQ0jr_6rGkWpWmRNJAkVqV48A7L8'),
(52, 'Dongfeng Motor Corporation', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4lZ-pACP4P4Kxm3U_7XjhEFtkNnlyH1_LvX0CyWD7cR33pDEbuu0'),
(53, 'Maybach', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnaLIkSa0UFWkmBxG7SQB6Eh8ZNiYRXLxWoSMg-HigxY5LDuzI144'),
(54, 'Saab Automobile', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAoEj4YhL1Ft0DtZCQdcM0GqeFEZctF_Jkdm4on_Jk4OGP8I8i7q8'),
(55, 'Force Motors', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHfbMxRDhKw2ACzCcB28JC-yWt0A2qHo4vca7JEF7jPnQsYCjpeUU'),
(56, 'DR Motor Company', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrKQhD0255fWOtmnsCr_vYfUYIGfGVt9p2oNlCbzKvnTtTbYVWFTQ'),
(57, 'GAZ', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIU7jS5HbrmpbwEvuDIP6WnULxViIiq6-BkLUcsjELRxj5BJKRaXw'),
(58, 'Studebaker', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkzY0UPn-sQbFJMLh4afMJn3HAAWhgTzJ4h4Tra5TWf7ewNANp2N4'),
(59, 'smart', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxnzdotnnIqDO72OXfUJAgBolyddi_9YooW26RaeeXq1iEvf_QUOk'),
(60, 'Prodrive', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWCGzqpJFBU6ziZyKnPwWty_cY8SSvClCqqtqr1O0PF8A38YsHADo'),
(61, 'GTA Motor', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRRpChTd8m-jHDXIQF3VQnkkI4re4odFwMOMtNH6HLiANAoILxU3ek'),
(62, 'Ultima Sports', ''),
(63, 'Rolls-Royce Holdings plc', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGPl7nQBgu-nZwiO36ZNZtHFOu7dW4WBMZYVc536NMeCLgbSFBl8w'),
(64, 'AC Propulsion', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShOKdtDrMtK9Pa5lZvSUoVVDc8EG-7QuYnbkrqeX5t3WkRFVPpUJg'),
(65, 'AB Volvo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKnafRaaxrCC2e4AidHlLPEG_JD5-Zuu8H573X8JgtekqKjqy7GFI'),
(66, 'Lotec', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTfh1BPBOPqCioWv3oU6ifJsrrjVD-RdtqzpIvLYj6nys3faEF878'),
(67, 'Honda Motor Company', ''),
(68, 'Volkswagen', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `text` varchar(200) NOT NULL,
  `customerID` int(11) DEFAULT NULL,
  `dateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentID`, `productID`, `text`, `customerID`, `dateTime`) VALUES
(1, 9, 'ASDFASDFASDFASDFASDF', 1, '2017-11-27 00:00:00'),
(2, 9, 'ASDFASDFASDFASDFASDF', 1, '2017-11-27 00:00:00'),
(3, 1, 'Hi', 1, '2017-11-27 00:00:00'),
(4, 1, 'asdf', 1, '2017-11-27 00:00:00'),
(5, 1, 'aaaa', 1, '2017-11-27 00:00:00'),
(6, 1, 'aaaa', 1, '2017-11-27 18:10:43'),
(7, 11, 'Hi', 0, '2017-11-27 23:17:32'),
(8, 11, 'Hi', 4, '2017-11-27 23:19:10'),
(9, 1, 'Test\r\n', 7, '2017-11-28 18:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `joinDate` datetime NOT NULL,
  `password` varchar(20) NOT NULL,
  `disabled` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `fName`, `lName`, `username`, `email`, `joinDate`, `password`, `disabled`) VALUES
(1, 'Wanich', 'Keatkajonjumroen', 'toowanich', 'asdflkasjdf@asdfjksldf.co', '0000-00-00 00:00:00', '0000', 0),
(2, 'asdfds', 'asdf', 'asdf', 'asdfasdfSF', '0000-00-00 00:00:00', '0', 0),
(3, 'a', 'a', 'a', 'a', '0000-00-00 00:00:00', 'a', 0),
(4, 'definitely', 'not', '2T', 'ttt', '0000-00-00 00:00:00', '0', 1),
(5, 'wan', 'keat', 'wan', 'wan', '0000-00-00 00:00:00', '0', 0),
(6, 'def', 'def', 'def', 'def', '0000-00-00 00:00:00', 'def', 1),
(7, '3', '3', '3', '3', '0000-00-00 00:00:00', '3', 0),
(8, 'Wanich', 'Keatkajonjumroen', 't2', 'toowanoch@gmail.com', '0000-00-00 00:00:00', 'a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginlog`
--

CREATE TABLE `loginlog` (
  `logID` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `error` varchar(20) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginlog`
--

INSERT INTO `loginlog` (`logID`, `username`, `error`, `time`) VALUES
(1, 'too', 'E', '2017-11-28 00:01:04'),
(2, 'too', '', '2017-11-28 00:06:41'),
(3, 'toowanich', 'wrong', '2017-11-28 00:07:44'),
(4, 'too', '', '2017-11-28 00:07:50'),
(7, 'too', '', '2017-11-28 00:10:27'),
(8, 'gggggggggggg', 'notFound', '2017-11-28 00:11:34'),
(9, 'Too', '', '2017-11-28 00:11:37'),
(10, 'too', '', '2017-11-28 14:10:27'),
(11, 'too', '', '2017-11-28 14:35:43'),
(12, '1', 'wrong', '2017-11-28 14:44:36'),
(13, 'too', '', '2017-11-28 14:44:38'),
(14, '1', '', '2017-11-28 14:45:00'),
(15, 'too', '', '2017-11-28 14:46:07'),
(16, '1', '', '2017-11-28 14:46:42'),
(17, 'too', '', '2017-11-28 15:50:02'),
(18, 'wan', '', '2017-11-28 16:05:39'),
(19, 'toowanich', 'wrong', '2017-11-28 16:09:18'),
(20, 'toowanich', 'wrong', '2017-11-28 16:09:25'),
(21, 'toowanich', 'wrong', '2017-11-28 16:09:30'),
(22, 'too', '', '2017-11-28 16:09:35'),
(23, 'toowanich', '', '2017-11-28 16:09:46'),
(24, 'wan', '', '2017-11-28 16:10:21'),
(25, 'wan', 'wrong', '2017-11-28 16:41:59'),
(26, 'wafdsflkjadf', 'notFound', '2017-11-28 16:42:02'),
(27, '2T', 'disabled', '2017-11-28 16:42:25'),
(28, 'toowanich', 'wrong', '2017-11-28 16:42:59'),
(29, 'toowanich', '', '2017-11-28 16:43:05'),
(30, 'Too', '', '2017-11-28 17:17:07'),
(31, '3', '', '2017-11-28 17:30:27'),
(32, 't', '', '2017-11-28 17:51:32'),
(33, 't2', '', '2017-11-28 17:59:50'),
(34, 'toowanich', '', '2017-11-28 18:00:05'),
(35, 'toowanich', '', '2017-11-28 18:13:01'),
(36, '1', '', '2017-11-28 18:16:59'),
(37, 'too', '', '2017-11-28 18:17:51'),
(38, '3', '', '2017-11-28 18:29:47'),
(39, 'too', '', '2017-11-28 18:33:18'),
(40, '1', '', '2017-11-28 21:24:06'),
(41, '1', '', '2017-11-28 21:26:10'),
(42, 'toowanich', '', '2017-11-28 21:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`email`) VALUES
('asdf'),
('asdf'),
('asdf'),
('asdf'),
('22');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `manufacturer` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `maxSpeed` int(11) NOT NULL,
  `acceleration` int(11) NOT NULL,
  `disabled` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `price`, `name`, `manufacturer`, `description`, `length`, `width`, `height`, `maxSpeed`, `acceleration`, `disabled`) VALUES
(1, 3213728, 'Merc1', 1, 'Something Something about Merc1', 4300, 1709, 1422, 193, 9, 0),
(2, 3531604, 'Merc2', 1, 'Something Something about Merc2', 4494, 1699, 1385, 158, 7, 0),
(3, 4638311, 'Merc0', 1, 'Something Something about Merc0 edit test', 4338, 1600, 1458, 155, 9, 0),
(4, 5068890, 'Niss1', 2, 'Something Something about Niss1', 4350, 1636, 1316, 180, 5, 0),
(5, 7720819, 'Niss2', 2, 'Something Something about Niss2', 4423, 1618, 1377, 157, 9, 0),
(6, 3455040, 'Rena0', 3, 'Something Something about Rena0', 4427, 1768, 1456, 197, 6, 0),
(7, 2678199, 'Rena1', 3, 'Something Something about Rena1', 4377, 1650, 1426, 188, 6, 0),
(8, 7041557, 'Rena2', 3, 'Something Something about Rena2', 4388, 1718, 1322, 190, 5, 0),
(9, 1999316, 'BMW0', 4, 'Something Something about BMW0', 4399, 1753, 1329, 154, 5, 0),
(10, 9152699, 'BMW1', 4, 'Something Something about BMW1', 4466, 1755, 1406, 151, 5, 0),
(11, 2525413, 'BMW2', 4, 'Something Something about BMW2', 4479, 1715, 1324, 197, 8, 0),
(12, 5428955, 'Mazd0', 5, 'Something Something about Mazd0', 4434, 1642, 1363, 158, 8, 0),
(13, 3019508, 'Mazd1', 5, 'Something Something about Mazd1', 4348, 1791, 1382, 189, 9, 0),
(14, 3154806, 'Mazd2', 5, 'Something Something about Mazd2', 4357, 1743, 1343, 164, 7, 0),
(15, 6248604, 'Bent0', 6, 'Something Something about Bent0', 4414, 1695, 1340, 190, 6, 0),
(16, 9965376, 'Bent1', 6, 'Something Something about Bent1', 4414, 1660, 1486, 192, 9, 0),
(17, 1191921, 'Bent2', 6, 'Something Something about Bent2', 4341, 1800, 1326, 198, 5, 0),
(18, 9650067, 'Fiat0', 7, 'Something Something about Fiat0', 4389, 1608, 1425, 168, 7, 0),
(19, 7709616, 'Fiat1', 7, 'Something Something about Fiat1', 4430, 1638, 1427, 159, 7, 0),
(20, 2592745, 'Fiat2', 7, 'Something Something about Fiat2', 4400, 1717, 1458, 150, 5, 0),
(21, 4075275, 'Land0', 8, 'Something Something about Land0', 4490, 1716, 1363, 174, 7, 0),
(22, 2649364, 'Land1', 8, 'Something Something about Land1', 4370, 1633, 1471, 195, 8, 0),
(23, 6757361, 'Land2', 8, 'Something Something about Land2', 4457, 1640, 1428, 179, 9, 0),
(24, 3616892, 'Kia 0', 9, 'Something Something about Kia 0', 4431, 1731, 1330, 199, 7, 0),
(25, 8944894, 'Kia 1', 9, 'Something Something about Kia 1', 4406, 1621, 1440, 197, 7, 0),
(26, 6497414, 'Kia 2', 9, 'Something Something about Kia 2', 4439, 1744, 1406, 178, 8, 0),
(27, 7457252, 'Peug0', 10, 'Something Something about Peug0', 4327, 1760, 1352, 192, 7, 0),
(28, 2271198, 'Peug1', 10, 'Something Something about Peug1', 4492, 1795, 1352, 157, 7, 0),
(29, 3183092, 'Peug2', 10, 'Something Something about Peug2', 4346, 1695, 1401, 191, 7, 0),
(30, 5009587, 'Suzu0', 11, 'Something Something about Suzu0', 4316, 1694, 1493, 189, 8, 0),
(31, 2476465, 'Suzu1', 11, 'Something Something about Suzu1', 4461, 1630, 1418, 185, 7, 0),
(32, 4707601, 'Suzu2', 11, 'Something Something about Suzu2', 4452, 1769, 1461, 150, 9, 0),
(33, 9473894, 'Vaux0', 12, 'Something Something about Vaux0', 4489, 1629, 1464, 179, 7, 0),
(34, 1650574, 'Vaux1', 12, 'Something Something about Vaux1', 4323, 1610, 1435, 161, 8, 0),
(35, 4208833, 'Vaux2', 12, 'Something Something about Vaux2', 4334, 1660, 1481, 162, 5, 0),
(36, 3742392, 'Pors0', 13, 'Something Something about Pors0', 4489, 1652, 1433, 178, 9, 0),
(37, 2651682, 'Pors1', 13, 'Something Something about Pors1', 4444, 1727, 1494, 155, 6, 0),
(38, 3767411, 'Pors2', 13, 'Something Something about Pors2', 4334, 1650, 1461, 184, 5, 0),
(39, 6595884, 'Jagu0', 14, 'Something Something about Jagu0', 4452, 1631, 1313, 179, 5, 0),
(40, 4829642, 'Jagu1', 14, 'Something Something about Jagu1', 4301, 1735, 1497, 163, 9, 0),
(41, 7740616, 'Jagu2', 14, 'Something Something about Jagu2', 4384, 1739, 1408, 199, 6, 0),
(42, 9568856, 'Ford0', 15, 'Something Something about Ford0', 4341, 1681, 1459, 151, 6, 0),
(43, 7790563, 'Ford1', 15, 'Something Something about Ford1', 4369, 1760, 1448, 150, 7, 0),
(44, 3139889, 'Ford2', 15, 'Something Something about Ford2', 4358, 1627, 1364, 185, 8, 0),
(45, 7889804, 'Mase0', 16, 'Something Something about Mase0', 4496, 1785, 1343, 180, 5, 0),
(46, 2085228, 'Mase1', 16, 'Something Something about Mase1', 4484, 1785, 1443, 188, 9, 0),
(47, 9682159, 'Mase2', 16, 'Something Something about Mase2', 4337, 1768, 1394, 164, 7, 0),
(48, 5875771, 'Skod0', 17, 'Something Something about Skod0', 4390, 1740, 1479, 151, 8, 0),
(49, 9058800, 'Skod1', 17, 'Something Something about Skod1', 4420, 1739, 1373, 162, 8, 0),
(50, 2876667, 'Skod2', 17, 'Something Something about Skod2', 4458, 1749, 1418, 151, 6, 0),
(51, 8523169, 'Buga0', 18, 'Something Something about Buga0', 4302, 1773, 1455, 182, 8, 0),
(52, 7266833, 'Buga1', 18, 'Something Something about Buga1', 4489, 1638, 1460, 160, 8, 0),
(53, 5036349, 'Buga2', 18, 'Something Something about Buga2', 4422, 1635, 1356, 156, 8, 0),
(54, 9303037, 'Infi0', 19, 'Something Something about Infi0', 4461, 1600, 1498, 176, 8, 0),
(55, 4466098, 'Infi1', 19, 'Something Something about Infi1', 4330, 1743, 1388, 164, 9, 0),
(56, 3556934, 'Infi2', 19, 'Something Something about Infi2', 4331, 1718, 1413, 189, 6, 0),
(57, 2143353, 'Ferr0', 20, 'Something Something about Ferr0', 4446, 1781, 1467, 166, 5, 0),
(58, 9970209, 'Ferr1', 20, 'Something Something about Ferr1', 4496, 1614, 1437, 191, 9, 0),
(59, 7439326, 'Ferr2', 20, 'Something Something about Ferr2', 4419, 1705, 1395, 188, 8, 0),
(60, 2592051, 'Lexu0', 21, 'Something Something about Lexu0', 4352, 1660, 1375, 198, 8, 0),
(61, 8663127, 'Lexu1', 21, 'Something Something about Lexu1', 4417, 1684, 1396, 164, 7, 0),
(62, 3413582, 'Lexu2', 21, 'Something Something about Lexu2', 4303, 1630, 1461, 197, 5, 0),
(63, 5126062, 'Lamb0', 22, 'Something Something about Lamb0', 4489, 1796, 1424, 175, 6, 0),
(64, 8051619, 'Lamb1', 22, 'Something Something about Lamb1', 4352, 1608, 1301, 198, 6, 0),
(65, 4544835, 'Lamb2', 22, 'Something Something about Lamb2', 4343, 1799, 1377, 160, 7, 0),
(66, 7867172, 'Citr0', 23, 'Something Something about Citr0', 4364, 1721, 1334, 178, 9, 0),
(67, 1800381, 'Citr1', 23, 'Something Something about Citr1', 4420, 1748, 1472, 190, 8, 0),
(68, 6247465, 'Citr2', 23, 'Something Something about Citr2', 4464, 1666, 1498, 196, 7, 0),
(69, 9498065, 'Asto0', 24, 'Something Something about Asto0', 4408, 1630, 1311, 157, 9, 0),
(70, 3750892, 'Asto1', 24, 'Something Something about Asto1', 4362, 1682, 1386, 199, 7, 0),
(71, 8742289, 'Asto2', 24, 'Something Something about Asto2', 4449, 1728, 1410, 181, 7, 0),
(72, 6426308, 'Dodg0', 25, 'Something Something about Dodg0', 4414, 1782, 1434, 154, 6, 0),
(73, 3880569, 'Dodg1', 25, 'Something Something about Dodg1', 4453, 1721, 1448, 150, 7, 0),
(74, 5934635, 'Dodg2', 25, 'Something Something about Dodg2', 4454, 1637, 1421, 163, 9, 0),
(75, 4599110, 'Toyo0', 26, 'Something Something about Toyo0', 4372, 1793, 1383, 180, 6, 0),
(76, 1826957, 'Toyo1', 26, 'Something Something about Toyo1', 4423, 1740, 1494, 172, 7, 0),
(77, 6722368, 'Toyo2', 26, 'Something Something about Toyo2', 4459, 1627, 1463, 164, 6, 0),
(78, 3248812, 'McLa0', 27, 'Something Something about McLa0', 4446, 1755, 1300, 167, 8, 0),
(79, 5500996, 'McLa1', 27, 'Something Something about McLa1', 4370, 1713, 1309, 176, 9, 0),
(80, 1899628, 'McLa2', 27, 'Something Something about McLa2', 4363, 1712, 1396, 158, 9, 0),
(81, 7272024, 'Geel0', 28, 'Something Something about Geel0', 4453, 1703, 1335, 151, 6, 0),
(82, 8825387, 'Geel1', 28, 'Something Something about Geel1', 4424, 1655, 1383, 159, 6, 0),
(83, 5254930, 'Geel2', 28, 'Something Something about Geel2', 4317, 1743, 1311, 175, 7, 0),
(84, 8446291, 'SSC 0', 29, 'Something Something about SSC 0', 4453, 1797, 1376, 195, 8, 0),
(85, 3606875, 'SSC 1', 29, 'Something Something about SSC 1', 4379, 1799, 1410, 152, 7, 0),
(86, 5748754, 'SSC 2', 29, 'Something Something about SSC 2', 4499, 1641, 1416, 155, 6, 0),
(87, 3127502, 'Opel0', 30, 'Something Something about Opel0', 4425, 1730, 1344, 171, 6, 0),
(88, 4867097, 'Opel1', 30, 'Something Something about Opel1', 4354, 1793, 1305, 198, 9, 0),
(89, 3383278, 'Opel2', 30, 'Something Something about Opel2', 4326, 1699, 1463, 172, 5, 0),
(90, 9849623, 'Acur0', 31, 'Something Something about Acur0', 4430, 1764, 1418, 183, 7, 0),
(91, 5353529, 'Acur1', 31, 'Something Something about Acur1', 4406, 1754, 1331, 185, 9, 0),
(92, 3164666, 'Acur2', 31, 'Something Something about Acur2', 4498, 1683, 1489, 170, 5, 0),
(93, 9026403, 'Cher0', 32, 'Something Something about Cher0', 4471, 1685, 1414, 176, 9, 0),
(94, 2357398, 'Cher1', 32, 'Something Something about Cher1', 4369, 1775, 1418, 191, 5, 0),
(95, 8522547, 'Cher2', 32, 'Something Something about Cher2', 4450, 1696, 1377, 181, 5, 0),
(96, 7481328, 'Alfa0', 33, 'Something Something about Alfa0', 4490, 1727, 1470, 199, 5, 0),
(97, 8156280, 'Alfa1', 33, 'Something Something about Alfa1', 4483, 1602, 1341, 151, 6, 0),
(98, 3532099, 'Alfa2', 33, 'Something Something about Alfa2', 4473, 1694, 1482, 168, 6, 0),
(99, 6220358, 'Koen0', 34, 'Something Something about Koen0', 4453, 1743, 1493, 168, 5, 0),
(100, 7211904, 'Koen1', 34, 'Something Something about Koen1', 4461, 1651, 1487, 190, 6, 0),
(101, 1798288, 'Koen2', 34, 'Something Something about Koen2', 4396, 1695, 1364, 163, 6, 0),
(102, 4710300, 'Lotu0', 35, 'Something Something about Lotu0', 4441, 1633, 1482, 162, 8, 0),
(103, 7688079, 'Lotu1', 35, 'Something Something about Lotu1', 4418, 1626, 1470, 195, 6, 0),
(104, 9240976, 'Lotu2', 35, 'Something Something about Lotu2', 4309, 1684, 1496, 178, 5, 0),
(105, 2973956, 'Paga0', 36, 'Something Something about Paga0', 4407, 1711, 1484, 157, 9, 0),
(106, 9458353, 'Paga1', 36, 'Something Something about Paga1', 4383, 1790, 1395, 175, 6, 0),
(107, 9935970, 'Paga2', 36, 'Something Something about Paga2', 4376, 1767, 1370, 170, 8, 0),
(108, 8918125, 'SEAT0', 37, 'Something Something about SEAT0', 4336, 1714, 1407, 175, 6, 0),
(109, 2256853, 'SEAT1', 37, 'Something Something about SEAT1', 4434, 1709, 1460, 194, 6, 0),
(110, 1892721, 'SEAT2', 37, 'Something Something about SEAT2', 4435, 1621, 1312, 200, 9, 0),
(111, 5567113, 'Vect0', 38, 'Something Something about Vect0', 4327, 1656, 1359, 178, 7, 0),
(112, 8565978, 'Vect1', 38, 'Something Something about Vect1', 4428, 1639, 1393, 188, 9, 0),
(113, 8104714, 'Vect2', 38, 'Something Something about Vect2', 4311, 1785, 1365, 197, 9, 0),
(114, 1259997, 'Abar0', 39, 'Something Something about Abar0', 4388, 1610, 1302, 195, 8, 0),
(115, 1622577, 'Abar1', 39, 'Something Something about Abar1', 4440, 1708, 1422, 183, 8, 0),
(116, 1635208, 'Abar2', 39, 'Something Something about Abar2', 4394, 1742, 1446, 152, 8, 0),
(117, 1605598, 'Arri0', 40, 'Something Something about Arri0', 4423, 1637, 1314, 163, 8, 0),
(118, 3260872, 'Arri1', 40, 'Something Something about Arri1', 4330, 1691, 1414, 190, 7, 0),
(119, 9801810, 'Arri2', 40, 'Something Something about Arri2', 4356, 1681, 1302, 169, 7, 0),
(120, 2717492, 'Luxg0', 41, 'Something Something about Luxg0', 4412, 1725, 1325, 167, 8, 0),
(121, 5279024, 'Luxg1', 41, 'Something Something about Luxg1', 4329, 1729, 1329, 193, 8, 0),
(122, 5608090, 'Luxg2', 41, 'Something Something about Luxg2', 4434, 1737, 1465, 182, 7, 0),
(123, 2655154, 'BYD 0', 42, 'Something Something about BYD 0', 4451, 1628, 1321, 172, 8, 0),
(124, 1351180, 'BYD 1', 42, 'Something Something about BYD 1', 4369, 1677, 1472, 154, 8, 0),
(125, 6188734, 'BYD 2', 42, 'Something Something about BYD 2', 4337, 1736, 1417, 179, 8, 0),
(126, 5890394, 'Maru0', 43, 'Something Something about Maru0', 4346, 1706, 1457, 179, 9, 0),
(127, 8480465, 'Maru1', 43, 'Something Something about Maru1', 4349, 1602, 1313, 183, 7, 0),
(128, 8161471, 'Maru2', 43, 'Something Something about Maru2', 4308, 1780, 1345, 187, 6, 0),
(129, 4460431, 'Pero0', 44, 'Something Something about Pero0', 4382, 1648, 1374, 196, 8, 0),
(130, 7022311, 'Pero1', 44, 'Something Something about Pero1', 4481, 1700, 1309, 157, 8, 0),
(131, 4136988, 'Pero2', 44, 'Something Something about Pero2', 4399, 1752, 1489, 156, 6, 0),
(132, 4821988, 'Isuz0', 45, 'Something Something about Isuz0', 4450, 1690, 1343, 191, 9, 0),
(133, 9659296, 'Isuz1', 45, 'Something Something about Isuz1', 4430, 1618, 1374, 190, 6, 0),
(134, 3670887, 'Isuz2', 45, 'Something Something about Isuz2', 4367, 1667, 1357, 156, 9, 0),
(135, 7156964, 'Asca0', 46, 'Something Something about Asca0', 4475, 1758, 1424, 172, 7, 0),
(136, 7007279, 'Asca1', 46, 'Something Something about Asca1', 4440, 1660, 1371, 156, 9, 0),
(137, 6616207, 'Asca2', 46, 'Something Something about Asca2', 4430, 1739, 1380, 150, 7, 0),
(138, 5674406, 'Suba0', 47, 'Something Something about Suba0', 4377, 1643, 1325, 169, 9, 0),
(139, 5703805, 'Suba1', 47, 'Something Something about Suba1', 4499, 1619, 1331, 160, 5, 0),
(140, 7462782, 'Suba2', 47, 'Something Something about Suba2', 4378, 1615, 1454, 197, 9, 0),
(141, 7528806, 'PROT0', 48, 'Something Something about PROT0', 4378, 1755, 1492, 182, 6, 0),
(142, 4980639, 'PROT1', 48, 'Something Something about PROT1', 4340, 1765, 1329, 165, 6, 0),
(143, 7450977, 'PROT2', 48, 'Something Something about PROT2', 4395, 1670, 1471, 187, 9, 0),
(144, 2731914, 'Tata0', 49, 'Something Something about Tata0', 4330, 1772, 1485, 200, 9, 0),
(145, 9730935, 'Tata1', 49, 'Something Something about Tata1', 4327, 1796, 1383, 184, 5, 0),
(146, 8847952, 'Tata2', 49, 'Something Something about Tata2', 4351, 1765, 1334, 150, 7, 0),
(147, 8469185, 'Pano0', 50, 'Something Something about Pano0', 4479, 1742, 1459, 164, 5, 0),
(148, 5153777, 'Pano1', 50, 'Something Something about Pano1', 4364, 1689, 1307, 155, 8, 0),
(149, 7871094, 'Pano2', 50, 'Something Something about Pano2', 4371, 1645, 1366, 186, 7, 0),
(150, 3413760, 'Mits0', 51, 'Something Something about Mits0', 4331, 1623, 1437, 199, 6, 0),
(151, 5712964, 'Mits1', 51, 'Something Something about Mits1', 4421, 1656, 1470, 182, 8, 0),
(152, 7414917, 'Mits2', 51, 'Something Something about Mits2', 4468, 1631, 1316, 163, 5, 0),
(153, 2125667, 'Dong0', 52, 'Something Something about Dong0', 4332, 1696, 1411, 156, 9, 0),
(154, 9007962, 'Dong1', 52, 'Something Something about Dong1', 4456, 1766, 1319, 166, 9, 0),
(155, 6816786, 'Dong2', 52, 'Something Something about Dong2', 4422, 1747, 1338, 157, 8, 0),
(156, 6976580, 'Mayb0', 53, 'Something Something about Mayb0', 4378, 1627, 1424, 171, 5, 0),
(157, 9850482, 'Mayb1', 53, 'Something Something about Mayb1', 4467, 1769, 1305, 193, 7, 0),
(158, 8654399, 'Mayb2', 53, 'Something Something about Mayb2', 4435, 1612, 1465, 175, 9, 0),
(159, 4272550, 'Saab0', 54, 'Something Something about Saab0', 4367, 1607, 1417, 159, 8, 0),
(160, 7003922, 'Saab1', 54, 'Something Something about Saab1', 4500, 1716, 1394, 183, 9, 0),
(161, 6374987, 'Saab2', 54, 'Something Something about Saab2', 4395, 1619, 1309, 189, 6, 0),
(162, 8277396, 'Forc0', 55, 'Something Something about Forc0', 4380, 1700, 1390, 197, 6, 0),
(163, 4430599, 'Forc1', 55, 'Something Something about Forc1', 4422, 1634, 1393, 165, 9, 0),
(164, 9548728, 'Forc2', 55, 'Something Something about Forc2', 4500, 1611, 1332, 175, 8, 0),
(165, 7369924, 'DR M0', 56, 'Something Something about DR M0', 4300, 1716, 1317, 157, 9, 0),
(166, 5719624, 'DR M1', 56, 'Something Something about DR M1', 4412, 1663, 1437, 188, 6, 0),
(167, 8875124, 'DR M2', 56, 'Something Something about DR M2', 4421, 1686, 1418, 200, 6, 0),
(168, 9727535, 'GAZ0', 57, 'Something Something about GAZ0', 4449, 1708, 1475, 198, 6, 0),
(169, 2139717, 'GAZ1', 57, 'Something Something about GAZ1', 4447, 1719, 1462, 182, 7, 0),
(170, 4726638, 'GAZ2', 57, 'Something Something about GAZ2', 4318, 1794, 1428, 160, 8, 0),
(171, 2256740, 'Stud0', 58, 'Something Something about Stud0', 4491, 1710, 1402, 160, 6, 0),
(172, 4887362, 'Stud1', 58, 'Something Something about Stud1', 4381, 1670, 1313, 164, 5, 0),
(173, 1526172, 'Stud2', 58, 'Something Something about Stud2', 4331, 1640, 1418, 172, 6, 0),
(174, 1550520, 'smar0', 59, 'Something Something about smar0', 4445, 1676, 1319, 161, 6, 0),
(175, 6455500, 'smar1', 59, 'Something Something about smar1', 4325, 1779, 1414, 151, 6, 0),
(176, 1388445, 'smar2', 59, 'Something Something about smar2', 4351, 1789, 1359, 166, 7, 0),
(177, 9581025, 'Prod0', 60, 'Something Something about Prod0', 4459, 1690, 1459, 168, 8, 0),
(178, 6601610, 'Prod1', 60, 'Something Something about Prod1', 4359, 1648, 1356, 173, 8, 0),
(179, 9673021, 'Prod2', 60, 'Something Something about Prod2', 4485, 1734, 1494, 188, 8, 0),
(180, 6617983, 'GTA 0', 61, 'Something Something about GTA 0', 4366, 1675, 1412, 167, 9, 0),
(181, 3286554, 'GTA 1', 61, 'Something Something about GTA 1', 4357, 1683, 1385, 178, 8, 0),
(182, 4324522, 'GTA 2', 61, 'Something Something about GTA 2', 4449, 1614, 1460, 155, 7, 0),
(183, 6299762, 'Ulti0', 62, 'Something Something about Ulti0', 4428, 1702, 1348, 187, 7, 0),
(184, 2498157, 'Ulti1', 62, 'Something Something about Ulti1', 4430, 1713, 1425, 170, 6, 0),
(185, 9377303, 'Ulti2', 62, 'Something Something about Ulti2', 4324, 1673, 1399, 193, 8, 0),
(186, 7921684, 'Roll0', 63, 'Something Something about Roll0', 4478, 1723, 1403, 159, 8, 0),
(187, 1547591, 'Roll1', 63, 'Something Something about Roll1', 4300, 1688, 1337, 199, 9, 0),
(188, 3705924, 'Roll2', 63, 'Something Something about Roll2', 4404, 1800, 1463, 198, 5, 0),
(189, 6963077, 'AC P0', 64, 'Something Something about AC P0', 4307, 1640, 1362, 198, 8, 0),
(190, 5958570, 'AC P1', 64, 'Something Something about AC P1', 4331, 1723, 1363, 186, 9, 0),
(191, 3685781, 'AC P2', 64, 'Something Something about AC P2', 4362, 1773, 1420, 172, 5, 0),
(192, 2432872, 'AB V0', 65, 'Something Something about AB V0', 4386, 1601, 1331, 151, 7, 0),
(193, 7887452, 'AB V1', 65, 'Something Something about AB V1', 4340, 1759, 1438, 195, 9, 0),
(194, 3818879, 'AB V2', 65, 'Something Something about AB V2', 4377, 1629, 1396, 162, 9, 0),
(195, 3682330, 'Lote0', 66, 'Something Something about Lote0', 4421, 1762, 1404, 174, 6, 0),
(196, 2650814, 'Lote1', 66, 'Something Something about Lote1', 4346, 1719, 1341, 158, 8, 0),
(197, 9038486, 'Lote2', 66, 'Something Something about Lote2', 4330, 1679, 1479, 192, 5, 0),
(198, 3046769, 'Hond0', 67, 'Something Something about Hond0', 4406, 1760, 1486, 155, 8, 0),
(199, 4567935, 'Hond1', 67, 'Something Something about Hond1', 4351, 1750, 1441, 177, 9, 0),
(200, 9947237, 'Hond2', 67, 'Something Something about Hond2', 4441, 1794, 1372, 182, 6, 0),
(201, 5945688, 'Volk0', 68, 'Something Something about Volk0', 4348, 1615, 1346, 198, 9, 0),
(202, 9805210, 'Volk1', 68, 'Something Something about Volk1', 4309, 1722, 1495, 159, 5, 0),
(203, 6387830, 'Volk2', 68, 'Something Something about Volk2', 4341, 1774, 1305, 177, 8, 0),
(204, 123, 'asdfghj', 1, 'asdfasdfadfasdf', 4421, 1733, 1469, 170, 7, 0),
(206, 1234567890, 'merc5', 1, 'asdfsfff', 3, 3, 3, 3, 3, 0),
(207, 1, 'g', 2, '1', 1, 1, 1, 1, 1, 1),
(208, 1, '1', 1, '1', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE `repairs` (
  `repairID` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `productID` int(11) NOT NULL,
  `branchID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repairs`
--

INSERT INTO `repairs` (`repairID`, `price`, `detail`, `productID`, `branchID`, `customerID`, `date`) VALUES
(1, 100, 'asdf', 1, 1, 1, '2017-11-28 21:13:11'),
(2, 123, 'safadsfasdf', 1, 1, 4, '2017-11-28 21:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleID`, `name`) VALUES
(0, 'Customer'),
(1, 'Staff'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerID` int(11) NOT NULL,
  `branchID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesID`, `productID`, `date`, `customerID`, `branchID`) VALUES
(2, 1, '2017-11-27', 1, 1),
(3, 1, '2017-11-28', 5, 2),
(4, 1, '2017-11-26', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `branchID` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` int(1) NOT NULL,
  `password` varchar(20) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `branchID`, `fName`, `lName`, `username`, `email`, `type`, `password`, `disabled`) VALUES
(1, 1, 'Too', 'Too', 'too', 'asdf', 2, '0', 0),
(3, 1, '1', '1', '1', '1', 1, '1', 0),
(4, 1, 'asdf', 'g', 'g', 'g', 1, 'g', 0),
(6, 2, 'tester', 'tester', 'tester', 'tester', 2, 't', 1),
(7, 1, 'tong', 'tong', 't', 't', 1, 't', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchID`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `loginlog`
--
ALTER TABLE `loginlog`
  ADD PRIMARY KEY (`logID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`repairID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `loginlog`
--
ALTER TABLE `loginlog`
  MODIFY `logID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT for table `repairs`
--
ALTER TABLE `repairs`
  MODIFY `repairID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
