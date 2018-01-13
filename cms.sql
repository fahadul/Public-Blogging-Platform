-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2018 at 11:28 AM
-- Server version: 5.7.20-0ubuntu0.17.10.1
-- PHP Version: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`cat_id`, `cat_name`) VALUES
(1, 'PHP'),
(13, 'JavaScript'),
(14, 'ReactJS');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_cat_id` int(3) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_author` varchar(250) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tag` varchar(255) NOT NULL,
  `post_cmnt_cnt` varchar(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tag`, `post_cmnt_cnt`, `post_status`) VALUES
(1, 1, 'PHP is awesome for the beginner. ', 'Rajib Ahmed', '2018-01-09', 'php.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.', 'PHP,Programming,Beginner ', '1', 'draft'),
(2, 2, 'JavaScript: The next C in programming', 'Mridul Chowdhury', '2018-01-08', 'js.jpg', 'The carousel is a slideshow for cycling through a series of content, built with CSS 3D transforms and a bit of JavaScript. It works with a series of images, text, or custom markup. It also includes support for previous/next controls and indicators.', 'Js, Mridul, JavaScript', '2', 'draft'),
(3, 2, 'This is a test', 'Me', '2018-01-12', 'Screenshot from 2017-12-20 07-44-30.png', 'This is sort of a trick question sometimes asked at interviews. The short answer is:\r\nnothing.\r\nYou can name variables using $ anywhere in the name. Earlier ECMAScript standard\r\neditions recommended that $ should only be used in auto-generated code, a suggestion\r\ncommonly ignored by developers. In reality, $ is often used as the name of a function\r\nthat selects a DOM node in an HTML document.', 'Tag', '', 'published'),
(4, 1, 'A retest page', 'Me', '2018-01-12', 'Screenshot from 2017-12-20 12-15-07.png', 'This is a www-data permission checking test', 'Programming', '', 'publish'),
(5, 1, 'This is another test post', 'Mridul Chowdhury', '2018-01-12', 'Screenshot from 2018-01-07 13-38-18.png', 'If you want to significantly expand your web development skills beyond PHP, this practical, hands-on book teaches you ECMAScriptâ€”the core JavaScript languageâ€”from the ground up. Youâ€™ll discover some similarities between JavaScript and PHP, such as conditions and loops, but the primary focus is on JavaScriptâ€™s unique object creation, classes, prototypes, and inheritance.', 'Internet', '', 'published');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
