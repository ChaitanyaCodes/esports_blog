-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 04:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'League of Legends'),
(2, 'Valorant'),
(3, 'Call of Duty: Mobile'),
(4, 'Tournaments'),
(5, 'Partnerships'),
(6, 'PUBG Mobile'),
(7, 'CS-GO'),
(8, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `feedback_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`feedback_id`, `f_name`, `l_name`, `email`, `message`) VALUES
(1, 'hello', 'world', 'lenettepet@gmail.com', 'this is sak');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `category` int(50) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_content` longtext NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `blog_date` datetime NOT NULL,
  `fb_link` tinytext DEFAULT NULL,
  `insta_link` tinytext DEFAULT NULL,
  `twit_link` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `category`, `blog_title`, `blog_content`, `author_name`, `thumbnail`, `blog_date`, `fb_link`, `insta_link`, `twit_link`) VALUES
(5, 4, ' Welcome PUBG Mobile', '<p>PUBG Mobile is one of the most prominent games on the mobile platform. Over the period, the game has seen a major rise in its playerbase. The title has found a special place in the heart of many Indian users.\r\n\r\nHowever, this year hasn’t been the best for the Indian PUBG Mobile players as the game was among the list of 118 apps that were banned by the Ministry of Electronics and Information Technology. Since then, they’ve been eagerly waiting for its return.\r\n\r\nAround a week ago, PUBG Corporation announced a particular version of PUBG Mobile for users in India. The players have been over the moon about the game\'s revival in the country. In the press release, they further mentioned that there would be specific changes in PUBG Mobile India</p>', 'Livio', '', '2020-11-20 16:53:42', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com'),
(6, 2, ' sample title img', '<p>this is an sample content</p>', 'hello', '5fc108ee5ce4a8.59038630.jpg', '2020-11-27 15:10:54', 'm.facebook.com', 'm.instagram.com', 'www.twitter.com'),
(7, 1, ' insert sample title ', 'sample post', 'php', '5fc10d3f86b905.93933415.jpg', '2020-11-27 15:29:19', 'm.facebook.com', 'm.instagram.com', 'www.twitter.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
