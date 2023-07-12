-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 04:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookwyrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `subtitle` varchar(150) DEFAULT NULL,
  `author` varchar(100) NOT NULL,
  `pages` int(11) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `condition` enum('reading','planning','completed','dropped') NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`id`, `title`, `subtitle`, `author`, `pages`, `year`, `rating`, `condition`, `updated_at`, `created_at`) VALUES
(24, 'The Subtle Art of Not Giving A F*ck', 'a counterintuitive approach to living a good life', 'Mark Manson', NULL, 2016, 4, 'completed', '2023-07-12', '2023-07-10'),
(25, 'Physchology', 'Themes and Variation', 'Wayne Weiten', NULL, 1989, NULL, 'planning', '2023-07-10', '2023-07-10'),
(26, 'Believarexic', NULL, 'J.J. Johnson', 464, 2015, NULL, 'planning', '2023-07-12', '2023-07-10'),
(27, 'Bumi', NULL, 'Tere Liye', NULL, NULL, NULL, 'reading', '2023-07-12', '2023-07-10'),
(28, 'Sirkus Pohon', NULL, 'Andrea Hirata', 383, 2018, 5, 'planning', '2023-07-12', '2023-07-10'),
(29, 'Huh?', NULL, 'Haha', NULL, NULL, 5, 'completed', '2023-07-12', '2023-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `library_info`
--

CREATE TABLE `library_info` (
  `id` int(11) NOT NULL,
  `library_name` varchar(200) NOT NULL,
  `library_url` varchar(200) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library_info`
--

INSERT INTO `library_info` (`id`, `library_name`, `library_url`, `created_at`, `updated_at`) VALUES
(1, 'OpenLibrary', 'https://openlibrary.org', '2023-07-10', '2023-07-10'),
(2, 'Internet Archive', 'https://archive.org', '2023-07-10', '2023-07-10'),
(4, 'Project Gutenberg', 'https://www.gutenberg.org', '2023-07-10', '2023-07-10'),
(5, 'Feedbooks', 'https://www.feedbooks.com', '2023-07-10', '2023-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_info`
--
ALTER TABLE `library_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `library_info`
--
ALTER TABLE `library_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
