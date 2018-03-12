-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2018 at 11:44 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ccasd`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `image`) VALUES
(13, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(14, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(15, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(16, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(17, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(18, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(19, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(20, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(21, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(22, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(23, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(24, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(25, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(26, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(27, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(28, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(29, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(30, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(31, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(32, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(33, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(34, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(35, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(36, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(37, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(38, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(39, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(40, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(41, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(42, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(43, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(44, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(45, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(46, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(47, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC'),
(48, 'dca72b.png', 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAADIAQMAAAAwS4omAAAAA1BMVEXcpytuEyLgAAAAG0lEQVRIie3BMQEAAADCoPVPbQwfoAAAAIC3AQ+gAAEq5xQCAAAAAElFTkSuQmCC');

-- --------------------------------------------------------

--
-- Table structure for table `systemcred`
--

CREATE TABLE `systemcred` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systemcred`
--

INSERT INTO `systemcred` (`id`, `fname`, `mname`, `lname`, `username`, `password`, `position`) VALUES
(1, '', '', '', 'admin', 'admin', 'admin'),
(2, '', '', '', 'employee', 'employee', 'employee'),
(4, 's', 's', 's', 's', 's', 'admin'),
(5, 'ghen', 'arquiza', 'arvesu', 'lani', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblfarmer`
--

CREATE TABLE `tblfarmer` (
  `ID` int(11) NOT NULL,
  `dateee` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brgy` varchar(50) NOT NULL,
  `area` int(11) NOT NULL,
  `crop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfarmer`
--

INSERT INTO `tblfarmer` (`ID`, `dateee`, `name`, `brgy`, `area`, `crop`) VALUES
(86, '30-01-2018', 'Emy', 'Bucal', 200, 'Corn'),
(87, '30-01-2018', 'Jana', 'Bucal', 150, 'Corn'),
(88, '30-01-2018', 'Ghen', 'Real', 25, 'Rice'),
(92, '2018-01-30', 'Juan Dela Cruz', 'Real', 120, 'Sitaw'),
(93, '2018-01-30', 'Ghen Arvesu', 'Bucal', 25, 'Rice'),
(94, '2018-02-02', 'ghen arvesu', 'Halang', 500, 'rice');

-- --------------------------------------------------------

--
-- Table structure for table `tblprocessing`
--

CREATE TABLE `tblprocessing` (
  `id` int(11) NOT NULL,
  `hex_val` char(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprocessing`
--

INSERT INTO `tblprocessing` (`id`, `hex_val`, `level`) VALUES
(1, 'dda72b', 'Low'),
(2, 'dba82b', 'Low'),
(3, 'dea62b', 'Low'),
(4, 'd4a32a', 'Low'),
(5, 'd7a32d', 'Low'),
(6, 'dca72b', 'Low'),
(7, 'ddaa2b', 'Low'),
(8, 'd7a630', 'Low'),
(9, 'e0a82d', 'Low'),
(10, 'daa72a', 'Low'),
(11, 'dfb030', 'Low'),
(12, 'd5a32a', 'Low'),
(13, 'dead2d', 'Low'),
(14, 'dba929', 'Low'),
(15, 'daa826', 'Low'),
(16, 'd8a62b', 'Low'),
(17, 'e1ab2b', 'Low'),
(18, 'daa72a', 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `tblresults`
--

CREATE TABLE `tblresults` (
  `id` int(11) NOT NULL,
  `sample` varchar(25) NOT NULL,
  `res_n` varchar(50) NOT NULL,
  `res_n_val` varchar(25) NOT NULL,
  `res_p` varchar(25) NOT NULL,
  `res_p_val` varchar(25) NOT NULL,
  `res_k` varchar(25) NOT NULL,
  `res_k_val` varchar(25) NOT NULL,
  `res_ph` varchar(25) NOT NULL,
  `resp_ph_val` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresults`
--

INSERT INTO `tblresults` (`id`, `sample`, `res_n`, `res_n_val`, `res_p`, `res_p_val`, `res_k`, `res_k_val`, `res_ph`, `resp_ph_val`) VALUES
(6, 'asd', '', '', 'Low', 'dca72b', '', '', '', ''),
(7, 'aaa', '', '', 'Low', 'dca72b', '', '', '', ''),
(8, '', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(9, 'acd', '', '', 'Low', 'dca72b', '', '', '', ''),
(10, 'aq', '', '', 'Low', 'dca72b', '', '', '', ''),
(11, '', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(12, 'tryyy', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(13, '', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(14, 'aaa', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(15, 'aaa', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(16, 'aaa', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(17, '23/2/2018', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(18, 'haaaay', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(19, 'plssss', 'Low', 'dca72b', '', '', '', '', '', ''),
(20, 'jusqqq', 'Low', 'dca72b', 'Low', 'dca72b', '', '', '', ''),
(21, 'gumana ka', '', 'dca72b', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `sample` varchar(25) NOT NULL,
  `res_n` varchar(50) NOT NULL,
  `res_n_val` varchar(25) NOT NULL,
  `res_p` varchar(25) NOT NULL,
  `res_p_val` varchar(25) NOT NULL,
  `res_k` varchar(25) NOT NULL,
  `res_k_val` varchar(25) NOT NULL,
  `res_ph` varchar(25) NOT NULL,
  `resp_ph_val` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logoutTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `username`, `userIp`, `loginTime`, `logoutTime`) VALUES
(1, 'admin', 0x3132372e302e302e31, '2018-03-12 09:44:45', ''),
(2, 'lani', 0x3132372e302e302e31, '2018-03-12 09:50:52', ''),
(3, 'admin', 0x3139322e3136382e312e32, '2018-03-12 10:31:04', ''),
(4, 'admin', 0x3132372e302e302e31, '2018-03-12 10:34:38', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `systemcred`
--
ALTER TABLE `systemcred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblprocessing`
--
ALTER TABLE `tblprocessing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresults`
--
ALTER TABLE `tblresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `systemcred`
--
ALTER TABLE `systemcred`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblfarmer`
--
ALTER TABLE `tblfarmer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tblprocessing`
--
ALTER TABLE `tblprocessing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblresults`
--
ALTER TABLE `tblresults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
