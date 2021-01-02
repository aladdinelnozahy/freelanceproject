-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 07:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_message` text DEFAULT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_message`, `f_id`) VALUES
(1, 'test', 'test@email.com', 'test', 2),
(2, 'test', 'test@test.com', 'test', 2),
(4, 'test', 'test@test.com', 'test', 2),
(5, 'test', 'test@test.com', 'test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `create_users`
--

CREATE TABLE `create_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_users`
--

INSERT INTO `create_users` (`id`, `username`, `email`, `name`, `phone`, `pass`, `role`) VALUES
(7, 'Aladdin Elnozahy', 'aladdin.elnozahy@gmail.com', 'Aladdin Elnozahy', '01148223413', 'asd', 0),
(8, 'abdo', 'abdo@gmail.com', 'abdo', '01246534642', 'asd', 1),
(9, 'raze', 'raze@gmail', 'raze', '0555', 'asd', 1),
(18, 'zewail', 'zewail@gmail', 'zewail', '07777777', 'asd', 1),
(19, 'lelo', 'lelo@gmail.com', 'lol', '0100001', 'asd', 2);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `f_id` int(11) DEFAULT NULL,
  `Skills` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `f_id`, `Skills`) VALUES
(1, 3, 'Office'),
(2, 2, 'PHP'),
(3, 4, 'Word'),
(4, 2, 'SQL'),
(5, 2, 'laravel'),
(6, 2, 'python');

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `f_job` varchar(50) NOT NULL,
  `f_phone` int(11) DEFAULT NULL,
  `pass` varchar(100) NOT NULL,
  `f_email` varchar(20) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`f_id`, `f_name`, `f_job`, `f_phone`, `pass`, `f_email`, `photo`, `description`) VALUES
(1, 'emad', 'Front-End Developer', 1112131415, 'asd', 'emad@email.com', NULL, 'Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or to perform a specific task. Programming involves tasks such as: analysis, generating algorithms, profiling algorithms\' accuracy and resource consumption, and the implementation of algorithms in a chosen programming language (commonly referred to as coding).[1][2] The source code of a program is written in one or more languages that are intelligible to programm'),
(2, 'Aladdin Elnozahy', 'Full Stack Developer', 1148223413, 'asd', 'aladdin.elnozahy@gma', NULL, 'Seeking a new challenge by attempting to join the IT field as an intern or a junior web developer. I am very keen and passionate about Technology which got me off the agriculture field and on to the information technology sector. I am a self-learner who started learning web development on his own and I seek to expand my learning, knowledge, and skills by joining an internship or an actual employment opportunity. \r\n\r\n'),
(3, 'wahed', 'Graphic Designer', 1222222222, 'asd', 'wahed@email.com', NULL, 'Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or to perform a specific task. Programming involves tasks such as: analysis, generating algorithms, profiling algorithms\' accuracy and resource consumption, and the implementation of algorithms in a chosen programming language (commonly referred to as coding).[1][2] The source code of a program is written in one or more languages that are intelligible to programmers, rather than machine code, which is directly executed by the central processing unit. The purpose of programming is to find a sequence of instructions that will automate the performance of a task (which can be as complex as an operating system) on a computer, often for solving a given problem. Proficient programming thus often requires expertise in several different subjects, including knowledge of the application domain, specialized algorithms, and formal logic.\r\n\r\n'),
(4, 'yasmine', 'Business Analyst', 1111111111, 'asd', 'yasmie@gmail', NULL, 'Computer programming is the process of designing and building an executable computer program to accomplish a specific computing result or to perform a specific task. Programming involves tasks such as: analysis, generating algorithms, profiling algorithms\' accuracy and resource consumption, and the implementation of algorithms in a chosen programming language (commonly referred to as coding).[1][2] The source code of a program is written in one or more languages that are intelligible to programmers, rather than machine code, which is directly executed by the central processing unit. The purpose of programming is to find a sequence of instructions that will automate the performance of a task (which can be as complex as an operating system) on a computer, often for solving a given problem. Proficient programming thus often requires expertise in several different subjects, including knowledge of the application domain, specialized algorithms, and formal logic.\r\n\r\n'),
(20, 'walaa', 'business analyst', 1534, 'asd', 'walaa@gmail', 'avatar-367-456319.png', 'hello world ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `Foreign key` (`f_id`);

--
-- Indexes for table `create_users`
--
ALTER TABLE `create_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`f_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `create_users`
--
ALTER TABLE `create_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`f_id`) REFERENCES `freelancers` (`f_id`);

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `freelancers` (`f_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
