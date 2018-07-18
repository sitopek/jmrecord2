-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 08:47 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joombo`
--

-- --------------------------------------------------------

--
-- Table structure for table `up_files`
--

CREATE TABLE `up_files` (
  `id` int(11) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(200) NOT NULL,
  `fdesc` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `up_files`
--

INSERT INTO `up_files` (`id`, `floc`, `fdatein`, `fdesc`, `name`) VALUES
(1, 'uploads/8306_File_New Text Document.txt', '2012-12-17 14:45:40', 'text document', ''),
(2, 'uploads/4753_File_bethel 5 LOGO.png', '2012-12-17 14:46:04', 'picture', ''),
(4, 'uploads/8353_File_IMG_3052.JPG', '2017-06-05 10:05:26', 'qweqw', ''),
(5, 'uploads/9413_File_123.txt', '2017-06-05 10:11:24', 'asd213', ''),
(6, 'uploads/7689_File_3049_File_MUHD TAUFIQ.docx', '2017-06-05 10:12:17', '@@@', ''),
(8, '9760_File_Surat cuti.docx', '2017-06-05 10:26:18', '5555', ''),
(9, 'uploads/9111_File_asd.txt', '2017-06-05 10:31:55', 'qweqwe', ''),
(12, 'uploads/5504_File_asd.jpg', '2017-06-05 10:38:21', 'zxxcz', 'asd.jpg'),
(13, 'uploads/1311_File_asd.jpg', '2017-06-05 15:39:37', 'hello', 'asd.jpg'),
(14, 'uploads/1546_File_asd.jpg', '2017-06-05 15:56:48', '6654', 'asd.jpg'),
(15, 'uploads/5755_File_Surat cuti.docx', '2017-06-05 15:59:15', 'uyyu', 'Surat cuti.docx'),
(16, 'uploads/7589_File_akmalreusme.txt', '2017-06-05 16:01:00', 't5t5', 'akmalreusme.txt'),
(17, 'uploads/3087_File_asd.txt', '2017-06-05 16:16:43', 'ooooo', 'asd.txt'),
(18, 'uploads/2511_File_gg.jpg', '2017-11-28 17:20:03', 'asd', 'gg.jpg'),
(19, 'uploads/1598_File_gg.jpg', '2017-11-28 17:48:03', '', 'gg.jpg'),
(20, 'uploads/3516_File_new logo JMM.jpg', '2017-11-30 12:31:18', 'asdasd', 'new logo JMM.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `up_files`
--
ALTER TABLE `up_files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `up_files`
--
ALTER TABLE `up_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
