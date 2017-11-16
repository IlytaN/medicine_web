-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2017 at 10:17 PM
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
-- Database: `drugstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE `lists` (
  `id` int(10) NOT NULL,
  `m_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `m_id`, `u_id`) VALUES
(1, 1, 2),
(139, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `img`, `description`) VALUES
(1, 'paracetamol', 'http://www.relonchem.com/images/product_range/Paracetamol500mg_100_packshot.png', 'Paracetamol (acetaminophen) is a pain reliever and a fever reducer'),
(2, 'vitaminC', 'http://images.hollandandbarrettimages.co.uk/productimages/HB/370/001820_A.png', 'Vitamin C is a water-soluble vitamin. It is needed for normal growth and development.\r\n\r\nWater-soluble vitamins dissolve in water. Leftover amounts of the vitamin leave the body through the urine.'),
(3, 'VitaminA', 'https://static1.squarespace.com/static/57104b2bb6aa6077ccaf6902/577597c3b3db2bd4c8389146/577597c5414fb5cf1662c600/1469216653999/NOW-00342-5.jpg', 'Vitamin A helps cells reproduce normally – a process called differentiation. Cells that have not properly differentiated are more likely to undergo precancerous. Vitamin A, by maintaining healthy cell membranes, helps prevent infections.'),
(4, 'vitaminC', 'https://d3r2zleywq7959.cloudfront.net/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/8/6/8686_xlarge_2.jpg', 'Vitamin C helps to repair and regenerate tissues, protect against heart disease, aid in the absorption of iron, prevent scurvy, and decrease total and LDL (“bad”) cholesterol and triglycerides. ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `status`, `description`) VALUES
(1, 'user1', 'u', 'dsfs@dfsdf.fds', '1234', 'qw', 'hdfsohoifhosidhfohdfoahfoihasoifhsoifhaofhoshfo'),
(2, 'huong', 'nguyen', 'nguyenquynhhuong2305@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', 'sdasdagesggggggggggggggggggggggggggg'),
(5, 'test', 'user', 'testuser@mydit.ie', '5f4dcc3b5aa765d61d8327deb882cf99', '0', 'I changed my desc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lists`
--
ALTER TABLE `lists`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `lists`
--
ALTER TABLE `lists`
  ADD CONSTRAINT `m_id` FOREIGN KEY (`m_id`) REFERENCES `medicines` (`id`),
  ADD CONSTRAINT `u_id` FOREIGN KEY (`u_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
