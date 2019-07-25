-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2019 at 04:04 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adress`
--

CREATE TABLE `adress` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_code` int(11) NOT NULL,
  `country` varchar(2) NOT NULL,
  `city` varchar(64) NOT NULL,
  `street` varchar(64) NOT NULL,
  `house_number` varchar(64) NOT NULL,
  `flat_number` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adress`
--

INSERT INTO `adress` (`id`, `user_id`, `post_code`, `country`, `city`, `street`, `house_number`, `flat_number`) VALUES
(2, 30, 1343213, '12', '1343213', 'asdfsd', '1231', '1231');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1563915194),
('m190723_200522_addUserTable', 1563956431),
('m190723_201057_addAdressTable', 1563956431),
('m190725_082553_addColumnUser', 1564043302);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(64) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(64) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `sex` varchar(64) NOT NULL,
  `date_add` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `surname`, `sex`, `date_add`, `email`) VALUES
(1, 'vadimus', 'vadimm0832', 'Vadim', 'Meln', '2', '2019-07-24 14:29:06', 'vadimua757@gmail.com'),
(2, 'twsw34r', 'aw 3cts4grcsw4xf', 'Afzxcsd', 'AWEFQAdv', '0', '2019-07-24 20:14:45', 'Asdf`@asdf.asd'),
(9, 'vadimusqwsa', 'vadimm0832', 'Vadim', 'Meln', '2', '2019-07-24 14:29:06', 'vadimua123757@gmail.com'),
(10, 'twsw34r12', 'aw 3cts4grcsw4xf', 'Afzxcsd', 'AWEFQAdv', '0', '2019-07-24 20:14:45', 'Asdf`@a132sdf.asd'),
(11, 'awes', '3wefsawesfda', 'ASdaszc', 'Asdfs', '1', '2019-07-25 10:25:49', 'avsd@asdc.awe'),
(12, 'awt23wte', 'awfsedsz', 'ASfda', 'ASfszda', '0', '2019-07-25 10:41:32', 'ASdcas@vads.ad'),
(17, 'vaaaaa', '123rweadaws', 'VAsd', 'Asdsa', '0', '2019-07-25 11:02:47', 'qwads@asdf.q2w'),
(25, 'aaaaaaaaa', 'qwertarwrefs', 'Asda', 'ASdasdas', '2', '2019-07-25 12:08:21', 'asd@asd.yt'),
(30, 'Vsasda', 'asdasdasd', 'Asda', 'Adsda', '2', '2019-07-25 12:18:52', 'asd@asd.dfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adress_user_id` (`user_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adress`
--
ALTER TABLE `adress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adress`
--
ALTER TABLE `adress`
  ADD CONSTRAINT `adress_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
