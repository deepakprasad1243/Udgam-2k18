-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2018 at 09:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Ename` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Name`, `Email`, `Phone`, `Ename`, `id`) VALUES
('xkjhgkgvggz', 'kdjghanks@gmail.com', '987467463', 'k.jhxgjmvpz;sd/lkf', 1),
('xkjhgkgvggz', 'kdjghanks@gmail.com', '987467463', 'k.jhxgjmvpz;sd/lkf', 2),
('xkjhgkgvggz', 'kdjghanks@gmail.com', '987467463', 'k.jhxgjmvpz;sd/lkf', 3),
('xkjhgkgvggz', 'kdjghanks@gmail.com', '987467463', 'k.jhxgjmvpz;sd/lkf', 4),
('xkjhgkgvggz', 'kdjghanks@gmail.com', '987467463', 'k.jhxgjmvpz;sd/lkf', 5),
('xkjhgkgvggz', 'kdjghanks@gmail.com', '987467463', 'k.jhxgjmvpz;sd/lkf', 6);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` bigint(20) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Email`, `Number`, `Subject`, `Message`) VALUES
(3, 'djgfhikdzghf', 'sjdf@gmail.com', 97986546354, 'sefuflitgljfk', 'rskjdghlkjfas'),
(4, 'djgfhikdzghf', 'sjdf@gmail.com', 97986546354, 'sefuflitgljfk', 'rskjdghlkjfas'),
(5, 'djgfhikdzghf', 'sjdf@gmail.com', 97986546354, 'sefuflitgljfk', 'rskjdghlkjfas'),
(6, 'djgfhikdzghf', 'sjdf@gmail.com', 97986546354, 'sefuflitgljfk', 'rskjdghlkjfas'),
(7, 'djgfhikdzghf', 'sjdf@gmail.com', 97986546354, 'sefuflitgljfk', 'rskjdghlkjfas'),
(8, 'djgfhikdzghf', 'sjdf@gmail.com', 97986546354, 'sefuflitgljfk', 'rskjdghlkjfas'),
(9, 'djgfhikdzghf', 'sjdf@gmail.com', 97986546354, 'sefuflitgljfk', 'rskjdghlkjfas'),
(10, 'djgfhikdzghf', 'sjdf@gmail.com', 97986546354, 'sefuflitgljfk', 'rskjdghlkjfas'),
(11, 'asasqssqs', 'dwdq@njsnq.cbdhc', 212222, 'qsqasqs', 'qwwqwqw'),
(12, 'asasqssqs', 'dwdq@njsnq.cbdhc', 212222, 'qsqasqs', 'qwwqwqw'),
(13, 'ufyjsgkdzjg', 'seafjdgha@gmail.com', 86416531, 'krgdshj', 'asejgahnkvsj'),
(14, 'ufyjsgkdzjg', 'seafjdgha@gmail.com', 86416531, 'krgdshj', 'asejgahnkvsj'),
(15, 'zzmfgassakfbcj', 'kvgjszfb@gmail.com', 97465341751, 'k,sdgfakjkd', 'sdnfvajmDZfbcklSJfbc'),
(16, 'zzmfgassakfbcj', 'kvgjszfb@gmail.com', 97465341751, 'k,sdgfakjkd', 'sdnfvajmDZfbcklSJfbc'),
(17, 'zzmfgassakfbcj', 'kvgjszfb@gmail.com', 97465341751, 'k,sdgfakjkd', 'sdnfvajmDZfbcklSJfbc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
