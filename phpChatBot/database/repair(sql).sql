-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 04:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` longtext NOT NULL,
  `reply` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hii', 'Hello, How may I help you?'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is Quanta'),
(4, 'My Phone Is Not Charging', 'If your phone is not accepting a charge, it could be because the USB port is dirty, the adapter is damaged, or the cable is worn out or incompatible with your phone. So, cleaning the USB port and buying a new adapter and cable can fix the issue in most cases.'),
(5, 'The Screen Is Not Bright Enough', 'To solve this problem you can go to General Settings, then to accessibility and after that click on Screen Adaptations. You will see an option to reduce the white point at the button so you can adapt the intensity of the colors until you consider is good for you.'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'hi', '2024-09-12 09:55:39', 'user'),
(2, 'Hello, How may I help you?', '2024-09-12 09:55:39', 'bot'),
(3, 'how to repair my iphone sound problem', '2024-09-12 09:56:24', 'user'),
(4, 'Sorry not be able to understand you', '2024-09-12 09:56:24', 'bot'),
(5, 'hi', '2024-09-16 08:09:12', 'user'),
(6, 'Hello, How may I help you?', '2024-09-16 08:09:12', 'bot'),
(7, 'hii', '2024-09-22 11:27:36', 'user'),
(8, 'Hello, How may I help you?', '2024-09-22 11:27:36', 'bot'),
(9, 'hii', '2024-09-22 11:27:43', 'user'),
(10, 'Hello, How may I help you?', '2024-09-22 11:27:43', 'bot'),
(11, 'who are u', '2024-09-22 11:27:53', 'user'),
(12, 'Sorry not be able to understand you', '2024-09-22 11:27:54', 'bot'),
(13, 'what is your name', '2024-09-22 11:29:19', 'user'),
(14, 'My name is Quanta', '2024-09-22 11:29:19', 'bot'),
(15, 'g', '2024-09-22 11:31:32', 'user'),
(16, 'If your phone is not accepting a charge, it could be because the USB port is dirty, the adapter is damaged, or the cable is worn out or incompatible with your phone. So, cleaning the USB port and buying a new adapter and cable can fix the issue in most cases.', '2024-09-22 11:31:32', 'bot'),
(17, 'hi', '2024-09-22 11:32:43', 'user'),
(18, 'Hello, How may I help you?', '2024-09-22 11:32:43', 'bot'),
(19, 'HII', '2024-09-22 11:38:33', 'user'),
(20, 'Hello, How may I help you?', '2024-09-22 11:38:33', 'bot'),
(21, 'J', '2024-09-22 11:39:10', 'user'),
(22, 'Sorry not be able to understand you', '2024-09-22 11:39:10', 'bot'),
(23, 'HI', '2024-09-22 11:42:53', 'user'),
(24, 'Hello, How may I help you?', '2024-09-22 11:42:53', 'bot'),
(25, 'K', '2024-09-22 11:44:15', 'user'),
(26, 'Sorry not be able to understand you', '2024-09-22 11:44:15', 'bot'),
(27, 'hii', '2024-09-22 11:47:33', 'user'),
(28, 'Hello, How may I help you?', '2024-09-22 11:47:33', 'bot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
