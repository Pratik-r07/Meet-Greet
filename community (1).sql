-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 07:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `community`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `pass` varchar(99) NOT NULL,
  `branch` varchar(99) NOT NULL,
  `uname` varchar(99) NOT NULL,
  `role` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `branch`, `uname`, `role`) VALUES
(1, 'ITSA', 'itsa123@gmail.com', '12345678', 'IT', 'admin\r\n', 'admin'),
(2, 'MESA', 'mesa123@gmail.com', 'mesa1234', 'mech', 'mesa', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `msg`, `commented_on`, `created_at`) VALUES
(26, 21104106, 'What is networking?', '2023-10-28', '2023-10-28 04:08:54'),
(27, 2110135, 'Can anyone give me the brief about ethical hacking?', '2023-10-28', '2023-10-28 04:25:22'),
(28, 21104045, 'can u provide some information about our club?', '2023-10-28', '2023-10-28 04:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `comments1`
--

CREATE TABLE `comments1` (
  `id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments1`
--

INSERT INTO `comments1` (`id`, `user_id`, `msg`, `commented_on`, `created_at`) VALUES
(1, 21104568, 'Hii', '2023-11-06', '2023-11-06 09:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `comments2`
--

CREATE TABLE `comments2` (
  `id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments3`
--

CREATE TABLE `comments3` (
  `id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies`
--

CREATE TABLE `comment_replies` (
  `id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `comment_id` int(99) NOT NULL,
  `reply_msg` varchar(99) NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_replies`
--

INSERT INTO `comment_replies` (`id`, `user_id`, `comment_id`, `reply_msg`, `commented_on`, `created_at`) VALUES
(11, 21104045, 26, 'connecting computers together to enable communication and data exchange', '2023-10-28', '2023-10-28 04:27:41'),
(12, 2110135, 26, 'connection of computer networks', '2023-10-28', '2023-10-28 07:50:04');

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies1`
--

CREATE TABLE `comment_replies1` (
  `id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `commented_id` int(11) NOT NULL,
  `reply_msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies2`
--

CREATE TABLE `comment_replies2` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `reply_msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment_replies3`
--

CREATE TABLE `comment_replies3` (
  `id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `comment_id` int(99) NOT NULL,
  `reply_msg` longtext NOT NULL,
  `commented_on` date NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(99) NOT NULL,
  `image` varchar(999) NOT NULL,
  `name` varchar(99) NOT NULL,
  `description` varchar(99) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL DEFAULT current_timestamp(),
  `location` varchar(99) NOT NULL,
  `community` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `image`, `name`, `description`, `date`, `time`, `location`, `community`) VALUES
(8, 'aicte.png', 'Treasure_hunt', 'ttttt', '2023-11-05', '23:56:00', 'seminar hall', 'ITSA'),
(13, 'Screenshot (190).png', 'ojus', 'ttttt', '2023-11-05', '22:18:00', 'seminar hall', 'MESA'),
(14, 'Screenshot (189).png', 'dw', 's', '2023-12-05', '22:19:00', 'seminar hall', 'CESA'),
(17, 'Screenshot (189).png', 'Pratik Rajvir', 'wd', '2023-12-08', '16:39:00', 'seminar hall', 'CSA'),
(19, 'Screenshot (190).png', 'Treasure_hunt', 'jjj', '2023-11-17', '17:48:00', 'seminar hall', 'ITSA'),
(20, 'Screenshot (190).png', 'Treasure_hunt', 'wd', '2023-12-01', '12:53:00', 'seminar hall', 'ITSA');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(99) NOT NULL,
  `id` int(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `phone` bigint(99) NOT NULL,
  `pass` varchar(99) NOT NULL,
  `branch` varchar(99) NOT NULL,
  `uname` varchar(99) NOT NULL,
  `role` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `id`, `email`, `phone`, `pass`, `branch`, `uname`, `role`) VALUES
('ITSA', 1, 'itsa123@gmail.com', 999999999999, '$2y$10$Ub4UtL0XH.wePErKt8sQOOZzuW3FCuqnDhTwpvkSSBlfkGlN/PM5O', 'IT', 'admin', 'admin'),
('Siddhi desale', 2110135, '21104135.siddhi.desale@gmail.com', 9090909090, '$2y$10$wZRfh6By5m9e4ly9RUQODeshxYk5yk1vCa07Ru.ug846Whe65TBEy', 'IT', 'Siddhi_Desale_TE', 'user'),
('siddhesh', 21104045, 'siddhesh.pednekar@gmail.com', 8888888888, '$2y$10$2ZsoV9BWahOmyI9gIMLkdeZcJJTreWwlK9eobIogQgt71AyehD7Vy', 'IT', 'siddhesh_pednekar_TE', 'user'),
('Pratik Rajvir', 21104106, 'pratikrajvir299@apsit.edu.in', 7506967703, '$2y$10$s1P/y1L0xSt4zGuNRgIKjeGs1kR.tde4FbUR.mioQXKIFBgLFW5ZW', 'IT', 'Pratik_Rajvir_TE', 'user'),
('Sanika', 21104110, '21104110.sanika.yadkikar@gmail.com', 999999999, '$2y$10$GDGKHxfEEOIIDNMN5cxkj.DzAZJ.wAv/5e5C7MH0SStOZM0L4KpXa', 'civil', 'sanika_yadkikar_TE', 'user'),
('Vedangi Patil', 21104568, 'veda.patil@gmail.com', 989562323, '$2y$10$UY9boent7yOBE7UAZBSrluulR1iNdCLV4g2yJeUfju4Ww8LNDUyOa', 'civil', 'Vedangi_Patil_TE', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments1`
--
ALTER TABLE `comments1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments2`
--
ALTER TABLE `comments2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments3`
--
ALTER TABLE `comments3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_replies`
--
ALTER TABLE `comment_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_replies1`
--
ALTER TABLE `comment_replies1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_replies2`
--
ALTER TABLE `comment_replies2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_replies3`
--
ALTER TABLE `comment_replies3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `comments1`
--
ALTER TABLE `comments1`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments2`
--
ALTER TABLE `comments2`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments3`
--
ALTER TABLE `comments3`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_replies`
--
ALTER TABLE `comment_replies`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comment_replies1`
--
ALTER TABLE `comment_replies1`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_replies2`
--
ALTER TABLE `comment_replies2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment_replies3`
--
ALTER TABLE `comment_replies3`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
