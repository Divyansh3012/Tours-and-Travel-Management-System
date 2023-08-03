-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2022 at 07:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `aid` int(15) NOT NULL,
  `aname` varchar(25) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apwd` varchar(25) NOT NULL,
  `acontact` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`aid`, `aname`, `aemail`, `apwd`, `acontact`) VALUES
(1, 'dev ambedkar', 'dev@gmail.com', 'devisnotcool', '142342'),
(2, 'joel chacko', 'joelchacko710@gmail.com', 'joeliscool', '21551253'),
(3, 'divyansh trivedi', 'divyansht957@gmail.com', 'divyanshiscool', '1531351'),
(4, 'nishil soni', 'nishilsonisoni24@gmail.com', 'nishilisnotcool', '5444784');

-- --------------------------------------------------------

--
-- Table structure for table `bookingtbl`
--

CREATE TABLE `bookingtbl` (
  `Bid` int(15) NOT NULL,
  `Bdate` varchar(15) NOT NULL,
  `uid` int(15) NOT NULL,
  `Tickettype` varchar(20) NOT NULL,
  `TotalAmount` varchar(20) NOT NULL,
  `Bstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingtbl`
--

INSERT INTO `bookingtbl` (`Bid`, `Bdate`, `uid`, `Tickettype`, `TotalAmount`, `Bstatus`) VALUES
(1, '25/12/21', 1, 'Bus ticket', '2000', 'Active'),
(2, '26/12/21', 2, 'Train ticket', '1500', 'Cancel'),
(3, '27/12/21', 3, 'Tour ticket', '4000', 'Confirm'),
(4, '28/12/21', 4, 'Hotel ticket', '3000', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `busdtls`
--

CREATE TABLE `busdtls` (
  `Bid` int(15) NOT NULL,
  `Bfrom` varchar(20) NOT NULL,
  `Bto` varchar(15) NOT NULL,
  `B-Atime` varchar(15) NOT NULL,
  `B-Dtime` varchar(15) NOT NULL,
  `Acharges` varchar(10) NOT NULL,
  `Ccharges` varchar(10) NOT NULL,
  `Bdtls` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `busdtls`
--

INSERT INTO `busdtls` (`Bid`, `Bfrom`, `Bto`, `B-Atime`, `B-Dtime`, `Acharges`, `Ccharges`, `Bdtls`) VALUES
(1, 'Ahmedabad', 'mumbai central', '9pm', '6am', '1500', '400', 'Bus will be arrive at destination at 6 am .\r\nFood packets will be provided in bus itself throughout the journey when needed. \r\nBus will leave the customer at mumbai central.'),
(3, 'Vadodara', 'Mumbai', '7 am', '4 pm', '3000', '1000', 'We wish you a happy journey');

-- --------------------------------------------------------

--
-- Table structure for table `hoteltbl`
--

CREATE TABLE `hoteltbl` (
  `hid` int(15) NOT NULL,
  `hname` varchar(25) NOT NULL,
  `hemail` text NOT NULL,
  `hpwd` varchar(15) NOT NULL,
  `hstar` varchar(8) NOT NULL,
  `haddress` varchar(250) NOT NULL,
  `hcity` varchar(10) NOT NULL,
  `hpin` varchar(12) NOT NULL,
  `hphoto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoteltbl`
--

INSERT INTO `hoteltbl` (`hid`, `hname`, `hemail`, `hpwd`, `hstar`, `haddress`, `hcity`, `hpin`, `hphoto`) VALUES
(1, 'The Taj Mahal Palace', 'tajmahal@gmail.com', 'taj1212', '5', 'Apollo Bandar,Collaba,Mumbai,Maharashtra', 'Mumbai', '400001', '\"C:\\xampp\\htdocs\\project\\hotel images\\h1.jpg\"\r\n\"C:\\xampp\\htdocs\\project\\hotel images\\h2.webp\"'),
(2, 'The Oberoi Trident', 'oberoitrident@gmail.com', 'oberoi3434', '5 star', 'Collaba , Mumabai, Maharashtra', 'Mumbai', '99988', ''),
(3, 'The Landmark', 'landmark@gmail.coom', 'landmark0101', '5 star', 'Adajan, Surat, Gujarat', 'Surat', '390002', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pid` int(15) NOT NULL,
  `Pdate` date NOT NULL,
  `Uid` int(15) NOT NULL,
  `Amount` varchar(15) NOT NULL,
  `Pstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pid`, `Pdate`, `Uid`, `Amount`, `Pstatus`) VALUES
(1, '2021-12-25', 1, '2000', 'Paid'),
(2, '2021-12-27', 2, '3000', 'Draft'),
(3, '2021-12-27', 3, '3500', 'Draft'),
(4, '2021-12-09', 1, '400000', 'Active'),
(5, '2021-11-17', 5, '500000', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tourtbl`
--

CREATE TABLE `tourtbl` (
  `tid` int(15) NOT NULL,
  `tname` varchar(25) NOT NULL,
  `temail` varchar(30) NOT NULL,
  `tpwd` varchar(15) NOT NULL,
  `ttype` varchar(50) NOT NULL,
  `tdays` varchar(10) NOT NULL,
  `tnight` varchar(10) NOT NULL,
  `tcharges` varchar(15) NOT NULL,
  `tdetails` varchar(800) NOT NULL,
  `tfiles` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourtbl`
--

INSERT INTO `tourtbl` (`tid`, `tname`, `temail`, `tpwd`, `ttype`, `tdays`, `tnight`, `tcharges`, `tdetails`, `tfiles`) VALUES
(1, 'Patel Tours', 'patel@gmail.com', '3434', 'Business type', '5 days', '4 nights', '9000', 'Here ,we have 5 days and 4 nights tour package , as per the schedule we will have conference on first day, on second we will have site visit and on third we have meeting with chief executive officer and on last we will have dinner and late night party.\r\nAnd on 5th day we will about to go back.', ''),
(2, 'Ganpat Tours', 'ganpat@gmail.com', 'ganpat3232', 'Weekend Tours', '3 days', '2 nights', '4000 per', 'Here, we will have 3 days and 2 nights weekend trip, that serves you a fully enjoyable weekend \r\nOur venue will be CTM Circle Ahmedabad at 9pm,we will provide food packets in between the journey and also dinner, lunch and breakfast included.\r\nIn this tour we will have visit  at most visited places l', ''),
(3, 'Sainath Tours', 'sainath@gmail.com', 'sainath22', 'Tourism', '4 days ', '3 nights', '24000', 'Here, we will visit at Gir Forest, Gujarat \r\nOur venue will be at CTM Circle, Ahmedabad \r\nThis tour provides you with dinner and lunch at exact time and the food packets will be provided throughout the tour when needed.\r\nwe will have the jungle safari ,forest scene visit, jeep safari in jungle this ', '');

-- --------------------------------------------------------

--
-- Table structure for table `tour_operator`
--

CREATE TABLE `tour_operator` (
  `toperatorid` int(15) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `tcontact` varchar(15) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `tpwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `traindtls`
--

CREATE TABLE `traindtls` (
  `Tid` int(15) NOT NULL,
  `Tfrom` varchar(15) NOT NULL,
  `Tto` varchar(15) NOT NULL,
  `T-Atime` varchar(15) NOT NULL,
  `T-Dtime` varchar(15) NOT NULL,
  `Acharges` varchar(10) NOT NULL,
  `Ccharges` varchar(10) NOT NULL,
  `tdtls` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `traindtls`
--

INSERT INTO `traindtls` (`Tid`, `Tfrom`, `Tto`, `T-Atime`, `T-Dtime`, `Acharges`, `Ccharges`, `tdtls`) VALUES
(1, 'Ahmedabad', 'Mumbai Central', '6pm', '12am', '1200', '400', 'Train will be depature at 6pm.\r\nDinner is provided to all at 8pm.\r\nTrain will be arrive at Mumbai Central at 12am\r\ntrain will be three tier AC.'),
(2, 'Ahemdabad', 'Jodhpur JN.', '7pm', '4am', '1500', '400', 'Train will be depature at 7pm. And it will be arrive at jodhpur junction on the next day morning at 4am.\r\nthe dinner will be provided in train itself at 8pm.\r\ntrin will be three tier AC.'),
(3, 'Vadodara', 'Delhi', '7 am', '3 pm', '5000', '2000', 'The Tejas Express. The superfast express with luxury makes your journey perfect. The train is always on time and has variety of cuisine. With ultra luxury which includes a whole coach which transformed into a 5 star restaurant which makes your dinner more authentic.'),
(4, 'Vadodara', 'Pune', '6 am', '1 am', '5000', '2000', 'Very comfortable and  is very relaxing with affordable prices. IRCTC approved\r\n'),
(5, 'Mumbai', 'Delhi', '2 pm', '12 pm', '8000', '3000', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `uid` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `upwd` varchar(25) NOT NULL,
  `ucontact` varchar(10) NOT NULL,
  `ucity` varchar(10) NOT NULL,
  `uadd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`uid`, `uname`, `uemail`, `upwd`, `ucontact`, `ucity`, `uadd`) VALUES
(1, 'harry patel', 'projectambekar201@gmail.com', '123123', '9825034260', 'vadodara', 'B-5 shreepad nagar ground,opp '),
(2, 'Joel christian', 'joel220@gmail.com', '3434', '992787877', 'Vadodara', 'C-604, Sky Harmony, Near Ambalal Park, Amit Nagar, Vadoara.\r\n'),
(3, 'Raghav Kumar', 'raghav07@gmail.com', 'raghaviscool', '8786564329', 'Ahemdabad', 'A-51, Om Bungalows, Vastrapur, Ahemdabad.'),
(4, 'Ambekar Dev', 'projectambekar@gmail.com', '8036', '8786564387', 'Vadodara', 'C-301, Sardar nagar Society, Nizampura, Vadodara'),
(5, 'Dhirav Joshi', 'dhirav@gmail.com', '3129', '67543578u7', 'Vadodara', 'C-09, Park Avenue, Vadodara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bookingtbl`
--
ALTER TABLE `bookingtbl`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `busdtls`
--
ALTER TABLE `busdtls`
  ADD PRIMARY KEY (`Bid`);

--
-- Indexes for table `hoteltbl`
--
ALTER TABLE `hoteltbl`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `tourtbl`
--
ALTER TABLE `tourtbl`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `tour_operator`
--
ALTER TABLE `tour_operator`
  ADD PRIMARY KEY (`toperatorid`),
  ADD UNIQUE KEY `temail` (`temail`);

--
-- Indexes for table `traindtls`
--
ALTER TABLE `traindtls`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `aid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bookingtbl`
--
ALTER TABLE `bookingtbl`
  MODIFY `Bid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `busdtls`
--
ALTER TABLE `busdtls`
  MODIFY `Bid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hoteltbl`
--
ALTER TABLE `hoteltbl`
  MODIFY `hid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Pid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tourtbl`
--
ALTER TABLE `tourtbl`
  MODIFY `tid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_operator`
--
ALTER TABLE `tour_operator`
  MODIFY `toperatorid` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traindtls`
--
ALTER TABLE `traindtls`
  MODIFY `Tid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
