-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 04:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Uname` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `catagory` varchar(10) NOT NULL,
  `dlt` int(11) NOT NULL,
  `AvailalbeD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Uname`, `password`, `catagory`, `dlt`, `AvailalbeD`) VALUES
('ksj', 'jfdx', 'user', 0, 0),
('hhgf gg', 'jgf hf', 'user', 0, 0),
('hhgf gg', 'jgf hf', 'user', 0, 0),
('hhgf gg', 'jgf hf', 'user', 0, 0),
('hhgf gg', 'jgf hf', 'user', 0, 0),
('hhgf gg', 'jgf hf', 'user', 0, 0),
('hhgf gg', 'mgfdch', 'user', 0, 0),
('hhgf gg', 'mgfdch', 'user', 0, 0),
('kjjg j', 'jhg v', 'user', 0, 0),
('kjjg j', 'jhg v', 'user', 0, 0),
('kjjg j', 'jhg v', 'user', 0, 0),
('kjjg j', 'jhg v', 'user', 0, 0),
('mg jh', 'kjg ', 'user', 0, 0),
('ok', 'ok', 'user', 0, 0),
('dd', 'dd', 'user', 0, 0),
('KSJ', '1234', 'user', 0, 0),
('ksjb', 'abcd', 'user', 0, 0),
('ooo', 'oo', 'user', 0, 0),
('joy', '123', 'user', 0, 0),
('done', 'do', 'user', 0, 0),
('o', 'o', 'user', 0, 0),
('dd', 'd', 'user', 0, 0),
('ok', 'ok', 'user', 0, 0),
('asdfghjk', 'asdfgh', 'user', 0, 0),
('hasan', '123456', 'user', 0, 0),
('kabila', 'madari', 'user', 0, 0),
('Sabila', 'bokachoda', 'user', 0, 0),
('hellof', 'hello1', 'user', 0, 0),
('donee', '123456', 'user', 0, 0),
('Alpona', '123456', 'user', 0, 0),
('Rafee', 'hasann', 'user', 0, 0),
('Lamiaa', 'kaaaaa', 'user', 0, 0),
('Tasnim', 'helloo', 'user', 0, 0),
('Aniik', 'hasanok', 'user', 0, 0),
('Asifa', '123456', 'user', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Uname` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Blood` varchar(10) NOT NULL,
  `Birthdate` varchar(22) NOT NULL,
  `Available` int(11) NOT NULL,
  `Lastdonated` date NOT NULL,
  `Answer` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uname`, `Name`, `Email`, `Mobile`, `District`, `Gender`, `Blood`, `Birthdate`, `Available`, `Lastdonated`, `Answer`) VALUES
('mg jh', 'j gbf', 'j,j gbj', 'y vj', 'dhaka', 'male', 'O+', '1995-11-25', 0, '0000-00-00', 'Yes'),
('dd', 'hasan', 'hasanarko388@yahoo.,com', '01282828', 'barisal', 'male', 'A+', '2010-01-01', 1, '0000-00-00', 'Yes'),
('dd', 'dd', 'dd', 'dd', 'dhaka', 'male', 'A+', '1998-01-01', 0, '0000-00-00', 'Yes'),
('KSJ', 'Kowshik Sarker Joy', 'kjsarker1@gmail.com', '01767823237', 'dhaka', 'male', 'O+', '1995-11-25', 0, '0000-00-00', 'Yes'),
('ksjb', 'sdbnkl', 'ghjjhg', '45678', 'dhaka', 'male', 'O+', '1995-11-25', 0, '0000-00-00', 'Yes'),
('ooo', 'hfhf', 'hhf', 'hfhfffh', 'barisal', 'female', 'O+', '1995-11-25', 0, '0000-00-00', 'Yes'),
('joy', 'Kowshik Sarker Joy', 'kjsarker1@gmail.com', '01767823237', 'dhaka', 'male', 'O+', '1995-11-25', 0, '0000-00-00', 'Yes'),
('done', 'donee', 'dod', '01282828', 'gazipur', 'female', 'AB+', '2015-01-02', 0, '0000-00-00', 'Yes'),
('o', 'o', 'o', 'o', 'dhaka', 'male', 'A+', '1996-01-21', 0, '0000-00-00', 'Yes'),
('dd', 'sdbnkl', 'dd', 'dd', 'dhaka', 'male', 'A+', '1998-01-01', 0, '0000-00-00', 'Yes'),
('dd', 'ok', 'ok', 'ok', 'dhaka', 'male', 'A+', '2010-01-01', 1, '0000-00-00', 'Yes'),
('asdfghjk', 'jhgfv', 'yjhgfds', 'jhgv', 'dhaka', 'male', '', '', 0, '0000-00-00', ''),
('hasan', 'qq', 'qq', 'qq', 'dhaka', 'male', '', '', 0, '0000-00-00', ''),
('kabila', 'dfghjk', 'fdfyxhj', 'dfghjkl', 'dhaka', 'male', '', '', 0, '0000-00-00', ''),
('Sabila', 'Sabila Noor', 'hdfjdk', '4567890', 'dhaka', 'male', 'B-', '1966/02/07', 0, '0000-00-00', 'Yes'),
('hellof', 'aa', 'aa', 'aa', 'dhaka', 'female', 'O-', '1999-01-01', 0, '2018-04-02', 'Yes'),
('donee', 'ok', 'aa', '12345678910', 'dhaka', 'male', 'AB+', '1999-12-02', 0, '0000-00-00', 'Yes'),
('Alpona', 'alpona ahamed', 'hshshs', '12345678910', 'dhaka', 'female', 'A-', '2018-04-21', 0, '2018-04-26', 'Yes'),
('Rafee', 'Rafi ahmed', 'hahaha', '01521259431', 'dhaka', 'male', '', '', 0, '0000-00-00', ''),
('Lamiaa', 'Lamia islam', 'ajajaj', '01767823237', 'tangail', 'female', '', '', 0, '0000-00-00', ''),
('Tasnim', 'Tasnim Akter', 'done', '01921212121', 'gazipur', 'female', '', '', 0, '0000-00-00', ''),
('Aniik', 'Anik Ahmed', 'aaaaaa', '01786264720', 'tangail', 'male', 'A-', '2018-01-26', 0, '0000-00-00', 'Yes'),
('Asifa', 'Asifa anik', 'helloo', '01821273721', 'dhaka', 'female', 'O+', '2018-04-22', 0, '2018-04-02', 'Yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
