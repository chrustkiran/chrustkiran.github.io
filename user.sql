-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 06:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(2) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`) VALUES
(1, 'This is located in Trincomalee.'),
(2, 'This is located in Trincomalee.');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `datee` varchar(15) NOT NULL,
  `class` varchar(10) NOT NULL,
  `attend` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`datee`, `class`, `attend`) VALUES
('2017-07-14', '10A', 'a:3:{s:5:\"1500S\";s:1:\"1\";s:5:\"1502S\";s:1:\"1\";s:5:\"1506S\";s:1:\"1\";}'),
('2017-07-15', '10A', 'a:3:{s:5:\"1500S\";s:1:\"1\";s:5:\"1502S\";s:1:\"1\";s:5:\"1506S\";s:1:\"0\";}');

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `id` int(12) NOT NULL,
  `club` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`id`, `club`, `info`) VALUES
(5, 'Chess', ''),
(6, 'Basket ball', '');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `username` varchar(100) NOT NULL,
  `term1` text NOT NULL,
  `term2` text NOT NULL,
  `term3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`username`, `term1`, `term2`, `term3`) VALUES
('1500S', 'a:10:{s:5:\"Tamil\";s:3:\"100\";s:5:\"Maths\";s:3:\"100\";s:8:\"Religion\";s:2:\"50\";s:9:\"Tamil-Lit\";s:3:\"100\";s:2:\"IT\";s:2:\"90\";s:7:\"History\";s:2:\"80\";s:7:\"Science\";s:2:\"70\";s:7:\"English\";s:2:\"52\";s:8:\"Commerce\";s:2:\"36\";s:5:\"total\";i:678;}', 'a:10:{s:5:\"Tamil\";s:2:\"50\";s:5:\"Maths\";s:0:\"\";s:8:\"Religion\";s:0:\"\";s:9:\"Tamil-Lit\";s:0:\"\";s:2:\"IT\";s:0:\"\";s:7:\"History\";s:0:\"\";s:7:\"Science\";s:0:\"\";s:7:\"English\";s:0:\"\";s:8:\"Commerce\";s:0:\"\";s:5:\"total\";i:50;}', 'a:10:{s:5:\"Tamil\";s:0:\"\";s:5:\"Maths\";s:0:\"\";s:8:\"Religion\";s:0:\"\";s:9:\"Tamil-Lit\";s:0:\"\";s:2:\"IT\";s:0:\"\";s:7:\"History\";s:0:\"\";s:7:\"Science\";s:0:\"\";s:7:\"English\";s:0:\"\";s:8:\"Commerce\";s:0:\"\";s:5:\"total\";i:0;}'),
('1502S', 'a:10:{s:5:\"Tamil\";s:2:\"50\";s:5:\"Maths\";s:2:\"50\";s:8:\"Religion\";s:2:\"50\";s:9:\"Tamil-Lit\";s:2:\"40\";s:2:\"IT\";s:2:\"40\";s:7:\"History\";s:2:\"50\";s:7:\"Science\";s:2:\"50\";s:7:\"English\";s:2:\"40\";s:8:\"Commerce\";s:2:\"80\";s:5:\"total\";i:450;}', 'a:10:{s:5:\"Tamil\";s:0:\"\";s:5:\"Maths\";s:0:\"\";s:8:\"Religion\";s:0:\"\";s:9:\"Tamil-Lit\";s:0:\"\";s:2:\"IT\";s:0:\"\";s:7:\"History\";s:0:\"\";s:7:\"Science\";s:0:\"\";s:7:\"English\";s:0:\"\";s:8:\"Commerce\";s:0:\"\";s:5:\"total\";i:0;}', 'a:10:{s:5:\"Tamil\";s:0:\"\";s:5:\"Maths\";s:0:\"\";s:8:\"Religion\";s:0:\"\";s:9:\"Tamil-Lit\";s:0:\"\";s:2:\"IT\";s:0:\"\";s:7:\"History\";s:0:\"\";s:7:\"Science\";s:0:\"\";s:7:\"English\";s:0:\"\";s:8:\"Commerce\";s:0:\"\";s:5:\"total\";i:0;}');

-- --------------------------------------------------------

--
-- Table structure for table `examinfo`
--

CREATE TABLE `examinfo` (
  `class` varchar(10) NOT NULL,
  `term1` text NOT NULL,
  `term2` text NOT NULL,
  `term3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinfo`
--

INSERT INTO `examinfo` (`class`, `term1`, `term2`, `term3`) VALUES
('10', 'a:9:{s:5:\"Tamil\";s:10:\"2017-07-07\";s:5:\"Maths\";s:0:\"\";s:8:\"Religion\";s:0:\"\";s:9:\"Tamil-Lit\";s:0:\"\";s:2:\"IT\";s:0:\"\";s:7:\"History\";s:0:\"\";s:7:\"Science\";s:0:\"\";s:7:\"English\";s:0:\"\";s:8:\"Commerce\";s:0:\"\";}', 'a:9:{s:5:\"Tamil\";s:0:\"\";s:5:\"Maths\";s:0:\"\";s:8:\"Religion\";s:0:\"\";s:9:\"Tamil-Lit\";s:0:\"\";s:2:\"IT\";s:0:\"\";s:7:\"History\";s:0:\"\";s:7:\"Science\";s:0:\"\";s:7:\"English\";s:0:\"\";s:8:\"Commerce\";s:0:\"\";}', 'a:9:{s:5:\"Tamil\";s:0:\"\";s:5:\"Maths\";s:0:\"\";s:8:\"Religion\";s:0:\"\";s:9:\"Tamil-Lit\";s:0:\"\";s:2:\"IT\";s:0:\"\";s:7:\"History\";s:0:\"\";s:7:\"Science\";s:0:\"\";s:7:\"English\";s:0:\"\";s:8:\"Commerce\";s:0:\"\";}');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(255) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `reciever` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `sender`, `reciever`, `message`) VALUES
(1, '1501S', '1500S', 'Hi looking awesome?'),
(2, '1500S', '1501S', 'Haha Thank you :)'),
(4, '1501S', '1500S', 'You are welcome'),
(5, '1500S', '1501S', ':) whats up?'),
(6, '1500S', '1501S', 'OK! now what u doing?'),
(7, '1501S', '1500S', 'Developing this'),
(9, '1501S', '1500S', 'And u?'),
(10, '1500S', '1501S', 'I am doing nothing'),
(11, '1501S', '1500S', 'Haha Ok!'),
(12, '1501S', '1500S', 'Mm'),
(13, '1501S', '1500S', 'Mm'),
(14, '1501S', '1500S', 'Mmm'),
(15, '1501S', '1500S', 'Hey!'),
(16, '1500S', '1506S', 'hi'),
(17, '1500T', '1501T', 'Hi :)');

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `ind` int(4) NOT NULL,
  `reciever` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date_` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`ind`, `reciever`, `message`, `date_`) VALUES
(1, 'alls', 'Hey Students, I am very happy to see u all :)', '10-07-2017 01:06:28p'),
(2, 'alls', 'Next Notification', '10-07-2017 01:07:40p'),
(3, '10A', 'is this 10A?', '10-07-2017 01:53:01p'),
(4, 'alls', 'Hi student', '14-07-2017 08:26:01a'),
(5, '10A', 'Gud mrg', '14-07-2017 08:27:52a');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(5) NOT NULL,
  `class` varchar(10) NOT NULL,
  `timetable` text NOT NULL,
  `teacher` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `class`, `timetable`, `teacher`) VALUES
(0, '10A', 'a:8:{i:0;a:5:{i:0;s:5:\"Maths\";i:1;s:5:\"Tamil\";i:2;s:8:\"Religion\";i:3;s:7:\"English\";i:4;s:0:\"\";}i:1;a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}i:2;a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}i:3;a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}i:4;a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}i:5;a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}i:6;a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}i:7;a:5:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";}}', '1500T'),
(1, '2A', '', '1504T'),
(2, '2B', '', '1503T'),
(3, '1A', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `class` varchar(100) NOT NULL,
  `club` varchar(100) NOT NULL,
  `dp` longblob NOT NULL,
  `exist` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `username`, `password`, `Address`, `class`, `club`, `dp`, `exist`) VALUES
(1, 'Chrustkiran', '1500S', '1234', '', '10A', 'Chess', '', 0),
(6, '', '1501S', '123', '', '11B', 'Jamuna', '', 0),
(9, '', '1500T', '123', '', '10A', 'Ganga', '', 0),
(10, '', '1502S', '123', '', '2A', 'Jamnua', '', 0),
(11, '', '1501T', '123', '', '11B', 'Jamuna', '', 0),
(31, '', '1503T', '123', '', '2B', 'Ganga', '', 0),
(35, '', '1504S', '123', '', '1B', 'Jamuna', '', 0),
(36, '', '1504T', '123', '', '2A', 'Jamuna', '', 0),
(37, '', '1504S', '123', '', '2A', 'Ganga', '', 0),
(40, '', '1500P', '123', '', '10A', '', '', 0),
(41, '', '1506S', '123', '', '10A', 'Ganga', '', 0),
(42, '', '1506P', '123', '', '10A', 'Ganga', '', 0),
(43, '', 'Admin', '123', '', '', '', '', 0),
(44, '', '1508S', '123', '', '10A', '', '', 1),
(45, '', '1508P', '123', '', '10A', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`datee`);

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `examinfo`
--
ALTER TABLE `examinfo`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`ind`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `club`
--
ALTER TABLE `club`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `ind` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
