-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 12:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp2k16`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_title` varchar(150) NOT NULL,
  `article_body` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_path` varchar(300) NOT NULL,
  `created_at` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_body`, `user_id`, `image_path`, `created_at`) VALUES
(26, 'India vs England, Live Score 2nd ODI: England Captain Morgan Wins Toss, Opts To Bat ', 'ndia, riding high on confidence, will look to wrap up another series on their ongoing tour of the United Kingdom when they face England for the second One-day International at the Lord\'s cricket ground on Saturday. ', 1, 'http://localhost/First_CI_Procejct/upload/8v9jpb6_india-toss-second-odi_625x300_14_July_18.jpg', '2020-04-15 01:33:35'),
(25, 'GitHub Enterprise 2.14 is ‘open goodness’ behind an enterprise firewall', 'This latest version of the web-based code repository and version control system also of course now features collaborative functions, options for bug tracking and features related to task management — it is, a portal with many Wikis indeed.', 1, 'http://localhost/First_CI_Procejct/upload/git.png', '2020-04-15 01:33:35'),
(27, 'Asia\'s richest person: Reliance Jio founder Mukesh Ambani topples Jack Ma', 'Mukesh Ambani overtook Alibaba Group founder Jack Ma to become Asia’s richest person as he positions Reliance Industries Ltd. to disrupt the e-commerce space in India.', 1, 'http://localhost/First_CI_Procejct/upload/64978242_cms.jpg', '2020-04-15 01:33:35'),
(28, 'test', 'test', 1, '', '2020-04-15 01:33:35'),
(29, 'test new', 'How r U', 1, '', '2020-04-15 01:33:35'),
(30, 'test new gggg', 'Article one good', 4, 'http://localhost/First_CI_Procejct/upload/Screenshot_(1)5.png', '2020-04-15 01:33:35'),
(34, 'aaaa', 'dev new', 4, 'http://localhost/First_CI_Procejct/upload/pro4.jpg', '2020-04-15 01:33:35'),
(35, 'Devendra singh', 'dev hhhht have nice day\r\ngg', 4, 'http://localhost/First_CI_Procejct/upload/pro8.jpg', '2020-04-15 01:33:35'),
(36, 'Devendra singh', 'how r uuu', 4, 'http://localhost/First_CI_Procejct/upload/Screenshot_(2)1.png', '2020-04-15 01:33:35'),
(37, 'test new', 'ssss', 4, 'http://localhost/First_CI_Procejct/upload/Screenshot_(3)2.png', '2020-04-16 01:33:35'),
(38, 'khjkjkj', 'hfggg', 4, 'http://localhost/First_CI_Procejct/upload/Screenshot_(3)3.png', '2020-04-16 05:54:34'),
(39, 'Devendra singhcvcx', 'dasfd', 4, 'http://localhost/First_CI_Procejct/upload/Screenshot_(3)4.png', '2020-04-16 01:32:27'),
(40, 'test', 'dsd', 4, 'http://localhost/First_CI_Procejct/upload/Screenshot_(1)4.png', '2020-04-16 01:32:48'),
(41, 'Devendra singh', 'rrrrrrrrrrrr', 4, 'http://localhost/First_CI_Procejct/upload/Screenshot_(2)2.png', '2020-04-16 01:33:07'),
(42, 'testrrrr', 'dsad', 4, 'http://localhost/First_CI_Procejct/upload/Screenshot_(2)3.png', '2020-04-16 01:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`) VALUES
(1, 1, 'New York city'),
(2, 1, 'Buffalo'),
(3, 1, 'Albany'),
(4, 2, 'Birmingham'),
(5, 2, 'Montgomery'),
(6, 2, 'Huntsville'),
(7, 3, 'Los Angeles'),
(8, 3, 'San Francisco'),
(9, 3, 'San Diego'),
(10, 4, 'Toronto'),
(11, 4, 'Ottawa'),
(12, 5, 'Vancouver'),
(13, 5, 'Victoria'),
(14, 6, 'Sydney'),
(15, 6, 'Newcastle'),
(16, 7, 'City of Brisbane'),
(17, 7, 'Gold Coast'),
(18, 8, 'Bangalore'),
(19, 8, 'Mangalore'),
(20, 9, 'Hydrabad'),
(21, 9, 'Warangal');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'USA'),
(2, 'Canada'),
(3, 'Australia'),
(4, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `feedback1` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback1`) VALUES
(1, 'Ajay Suneja', 'ajay.suneja2@gmail.com', 'Good Job men.:-)'),
(2, 'Xyz', 'zyz@gmail.com', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `country_id`, `state_name`) VALUES
(1, 1, 'New York'),
(2, 1, 'Alabama'),
(3, 1, 'California'),
(4, 2, 'Ontario'),
(5, 2, 'British Columbia'),
(6, 3, 'New South Wales'),
(7, 3, 'Queensland'),
(8, 4, 'Karnataka'),
(9, 4, 'Telangana');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `email`) VALUES
(1, 'suneja', '123', 'ajay', 'suneja', 'ajay.suneja1993@gmail.com'),
(4, 'dev', '123456', 'Devendra', 'Singh', 'deve2403@gmail.com'),
(5, 'deve', '123', 'Devendra', 's', 'deve1111@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
