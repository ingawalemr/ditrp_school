-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 01:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ditrp_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `about_us` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_us`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to DITRP Learning School<br>\r\nOn her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.', '2021-12-20 04:03:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `admission_inquiry`
--

CREATE TABLE `admission_inquiry` (
  `id` int(11) NOT NULL,
  `admission_Class` varchar(255) NOT NULL,
  `admission_Year` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `accept_TC` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_inquiry`
--

INSERT INTO `admission_inquiry` (`id`, `admission_Class`, `admission_Year`, `first_name`, `middle_name`, `last_name`, `dob`, `age`, `gender`, `accept_TC`, `created_at`) VALUES
(1, '1st', '2022-23', 'Siddhesh', 'Mahadev', 'Ingawale', '2016-05-15', '6', 'Male', 1, '2021-12-20 17:06:32'),
(2, 'Nursery', '2021-22', 'Durve', 'Mahadev', 'Ingawale', '2018-01-21', '4', 'Female', 1, '2021-12-20 17:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `send_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email_id`, `subject`, `message`, `send_date`, `created_at`) VALUES
(2, 'mahadev Ingawale', 'ingawalemr12@yahoo.com', 'demo CONTACT INFO', 'test it', '2021-12-20', '2021-12-20 17:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `facility_name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `facility_name`, `time`, `discription`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Digital Classroom', '9:00am - 10am', 'Students 1 will understand the concepts and able to relate them to the real world.', 'digital-classroom.jpg', '2021-12-20 09:54:03', '2021-12-20 15:41:19'),
(2, 'Library & Labs', '9:00am - 10am', 'The students 2 make good use of library facilities and can read any book or journal that suits the reading tastes of different groups of children.', 'library.jpg', '2021-12-20 09:54:41', '0000-00-00 00:00:00'),
(3, 'Sports', '9:00am - 10am', 'Sports 3 for students are a perfect relaxation, a break from the routine of academics and alsoto relate them to the real world.', 'sports.jpg', '2021-12-20 09:55:28', '0000-00-00 00:00:00'),
(4, 'Hostel', '9:00am - 10am', 'Hostel 4 relaxation, a break from the routine of academics and alsoto relate them to the real world.', 'hostels.jpg', '2021-12-20 09:55:57', '0000-00-00 00:00:00'),
(5, 'Computer Lab', '9:00am - 10am', 'Computer Lab 5 a break from the routine of academics and alsoto relate them to the real world.', 'computer.jpg', '2021-12-20 09:56:23', '0000-00-00 00:00:00'),
(6, 'Health Care', '9:00am - 10am', 'Health Care 6 of academics and alsoto relate them to the real world.', 'health.png', '2021-12-20 09:57:01', '0000-00-00 00:00:00'),
(7, 'Communication Skill', '9:00am - 10am', 'Students will be trained in the 7 relate them to the real world.', 'skill.jpg', '2021-12-20 09:57:40', '0000-00-00 00:00:00'),
(8, 'Transport ', '9:00am - 10am', 'Our experienced professional drivers and caretakers on the bus make sure that students are 8 ate them to the real world.', 'bus.png', '2021-12-20 09:58:22', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `home_screen_banner`
--

CREATE TABLE `home_screen_banner` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `banner_details` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Dumping data for table `home_screen_banner`
--

INSERT INTO `home_screen_banner` (`id`, `images`, `banner_details`, `created_at`, `updated_at`) VALUES
(2, 'bg_3.jpg', 'Kids 1 Are The Best Explorers In The World', '2021-12-20 08:56:48', '2021-12-20 14:41:35'),
(3, 'bg_2.jpg', 'Perfect 2 Learned For Your Child', '2021-12-20 08:57:12', '2021-12-20 14:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `request_quote`
--

CREATE TABLE `request_quote` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `send_date` date NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_quote`
--

INSERT INTO `request_quote` (`id`, `name`, `email`, `course`, `mobile`, `message`, `subject`, `send_date`, `created_at`) VALUES
(1, 'mahadev', 'ingawalemr12@yahoo.com', 'Language Lesson', '9970410333', 'test msg', 'Contact Us - \'Request A Quote\' ', '2021-12-20', '2021-12-20 13:54:51'),
(2, 'mahadev123', 'maha1_company@gmail.com', 'Art Lesson', '9898989898', 'demo', 'Contact Us - \'Request A Quote\' ', '2021-12-20', '2021-12-20 17:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `name_title`, `photo`, `discription`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Racky Henderson', 'Father', 'teacher-5.jpg', 'Far 1 far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 1, '2021-12-20 05:26:49', '2021-12-20 11:38:16'),
(2, 'Henry Dee', 'Mother', 'teacher-2.jpg', 'Far 2 far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.', 1, '2021-12-20 05:27:31', '2021-12-20 11:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1:-Admin,2:-staff,3:-Student',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1:- active, 0:- Deactive',
  `is_active` int(11) NOT NULL DEFAULT 1 COMMENT '1:-active,0:-inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_inquiry`
--
ALTER TABLE `admission_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_screen_banner`
--
ALTER TABLE `home_screen_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_quote`
--
ALTER TABLE `request_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_inquiry`
--
ALTER TABLE `admission_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_screen_banner`
--
ALTER TABLE `home_screen_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_quote`
--
ALTER TABLE `request_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
